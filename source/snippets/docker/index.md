extends: _layouts.documentation
section: content
title: Install Docker-CE on Ubuntu Linux 18.04
description: A useful snippet that shows how to install Docker-CE on Ubuntu and also my first Open Source contribution!

# Install Docker-CE on Ubuntu Linux 18.04 (should be the same for most current versions)

```shell
# Update the apt package list.
sudo apt-get update -y
# Install Docker's package dependencies.
sudo apt-get install -y \
    apt-transport-https \
    ca-certificates \
    curl \
    software-properties-common
# Download and add Docker's official public PGP key.
curl -fsSL https://download.docker.com/linux/ubuntu/gpg | sudo apt-key add -
# Verify the fingerprint.
sudo apt-key fingerprint 0EBFCD88
# Add the `stable` channel's Docker upstream repository.
sudo add-apt-repository \
   "deb [arch=amd64] https://download.docker.com/linux/ubuntu \
   $(lsb_release -cs) \
   stable"
# Update the apt package list (for the new apt repo).
sudo apt-get update -y
# Install the latest version of Docker CE.
sudo apt-get install -y docker-ce
# Allow your user to access the Docker CLI without needing root access.
sudo usermod -aG docker $USER
```