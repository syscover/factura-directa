<?php namespace Syscover\Facturadirecta\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Syscover\Facturadirecta\Facades\Facturadirecta;

/**
 * Class FacturadirectaController
 * @package Syscover\Facturadirecta\Controllers
 */

class FacturadirectaController extends BaseController
{
    public function getClients(Request $request)
    {
        $fdCustomers = Facturadirecta::getClients($request->all());

        return response()->json($fdCustomers);
    }

    public function getInvoices(Request $request)
    {
        $fdInvoices = Facturadirecta::getInvoices($request->all());

        return response()->json($fdInvoices);
    }
}