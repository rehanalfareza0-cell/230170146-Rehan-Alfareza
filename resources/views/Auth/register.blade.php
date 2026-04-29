<x-layout>
    <x-slot:title>Register</x-slot:title>

    <div class="max-w-md mx-auto">
        <form method="POST" action="/register" class="space-y-3">
            @csrf

            <input type="text" name="name" placeholder="Name"
                class="input input-bordered w-full" required>

            <input type="email" name="email" placeholder="Email"
                class="input input-bordered w-full" required>

            <input type="password" name="password" placeholder="Password"
                class="input input-bordered w-full" required>

            <button class="btn btn-primary w-full">Sign Up</button>

            <p class="text-sm text-center">
                Sudah punya akun? <a href="/login" class="text-blue-500">Login</a>
            </p>
        </form>
    </div>
</x-layout>