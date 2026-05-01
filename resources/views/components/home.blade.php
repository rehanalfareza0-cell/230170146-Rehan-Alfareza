<x-layout>
    <x-slot:title>
        Welcome
    </x-slot:title>

    <div class="max-w-2xl mx-auto">

        <div class="card-body items-center text-center">

            <div class="text-5xl mb-2 animate-bounce">
                🐦
            </div>

            <h1 class="text-4xl font-bold">
                Hi, Welcome to Chirper!
            </h1>

            <p class="mt-2 text-base-content/70">
                Share your thoughts with the world.
            </p>

        </div>
    </div>
    </div>

    <div class="mt-2">
        <h2 class="text-center text-2xl font-semibold mb-4">Latest Chirps</h2>

        <div class="max-w-xl mx-auto mt-4">

            <textarea class="textarea textarea-bordered w-full bg-base-100" placeholder="What's on your mind?" rows="3"></textarea>

            <div class="flex justify-end mt-2">
                <button class="btn btn-primary btn-sm px-5 rounded-full">
                    Chirp
                </button>
            </div>

        </div>
    </div>

    <div class="text-center mt-10 text-base-content/60">
        <div class="text-4xl mb-2">💬</div>
        <p>No chirps yet. Be the first to chirp!</p>
    </div>

    <footer class="footer footer-center p-5 bg-transparent text-base-content text-xs">
        <div>
            <p>© 2026 Chirper - Built with Laravel By Rehan Alfareza (230170146)</p>
        </div>
    </footer>

    </div>

    </div>

</x-layout>
