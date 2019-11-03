---
extends: _layouts.documentation
section: content
title: Kubernetes snippets
description: Kubernetes Admin Snippets
---

# Kubernetes
## Prerequisites: 
* Kubernetes Master/worker has been setup, 
* The kubectl CLI utility is configured to interact with kubernetes api-server

###Check if you can connect to the cluster
```sh
kubectl cluster-info
```

###Get basic info about nodes and their roles in the cluster
```sh
kubectl get nodes
```

###Get a more detailed description
```bash
kubectl get nodes -o wide
```

###Get information about the pods running in current namespace
```sh
kubectl get pods #can be used with -o wide for detailed description
```

###Create your namespace
```sh
kubectl create namespace test
```


###Delete your namespace
```sh
kubectl delete namespace test
```

###Retrieving pods information from test namespace
```sh
kubectl get pods -n test
```

###Create deployment from CLI
```sh
kubectl run <<app-name>>  --image=<<docker_image_url>>
```

###Exposing deploymemt on NodePort
```sh
kubectl expose deployment <<app-name>> --type=NodePort
```

###Delete deployment
```sh
kubectl delete deployment/<<app-name>>
```

###Get services
```sh
kubectl get svc
```

###Get pods from all namespaces
```sh
kubectl get pods --all-namespaces
```

###Get all components of your cluster in all namespaces(PODs, Deployments, Services, ReplicaSet etc.)
```sh
kubectl get all  --all-namespace
```

###Executing command inside pod
```sh
kubectl exec   <<pod_name>> <<cmd>>
```

###Getting inside a running pod
```sh
kubectl exec -it <<pod_name>>  /bin/bash
```

###Scaling application through deployment
```sh
kubectl scale --replicas=<<no_of_replicas>> deploy/<<app-name>>
```

###Get labels present on pods from every namespace with detailed info
```sh
kubectl get pods --show-labels --all-namespaces -o wide
```

###Apply a configuration using config files
```sh
kubectl apply -f <<file_name>>
```

