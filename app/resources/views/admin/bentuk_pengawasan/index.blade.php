@extends('layouts.admin')

@section('content')
  <div class="container-fluid">
    <div class="page-title">
      <div class="row">
        <div class="col-12 col-sm-6">
          <h3>Bentuk Pengawasan</h3>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header py-3">
            <a href="{{ route('admin.division.create') }}" class="btn btn-primary btn-sm">Tambah Divisi</a>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col">
                <table class="table table-bordered table-hover dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th style="width: 3%;">#</th>
                      <th>Nama</th>
                      <th>Deskripsi</th>
                      <th class="text-right no-sort" style="width: 3%;">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                        <td class="align-middle">{{ 1 }}</td>
                        <td class="align-middle">{{ "Perbankan" }}</td>
                        <td class="align-middle">{{ "Menyediakan kebutuhan sehari-hari anggota, sembilan bahan pokok dan perlengkapan dinas anggota dengan kwalitas terjamin dan harga bersaing." }}</td>
                        <td class="text-center">
                            <div class="dropdown">
                            <button class="btn btn-sm btn-primary" data-bs-toggle="dropdown" aria-expanded="false">
                                Detail
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <a class="dropdown-item" href="#"><i class="fas fa-edit"></i> Edit</a>
                                <a class="dropdown-item" href="javascript:void(0)" class="btn btn-danger btn-sm delete m-1" onclick="" data-bs-toggle="modal" data-bs-target="#delete-modal"><i class="fas fa-trash"></i> Delete</a>
                            </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="align-middle">{{ 2 }}</td>
                        <td class="align-middle">{{ "Perbankan" }}</td>
                        <td class="align-middle">{{ "Menyediakan kebutuhan sehari-hari anggota, sembilan bahan pokok dan perlengkapan dinas anggota dengan kwalitas terjamin dan harga bersaing." }}</td>
                        <td class="text-center">
                            <div class="dropdown">
                            <button class="btn btn-sm btn-primary" data-bs-toggle="dropdown" aria-expanded="false">
                                Detail
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <a class="dropdown-item" href="#"><i class="fas fa-edit"></i> Edit</a>
                                <a class="dropdown-item" href="javascript:void(0)" class="btn btn-danger btn-sm delete m-1" onclick="" data-bs-toggle="modal" data-bs-target="#delete-modal"><i class="fas fa-trash"></i> Delete</a>
                            </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="align-middle">{{ 3 }}</td>
                        <td class="align-middle">{{ "Perbankan" }}</td>
                        <td class="align-middle">{{ "Menyediakan kebutuhan sehari-hari anggota, sembilan bahan pokok dan perlengkapan dinas anggota dengan kwalitas terjamin dan harga bersaing." }}</td>
                        <td class="text-center">
                            <div class="dropdown">
                            <button class="btn btn-sm btn-primary" data-bs-toggle="dropdown" aria-expanded="false">
                                Detail
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <a class="dropdown-item" href="#"><i class="fas fa-edit"></i> Edit</a>
                                <a class="dropdown-item" href="javascript:void(0)" class="btn btn-danger btn-sm delete m-1" onclick="" data-bs-toggle="modal" data-bs-target="#delete-modal"><i class="fas fa-trash"></i> Delete</a>
                            </ul>
                            </div>
                        </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

    <!-- Delete Modal -->
    <form method="POST" id="delete-form">
      @csrf
      @method('DELETE')
      <div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Yakin Ingin Dihapus?</h5>
              <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-danger">Data Yang Sudah Dihapus Tidak Bisa Dikembalikan Lagi!</div>
            <div class="modal-footer">
              <button class="btn btn-primary" type="submit">Hapus</button>
            </div>
          </div>
        </div>
      </div>
    </form>
@endsection

@section('js')
  <script>
    const url = 'division';

    function handleDelete(id) {
      $('#delete-form').attr('action', `{{ url('${url}/${id}') }}`);
    }
  </script>
@endsection