<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\User;
use App\Models\Horse;
use App\Models\Booking;
use App\Models\VetsSupplier;
use App\Models\Staff;
use Carbon\Carbon;


class AdminAnalyticsController extends Controller
{
    public function index()
    {

        $totalArticles = Article::count();
        $totalCustomers = User::where('role', 'Customer')->count();
        $totalHorses = Horse::count();
        $totalBookings = Booking::count();
        $bookingsThisMonth = Booking::whereMonth('created_at', Carbon::now()->month)->count();
        $bookingsThisYear = Booking::whereYear('created_at', Carbon::now()->year)->count();
        $totalVets = VetsSupplier::where('type', 'vet')->count();
        $totalSuppliers = VetsSupplier::where('type', 'supplier')->count();
        $totalStaff = Staff::count();
        $totalUsers = User::count();
        return view('admin.analytics', compact('totalArticles', 'totalCustomers', 'totalHorses', 'totalBookings', 'bookingsThisMonth', 'bookingsThisYear', 'totalVets', 'totalSuppliers', 'totalStaff', 'totalUsers'));
    }
}
