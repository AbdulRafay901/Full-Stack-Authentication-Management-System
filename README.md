# 🚀 Laravel REST API + JavaScript SPA Dashboard

A modern SPA-style authentication and user management system built using **Laravel REST APIs** and **Vanilla JavaScript** with secure **Sanctum Cookie-Based Authentication**.

This project follows a clean backend architecture using **Services**, **Form Requests**, **Events**, **Listeners**, and **Queues** while the frontend is rendered dynamically using JavaScript without any frontend framework.

---

![Laravel](https://img.shields.io/badge/Laravel-12-red)
![JavaScript](https://img.shields.io/badge/JavaScript-ES6-yellow)
![REST API](https://img.shields.io/badge/API-REST-green)
![Sanctum](https://img.shields.io/badge/Auth-Sanctum-blue)
![Spatie](https://img.shields.io/badge/Roles-Spatie-orange)

---

# ✨ Features

## 🔐 Authentication System

- User Registration
- User Login
- Logout System
- Email Verification
- Resend Verification Code
- Forgot Password
- Change Password
- Cookie-Based Authentication using Sanctum
- Protected Authentication Routes

---

## 👥 Role-Based Access Control

Implemented using **Spatie Laravel Permission**.

### Admin Permissions

- Create Users
- Update Users
- Delete Users
- Bulk Delete
- Full Dashboard Access

### User Permissions

- Read/View Data Only

---

# ⚡ SPA Frontend Architecture

This project uses a **Single Page Application (SPA)-style** frontend architecture without React or Vue.

Laravel serves a single Blade view while all frontend rendering and route handling are managed dynamically using JavaScript.

```php
Route::view('/{any}', 'layouts.app')->where('any', '.*');
```

Dynamic pages are rendered directly from JavaScript functions.

```javascript
function changePassword() {
    return `
        <section>
            ...
        </section>
    `;
}
```

---

# 🛠 Tech Stack

## Backend

- Laravel
- Laravel Sanctum
- REST API
- Spatie Laravel Permission
- Queue System
- Events & Listeners
- Service Layer Architecture
- Form Request Validation

## Frontend

- JavaScript
- HTML5
- CSS3

## Database

- MySQL

---

# 📂 Project Architecture

This project follows a clean and scalable structure.

```text
app/
 ┣ Http/
 ┃ ┣ Controllers/
 ┃ ┣ Requests/
 ┃ ┣ Middleware/
 ┣ Services/
 ┣ Events/
 ┣ Listeners/
 ┣ Models/
 ┣ Providers/

routes/
 ┣ api.php
 ┣ web.php
```

---

# 📧 Email System

The email workflow is implemented using:

- Laravel Events
- Event Listeners
- Queue System

Emails are used for:

- Verification Codes
- Forgot Password
- Resend Verification

Queue workers process emails asynchronously for better performance.

---

# 📋 CRUD Features

- Create Data
- Read Data
- Update Data
- Delete Data
- Bulk Delete
- Pagination
- Dynamic Rendering
- Protected Admin Actions

---

# 🔒 Security Features

- Sanctum Cookie Authentication
- CSRF Protection
- Protected API Routes
- Middleware Authorization
- Role-Based Access Control
- Authenticated Route Protection

Authenticated users cannot access login/register pages unless they logout.

---

# 🔗 REST API Endpoints

| Method | Endpoint            | Description              |
| ------ | ------------------- | ------------------------ |
| POST   | /api/register       | Register User            |
| POST   | /api/login          | Login User               |
| POST   | /api/otpCheck       | OTP Verification         |
| POST   | /api/resend-code    | Resend Verification Code |
| POST   | /api/logout         | Logout User              |
| POST   | /api/forgotPassword | Forgot Password          |
| POST   | /api/changePassword | Change Password          |
| GET    | /api/students       | Fetch Users              |
| POST   | /api/students       | Create User              |
| PUT    | /api/students/{id}  | Update User              |
| DELETE | /api/students/{id}  | Delete User              |

---

# 📸 Screenshots

<img width="1600" height="900" alt="dashboard" src="https://github.com/user-attachments/assets/93ad9ac8-1749-4181-86dc-676f4efc9324" />

## 🔑 Authentication Pages

- Login Page
- Register Page
- Verify Code Page
- Forgot Password Page

## 📊 Dashboard

- User Management
- CRUD Operations
- Pagination
- Role-Based Controls

> > > > > > > ec3a7e8317b2b0bc54c4d9a6f548fe2d9b8167b5

---

# ⚙️ Installation

## 1️⃣ Clone Repository

```bash
git clone https://github.com/AbdulRafay901/laravel-restapi-spa-dashboard.git
```

---

## 2️⃣ Install Dependencies

```bash
composer install
npm install
```

---

## 3️⃣ Setup Environment File

```bash
cp .env.example .env
php artisan key:generate
```

---

## 4️⃣ Configure Database

Update your `.env` file with database credentials.

```env
DB_DATABASE=your_database
DB_USERNAME=root
DB_PASSWORD=
```

---

## 5️⃣ Run Migrations

```bash
php artisan migrate
```

---

## 6️⃣ Start Queue Worker

```bash
php artisan queue:work
```

---

## 7️⃣ Run Development Server

```bash
php artisan serve
```

---

# 🔥 Key Highlights

- ✅ Laravel REST API Architecture
- ✅ SPA-Style Frontend Rendering
- ✅ Sanctum Cookie Authentication
- ✅ Role & Permission Management
- ✅ Queue & Event System
- ✅ Service Layer Architecture
- ✅ Form Request Validation
- ✅ Protected Routes & Middleware
- ✅ CRUD + Bulk Delete + Pagination
- ✅ Dynamic Client-Side Rendering

---

# 🌐 Future Improvements

- Search
- Responsive

---

# 👨‍💻 Author

Developed by **Rafay**

---

# 📄 License

This project is open-source and available under the MIT License.
