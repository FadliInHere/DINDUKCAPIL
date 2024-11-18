<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-2xl font-bold text-gray-800">Detail Pengajuan KTP</h2>
                        <div class="space-x-2">
                            <a href="{{ route('admin.pengajuan.index') }}" 
                                class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                                Kembali
                            </a>
                            <a href="{{ route('admin.pengajuan.edit', $data->id) }}" 
                                class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">
                                Edit
                            </a>
                        </div>
                    </div>

                    <div class="bg-gray-50 rounded-lg p-6 grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <h3 class="text-sm font-medium text-gray-500">Status Pengajuan</h3>
                            <p class="mt-1 text-lg text-gray-900">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full 
                                    {{ $data->status_pengajuan === 'Selesai' ? 'bg-green-100 text-green-800' : 
                                       ($data->status_pengajuan === 'Ditolak' ? 'bg-red-100 text-red-800' : 
                                       'bg-yellow-100 text-yellow-800') }}">
                                    {{ $data->status_pengajuan ?? 'Pending' }}
                                </span>
                            </p>
                        </div>

                        <div>
                            <h3 class="text-sm font-medium text-gray-500">Nama Lengkap</h3>
                            <p class="mt-1 text-lg text-gray-900">{{ $data->nama }}</p>
                        </div>

                        <div>
                            <h3 class="text-sm font-medium text-gray-500">Tempat Lahir</h3>
                            <p class="mt-1 text-lg text-gray-900">{{ $data->tempat_lahir }}</p>
                        </div>

                        <div>
                            <h3 class="text-sm font-medium text-gray-500">Tanggal Lahir</h3>
                            <p class="mt-1 text-lg text-gray-900">{{ \Carbon\Carbon::parse($data->tanggal_kehilangan)->locale('id')->isoFormat('D MMMM Y') }}</p>
                        </div>

                        <div>
                            <h3 class="text-sm font-medium text-gray-500">Jenis Kelamin</h3>
                            <p class="mt-1 text-lg text-gray-900">{{ $data->jenis_kelamin }}</p>
                        </div>

                        <div>
                            <h3 class="text-sm font-medium text-gray-500">Agama</h3>
                            <p class="mt-1 text-lg text-gray-900">{{ $data->agama }}</p>
                        </div>

                        <div>
                            <h3 class="text-sm font-medium text-gray-500">Pekerjaan</h3>
                            <p class="mt-1 text-lg text-gray-900">{{ $data->pekerjaan }}</p>
                        </div>

                        <div>
                            <h3 class="text-sm font-medium text-gray-500">Kewarganegaraan</h3>
                            <p class="mt-1 text-lg text-gray-900">{{ $data->kewarganegaraan }}</p>
                        </div>

                        <div>
                            <h3 class="text-sm font-medium text-gray-500">Status Perkawinan</h3>
                            <p class="mt-1 text-lg text-gray-900">{{ $data->status_perkawinan }}</p>
                        </div>

                        <div class="col-span-2">
                            <h3 class="text-sm font-medium text-gray-500">Alamat</h3>
                            <p class="mt-1 text-lg text-gray-900">{{ $data->alamat }}</p>
                        </div>

                        @if($data->keterangan)
                            <div class="col-span-2">
                                <h3 class="text-sm font-medium text-gray-500">Keterangan</h3>
                                <p class="mt-1 text-lg text-gray-900">{{ $data->keterangan }}</p>
                            </div>
                        @endif

                        @if($data->status_pengajuan !== 'Selesai' && $data->status_pengajuan !== 'Ditolak')
                            <div class="col-span-2 flex space-x-4">
                                <form action="{{ route('admin.pengajuan.complete', $data->id) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                                        Setujui Pengajuan
                                    </button>
                                </form>
                                
                                <form action="{{ route('admin.pengajuan.reject', $data->id) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                        Tolak Pengajuan
                                    </button>
                                </form>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>