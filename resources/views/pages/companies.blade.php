@extends('layouts/app')

@section('content')
    <div>
        <ul>
            @foreach ($data as $i)
                <li>{{$i->name}}</li>
            @endforeach
        </ul>
        <h1>{{$count}}</h1>
    </div>
@endsection
