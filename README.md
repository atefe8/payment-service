# Payment Service

Laravel 12.x microservice responsible for all payment operations.

**Framework:** Laravel 12 (PHP 8.2+)  
**Recommended Box:** `ubuntu/jammy64` (Ubuntu 22.04 LTS)  
**Virtualization:** Vagrant + VirtualBox 

### Virtualization Requirements
Make sure you have the following installed:

- [VirtualBox] ≥ 6.1
- [Vagrant] ≥ 2.4

### One-command Setup
```bash
# 1. Clone the repo (or just enter the payment-service folder)
cd payment-service

# 2. Initialize vagrant
vagrant init

# 3. start the VM (first time will download ~1.2 GB box)
vagrant up

# 4. Enter the machine
vagrant ssh
```



### Virtual Machine Specs

| Resource    | Value            |
|-------------|------------------|
| VM Name     | PaymentService   |
| Private IP  | 192.168.52.10    |
| RAM         | 1024 MB          |
| CPU         | 2 cores          |
| Source code | Automatically synced to `/var/www/backend` |
