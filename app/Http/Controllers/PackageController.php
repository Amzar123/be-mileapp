<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PackageController extends Controller
{
    public function getPackages() {
        $packages = Package::all();
        return response()->json([
            "code" => 200,
            "message" => "ok",
            "data" => $packages->toArray()
        ], 200);
    }

    public function getPackagesById($id) {
        $package = Package::where("_id", $id)->first();
        return response()->json([
            "code" => 200,
            "message" => "ok",
            "data" => $package
        ]);
    }

    public function createPackage(Request $request) {
        $rules = [
            'customer_name' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            $errors = $validator->messages();
            return response()->json(['error' => $errors->first('customer_name')], 422);
        }
        
        $package = new Package;

        $package->customer_name = $request->customer_name;

        $package->save();
        return response()->json([
            "code" => 200,
            "message" => "ok",
            "data" => $package
        ], 201);
    }

    public function generateCSRF() {
        return csrf_token();
    }

    public function deletePackageById($id) {
        $package = Package::find($id);
        $package->delete();
        return response()->json([
            "code" => 200,
            "message" => "ok",
            "data" => $package
        ]);
    }

    public function updatePackageById($id) {
        $package = Package::find($id);
        $package->delete();
        return response()->json([
            "code" => 200,
            "message" => "ok",
            "data" => $package
        ]);
    }

    public function updateSomeFieldPackageById($id) {
        $package = Package::find($id);
        $package->delete();
        return response()->json([
            "code" => 200,
            "message" => "ok",
            "data" => $package
        ]);
    }
}
