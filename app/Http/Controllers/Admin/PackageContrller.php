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
    public function delete($packageId)
    {
        $package = Package::find($packageId);
        $package->delete();
        return redirect()->back()->with("success", "Done !");
    }
    public function edit(Request $request, $packageId)
    {
        $package = Package::find($packageId);
        $package->update($request->all());
        return redirect()->back()->with("success", "Done !");
    }
}
