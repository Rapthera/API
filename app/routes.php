<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::api(['version' => 'v1', 'prefix' => 'v1'], function()
{

    /*
     * Authenticated API Routes
     *
     * @response Response
     */

    Route::group(['before' => ''], function()
    {
        /**
         * Retrieve GPM for $match_id
         *
         * @return Response
         */
        Route::get('matches/{match_id}/stats', ['uses' => 'APIController@getStats'], function($match_id)
        {

        });
        /**
         * Retrieve Heroes for $match_id
         */
        Route::get('matches/{match_id}/heroes', ['uses' => 'APIController@getHeroes'], function($match_id)
        {

        });

    });
});