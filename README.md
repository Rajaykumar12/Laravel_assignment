# Contact Manager

A modern Laravel-based contact management system with a clean, responsive interface built using Tailwind CSS.

## Features

### Core Functionality
- View and manage contacts in an intuitive interface
- Add new contacts with detailed information
- Edit existing contact details
- Form validation for data integrity
- Responsive design for all devices

### Technical Stack
* **Backend**: Laravel 10
* **Database**: SQLite
* **Frontend**: 
  * Tailwind CSS for styling
  * Font Awesome icons
  * Modern responsive design

## Requirements

* PHP 8.0 or higher
* Composer
* SQLite
* Node.js & NPM (for Tailwind CSS)

## Installation

1. Clone the repository
```bash
git clone https://github.com/Rajaykumar12/Laravel_assignment.git
cd Laravel_assignment
```

2. Install PHP dependencies
```bash
composer install
```

3. Set up environment
```bash
copy .env.example .env
```

4. Create SQLite database
```bash
type nul > database\database.sqlite
```

5. Configure database in .env
```properties
DB_CONNECTION=sqlite
DB_DATABASE=C:/path/to/your/project/database/database.sqlite
```

6. Generate application key
```bash
php artisan key:generate
```

7. Run migrations
```bash
php artisan migrate
```

8. Start development server
```bash
php artisan serve
```

Visit `http://localhost:8000/contacts` to access the application.

## Project Structure

```
project/
├── app/
│   ├── Http/Controllers/
│   │   └── ContactController.php
│   └── Models/
│       └── Contact.php
├── database/
│   └── migrations/
│       └── [timestamp]_create_contacts_table.php
├── resources/
│   └── views/
│       └── contacts/
│           ├── index.blade.php
│           ├── create.blade.php
│           └── edit.blade.php
└── routes/
    └── web.php
```

## UI Framework Details

### Color Scheme
* Primary: `blue-600`
* Hover States: `blue-700`
* Text: `gray-700`, `gray-800`
* Backgrounds: `gray-50`, `white`
* Borders: `gray-200`, `gray-300`

### Component Classes
```css
/* Buttons */
.primary-button {
    @apply bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg;
}

/* Form Inputs */
.form-input {
    @apply w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500;
}
```

## License

MIT License

## Author

Rajay Kumar

## Support

For support, please open an issue in the GitHub repository.