<div>
    @if (session()->has('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif

    @include('livewire.create')
    <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal" id="modal-product">
        Tambah Produk
    </button>

    <div class="col">
        <input wire:model="search" type="text" class="form-control form-control-sm w-auto" placeholder="search">
    </div>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Barang</th>
                <th scope="col">Harga Barang</th>
                <th scope="col">Stok</th>
                <th scope="col">Foto</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1 ?>
            @foreach($products as $product)
            <tr>
                <th scope="row">{{$i++}}</th>
                <td>{{$product->nama}}</td>
                <td>{{$product->harga}}</td>
                <td>{{$product->stok}}</td>
                <td><img width="50px" src="{{url($product->foto)}}" alt=""></td>
                <td>
                    <button class="btn btn-secondary btn-sm"><i class="fa fa-eye"></i></button>
                    <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal1" wire:click="edit({{$product->id}})"><i class="fa fa-pencil"></i></button>
                    <button class="btn btn-danger btn-sm" wire:click.prevent="destroy({{$product->id}}})"><i class="fa fa-trash"></i></button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <!-- {{$products->links()}} -->
</div>