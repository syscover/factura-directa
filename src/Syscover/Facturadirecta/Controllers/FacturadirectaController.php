<?php namespace Syscover\Facturadirecta\Controllers;

// todo, hace falta que herede de este controlador?
use Syscover\Pulsar\Core\Controller;
use Syscover\Facturadirecta\Facades\Facturadirecta;

/**
 * Class FacturadirectaController
 * @package Syscover\Facturadirecta\Controllers
 */

class FacturadirectaController extends Controller
{
    public function getClients()
    {
        $fdCustomers    = Facturadirecta::getClients($this->request->all());

        return response()->json($fdCustomers);
    }
}