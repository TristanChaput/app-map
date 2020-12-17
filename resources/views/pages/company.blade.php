@extends('layouts/app')

@section('content')
    <div>
        <ul>
            <li><span>{{$company->name}}</span></li>
            <li><span>{{$company->address}}</span></li>
            <li><span>{{$company->phone_number}}</span></li>
            <li><span>{{$company->latitude}}</span></li>
            <li><span>{{$company->longitude}}</span></li>
        </ul>
    </div>
@endsection
