# Show all the trainings

Show all the trainings that exist in the application.

**URL** : `/api/training/`

**Method** : `GET`

**Data constraints** : `{}`

## Success Responses

**Condition** : If there is no training.

**Code** : `200 OK`

**Content** : `[]`

### OR

**Condition** : If there is many trainings.

**Code** : `200 OK`

**Content example**

```json
[
  {
    "id": 1,
    "name": "Typescript",
    "startDate": "2022-11-30",
    "endDate": "2022-12-02",
    "maxParticipants": 7,
    "price": "1000",
    "created_at": "2022-12-28T23:44:58.000000Z",
    "updated_at": "2022-12-28T23:44:58.000000Z",
    "participants": [
      {
        "id": 1,
        "training_id": 1,
        "firstName": "Mercredi",
        "lastName": "Adams",
        "company": "Nike",
        "created_at": "2022-12-28T23:45:03.000000Z",
        "updated_at": "2022-12-28T23:45:03.000000Z"
      },
    ]
  },
  {
    "id": 2,
    "name": "Python",
    "startDate": "2022-11-30",
    "endDate": "2022-12-02",
    "maxParticipants": 7,
    "price": "200",
    "created_at": "2022-12-28T23:45:21.000000Z",
    "updated_at": "2022-12-28T23:45:21.000000Z",
    "participants": []
  }
]
```
