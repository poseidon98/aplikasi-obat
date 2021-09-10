<div>

  {{-- MESSAGE SETELAH TAMBAH DATA --}}
  @if (session()->has('message'))


  <p class="text-md font-bold">{{ session('message') }}</p>

  @endif
  {{-- TUTUP --}}

  <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
        Nama Supplier {{ $nama }}
      </label>
      <input wire:model="nama" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text">
    </div>

    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
        No.Telp
      </label>
      <input wire:model="telp" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text">
    </div>


    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
        Kota
      </label>
      <input wire:model="kota" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text">
    </div>

    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
        Alamat
      </label>
      <textarea wire:model="alamat" class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none" rows="4"></textarea>
    </div>

    <div class="mb-4">
      <button wire:click="CreateSupplier" class="bg-blue-500 rounded-lg font-bold text-white text-center px-4 py-3 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
        Simpan Data
        </a>
    </div>

  </div>
</div>