<div>

    {{-- MESSAGE SETELAH TAMBAH DATA --}}
    @if (session()->has('message'))


        <p class="text-md font-bold">{{ session('message') }}</p>

    @endif
    {{-- TUTUP --}}

    <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="kode_jenis">
                Kode Jenis Obat
            </label>
            <input wire:model="kode_jenis"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="nama_obat" type="text">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="nama_satuan">
                Nama Jenis Obat
            </label>
            <input wire:model="nama_jenis"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="stok" type="text">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="ket">
                Keterangan
            </label>
            <input wire:model="ket"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="stok" type="text">
        </div>

        <div class="mb-4">
            <button wire:click="CreateType"
                class="bg-blue-500 rounded-lg font-bold text-white text-center px-4 py-3 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                Simpan Data
                </a>
        </div>

    </div>
</div>
