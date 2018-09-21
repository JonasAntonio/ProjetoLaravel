@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">Stored People</div>
                <a class="btn btn-primary " href="{{ route('/people/add') }}">Create Person</a>
                <div class="card-body">
                    <table class="table table-sm table-striped table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Birth Year</th>
                                <th scope="col">Eye Color</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Hair Color</th>
                                <th scope="col">Height</th>
                                <th scope="col">Mass</th>
                                <th scope="col">Skin Color</th>
                                <th scope="col">Homeworld</th>
                                <th scope="col">URL</th>
                            </tr>
                            <tbody class="table tbody">
                                @foreach($people as $person)
                                    <tr>
                                        <th scope="row">{{ $person -> id }}</th>
                                        <td>{{ $person -> name }}</td>
                                        <td>{{ $person -> birth_year }}</td>
                                        <td>{{ $person -> eye_color }}</td>
                                        <td>{{ $person -> gender }}</td>
                                        <td>{{ $person -> hair_color }}</td>
                                        <td>{{ $person -> height }}</td>
                                        <td>{{ $person -> mass }}</td>
                                        <td>{{ $person -> skin_color }}</td>
                                        <td>{{ $person -> homeworld }}</td>
                                        <td><a href="{{ $person -> url }}">{{ $person -> url }}</a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </thead>
                    </table>
                    <a class="btn btn-primary" href="{{ route('/people/add') }}">Create Person</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
