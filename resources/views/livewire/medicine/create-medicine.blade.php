<div>

    {{-- MESSAGE SETELAH TAMBAH DATA --}}
    @if (session()->has('message'))


    <p class="text-md font-bold">{{ session('message') }}</p>

    @endif
    {{-- TUTUP --}}

    <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="nama_obat">
                Nama Obat {{ $nama_obat }}
            </label>
            <input wire:model="nama_obat" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nama_obat" type="text" required>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="stok">
                Stok
            </label>
            <input wire:model="stok" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="stok" type="text" required>
        </div>


        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="satuan_obat">
                Satuan Obat
            </label>

            <select wire:model="satuan_obat" id="satuan_obat" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                <option value="-"> </option>
                @foreach ($unit as $data)
                <option value="{!! $data->kode_satuan !!}">({!! $data->kode_satuan !!}), {!! $data->nama_satuan !!}
                </option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="jenis_barang">
                Jenis Barang
            </label>
            <select wire:model="jenis_barang" id="jenis_barang" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                <option value="-"> </option>
                @foreach ($type as $item)
                <option value="{!! $item->kode_jenis !!}">({!! $item->kode_jenis !!}), {!! $item->nama_jenis !!}
                </option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="harga_beli">
                Harga Beli
            </label>
            <input wire:model="harga_beli" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="harga_beli" type="text">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="harga_jual">
                Harga Jual
            </label>
            <input wire:model="harga_jual" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="harga_jual" type="text">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="tgl_kadaluarsa">
                Tanggal Kadaluarsa
            </label>
            <input wire:model="tgl_kadaluarsa" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="tgl_kadaluarsa" type="date">
        </div>

        <div class="mb-4">
            <button wire:click="CreateMedicine" class="bg-blue-500 rounded-lg font-bold text-white text-center px-4 py-3 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                Simpan Data
                </a>
        </div>

    </div>
</div>