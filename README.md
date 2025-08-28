# Project Setup Instructions

This project is a PHP demo eshop web application that requires XAMPP to run locally. Follow the instructions below to set up and run the project on your local machine.

## Prerequisites

- Windows, macOS, or Linux operating system
- Internet connection for downloading XAMPP

## Step 1: Download and Install XAMPP

1. **Download XAMPP:**
   - Go to [https://www.apachefriends.org/](https://www.apachefriends.org/)
   - Click on "Download" 
   - Select the version compatible with your operating system (Windows, macOS, or Linux)
   - Download the latest stable version

2. **Install XAMPP:**
   - Run the downloaded installer
   - Follow the installation wizard
   - **Important:** Make sure to select at least these components:
     - Apache
     - MySQL
     - PHP
     - phpMyAdmin
   - Choose the installation directory (default is usually fine)
   - Complete the installation process

## Step 2: Start XAMPP Services

1. **Launch XAMPP Control Panel:**
   - On Windows: Find XAMPP in Start Menu or desktop
   - On macOS: Open Applications → XAMPP
   - On Linux: Run XAMPP from terminal or applications menu

2. **Start Required Services:**
   - Click "Start" next to **Apache**
   - Click "Start" next to **MySQL**
   - Both should show green "Running" status

## Step 3: Set Up the Project Files

1. **Locate XAMPP htdocs folder:**
   - **Windows:** `C:\xampp\htdocs\`
   - **macOS:** `/Applications/XAMPP/htdocs/`
   - **Linux:** `/opt/lampp/htdocs/`

2. **Copy Project Files:**
   - Download/clone this project
   - Copy the entire project folder to the `htdocs` directory
   - Example: If your project is named "eshop", place it at `htdocs/eshop/`

## Step 4: Set Up the Database

1. **Access phpMyAdmin:**
   - Open your web browser
   - Go to: `http://localhost/phpmyadmin`
   - This opens the phpMyAdmin interface

2. **Create Database:**
   - Click on "Databases" tab
   - Create a new database (note the name you choose)
   - Click "Create"

3. **Import Database:**
   - Select your newly created database from the left sidebar
   - Click on "Import" tab
   - Click "Choose File" and select the `eshop.sql` file from the project folder
   - Click "Go" or "Import" to execute the SQL file
   - You should see a success message

## Step 5: Configure Database Connection

1. **Locate Configuration File:**
   - Look for a configuration file in your project:
     - `db.php`

2. **Update Database Settings:**
   - Open the configuration file in a text editor
   - Update the database connection parameters:
   ```php
   $host = "localhost";
   $username = "root";
   $password = "";  // Leave empty for default XAMPP
   $database = "your_database_name";  // Use the name you created
   ```

## Step 6: Access the Application

1. **Open Web Browser:**
   - Go to: `http://localhost/your-project-folder-name/`
   - Example: `http://localhost/eshop/`

2. **Test the Application:**
   - The homepage should load without errors
   - Test database functionality (login, registration, etc.)

## Troubleshooting

### Common Issues:

**Apache/MySQL won't start:**
- Check if ports 80 (Apache) or 3306 (MySQL) are being used by other applications
- Try changing ports in XAMPP Config
- Restart XAMPP as administrator

**Database connection errors:**
- Verify database name, username, and password in config file
- Ensure MySQL service is running
- Check if database was imported correctly

**404 Not Found errors:**
- Verify project folder is in the correct htdocs directory
- Check file and folder names for typos
- Ensure index.php exists in the project root


### Getting Help:

- Check XAMPP logs in the Control Panel
- Verify PHP errors by enabling error reporting
- Ensure all project files are properly uploaded


---

**Need help?** If you encounter any issues, please check the troubleshooting section above or create an issue in the project repository.
