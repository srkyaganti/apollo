# updating package manager
sudo apt-get update

# install nginx
sudo apt-get install nginx

# install mysql-server
sudo debconf-set-selections <<< 'mysql-server mysql-server/root_password password password'
sudo debconf-set-selections <<< 'mysql-server mysql-server/root_password_again password password'
sudo apt-get -y install mysql-server