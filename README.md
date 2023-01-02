# API Documentation

Here you will find every endpoint available in the API.
I've let you a message at the home route at `http://localhost:8000/`. 
Sorry one more time (you will see why in a moment) and thank you for your patience :)

By the way, the project can be launched with `php -S localhost:8000 -t public` in the root directory.

## Endpoints

### Training Endpoints

Endpoints for viewing and manipulating the Friends that the Authenticated User
has permissions to access.

* [Show all the trainings](markdown/training/get.md) : `GET /api/training/`
* [Create a new training](markdown/training/post.md) : `POST /api/training/`
* [Create a new participant to a training](markdown/training/idTraining/participant/post.md) : `POST api/training/{idTraining}/participant`
