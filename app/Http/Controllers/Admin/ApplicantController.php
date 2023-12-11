<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Applicant;
use App\Models\Employee;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ApplicantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.applicants.index', ['applicants'=>Applicant::paginate()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($job)
    {
        return view('applicants.create', ['job'=>Job::find($job)->first()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id)
    {
        $data = $request->all();
        $data['user_id'] = auth()->id();
        $data['job_id'] = $id;
        try {
            Applicant::create($data);
            return redirect()->route('dashboard');
        } catch (\Throwable $th) {
            //throw $th;
            // dd($th);
            return redirect()->back()->withErrors($th)->withInput();
        }
        // dd($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(Applicant $applicant) : View
    {
        return view('admin.applicants.show', ['applicant'=>$applicant]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Applicant $applicant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Applicant $applicant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Applicant $applicant)
    {
        if ($applicant->delete()) {
            return redirect()->back()->with('success', 'Application Deleted Successfully 🙌🏽');
        }
        return redirect()->back()->with('fail', 'Unable to Delete Application 🙌🏽');
    }

    public function hire(Applicant $applicant)
    {
        
        if ($applicant->accept()) {
            Employee::create([
                'user_id'=>$applicant->user_id,
                'position'=>$applicant->job->title
            ]);
            return redirect()->route('admin.applicants')->with('success', 'Applicant Employed Successfully');
        }
        return redirect()->route('admin.applicants')->with('error', 'Unable to Employ Applicant');
    }

    public function reject(Applicant $applicant)
    {
        if ($applicant->reject()) {
            return redirect()->route('admin.applicants')->with('success', 'Applicant Rejected Successfully');
        }
        return redirect()->route('admin.applicants')->with('error', 'Unable to Employ Applicant');
    }
}
