## DECaF Website ##

![Alt text](http://tesc.ucsd.edu/assets/decaf-logo-2015-d8ead351f256014c7b6239482999a3b0.jpg)

### About ###
This is the new, Laravel-based website for DECaF, the Disciplines of Engineering Career Fair at UCSD. This project is run by TESC, The Triton Engineering Student council. For more information, please contact TESC leadership.

### Setting up your enviroment ###
- Ensure that you have downloaded homestead and composer. Documentation about installing Composer can be found [here](http://laravel.com/docs/5.0/installation) and documentation regardiing homestead is [here](http://laravel.com/docs/5.0/installation)

- Download and install the latest version of Node.js and npm (The node package manager) from [here](https://nodejs.org/) or by running `brew install node`

- Install gulp and bower globally
```bash
npm install -g bower gulp
```

### Running the application ###

- Install composer dependencies
```bash
composer install
```

- Install node modules
```bash
npm install
```

- Install bower components
```bash
bower install
```

- If you would like to use features requring a database, set up the development database with sqlite and run the migrations. For now the database, is empty, so only the schema needs to be generated. Later, you may need to seed the db with sample data.
```bash
touch storage/development.sqlite
php artisan migrate
```
- SSH into the homestead VM. Run gulp to make the front-end dependencies and start the server with Nginx.
```bash
homestead up && homestead ssh
# From inside the VM
gulp
sudo service nginx restart
```

- If you would like to watch the file system for additional changes and rebuild each time there is one, tell gulp to watch the file system.
```bash
gulp watch
```
