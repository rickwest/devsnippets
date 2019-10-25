---
extends: _layouts.documentation
section: content
title: Kubernetes snippets
description: Kubernetes Admin Snippets
---

## Prerequisites: kuberntes Master/worker has been setup, kubectl CLI utility is present to interact with kubernetes api-server

//Get basic info about nodes and their roles in the cluster
kubectl get nodes

//for more detailed description
kubectl get nodes -o wide 

//get information about the pods running in current namespace
kubectl get pods //can be used with -o wide for detailed description

//create your namespace
kubectl create namespace test

//delete your namespace
kubectl delete namespace test

//retrieving pods information from test namespace
kubectl get pods -n test

//Create deployment from CLI
kubectl run <<app-name>>  --image=<<docker_image_url>>

//exposing deploymemt on NodePort
kubectl expose deployment <<app-name>> --type=NodePort

//delete deployment
kubectl delete deployment/<<app-name>>

//get services
kubectl get svc

//get cluster-info
kubectl get cluster-info

//get pods from all namespaces
kubectl get pods --all-namespaces

//get all components of your cluster in all namespaces(PODs, Deployments, Services, ReplicaSet etc.)
kubectl get all  --all-namespace

//executing command inside pod
kubectl exec   <<pod_name>> <<cmd>>

//getting inside a running pod
kubectl exec -it <<pod_name>>  /bin/bash

//scaling application through deployment
kubectl scale --replicas=<<no_of_replicas>> deploy/<<app-name>>

//get labels present on pods from every namespace with detailed info
kubectl get pods --show-labels --all-namespaces -o wide

