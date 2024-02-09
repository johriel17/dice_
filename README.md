Download the zip and extract

open the project

you should also have composer, php, mysql, and node installed

run these commands:

	composer install
	
	npm install --save-dev create-vite

at the root folder create a .env file then copy the .env.example

and run this command 

	php artisan key:generate

then create ne database with the name 'dice'

then migrate using this command

	php artisan migrate

and add some sample data using this 

	php artisan db:seed --class=PostSeeder

and run the project now with these commands

	npm run dev
	php artisan serve

go to the link that the terminal returned or go to http://127.0.0.1:8000

and then just register and login 
