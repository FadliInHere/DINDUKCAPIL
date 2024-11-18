<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-2xl font-bold text-gray-800">Edit Pengajuan KTP</h2>
                        <a href="{{ route('admin.kehilangan.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                            Kembali
                        </a>
                    </div>

                    @if($errors->any())
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                            <ul class="list-disc list-inside">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('admin.kehilangan.update', $data->id) }}" method="POST" class="space-y-6">
                        @csrf
                        @method('PUT')

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="nama" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                                <input type="text" name="nama" id="nama" value="{{ old('nama', $data->nama) }}" 
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" required>
                            </div>
                            <div>
                                <label for="nik" class="block text-sm font-medium text-gray-700">Nik</label>
                                <input type="text" name="nik" id="nik" value="{{ old('nik', $data->nik) }}" 
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" required>
                            </div>

                            <div>
                                <label for="tempat_kehilangan" class="block text-sm font-medium text-gray-700">Tempat Kehilangan</label>
                                <input type="text" name="tempat_kehilangan" id="tempat_kehilangan" value="{{ old('tempat_kehilangan', $data->tempat_kehilangan) }}"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" required>
                            </div>

                            <div>
                                <label for="tanggal_kehilangan" class="block text-sm font-medium text-gray-700">Tanggal Kehilangan</label>
                                <input type="date" name="tanggal_kehilangan" id="tanggal_kehilangan" value="{{ old('tanggal_kehilangan', $data->tanggal_kehilangan) }}"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" required>
                            </div>

                            <div class="col-span-2">
                                <label for="alamat" class="block text-sm font-medium text-gray-700">Alamat</label>
                                <textarea name="alamat" id="alamat" rows="3" 
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" required>{{ old('alamat', $data->alamat) }}</textarea>
                            </div>

                            <div class="col-span-2">
                                <label for="keterangan" class="block text-sm font-medium text-gray-700">Keterangan</label>
                                <textarea name="keterangan" id="keterangan" rows="3"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">{{ old('keterangan', $data->keterangan) }}</textarea>
                            </div>
                        </div>

                        <div class="flex justify-end space-x-4">
                            <a href="{{ route('admin.kehilangan.index') }}" 
                                class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                                Batal
                            </a>
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                Update
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
