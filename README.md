## For Mac Os users:
1. Download homebrew if you haven't.  
    `/usr/bin/ruby -e "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/master/install)"`
1. Install mysql `brew install mysql`.  
1. Run next commands:  
    `brew services start mysql`  
    `brew services list`(view running services)  
    `mysql -V` (check version mysql)  
1. Set root password: `mysqladmin -u root password 'yourpassword'`  
1. Connect with database: `mysql -u root -p`  
1. Create a database locally named `homestead` utf8_general_c.    
1. Download composer https://getcomposer.org/download/  
1. Clone repo above.  
1. Rename `.env.example` file to `.env` inside your project root and fill the database information. 
1. Open the console and cd your project root directory.  
1. Run `composer install` or `php composer.phar install`.  
1. Run `php artisan key:generate`.  
1. Run `php artisan migrate`.  
1. Run `php artisan db:seed` to run seeders, if any.  
1. Run `php artisan serve`.    
1. Run `composer dump-autoload` or `composer.phar dump-autoload` and check if there are any tables in the database, if not, run again `php artisan migrate`.  

##### You can now access your project at localhost:8000 :)  

To create a new post you need to run the URL http://127.0.0.1:8000/posts/create