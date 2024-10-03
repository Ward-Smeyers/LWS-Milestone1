#!/bin/bash

# add docker group and add vagrant user to docker group
newgrp docker
usermod -aG docker vagrant
groups

# Add Docker's official GPG key:
apt-get update
apt-get install -y ca-certificates curl virtualbox-guest-utils
install -m 0755 -d /etc/apt/keyrings
curl -fsSL https://download.docker.com/linux/ubuntu/gpg -o /etc/apt/keyrings/docker.asc
chmod a+r /etc/apt/keyrings/docker.asc

# Add the repository to Apt sources:
echo \
  "deb [arch=$(dpkg --print-architecture) signed-by=/etc/apt/keyrings/docker.asc] https://download.docker.com/linux/ubuntu \
  $(. /etc/os-release && echo "$VERSION_CODENAME") stable" | \
  tee /etc/apt/sources.list.d/docker.list > /dev/null
apt-get update

# install docker tools
apt-get install -y docker-ce docker-ce-cli containerd.io docker-buildx-plugin docker-compose-plugin

# login to docker hub, recwiers .docker_password file vagrant synced_folder
cat /vagrant/.docker_password | docker login --username automator2 --password-stdin

# test docker
docker run hello-world
docker rm -f $(docker ps -f IMAGE=hello-world -q)
docker image rm -f hello-world

