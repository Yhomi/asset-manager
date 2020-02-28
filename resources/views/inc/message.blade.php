@if (count($errors)>0)
    <div class="alert alert-danger text-center">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}} </li>
            @endforeach
        </ul>

    </div>

@endif

@if (session('success'))
    <div class="alert alert-success text-center">
        <p>{{session('success')}}</p>
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger text-center">
        <p>{{session('error')}}</p>
    </div>
@endif
