<?php

namespace App\Http\Controllers;

use App\ApplicationForm;
use Illuminate\Http\Request;
use Str;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $applicants = ApplicationForm::query();
        $q = $request->q ?? '';
        if($request->q) {
            $applicants = $applicants->where('applicant_name', 'LIKE', '%'.$request->q.'%');
        }
        $applicants = $applicants->latest()->paginate(50);
        return view('home', compact('applicants', 'q'));
    }

    public function newRecord(Request $request)
    {
        return view('new-record');
    }

    public function recordDetails(Request $request, $id)
    {
        $applicant = ApplicationForm::where('uuid', $id)->first();
        return view('record-details', compact('applicant'));
    }
    public function newRecordPost(Request $request)
    {

        $data = $request->validate([
            'applicant_name' => 'required', 'dob' => 'required', 'gender' => 'required', 'applicant_contact_number' => 'required', 'applicant_email' => 'required',
            'district' => 'required', 'region' => 'required', 'business_name' => 'required', 'business_details' => 'required', 'business_sector' => 'required',
            'business_registered' => 'required', 'business_location' => 'required', 'business_status' => 'required', 'training_received' => 'required', 'neip_applied' => 'required',
            'supervising_officer_name' => 'required', 'supervising_officer_number' => 'required', 'supervising_officer_email' => 'required', 'supervising_officer_desigation' => 'required'
        ]);
        $data = array_merge($data, [
            'uuid' => (string) Str::uuid(),
        ]);
        ApplicationForm::create($data);
        $request->session()->flash('alert-success', 'Customer successfully added!');
        return back();

    }
}
