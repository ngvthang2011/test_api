1. Order Management
Resource API

domain: 

- Login:
    * URI: /api/login
    * Method: POST
	* Request: email, password
	* Response:
    {
        "status": true,
        "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC8xMjcuMC4wLjE6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTYyMzQyNTYzMiwiZXhwIjoxNjIzNDI5MjMyLCJuYmYiOjE2MjM0MjU2MzIsImp0aSI6InJJUWNBTkRJd2VGRWFOTVciLCJzdWIiOjEsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.FkWUNsN6SY0pjW2yk41SgtNgXf4geSrt-nzOxwpUtOs"
    }
- Get Order
    * URI: api/order/1
	* Method: GET
	* Request: token
	* Response:
{
    "status": true,
    "code": 200,
    "data": {
        "id": 1,
        "full_name": "Nguyễn Tuấn Long",
        "address": "Hà Nội",
        "phone": "0339054040",
        "total": "1900000",
        "state": 1,
        "created_at": null,
        "updated_at": null
    }
}

	* Faile:
{
    "status": false,
    "code": 400,
    "message": 
}


- List Orders
    * URI: api/order
	* Method: GET
	* Request: token
	* Response:
{
    "status": true,
    "code": 200,
    "data": [
        {
            "id": 1,
            "full_name": "Nguyễn Tuấn Long",
            "address": "Hà Nội",
            "phone": "0339054040",
            "total": "1900000",
            "state": 1,
            "created_at": null,
            "updated_at": null
        },
        {
            "id": 2,
            "full_name": "Nguyễn Trường Sơn",
            "address": "Hà Nam",
            "phone": "0293054040",
            "total": "500000",
            "state": 1,
            "created_at": null,
            "updated_at": null
        },
        ...
    ]
}

	* Faile:
{
    "status": false,
    "code": 500,
    "message": ""
}

