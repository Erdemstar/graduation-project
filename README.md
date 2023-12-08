# Graduation Project
##### This project creted for help to understand how a vulnerable work in backend and improve pentest skill. I created this project for my graduation. You can see lots of diffrent vulnerable in here.

# Installation

```sh
$ git clone https://github.com/Erdemstar/graduation-project
$ cd graduation-project && mv * /var/www/html && cd /var/www/html 
$ sudo service mysql start 
$ mysql -u root -p
$ CREATE DATABASE users;
$ mysql -u root -p users < users.sql (terminal)
$ mysql -u root -p 
$ CREATE USER 'pentest'@'localhost' IDENTIFIED BY 'pentest';
$ GRANT ALL PRIVILEGES ON users.* TO 'pentest'@'localhost';
$ FLUSH PRIVILEGES;
$ chmod -R 777 include/uploads
$ sudo service apache2 start
```

![screencapture-localhost-graduation-project-2020-04-19-07_49_15](https://user-images.githubusercontent.com/26081033/79687094-d737c500-8212-11ea-8f38-36e69faf0d9e.png)
