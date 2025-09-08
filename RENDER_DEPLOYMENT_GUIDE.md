# Render.com Deployment Guide

This guide explains how to deploy your Laravel application to Render.com using Docker without requiring Docker Compose locally.

## Step-by-Step Deployment Instructions

### 1. Prepare Your Repository

Ensure your GitHub repository contains:
- Your Laravel application code
- The `Dockerfile` (already created)
- `.dockerignore` file (already created)
- `render.yaml` file (already created)

### 2. Create a Web Service on Render.com

1. **Sign up or log in to Render.com**
   - Visit [https://dashboard.render.com/](https://dashboard.render.com/)

2. **Create a new Web Service**
   - Click "New" and select "Web Service"
   - Connect your GitHub repository
   - Select the repository and branch you want to deploy

3. **Configure the Web Service**
   - Name: `capstone-project` (or any name you prefer)
   - Environment: Select "Docker"
   - Region: Choose the region closest to your users
   - Branch: Select your branch (e.g., "w/apiv2")
   - Plan: Select your plan (Free tier is available)
   - Click "Create Web Service"

### 3. Set Environment Variables

In the Render.com dashboard, navigate to your web service and go to "Environment":

Add these environment variables:
- `APP_KEY`: Run `php artisan key:generate --show` locally and use the output
- `APP_ENV`: `production`
- `APP_DEBUG`: `false`
- `APP_URL`: Will be your Render.com URL (add after first deployment)
- `DB_CONNECTION`: `sqlite` (unless you're using a different database)

### 4. Deploy

1. Click on "Manual Deploy" > "Deploy latest commit"
2. Render will build and deploy your application using the Dockerfile

### 5. Post-Deployment

After the first successful deployment:
1. Get your application URL from the Render.com dashboard
2. Update the `APP_URL` environment variable with this URL
3. Trigger another deployment to apply the URL change

## Troubleshooting

### Common Issues:

1. **Application Key Issues**
   - Error: "No application encryption key has been specified"
   - Solution: Make sure you've set the `APP_KEY` environment variable

2. **Database Migration Issues**
   - Error: Database-related errors during deployment
   - Solution: Ensure the SQLite database file exists and is writable

3. **Storage Permission Issues**
   - Error: "The directory must be writable"
   - Solution: Run `php artisan storage:link` after deployment via SSH

4. **White Screen or 500 Error**
   - Solution: Check the logs in the Render.com dashboard

## Monitoring and Logs

- View logs in the Render.com dashboard under the "Logs" tab
- Set up alerts for deployment failures or application errors

## Scaling Your Application

- Render.com allows you to scale your application as needed
- You can upgrade your plan for more resources
- Consider setting up a database service for production use

## Database Considerations

- The current setup uses SQLite, which is fine for small applications
- For production, consider using a managed database service
- Render.com offers PostgreSQL as a managed service

## Conclusion

Your Laravel application is now deployed on Render.com using Docker. If you have any issues, check the logs in the Render.com dashboard or reach out to Render.com support.
