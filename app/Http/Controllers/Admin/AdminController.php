<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\Interview;
use App\Models\Job;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminController extends Controller
{
    public function dashboard() : View 
    {
        return view('admin.dashboard', [
            'users'=>User::count(), 
            'interviews'=>Interview::count(), 
            'jobs'=>Job::count(), 
            'employees'=>Employee::count()]);
    }
}
