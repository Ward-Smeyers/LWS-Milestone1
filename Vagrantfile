
Vagrant.configure("2") do |config|

  config.vm.box = "generic/ubuntu2204"
  config.vm.network "forwarded_port", guest: 80, host: 443
  # config.vm.network "private_network", ip: "192.168.56.5"
  config.vm.provider "virtualbox" do |v|
    v.name = "Milestone1"
    v.memory = 4096
    v.cpus = 2
  end
  
  config.vm.hostname = "Milestone1"
  config.vm.synced_folder ".", "/vagrant"
  config.vm.provision "shell", path: "./script.sh"

end