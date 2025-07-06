# Dairy Farm Management App

A simple, mobile-friendly Laravel application for managing a milk dairy farm with buffaloes. This app is designed for fast, easy data entry by non-technical users, using a 4-digit user code for login. Built with Laravel, Livewire, and Bootstrap 5.

## Features
- **4-digit User Login:** Quick login with a 4-digit user code (no password required).
- **Record Milk Production:** Enter animal ID, record milk quantity with a plus/minus counter, and save.
- **Record Animal Medication:** Enter animal ID, select medicine type (enum: fever, allergy, vaccine, birth issue, bacteria, virus), add optional comments, and save.
- **History Views:** View milk and medicine history, sorted by date, with user and animal info.
- **Mobile-First UI:** Large buttons, simple forms, and easy navigation for use on phones.
- **Session-based Logout:** Secure, one-tap logout from any main screen.

## Requirements
- PHP >= 8.1
- Composer
- Node.js & npm
- MySQL or SQLite (default: SQLite)
- **Or:** [Laravel Sail](https://laravel.com/docs/12.x/sail) (Docker, recommended for easy setup)

## Installation

### Option 1: Using Laravel Sail (Docker, recommended)

1. **Clone the repository:**
   ```bash
   git clone git@github.com:codeWithUali/dairy_farm.git
   cd dairy_farm
   ```

2. **Copy and edit environment file:**
   ```bash
   cp .env.example .env
   # Edit .env if you want to change default database or other settings
   ```

3. **Start Sail containers:**
   ```bash
   ./vendor/bin/sail up -d
   ```
   (If you haven't installed Sail dependencies yet, run:)
   ```bash
   composer install
   npm install && npm run build
   ```

4. **Run migrations:**
   ```bash
   ./vendor/bin/sail artisan migrate
   ```

5. **Access the app:**
   - Open [http://localhost](http://localhost) in your browser (preferably on mobile or small screen).

### Option 2: Manual (Local PHP, Composer, Node)

1. **Clone the repository:**
   ```bash
   git clone git@github.com:codeWithUali/dairy_farm.git
   cd dairy_farm
   ```

2. **Install PHP dependencies:**
   ```bash
   composer install
   ```

3. **Install Node dependencies and build assets:**
   ```bash
   npm install
   npm run build
   ```

4. **Copy and edit environment file:**
   ```bash
   cp .env.example .env
   # Edit .env to set your database connection if needed
   ```

5. **Generate application key:**
   ```bash
   php artisan key:generate
   ```

6. **Run migrations:**
   ```bash
   php artisan migrate
   ```

7. **(Optional) Seed users and animals:**
   - Add users and animals via tinker or by creating seeders.

8. **Start the development server:**
   ```bash
   php artisan serve
   ```

9. **Access the app:**
   - Open [http://localhost:8000](http://localhost:8000) in your browser (preferably on mobile or small screen).

## Usage
- **Login:** Enter your 4-digit user code.
- **Dashboard:** Choose to record milk or medicine.
- **Record Milk:** Enter animal ID, adjust milk amount, and save.
- **Record Medicine:** Enter animal ID, select medicine type, add comment if needed, and save.
- **History:** Use the "History" button on each page to view past records.
- **Logout:** Use the "Logout" button in the top right of any main page.

## Customization
- Add users and animals via database or admin interface as needed.
- Update enums or add new medicine types in the migration/model.

## License
MIT
