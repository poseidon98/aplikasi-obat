<?php

namespace App\Http\Livewire\Payment;

use Livewire\Component;
use App\Models\Payment;
use App\Models\Medicine;

class CreatePayment extends Component
{
    public $nama_pasien, $nama_obat, $stok, $satuan_obat, $jenis_barang, $total_harga, $harga_jual, $tgl_kadaluarsa;

    public $obat_id = 11;


    public function render()
    {
        $medis = Medicine::latest()->get();
        $harga = Medicine::where('id', $this->obat_id)->first();
        // dd($harga);
        return view('livewire.payment.create-payment', [
            'harga' => $harga,
            'medicine' => $medis,
        ]);
    }

    public function CreatePayment()
    {
        Payment::create([
            'kode_pembelian' => 'OBT12121',
            'nama_pasien' => $this->nama_pasien,
            'nama_obat' => $this->nama_obat,
            'qty' => $this->stok,
            'harga_satuan' => $this->harga_jual,
            'total_harga' => $this->total_harga,
            'user' => 'admin RSDH',
        ]);
        session()->flash('message', 'Data Transaksi Berhasil Di Tambah');
        $this->nama_obat = "";
        $this->qty = "";
        $this->harga_satuan = "";
        $this->total_harga = "";

        $this->emit("PaymentCreated");
    }
}
