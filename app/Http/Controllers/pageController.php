<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\CONST\TB_PrefixName;

class pageController extends Controller {
    public function index(Request $req) {
        $page = $req->page;
        if (empty(@$page) || @$page === 'home') {
            return view('pages.content-home.view');
        } else if (@$page === 'create-customer') {
            $perfixName = TB_PrefixName::all();
            return view('pages.content-customers.create-cus.view', compact('perfixName'));
        }
    }

    public function store(Request $req) {
       
    }
}
