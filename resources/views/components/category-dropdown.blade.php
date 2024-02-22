{{--@props(['categories'])--}}
<x-dropdown>
    <x-slot name="trigger">
        <button
            class="w-full py-2 pl-3 pr-3 text-sm font-semibold text-left lg:w-40 flex lg:inline-flex">
            {{ isset($currentCategory) ? ucwords( $currentCategory->name ) : 'Categories' }}
            <x-icon
                name="down-arrow"
                class="absolute pointer-events-none"
                style="right: 12px;" width="22" height="22"
                viewBox="0 0 22 22"></x-icon>
        </button>
    </x-slot>

    <x-dropdown-item href="/" :active="request()->routeIs('home')">All</x-dropdown-item>

    @foreach($categories as $category)
        <x-dropdown-item
            href="/?category={{ $category->slug }}&{{ http_build_query(request()->except('$category')) }}"
            {{--                        :active="isset($currentCategory) && $currentCategory->is($category)"--}}
            :active='request()->is("categories/.{$category->slug}")'
        >
            {{ ucwords($category->name )}}
        </x-dropdown-item>
    @endforeach
</x-dropdown>
