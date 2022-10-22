<!-- ABOUT THE PROJECT -->
# Ansible built LAMP stack

Exercise developed during the [GARR Academy](https://www.garr.it/it/news-e-eventi/comunicati/2053-competenze-hi-tech-in-italia-al-via-la-garr-academy) as an introduction to working with Ansible. 

## About the code

In this mini-project two Ansible roles are used to configure a LAMP stack webapp on a Vagrant VM. One of the roles installs a MySQL instance on the VM and creates the DB and populates it.
The second Ansible role configures an Apache webserver to show a PHP page which queries the DB on its contents and displays it. 

### Commands 

To create the Vagrantfile
 ```sh
   vagrant init
   ```
To instantiate the VM through the Vagrantfile
 ```sh
   vagrant up
   ```
\
The file `inventory.ini` will contain informations about the VM we instantiated for Ansible to know
 ```ini
   lamp.garr.academy ansible_host=192.168.56.8 ansible_ssh_private_key_file=/home/academy/vagrant4academy/.vagrant/machines/lamp/virtualbox/private_key
   ```
The file `lamp-playbook.yml` will be used to begin the Ansible routine defined by the two roles. 
 ```yaml
    ---
    # A playbook
    - name: Init playbook
      hosts: lamp.garr.academy
      remote_user: vagrant
      become: yes

      roles:
        - mysql
        - apache2
   ```
To start the playbook
 ```sh
    ansible-playbook lamp-playbook.yml
