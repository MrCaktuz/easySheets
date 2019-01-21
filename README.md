# easySheets

* * *

EasySheets is a pathfinder character manager. It's a website that allow you to register multiple pathfinder characters sheets and manage them.
The idea of this first version is to give you the opportunity to manage you characters easily.
Have a clear & clean sheet to print and play with, but also a version full detailed to know where your stats are coming from.

* * *

## Sources of inspiration

My project is inspired by **zombieFox's project** [awesomeSheet](https://github.com/zombieFox/awesomeSheet).

* * *

## Dev Choices

- **Docker** as my dev environment setup inspired by [this article](https://medium.com/@shakyShane/laravel-docker-part-1-setup-for-development-e3daaefaf3c). Never used Docker before but wanted to for a moment now, this is it!
- **Laravel** as a CMS, yet the most customisable one I've use throw my projects, this will be needed.
- **ReactJS** for the client, I've work with ReactJS before and I intend to expand my proficiency.

* * *

## Installation

**Install [Docker](https://www.docker.com/get-started)**

**Clone this repo ↓**

    git clone https://github.com/Mucht/easySheets.git

**Go to your repo ↓**

    cd REPO_PATH

**Install docker's image composer ↓**

    docker run --rm -v $(pwd):/app composer/composer install

**Start your container ↓**

    docker-compose up

**Generate you .env file ↓**

    cp .env-example .env

**Generate you application key ↓**

    docker-compose exec app php artisan key:generate

    docker-compose exec app php artisan optimize

**Copy the application key into .env**

**You app is runnig on your [localhost:8080](http://localhost:8080/)**

* * *

## Usage

Remember the whole point of using docker is to avoid having the headaches of installing PHP versions on your local machine. We get around it by sending commands into containers, rather that running them directly. To do so, you’ll need this pattern any time you want to use artisan :
1. docker-composer exe command - `docker-compose exec`
2. the name of the service as defined in docker-compose.yml - `app`
3. the command to execute in the container, just as you normaly would run on your local machine - `php artisan migrate --seed`

Examples :

    docker-compose exec app php artisan migrate --seed

    docker-compose exec app php artisan make:controller MyController

Feel free to create an alias like phpd that removes the need to type the full command.

    phpd artisan migrate --seed