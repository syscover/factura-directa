<?php namespace Syscover\Facturadirecta\Controllers;

use Illuminate\Http\Request;
use Syscover\Facturadirecta\Facades\Facturadirecta;
use Syscover\Pulsar\Controllers\Controller;

/**
 * Class FacturadirectaController
 * @package Syscover\Facturadirecta\Controllers
 */

class FacturadirectaController extends Controller {

    public function getClients(Request $request)
    {
        $fdCustomers    = Facturadirecta::getClients($request->all());

        return response()->json($fdCustomers);
    }
}