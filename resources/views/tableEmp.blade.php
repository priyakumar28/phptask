@extends('layouts.app')
@section('content')

        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <strong>Employee List</strong>
                        <a href="{{route('emplcreate')}}" class="btn btn-primary btn-xs float-end py-0">Create Employee</a>
                        <table class="table table-responsive table-bordered table-stripped" style="margin-top:10px;">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Address</th>
                                    <th>City    </th>

                                    <th>State</th>
                                
                                    <th>Zip</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- @foreach($employeeslist as $key =>$empl)
                                <tr>
                                    <td>{{$key +1}}</td>
                                    <td>{{$empl->firstname}}</td>
                                    <td>{{$empl->lastname}}</td>
                                    <td>{{$empl->address}}   </td>
                                    <td>{{$empl->city}}</td>
                                    <td>{{$empl->state}}</td>
                                    <td>{{$empl->zip}}   </td>
                                    
                                </tr>
                                @endforeach -->
                               
                            </tbody>
                        </table>
                    
                    </div>
                </div>
            </div>
        </div>
   @endsection