---
extends: _layouts.documentation
section: content
title: Kubernetes snippets
description: Kubernetes Admin Snippets
---

# Kubernetes

---

## Prerequisites: kuberntes Master/worker has been setup, kubectl CLI utility is present to interact with kubernetes api-server

### Get basic info about nodes and their roles in the cluster
```
kubectl get nodes
```

### Get more detailed description
```
kubectl get nodes -o wide
```

### Get information about the pods running in current namespace
```
kubectl get pods //can be used with -o wide for detailed description
```

### Create your namespace
```
kubectl create namespace test
```

### Delete your namespace
```
kubectl delete namespace test
```

### Retrieving pods information from test namespace
```
kubectl get pods -n test
```

### Create deployment from CLI
```
kubectl run <<app-name>> --image=<<docker_image_url>>
```

### Exposing deploymemt on NodePort
```
kubectl expose deployment <<app-name>> --type=NodePort
```

### Delete deployment
```
kubectl delete deployment/<<app-name>>
```

### Get services
```
kubectl get svc
```

### Get cluster-info
```
kubectl get cluster-info
```

### Get pods from all namespaces
```
kubectl get pods --all-namespaces
```

### Get all components of your cluster in all namespaces(PODs, Deployments, Services, ReplicaSet etc.)
```
kubectl get all --all-namespace
```

### Executing command inside pod
```
kubectl exec <<pod_name>> <<cmd>>
```

### Getting inside a running pod
```
kubectl exec -it <<pod_name>> /bin/bash
```

### Scaling application through deployment
```
kubectl scale --replicas=<<no_of_replicas>> deploy/<<app-name>>
```

### Get labels present on pods from every namespace with detailed info
```
kubectl get pods --show-labels --all-namespaces -o wide
```
