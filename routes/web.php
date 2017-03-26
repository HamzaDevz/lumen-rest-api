<?php

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

/**
 * Routes for resource user
 */
$app->get('users', 'UsersController@all');
$app->get('users/{id}', 'UsersController@get');
$app->post('users', 'UsersController@add');
$app->put('users/{id}', 'UsersController@put');
$app->delete('users/{id}', 'UsersController@remove');

/**
 * Routes for resource question
 */
$app->get('questions', 'QuestionsController@all');
$app->get('questions/{id}', 'QuestionsController@get');
$app->post('questions', 'QuestionsController@add');
$app->put('questions/{id}', 'QuestionsController@put');
$app->delete('questions/{id}', 'QuestionsController@remove');

