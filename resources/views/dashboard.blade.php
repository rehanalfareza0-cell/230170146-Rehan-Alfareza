<x-layout>
    <x-slot:title>
        Dashboard
    </x-slot:title>

    <div class="max-w-6xl mx-auto mt-10">
        <div class="text-center mb-8">
            <h1 class="text-4xl font-bold" style="font-bold font-sans">
                DASHBOARD
            </h1>

            <p class="mt-3 text-base-content/70">
                Selamat datang di halaman dashboard Chirper 🐦
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="card bg-base-100 shadow-md border">
                <div class="card-body text-center">

                    <div class="text-4xl">👟</div>

                    <h2 class="card-title justify-center">
                        Produk
                    </h2>

                    <p class="text-base-content/70">
                        Lihat kategori produk sepatu
                    </p>

                    <div class="card-actions justify-center mt-4">
                        <a href="/produk" class="btn btn-primary btn-sm">
                            Lihat Produk
                        </a>
                    </div>

                </div>
            </div>

            <div class="card bg-base-100 shadow-md border">
                <div class="card-body text-center">

                    <div class="text-4xl">📈</div>

                    <h2 class="card-title justify-center">
                        Total Penjualan
                    </h2>

                    <p class="text-base-content/70">
                        Harian, Mingguan, Bulanan, Tahunan
                    </p>

                    <div class="card-actions justify-center mt-4">
                        <a href="/penjualan" class="btn btn-primary btn-sm">
                            Lihat Grafik
                        </a>
                    </div>

                </div>
            </div>

            <div class="card bg-base-100 shadow-md border">
                <div class="card-body text-center">

                    <div class="text-4xl">⭐</div>

                    <h2 class="card-title justify-center">
                        Rating
                    </h2>

                    <p class="text-3xl font-bold">
                        4.8 / 5
                    </p>

                    <p class="text-base-content/70">
                        <a href="/" class="btn btn-primary btn-sm">
                            Berdasarkan ulasan pelanggan
                        </a>
                    </p>

                </div>
            </div>

        </div>

        <div class="text-center mt-10">
            <a href="/" class="btn btn-primary">
                Back to Home
            </a>
        </div>

    </div>

</x-layout>
