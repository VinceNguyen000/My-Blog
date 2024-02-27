@props(['comment'])
<article class="flex bg-gray-100 p-6 rounded-xl border border-gray-200 space-x-6">
    <div class="flex-shrink-0">
        <img src="https://i.pravatar.cc/100?u={{ $comment->id }}" alt="" class="width: 100px rounded">
    </div>

    <div>
        <header class="mb-4">
            <h3 class="font-bold">{{ $comment->author->username }}</h3>
            <p class="text-xs">Posted
                <time>{{ $comment->created_at }}</time>
            </p>
        </header>
        <p>
            {{ $comment->body }}
        </p>
    </div>
</article>
