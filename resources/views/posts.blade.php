<x-layout>
    @foreach ($posts as $post)
        {{--        @dd($loop)--}}
        <article class="{{$loop->even ? 'foobar' : ''}}">
            <h1>
                <a href="/posts/{{ $post->slug}}">
                    {!! $post->title !!}
                </a>
            </h1>
            <p>
                <a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a>
            </p>
            <div>
                <p><?= $post->excerpt; ?></p>
            </div>
        </article>
    @endforeach
</x-layout>

