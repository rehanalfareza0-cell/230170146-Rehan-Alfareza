<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chirper - Home</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5/themes.css" rel="stylesheet" type="text/css" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<script>
    function setTheme(theme) {
        document.documentElement.setAttribute("data-theme", theme);
        localStorage.setItem("theme", theme);
    }

    document.addEventListener("DOMContentLoaded", () => {
        const saved = localStorage.getItem("theme");
        if (saved) {
            document.documentElement.setAttribute("data-theme", saved);
        }
    });
</script>

<body class="min-h-screen flex flex-col font-sans">

    <!-- NAVBAR -->
    <nav class="navbar bg-transparent">
        <div class="navbar-start">
            <div class="dropdown">
                <label tabindex="0" class="btn btn-ghost text-xl flex items-center gap-2">
                    ☰ <span>🐦 Chirper</span>
                </label>

                <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box w-56 p-2 shadow">
                    <li><a href="/welcome">Home</a></li>
                    <li><a href="/dashboard">Dashboard</a></li>
                    <li><a href="/about">About Us</a></li>

                    <li>
                        <details>
                            <summary>Mode</summary>
                            <ul>
                                <li><a onclick="setTheme('light')">Light</a></li>
                                <li><a onclick="setTheme('dark')">Dark</a></li>
                                <li><a onclick="setTheme('modern')">Modern</a></li>
                                <li><a onclick="setTheme('nature')">Nature</a></li>
                                <li><a onclick="setTheme('sea')">Sea</a></li>
                            </ul>
                        </details>
                    </li>
                </ul>
            </div>
        </div>

        <div class="navbar-end gap-2">
            @auth
                <span class="text-sm">{{ auth()->user()->name }}</span>

                <form method="POST" action="/logout">
                    @csrf
                    <button class="btn btn-ghost btn-sm">Logout</button>
                </form>
            @else
                <a href="/login" class="btn btn-ghost btn-sm">Sign In</a>
                <a href="/register" class="btn btn-primary btn-sm">Sign Up</a>
            @endauth
        </div>
    </nav>

    <!-- MAIN -->
    <main class="flex-1 container mx-auto px-4 py-8">

        <!-- HERO -->
        <div class="max-w-2xl mx-auto text-center">
            <div class="text-5xl mb-2 animate-bounce">🐦</div>
            <h1 class="text-4xl font-bold">Hi, Welcome to Chirper!</h1>
            <p class="mt-2 text-base-content/70">Share your thoughts with the world.</p>
        </div>

        <!-- FORM -->
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
                    class="textarea textarea-bordered w-full bg-base-100"
                    placeholder="What's on your mind?"
                    rows="3">{{ old('content') }}</textarea>

                <div class="flex justify-end mt-2">
                    <button class="btn btn-primary btn-sm px-5 rounded-full">
                        Chirp
                    </button>
                </div>
            </form>

            <!-- LIST CHIRPS -->
            <div class="mt-6 space-y-3">
                @forelse ($chirps as $chirp)
                    <div class="card bg-base-100 shadow p-4">

                        <div class="flex justify-between items-center">
                            <div>
                                <strong>{{ $chirp->user->name ?? 'Unknown' }}</strong>
                                <span class="text-sm text-gray-500">
                                    {{ $chirp->created_at->diffForHumans() }}
                                </span>
                            </div>

                            @if ($chirp->user_id == auth()->id())
                                <form method="POST" action="/chirps/{{ $chirp->id }}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-xs btn-error">Delete</button>
                                </form>
                            @endif
                        </div>

                        <p class="mt-2">{{ $chirp->content }}</p>

                    </div>
                @empty
                    <div class="text-center mt-10 text-base-content/60">
                        <div class="text-4xl mb-2">💬</div>
                        <p>No chirps yet. Be the first to chirp!</p>
                    </div>
                @endforelse
            </div>

        </div>

    </main>

    <!-- FOOTER -->
    <footer class="footer footer-center p-5 text-xs">
        <p>© 2026 Chirper - Built with Laravel By Rehan Alfareza (230170146)</p>
    </footer>

</body>
</html> 