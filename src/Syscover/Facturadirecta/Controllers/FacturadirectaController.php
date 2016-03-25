<?php namespace Syscover\Facturadirecta\Controllers;

use Syscover\Facturadirecta\Facades\Facturadirecta;
use Syscover\Pulsar\Controllers\Controller;

/**
 * Class FacturadirectaController
 * @package Syscover\Facturadirecta\Controllers
 */

class FacturadirectaController extends Controller {

    public function getClients()
    {
        $fdCustomers    = Facturadirecta::getClients($this->request->all());

        return response()->json($fdCustomers);
    }
}