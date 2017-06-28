sudo apt-get update
sudo apt-get -y install build-essential tcl
wget http://download.redis.io/redis-stable.tar.gz
tar xzf redis-stable.tar.gz
cd redis-stable
make
make test
sudo make install
./src/redis-server

