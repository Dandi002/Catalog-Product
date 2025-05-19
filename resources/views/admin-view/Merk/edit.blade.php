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
                         <form class="forms-sample" action="{{ route('Merk.update', $Merk->id) }}" method="POST"
                             enctype="multipart/form-data">
                             @csrf
                             @method('PUT')
                             <div class="form-group">
                        <label for="">Tambah Merk</label>
                        <input name="nama_merk" type="text" class="form-control @error('nama_merk')
                        is-invalid
                        @enderror" id="" placeholder="Masukan Merk" value="{{$Merk->nama_merk}}">
                        @error('nama_merk')
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
     </div>
     </div>
     </div>
     <!-- main-panel ends -->
     </div>
     <!-- page-body-wrapper ends -->
     </div>
 @endsection
