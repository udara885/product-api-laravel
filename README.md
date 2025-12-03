# 🚀 Laravel Backend Setup Guide

Follow the steps below to run the backend locally.

## 📥 1. Clone the Repository

```bash
git clone https://github.com/udara885/product-api-laravel.git
cd product-api-laravel
```

## 📦 2. Install Dependencies

```bash
composer install
```

## ⚙️ 3. Create Environment File

```bash
cp .env.example .env
```

## 🔑 4. Generate Application Key

```bash
php artisan key:generate
```

## 🗄️ 5. Create the Database

Create a new MySQL database using phpMyAdmin, MySQL Workbench, or CLI.

Example:

```sql
CREATE DATABASE product_api;
```

## 🔧 6. Configure Database in `.env`

Open the `.env` file and update these values:

```env
DB_DATABASE=product_api
DB_USERNAME=root
DB_PASSWORD=
```

(Modify according to your setup.)

## 🧹 7. Run Migrations (Fresh)

```bash
php artisan migrate:fresh
```

## 🌱 8. Seed the Database

```bash
php artisan db:seed
```

## ▶️ 9. Start the Server

```bash
php artisan serve
```

You can now access the backend API at the URL shown in the terminal (usually `http://127.0.0.1:8000`).
