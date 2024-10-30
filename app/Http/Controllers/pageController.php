<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\CONST\TB_PrefixName;
use App\Models\DATA\Customers;

class pageController extends Controller {
    public function index(Request $req) {
        $page = $req->page;
        if (empty(@$page) || @$page === 'home') {
            return view('pages.content-home.view');
        } else if (@$page === 'create-customer') {
            $perfixName = TB_PrefixName::all();
            return view('pages.content-customers.create-cus.view', compact('perfixName'));
        } else if (@$page === 'customers') {
            $customers = Customers::all();
            return view('pages.content-customers.cus-list.view', compact('customers'));
        } else if (@$page === 'customer-info') {
            $customers = Customers::where('id', $req->cusId)->get();
            if (count($customers) == 0) {
                return redirect()->route('views.index')->with('error', 'Oops! Page not found, are u looking for.');
            }
            return view('pages.content-customers.cus-info.view', compact('customers'));
        }
    }

    public function store(Request $req) {
       
    }
}
