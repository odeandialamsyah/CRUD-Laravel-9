<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    public function index(){
        $item = Item::all();
        return view('Admin.dashboard', compact('item'));
    }

    public function create()
    {
        return view('Admin.propertiesTambah');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'unit' => 'required|integer',
            'price_range' => 'required|integer',
            'status' => 'required',
            'description' => 'required',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        
        $input = new Item();
        $input->name = $request->name;
        $input->address = $request->address;
        $input->unit = $request->unit; // Added jumlah_kamar
        $input->price_range = $request->price_range;
        $input->status = $request->status;
        $input->description = $request->description;

        if ($request->hasFile('photo')) {
            $gambar = $request->file('photo');
            $namaFile = time() . '.' . $gambar->getClientOriginalExtension();
            $gambar->move(public_path('photos'), $namaFile);
            $input->photo = $namaFile;
        }

        $input->save();

        return redirect()->route('admin.page')->with('success', 'Item added successfully.');
    }

    public function show()
    {
        //
    }

    public function edit($id)
    {
        $item = Item::findOrFail($id);
        return view('Admin.propertiesEdit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'unit' => 'required|string|max:255',
            'price_range' => 'required|string|max:255',
            'status' => 'required|string|max:255',
            'description' => 'required|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $item = Item::findOrFail($id);

        if ($request->hasFile('photo')) {
            Storage::disk('public')->delete($item->photo);
            $photoPath = $request->file('photo')->store('photos', 'public');
            $item->photo = $photoPath;
        }

        $item->update([
            'name' => $request->name,
            'address' => $request->address,
            'unit' => $request->unit,
            'price_range' => $request->price_range,
            'status' => $request->status,
            'description' => $request->description,
            'photo'=> $request->photo        
        ]);

        return redirect()->route('admin.page')->with('success', 'Item updated successfully.');
    }

    public function destroy($id)
    {
        $item = Item::findOrFail($id);
        if (Storage::disk('public')->exists($item->photo)) {
            Storage::disk('public')->delete($item->photo);
        }
        $item->delete();

        return redirect()->route('admin.page')->with('success', 'Item deleted successfully.');
    }
}
