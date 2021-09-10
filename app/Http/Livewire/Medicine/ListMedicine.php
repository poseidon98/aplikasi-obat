<?php

namespace App\Http\Livewire\Medicine;

use Illuminate\Http\Request;
use Livewire\Component;
use App\Models\Medicine;

class ListMedicine extends Component
{
    protected $listeners = [
        'MedicineCreated' => '$refresh',
    ];

    public function render()
    {

        return view('livewire.medicine.list-medicine', [
            // 'medicines' => Medicine::latest()->get()
            'medicines' => Medicine::join('types', 'types.kode_jenis', '=', 'medicines.jenis_barang')
                ->join('units', 'units.kode_satuan', '=', 'medicines.satuan_obat')
                ->select('medicines.*', 'units.kode_satuan', 'units.nama_satuan', 'types.kode_jenis', 'types.nama_jenis')
                ->get()
        ])->with('no', 1);
    }

    public function destroy($id)
    {
        Medicine::find($id)->delete();
        return back();
    }

    public function edit($id)
    {
        //menampilkan detail data dengan menemukan/berdasarkan id user
        $Medicine = Medicine::find($id);
        return view('livewire/medicine.edit-medicine', compact('Medicine'));
    }


    public function update(Request $request, $id)
    {

        date_default_timezone_set("Asia/Jakarta");

        Medicine::where('id', $id)->update(array(
            'nama_obat' => $request->nama_obat,
            'stok' => $request->stok,
            'satuan_obat' => $request->satuan_obat,
            'jenis_barang' => $request->jenis_barang,
            'harga_beli' => $request->harga_beli,
            'harga_jual' => $request->harga_jual,
            'tgl_kadaluarsa' => $request->tgl_kadaluarsa,
        ));
        return redirect("/medicine");
    }
}
