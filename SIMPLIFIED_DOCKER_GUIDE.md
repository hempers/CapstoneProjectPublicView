# Simplified Docker Deployment Guide for Render.com

Since you're encountering issues with Docker Compose locally, here's a simplified approach to deploying your Laravel application to Render.com using Docker.

## Option 1: Deploy using Docker without local testing

1. **Push your code with the Dockerfile to your GitHub repository**
   - The Dockerfile I created earlier is all you need for Render.com

2. **Sign up or log in to Render.com**

3. **Create a new Web Service**
   - Click on "New+" and select "Web Service"
   - Connect your GitHub repository
   - Select "Docker" as the environment
   - Configure environment variables as needed (see `.env.example.production`)
   - Deploy the service

## Option 2: Install Docker Desktop

Follow the instructions in the `DOCKER_INSTALLATION.md` file I created to properly install Docker Desktop, which includes Docker Compose.

After installation, you can test your Docker setup locally with:

```powershell
# Using Docker Compose V2 syntax
docker compose up -d
```

## Option 3: Run without Docker for local development

I've created a PowerShell script that will run your Laravel application locally without Docker:

```powershell
# Make sure to run in an elevated PowerShell window
.\run-local.ps1
```

This will set up and run your Laravel application on http://localhost:8000.

## Testing your Dockerfile without Docker Compose

If you want to test your Dockerfile directly without Docker Compose:

```powershell
# Build the Docker image
docker build -t capstone-app .

# Run the container
docker run -p 8000:8000 -d capstone-app
```

Remember to install Docker Desktop first before running these commands.
