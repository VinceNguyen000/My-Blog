@auth
    <form action="/posts/{{ $post->slug }}/comments"
          method="POST"
          class="bg-gray-100 p-6 rounded-xl border border-gray-200 space-x-6 space-y-6">
        @csrf
        <header class="flex items-center">
            <div class="px-3">
                <img src="https://i.pravatar.cc/100?u={{ auth()->id() }}"
                     alt=""
                     class="rounded-full"
                     width="50px"
                >
            </div>
            <h4>Hey {!! Str::upper(auth()->user()->username) !!}, tell people what you think! </h4>
        </header>
        <div>
            <textarea
                name="body"
                cols="30"
                rows="10"
                class="w-full text-gray-700 text-sm focus:outline-none focus:ring p-2"
                placeholder="Comment here"
                required
            ></textarea>

            @error('body')
            <span class="text-red-700">{{ $message }}</span>
            @enderror
        </div>
        <div class="flex justify-end">
            <x-submit-button></x-submit-button>
        </div>
    </form>
@else
    <p>
        <a href="/register"
           class="hover:underline text-blue-500">Register
        </a> or
        <a href="/login">
            <span
                class="hover:underline text-blue-500">Log in
            </span> to leave a comment
        </a>
    </p>
@endauth
