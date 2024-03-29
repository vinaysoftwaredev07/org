@extends('layouts.app')

@section('content')
<div class="container">
    @foreach($errors->all() as $error)
    <div class="alert alert-danger" role="alert">
        {{$error}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endforeach
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Company</div>

                <div class="card-body">

                    <form method="POST" action="{{ url('employee/add') }}">
                        <div class="form-group">
                            <label for="first_name">Employee First Name</label>
                            <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter Employee First Name" value="{{ old('first_name') }}">
                        </div>

                        <div class="form-group">
                            <label for="last_name">Employee Last Name</label>
                            <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter Employee Last Name" value="{{ old('last_name') }}">
                        </div>
                        <div class="form-group">
                            <label for="email">Employee Email address</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter Employee email" value="{{ old('email') }}">
                        </div>
                        <div class="form-group">
                            <label for="phone">Employee Phone address</label>
                            <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter Employee phone" value="{{ old('phone') }}">
                        </div>
                        <div class="form-group">
                            <label for="company">Employee of Company</label>
                            <select class="form-control" name="company">
                            <option value="">Select Company</option>
                                @foreach($company_data as $company)
                                    <option value="{{ $company->id }}" {{ (old('company') == $company->id) ? 'selected' : ''  }} >{{ $company->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
