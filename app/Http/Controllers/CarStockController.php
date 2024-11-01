<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\DATA\CARS;
use App\Models\DATA\CAR_COSTS;
use App\Models\DATA\CAR_SALES;

use App\Models\CONST\TB_CarModels;
use App\Models\CONST\TB_CarYears;

class CarStockController extends Controller
{
    public function index(Request $req) {

    }

    public function store(Request $req) {
        $page = @$req->pages;
        
        if (@$page === 'create-model') {
            try {
                $data = $req->data;
                $years = $req->years;
                
                $car = TB_CarModels::create([
                    "Name_TH" => @$data['Name_TH'],
                    "Name_EN" => @$data['Name_EN'],
                ]);

                foreach ($years as $year) {
                    $carYear = TB_CarYears::create([
                        "Model_ID" => $car->id,
                        "year" => $year,
                    ]);
                }

                return response()->json([
                    "message" => "create car model success",
                    "body" => [
                        $car, 
                        $carYear
                    ],
                ], 200);
            } catch (\Exception $e) {
                return response()->json([
                    "message" => "create car model failed",
                    "error" => $e->getMessage(),
                ], 500);
            }
        } else if (@$page === 'car-model-years') {
            try {
                $modelId = @$req->Model_ID;

                $years = TB_CarYears::where('Model_ID', @$modelId)->get();

                return response()->json([
                    "message" => "get year this car model success",
                    "body" => $years,
                ], 200);
            } catch (\Exception $e) {
                return response()->json([
                    "mesaage" => "get year this car model failed",
                    "error" => $e->getMessage(),
                ]);
            }
        } else if (@$page === 'create-car') {
            try {
                $data = $req->data;
                
                $response = CARS::create([
                    "Model_ID" => $data['model'],
                    "Year_ID" => $data['year'],
                    "Color_ID" => $data['color'],
                    "CarDetail" => $data['Description'],
                ]);

                if (empty($response) === 0) {
                    throw new \Exception("Could not create");
                }

                $car = CARS::all();

                $view = view('pages.content-car-stock.create-car.list', compact('car'))->render();

                return response()->json([
                    "message" => "create car success",
                    "render" => $view,
                ], 200);
            } catch (\Exception $e) {
                return response()->json([
                    "message" => "create car failed",
                    "error" => $e->getMessage(),
                ]);
            }
        } else if (@$page === 'get-car-pricing') {
            try {
                $condition = $req->condition;
                if ($condition === "1") {
                    $SaleType = 'Cost';
                    $carPrice = CAR_COSTS::all();
                } else if ($condition === "2") {
                    $SaleType = 'Sale';
                    $carPrice = CAR_SALES::all();
                }

                $render = view('pages.content-car-stock.car-pricing.list', compact('SaleType', 'carPrice', 'condition'))->render();

                return response()->json([
                    "message" => "getting car price success",
                    "render" => $render,
                ]);
            } catch (\Exception $e) {
                return response()->json([
                    "message" => "getting car price failed",
                    "error" => $e->getMessage(),
                ]);
            }
        } else if (@$page === 'create-car-price') {
            try {
                $conditions = $req->condition;
                $data = $req->data;

                if ($conditions === "1") {
                    $carPrice = CAR_COSTS::create([
                        "CarID" => @$data["CarModel"],
                        "CarCost" => @$data["Price"],
                        "StartDate" => @$data["StartData"],
                        "EndDate" => @$data["EndDate"],
                    ]);
                } else if ($conditions === "2") {
                    $carPrice = CAR_SALES::create([
                        "CarID" => @$data["CarModel"],
                        "CarSalePrice" => @$data["Price"],
                        "StartDate" => @$data["StartData"],
                        "EndDate" => @$data["EndDate"],
                    ]);
                }

                if (empty($carPrice) === 0) {
                    throw new \Exception("Could not create");
                }

                return response()->json([
                    "message" => "create car price success",
                    "body" => $conditions,
                ]);
            } catch (\Exception $e) {
                return response()->json([
                    "message" => "create car price failed",
                    "error" => $e->getMessage(),
                ]);
            }
        }
    }
}
