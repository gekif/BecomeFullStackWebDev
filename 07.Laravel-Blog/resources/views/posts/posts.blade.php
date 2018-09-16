{{--{{ $posts }}--}}

@if ($posts->count())

    @foreach ($posts as $post)
        <li> <strong>{{ $post->id }}</strong> {{ $post->title }} <br> {{ str_limit($post->body, 100) }}</li>
    @endforeach
@else
    <p>There is no posts</p>
@endif