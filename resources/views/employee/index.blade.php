@extends('base/base')

@section('title', "employee index")

@section('content')
    <h1 class="text-center m-3">employees data</h1>
    <a class="btn btn-primary mb-2" href="{{url('employees/create')}}" role="button">Add Data</a>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">E-mail</th>
            <th scope="col">Phone Number</th>
            <th scope="col">Gender</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($employees as $employee)
        <tr>
        <th scope="row">{{$loop->iteration}}</th>
            <td>{{$employee->first_name}}</td>
            <td>{{$employee->last_name}}</td>
            <td>{{$employee->email}}</td>
            <td>{{$employee->phone_number}}</td>
            <td>{{$employee->gender}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection