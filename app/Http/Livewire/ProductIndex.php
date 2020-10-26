<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;

class ProductIndex extends Component
{

    public $nama, $harga, $stok, $sdeskripsi, $deskripsi, $foto, $ids;
    public $search;
    use WithFileUploads;
    use WithPagination;

    protected $listeners = [
        'ProductStored' => 'handleStored'
    ];

    public function render()
    {
        // $products = Product::latest()->paginate(50);
        // return view('livewire.product-index')->with([
        //     'products' => $products
        // ]);
        return view('livewire.product-index', [
            'products' => $this->search === null ?
                Product::latest()->paginate(50) :
                Product::latest()->where('nama', 'like', '%' . $this->search . '%')->paginate(50)
        ]);
    }

    public function resetInput()
    {
        $this->nama = null;
        $this->harga = null;
        $this->stok = null;
        $this->sdeskripsi = null;
        $this->deskripsi = null;
    }

    public function store()
    {
        $this->validate([
            'nama' => 'required|max:255',
            'harga' => 'required|numeric',
            'stok' => 'required|numeric',
            'sdeskripsi' => 'required|max:255',
            'deskripsi' => 'required',
            'foto' => 'image',
        ]);

        $filename = $this->foto->store(
            'assets/poster',
            'public'
        );

        $product = Product::create([
            'nama' => $this->nama,
            'harga' => $this->harga,
            'stok' => $this->stok,
            'sdeskripsi' => $this->sdeskripsi,
            'deskripsi' => $this->deskripsi,
            'foto' => $filename
        ]);

        session()->flash('message', 'Barang berhasil di tambah');
        $this->emit('ProductStored');
        $this->resetInput();
    }

    public function edit($id)
    {
        $product = Product::where('id', $id)->first();
        $this->ids = $product->id;
        $this->nama = $product->nama;
        $this->harga = $product->harga;
        $this->stok = $product->stok;
        $this->sdeskripsi = $product->sdeskripsi;
        $this->deskripsi = $product->deskripsi;
        $this->foto = $product->foto;
    }

    public function update()
    {
        $this->validate([
            'nama' => 'required|max:255',
            'harga' => 'required|numeric',
            'stok' => 'required|numeric',
            'sdeskripsi' => 'required|max:255',
            'deskripsi' => 'required',
            'foto' => 'image',
        ]);

        $filename = $this->foto->update(
            'assets/poster',
            'public'
        );

        if ($this->ids) {
            $product = Product::find($this->ids);
            $product->update([
                'nama' => $this->nama,
                'harga' => $this->harga,
                'stok' => $this->stok,
                'sdeskripsi' => $this->sdeskripsi,
                'deskripsi' => $this->deskripsi,
                'foto' => $filename
            ]);
            session()->flash('message', 'Barang berhasil diubah');
            $this->emit('Productupdate');
            $this->resetInput();
        }
    }

    public function destroy($id)
    {
        if ($id) {
            Product::where('id', $id)->deletes();
            session()->flash('message', 'Barang berhasil dihapus');
        }
    }

    public function handleStored()
    {
        // session()->flash('message', 'Berhasil Ditambah');
    }
}
