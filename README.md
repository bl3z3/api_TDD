# TDD API Development

`git clone project`

## setup
Create an SQLite database and change the value of DB_DATABASE in `.env` for in-memory testing

## technicalities
Use of fractacl/transformers to conceal the DB architecture from the client
[Fractal help](http://fractal.thephpleague.com)

Json web tokens for authentication
[Tymon/JWT rep](https://github.com/tymondesigns/jwt-auth)

API doc generator
`composer require mpociot/laravel-apidoc-generator`
API documentation in public/docs
More info [Laravel Doc](https://github.com/mpociot/laravel-apidoc-generator)