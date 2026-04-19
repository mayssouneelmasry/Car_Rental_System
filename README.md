Car Rental System – Web-Based Booking & Management Platform

This project is a full-stack web application that simulates a car rental service. It allows customers to browse available cars, make reservations, and manage their bookings, while providing an admin panel to oversee cars, customers, and reservations.

---

## What Is This All About?

A **Car Rental System** is designed to streamline the process of renting vehicles online. It enables:

* Customers to view available cars and reserve them بسهولة
* Admins to manage inventory, users, and reservations
* Secure handling of user authentication and booking data

This project demonstrates how a real-world rental platform works, combining frontend interfaces with backend logic and a database.

---

## Features

### Customer Side

* User registration and login
* Browse available cars
* Make reservations
* View and manage personal bookings
* Contact system support

### Admin Side

* Admin authentication (login/logout)
* Add, update, and manage cars
* View and manage customers
* Handle reservations and booking status
* View customer messages and reports

---

## Project Structure

CarRentalSystem/
├── index.php                 # Homepage
├── login.php / signup.php    # Authentication system
├── logout.php                # Logout functionality
├── connect.php               # Database connection
├── DDL.sql                   # Database schema

### Customer Pages

├── rent.php                  # Browse cars
├── makeReservation.php       # Booking system
├── customerProfile.php       # User profile
├── customerReservations.php  # User bookings
├── contactus.php             # Contact form

### Admin Pages

├── adminLogin.php            # Admin login
├── adminLogout.php           # Admin logout
├── adminCars.php             # Manage cars
├── adminCustomers.php        # Manage users
├── adminReservations.php     # Manage bookings
├── adminMessages.php         # View messages
├── adminReports.php          # Reports dashboard
├── addCar.php                # Add new car
├── updatecars.php            # Update car details
├── updateCarStatus.php       # Change car availability
├── updatePickupStatus.php    # Pickup status updates
├── updateReturnStatus.php    # Return status updates

### Assets

├── *.css                     # Styling files
├── *.png / *.jpg             # Images and UI assets

---

## How It Works

### 1. User Interaction

a. Register or log in
Users create an account or log in to access the system.

b. Browse cars
Available cars are displayed with images and details.

c. Make a reservation
Users select a car and specify booking details.

d. Manage bookings
Users can view their reservations and track status.

---

### 2. Admin Workflow

a. Manage cars
Admins can add, update, or remove cars from the system.

b. Handle reservations
Admins approve, update, and track bookings.

c. Monitor customers
Admins can view customer data and activity.

d. View reports and messages
Admins can analyze usage and respond to user inquiries.

---

## Database Setup

1. Import the database schema:

```sql
DDL.sql
```

2. Update database credentials in:

```
connect.php
```

---

## Installation

### Requirements

* PHP (XAMPP / WAMP / LAMP)
* MySQL Database
* Web Browser

### Steps

1. Move project folder to your server directory:

   * XAMPP: `htdocs/`
   * WAMP: `www/`

2. Start Apache and MySQL

3. Import the database using `DDL.sql`

4. Configure database connection in `connect.php`

---

## Run the Project

Open your browser and go to:

```
http://localhost/CarRentalSystem
```

---

## Technologies Used

* PHP (Backend logic)
* MySQL (Database)
* HTML/CSS (Frontend)
* JavaScript (Basic interactivity)

---

## Key Concepts Demonstrated

* Full-stack web development
* User authentication and session handling
* CRUD operations (Create, Read, Update, Delete)
* Database integration
* Admin vs. user role separation

---

## Team Members

* Mayssoune Hussein Elmasry – 2205251
* Maryam Waheed Zamel – 2205154
* Amina Ahmed Ferra – 2205225
* Karen Alfred - 2205236

---

## Future Improvements

* Add payment gateway integration
* Improve UI/UX design
* Add search and filtering for cars
* Enhance security (input validation, hashing passwords)

---

## Notes

This project is intended for educational purposes and demonstrates how a real-world booking system can be structured and implemented using PHP and MySQL.
