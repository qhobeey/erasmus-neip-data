@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8"></div>
        <div class="col-md-4">
            <form action="{{route('home')}}" method="get">
                @csrf
                <div class="form-group">
                    <label for="">search:</label>
                    <div class="row">
                        <div class="col-md-9">
                            <input type="search" class="form-control" name="q" value="{{$q}}" placeholder="search for applicant" id="">
                        </div>
                        <div class="col-md-3">
                            <button class="btn btn-xs btn-primary" type="submit">search</button>
                        </div>
                    </div>

                </div>
            </form>
        </div>
        <div class="col-md-12">

            <table class="table">
                <thead>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Applicant email</th>
                    <th>Applicant contact</th>
                    <th>Region</th>
                    <th>District</th>
                    <th>Business_name</th>
                    <th></th>
                </thead>
                <tbody>
                    @foreach ($applicants as $applicant)
                    <tr>
                        <td>
                            <a href="{{route('record.details', $applicant->uuid)}}">
                                {{$applicant->applicant_name}}</td>
                            </a>
                        <td>{{$applicant->gender}}</td>
                        <td>{{$applicant->applicant_email}}</td>
                        <td>{{$applicant->applicant_contact_number}}</td>
                        <td>{{$applicant->region}}</td>
                        <td>{{$applicant->district}}</td>
                        <td>{{$applicant->business_name}}</td>
                        <td>
                            <a href="{{route('record.details', $applicant->uuid)}}">view</a>&nbsp;|
                            <a href="#">delete</a>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
