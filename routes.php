<?php

/**
    * File Name: 
    * Path: 
    * Date Created:
    * Original Author: Christian Serna
    * Description:  
    *
    * Significant Changes (please indicate date and who made change):
    *
    */
    



/*
  |--------------------------------------------------------------------------
  | Package Routes
  |--------------------------------------------------------------------------
  |
  | 
  |
 */


//Route::group(array('prefix' => 'api/lang/v1','before' => 'apiauth'), function() {
    Route::group(array('prefix' => 'api/lang/v1'), function() {
            
           Route::get('/', 'Scaveit\Localizeit\Controllers\Localizeit@index');
           
           Route::get('/keys ', 'Scaveit\Localizeit\Controllers\Localizeit@file'); 
           Route::get('/{any} ', 'Scaveit\Localizeit\Controllers\Localizeit@show'); 
            //Route::get('/key', 'Scaveit\Localizeit\Controllers\Localizeit@index');
            
            
        }); 