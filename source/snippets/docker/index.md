---
extends: _layouts.documentation
section: content
title: Install Docker-CE on Ubuntu Linux 18.04
description: Docker Dev Snippets
---

# Docker

## Installing Docker-CE on Ubuntu Linux 18.04

(Should be the same for most current versions)

```bash
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
# You need to log out and log back in so that your group membership is re-evaluated
sudo usermod -aG docker $USER
```

## Clean unused data

Removes all:

- Stoped containers
- Unused networks
- Dangling images
- Dangling build cache

```bash
docker system prune
```

## Clear docker logs

Finds all `.log` files in `/var/lib/docker/containers/` and truncates their size to 0.

```bash
sudo find /var/lib/docker/containers/ -name "*.log*" -exec truncate -s 0 {} \;
```

## Get IP Address of a container

Remember to change the container name or id

```bash
docker inspect -f '{{range .NetworkSettings.Networks}}{{.IPAddress}}{{end}}' container_name_or_id
```
