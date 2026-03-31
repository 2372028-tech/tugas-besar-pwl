<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Event Baru') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-2xl p-8 border border-gray-100">
                <h3 class="text-xl font-bold text-gray-800 mb-6 border-b pb-4">Informasi Detail Event</h3>
                
                <form action="{{ route('events.store') }}" method="POST" class="space-y-5">
                    @csrf
                    {{-- Di sini TIDAK pakai @method('PUT') --}}

                    <div>
                        <label class="block text-sm font-bold text-gray-700 mb-2">Nama Event</label>
                        <input type="text" name="name" placeholder="Contoh: Konser Jazz Bandung" 
                            class="w-full border-gray-300 rounded-xl shadow-sm focus:ring-blue-500 focus:border-blue-500 py-3" required>
                    </div>

                    <div>
                        <label class="block text-sm font-bold text-gray-700 mb-2">Lokasi</label>
                        <input type="text" name="Location" placeholder="Contoh: Gedung Sabuga" 
                            class="w-full border-gray-300 rounded-xl shadow-sm focus:ring-blue-500 focus:border-blue-500 py-3" required>
                    </div>

                    <div>
                        <label class="block text-sm font-bold text-gray-700 mb-2">Deskripsi</label>
                        <textarea name="description" rows="4" 
                            class="w-full border-gray-300 rounded-xl shadow-sm focus:ring-blue-500 focus:border-blue-500 py-3" 
                            placeholder="Tuliskan detail acara di sini..."></textarea>
                    </div>

                    <div>
                        <label class="block text-sm font-bold text-gray-700 mb-2">Tanggal Pelaksanaan</label>
                        <input type="date" name="event_date" 
                            class="w-full border-gray-300 rounded-xl shadow-sm focus:ring-blue-500 focus:border-blue-500 py-3" required>
                    </div>

                    <div class="flex justify-end gap-3 pt-6 border-t">
                        <a href="{{ route('events.index') }}" class="bg-red-500 text-white px-4 py-2 rounded-lg text-sm font-bold hover:bg-blue-600 transition">
                            Batal
                        </a>
                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg text-sm font-bold hover:bg-blue-600 transition">
                            Simpan Event
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>