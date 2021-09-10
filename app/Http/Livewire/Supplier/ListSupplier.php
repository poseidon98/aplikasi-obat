<?php

namespace App\Http\Livewire\Supplier;

use Illuminate\Http\Request;
use Livewire\Component;
use App\Models\Supplier;

class ListSupplier extends Component
{
    protected $listeners = [
        'SupplierCreated' => '$refresh',
    ];

    public function render()
    {
        return view('livewire.supplier.list-supplier', [
            'suppliers' => Supplier::latest()->get()
        ])->with('no', 1);
    }

    public function destroy($id)
    {
        Supplier::find($id)->delete();
        return back();
    }

    public function edit($id)
    {
        //menampilkan detail data dengan menemukan/berdasarkan id user
        $Supplier = Supplier::find($id);
        return view('livewire/supplier.edit-supplier', compact('Supplier'));
    }


    public function update(Request $request, $id)
    {
        $disease = new Supplier();
        date_default_timezone_set("Asia/Jakarta");

        Supplier::where('id', $id)->update(array(
            'nama_supplier' => $request->nama,
            'telp_supplier' => $request->telp,
            'kota_supplier' => $request->kota,
            'alamat_supplier' => $request->alamat,
        ));
        return redirect("/");
    }
}
