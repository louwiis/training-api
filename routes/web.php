<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return response()->json([
        'message' => 'Welcome to the API, here you can find all the information about the training',
        'version' => '1.0.0',
        'author' => 'Luis Teixeira Lima',
        'comment' => 'I hope you enjoy it, by the way I want to say sorry for the rules of the exercise, I did not very well respect them because I did not succeed to create an ORM to do the API after so i\'ve just created the API with the Eloquent ORM like I would do in a real project with a micro-framework like Lumen.',
        'routes' => [
            'GET /api/training' => 'Get all the trainings',
            'POST /api/training' => 'Create a new training',
            'POST /api/training/{idTraining}/participant' => 'Add a participant to a training',
        ],
    ]);
});

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->group(['prefix' => 'training'], function () use ($router) {
        $router->get('/', 'TrainingController@index');
        $router->post('/', 'TrainingController@store');
        $router->post('/{idTraining}/participant', 'TrainingController@addParticipant');
    });
});
