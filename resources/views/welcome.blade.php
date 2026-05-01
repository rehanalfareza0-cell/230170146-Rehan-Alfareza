<x-layout>
    <x-slot:title>Welcome</x-slot:title>

    <div class="max-w-2xl mx-auto text-center">
        <div class="text-5xl mb-2 animate-bounce">🐦</div>
        <h1 class="text-4xl font-bold">Hi, Welcome to Chirper!</h1>
        <p class="mt-2 text-base-content/70">Share your thoughts with the world.</p>
    </div>

    <div class="mt-6 max-w-xl mx-auto">

        <h2 class="text-center text-2xl font-semibold mb-4">Latest Chirps</h2>

        <form method="POST" action="/chirps">
            @csrf

            @if ($errors->any())
                <div class="alert alert-error mb-3">
                    {{ $errors->first() }}
                </div>
            @endif

            <textarea name="content"
                class="textarea textarea-bordered w-full"
                placeholder="What's on your mind?"
                rows="3"></textarea>

            <div class="flex justify-end mt-2">
                <button class="btn btn-primary btn-sm">
                    Chirp
                </button>
            </div>
        </form>

        <div class="mt-6 space-y-3">
            @forelse ($chirps as $chirp)
                <div class="card bg-base-100 shadow p-4">

                    <div class="flex justify-between items-center">
                        <div>
                            <strong>Anonymous</strong>
                            <span class="text-sm text-gray-500">
                                {{ $chirp->created_at->diffForHumans() }}
                            </span>
                        </div>

                        <form method="POST" action="/chirps/{{ $chirp->id }}">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-xs btn-error">Delete</button>
                        </form>
                    </div>

                    <p class="mt-2">{{ $chirp->content }}</p>

                </div>
            @empty
                <div class="text-center text-gray-500">
                    Belum ada chirp.
                </div>
            @endforelse
        </div>

    </div>
</x-layout>