---
title: Dcoker Swarm
description: Docker Swarm Snippets
extends: _layouts.documentation
section: content
---

# Docker Swarm

## About docker swarm
 - Cluster management integrated with Docker Engine
 - Decentralized design
 - Declarative service model
 - Scaling
 - Desired state reconciliation
 - Multi-host networking
 - Service discovery
 - Load balancing
 - Secure by default
 - Rolling updates

## Prerequisite

 - Docker Engine installed
 - Port enable for comunicate each node
   - TCP: 2376
   - TCP: 2377
   - TCP/UDP: 7946
   - UDP: 4789

## Command reference
 - docker swarm init
    for Initialize a swarm mode
    
    command: `docker swarm init [OPTIONS]`
    
    options:
      - `--advertise-addr` : 	Advertised address (format: <ip|interface>[:port])
      - `--autolock` : Enable manager autolocking (requiring an unlock key to start a stopped manager)
      - `--availability` : Availability of the node (“active”|”pause”|”drain”)
      - `--cert-expiry` : Validity period for node certificates (ns|us|ms|s|m|h)
      - `--data-path-addr` : Address or interface to use for data path traffic (format: <ip|interface>)
      - `--data-path-port` : Port number to use for data path traffic (1024 - 49151). If no value is set or is set to 0, the default port (4789) is used.
      - `--default-addr-pool` : default address pool in CIDR format
      - `--default-addr-pool-mask-length` : default address pool subnet mask length
      - `--dispatcher-heartbeat` : Dispatcher heartbeat period (ns|us|ms|s|m|h)
      - `--external-ca` : Specifications of one or more certificate signing endpoints
      - `--force-new-cluster` : Force create a new cluster from current state
      - `--listen-addr` : Listen address (format: <ip|interface>[:port])
      - `--max-snapshots` : Number of additional Raft snapshots to retain
      - `--snapshot-interval` : Number of log entries between Raft snapshots
      - `--task-history-limit` : 	Task history retention limit
    
    reference : https://docs.docker.com/engine/reference/commandline/swarm_init

 - docker swarm join
    for join a swarm as a node and/or manager

    command: `docker swarm join [OPTIONS] HOST:PORT`

    options:
      - `--advertise-addr` : Advertised address (format: <ip|interface>[:port])
      - `--availability` : Availability of the node (“active”|”pause”|”drain”)
      - `--data-path-addr	` : Address or interface to use for data path traffic (format: <ip|interface>)
      - `--listen-addr` : Listen address (format: <ip|interface>[:port])
      - `--token` : Token for entry into the swarm
    
    reference: https://docs.docker.com/engine/reference/commandline/swarm_join/
---

There are still have more reference to this snippets
 - docker stack
 - docker service
    
