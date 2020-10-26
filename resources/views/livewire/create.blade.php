<div>
    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Barang</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form enctype="multipart/form-data">

                        @csrf
                        <div class="form-group">
                            <label for="nama" class="">Nama Barang</label>
                            <input wire:model="nama" type="text" class="form-control" id="nama" name="nama">
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga Barang</label>
                            <input wire:model="harga" type="number" class="form-control" id="harga" name="harga">
                        </div>
                        <div class="form-group">
                            <label for="stok">Stok Barang</label>
                            <input wire:model="stok" type="number" class="form-control" id="stok" name="stok">
                        </div>
                        <div class="form-group">
                            <label for="sdeskripsi">Deskripsi Singkat</label>
                            <input wire:model="sdeskripsi" type="test" class="form-control" id="sdeskripsi" name="sdeskripsi">
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi Singkat</label>
                            <textarea wire:model="deskripsi" class="form-control" id="deskripsi" name="deskripsi"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Foto</label>
                            <input type="file" wire:model="foto" accept="image/*" name="foto">
                        </div>



                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" wire:click.prevent="store()">Tambah</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>