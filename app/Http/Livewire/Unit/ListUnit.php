<?php

namespace App\Http\Livewire\Unit;

use Livewire\Component;
use App\Models\Unit;

class ListUnit extends Component
{
    protected $listeners = [
        'UnitCreated' => '$refresh',
    ];

    public function render()
    {
        return view('livewire.unit.list-unit', [
            'units' => Unit::latest()->get()
        ])->with('no', 1);
    }

    public function destroy($id)
    {
        Unit::find($id)->delete();
        return back();
    }

    public function edit($id)
    {
        //menampilkan detail data dengan menemukan/berdasarkan id user
        $Unit = Unit::find($id);
        return view('livewire/unit.edit-unit', compact('Unit'));
    }


    public function update(Request $request, $id)
    {
        Unit::where('id', $id)->update(array(
            'nama_supplier' => $request->nama,
            'telp_supplier' => $request->telp,
        ));
        return redirect("/type");
    }
}
