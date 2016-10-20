# WebAppProjekt
NTB Webapplikation Projekt

Schnelle und praktische Lösung für den NTB-Stundenplan.

The Lineup

Using Laravel
https://laravel.com/

Info
	Laravel version: 5.3
	Documentation: http://laravel.com/docs/5.3
	Project name: Lineup


#1. Installation
	
###1.1 Introduction
The Laravel framework has a few system requirements. Of course, all of these requirements are satisfied by the Laravel Homestead virtual machine, so it's highly recommended that you use Homestead as your local Laravel development environment.
		
Laravel Homestead is an official, pre-packaged Vagrant box that provides you a wonderful development environment without requiring you to install PHP, a web server, and any other server software on your local machine.
	
###1.1 Virtualisation software intallation
VirtualBox5.x is needed to run the Homestead Vagrant Box VirtualBox download link: https://www.virtualbox.org
	
###1.2 Vagrant installation
Vagrant provides a simple, elegant way to manage and provision Virtual Machines. Vagrant download link: http://vagrantup.com/
    
###1.3 Git installation
Git is a version control system that is used for software development and other version control tasks. In this installation guide we are going to use Git to clone several repositories Vagrant download link: http://vagrantup.com/
		
###1.4 Download/Add Laravel Homestead Box package
Navigate with a terminal to a directory where you want vagrand box to be added (home directory) and execute following command:
```
vagrant box add laravel/homestead
```
thist could take up to 30 min depending on the internet connection
    
###1.5 Homestead installation
You may install Homestead by simply cloning the repository into a Homestead foldr within your "home" directory
```
cd ~
git clone https://github.com/laravel/homestead.git Homestead
```
###1.6 Homestead initialisation
Once you have cloned the Homestead repository, run the bash init.sh command from the Homestead directory to create the Homestead.yaml configuration file. The Homestead.yaml file will be placed in the ~/.homestead hidden directory:
```
bash init.sh
```
    
###1.7 Configuring Shared Folders
The folders property of the Homestead.yaml file lists all of the folders you wish to sync with your Homestead Box. 
```
folders:
- map: ~/Desktop/Development/webappprojekt/lineup
  to: /home/vagrant/Code/lineup
```
This is the folder where we are going to clone the existing Project directory
    
###1.8 Configuring Nginx Sites
The sites property allows you to easily map a "domain" to a folder on your Homestead environment
```
sites:
- map: lineup.dev
  to: /home/vagrant/Code/lineup/public
```
###1.9 Cloning the Project repository
Move to your development folder (/Desktop/Development/) and clone the project repository
```
git clone https://github.com/geobontognali/webappprojekt.git
```
    
###1.10 Create a SSH key pair 
run this command in your homestead folder:
```
ssh-keygen -t rsa -C "your@email.com"
```
#2 Running the environment

###2.1 Managing the vagrant box
Execute following commands from your homestead folder to start shutdown and reboot the vagrant box
```
vagrant up 
vagrant halt
bagrant reload
```
If problems occours by the first start reboot your host system and retry
    
###2.2 Access the vagrant box
Execute following command from your homestead folder to access the vagrant box via ssh
```
vagrant ssh
```

###2.3 Configuring the Hostfile
You must add the "domains" for your Nginx sites to the hosts file on your machine. On Windows, it is located at C:\Windows\System32\drivers\etc\hosts
The lines you add to this file will look like the following:
```
192.168.10.10  lineup.dev
```
    
###2.4 Installing required packages
Enter your vagrant box via ssh and navigate to the root of the lineup project and execute following command to let the composer install the required packages:
```
composer install
```

###2.5 Environment configuration
The configuration file who contains several environments variable has to be created. In the root directory of the project there is an example configuration file that can be copied following this command:
```
cp .env.example .env
```
To let the server send emails following variables have to be modified:
```
MAIL_DRIVER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=youremail@gmail.com
MAIL_PASSWORD=yourpassword
MAIL_ENCRYPTION=tls
```

###2.6 Generating a new application key
```
php artisan key:generate
```

###2.6 Database population
To fill in the database with some entries go to following url:
```
lineup.dev/populate
```
All the containt should now be visible at the following url:
```
lineup.dev/populate
```
