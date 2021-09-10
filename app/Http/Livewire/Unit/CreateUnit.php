<?php

namespace App\Http\Livewire\Unit;

use Livewire\Component;
use App\Models\Unit;

class CreateUnit extends Component
{
    public $kode_satuan, $nama_satuan;

    public function render()
    {
        return view('livewire.unit.create-unit');
    }

    public function CreateUnit()
    {
        Unit::create([
            'kode_satuan' => $this->kode_satuan,
            'nama_satuan' => $this->nama_satuan,

        ]);
        session()->flash('message', 'Data Supplier Berhasil Di Tambah');
        $this->kode_satuan = "";
        $this->nama_satuan = "";

        $this->emit("UnitCreated");
    }
}
