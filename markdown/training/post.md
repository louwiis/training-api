# Create a new Training

Creatre a new training in the application.

**URL** : `/api/training/`

**Method** : `POST`

**Data constraints** 

```json
{
    "name": "[string]",
    "startDate": "[date]",
    "endDate": "[date]",
    "maxParticipants": "[integer]",
    "price": "[integer]"
}
```

**Data example**

```json
{
    "name": "Typescript",
    "startDate": "2023-01-20",
    "endDate": "2023-01-24",
    "maxParticipants": 7,
    "price": "1000"
}
```

## Success Responses

**Condition** : If 

**Code** : `200 OK`

**Content example**

```json
{
    "name": "Typescript",
    "startDate": "2023-01-20",
    "endDate": "2023-01-24",
    "maxParticipants": 7,
    "price": "1000",
    "updated_at": "2023-01-02T21:54:15.000000Z",
    "created_at": "2023-01-02T21:54:15.000000Z",
    "id": 367
}
```

## Error Response

**Condition** : If the data is not valid.

**Code** : `422 UNPROCESSABLE ENTITY`

**Content** :

```json
{
    "name": [
        "The name field is required."
    ],
    "startDate": [
        "The start date field is required."
    ],
    "endDate": [
        "The end date field is required."
    ],
    "maxParticipants": [
        "The max participants field is required."
    ],
    "price": [
        "The price field is required."
    ]
}
```
