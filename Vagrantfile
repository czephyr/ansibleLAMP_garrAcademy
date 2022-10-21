

    # -*- mode: ruby -*-
    # vi: set ft=ruby :
     
    # All Vagrant configuration is done below. The "2" in Vagrant.configure
    # configures the configuration version (we support older styles for
    # backwards compatibility). Please don't change it unless you know what
    # you're doing.
    Vagrant.configure("2") do |config|
      # The most common configuration options are documented and commented below.
      # For a complete reference, please see the online documentation at
      # https://docs.vagrantup.com.
     
      # Every Vagrant development environment requires a box. You can search for
      # boxes at https://vagrantcloud.com/search.
      config.vm.define "lamp" do |lamp|
         lamp.vm.box = "debian/bullseye64"
         lamp.vm.network "private_network", ip: "192.168.56.8"
         lamp.vm.hostname = "lamp"
      end
     
      config.vm.provider "virtualbox" do |vb|
        # Display the VirtualBox GUI when booting the machine
        vb.gui = false
      
        # Customize the amount of memory on the VM:
        vb.memory = "1024"
        vb.cpus = "1"
      end
      
      # This is the username that Vagrant will use when attempting any sort of SSH-based communication with the VM.
      config.ssh.username = "vagrant"
      
    end

