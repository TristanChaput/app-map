@extends('layouts/app')

@section('content')
    <div>
        <ul>
            <li><span>{{$employee->last_name}}</span></li>
            <li><span>{{$employee->first_name}}</span></li>
            <li><span>{{$employee->address}}</span></li>
            <li><span>{{$employee->phone_number}}</span></li>
        </ul>
    </div>
@endsection