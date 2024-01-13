<?php

namespace App\Http\Controllers;

use app\Requests\NewApplicationRequest;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function viewApplications(Request $request)
    {
        $applications = $request->user()->applications();

        return view('my.applications', [
            'applications' => $applications
        ]);
    }

    public function createApplication(NewApplicationRequest $request)
    {
        $request->validated();
    }
}
