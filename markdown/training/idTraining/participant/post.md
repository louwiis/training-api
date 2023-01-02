# Create a new participant to a training

Create a new participant to a training in the application.

**URL** : `/api/training/{idTraining}/participant`

**URL Parameters** : `idTraining=[integer]` where `idTraining` is the ID of the Training in the URL

**Method** : `POST`

**Data constraints** 

```json
{
    "firstName": "[string]",
    "lastName": "[string]",
    "company": "[string], optional"
}
```

**Data example**

```json
{
    "firstName": "John",
    "lastName": "Doe",
    "company": "Acme",
}
```

## Success Response

**Condition** : If the participant has been created.

**Code** : `200 OK`

**Content example** 

```json
{
    "firstName": "John",
    "lastName": "Doe",
    "company": "Acme",
}
```

## Error Response

**Condition** : If the training does not exist.

**Code** : `404 NOT FOUND`

**Content** :

```json
{
    "message": "Training not found"
}
```

### Or

**Condition** : If the data is not valid.

**Code** : `422 UNPROCESSABLE ENTITY`

**Content**

```json
{
    "firstName": [
        "The first name field is required."
    ],
    "lastName": [
        "The last name field is required."
    ]
}
```


