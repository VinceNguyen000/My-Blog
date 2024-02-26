<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto bg-gray-100 rounded-xl p-5">
            <h1 class="text-center text-xl font-bold ">Log In!</h1>
            <form action="/sessions" method="POST">
                @csrf {{--Cross Site Request Forgery--}}
                <div class="mb-2">
                    <label for="email"
                           class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        Email
                    </label>
                    <input type="email"
                           name="email"
                           id="email"
                           value="{{old('email')}}"
                           class="border border-gray-400 p-2 w-full mb-6"
                           required
                    >
{{--                    @error('email')--}}
{{--                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>--}}
{{--                    @enderror--}}
                </div>
                <div class="mb-2">
                    <label for="password"
                           class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        Password
                    </label>
                    <input type="password"
                           name="password"
                           id="password"
                           class="border border-gray-400 p-2 w-full mb-6"
                           required
                    />
                    @error('password')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-2">
                    <button type="submit"
                            class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500 mb-6"
                    >
                        Log In
                    </button>
                </div>
                @foreach($errors->all() as $error)
                    <li class="text-red-500 text-xs">{{$error}}</li>
                @endforeach

            </form>
        </main>
    </section>
</x-layout>
