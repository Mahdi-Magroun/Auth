# Authentication API using PHP 

## description 

this **api** use **mvc** model and *singleton pattern* to provide a clear and understandable code ,this project come with all the needed services to manage user account 



## services provided 

| services       | method | data sent to the server                      |
| -------------- | ------ | -------------------------------------------- |
| verify account | post   | username ,   userpassword  ,  action         |
| add account    | post   | username , userpassword ,  usermail,  action |
| update account | post   | id, username, userpassword  , action         |
| delete account | post   | id, username, userpassword  , action         |

## project architecture 



- auth

  - conf

    - DataBaseControll.php

  - Controll

    - Controll.php

  - model

    - dao
      - userDao.php
    - entity
      - User.php

  - myLib

    - ControllDb.php
    - ORM.php

  - public

    - index.php

    

    #### conf 

    contain database configuration file .

    #### Control 

    contain the controller class .

    #### model 

    contain data access object for the user entity  .

    #### mylib  

    contain 2 library that i made and allow a simple manipulation of the data base .

    #### public 

    intercept the request and contain all the logic .

    

    

    ## configuration 

    - verify paths in the header of files because no autoloader is used 

    - ```php
      <?php 
      
         /*auth/conf/DatabaseConnection.php 
         - add your connection data (host,username,password,database name)
         */ 
      
      private $host="127.0.0.1";
      private $usr="root";
      private $pwd="mmagrounmahdi@gmail.com";
      private static $db="api"; 
      
      
      ```

      ## contribute 

      make sure to modify the source code to your need and don't forget to contribute there is a lot of work to be done here ;) ,	

       i will answer answer all your messages . 

    

