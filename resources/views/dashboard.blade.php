<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('GAZ ESPORT') }} hallo guys
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @foreach ($posts as $post)
                <div class="card w-full bg-base-100 shadow-xl my-2">
                    <div class="card-body ">
                        <h2 class="card-title">{{ $post->user->name }} - <span class="width=20">{{ $post->created_at->diffForHumans() }}</span></h2>
                        <p>{{ $post->body }}</p>
                        <div class="card-actions justify-end">
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg my-2">
                <div class="p-6 bg-white border-b border-gray-200 ">
                    <form action="{{ route('post.store') }}" method="post">
                        @csrf
                        @error('body')
                            <span class="text-error">{{ $message }}</span>
                        @enderror
                        <textarea name="body" class="w-full block rounded textarea @error ('body') textarea-error @enderror" placeholder="Comment" rows="5">{{ old('body') }}</textarea>
                        <input type="submit" value="Post" class="btn mt-2">
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
