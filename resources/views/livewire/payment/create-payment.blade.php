<div>

    {{-- MESSAGE SETELAH TAMBAH DATA --}}
    @if (session()->has('message'))


    <p class="text-md font-bold">{{ session('message') }}</p>

    @endif
    {{-- TUTUP --}}



    <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                Nama Pasien
            </label>
            <input wire:model="nama_pasien" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                Pembayaran
            </label>
            <select name="" id="">
                <option value=""></option>
                <option value="BPJS">BPJS</option>
                <option value="Non-BPJS">Non-BPJS</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                Nama Obat
            </label>
            <select wire:model="nama_obat" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="">
                <option value=""></option>
                @foreach($medicine as $data)
                <option value="{{$data->id}}">{{$data->id}}, {{$data->nama_obat}}</option>
                @endforeach
            </select>
            <!-- <input wire:model="nama_obat" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text"> -->
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                Jumlah Obat
            </label>
            <input wire:model="stok" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text">
        </div>


        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                harga satuan {{$harga->harga_jual}}
            </label>
            <input wire:model="harga_jual" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{$harga->harga_jual}}" id="username" type="text">
            <input type="text" value="{{$harga->harga_jual}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                Total Harga
            </label>
            <input wire:model="total_harga" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text">
        </div>

        <div class="mb-4">
            <button wire:click="CreatePayment" class="bg-blue-500 rounded-lg font-bold text-white text-center px-4 py-3 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                Simpan Data
                </a>
        </div>

    </div>
</div>