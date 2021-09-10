<?php

namespace App\Http\Livewire\Payment;

use Illuminate\Http\Request;
use Livewire\Component;
use App\Models\Payment;

class ListPayment extends Component
{
    protected $listeners = [
        'PaymentCreated' => '$refresh',
    ];

    public function render()
    {
        return view('livewire.payment.list-payment', [
            'payments' => Payment::latest()->get()
        ])->with('no', 1);
    }

    public function destroy($id)
    {
        Payment::find($id)->delete();
        return back();
    }

    public function edit($id)
    {
        //menampilkan detail data dengan menemukan/berdasarkan id user
        $Payment = Payment::find($id);
        return view('livewire/payment.edit-payment', compact('Payment'));
    }


    public function update(Request $request, $id)
    {

        date_default_timezone_set("Asia/Jakarta");

        Payment::where('id', $id)->update(array(
            'nama_obat' => $request->nama_obat,
            'stok' => $request->stok,
            'satuan_obat' => $request->satuan_obat,
            'jenis_barang' => $request->jenis_barang,
            'harga_beli' => $request->harga_beli,
            'harga_jual' => $request->harga_jual,
            'tgl_kadaluarsa' => $request->tgl_kadaluarsa,
        ));
        return redirect("/payment");
    }
}
