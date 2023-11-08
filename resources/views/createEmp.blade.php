@extends('layouts.app')
@section('content')
        <div class="card">
            <div class="card-body">
                <p style="font-size:20px; font-weight:bold;">Create New Employee</p>
                <form action="{{route('emplstore')}}" class="was-validated" method="POST" novalidate>
                   @csrf
                    <div class="form-group has-validation">
                        <label for="firstname">First Name</label>
                        <input type="text" name="firstname" id="fname" class="form-control" required>                       
                    </div>
                    <div class="form-group has-validation">
                    <label for="lastname">Last Name</label>
                        <input type="text" name="lastname" id="lname" class="form-control" required>                      
                    </div>
                    <div class="form-group has-validation">
                        <label for="address">Address</label>
                        <input type="text" name="address" id="address" class="form-control" required>                       
                    </div>
                    <div class="form-group has-validation">
                        <label for="city">City</label>
                        <input type="text" name="city" id="city" class="form-control" required>                      
                    </div>
                    </div>
                    <div class="form-group has-validation">
                        <label for="state">state</label>
                        <input type="text" name="state" id="state" class="form-control" required>                      
                    </div>
                    <div class="form-group has-validation">
                        <label for="zip">zip</label>
                        <input type="text" name="zip" id="zip" class="form-control" required>                   
                    </div>
                    <div>
                    <button type="submit" class="btn btn-primary">Create Employee</button>
                    <div>
                </form>
            </div>
        </div>
 @endsection   