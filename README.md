<div align="center">
    <img src="./hafez.jpg" alt="Hafez" />
</div>

# Hafez Divination

An API made with Laravel for Hafze poems and their interpretations.

## Usage

Once you cloned the repo via `git clone https://github.com/evokelektrique/hafez_divination`, you need to import the data with the custom command line `php artisan import:hafez` and the application is ready to use.

## Routes

```
// Receive all: /api/poems
// => [{id: 374, "poem":...

// Receive a random poem: /api/poems/random
// => {id: 374, "poem":...
```

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.
