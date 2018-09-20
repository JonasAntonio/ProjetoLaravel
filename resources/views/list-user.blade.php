@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Stored Users</div>
                <div class="card-body">
                    <table class="table table-striped table-bordered">
                        <thead class="">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                            </tr>
                            <tbody class="table tbody">
                                @foreach($users as $user)
                                    <tr>
                                        <th scope="row">{{ $user -> id }}</th>
                                        <td>{{ $user -> name }}</td>
                                        <td>{{ $user -> email }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </thead>
                    </table>
                    <a class="btn btn-primary" href="{{ route('create') }}">Create New Users</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
