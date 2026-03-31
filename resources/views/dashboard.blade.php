<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex items-center justify-between mb-8">
                        <div>
                            <h3 class="text-2xl font-bold text-gray-800">Selamat Datang, {{ Auth::user()->name }}!</h3>
                            <p class="text-gray-600">Status Akun: <span class="px-2 py-1 bg-green-100 text-green-800 text-xs rounded-full font-semibold">Administrator</span></p>
                        </div>
                        <div class="text-right">
                            <p class="text-sm text-gray-500">{{ now()->format('d F Y') }}</p>
                        </div>
                    </div>

                    <hr class="mb-8">

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                        <div class="bg-gradient-to-br from-blue-500 to-blue-600 p-6 rounded-xl shadow-lg text-white">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-sm opacity-80">Total Penjualan</p>
                                    <p class="text-3xl font-bold">0</p>
                                </div>
                                <div class="p-3 bg-white bg-opacity-20 rounded-lg">
                                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 1.343-3 3s1.343 3 3 3 3-1.343 3-3-1.343-3-3-3zM17 21H7a2 2 0 01-2-2V5a2 2 0 012-2h10a2 2 0 012 2v14a2 2 0 01-2 2z"></path></svg>
                                </div>
                            </div>
                        </div>

                        <div class="bg-gradient-to-br from-purple-500 to-purple-600 p-6 rounded-xl shadow-lg text-white">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-sm opacity-80">Event Aktif</p>
                                    <p class="text-3xl font-bold">0</p>
                                </div>
                                <div class="p-3 bg-white bg-opacity-20 rounded-lg">
                                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                </div>
                            </div>
                        </div>

                        <div class="bg-gradient-to-br from-orange-500 to-orange-600 p-6 rounded-xl shadow-lg text-white">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-sm opacity-80">Organizer Terdaftar</p>
                                    <p class="text-3xl font-bold">0</p>
                                </div>
                                <div class="p-3 bg-white bg-opacity-20 rounded-lg">
                                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-10">
                        <h4 class="text-lg font-semibold text-gray-800 mb-4">Navigasi Admin</h4>
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                            <a href="{{ route('events.index') }}" class="p-4 border border-gray-200 rounded-lg hover:bg-blue-50 transition text-center">
                                <p class="font-medium text-blue-600">Kelola Event</p>
                            </a>
                            <a href="#" class="p-4 border border-gray-200 rounded-lg hover:bg-green-50 transition text-center">
                                <p class="font-medium text-green-600">Laporan PDF</p>
                            </a>
                            <a href="#" class="p-4 border border-gray-200 rounded-lg hover:bg-purple-50 transition text-center">
                                <p class="font-medium text-purple-600">Data Transaksi</p>
                            </a>
                            <a href="#" class="p-4 border border-gray-200 rounded-lg hover:bg-orange-50 transition text-center">
                                <p class="font-medium text-orange-600">User Settings</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>