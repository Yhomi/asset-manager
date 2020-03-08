@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card card-default">
                    <div class="card-header">Device Information</div>
                    <div class="card-body">
                        <table class="table table-striped table-bordered">
                            <tr>
                                <th>Device Type</th>
                                <td>{{$asset->device_type}}</td>
                            </tr>
                            <tr>
                                <th>Device Name</th>
                                <td>{{$asset->device_name}}</td>
                            </tr>
                            <tr>
                                <th>Tag Number</th>
                                <td>{{$asset->tag_no}}</td>
                            </tr>
                            <tr>
                                <th>Serial Number</th>
                                <td>{{$asset->serial_no}}</td>
                            </tr>
                            <tr>
                                <th>Location</th>
                                <td>{{$asset->location}}</td>
                            </tr>
                            <tr>
                                <th>User</th>
                                <td>{{$asset->name}}</td>
                            </tr>
                            <tr>
                                <th>User ID</th>
                                <td>{{$asset->staff_id}}</td>
                            </tr>
                            <tr>
                                <th>User Department</th>
                                <td>{{$asset->department}}</td>
                            </tr>
                            <tr>
                                <th>Added By</th>
                                <td>{{$asset->user->name}}</td>
                            </tr>
                            <tr>
                                <th>Date Added</th>
                                <td>{{$asset->created_at}}</td>
                            </tr>
                        </table>

                    </div>
                    <div class="card-footer">
                        <a href="\assetManager/public/asset" class="btn btn-secondary">Back</a>
                    </div>
                  </div>
            </div>
        </div>
    </div>
@endsection
