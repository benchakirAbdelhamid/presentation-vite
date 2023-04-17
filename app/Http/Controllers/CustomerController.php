<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Custemer;

class CustomerController extends Controller
{
    //

    function addCustomer(Request $req)
    {
        $customer = new Customer;
        $Customer->id - $req->id;
    }
}
