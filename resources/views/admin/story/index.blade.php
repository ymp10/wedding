@extends('layouts.admin')
<!-- Content Wrapper. Contains page content -->
@section('content')
    
<div class="content-wrapper">
    @include('admin.story.create')
    @include('admin.story.delete')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>photo</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active">photo</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#divisiModal">
                                Tambah
                            </button>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="" class="table table-bordered table-hover mb-2">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Description</th>
                                        <th>File</th>
                                        <th>Title</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($stories as $story)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $story->description }}</td>
                                            <td> <img src="{{asset('/storage/photo/' . $story->file)}}" alt="" height="100px" width="100px"> </td>
                                            <td>{{ $story->title }}</td>
                                            <td>
                                                <button type="button" wire:click="editDivisi({{ $story->id }})"
                                                    class="btn btn-sm btn-warning" data-toggle="modal"
                                                    data-target="#divisiModal">Edit</button>
                                                <button class="btn btn-sm btn-danger"
                                                    wire:click="deleteDivisi({{ $story->id }})"
                                                    data-toggle="modal" data-target="#deleteDivisiModal">Hapus</button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $stories->links('vendor.pagination.bootstrap-4') }}
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    <script>
        window.addEventListener('close-modal', event => {
            $('#divisiModal').modal('hide');
            $('#deleteDivisiModal').modal('hide');
        });
    </script>
</div>
<!-- /.content-wrapper -->
@endsection