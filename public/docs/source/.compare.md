---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost:8000/docs/collection.json)

<!-- END_INFO -->

#general
<!-- START_39d63b10792f0c0ea1365e1d7bf70c67 -->
## /api/fruits

> Example request:

```bash
curl -X GET "http://localhost:8000//api/fruits" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost:8000//api/fruits",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "exception": null,
    "headers": {},
    "original": [
        {
            "id": 1,
            "name": "apple",
            "color": "green",
            "weight": "150",
            "delicious": "1",
            "created_at": "2017-05-31 23:45:26",
            "updated_at": "2017-05-31 23:45:26"
        },
        {
            "id": 2,
            "name": "banana",
            "color": "yellow",
            "weight": "116",
            "delicious": "1",
            "created_at": "2017-05-31 23:45:26",
            "updated_at": "2017-05-31 23:45:26"
        },
        {
            "id": 3,
            "name": "strawberries",
            "color": "red",
            "weight": "12",
            "delicious": "1",
            "created_at": "2017-05-31 23:45:26",
            "updated_at": "2017-05-31 23:45:26"
        }
    ]
}
```

### HTTP Request
`GET /api/fruits`

`HEAD /api/fruits`


<!-- END_39d63b10792f0c0ea1365e1d7bf70c67 -->

<!-- START_ae8405be74ebb24e3ab965dee6b11856 -->
## /api/fruit/{id}

> Example request:

```bash
curl -X GET "http://localhost:8000//api/fruit/{id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost:8000//api/fruit/{id}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "exception": null,
    "headers": {},
    "original": {
        "id": 3,
        "name": "strawberries",
        "color": "red",
        "weight": "12",
        "delicious": "1",
        "created_at": "2017-05-31 23:45:26",
        "updated_at": "2017-05-31 23:45:26"
    }
}
```

### HTTP Request
`GET /api/fruit/{id}`

`HEAD /api/fruit/{id}`


<!-- END_ae8405be74ebb24e3ab965dee6b11856 -->

<!-- START_d5417ec5d425f04b71e9a4e9987c8295 -->
## API Login, on success return JWT Auth token

> Example request:

```bash
curl -X POST "http://localhost:8000//api/authenticate" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost:8000//api/authenticate",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST /api/authenticate`


<!-- END_d5417ec5d425f04b71e9a4e9987c8295 -->

<!-- START_39798dab89951f0e0c3fc59a53f859e5 -->
## Logout
Invalidate the token, so user cannot use it anymore
They have to relogin to get a  new token

> Example request:

```bash
curl -X POST "http://localhost:8000//api/logout" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost:8000//api/logout",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST /api/logout`


<!-- END_39798dab89951f0e0c3fc59a53f859e5 -->

<!-- START_fde36329ab58ad5d6ab50b7704de548b -->
## Refresh the token

> Example request:

```bash
curl -X GET "http://localhost:8000//api/token" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost:8000//api/token",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET /api/token`

`HEAD /api/token`


<!-- END_fde36329ab58ad5d6ab50b7704de548b -->

<!-- START_a5d7bfde9c5e33e7c8fd6f07a11939b5 -->
## Returns the authenticated user

> Example request:

```bash
curl -X GET "http://localhost:8000//api/authenticated_user" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost:8000//api/authenticated_user",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET /api/authenticated_user`

`HEAD /api/authenticated_user`


<!-- END_a5d7bfde9c5e33e7c8fd6f07a11939b5 -->

<!-- START_7911c9ccc13ab3b52c29a3f7473bfa19 -->
## /api/fruits

> Example request:

```bash
curl -X POST "http://localhost:8000//api/fruits" \
-H "Accept: application/json" \
    -d "name"="enim" \
    -d "color"="enim" \
    -d "weight"="263" \
    -d "delicious"="1" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost:8000//api/fruits",
    "method": "POST",
    "data": {
        "name": "enim",
        "color": "enim",
        "weight": 263,
        "delicious": true
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST /api/fruits`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | 
    color | string |  required  | Only alphabetic characters allowed
    weight | numeric |  required  | 
    delicious | boolean |  required  | 

<!-- END_7911c9ccc13ab3b52c29a3f7473bfa19 -->

<!-- START_e839e2c58cf3045a3add8543207c9de4 -->
## Remove the specified fruit.

> Example request:

```bash
curl -X DELETE "http://localhost:8000//api/fruits/{id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost:8000//api/fruits/{id}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE /api/fruits/{id}`


<!-- END_e839e2c58cf3045a3add8543207c9de4 -->

