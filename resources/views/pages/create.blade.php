@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add Device') }}</div>

                <div class="card-body">
                    <form method="POST" action="App\Http\Controllers\AssetController@create">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="staff_id" class="col-md-4 col-form-label text-md-right">{{ __('Staff_ID') }}</label>

                            <div class="col-md-6">
                                <input id="staff_id" type="text" class="form-control @error('staff_id') is-invalid @enderror" name="staff_id" value="{{ old('email') }}" required autocomplete="staff_id">

                                @error('staff_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="department" class="col-md-4 col-form-label text-md-right">{{ __('Department') }}</label>

                            <div class="col-md-6">
                                <input id="department" type="text" class="form-control @error('department') is-invalid @enderror" name="department" value="{{ old('department') }}" required autocomplete="department">

                                @error('department')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Device_type" class="col-md-4 col-form-label text-md-right">{{ __('Device Type') }}</label>

                            <div class="col-md-6">
                                <input id="device_type" type="text" class="form-control @error('device_type') is-invalid @enderror" name="device_type" value="{{ old('device_type') }}" required autocomplete="department">

                                @error('device_type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Serial_no" class="col-md-4 col-form-label text-md-right">{{ __('Serial Number') }}</label>

                            <div class="col-md-6">
                                <input id="serial_no" type="text" class="form-control @error('serial_no') is-invalid @enderror" name="serial_no" value="{{ old('serial_no') }}" required autocomplete="serial_no">

                                @error('serial_no')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Tag_no" class="col-md-4 col-form-label text-md-right">{{ __('Tag Number') }}</label>

                            <div class="col-md-6">
                                <input id="tag_no" type="text" class="form-control @error('tag_no') is-invalid @enderror" name="tag_no" value="{{ old('tag_no') }}" required autocomplete="tag_no">

                                @error('tag_no')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary btn-block">
                                    {{ __('Add Device') }}
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
