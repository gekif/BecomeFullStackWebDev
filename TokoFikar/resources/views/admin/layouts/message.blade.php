@if(session()->has('msg'))
    <div class="alert alert-success">
        {{ session()->get('msg') }}
    </div>
@endif

@if(session()->has('pend'))
    <div class="alert alert-warning">
        {{ session()->get('pend') }}
    </div>
@endif