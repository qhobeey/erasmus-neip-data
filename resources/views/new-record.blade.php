@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <form action="{{route('new.record')}}" method="POST" class="row" style="width: 100%">
            @csrf
            <div class="col-md-3">
                <div class="form-group">
                    <label for="">Name of applicant</label>
                    <input type="text" required class="form-control" name="applicant_name" placeholder="Name of applicant">
                </div>
                <div class="form-group">
                    <label for="">Date of birth</label>
                    <input type="date" required class="form-control" name="dob" placeholder="Date of birth">
                </div>
                <div class="form-group">
                    <label for="">Age</label>
                    <input type="number" required class="form-control" name="age" placeholder="Age">
                </div>
                <div class="form-group">
                    <label for="">Gender</label>
                    <select class="form-control" name="gender" id="">
                        <option value="">choose gender</option>
                        <option value="male">male</option>
                        <option value="female">female</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Contact number</label>
                    <input type="text" required class="form-control" name="applicant_contact_number" placeholder="Contact number">
                </div>
                <div class="form-group">
                    <label for="">Email address</label>
                    <input type="email" required class="form-control" name="applicant_email" placeholder="Email address">
                </div>
                <div class="form-group">
                    <label for="">District/Muicipal/Metropolis</label>
                    <input type="text" required class="form-control" name="district" placeholder="District/Muicipal/Metropolis">
                </div>
                <div class="form-group">
                    <label for="">Region</label>
                    <select class="form-control" name="region" required id="">
                        <option value="">choose region</option>
                        <option value="Oti Region">Oti Region</option>
                        <option value="Bonno East Region">Bonno East Region</option>
                        <option value="Ahafo Region">Ahafo Region</option>
                        <option value="Bono Region">Bono Region</option>
                        <option value="North East Region">North East Region</option>
                        <option value="Savannah Region">Savannah Region</option>
                        <option value="Western Region">Western Region</option>
                        <option value="Western North Region">Western North Region</option>
                        <option value="Volta Region">Volta Region</option>
                        <option value="Greater Accra Region">Greater Accra Region</option>
                        <option value="Eastern Region">Eastern Region</option>
                        <option value="Ashanti Region">Ashanti Region</option>
                        <option value="Central Region">Central Region</option>
                        <option value="Northern Region">Northern Region</option>
                        <option value="Upper East Region">Upper East Region</option>
                        <option value="Upper West Region">Oti Region</option>
                    </select>
                </div>
            </div>
            {{--  --}}
            <div class="col-md-5">

                <div class="form-group">
                    <label for="">Name of business</label>
                    <input type="text" required class="form-control" name="business_name" placeholder="Name of business">
                </div>
                <div class="form-group">
                    <label for="">What is your business into?</label>
                    <textarea name="business_details" id="" class="form-control" cols="20" rows="10"></textarea>
                </div>
                <div class="form-group">
                    <label for="">Sector of business</label>
                    <select class="form-control" name="business_sector" id="">
                        <option value="">select sector</option>
                        <option value="Agri-Business/Agro Processing">Agri-Business/Agro Processing</option>
                        <option value="ICT">ICT</option>
                        <option value="Sports">Sports</option>
                        <option value="Tourism">Tourism</option>
                        <option value="Recreation">Recreation</option>
                        <option value="Sanitation">Sanitation</option>
                        <option value="Waste Management">Waste Management</option>
                        <option value="Green & Ecological Business">Green & Ecological Business</option>
                        <option value="Health">Health</option>
                        <option value="Food & Beverages">Food & Beverages</option>
                        <option value="Fashion(Clothin & Accessories) & Beauty">Fashion(Clothin & Accessories) & Beauty</option>
                        <option value="Media">Media</option>
                        <option value="Marketing & Communication">Marketing & Communication</option>
                        <option value="Manufacturing & Industrial Processing">Manufacturing & Industrial Processing</option>
                        <option value="Real Estate & Construction">Real Estate & Construction</option>
                        <option value="Transport">Transport</option>
                        <option value="Logistics">Logistics</option>
                        <option value="Trade & Commerce">Trade & Commerce</option>
                        <option value="Business & Professional Services">Business & Professional Services</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Is your business registered?</label>
                    <select class="form-control" required name="business_registered" id="">
                        <option value="">choose option</option>
                        <option value="1">yes</option>
                        <option value="0">no</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Location of business</label>
                    <input type="text" required class="form-control" name="business_location" placeholder="Location of business">
                </div>
            </div>
            {{--  --}}
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Status of business?</label>
                    <select class="form-control" required name="business_status" id="">
                        <option value="">choose option</option>
                        <option value="startup">startup</option>
                        <option value="existing business">existing business</option>
                        <option value="idea stage">idea stage</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Have you received trainig for your business?</label>
                    <select required class="form-control" name="training_received" id="">
                        <option value="">choose option</option>
                        <option value="1">yes</option>
                        <option value="0">no</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Have you applied to NEIP for your business?</label>
                    <select required class="form-control" name="neip_applied" id="">
                        <option value="">choose option</option>
                        <option value="1">yes</option>
                        <option value="0">no</option>
                    </select>
                </div>
                <h3>Official use (optional)</h3>
                <div class="form-group">
                    <label for="">Name of supervising officer</label>
                    <input type="text" class="form-control" name="supervising_officer_name" placeholder="Name of supervising officer">
                </div>
                <div class="form-group">
                    <label for="">Contact number</label>
                    <input type="text" class="form-control" name="supervising_officer_number" placeholder="Contact number">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" class="form-control" name="supervising_officer_email" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="">Desigation</label>
                    <input type="text" required class="form-control" name="supervising_officer_desigation" placeholder="Desigation">
                </div>
                <div class="form-group">
                    <button class="form-control btn btn-danger" type="submit">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
