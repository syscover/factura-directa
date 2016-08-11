<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can any all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::group(['middleware' => ['web', 'pulsar']], function() {

    /*
    |--------------------------------------------------------------------------
    | CUSTOMERS
    |--------------------------------------------------------------------------
    */
    Route::post(config('pulsar.appName') . 'api/factura/directa/customers', ['as'=>'apiFacturadirectaCustomers',    'uses'=>'Syscover\Facturadirecta\Controllers\FacturaDirectaController@getClients']);

    /*
    |--------------------------------------------------------------------------
    | INVOICES
    |--------------------------------------------------------------------------
    */
    Route::post(config('pulsar.appName') . 'api/factura/directa/invoices', ['as'=>'apiFacturadirectaInvoices',    'uses'=>'Syscover\Facturadirecta\Controllers\FacturaDirectaController@getInvoices']);
});