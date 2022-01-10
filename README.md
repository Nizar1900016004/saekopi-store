# Laravel Saekopi store

This is a simple Store app with multiple user support.

This is built on Laravel Framework 8.0.14. This was built for demonstrate purpose.

## Installation

Clone the repository-

```
git clone https://github.com/bindev-bit/saekopi-store.git
```

Then cd into the folder with this command-

```
cd saekopi-store
```

Then do a composer install

```
composer install
```

Then create a environment file using this command-

```
cp .env.example .env
```

Then edit `.env` file with appropriate credential for your database server. Just edit these two parameter(`DB_USERNAME`, `DB_PASSWORD`).

Then create a database named `saekopi_store` and then do a database migration using this command-

```
php artisan migrate
```

Then change permission of storage folder using thins command-

```
(sudo) chmod 777 -R storage
```

At last generate application key, which will be used for password hashing, session and cookie encryption etc.

```
php artisan key:generate
```

## Run server

Run server using this command-

```
php artisan serve
```

Open new terminal or CMD-

```
npm run watch
```

Then go to `http://localhost:8000` from your browser and see the app.
