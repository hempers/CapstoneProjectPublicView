# Docker Installation Guide for Windows

This guide will help you install Docker Desktop for Windows, which includes Docker Compose.

## Prerequisites

- Windows 10 64-bit: Pro, Enterprise, or Education (Build 18362 or later)
- Virtualization must be enabled in your system's BIOS

## Installation Steps

1. **Download Docker Desktop for Windows**
   - Visit [https://www.docker.com/products/docker-desktop](https://www.docker.com/products/docker-desktop)
   - Click on "Download for Windows"

2. **Run the installer**
   - Double-click the downloaded Docker Desktop Installer.exe
   - Follow the installation wizard prompts
   - When prompted, ensure the "Use WSL 2 instead of Hyper-V" option is selected (recommended)

3. **Start Docker Desktop**
   - After installation, search for "Docker Desktop" in the start menu and open it
   - The Docker icon will appear in the system tray showing the Docker Desktop is starting

4. **Verify the installation**
   - Open a new PowerShell window and run these commands to verify Docker and Docker Compose are properly installed:
   ```
   docker --version
   docker compose --version
   ```

## Alternative: Using Docker Compose as a standalone binary

If you prefer not to install Docker Desktop or are having issues, you can install Docker Compose as a standalone binary:

1. **Install Docker Engine for Windows** (if not already installed)
   - Follow the Docker Engine installation instructions for Windows

2. **Install Docker Compose**
   - Open PowerShell as Administrator
   - Run the following command:
   ```
   [Net.ServicePointManager]::SecurityProtocol = [Net.SecurityProtocolType]::Tls12
   Invoke-WebRequest "https://github.com/docker/compose/releases/latest/download/docker-compose-Windows-x86_64.exe" -UseBasicParsing -OutFile $Env:ProgramFiles\Docker\docker-compose.exe
   ```

3. **Verify the installation**
   ```
   docker-compose --version
   ```

## Using Docker Compose with the modern V2 syntax

Note that newer Docker installations use `docker compose` (with a space) instead of `docker-compose`. Both should work, but the V2 syntax is recommended:

```
docker compose up -d
```

instead of 

```
docker-compose up -d
```

## Troubleshooting

- If Docker Desktop doesn't start, ensure that virtualization is enabled in your BIOS
- If you're getting permission errors, run PowerShell as Administrator
- If you're still having issues with Docker Compose, you can try installing it via pip:
  ```
  pip install docker-compose
  ```

After completing the installation, restart your PowerShell window and try running your docker commands again.
