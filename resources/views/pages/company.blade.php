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
                <th scope="col">Name</th>
                <th scope="col">Address</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Latitude</th>
                <th scope="col">Longitude</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$company->name}}</td>
                <td>{{$company->address}}</td>
                <td>{{$company->phone_number}}</td>
                <td>{{$company->latitude}}</td>
                <td>{{$company->longitude}}</td>
                <td>
                    <button onclick="openForm()" class="btn btn-success"> Edit </button>
                    <a href={{"delete/".$company->id}} class="btn btn-danger"> Delete </a>
                </td>
            </tr>
        </tbody>
    </table>

    <div id = "editForm" style = "display:none">
        <form action={{$company->id}} method="POST">
            <input type="hidden" name="id" id="id" value="{{$company->id}}">
            <input type="text" name="name" id="name" value="{{$company->name}}">
            <input type="text" name="address" id="address" value="{{$company->address}}">
            <input type="tel" name="phone_number" id="phone_number" value="{{$company->phone_number}}">
            <input type="text" name="latitude" id="latitude" value="{{$company->latitude}}">
            <input type="text" name="longitude" id="longitude" value="{{$company->longitude}}">
            <button type="submit" class="btn btn-success"> Update </button>
        </form>
    </div>
@endsection