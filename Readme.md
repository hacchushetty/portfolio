# Personal Portfolio Website – Web Programming Laboratory (23CS505)

This is my personal portfolio website developed as part of the Web Programming Laboratory mini-project.  
It showcases my profile, skills, education, projects, achievements, certifications, and includes a resume download link and a contact form (PHP + MySQL).
Features
- XHTML-based webpages  
- Styled using external CSS  
- JavaScript for interactivity and form validation  
- Projects rendered using XML + XSLT  
- PHP + MySQL backend to store contact form messages  
- Hosted using GitHub Pages  
- Organized folder structure and proper Git commits

Technologies Used
- **HTML / XHTML**  
- **CSS**  
- **JavaScript**  
- **XML + XSLT**  
- **PHP**  
- **MySQL (via XAMPP)**  
- **GitHub & GitHub Pages**

## How to Run PHP + MySQL (Using XAMPP)
1. Install XAMPP and start **Apache** and **MySQL**.  
2. Copy the project folder to:  
   `C:\xampp\htdocs\portfolio\`  
3. Open phpMyAdmin and create database:  
   `portfolio_db`  
4. Create table:
   ```sql
CREATE DATABASE portfolio_db;
USE portfolio_db;

CREATE TABLE contacts (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(150),
  email VARCHAR(200),
  message TEXT,
  created_at DATETIME
);

5. Configure php/db.php with:

$pdo = new PDO("mysql:host=127.0.0.1;dbname=portfolio_db;charset=utf8mb4", "root", "");


6. Run the site locally:
http://localhost/portfolio-self/index.php

GitHub Pages Deployment

Link:
https://hacchushetty.github.io/portfolio/

Author

Harshitha K H 
CS Student 



