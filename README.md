

# 🌍 LendLocal: A Smart Community Resource Sharing Platform


<img width="1882" height="867" alt="Screenshot 2025-12-01 202945" src="https://github.com/user-attachments/assets/90c6c206-59c7-458b-a605-c69004425e18" />

## 🚀 Overview

**LendLocal** is a community-driven **Local Resource Sharing Platform** that allows individuals to lend, borrow, and share resources within their locality. Whether it’s **books, tools, appliances, furniture, sports equipment, or skill-based services**, LendLocal builds a culture of **trust, sustainability, and community collaboration**.

Users can explore available resources, reserve items, add listings, make payments, and interact through clean role-based interfaces (Borrower / Lender). A dedicated admin panel ensures moderation of listings and user activities.

💡 **Why LendLocal?**
Because many households have underutilized items that others need. LendLocal promotes **reuse over buying**, reduces waste, and creates a helpful community ecosystem.

📌 **Starting Page** → `index11.html`



## ✨ Key Features

* **📦 Resource Sharing System:** Borrow or lend tools, books, furniture, appliances, or services.
* **👤 User Roles:** Dedicated interfaces for *Borrowers* and *Lenders*.
* **📝 Resource Listing:** Add items with images, conditions, instructions, and lending terms.
* **🔍 Smart Search:** Users can search and filter items easily.
* **📅 Reservation & Borrowing:** Borrowers can request items and view availability.
* **💳 Payment Page:** Simple resource transaction and confirmation interface.
* **📁 Image & File Uploads:** Supports multiple resource images.
* **📊 Organized Gallery:** Professionally designed gallery sections for images.
* **🧭 Informative Pages:** About Us, Contact Us, Learn More, Introduction page.
* **🎨 Beautiful UI:** Clean and interactive styling inspired by modern e-commerce design.
* **🔒 Secure Backend:** PHP-based backend with MySQL database connectivity.



## 🏗️ System Architecture

LendLocal is structured into 3 major components:

### 1. **Frontend (HTML + CSS + JS)**

* Handles all user interactions.
* Includes role-based views and dynamic pages.

### 2. **Backend (PHP)**

* Handles authentication, database operations, form processing, and resource management.

### 3. **Database (MySQL / MongoDB)**

* Stores user details, items, images, transactions, and borrowing history.

### 🌐 Workflow

1. User opens **index11.html**
2. Logs in / registers
3. Chooses user type (Lender/Borrower)
4. Browses or uploads resources
5. Makes a borrowing request
6. Handles payment (optional demo)
7. Views borrowed items and history



## 📂 Project Structure

```
LendLocal/
│   index11.html                   # Starting page
│   1demo.php, 4login.php, 6registration.php ...
│   addPRODUCT.php, show_PRODUCT.php, lender_interface.html, borrower_interface.html
│   *.css / *.js                   # Styles & scripts
│   chandu.jpg, hands.jpg, lend image.jpg
│   .gitignore
│
├───about images/
├───gallary images/
├───learnmore images/
├───popular services images/
├───dum/                          # Demo pages, test assets
└───uploads/                      # Uploaded images & documents
```



## 🛠️ Tech Stack

### **Frontend**

* HTML5
* CSS3
* JavaScript

### **Backend**

* PHP

### **Database**

* MySQL


### **Tools Used**

* VS Code
* XAMPP / WAMP (for PHP + MySQL)
* Chrome Developer Tools


---
## ⚙️ Installation & Setup

### 📌 Prerequisites

* PHP installed (XAMPP / WAMP recommended)
* MySQL Server
* Browser (Chrome recommended)
* Git


### 📥 1. Clone the Repository

```bash
git clone https://github.com/chandu5t/LendLocal-Project.git
cd LendLocal-Project
```



### 🔧 2. Move Project to Server Directory

For **XAMPP**, move to:

```
C:\xampp\htdocs\LendLocal
```

For **WAMP**:

```
C:\wamp64\www\LendLocal
```



### 🛢 3. Database Setup

1. Open **phpMyAdmin**
2. Create database:

```
CREATE DATABASE lendlocal;
```

3. Import your SQL file (if you will add a DB export later)
4. Configure DB connection inside:

```
asconnect.php
```

Example:

```php
$conn = mysqli_connect("localhost", "root", "", "lendlocal");
```



### ▶️ 4. Run the Project

Open browser:

```
http://localhost/LendLocal/index11.html
```

You're now ready to explore **LendLocal**!

---

## 🎮 Usage Guide

### 👤 Borrower

* Browse resources
* Make a borrowing request
* See item details
* Perform payments
* View borrowing history

### 👤 Lender

* Add product listings
* Manage items
* Upload photos
* Set lending terms
* Track borrowers

---

## 📸 Screenshot Placeholder

<img width="1596" height="887" alt="Screenshot 2025-12-01 203102" src="https://github.com/user-attachments/assets/9f180d41-5873-43c3-8b1e-530c2c191149" />


## 👥 Contributor

* **Chandrakant Thakare**
  GitHub: [https://github.com/chandu5t](https://github.com/chandu5t)  
  Email: [chandu01thakare@gmail.com](mailto:chandu01thakare@gmail.com) 




## 📜 License

Licensed under the [MIT License](LICENSE).
You are free to use, modify, and distribute this project.



## 🙏 Acknowledgements

Special thanks to:

* VIIT Pune (Department of CSE – AI)
* Faculty & Mentors : Mrs. Pradnya Mehta & Dr. Nilesh Sable
* Community volunteers who helped with design inspiration

LendLocal aims to promote **resource optimization, sustainability, and collaboration**.
Let’s build stronger communities together! 🌱🤝


