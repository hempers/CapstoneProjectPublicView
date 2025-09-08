# Deploying to Render.com with Docker

This guide explains how to deploy your Laravel application to Render.com using Docker.

## Prerequisites

- A Render.com account
- Your Laravel project with Docker configuration (already set up in this repo)

## Deployment Steps

1. **Sign up or log in to Render.com**

2. **Create a new Web Service**
   - Click on "New+" in the dashboard and select "Web Service"
   - Connect your GitHub/GitLab repository or use the manual deploy option

3. **Configure your Web Service**
   - Name: Choose a name for your application
   - Environment: Select "Docker"
   - Branch: Select your main branch (or the branch you want to deploy)
   - Region: Choose the region closest to your target audience
   - Plan: Select your preferred plan (Free or paid)

4. **Environment Variables**
   - Add the necessary environment variables from your `.env.example.production` file
   - Make sure to set:
     - `APP_KEY`: Run `php artisan key:generate --show` locally to generate a key
     - `APP_ENV`: Set to "production"
     - `APP_DEBUG`: Set to "false"
     - `APP_URL`: Your Render.com application URL (will be available after first deploy)
     - `DB_CONNECTION`: Set to "sqlite" or configure for another database service

5. **Advanced Configuration**
   - Health Check Path: `/`
   - Auto Deploy: Enable if you want automatic deployments on git push

6. **Click "Create Web Service"**
   - Render will use your Dockerfile to build and deploy your application

## Post-Deployment

After the first deployment, you should:

1. Update the `APP_URL` environment variable with your actual Render.com URL
2. If using SQLite, make sure your database is properly seeded

## Local Development with Docker

To run the application locally with Docker:

```bash
docker-compose up -d
```

This will start your Laravel application on http://localhost:8000.

## Troubleshooting

- **Storage Permissions**: If you encounter permission issues, you may need to update the Dockerfile to set proper permissions for the storage directory.
- **Database Issues**: If using SQLite, make sure the database file exists and has proper permissions.
- **Environment Variables**: Double-check that all necessary environment variables are correctly set in the Render.com dashboard.
