<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DATA\ACS;

class AcsController extends Controller
{
    public function store(Request $req) {
        $page = @$req->pages;
        $data = $req->data;
        
        if (@$page === 'create-acs') {
            try {
                $response = ACS::create([
                    "AccessorySource" => $data['AccessoryName'],
                    "AccessoryDetail" => $data['AccessoryDes'],
                ]);

                return response()->json([
                    "message" => "Creating accessory success",
                    "body" => $response,
                ], 201);
            } catch (\Exception $e) {
                return response()->json([
                    "message" => "creating accessory faild",
                    "err" => $e->getMessage(),
                ], 500);
            }
        }
    }
}
