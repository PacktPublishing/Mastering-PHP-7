sudo apt-get -y install php7.0-dev
sudo apt-get -y install unzip
wget https://github.com/phpredis/phpredis/archive/php7.zip -O phpredis.zip
unzip phpredis.zip 
cd phpredis-php7/
phpize
./configure
make
sudo make install
echo extension=redis.so >> /etc/php/7.0/cli/php.ini
