# AppTemplate

AppTemplate for Apps

## Previous Requisites

* PHP 8.1 o superior
* Apache
* Drivers PDO (MySQL, PostgreSQL, SQL Server, etc.)
* Composer
* Node JS
* Laravel 11 (pref.)
* Git
* Docker environ (optional)


## Deploy

Clone and configure the repo
```
git clone **[RepoURL]**
cd **[RepoDir]**
composer install
npm install
npm run build
cp .env.example .env
nano .env -> define environment variables
php artisan migrate
```

Optional: in production Or for shared hosting
```
sudo chmod 775 -R storage/
sudo chmod 775 -R bootstrap/cache
sudo chmod 775 -R storage/logs/
```

Enabling SSL in Apache 
(For production environments, it is recommended to obtain a valid SSL certificate from a Certificate Authority (CA) such as Let's Encrypt instead of using self-signed certificates.)
```
sudo apt-get update
sudo apt-get install apache2
sudo a2enmod ssl
sudo mkdir /etc/apache2/ssl
sudo openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout /etc/apache2/ssl/apache-selfsigned.key -out /etc/apache2/ssl/apache-selfsigned.crt
```

Create SSL VirtualHost
```
cd /etc/apache2/sites-available
sudo cp 000-default.conf **name_virtual_host**-ssl.conf
sudo nano **name_virtual_host**-ssl.conf
```

Edit content of SSL VirtualHost
```
<VirtualHost *:443>
    ServerAdmin **[MailAdmin]**@igroupsolution.com
    ServerName **[DomainOrIP]**
    DocumentRoot /var/www/html/**[PathToClonedRepo]**/public

    SSLEngine on
    SSLCertificateFile /etc/apache2/ssl/apache-selfsigned.crt
    SSLCertificateKeyFile /etc/apache2/ssl/apache-selfsigned.key

    <FilesMatch "\.(cgi|shtml|phtml|php)$">
        SSLOptions +StdEnvVars
    </FilesMatch>
    <Directory /usr/lib/cgi-bin>
        SSLOptions +StdEnvVars
    </Directory>

    ErrorLog ${APACHE_LOG_DIR}/error.log
    CustomLog ${APACHE_LOG_DIR}/access.log combined
</VirtualHost>
```

Open Listenign Apache Ports
```
sudo nano /etc/apache2/ports.conf


	# If you just change the port or add more ports here, you will likely also
	# have to change the VirtualHost statement in
	# /etc/apache2/sites-enabled/000-default.conf
	 
	Listen 80
	Listen 8085
	 
	<IfModule ssl_module>
		Listen 443
	</IfModule>
	 
	<IfModule mod_gnutls>
		Listen 443
	</IfModule>
```

Enable new VirtualHost
```
sudo a2ensite **name_virtual_host**-ssl.conf
sudo service apache2 restart
```


## License

AppTemplate, is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
