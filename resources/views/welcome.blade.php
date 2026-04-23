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

    <nav class="navbar bg-transparent">
        <div class="navbar-start">

            <div class="dropdown">
                <label tabindex="0" class="btn btn-ghost text-xl cursor-pointer flex items-center gap-2">

                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>


                    <span>🐦 Chirper</span>

                </label>

                <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box z-[1] w-56 p-2 shadow">

                    <li>
                        <a href="/">Home</a>
                    </li>

                    <li>
                        <a href="/">Dashboard</a>
                    </li>

                    <li>
                        <a href="/about">About Us</a>
                    </li>

                    <li>
                        <details>
                            <summary>Mode</summary>
                            <ul>
                                <li>
                                    <a onclick="setTheme('light')">Light Mode</a>
                                </li>
                                <li>
                                    <a onclick="setTheme('dark')">Dark Mode</a>
                                </li>
                                <li>
                                    <a onclick="setTheme('modern')">Modern</a>
                                </li>
                                <li>
                                    <a onclick="setTheme('nature')">Nature</a>
                                </li>
                                <li>
                                    <a onclick="setTheme('sea')">Sea</a>
                                </li>
                            </ul>
                        </details>
                    </li>

                    <li>
                        <a href="#">Contact</a>
                    </li>

                    <li>
                        <a href="#">Users</a>
                    </li>

                </ul>
            </div>

        </div>
        <div class="navbar-end gap-2">
            <a href="#" class="btn btn-ghost btn-sm">Sign In</a>
            <a href="#" class="btn btn-primary btn-sm">Sign Up</a>
        </div>
    </nav>

    <main class="flex-1 container mx-auto px-4 py-8">
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

        </div>

    </main>

    <footer class="footer footer-center p-5 bg-transparent text-base-content text-xs">
        <div>
            <p>© 2026 Chirper - Built with Laravel By Rehan Alfareza (230170146)</p>
        </div>
    </footer>

</body>

</html>
