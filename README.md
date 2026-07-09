## Wordpress

A responsive skincare e-commerce website built with WordPress and WooCommerce, featuring custom-designed and edited visuals created in Adobe Illustrator using Linux environment.



## Database

Database name : wordpress_db


## Download & Configure WordPress

cd /var/www/html
sudo wget https://wordpress.org/latest.tar.gz
sudo tar -xzvf latest.tar.gz
sudo chown -R www-data:www-data /var/www/html/wordpress
sudo chmod -R 755 /var/www/html/wordpress



## Configure WordPress

cd /var/www/html/wordpress
sudo cp wp-config-sample.php wp-config.php
sudo nano wp-config.php

Database name : wordpress_db

```bash
define( 'DB_NAME', 'wordpress_db' );
define( 'DB_USER', 'wp_user' );
define( 'DB_PASSWORD', 'your_password' );
define( 'DB_HOST', 'localhost' );
```


## Configure Apache Virtual Host

<code>
    <VirtualHost *:80>
        DocumentRoot /var/www/html/wordpress
        ServerName localhost

        <Directory /var/www/html/wordpress>
            AllowOverride All
            Require all granted
        </Directory>
    </VirtualHost> 
</code>

```bash
sudo a2ensite wordpress.conf
sudo a2enmod rewrite
sudo service apache2 restart
```

## Access WordPress

Open: http://localhost/
You'll see the WordPress installation wizard. Fill in your site name, admin username, and password.


## Useful Service Commands

Manage Apache sudo service apache2 start/stop/restart
Manage MySQL sudo service mysql start/stop/restart
Check Apache status sudo service apache2 status