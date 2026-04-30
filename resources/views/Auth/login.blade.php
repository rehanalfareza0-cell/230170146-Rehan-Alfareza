<x-layout>
    <x-slot:title>Login</x-slot:title>

    <div class="max-w-md mx-auto">
        <form method="POST" action="/login" class="space-y-3">
            @csrf

            <input type="email" name="email" placeholder="Email" class="input input-bordered w-full" required>

            <input type="password" name="password" placeholder="Password" class="input input-bordered w-full" required>

            <button class="btn btn-primary w-full">Sign In</button>

            <p class="text-sm text-center">
                Belum punya akun? <a href="/register" class="text-blue-500">Daftar</a>
            </p>
        </form>
    </div>
</x-layout>
