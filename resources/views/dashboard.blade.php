@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ Auth::user()->name }} User Data</div>

                <div class="card-body">
                    <div>
                        ID: {{ Auth::user()->id }}
                    </div>
                    <div>
                        Name: {{ Auth::user()->name }}
                    </div>
                    <div>
                        Email: {{ Auth::user()->email }}
                    </div>
                    <div>
                        Password: {{ Auth::user()->password }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
