<?php

namespace App\Http\Controllers;

use App\Models\Staff;

class StaffController extends Controller
{
    public function index()
    {
        // Fetch all staff members from the database
        $staffMembers = Staff::all();

        // Pass the staff members to the view
        return view('stablemanager.staff', ['staffMembers' => $staffMembers]);
    }
}
