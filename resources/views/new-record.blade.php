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
                    <input type="text" required class="form-control" name="region" placeholder="Region">
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
                    <input type="text" required class="form-control" name="business_sector" placeholder="Sector of business">
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
                <h3>Official use</h3>
                <div class="form-group">
                    <label for="">Name of supervising officer</label>
                    <input type="text" required class="form-control" name="supervising_officer_name" placeholder="Name of supervising officer">
                </div>
                <div class="form-group">
                    <label for="">Contact number</label>
                    <input type="text" required class="form-control" name="supervising_officer_number" placeholder="Contact number">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" required class="form-control" name="supervising_officer_email" placeholder="Email">
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
