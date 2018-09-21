@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('/people/add') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('Birth Year') }}</label>

                            <div class="col-md-6">
                                <input id="birth_year" type="birth_year" class="form-control{{ $errors->has('birth_year') ? ' is-invalid' : '' }}" name="birth_year" value="{{ old('birth_year') }}" required>

                                @if ($errors->has('birth_year'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('birth_year') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('Eye Color') }}</label>

                            <div class="col-md-6">
                                <input id="eye_color" type="eye_color" class="form-control{{ $errors->has('eye_color') ? ' is-invalid' : '' }}" name="eye_color" value="{{ old('eye_color') }}" required>

                                @if ($errors->has('eye_color'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('eye_color') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>

                            <div class="col-md-6">
                                <input id="gender" type="gender" class="form-control{{ $errors->has('gender') ? ' is-invalid' : '' }}" name="gender" value="{{ old('gender') }}" required>

                                @if ($errors->has('gender'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('Hair Color') }}</label>

                            <div class="col-md-6">
                                <input id="hair_color" type="hair_color" class="form-control{{ $errors->has('hair_color') ? ' is-invalid' : '' }}" name="hair_color" value="{{ old('hair_color') }}" required>

                                @if ($errors->has('hair_color'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('hair_color') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('Height') }}</label>

                            <div class="col-md-6">
                                <input id="height" type="height" class="form-control{{ $errors->has('height') ? ' is-invalid' : '' }}" name="height" value="{{ old('height') }}" required>

                                @if ($errors->has('height'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('height') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('Mass') }}</label>

                            <div class="col-md-6">
                                <input id="mass" type="mass" class="form-control{{ $errors->has('mass') ? ' is-invalid' : '' }}" name="mass" value="{{ old('mass') }}" required>

                                @if ($errors->has('mass'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('mass') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('Skin Color') }}</label>

                            <div class="col-md-6">
                                <input id="skin_color" type="skin_color" class="form-control{{ $errors->has('skin_color') ? ' is-invalid' : '' }}" name="skin_color" value="{{ old('skin_color') }}" required>

                                @if ($errors->has('skin_color'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('skin_color') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>       

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('Home World') }}</label>

                            <div class="col-md-6">
                                <input id="homeworld" type="homeworld" class="form-control{{ $errors->has('homeworld') ? ' is-invalid' : '' }}" name="homeworld" value="{{ old('homeworld') }}" required>

                                @if ($errors->has('homeworld'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('homeworld') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>  

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('URL') }}</label>

                            <div class="col-md-6">
                                <input id="url" type="url" class="form-control{{ $errors->has('url') ? ' is-invalid' : '' }}" name="url" value="{{ old('url') }}" required>

                                @if ($errors->has('url'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('url') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>     

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
