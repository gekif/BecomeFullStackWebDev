{{--{{ $posts }}--}}

@if ($posts->count())

    @foreach ($posts as $post)
        <li>{{ $post->title }} <br> {{ str_limit($post->body, 10) }}</li>
    @endforeach
@else
    <p>There is no posts</p>
@endif