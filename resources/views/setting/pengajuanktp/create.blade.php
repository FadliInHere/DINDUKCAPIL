<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2 class="text-2xl font-bold text-gray-800 mb-6">Tambah Pengajuan KTP</h2>

                    <form action="{{ route('admin.pengajuan.store') }}" method="POST" class="space-y-6">
                        @csrf

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="nama" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                                <input type="text" name="nama" id="nama" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" required>
                            </div>

                            <div>
                                <label for="tempat_lahir" class="block text-sm font-medium text-gray-700">Tempat Lahir</label>
                                <input type="text" name="tempat_lahir" id="tempat_lahir" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" required>
                            </div>

                            <div>
                                <label for="tanggal_lahir" class="block text-sm font-medium text-gray-700">Tanggal Lahir</label>
                                <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" required>
                            </div>

                            <div>
                                <label for="jenis_kelamin" class="block text-sm font-medium text-gray-700">Jenis Kelamin</label>
                                <select name="jenis_kelamin" id="jenis_kelamin" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" required>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>

                            <div>
                                <label for="agama" class="block text-sm font-medium text-gray-700">Agama</label>
                                <input type="text" name="agama" id="agama" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" required>
                            </div>

                            <div>
                                <label for="pekerjaan" class="block text-sm font-medium text-gray-700">Pekerjaan</label>
                                <input type="text" name="pekerjaan" id="pekerjaan" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" required>
                            </div>

                            <div>
                                <label for="kewarganegaraan" class="block text-sm font-medium text-gray-700">Kewarganegaraan</label>
                                <input type="text" name="kewarganegaraan" id="kewarganegaraan" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" required>
                            </div>

                            <div>
                                <label for="status_perkawinan" class="block text-sm font-medium text-gray-700">Status Perkawinan</label>
                                <select name="status_perkawinan" id="status_perkawinan" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" required>
                                    <option value="Belum Kawin">Belum Kawin</option>
                                    <option value="Kawin">Kawin</option>
                                    <option value="Cerai Hidup">Cerai Hidup</option>
                                    <option value="Cerai Mati">Cerai Mati</option>
                                </select>
                            </div>

                            <div class="col-span-2">
                                <label for="alamat" class="block text-sm font-medium text-gray-700">Alamat</label>
                                <textarea name="alamat" id="alamat" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" required></textarea>
                            </div>

                            <div class="col-span-2">
                                <label for="keterangan" class="block text-sm font-medium text-gray-700">Keterangan</label>
                                <textarea name="keterangan" id="keterangan" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"></textarea>
                            </div>
                        </div>

                        <div class="flex justify-end space-x-4">
                            <a href="{{ route('admin.pengajuan.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Batal</a>
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>