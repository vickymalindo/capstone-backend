# backend versi 1
ini baru di test dari postman, untuk CRUD udah ok. 

list endpoint
+--------+-------------------+------------+----------------------------------------+----------+------------+
| Verb   | Path              | NamedRoute | Controller                             | Action   | Middleware |
+--------+-------------------+------------+----------------------------------------+----------+------------+
| GET    | /                 |            | None                                   | Closure  |            |
| POST   | /api/register     |            | App\Http\Controllers\LoginController   | register |            |
| POST   | /api/login        |            | App\Http\Controllers\LoginController   | login    |            |
| GET    | /api/laporan      |            | App\Http\Controllers\LaporanController | index    | auth       |
| GET    | /api/laporan/{id} |            | App\Http\Controllers\LaporanController | show     | auth       |
| DELETE | /api/laporan/{id} |            | App\Http\Controllers\LaporanController | destroy  | auth       |
| PUT    | /api/laporan/{id} |            | App\Http\Controllers\LaporanController | update   | auth       |
| POST   | /api/laporan      |            | App\Http\Controllers\LaporanController | create   | auth       |
+--------+-------------------+------------+----------------------------------------+----------+------------+
POST : /api/register
{
    "status": 200,
    "pesan": "berhasil membuat akun",
    "data": {
        "name": "tes2",
        "email": "tes2@gmail.com",
        "password": "$2y$10$maTV0jpqBSizZsr2Qt6kaexTDY0pury26A0j8nLoFx0FfJET0lRem",
        "level": "user"
    }
}

POST : /api/login
{
    "status": 200,
    "pesan": "login berhasil",
    "data": {
        "id": 1,
        "name": "tes",
        "email": "tes@gmail.com",
        "level": "user",
        "created_at": "2022-06-03T01:29:33.000000Z",
        "updated_at": "2022-06-03T01:32:29.000000Z"
    }
}

POST : /api/laporan
{
    "status": 200,
    "pesan": "data sudah ditambahkan",
    "data": {
        "title": "judul coba",
        "image": "http://localhost:8000/upload/food.jpeg",
        "description": "deskripsi coba",
        "location": "lokasi coba"
    }
}



# Lumen PHP Framework

[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)
[![Total Downloads](https://poser.pugx.org/laravel/lumen-framework/d/total.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/lumen-framework/v/stable.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![License](https://poser.pugx.org/laravel/lumen-framework/license.svg)](https://packagist.org/packages/laravel/lumen-framework)

Laravel Lumen is a stunningly fast PHP micro-framework for building web applications with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Lumen attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as routing, database abstraction, queueing, and caching.

## Official Documentation

Documentation for the framework can be found on the [Lumen website](https://lumen.laravel.com/docs).

## Contributing

Thank you for considering contributing to Lumen! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Lumen, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Lumen framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
