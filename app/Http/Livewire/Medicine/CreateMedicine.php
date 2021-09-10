<?php

namespace App\Http\Livewire\Medicine;

use Livewire\Component;
use App\Models\Medicine;
use App\Models\Type;
use App\Models\Unit;

class CreateMedicine extends Component
{
    public $nama_obat, $stok, $satuan_obat = "pil", $jenis_barang = "obat_luar", $harga_beli, $harga_jual, $tgl_kadaluarsa;


    public function render()
    {
        return view('livewire.medicine.create-medicine', [
            'unit' => Unit::latest()->get(),
            'type' => Type::latest()->get(),
        ]);
    }

    public function CreateMedicine()
    {

        Medicine::create([
            'kode_obat' => 'OBT12121',
            'nama_obat' => $this->nama_obat,
            'stok' => $this->stok,
            'satuan_obat' => $this->satuan_obat,
            'jenis_barang' => $this->jenis_barang,
            'harga_beli' => $this->harga_beli,
            'harga_jual' => $this->harga_jual,
            'tgl_kadaluarsa' => $this->tgl_kadaluarsa,
            'user' => 'admin RSDH',
        ]);
        session()->flash('message', 'Data Obat Berhasil Di Tambah');
        $this->nama_obat = "";
        $this->stok = "";
        $this->satuan_obat = "";
        $this->jenis_barang = "";
        $this->harga_beli = "";
        $this->harga_jual = "";
        $this->tgl_kadaluarsa = "";

        $this->emit("MedicineCreated");
    }
}
