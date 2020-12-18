@extends('layouts/app')

@section('head')
    <script>
        function openForm() {
            var x = document.getElementById("editForm");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        } 
    </script>    
@endsection

@section('content')
    <table class="table">
        <thead>
            <tr class="table table-dark">
                <th scope="col">Last Name</th>
                <th scope="col">First Name</th>
                <th scope="col">Address</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$employee->last_name}}</td>
                <td>{{$employee->first_name}}</td>
                <td>{{$employee->address}}</td>
                <td>{{$employee->phone_number}}</td>
                <td>
                    <button onclick="openForm()" class="btn btn-success"> Edit </button>
                    <a href={{"delete/".$employee->id}} class="btn btn-danger"> Delete </a>
                </td>
            </tr>
        </tbody>
    </table>

    <div id = "editForm" style = "display:none">
        <form action={{$employee->id}} method="POST">
            <input type="hidden" name="id" id="id" value="{{$employee->id}}">
            <input type="text" name="last_name" id="last_name" value="{{$employee->last_name}}">
            <input type="text" name="first_name" id="first_name" value="{{$employee->first_name}}">
            <input type="text" name="address" id="address" value="{{$employee->address}}">
            <input type="tel" name="phone_number" id="phone_number" value="{{$employee->phone_number}}">
            <button type="submit" class="btn btn-success"> Update </button>
        </form>
    </div>
@endsection