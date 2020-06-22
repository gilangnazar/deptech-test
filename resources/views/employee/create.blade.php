@extends('base/base')

@section('title', "employee create")

@section('content')
   <h1 class="text-center m-3">Create Employee Data</h1>

   @if ($errors->any())
      <div class="alert alert-danger">
         <strong>Whoops!</strong> There were some problems with your input.<br><br>
         <ul>
            @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
            @endforeach
         </ul>
      </div>
   @endif

   <form action="{{route('employees.store')}}" method="POST">
      <div class="form-group">
         <label for="first_name">First Name</label>
         <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name">
      </div>
      <div class="form-group">
         <label for="last_name">Last Name</label>
         <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name">
      </div>
      <div class="form-group">
         <label for="email">E-mail</label>
         <input type="email" class="form-control" id="email" name="email" placeholder="E-mail">
      </div>
      <div class="form-group">
         <label for="phone_number">Phone Number</label>
         <input type="number" class="form-control" id="phone_number" name="phone_number" placeholder="Phone Number">
      </div>
      <div class="form-group">
         <label for="gender">Gender</label>
         <select class="form-control" id="gender" name="gender">
            <option value="male">Male</option>
            <option value="female">Female</option>
         </select>
      </div>
      <button class="btn btn-primary" type="submit">Submit</button>
   </form>
@endsection