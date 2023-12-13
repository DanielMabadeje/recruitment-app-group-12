<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Applicant;
use App\Models\Interview;
use App\Models\Job;
use Illuminate\Http\Request;

class InterviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.interview.index', ['interviews'=>Interview::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Job $job, Applicant $applicant)
    {
        return view('admin.interview.create',   [
            'job'=>$job,
            'applicant'=>$applicant,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['interviewer_id'] = auth()->id() ?? 1;

        try {
            Interview::create($data);
            
            return redirect()->route('admin.applicants')->with('success', 'Interview Scheduled Successfully 🔥');
        } catch (\Throwable $th) {
            dd($th);
            return redirect()->back()->with('fail', 'Unable to Schedule interview 💔')->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Interview $interview)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Interview $interview)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Interview $interview)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Interview $interview)
    {
        //
    }

    public function callForinterview($job_id, $applicant_id)
    {
        dd($applicant_id);
    }
}
