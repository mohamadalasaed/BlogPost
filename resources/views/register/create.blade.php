<x-layout >
    <section class="px-6 py8">
        <main class="max-w-lg mx-auto mt-10 bg-gray-100 border border-gray-200 p-6 rounded-xl">
            <h1 class="text-center font-bold text-xl">Register</h1>
            <form method="POST" action="/register" class="mt-t0">
                    @csrf
                    <x-form.input name="name" />
                    <x-form.input name="username" />
                    <x-form.input name="email" type="email" />
                    <x-form.input name="password" type="password" />
                    
                    <x-form.field>
                        <button type="submit" class="bg-blue-500 text-white rounded py-2 px-4 hover:bg-blue-600">
                            Submit
                        </button>
                    </x-form.field>
            </form>
        </main>
    </section>
</x-layout>

