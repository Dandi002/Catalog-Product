 @extends('layouts.admin')
 @section('content')
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->

      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <!-- partial -->
   <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body" >
                <form class="forms-sample" action="{{ route('kategori.update', $kategori->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                   <div class="form-group">
                        <label for="">Edit Kategori</label>
                        <input name="nama_kategori" type="text" class="form-control @error('nama_kategori')
                        is-invalid
                        @enderror" id="" value="{{$kategori->nama_kategori}}">
                        @error('nama_kategori')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                </form>
            </div>
        </div>
    </div>
    <!-- page-body-wrapper ends -->
  </div>
 @endsection
