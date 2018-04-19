@if(session('success'))
    <div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <p>{!! session('success') !!}</p>
    </div>
@endif
@if(session('errors'))
    <div class="alert alert-danger">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <p>{!! session('errors') !!}</p>
    </div>
@endif
        