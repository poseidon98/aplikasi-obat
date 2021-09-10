<?php

namespace App\Http\Livewire\Type;

use Livewire\Component;
use App\Models\Type;

class CreateType extends Component
{

    public $kode_jenis, $nama_jenis, $ket;

    public function render()
    {
        return view('livewire.type.create-type');
    }

    public function CreateType()
    {
        Type::create([
            'kode_jenis' => $this->kode_jenis,
            'nama_jenis' => $this->nama_jenis,
            'keterangan' => $this->ket,

        ]);
        session()->flash('message', 'Data Supplier Berhasil Di Tambah');
        $this->kode_jenis = "";
        $this->nama_jenis = "";
        $this->ket = "";

        $this->emit("TypeCreated");
    }
}
