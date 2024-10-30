<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DATA\Customers;

class CusController extends Controller
{
    public function index(Request $req) {
       
    }

    public function store(Request $req) {
        $page = @$req->pages;
        $datass = @$req->data;

       if ($page === 'create') {
            try {
                $response = Customers::create([
                    "PrefixName" => $datass["prefixName"],
                    "FirstName" => $datass["firstName"],
                    "MiddleName" => $datass["middleName"],
                    "LastName" => $datass["lastName"],
                    "IDNumber" => $datass["IDCard"],
                    "NewCardDate" => $datass["NewCardDate"],
                    "ExpireCard" => $datass["ExpireCard"],
                    "Brideday" => $datass["Birdeday"],
                    "Gender" => $datass["gander"],
                    "Nationality" => $datass["Nationality"],
                    "religion" => $datass["religion"],
                    "FacebookName" => $datass["facebook"],
                    "LineID" => $datass["line"],
                    "Address" => $datass["Address"],
                    "PostAddress" => $datass["PostAddress"],
                ]);

                return response()->json([
                    "message" => "createing customer success",
                    "body" => $response,
                ]);
            } catch (\Exception $e) {
                return response()->json([
                    'error' => true,
                    'message' => $e->getMessage(),
                ]);
            }
       }
    }
}
