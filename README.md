# project for learning laravel11 whith vuejs3

### Prerequisites

you have installed Bun and PHP 8.2+ (required for Laravel 11):
```sh
curl -fsSL https://bun.sh/install | bash
```

Verify the installation:
```sh
bun -v
php -v  # Assurez-vous d'avoir PHP 8.2 ou plus
```

### Project Installation

1. **Clone the project**
```sh
git clone git@github.com:97mams/fiarahamiasa.git
cd fiarahamiasa
```

2. **Install PHP dependencies**
```sh
composer install
```

3. **Install front-end dependencies with Bun**
```sh
bun install
```

4. **Install Vue.js and required plugins**
```sh
bun add vue
bun add -d @vitejs/plugin-vue typescript vue-tsc @vue/runtime-core
```

5. **Start the project**

#### Start the Laravel server
```sh
php artisan serve
```

#### Start the Vite server with Bun
```sh
bun run dev
```
