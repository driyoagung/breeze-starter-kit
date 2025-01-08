<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mahasiswa = Mahasiswa::paginate(3);
        return view("mahasiswa.index", compact("mahasiswa"));

    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("mahasiswa.create");

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            "nama" => "required",
            "nim" => "required|numeric",
            "alamat" => "required",
            "foto" => "required|image|mimes:jpeg,png,jpg,gif,svg|max:2048",
            "jurusan" => "required",
        ]);
        $foto = $request->file("foto");
        $foto->storeAs("public", $foto->hashName());
        Mahasiswa::create([
            "nama" => $data["nama"],
            "nim" => $data["nim"],
            "jurusan" => $data["jurusan"],
            "alamat" => $data["alamat"],
            "foto" => $foto->hashName(),
        ]);
        return redirect()->route("mahasiswa.index")->with("success", "Mahasiswa berhasil didaftarkan");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mahasiswa $mhs)
    {
        return view("mahasiswa.edit", compact("mhs"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mahasiswa $mhs)
    {
        $data = $request->validate([
            "nama" => "required",
            "nim" => "required|numeric",
            "alamat" => "required",
            "jurusan" => "required",
        ]);

        $mhs->nama = $data["nama"];
        $mhs->nim = $data["nim"];
        $mhs->alamat = $data["alamat"];
        $mhs->jurusan = $data["jurusan"];
        if ($request->file("foto")) {
            if ($mhs->foto !== "profile.png") {
                Storage::disk("local")->delete('public/' . $mhs->foto);
            }
            $foto = $request->file("foto");
            $foto->storeAs("public", $foto->hashName());
            $mhs->foto = $foto->hashName();
        }
        $mhs->update();
        return redirect()->route("mahasiswa.index")->with("success", "Mahasiswa berhasil diupdate");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mahasiswa $mhs)
    {
        if ($mhs->foto !== "profile.png") {
            Storage::disk("local")->delete('public/' . $mhs->foto);
        }
        $mhs->delete();
        return redirect()->route("mahasiswa.index")->with("success", "Mahasiswa berhasil dihapus");

    }
}
