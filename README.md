# 🔐 AWS Cognito Login System using Amazon EC2, PHP & Apache

A secure authentication system built using **Amazon Cognito**, **Amazon EC2**, **Apache**, and **PHP**. The application uses the **OAuth 2.0 Authorization Code Flow** with Cognito Hosted UI to authenticate users, create secure PHP sessions, and provide access to a protected dashboard.

---

# 📌 Project Overview

This project demonstrates how to integrate **AWS Cognito Authentication** with a PHP web application hosted on an Amazon EC2 instance.

Instead of storing passwords inside the application, authentication is completely handled by **Amazon Cognito**, providing a secure and scalable login solution.

---

# 🚀 Features

- 🔑 Secure Login using AWS Cognito Hosted UI
- 🔒 HTTPS Enabled using Let's Encrypt SSL
- 🌐 Custom Domain using DuckDNS
- 🖥️ Hosted on Amazon EC2
- ⚙️ Apache + PHP (LAMP Stack)
- 🔐 OAuth 2.0 Authorization Code Flow
- 👤 PHP Session Management
- 📧 Displays Logged-in User Email
- 🚪 Secure Logout

---

# ☁️ AWS Services Used

| Service | Purpose |
|----------|----------|
| Amazon EC2 | Application Hosting |
| Amazon Cognito | User Authentication |
| IAM | Permissions |
| Apache HTTP Server | Web Server |
| Let's Encrypt | SSL Certificate |
| DuckDNS | Free Domain |

---

# 🛠️ Tech Stack

- PHP
- Apache HTTP Server
- HTML5
- CSS3
- OAuth 2.0
- AWS Cognito
- Amazon EC2
- HTTPS

---

# 🏗️ Architecture Flow

```
User
   │
   ▼
EC2 Web Server
   │
   ▼
index.php
   │
   ▼
AWS Cognito Hosted UI
   │
User Login
   │
   ▼
callback.php
   │
Authorization Code
   │
   ▼
OAuth2 Token Exchange
   │
   ▼
Create PHP Session
   │
   ▼
dashboard.php
```

---

# 📂 Project Structure

```
LoginSystem/
│
├── index.php
├── config.php
├── callback.php
├── dashboard.php
├── logout.php
├── auth.php
├── style.css
├── composer.json
├── README.md
└── .gitignore
```

---

# 📸 Project Screenshots

## Home Page

(Add Screenshot Here)

---

## AWS Cognito Login

(Add Screenshot Here)

---

## User Dashboard

(Add Screenshot Here)

---

## AWS Cognito User Pool

(Add Screenshot Here)

---

## EC2 Instance

(Add Screenshot Here)

---

# 🎯 Learning Outcomes

During this project I learned:

- Deploying PHP applications on Amazon EC2
- Configuring Apache Virtual Hosts
- Setting up HTTPS using Let's Encrypt
- Configuring DuckDNS custom domains
- Integrating Amazon Cognito Hosted UI
- OAuth 2.0 Authorization Code Flow
- Managing PHP Sessions
- Deploying secure cloud-based authentication systems

---

# 🏰 Kingdom Analogy

This project can be understood using the Kingdom analogy:

- 🏰 Kingdom → AWS Cloud
- 🚪 Palace Gate → Amazon Cognito Hosted UI
- 🛡️ Royal Guards → Cognito Authentication
- 📜 Royal Identity Scroll → ID Token
- 👑 King's Approval → User Authentication
- 🏛️ Palace (EC2) → PHP Application
- 🔐 Secret Royal Tunnel → HTTPS
- 📂 Royal Records → User Session

Only people approved by the Royal Guards (Amazon Cognito) are allowed to enter the Palace (EC2 Application).

---

# 💻 How to Run

1. Launch an Amazon EC2 Instance
2. Install Apache & PHP
3. Configure Amazon Cognito User Pool
4. Configure Hosted UI
5. Configure Callback URL
6. Configure HTTPS using Let's Encrypt
7. Update `config.local.php`
8. Start Apache
9. Open the application in the browser

---

# 📈 Future Improvements

- Amazon RDS Integration
- User Registration
- Password Reset
- Multi-Factor Authentication (MFA)
- Social Login (Google / GitHub)
- User Profile Management

---

# 👨‍💻 Author

**Himnish Tyagi**

Cloud Computing Student | AWS Enthusiast

GitHub: https://github.com/h1mnish

---

⭐ If you found this project useful, consider giving it a Star.
