# Run Laravel without Docker

# Function to check if a command exists
function Test-CommandExists {
    param ($command)
    $oldPreference = $ErrorActionPreference
    $ErrorActionPreference = 'stop'
    try { if (Get-Command $command) { $true } }
    catch { $false }
    finally { $ErrorActionPreference = $oldPreference }
}

# Check if PHP is installed
if (-not (Test-CommandExists php)) {
    Write-Host "PHP is not installed or not in PATH. Please install PHP before continuing." -ForegroundColor Red
    exit 1
}

# Check if Composer is installed
if (-not (Test-CommandExists composer)) {
    Write-Host "Composer is not installed or not in PATH. Please install Composer before continuing." -ForegroundColor Red
    exit 1
}

# Check if Node.js is installed
if (-not (Test-CommandExists node)) {
    Write-Host "Node.js is not installed or not in PATH. Please install Node.js before continuing." -ForegroundColor Red
    exit 1
}

# Install PHP dependencies
Write-Host "Installing PHP dependencies..." -ForegroundColor Yellow
composer install

# Install Node.js dependencies
Write-Host "Installing Node.js dependencies..." -ForegroundColor Yellow
npm install

# Build assets
Write-Host "Building assets..." -ForegroundColor Yellow
npm run build

# Generate application key if not already generated
if (-not (Select-String -Path ".env" -Pattern "APP_KEY=base64:")) {
    Write-Host "Generating application key..." -ForegroundColor Yellow
    php artisan key:generate
}

# Run migrations
Write-Host "Running migrations..." -ForegroundColor Yellow
php artisan migrate

# Start the server
Write-Host "Starting Laravel server on http://localhost:8000..." -ForegroundColor Green
php artisan serve
