#Hello guys! Let's make some progress. 

#run the application
 - php artisan serve

#compile resources and assets
 - npm run dev

#run the migration files
 - php artisan migrate

#rollback migration changes
 - php artisan migrate:rollback

#run the database seeders
 - php artisan db:seed

#run a specific database seeder
 - php artisan db:seed --class=UserSeeder

#cache and clear routes
 - php artisan route:cache

#cache and clear config or env varabiable changes
 - php artisan config:cache

#cache and optimize views, bootstrap files, etc.
 - php artisan optimize:clear

#make files such as model, migrations, controllers.
 - php artisan make:model User -mc

#check artisan list of commands
 - php artisan list
