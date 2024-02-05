<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingsController extends Controller
{
    public function index()
    {
        $userName = auth()->user()->name;

        //get 5 recent bookings
        $bookings = Booking::where('user_id', auth()->user()->id)->orderBy('created_at', 'desc')->take(5)->get();
        return view('customer.bookings', compact('userName', 'bookings'));
    }

    //store
    public function store(Request $request)
    {
        // dd($request->all());
        $booking = new Booking();
        $booking->user_id = $request->user_id;
        $booking->date = $request->date;
        $booking->time = $request->time;
        $booking->type = $request->type;
        $booking->price = $request->price;
        $booking->rider = $request->rider;
        $booking->save();
        return redirect()->route('customer.bookings')->with('success', 'Booking has been made successfully');
    }
}
