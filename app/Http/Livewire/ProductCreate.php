<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithFileUploads;

class ProductCreate extends Component
{
    // public $nama, $harga, $stok, $sdeskripsi, $deskripsi, $foto;
    // use WithFileUploads;

    // public function render()
    // {
    //     return view('livewire.product-create');
    // }

    // public function store()
    // {
    //     $this->validate([
    //         'nama' => 'required|max:255',
    //         'harga' => 'required|numeric',
    //         'stok' => 'required|numeric',
    //         'sdeskripsi' => 'required|max:255',
    //         'deskripsi' => 'required',
    //         'foto' => 'required|image',
    //     ]);

    //     $filename = $this->foto->store(
    //         'assets/poster',
    //         'public'
    //     );

    //     $product = Product::create([
    //         'nama' => $this->nama,
    //         'harga' => $this->harga,
    //         'stok' => $this->stok,
    //         'sdeskripsi' => $this->sdeskripsi,
    //         'deskripsi' => $this->deskripsi,
    //         'foto' => $filename
    //     ]);

    //     $this->emit('ProductStored', $product);
    //     $this->resetInput();
    // }

    // private function resetInput()
    // {
    //     $this->nama = null;
    //     $this->harga = null;
    //     $this->stok = null;
    //     $this->sdeskripsi = null;
    //     $this->deskripsi = null;
    //     $this->foto = null;
    // }
}
