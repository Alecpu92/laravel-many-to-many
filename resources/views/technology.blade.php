@extends('layouts.main-layout')

@section('content')

    <div class="text-center">
        <h1>
            {{ $technology -> name }}
            <a class="btn btn-primary" href="{{ route(technology.edit", $role -> id)}}">
                EDIT
            </a>
        </h1>
        <p>{{ $technology -> description }}</p>
        <ul>
            @foreach ($technology -> users as $user)
                <li>
                    {{ $user -> name }}
                </li>
            @endforeach
        </ul>
    </div>

@endsection