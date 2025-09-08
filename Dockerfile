FROM php:8.2-fpm

# Set working directory
WORKDIR /var/www/html

# Install dependencies
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    locales \
    zip \
    jpegoptim optipng pngquant gifsicle \
    vim \
    unzip \
    git \
    curl \
    libzip-dev \
    libonig-dev \
    libsqlite3-dev

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install extensions
RUN docker-php-ext-install pdo pdo_sqlite mbstring zip exif pcntl
RUN docker-php-ext-install gd

# Install composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy project files
COPY . /var/www/html/

# Set permissions
RUN chown -R www-data:www-data /var/www/html

# Copy .env.example for Laravel setup
COPY .env.example.production .env

# Install project dependencies
RUN composer install --optimize-autoloader --no-dev

# Set up Laravel (but don't generate key since Render will set it via env vars)
RUN php artisan config:clear
RUN php artisan cache:clear

# Create SQLite database file if using SQLite
RUN touch database/database.sqlite
RUN chmod 777 database/database.sqlite

# Run migrations (commented out - usually best to run these after deployment)
# RUN php artisan migrate --force

# Install Node.js and npm
RUN curl -sL https://deb.nodesource.com/setup_18.x | bash -
RUN apt-get install -y nodejs

# Install frontend dependencies and build assets
RUN npm install
RUN npm run build

# Expose port for the application (Render will set the PORT env var)
EXPOSE ${PORT:-8000}

# Create start script for Render.com
RUN echo '#!/bin/bash\n\
php artisan config:cache\n\
php artisan route:cache\n\
php artisan view:cache\n\
php artisan migrate --force\n\
php artisan serve --host=0.0.0.0 --port=${PORT:-8000}' > /var/www/html/start.sh

RUN chmod +x /var/www/html/start.sh

# Start PHP server using the script
CMD ["/var/www/html/start.sh"]
