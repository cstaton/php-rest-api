# php-rest-api

###This is a starter repo for a scalable PHP REST API
###It uses the following libraries and dependencies
  *MySQL Database to store data
  *Slim 3 to handle routing
  *Doctrine 2 ORM to handle mapping and queries
  
### These are the basic steps to get this repo up and going
1. Clone repo to your local computer
2. Install composer if you don't already have it installed
3. run command composer update in the root folder of the project
4. Set up your apache settings to point to the public folder
  *This can sometimes be a pain but well worth it!
5. Run MySql locally and load up the schema.sql file to get some data in the database
6. Need to set up the Database class with the correct username, password, database name, etc.
  *Should probably create a config file with your settings and replace with variables
  *For now they are hard coded
7. should be able to ping the /user/test route to get a list of users