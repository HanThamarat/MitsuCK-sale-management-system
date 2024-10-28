<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CusController extends Controller
{
    public function index(Request $req) {
        $page = $req->page;
        if (empty(@$page) || @$page === 'home') {
            return view('pages.content-home.view');
        } else if (@$page === 'create-customer') {
            return view('pages.content-customers.create-cus.view');
        }
    }

    public function store(Request $req) {
       
    }
}
