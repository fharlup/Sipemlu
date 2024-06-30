@extends('layouts.admin')

@section('css')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css" integrity="sha512-EZSUkJWTjzDlspOoPSpUFR0o0Xy7jdzW//6qhUkoZ9c4StFkVsp9fbbd0O06p9ELS3H486m4wmrCELjza4JEog==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('content')
  <div class="container-fluid">
    <div class="page-title">
      <div class="row">
        <div class="col-12 col-sm-6">
          <h3>Input Laporan</h3>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12">
        <form action="#" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <div class="mb-3">
                    <label>Konten</label>
                    <textarea class="form-control richtext" name="richtext" rows="8">{{ @$companyProfile['about'] }}</textarea>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <button class="btn btn-primary btn-sm float-end">SIMPAN</button>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection

@section('js')
@endsection