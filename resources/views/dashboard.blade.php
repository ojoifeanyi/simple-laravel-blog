<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }} 
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }} | <a href="{{ Route('logout') }}">Logout</a> | <a href="{{ Route('blog.index') }}">Home</a>
                </div>
            </div>

<div>
    <h1 class="pt-8 pb-8 text-xl font-bold">
        Posts of: {{ Auth::user()->name }}
    </h1>
    @foreach (Auth::user()->posts as $post )
        <h2 class="pb-2 pt-2">
       <li> {{ $post->title }} </li>
        </h2>
        <br>
    @endforeach
</div>

        </div>
    </div>
</x-app-layout>
