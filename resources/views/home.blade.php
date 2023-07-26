@extends('layouts.app')

@section('content')

    <div class="container text-center pt-5">
        <h1>
            Hello,
            @auth
                {{ Auth :: user() -> name }}
                <a class="btn btn-primary" href="{{ route('project.create')}}">
                    +
                </a>
            @endauth
            @guest
                World!
            @endguest
        </h1>
        <ul class="list-unstyled">
            @foreach ($projects as $project)
                <li>
                    @auth
                        <a href="{{ route('project.show', $project -> id) }}">
                            {{ $project -> name }}
                        </a>
                    @endauth
                    @guest
                        {{ $project -> name }}
                    @endguest
                </li>
            @endforeach
        </ul>
        <h5>Technologies: {{ count($user -> technologies) }}</h5>
        <ul>
            @foreach($user -> technologies as $technology)
            <li>
            <a href="{{ route('technology.show', $technology -> id) }}">
    
                {{techonlogy -> name}}
            </li>
            @endforeach
        </ul>
    </div>

@endsection