<?php

namespace App\Http\Livewire\Type;

use Livewire\Component;
use App\Models\Type;

class ListType extends Component
{
    protected $listeners = [
        'TypeCreated' => '$refresh',
    ];

    public function render()
    {
        return view('livewire.type.list-type', [
            'types' => Type::latest()->get()
        ])->with('no', 1);
    }

    public function destroy($id)
    {
        Type::find($id)->delete();
        return back();
    }

    public function edit($id)
    {
        //menampilkan detail data dengan menemukan/berdasarkan id user
        $Type = Type::find($id);
        return view('livewire/type.edit-type', compact('Type'));
    }


    public function update(Request $request, $id)
    {


        Type::where('id', $id)->update(array(
            'nama_supplier' => $request->nama,
            'telp_supplier' => $request->telp,
            'kota_supplier' => $request->kota,
            'alamat_supplier' => $request->alamat,
        ));
        return redirect("/type");
    }
}
