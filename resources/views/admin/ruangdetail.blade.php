@extends('layouts.admin')

@section('title', 'Ruang Detail')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card rounded-4 p-1">
                    <div class="card-body">
                        <button type="button" class="btn btn-success mb-3" data-bs-toggle="modal"
                            data-bs-target="#modaltambah">
                            Tambah Ruang
                        </button>

                        <table class="table table-responsive table-striped table-hover" id="tables">
                            <thead>
                                <th scope="col">Id</th>
                                <th scope="col">Foto</th>
                                <th scope="col">Nama Ruang</th>
                                <th scope="col">Lantai</th>
                                <th scope="col">Kapasitas</th>
                                <th scope="col">Deskripsi</th>
                                <th scope="col">Status</th>
                                <th scope="col">Aksi</th>
                            </thead>
                            <tbody>
                                @foreach ($ruang as $ruang)
                                    <tr>
                                        <td>{{ $ruang->id }}</td>
                                        <td>{{ $ruang->foto }}</td>
                                        <td>{{ $ruang->nama_ruang }}</td>
                                        <td>{{ $ruang->lantai }}</td>
                                        <td>{{ $ruang->kapasitas }}</td>
                                        <td>{{ $ruang->deskripsi }}</td>
                                        <td>{{ $ruang->status }}</td>
                                        <td>
                                            <a href="" class="btn btn-warning"><i class="bx bx-edit"></i> Edit</a>
                                            <a href="/ruangdetail/{{ $ruang->id }}/destroy" class="btn btn-danger"><i
                                                    class="bx bx-trash"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <!-- Modal -->
    <div class="modal fade" id="modaltambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                @csrf
                <div class="modal-body">
                    <form action="" method="POST" name="frm_tmbh">
                        <div class="mb-3">
                            <input class="form-control" type="file" id="formFile" name="foto">
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" name="nama_ruang"
                                placeholder="Nama Ruang">
                            <label for="floatingInput">Nama Ruang</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" name="kapasitas"
                                placeholder="Kapasitas">
                            <label for="floatingInput">Kapasitas</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" name="deskripsi"
                                placeholder="deskripsi">
                            <label for="floatingInput">Deskripsi</label>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <div class="form-floating mb-3">
                                    <select class="form-select @error('lantai') is-invalid @enderror"
                                        id="floatingSelectGrid" name="lantai">
                                        <option selected>Pilih Lantai</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                    </select>
                                    <label for="floatingSelectGrid">Lantai</label>
                                </div>

                            </div>
                            <div class="col">
                                <div class="form-floating mb-3">
                                    <select class="form-select  @error('status') is-invalid @enderror" name="status"
                                        id=" floatingSelectGrid">
                                        <option selected>Pilih Status</option>
                                        <option value="tersedia">Tersedia</option>
                                        <option value="tidak_tersedia">Tidak tersedia</option>
                                    </select>
                                    <label for="floatingSelectGrid">Status Ruangan</label>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger">Simpan</button>
                </div>
            </div>
        </div>


    @endsection
