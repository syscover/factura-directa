<?php namespace Syscover\FacturaDirecta\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Syscover\FacturaDirecta\Facades\FacturaDirecta;

/**
 * Class FacturaDirectaController
 * @package Syscover\FacturaDirecta\Controllers
 */

class FacturaDirectaController extends BaseController
{
    public function getClients(Request $request)
    {
        $fdCustomers = FacturaDirecta::getClients($request->all());

        return response()->json($fdCustomers);
    }

    public function getInvoices(Request $request)
    {
        $fdInvoices = FacturaDirecta::getInvoices($request->all());

        return response()->json($fdInvoices);
    }
}