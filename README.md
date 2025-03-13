# Quizller Project Documentation

## Table of Contents
1. [Introduction](#introduction)
2. [Features](#features)
3. [Technology Stack](#technology-stack)
4. [Project Structure](#project-structure)
5. [Installation](#installation)
6. [Configuration](#configuration)
7. [Usage](#usage)
8. [UX/UI Hints System](#uxui-hints-system)
9. [Security](#security)
10. [Database](#database)
11. [API Endpoints](#api-endpoints)
12. [Troubleshooting](#troubleshooting)
13. [Contributing](#contributing)

## Introduction
Quizller is a comprehensive quiz management system designed for educational institutions and organizations. It provides tools for creating, managing, and taking quizzes with a focus on security, scalability, and user experience.

## Features
- Admin panel for quiz management
- Student quiz interface
- Real-time quiz statistics
- Random password generation
- PDF report generation
- UX/UI hints system
- Dark mode support
- Secure authentication
- Database backup and restore

## Technology Stack
- **Frontend**: HTML5, CSS3, JavaScript, Bootstrap 5
- **Backend**: PHP 8+
- **Database**: MySQL
- **Tools**: Vite, Font Awesome

## Project Structure
```
/home/project/
├── admin/               # Admin panel files
├── app/                 # MVC application structure
├── config/              # Configuration files
├── css/                 # Stylesheets
├── database/            # Database scripts and migrations
├── files/               # Core application files
├── fonts/               # Font assets
├── includes/            # Shared utilities and libraries
├── js/                  # JavaScript files
├── vendor/              # Third-party libraries
├── index.php            # Main entry point
├── package.json         # NPM dependencies
└── README.md            # Project overview
```

## Installation
1. Clone the repository
2. Set up a web server with PHP and MySQL
3. Import database schema from `database/script.sql`
4. Install dependencies: `npm install`
5. Configure database connection in `database/config.php`

## Configuration
Edit the following configuration files:
- `database/config.php` - Database credentials
- `includes/security.php` - Security settings
- `config/database.php` - Database connection settings

## Usage
### Admin Panel
- Access: `/admin`
- Default credentials: admin/nimda
- Features:
  - Create and manage quizzes
  - Add classes and students
  - View statistics
  - Generate reports

### Student Interface
- Access: `/`
- Features:
  - Take quizzes
  - View results
  - Access hints and help

## UX/UI Hints System
The hint system provides contextual help throughout the application:
- **Implementation**: Uses data-hint attributes and tooltips
- **Activation**: Hover over question mark icons
- **Customization**: Edit hints in HTML elements
- **Styling**: Defined in `css/main.css`
- **Behavior**: Managed by `js/app.js`

## Security
- PDO database connections
- CSRF token protection
- Input validation and sanitization
- Secure password hashing
- Session management
- Error logging

## Database
### Main Tables
- `classes` - Class information
- `Questions` - Quiz questions
- `students` - Student data
- `teachers` - Admin users
- `tests` - Quiz tests

### Relationships
- One-to-many: Class → Students
- Many-to-many: Questions ↔ Tests

## API Endpoints
### Admin Endpoints
- `/admin/files/dashboard.php` - Admin dashboard
- `/admin/files/add_question.php` - Add questions
- `/admin/files/statistics.php` - View statistics

### Student Endpoints
- `/files/student_login.php` - Student login
- `/files/quiz.php` - Quiz interface
- `/files/test_finished.php` - Quiz completion

## Troubleshooting
### Common Issues
1. **Database Connection Errors**
   - Verify credentials in `database/config.php`
   - Check MySQL server status

2. **Missing Dependencies**
   - Run `npm install`
   - Ensure PHP extensions are enabled

3. **Permission Issues**
   - Set correct file permissions
   - Check web server configuration

## Contributing
1. Fork the repository
2. Create a feature branch
3. Commit your changes
4. Submit a pull request

### Coding Standards
- Follow PSR-12 for PHP
- Use ES6+ for JavaScript
- Maintain consistent CSS naming conventions

### Testing
- Test all new features
- Verify database migrations
- Check cross-browser compatibility

---

For additional support, please refer to the project's GitHub issues page.
