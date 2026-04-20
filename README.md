# Car Rental System – Web-Based Booking & Management Platform

![PHP](https://img.shields.io/badge/PHP-7.4+-blue.svg)
![MySQL](https://img.shields.io/badge/MySQL-5.7+-orange.svg)
![HTML5](https://img.shields.io/badge/HTML5-E34F26.svg)
![CSS3](https://img.shields.io/badge/CSS3-1572B6.svg)
![JavaScript](https://img.shields.io/badge/JavaScript-ES6-yellow.svg)
![License](https://img.shields.io/badge/License-MIT-green.svg)

---

## 📋 Overview

This project is a full-stack web application that simulates a car rental service. It allows customers to browse available cars, make reservations, and manage their bookings, while providing an admin panel to oversee cars, customers, and reservations.

A **Car Rental System** is designed to streamline the process of renting vehicles online. This project demonstrates how a real-world rental platform works, combining frontend interfaces with backend logic and a database.

---

## 🎯 What Is This All About?

The Car Rental System enables:

- **Customers** - View available cars and reserve them easily
- **Admins** - Manage inventory, users, and reservations
- **Security** - Secure handling of user authentication and booking data

---

## ✨ Features

### Customer Side

- User registration and login - Secure account creation and authentication
- Browse available cars - View all available vehicles with details
- Make reservations - Book cars for specific dates
- View and manage personal bookings - Track and modify your reservations
- Contact system support - Reach out for assistance

### Admin Side

- Admin authentication - Secure login/logout for administrators
- Add, update, and manage cars - Full CRUD operations on car inventory
- View and manage customers - Monitor user accounts and activity
- Handle reservations and booking status - Update and track all bookings
- View customer messages and reports - Respond to inquiries and analyze data

---

## 🏗️ Project Structure

- **CarRentalSystem/**
  - `index.php` - Homepage
  - `login.php` - Customer login
  - `signup.php` - Customer registration
  - `logout.php` - Logout functionality
  - `connect.php` - Database connection
  - `DDL.sql` - Database schema

  - **Customer Pages/**
    - `rent.php` - Browse cars
    - `makeReservation.php` - Booking system
    - `customerProfile.php` - User profile
    - `customerReservations.php` - User bookings
    - `contactus.php` - Contact form

  - **Admin Pages/**
    - `adminLogin.php` - Admin login
    - `adminLogout.php` - Admin logout
    - `adminCars.php` - Manage cars
    - `adminCustomers.php` - Manage users
    - `adminReservations.php` - Manage bookings
    - `adminMessages.php` - View messages
    - `adminReports.php` - Reports dashboard
    - `addCar.php` - Add new car
    - `updatecars.php` - Update car details
    - `updateCarStatus.php` - Change car availability
    - `updatePickupStatus.php` - Pickup status updates
    - `updateReturnStatus.php` - Return status updates

  - **Assets/**
    - `*.css` - Styling files
    - `*.png / *.jpg` - Images and UI assets

---

## 🔧 How It Works

### 1. User Interaction

- **Register or log in** - Users create an account or log in to access the system
- **Browse cars** - Available cars are displayed with images and details
- **Make a reservation** - Users select a car and specify booking details
- **Manage bookings** - Users can view their reservations and track status

### 2. Admin Workflow

- **Manage cars** - Admins can add, update, or remove cars from the system
- **Handle reservations** - Admins approve, update, and track bookings
- **Monitor customers** - Admins can view customer data and activity
- **View reports and messages** - Admins can analyze usage and respond to user inquiries

---

## 🗄️ Database Setup

### 1. Import the database schema

Run this SQL file in your MySQL database: `DDL.sql`

### 2. Update database credentials

Edit `connect.php` with your database credentials:

- `$servername` - Database server (usually localhost)
- `$username` - MySQL username
- `$password` - MySQL password
- `$database` - Database name

---

## 🚀 Installation

### Requirements

- PHP 7.4+ (XAMPP / WAMP / LAMP)
- MySQL 5.7+
- Web Browser (Chrome, Firefox, Edge, etc.)

### Installation Steps

1. Move project folder to your server directory:
   - XAMPP: `htdocs/`
   - WAMP: `www/`
2. Start Apache and MySQL services
3. Import the database using `DDL.sql`
4. Configure database connection in `connect.php`

---

## 💻 Run the Project

Open your browser and navigate to:
http://localhost/CarRentalSystem

---

## 📚 Technologies Used

- **PHP 7.4+** - Backend logic and server-side processing
- **MySQL 5.7+** - Database management and storage
- **HTML5** - Frontend structure
- **CSS3** - Styling and responsive design
- **JavaScript ES6** - Basic interactivity and client-side validation

---

## 🎓 Key Concepts Demonstrated

- Full-stack web development - Complete frontend to backend implementation
- User authentication and session handling - Secure login/logout with PHP sessions
- CRUD operations - Create, Read, Update, Delete functionality
- Database integration - MySQL connectivity and queries
- Role-based access control - Separate interfaces for admin and customers

---

## 👥 Team Members

- Mayssoune Hussein Elmasry – 2205251
- Maryam Waheed Zamel – 2205154
- Amina Ahmed Ferra – 2205225
- Karen Alfred - 2205236

---

## 🔧 Future Improvements

- [ ] Add payment gateway integration
- [ ] Improve UI/UX design
- [ ] Add search and filtering for cars
- [ ] Enhance security (input validation, password hashing)
- [ ] Add email confirmation for bookings
- [ ] Implement car rating and review system

---

## 📄 License

This project is licensed under the MIT License.

---

## 🙏 Acknowledgments

Special thanks to our instructors for guidance on full-stack web development and database integration.

---

## 📝 Notes

This project is intended for educational purposes and demonstrates how a real-world booking system can be structured and implemented using PHP and MySQL.

---

⭐ If you find this project useful, please consider giving it a star on GitHub!
