@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card">
        @if (count($asset)>0)
        <table class="table table-striped table-sm table-bordered">
        <thead>
            <tr class="text-center">
                <th>ID</th>
                <th>Device Type</th>
                <th>Device Name</th>
                <th>Searial_no</th>
                <th>Tag_no</th>
                <th>Location</th>
                <th>Name</th>
                <th>Staff_id</th>
                <th>Department</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
            @foreach ($asset as $record)
                <tr>
                    <td>{{$record->id}}</td>
                        <td>{{$record->device_type}}</td>
                        <td>{{$record->device_name}}</td>
                        <td>{{$record->serial_no}}</td>
                        <td>{{$record->tag_no}}</td>
                        <td>{{$record->location}}</td>
                        <td>{{$record->name}}</td>
                        <td>{{$record->staff_id}}</td>
                        <td>{{$record->department}}</td>
                        <td>
                        <a href="\assetManager/public/asset/{{$record->id}}" title="View details" class="text-secondary"><i class="fas fa-info-circle fa-lg"></i></a>
                            <a href="\assetManager/public/asset/{{$record->id}}" title="Edit" class="text-primary"><i class="fas fa-edit fa-lg"></i></a>
                            <form method="POST" action="\assetManager/public/asset/{{$record->id}}">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="submit" value="Delete" class="btn btn-danger btn-sm">
                            </form>
                        </td>
                </tr>
            @endforeach
        </table>
        @else
        <h1 class="text-center">No Asset found in the database</h1>
        @endif

    </div>



</div>

@endsection
