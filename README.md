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
* `CMS`, this repo act as backend service to provide content management system
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
* `DB_CONNECTION`=pgsql
* `DB_HOST`=database
* `DB_PORT`=5432
* `DB_DATABASE`=postgres
* `DB_USERNAME`=postgres
* `DB_PASSWORD`=secret
5. Run `composer up`
6. Run `composer migrate-fresh`
7. Access `http://localhost:8000`
8. If it works, then it's your time to write your code ^_^


## Git Workflow 
1. Make sure you have successfully run this application
2. Choose you task [https://trello.com/b/BOd0DA9r/career](https://trello.com/b/BOd0DA9r/career), move it into `In Progress` and don't forget to assign yourself
3. Create new branch to complete those task, the branch have a rule, check it out below
* Branch name must representation of the task
* Branch has 2 prefix `feature` and `fix`, use `feature` when you develop new feature and `fix` for fixing bug or feature improvement
* Branch name format `prefix/branch-name-similiar-to-the-task`

**Example :**
Today, i'll work in [https://trello.com/c/nfKt93Fn/13-frontend-create-about-us-page](https://trello.com/c/nfKt93Fn/13-frontend-create-about-us-page), so i have to make new branch tom complete this task. It's new feature, so my branch will be like `feature/create-about-us-page`, so easy like that

4. After your branch created, start to write the code
5. When you complete the task, commit your work and make pull request based on your branch
6. When you make pull request on the github, you need add some description
* First line, you have to add `task link`
* Second line, you have to write like some short action of your PR
* Third line, add more descriptive sentences about you PR

**Example :** 
> Related task [https://trello.com/c/nfKt93Fn/13-frontend-create-about-us-page](https://trello.com/c/nfKt93Fn/13-frontend-create-about-us-page)

> Create new about us page

> Based on the task we don't have about us page, so this PR has purpose to create new about us page

7. Your PR will be reviewed, so be aware in your email if there is request changes
8. Move your task in the quire to `Review & Validation`
9. Your PR will merged after passed code review and approved by more than 1 approval, especially it's me
10. After it merged, **DON'T FORGET TO COMPLETE YOUR TASK IN THE TRELLO**
11. Don't forget to pull first before you work any features / bug fixing


## Endpoints
* `http://localhost:8000/admin` is login page for CMS
* Grab this collection [https://www.getpostman.com/collections/ff6095102a74b5d1c72d](https://www.getpostman.com/collections/ff6095102a74b5d1c72d)  it will provide list of rest endpoints already created


## Basic Information
* Login to the CMS using `career@probolinggo.dev` and password `career12345`, don't worry it just development credential
* For email purpose you need to setup your credential email test such `mailtrap` and provide by yourself
* Our task management will using [https://trello.com/b/BOd0DA9r/career](https://trello.com/b/BOd0DA9r/career), if you aren't registered, please register first


Yeah it's all enough to help you understand and run this project, if you get troubled to play with this, please reach me in `Probolingo Dev` telegram at `@dnsProgress`

Thank you guys, enjoy the game ^_^


### RED NOTICE, PLEASE DO THIS !
Everything you write, include `branch name, commit and description` you should write it in **ENGLISH**, trust me it will usefull for your career. **ENGLISH** is a must !!

