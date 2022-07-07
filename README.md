
## AI - Babili Blog Deliverables @larabree Repository

Team members:
Aline, Chaimaa, Chantal, Francis (Team Leader), Lu, and Thomas

### Mandatory
Team contract in Google Drive [LINK](https://docs.google.com/document/d/1qksD0JsKhCeg9ig_XURdAi1wQG9xeVNFaiYDEMitX9c/edit?usp=sharing)<br/>
Data schema in Google Drive [LINK](https://drive.google.com/file/d/1MTOWsFn5Wau7FmI0ldbfUoxnaovpucZX/view?usp=sharing)<br/>
Taiga [LINK](https://tree.taiga.io/project/bambina-ai/timeline)

### Extra's
Taiga ownership issues as of June 7th [LINK](https://drive.google.com/file/d/1QgnawuLBg62-_eetXBQEEFUest9qjnte/view?usp=sharing)</br>
Taiga timeline as of June 7th [LINK](https://drive.google.com/file/d/1oUAGVUvyfRVKfq93_5V6yGmaUv0EoBXL/view?usp=sharing)<br>
Site images in Google Drive [LINK](https://drive.google.com/drive/folders/1A9vpzOCA5yOLBpVO6_XqbJzZyZndzuIj?usp=sharing)<br/>
A4 Flyer in Google Drive [LINK](https://drive.google.com/file/d/1wnNwF1mQZoN65JZeRrqSLbcxolneaSG2/view?usp=sharing)

## How to install after cloning the repository?

Create Vendor Folder by installing the latest composer to the project (run in terminal in project folder)

docker run --rm \
-u "$(id -u):$(id -g)" \
-v $(pwd):/var/www/html \
-w /var/www/html \
laravelsail/php81-composer:latest \
composer install --ignore-platform-reqs

**Copy .env-example and rename it to .env

Go to DB and change the password and username if wished.**

DB_USERNAME=sail
DB_PASSWORD=password

Make sure DB_CONNECTION is set to 'mysql'.

DB_CONNECTION=mysql
DB_HOST=mysql

Fix run watch by typing this command in the terminal in the project folder:

sail npm install && sail npm run dev

or

npm install autoprefixer@10.4.5 --save-exact

## How to migrate and seed the database?

sail artisan migrate
sail artisan db:seed

##

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

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

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
