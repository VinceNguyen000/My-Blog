<x-layout>
    <article>
        <h1>{{ $post->title }}</h1>
        <p>
           By <a href="#">author </a> in <a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a>
        </p>
        <div>{!! $post->body !!}</div>
    </article>

    <div><a href="/">Home Page</a></div>
</x-layout>

