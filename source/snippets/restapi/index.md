---
title: REST API
extends: _layouts.documentation
description: Guide to building REST API
section: content
---

# Guide to building REST API

## URL structure

It should be human readable 


```
https://api.contoso.com/v1.0/people/jdoe@contoso.com/inbox
```

 HTTP STATUS CODES

* 1×× Informational
``` 
100 Continue
101 Switching Protocols
102 Processing
```
* 2×× Success

```
200 OK
201 Created
202 Accepted
203 Non-authoritative Information
204 No Content
205 Reset Content
206 Partial Content
207 Multi-Status
208 Already Reported
226 IM Used
```
* 3×× Redirection
```
300 Multiple Choices
301 Moved Permanently
302 Found
303 See Other
304 Not Modified
305 Use Proxy
307 Temporary Redirect
308 Permanent Redirect
```
* 4×× Client Error
```
400 Bad Request
401 Unauthorized
402 Payment Required
403 Forbidden
404 Not Found
405 Method Not Allowed
406 Not Acceptable
407 Proxy Authentication Required
408 Request Timeout
409 Conflict
410 Gone
411 Length Required
412 Precondition Failed
413 Payload Too Large
414 Request-URI Too Long
415 Unsupported Media Type
416 Requested Range Not Satisfiable
417 Expectation Failed
418 I'm a teapot
421 Misdirected Request
422 Unprocessable Entity
423 Locked
424 Failed Dependency
426 Upgrade Required
428 Precondition Required
429 Too Many Requests
431 Request Header Fields Too Large
444 Connection Closed Without Response
451 Unavailable For Legal Reasons
499 Client Closed Request
```
* 5×× Server Error
```
500 Internal Server Error
501 Not Implemented
502 Bad Gateway
503 Service Unavailable
504 Gateway Timeout
505 HTTP Version Not Supported
506 Variant Also Negotiates
507 Insufficient Storage
508 Loop Detected
510 Not Extended
511 Network Authentication Required
599 Network Connect Timeout Error
```

### Standard Request Headers

| Header       | Type                  | 
| ------------- |-------------:        | 
| Authorization         | String        | 
| Date                  | centered      |
| Accept                | Content type      |    
| Accept-Encoding       |Gzip, deflate        |
| Accept-Language        | "en", "es", etc.      |
| Accept-Charset         | Charset type like "UTF-8"      |
| Prefer        | return=minimal, return=representation"      |
| If-Match, If-None-Match, If-Range        | String  |

### Standard Response headers

| Response Header       | Required                   | 
| ------------- |-------------:        | 
| Date        | All responses       | 
| Content-Type         | All responses   | 
| Content-Encoding        | All responses   | 
| Preference-Applied        | When specified in request   | 
| ETag        | When the requested resource has an entity tag   |

### HTTP METHODS

| Methods         | Description                   |  Is Idempotent    |
| :------------- |:-------------        | :----|
|GET|	 Return the current value of an object	| True |
PUT|	Replace an object, or create a named object, when applicable	|True |
DELETE|	Delete an object	|True|
POST|	Create a new object based on the data provided, or submit a command	|False|
HEAD| 	Return metadata of an object for a GET response. Resources that support the GET method MAY support the HEAD method as well	|	True|
PATCH|	Apply a partial update to an object|	False|
OPTIONS	|Get information about a request; see below for details.|	True|