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

<img width="1917" height="981" alt="homepage" src="https://github.com/user-attachments/assets/afb3b818-ae68-418a-a62d-07d6954877ee" />


---

## AWS Cognito Login

<img width="1917" height="984" alt="signin" src="https://github.com/user-attachments/assets/24fd11ce-8062-4ee3-b245-fba1b288faaf" />
<img width="1917" height="977" alt="password" src="https://github.com/user-attachments/assets/24b91dac-7feb-4b8a-b8f9-fdf4b90b84f5" />


---

## User Dashboard

<img width="1919" height="973" alt="userdashboard" src="https://github.com/user-attachments/assets/e8d407c0-5faa-4f1c-98e3-ab680790b6fd" />


---

## AWS Cognito User Pool

<img width="1919" height="340" alt="cognito" src="https://github.com/user-attachments/assets/bb429b54-e333-4342-9fa3-4de03d6205af" />


---

## EC2 Instance

<img width="1062" height="571" alt="ec2" src="https://github.com/user-attachments/assets/aba18474-31e1-499c-82a7-3dbf77c84ddf" />


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
