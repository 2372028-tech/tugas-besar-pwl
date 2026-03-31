<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Daftar Event') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <div class="flex justify-between items-center mb-6">
                    <h3 class="text-lg font-bold text-gray-700">Manajemen Data Event</h3>
                    <a href="{{ route('events.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded-lg text-sm font-bold hover:bg-blue-600 transition">
                        + Tambah Event
                    </a>
                </div>

                <table class="w-full text-left border-collapse border border-gray-200">
                    <thead>
                        <tr class="bg-gray-50 text-gray-600 uppercase text-xs">
                            <th class="p-4 border-b">Nama Event</th>
                            <th class="p-4 border-b text-center">Lokasi</th>
                            <th class="p-4 border-b text-center">Deskripsi</th>
                            <th class="p-4 border-b text-center">Tanggal</th>
                            <th class="p-4 border-b text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700">
                        @forelse($events as $event)
                            <tr class="hover:bg-gray-50 transition">
                                <td class="p-4 border-b font-medium">{{ $event->name }}</td>
                                <td class="p-4 border-b text-center text-sm">
                                    {{ $event->Location ?? 'Lokasi tidak diatur' }}
                                </td>
                                <td class="p-4 border-b text-center text-gray-500 max-w-xs truncate">
                                    {{ $event->description ?? '-' }}
                                </td>
                                <td class="p-4 border-b text-center text-sm">
                                    {{ date('d M Y', strtotime($event->event_date)) }}
                                </td>
                                <td class="p-4 border-b">
                                    <div class="flex justify-center gap-2">
                                        <a href="{{ route('events.edit', $event->id) }}" 
                                           class="bg-blue-500 text-white px-4 py-2 rounded-lg text-sm font-bold hover:bg-blue-600 transition">
                                            Edit
                                        </a>

                                        <form action="{{ route('events.destroy', $event->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus event ini?')" class="m-0">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-lg text-sm font-bold hover:bg-blue-600 transition">
                                                Hapus
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="p-10 text-center text-gray-400 italic font-light border-b">
                                    Belum ada data event di database.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>