# Easy Chic
## Table of Content

-   [Description](#description)
-   [Requirements](#requirements)
-   [API Usage](#api-usage)
    -   [Endpoint](#endpoints)
-   [License](#license)

## Description

EasyChic is taken from the English “easy” and “chic” which is inspired by the concept of an
application that we will design with the vision of helping consumers look chic very easily
with just one click. In addition, EasyChic aims to support the growth and development of
SMEs and make it easier for consumers to buy clothes through the e-commerce business
model.

## Requirements

-   PHP 8.1
-   Laravel 10
-   Google Cloud Storage (GCS)


## API Usage

#### Endpoints

`http://localhost:8000/`

<details>
 <summary>Register | <code>POST</code> <code><b>/api/register</b></code></summary>

##### URL

`/register`

##### Method

`POST`

##### Parameters

> | key                   | type     | data type | description |
> | --------------------- | -------- | --------- | ----------- |
> | name                  | required | int       | N/A         |
> | email                 | required | string    | N/A         |
> | password              | required | string    | N/A         |
> | password_confirmation | required | string    | N/A         |

##### Responses

status: `200 Created`

```json
{
    "message": "Welcome, Tes 1! Registration successful",
    "user": {
        "name": "Tes 1",
        "email": "tes@gmail.com",
        "phone_number": null,
        "image": null,
        "updated_at": "2023-06-14T12:48:11.000000Z",
        "created_at": "2023-06-14T12:48:11.000000Z",
        "id": 2
    }
}
```

status: `202 Unprocessable Content`

```json
{
    "email": [
        "The email has already been taken."
    ]
}
```

</details>

<details>
 <summary>Login | <code>GET</code> <code><b>/api/login</b></code></summary>

##### URL

`/login`

##### Method

`POST`

##### Parameters

> | key      | type     | data type | description |
> | -------- | -------- | --------- | ----------- |
> | email    | required | string    | N/A         |
> | password | required | string    | N/A         |

##### Responses

status: `200 OK`

```json
{
    "message": "Welcome back, Tes 1!",
    "user": {
        "id": 2,
        "name": "Tes 1",
        "email": "tes@gmail.com",
        "email_verified_at": null,
        "created_at": "2023-06-14T12:48:11.000000Z",
        "updated_at": "2023-06-14T12:48:11.000000Z",
        "photo": null,
        "phone_number": null,
        "image": null
    }
}
```

status: `404 Not Found`

```json
[
    "These credentials do not match our records."
]
```
</details>

<details>
 <summary>Product | <code>GET</code> <code><b>/api/product</b></code></summary>

##### URL

`/api/product`

##### Method

`GET`

##### Responses
/api/product
status: `200 OK`
```
{
    "success": 1,
    "message": "Get Product Successfully",
    "product": [
        {
            "id": 3,
            "name": "[Cotton Combed] Black T-Shirt S 20s",
            "description": "[Cotton Combed] Black T-Shirt S 20s",
            "price": "26000",
            "colour": "Black",
            "quality": "Cotton Combed",
            "size": "S",
            "thickness": "20s",
            "category_id": 1,
            "image": "Cotton Combed (Black).png",
            "created_at": null,
            "updated_at": null
        },
        {
            "id": 4,
            "name": "[Cotton Combed] Grey T-Shirt S 20s",
            "description": "[Cotton Combed] Grey T-Shirt S 20s",
            "price": "26000",
            "colour": "Grey",
            "quality": "Cotton Combed",
            "size": "S",
            "thickness": "20s",
            "category_id": 1,
            "image": "Cotton Combed (Grey).png",
            "created_at": null,
            "updated_at": null
        },
        {
            "id": 5,
            "name": "[Cotton Combed] Maroon T-Shirt S 20s",
            "description": "[Cotton Combed] Maroon T-Shirt S 20s",
            "price": "26000",
            "colour": "Maroon",
            "quality": "Cotton Combed",
            "size": "S",
            "thickness": "20s",
            "category_id": 1,
            "image": "Cotton Combed (Maroon).png",
            "created_at": null,
            "updated_at": null
        },
        {
            "id": 6,
            "name": "[Cotton Combed] Mustard T-Shirt S 20s",
            "description": "[Cotton Combed] Mustard T-Shirt S 20s",
            "price": "26000",
            "colour": "Mustard",
            "quality": "Cotton Combed",
            "size": "S",
            "thickness": "20s",
            "category_id": 1,
            "image": "Cotton Combed (Mustard).png",
            "created_at": null,
            "updated_at": null
        }
    ]
}

```

</details>

## Feature

EasyChic Web has feature to :
1. User List: View a list of users who have access to the EasyChic web application.

<p align="center">
    <img src="storage\User List.png" width="720">
<p>

2. Product Listing: Display a list of all stored products, including their name, description, price, and other relevant details.

<p align="center">
    <img src="storage\Product List.png" width="720">
<p>

3. Product Creation: Add new products to the application, including their attributes and associated information.

<p align="center">
    <img src="storage\Product Form.png" width="720">
<p>


## License

Licensed under the MIT License