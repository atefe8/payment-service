Vagrant.configure("2") do |config|

  config.vm.define "PaymentService" do |vm1|
    vm1.vm.box = "ubuntu/jammy64"
    vm1.vm.hostname = "PaymentService"
    vm1.vm.network "private_network", ip: "192.168.52.10"

    vm1.vm.provider "virtualbox" do |vb|
      vb.memory = 1024
      vb.cpus = 2
    end

    # copy project file into var/www in node
    vm1.vm.synced_folder "./payment-service", "/var/www/backend", create: true
  end

end
