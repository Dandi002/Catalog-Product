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
                     <div class="card-body">
                         <form action="{{ route('Produks.store') }}" method="POST" enctype="multipart/form-data">
                             @csrf
                             <div class="form-group">
                                 <label>Merk</label>
                                 <select
                                     class="form-control @error('nama_kategori')
                        is-invalid
                        @enderror"
                                     name="id_merk">
                                     @error('nama_merk')
                                         <div class="invalid-feedback">
                                             {{ $message }}
                                         </div>
                                     @enderror"
                                     @foreach ($merk as $data)
                                         <option value="{{ $data->id }}">{{ $data->nama_merk }}</option>
                                     @endforeach
                                 </select>
                             </div>
                             <div class="form-group">
                                 <label>Kategori</label>
                                 <select
                                     class="form-control @error('nama_kategori')
                        is-invalid
                        @enderror"
                                     name="id_kategori">
                                     @error('nama_kategori')
                                         <div class="invalid-feedback">
                                             {{ $message }}
                                         </div>
                                     @enderror
                                     @foreach ($kategori as $data)
                                         <option value="{{ $data->id }}">{{ $data->nama_kategori }}</option>
                                     @endforeach
                                 </select>
                             </div>
                             <div class="form-group">
                                 <label>Nama Tas</label>
                                 <input type="text"
                                     class="form-control @error('nama_tas')
                        is-invalid
                        @enderror"
                                     name="nama_tas">
                                 @error('nama_tas')
                                     <div class="invalid-feedback">
                                         {{ $message }}
                                     </div>
                                 @enderror
                             </div>
                             <div class="form-group">
                                 <label>Foto</label>
                                 <input type="file"
                                     class="form-control @error('foto')
                        is-invalid
                        @enderror"
                                     name="foto">
                                 @error('foto')
                                     <div class="invalid-feedback">
                                         {{ $message }}
                                     </div>
                                 @enderror
                             </div>
                             <div class="form-group">
                                 <label>Deskripsi</label>
                                 <textarea name="deskripsi"
                                     class="form-control @error('deskripsi')
                        is-invalid
                        @enderror"
                                     name="deskripsi">
                        @error('deskripsi')
<div class="invalid-feedback">
                            {{ $message }}
                        </div>">
@enderror
</textarea>
                             </div>
                             <div class="form-group">
                                 <label>Harga</label>
                                 <input type="number"
                                     class="form-control @error('harga')
                        is-invalid
                        @enderror"
                                     name="harga">
                                 @error('harga')
                                     <div class="invalid-feedback">
                                         {{ $message }}
                                     </div>
                                 @enderror
                             </div>

                             <button type="submit" class="btn btn-primary">Simpan</button>
                         </form>
                     </div>
                 </div>
             </div>
             <!-- page-body-wrapper ends -->
         </div>
     @endsection
