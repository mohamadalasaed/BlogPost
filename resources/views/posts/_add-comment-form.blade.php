@auth
<form method="POST" action="/posts/{{ $post->slug }}/comments" class="border border-gray-200 p-6 rounded-xl">
    @csrf
    <header class="flex items-center">
        <img src="https://i.pravatar.cc/60?u={{ auth()->id() }}" width="40" height="40" class="rounded-full">
        <h2 class="ml-4">Want to participate?</h2>
    </header>

    <x-form.field>
        <textarea name="body" class="w-full test-sm focus:outline-none focus:ring p-3" rows="5" placeholder="Quick, thing of something to say!" required></textarea>
        <x-form.error name="body" />
    </x-form.field>

    <x-form.button>Post</x-form.button>

</form>
@else
    <p class="font-semibold">
        <a href="/register" class="text-blue-500 hover:underline">Register</a> or <a href="/login" class="text-blue-500 hover:underline">Log in</a> to leave a comment.
    </p>
@endauth
