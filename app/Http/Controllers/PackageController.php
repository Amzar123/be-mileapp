<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Validators\PackageValidator;

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
        if ($package == null) {
            return response()->json([
                "code" => 404,
                "messageId" => "NOT_FOUND",
                "data" => [
                    "info" => "Data not found",
                ]
            ]);
        }
        return response()->json([
            "code" => 200,
            "message" => "ok",
            "data" => $package
        ]);
    }

    public function createPackage(Request $request) {
        $validator = Validator::make($request->all(), PackageValidator::rules());
        if ($validator->fails()) {
            $errors = $validator->messages();
            return response()->json($errors, 422);
        }

        Package::create($request->all());

        return response()->json([
            "code" => 201,
            "message" => "ok",
            "data" => $request->all()
        ], 201);
    }

    public function generateCSRF() {
        return csrf_token();
    }

    public function deletePackageById($id) {
        $package = Package::find($id);
        if ($package == null) {
            return response()->json([
                "code" => 404,
                "messageId" => "NOT_FOUND",
                "data" => [
                    "info" => "Data not found",
                ]
            ]);
        }
        $package->delete();
        return response()->json([
            "code" => 200,
            "message" => "ok",
            "data" => $package
        ]);
    }

    public function updatePackageById(Request $request, $id) {
        $package = Package::find($id);
        if ($package == null) {
            return response()->json([
                "code" => 404,
                "messageId" => "NOT_FOUND",
                "data" => [
                    "info" => "Data not found",
                ]
            ]);
        }

        $validator = Validator::make($request->all(), PackageValidator::rules());
        if ($validator->fails()) {
            $errors = $validator->messages();
            return response()->json($errors, 422);
        }

        $notSuccess = Package::where("_id", $id)->update($request->all());
        if ($notSuccess) {
            return response()->json([
                "code" => 500,
                "messageId" => "INTERNAL_SERVER_ERROR",
                "data" => [
                    "info" => "internal server error"
                ]
            ]);
        }

        $updatedData = $package->fresh();
        
        return response()->json([
            "code" => 200,
            "message" => "ok",
            "data" => $updatedData
        ]);
    }

    public function updateSomeFieldPackageById(Request $request, $id) {
        $package = Package::find($id);
        if ($package == null) {
            return response()->json([
                "code" => 404,
                "messageId" => "NOT_FOUND",
                "data" => [
                    "info" => "Data not found",
                ]
            ]);
        }

        $package->fill($request->all());

        return response()->json([
            "code" => 200,
            "message" => "ok",
            "data" => $package
        ]);
    }
}