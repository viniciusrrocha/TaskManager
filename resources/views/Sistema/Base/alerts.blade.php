@if(session('success'))
    <div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <p>{!! session('success') !!}</p>
    </div>
@endif

@if(session('erros'))
    <div class="alert alert-danger">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <p>{!! session('errors') !!}</p>
    </div>
@endif

@if($errors->any())
    <div class="alert alert-warning">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <p>
        @foreach($errors->all() as $error)
            {!! $error !!} <br>
        @endforeach
        </p>
    </div>
@endif
        