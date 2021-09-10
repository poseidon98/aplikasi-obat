<?php

namespace App\Http\Livewire\Supplier;

use Livewire\Component;
use App\Models\Supplier;

class CreateSupplier extends Component
{
    public $nama, $telp, $alamat, $kota;

    public function render()
    {
        return view('livewire.supplier.create-supplier');
    }

    public function CreateSupplier() {
        Supplier::create([
            'kode_supplier' => 'KD12121',
            'nama_supplier' => $this->nama,
            'telp_supplier' => $this->telp,
            'kota_supplier' => $this->kota,
            'alamat_supplier' => $this->alamat,
            
        ]);
        session()->flash('message', 'Data Supplier Berhasil Di Tambah');
        $this->nama = "";
        $this->telp = "";
        $this->kota = "";
        $this->alamat = "";

        $this->emit("SupplierCreated");
        
    }
}
