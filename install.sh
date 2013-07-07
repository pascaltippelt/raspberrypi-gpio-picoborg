sudo groupadd www-data
sudo usermod -a -G www-data www-data
sudo apt-get update
sudo apt-get install apache2 php5 libapache2-mod-php5 libapache2-mod-perl2 php5 php5-cli php5-common php5-curl php5-dev php5-gd php5-imap php5-ldap php5-mhash php5-mysql php5-odbc php-pear php-apc
sudo chown pi:pi /var/www
sudo chown pi:pi /var/www/*
cp index.php /var/www
mkdir /var/www/img
mkdir /var/www/mobil
mkdir /var/www/mobil/img
cp img/* /var/www/img
cp mobil/* /var/www/mobil
cp mobil/img/* /var/www/mobil/img
sudo echo "gpio -g mode 4 out" > /bin/setgpio
sudo echo "gpio -g mode 7 out" >> /bin/setgpio
sudo echo "gpio -g mode 8 out" >> /bin/setgpio
sudo echo "gpio -g mode 18 out" >> /bin/setgpio
sudo chmod +x /bin/setgpio
sudo echo "sudo -u www-data setgpio" >> /etc/rc.local
echo "Done. Now open [Adress od your Pi]/index.php ind a browser"
exit
