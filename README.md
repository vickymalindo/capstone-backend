# backend versi 1
ini baru di test dari postman, untuk CRUD udah ok. 

list endpoint

* POST   | /api/register
* POST   | /api/login
* GET    | /api/laporan | auth |
* GET    | /api/laporan/{id} | auth |
* DELETE | /api/laporan/{id} | auth |
* PUT    | /api/laporan/{id} | auth |
* POST   | /api/laporan | auth |

**POST : /api/register**
<p>
    "status": 200, <br>
    "pesan": "berhasil membuat akun", <br>
    "data": { <br>
        "name": "tes2", <br>
        "email": "tes2@gmail.com", <br>
        "password": "$2y$10$maTV0jpqBSizZsr2Qt6kaexTDY0pury26A0j8nLoFx0FfJET0lRem", <br>
        "level": "user" <br>
    }
</p>

**POST : /api/login**
<p>
    "status": 200, <br>
    "pesan": "login berhasil", <br>
    "data": { <br>
        "id": 1, <br>
        "name": "tes", <br>
        "email": "tes@gmail.com", <br>
        "level": "user", <br>
        "created_at": "2022-06-03T01:29:33.000000Z", <br>
        "updated_at": "2022-06-03T01:32:29.000000Z" <br>
    }
</p>

**POST : /api/laporan**
<p>
    "status": 200, <br>
    "pesan": "data sudah ditambahkan", <br>
    "data": { <br>
        "title": "judul coba", <br>
        "image": "http://localhost:8000/upload/food.jpeg", <br>
        "description": "deskripsi coba", <br>
        "location": "lokasi coba" <br>
    }
</p>



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
