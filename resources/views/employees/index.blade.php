@extends('layouts.app')

@section('content')
    <div class="container mt-2">
            <h1>Employees</h1>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add-employees-modal" >Add Employee</button>
            @include('employees.modals._add-employees-modal')    
            <table class="table mt-0">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Name </th>
                    <th>Age</th>
                    <th>Address</th>
                    <th>Cell Phone Number</th>
                    <th>Salary Every Present</th>
                    <th>DaysPresent </th>
                    <th>Salary</th>
                    <th>Action</th>
                
                </tr>
            </thead>
            <tbody>
             @foreach($employees as $employee)
                        <td>{{ $loop->iteration}}</td>
                        <td>{{ $employee->first_name }} {{ $employee->middle_name}} {{ $employee->last_name}}</td>
                        <td>{{ $employee->age }}</td>
                        <td>{{ $employee->address }}</td>
                        <td>{{ $employee->cp_number }}</td>
                        <td>{{ $employee->salaryeverypresent}}</td>
                        <td>{{ $employee->dayspresent}}</td>
                        <td>{{ $employee->salary}}</td>
                        
                        <td>
                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit-employees-modal-{{$employee->id}}" >Edit</button>
                        @include('employees.modals._edit-employees-modal')
                        
                        
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete-employees-modal-{{$employee->id}}" >Delete</button>
                        @include('employees.modals._delete-employees-modal')
                        </td>
                     </tr>    
            @endforeach
            </tbody>   
            </table> 
        </div>
    </div>
</div>
@endsection



