<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Project
We called PBL Career, is digital platform to provide measurable information about job vacancy which focused on IT / Software Engineering. The main goal of this project to help our citizen who is interested to develop their career in digital transformation easily get job vacancy information based on role that they want. Simple vision of this, be like `Jobstreet`, but to gain that level we need all of your strength as Probolinggo people to develop, innovate and contribute to this stuff. We are on the right step, so let's just clone and write your code. Thank you ^_^

## Who am I ?
> A few words to describe it :
* `CRM / CMS`, this repo act as backend service to provide content management system
* `RESTFUL API`, the output it must be json to serve Front-end live

## System Requirements
> Here is what you need to play with this :
* Docker installed
* Docker Compose (if not included in docker)
* Composer

## How To Run
> Another simple step to run this stuff :
1. Fetch this repository
2. Run `composer install` or `composer update` to get depedencies
3. Duplicate file `.env.example` and rename it to `.env`
4. Setup your database setting based on docker compose setting, by default be like
* `DB_HOST`=mysql
* `DB_USERNAME`=default
* `DB_PASSWORD`=secret
5. Run `composer up`
6. Run `composer migrate-fresh`
7. Access `http://localhost:8000`
8. If it works, then it's your time to write your code ^_^

## Endpoints
* `http://localhost:8000/admin` is login page for CRM / CMS
* Grab this collection [https://www.getpostman.com/collections/ff6095102a74b5d1c72d](https://www.getpostman.com/collections/ff6095102a74b5d1c72d)  it will provide list of rest endpoints already created

## Basic Information
* Login to the CRM / CMS using `career@probolinggo.dev` and password `career12345`, don't worry it just development credential
* For email purpose you need to setup your credential email test such `mailtrap` and provide by yourself
* Our task management will using [https://quire.io/w/Probolinggo-Career-Project](https://quire.io/w/Probolinggo-Career-Project), if you aren't registered, please register first
* We will use `Agile Development`
* We will play with `Scrum Method`
* Honestly we want to create `Product Roadmap` for this project but we want to see how the progress look like first
* Right now we are not going to implement *Unit Test* yet, let's focused on the main features first, of course it will
* You should read git workflow here [https://github.com/dns2012/career.probolinggo.dev-backend/wiki/Git-Work-Flow](https://github.com/dns2012/career.probolinggo.dev-backend/wiki/Git-Work-Flow)
* You may also check our mini PRD (Product Requirement Document) [https://github.com/dns2012/career.probolinggo.dev-backend/wiki/Product-Requirement-Document](https://github.com/dns2012/career.probolinggo.dev-backend/wiki/Product-Requirement-Document)


Yeah it's all enough to help you understand and run this project, if you get troubled to play with this, please reach me in `Probolingo Dev` telegram at `@dnsProgress`

Thank you guys, enjoy the game ^_^
