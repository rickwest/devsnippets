---
extends: _layouts.documentation
section: content
title: Install Docker-CE on Ubuntu Linux 18.04
description: Docker Dev Snippets
---

# Docker

---

## Installing Docker-CE on Ubuntu Linux 18.04

(Should be the same for most current versions)


### Update the apt package list.
```bash
sudo apt-get update -y
```

### Install Docker's package dependencies.
```bash
sudo apt-get install -y \
    apt-transport-https \
    ca-certificates \
    curl \
    software-properties-common
```

### Download and add Docker's official public PGP key.
```bash
curl -fsSL https://download.docker.com/linux/ubuntu/gpg | sudo apt-key add -
```

### Verify the fingerprint.
```bash
sudo apt-key fingerprint 0EBFCD88
```

### Add the `stable` channel's Docker upstream repository.
```bash
sudo add-apt-repository \
   "deb [arch=amd64] https://download.docker.com/linux/ubuntu \
   $(lsb_release -cs) \
   stable"
```

### Update the apt package list (for the new apt repo).
```bash
sudo apt-get update -y
```

### Install the latest version of Docker CE.
```bash
sudo apt-get install -y docker-ce
```

### Allow your user to access the Docker CLI without needing root access.

> You need to log out and log back in so that your group membership is re-evaluated

```bash
sudo usermod -aG docker $USER
```

### Get IP Address of a container

Remember to change the container name or id

```bash
docker inspect -f '{{range .NetworkSettings.Networks}}{{.IPAddress}}{{end}}' container_name_or_id
```

---

## Clear data

### Clean unused data
Removes all:

- Stoped containers
- Unused networks
- Dangling images
- Dangling build cache

```bash
docker system prune
```

### Clear docker logs

Finds all `.log` files in `/var/lib/docker/containers/` and truncates their size to 0.

```bash
sudo find /var/lib/docker/containers/ -name "*.log*" -exec truncate -s 0 {} \;
```

---

## Docker build Cheatsheet

### Simple build
```bash
docker build .
```

### Good practice
```bash
docker build -t <TAG_NAME> .
```

> Note: For these command to work you need to have a dockerfile present.

---

## Docker images Cheatsheet

### List all images on disk

```bash
docker images
```

### Search a particular image
This will give all locally present images of provided filter reference.
```bash
docker images --filter=reference="<SEARCH_TERM>"
```

### Remove a certain image
```bash
docker image rm <IMAGE_HASH>
```
> Note: Only first 3 characters of hash code is enough for docker daemon to distinguish the image.

---

## Docker containers Cheatsheet

### List all containers online/offline

```bash
docker ps -a
docker container ls -a
```
### Remove/stop/kill a certain container
```bash
docker kill rm <CONTAINER_HASH>
```
### Coming out of container without exiting it
```bash
# Use this keybinding
Ctrl/Cmd+P+Q
```

### Searching docker image on docker hub
```bash
docker search <IMAGE_NAME>
```

### Tagging local image with another name
```bash
docker tag <OLD_IMAGE_NAME> <NEW_IMAGE_NAME>
```
