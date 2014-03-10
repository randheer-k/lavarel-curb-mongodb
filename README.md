lavarel-curb-mongodb
====================

Sample CURD Laravel Application with MongoDB (embeded Model) and Twitterbootstrap

Step of run application -

 	1. Update database config in config/database.php with 

 		'host'     => 'localhost',
	    'port'     => 27017,
	    'username' => 'username',
	    'password' => 'password',
	    'database' => 'curd'

	    Make sure 'curd'. collection is exist into your database.
	 
 	2. Run 
 		* Migration script by following command -  "php artisan migrate"
 		* Seed to create demo users - "php artisan db:seed"

