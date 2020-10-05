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

## Docker Cheatsheet

###  Docker build
```bash
// simple build

docker build .

// good practice

docker build -t <tag name> .

// please note, for these command to work you need to have a dockerfile present.
```

### Docker images
```bash

// list all images on disk

docker images

// search a particular image
docker images --filter=reference="centos"  //will give all locally present images of centos

// remove a certain image

docker image rm <image hash> //only first 3 characters of hash code is enough for docker daemon to distinguish the image.
```

### Docker containers
```bash
// list all containers online/offline
docker ps -a
docker container ls -a

// remove/stop/kill a certain container
docker kill rm <container hash>

//coming out of container without exiting it
ctrl+P+Q

//searching docker image on docker hub
docker search <<image_name>>

//tagging local image with another name
docker tag <<old_image_name>> <<new_image_name>>

//"SSH" into a running container
docker exec -it <<container_name>> /bin/bash

//Execute arbitrary command in container
docker exec -it <<container_name>> <<command>>

```

### Remove all dangling images
```bash
docker rmi $(docker images | grep "^<none>" | awk "{print $3}")
```

or
```bash
docker rmi -f $(docker images -f "dangling=true" -q)
```

### Remove all exited containers
```bash
docker ps -a | grep Exit | cut -d ' ' -f 1 | xargs docker rm
```
