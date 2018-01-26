# updating package manager
sudo apt-get update

# install nginx
sudo apt-get install nginx

# install mysql-server
sudo debconf-set-selections <<< 'mysql-server mysql-server/root_password password 5107'
sudo debconf-set-selections <<< 'mysql-server mysql-server/root_password_again password 5107'
sudo apt-get -y install mysql-server