@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card">
        @if (count($asset)>0)
        <table class="table table-striped table-sm table-bordered">
        <thead>
            <tr class="text-center">
                <th>ID</th>
                <th>Device_type</th>
                <th>Searial_no</th>
                <th>Tag_no</th>
                <th>Name</th>
                <th>Staff_id</th>
                <th>Department</th>
            </tr>
        </thead>
            @foreach ($asset as $record)
                <tr>
                    <td>{{$record->id}}</td>
                        <td>{{$record->device_type}}</td>
                        <td>{{$record->serial_no}}</td>
                        <td>{{$record->tag_no}}</td>
                        <td>{{$record->name}}</td>
                        <td>{{$record->staff_id}}</td>
                        <td>{{$record->department}}</td>
                </tr>
            @endforeach
        </table>
        @else
        <h1 class="text-center">No Asset found in the database</h1>
        @endif

    </div>



</div>

@endsection
