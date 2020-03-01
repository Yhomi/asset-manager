@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Device') }}</div>

                <div class="card-body">
                <form method="POST" action="\assetManager/public/asset/{{$asset->id}}">
                        @csrf
                        <input type="hidden" name="_method" value="PUT">
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$asset->name}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="staff_id" class="col-md-4 col-form-label text-md-right">{{ __('Staff_ID') }}</label>

                            <div class="col-md-6">
                                <input id="staff_id" type="text" class="form-control @error('staff_id') is-invalid @enderror" name="staff_id" value="{{$asset->staff_id}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="department" class="col-md-4 col-form-label text-md-right">{{ __('Department') }}</label>

                            <div class="col-md-6">
                                <input id="department" type="text" class="form-control @error('department') is-invalid @enderror" name="department" value="{{$asset->department}}">


                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Device_type" class="col-md-4 col-form-label text-md-right">{{ __('Device Type') }}</label>

                            <div class="col-md-6">
                                <input id="device_type" type="text" class="form-control @error('device_type') is-invalid @enderror" name="device_type" value="{{$asset->device_type}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Device_Name" class="col-md-4 col-form-label text-md-right">{{ __('Device Name') }}</label>

                            <div class="col-md-6">
                                <input id="device_name" type="text" class="form-control @error('device_name') is-invalid @enderror" name="device_name" value="{{$asset->device_name}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Serial_no" class="col-md-4 col-form-label text-md-right">{{ __('Serial Number') }}</label>

                            <div class="col-md-6">
                                <input id="serial_no" type="text" class="form-control @error('serial_no') is-invalid @enderror" name="serial_no" value="{{$asset->serial_no}}">


                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Tag_no" class="col-md-4 col-form-label text-md-right">{{ __('Tag Number') }}</label>

                            <div class="col-md-6">
                                <input id="tag_no" type="text" class="form-control @error('tag_no') is-invalid @enderror" name="tag_no" value="{{$asset->tag_no}}">

                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary btn-block">
                                    {{ __('Update Device') }}
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
