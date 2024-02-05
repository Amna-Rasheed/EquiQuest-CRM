<?php

namespace App\Http\Controllers;


use App\Models\VetsSupplier;

class VetsSupplierController extends Controller
{
    public function index()
    {
        $vetData = VetsSupplier::where('type', 'vet')->get(['name', 'phone_number', 'email', 'next_visit_date']);
        $supplierData = VetsSupplier::where('type', 'supplier')->get(['name', 'phone_number', 'email', 'next_visit_date']);

        return view('stablemanager.vetssupplier', ['vetData' => $vetData, 'supplierData' => $supplierData]);
    }
}
