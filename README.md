
# SimpleInventory — Product Inventory System in PHP

This PHP web application provides a simple and intuitive interface for managing a product inventory. Users can add, view, edit, and delete product records, with automatic calculation of total price per product (quantity × unit price). The app is built using procedural PHP, MySQL for data storage, and styled with basic CSS and Boxicons for UI elements.

---

## Features

* Add new products with name, quantity, unit price.
* View all products in a styled table.
* Edit existing product details.
* Delete products from the inventory.
* Automatic calculation and display of total price per product.
* Simple, user-friendly interface with responsive design elements.
* MySQL database interaction via mysqli extension.

---

## Project Structure
```
Simple-Inventory-PHP/
├── db/
│   └── db_connection.php        # Database connection script
├── public/
│   ├── index.php                # Main page: product listing and add form
│   ├── edit_product.php         # Edit form for products
│   ├── delete_product.php       # Script to delete products by ID
├── sql/
│   └── schema.sql               # SQL script to create database and table
└── README.md                    # This documentation file
```

---

## Database Schema

The MySQL database `SimpleInventory` contains a single table `products` defined as follows:

```sql
CREATE DATABASE IF NOT EXISTS SimpleInventory;
USE SimpleInventory;

CREATE TABLE IF NOT EXISTS products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    quantity INT NOT NULL,
    unit_price FLOAT NOT NULL,
    total FLOAT NOT NULL
);
````

---

## Installation Instructions

1. Clone or download this repository.

2. Import the database schema:

   * Use phpMyAdmin or MySQL CLI to run `sql/schema.sql`.
   * Alternatively, create the database and table manually using the provided SQL.

3. Configure your web server (e.g., Apache with XAMPP, WAMP):

   * Place the project files in your server's web root directory.
   * Adjust the database connection parameters in `db/db_connection.php` if needed.

4. Open the main page in your browser:

```
http://localhost/Simple-Inventory-PHP/public/index.php
```

---

## Usage

* Use the **Add Product** form to insert new items.
* Products appear in the table below the form.
* Click the edit icon to modify a product.
* Click the trash icon to delete a product.

---

## Highlights & Learning Outcomes

* Practical use of PHP and MySQL for CRUD operations.
* Use of procedural PHP and mysqli for database interaction.
* Basic front-end styling with CSS and iconography via Boxicons.
* Implementation of simple client-side interaction using HTML and JavaScript.
* Understanding of form handling and POST data processing in PHP.

---

## Limitations & Future Improvements

* Implement prepared statements for SQL injection prevention.
* Add server-side validation and error handling.
* Enhance UI responsiveness using frameworks like Bootstrap.
* Introduce AJAX for asynchronous updates without page reload.
* Add user authentication and authorization.
* Improve total calculation dynamically on the client side.

---

## License

This project is licensed under the MIT License — you are free to use, copy, modify, merge, publish, and distribute the software, provided that the original author is credited and the license notice is included in all copies or substantial portions of the software.

See the [LICENSE](LICENSE) file for full terms.

---



