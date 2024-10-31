<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\CONST\TB_PrefixName;
use App\Models\DATA\Customers;
use App\Models\DATA\ACS;
use App\Models\DATA\CARS;
use App\Models\DATA\AccessoryCosts;

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
        } else if (@$page === 'create-acs-price') {
            $acs = ACS::all();
            $acsPrice = AccessoryCosts::all();
            $AcsType = "Cost";
            return view('pages.content-accessory.create-acs-price.view', compact('acs', 'acsPrice', 'AcsType'));
        } else if (@$page === 'create-acs') {
            $acs = ACS::all();
            $car = CARS::all();
            return view('pages.content-accessory.create-acs.view', compact('acs', 'car'));
        }

    }

    public function store(Request $req) {
       
    }
}
