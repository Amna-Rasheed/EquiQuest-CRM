<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class AdminBookingController extends Controller
{
    public function index()
    {
        // Get bookings with the user details
        $bookings = Booking::with('user')->get();
        return view('admin.bookings.index', compact('bookings'));
    }

    public function approve($id)
    {
        $booking = Booking::findOrFail($id);
        $booking->status = 'Approved';
        $booking->save();

        return redirect()->back()->with('success', 'Booking approved successfully');
    }

    public function decline($id)
    {
        $booking = Booking::findOrFail($id);
        $booking->status = 'Declined';
        $booking->save();

        return redirect()->back()->with('success', 'Booking declined successfully');
    }
}
