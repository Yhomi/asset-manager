@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <h2 class="text-center mb-2">Asset List</h2>
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
                <th>DateAdded</th>
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
                        <td>{{$record->location}}</td>
                        <td>{{$record->created_at}}</td>
                        <td>
                        <a href="\assetManager/public/asset/{{$record->id}}" title="View details" class="btn btn-secondary btn-sm">View</a>
                            <a href="\assetManager/public/asset/{{$record->id}}/edit" title="Edit" class="btn btn-primary btn-sm">Edit</a>
                        {{-- <a href="javascript:void(0)" class="btn btn-danger btn-sm delBtn" data-id="{{$record->id}}">Delete</a> --}}
                                <form method="POST" action="\assetManager/public/asset/{{$record->id}}" class="float-left mr-2">
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

<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
<script>
    // $(document).ready(function(){
    //     $('body').on('click','.delBtn',function(e){
    //         e.preventDefault()
    //         //  console.log('connected')
    //         var del_id=$(this).data('id');
    //         // console.log(del_id)
    //         $.ajax({
    //             type:"DELETE",
    //             url:"/assetManager/public/asset/"+del_id,
    //             success:function(res){
    //                 console.log(res)
    //             }
    //         })
    //     })
    // })
</script>
