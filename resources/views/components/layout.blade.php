<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Chirper' }}</title>

    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" />
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

<body class="min-h-screen flex flex-col">

    <nav class="navbar bg-base-100 shadow-sm">

        <div class="navbar-start">

            <div class="dropdown">
                <label tabindex="0" class="btn btn-ghost text-xl cursor-pointer flex items-center gap-2">
                    ☰ <span>🐦 Chirper</span>
                </label>

                <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box w-56 p-2 shadow z-[1]">

                    <li><a href="/welcome">Home</a></li>
                    <li><a href="/dashboard">Dashboard</a></li>
                    <li><a href="/about">About Us</a></li>

                    <li>
                        <details>
                            <summary>Theme</summary>
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
                <a href="/login" class="btn btn-ghost btn-sm">Login</a>
                <a href="/register" class="btn btn-primary btn-sm">Register</a>
            @endauth
        </div>

    </nav>

    <main class="flex-1 container mx-auto p-4">
        {{ $slot }}
    </main>

    <footer class="footer footer-center p-5 bg-transparent text-base-content text-xs">
        <div>
            <p>© 2026 Chirper - Built with Laravel By Rehan Alfareza (230170146)</p>
        </div>
    </footer>

</body>

</html>
