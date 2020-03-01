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
                <th>Name</th>
                <th>Staff_id</th>
                <th>Department</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
            @foreach ($asset as $record)
                <tr>
                    <td>{{$record->id}}</td>
                        <td>{{$record->device_type}}</td>
                        <td>{{$record->device_name}}</td>
                        <td>{{$record->serial_no}}</td>
                        <td>{{$record->tag_no}}</td>
                        <td>{{$record->name}}</td>
                        <td>{{$record->staff_id}}</td>
                        <td>{{$record->department}}</td>
                        <td>
                        <a href="\assetManager/public/asset/{{$record->id}}" title="View details" class="text-secondary"><i class="fas fa-info-circle fa-lg"></i></a>
                            <a href="\assetManager/public/asset/{{$record->id}}/edit" title="Edit" class="text-primary"><i class="fas fa-edit fa-lg"></i></a>
                            <a href="" title="Delete" class="text-danger"><i class="fas fa-trash-alt fa-lg"></i></a>
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
