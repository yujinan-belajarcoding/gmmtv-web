<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display the dashboard page
     */
    public function index()
    {
        // Data yang bisa dikirim ke view
        $data = [
            'title' => 'Dashboard',
            'totalMembers' => 2245341,
            'totalClubs' => 2245,
            'totalEvents' => 341,
            'totalPayments' => 4245341,
            'clients' => [
                ['name' => 'Client 1', 'image' => 'assets/img/client1.png'],
                ['name' => 'Client 2', 'image' => 'assets/img/client2.png'],
                ['name' => 'Client 3', 'image' => 'assets/img/client3.png'],
                ['name' => 'Client 4', 'image' => 'assets/img/client4.png'],
                ['name' => 'Client 5', 'image' => 'assets/img/client5.png'],
                ['name' => 'Client 6', 'image' => 'assets/img/client6.png'],
            ],
            'features' => [
                [
                    'title' => 'Manage your business',
                    'description' => 'comingsoon',
                    'icon' => 'assets/img/ic_1.png'
                ],
                [
                    'title' => 'Manage your business',
                    'description' => 'coming soon',
                    'icon' => 'assets/img/ic_2.png'
                ],
                [
                    'title' => 'Manage your business',
                    'description' => 'comingsoon',
                    'icon' => 'assets/img/ic_3.png'
                ],
            ]
        ];

        return view('dashboard', $data);
    }

    /**
     * Show profile
     */
    public function profile()
    {
        return view('profile');
    }

    /**
     * Update profile
     */
    public function updateProfile(Request $request)
    {
        // Handle profile update
        return redirect()->back()->with('success', 'Profile updated successfully');
    }
    public function features()
    {
        return view('features');
    }
    public function clients()
    {
        return view('clients');
    }
}
