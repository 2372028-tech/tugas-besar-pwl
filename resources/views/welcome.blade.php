<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticketing App - Welcome</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-10 rounded-2xl shadow-xl text-center max-w-sm w-full border border-gray-200">
        <h1 class="text-3xl font-extrabold mb-2 text-gray-800">TicketApp</h1>
        <p class="text-gray-500 mb-8 italic">Sistem Manajemen Tiket Terintegrasi</p>
        
        @auth
            <div class="bg-blue-50 p-4 rounded-lg mb-6">
                <p class="text-sm text-gray-600">Selamat datang kembali,</p>
                <p class="text-lg font-bold text-blue-700">{{ Auth::user()->name }}</p>
            </div>
            
            <div class="flex flex-col gap-3">
                @if(Auth::user()->roles_id == 1)
                    <a href="{{ route('dashboard') }}" class="w-full bg-blue-600 text-white font-semibold px-4 py-3 rounded-xl hover:bg-blue-700 transition shadow-md">
                        Masuk Dashboard Admin
                    </a>
                @elseif(Auth::user()->roles_id == 2)
                    <a href="#" class="w-full bg-emerald-600 text-white font-semibold px-4 py-3 rounded-xl hover:bg-emerald-700 transition shadow-md">
                        Masuk Dashboard Organizer
                    </a>
                @endif

                <hr class="my-2">

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="w-full bg-white border-2 border-red-500 text-red-500 font-bold px-4 py-3 rounded-xl hover:bg-red-50 transition">
                        LOGOUT SEKARANG
                    </button>
                </form>
            </div>
        @else
            <div class="space-y-4">
                <a href="{{ route('login') }}" class="block w-full bg-blue-600 text-white font-bold px-6 py-3 rounded-xl hover:bg-blue-700 transition">
                    Login ke Akun
                </a>
                <a href="{{ route('register') }}" class="block w-full bg-white border-2 border-blue-600 text-blue-600 font-bold px-6 py-3 rounded-xl hover:bg-blue-50 transition">
                    Daftar Baru
                </a>
            </div>
        @endauth

        <p class="mt-8 text-xs text-gray-400">© 2026 Maranatha Christian University - PWL</p>
    </div>
</body>
</html>