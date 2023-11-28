{{-- Divisi Modal --}}
<div wire:ignore.self class="modal fade" id="divisiModal" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="divisiModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fw-bold" id="divisiModalLabel">
                    Tambah Foto</h5>
                <button type="button" wire:click="closeModal" class="close" data-dismiss="modal"
                    aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">

                {{-- Form starts --}}
                <form action="{{route('admin.story.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    {{-- Divisi Kode --}}
                    <div class="form-group mb-3">
                        <label for="description">Deskripsi <span class="text-danger">*</span></label>
                        <input type="text"  class="form-control" placeholder="Kode"
                            name="description" />
                        @error('description')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="file">File <span class="text-danger">*</span></label>
                        <input type="file"  class="form-control" placeholder="Kode"
                            name="file" />
                        @error('file')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="title">Title<span class="text-danger">*</span></label>
                        <input type="text"  class="form-control" placeholder="Kode"
                            name="title" />
                        @error('title')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    

                    <div class="text-end">
                        <button type="button" wire:click="closeModal" data-dismiss="modal"
                            class="btn btn-secondary">Tutup</button>

                        
                        
                            <button type="submit" class="btn btn-success">Simpan</button>
                        
                    </div>

                </form>
                {{-- Form ends --}}

            </div>
        </div>
    </div>
</div>
{{-- Modal ends --}}
