# Ecom-Shop :shopping_cart: :package:

Welcome to Ecom-Shop, a fundamental yet fully-functional e-commerce website platform. Built with the robustness of PHP and the reliability of MySQL, this project serves as a strong foundation for anyone interested in understanding the backbone of an e-commerce site.

## :gear: System Design

Ecom-Shop utilizes a classic LAMP stack:
- **Linux**: The operating system.
- **Apache**: The HTTP server.
- **MySQL**: The database management system.
- **PHP**: The server-side scripting language.

### Database Design
- **Users**: Contains user data and credentials.
- **Products**: Holds information about products including pricing and availability.
- **Orders**: Manages customer orders and their statuses.

## :computer: Local Development Setup

To get this project up and running on your local machine for development and testing purposes, follow these steps:

### Prerequisites
- PHP (Preferably PHP7+)
- MySQL
- Apache Server (can be XAMPP/WAMP/MAMP/LAMP)

### Installation

1. Clone the repository to your local machine or download the zip file and extract it.
2. Place the project folder in your `htdocs` (if using XAMPP) or the relevant directory for your server setup.
3. Start Apache and MySQL services.
4. Create a new database in MySQL and import the `shop_db.sql` file to set up the tables.
5. Configure the `db.php` file with your database connection details.
6. Access the project through your web browser by going to `localhost/<YourProjectFolderName>`.

## :rocket: How to Deploy

To deploy Ecom-Shop on a live system, you will need:

- A domain name.
- A web hosting service that supports PHP and MySQL.
- FTP/SFTP access to your web server.

### Steps for Deployment

1. Upload the project files to your web server using FTP/SFTP.
2. Import your `shop_db.sql` file into your web host's MySQL database.
3. Update the database connection details in the `db.php` file with those provided by your web host.
4. Point your domain to the directory where you uploaded your project files.
5. Navigate to your domain name on a web browser to access the live site.

## :open_book: Contributing

We :heart: contributions! If you wish to help improve Ecom-Shop, please follow this process:

1. Fork this repository.
2. Create a branch (`git checkout -b feature/AmazingFeature`).
3. Make your changes.
4. Commit your changes (`git commit -am 'Add some AmazingFeature'`).
5. Push to the branch (`git push origin feature/AmazingFeature`).
6. Open a Pull Request.

## :memo: License

This project is licensed under the MIT License - see the `LICENSE.md` file for details.

## :raising_hand: Support

Need a hand with something? Drop us an issue or reach out to the maintainers.

---

Crafted with :heart: and PHP by [YourName] - Happy coding!
