<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use App\Models\Interview;
use App\Models\Job;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function dashboard()
    {
        $interviews = auth()->user()->interviews();
        return view('dashboard', [
            'jobscount'=>Job::count(), 
            'jobs'=>Job::paginate(15), 
            'interviewscount'=>$interviews->count(), 
            'interviews'=>$interviews->get(), 
            'applicants'=>Applicant::where('user_id', auth()->id())->get()
        ]);
    }
}
