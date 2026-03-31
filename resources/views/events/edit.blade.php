<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Event:') }} <span class="text-blue-600">{{ $event->name }}</span>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-2xl p-8 border border-gray-100">
                <h3 class="text-xl font-bold text-gray-800 mb-6 border-b pb-4">Update Informasi Event</h3>
                
                <form action="{{ route('events.update', $event->id) }}" method="POST" class="space-y-5">
                    @csrf
                    @method('PUT') {{-- WAJIB untuk Update --}}

                    <div>
                        <label class="block text-sm font-bold text-gray-700 mb-2">Nama Event</label>
                        <input type="text" name="name" value="{{ $event->name }}" 
                            class="w-full border-gray-300 rounded-xl shadow-sm focus:ring-blue-500 focus:border-blue-500 py-3" required>
                    </div>

                    <div>
                        <label class="block text-sm font-bold text-gray-700 mb-2">Lokasi</label>
                        <input type="text" name="Location" value="{{ $event->Location }}" 
                            class="w-full border-gray-300 rounded-xl shadow-sm focus:ring-blue-500 focus:border-blue-500 py-3" required>
                    </div>

                    <div>
                        <label class="block text-sm font-bold text-gray-700 mb-2">Deskripsi</label>
                        <textarea name="description" rows="4" 
                            class="w-full border-gray-300 rounded-xl shadow-sm focus:ring-blue-500 focus:border-blue-500 py-3">{{ $event->description }}</textarea>
                    </div>

                    <div>
                        <label class="block text-sm font-bold text-gray-700 mb-2">Tanggal Pelaksanaan</label>
                        {{-- Memastikan format tanggal terbaca oleh input HTML --}}
                        <input type="date" name="event_date" value="{{ \Carbon\Carbon::parse($event->event_date)->format('Y-m-d') }}" 
                            class="w-full border-gray-300 rounded-xl shadow-sm focus:ring-blue-500 focus:border-blue-500 py-3" required>
                    </div>

                    <div class="flex justify-end gap-3 pt-6 border-t">
                        <a href="{{ route('events.index') }}" class="bg-red-500 text-white px-4 py-2 rounded-lg text-sm font-bold hover:bg-blue-600 transition">
                            Batal
                        </a>
                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg text-sm font-bold hover:bg-blue-600 transition">
                            Update Event
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>