<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Package;
use Illuminate\Http\Request;

class PackageContrller extends Controller
{
    public function index()
    {
        $package = Package::all();
        return view("admin.course.package.package", compact("package"));
    }
    public function create(Request $request)
    {
        Package::create($request->all());
        return redirect()->route("showPackage")->with("success", "Create done! ");
    }
}
