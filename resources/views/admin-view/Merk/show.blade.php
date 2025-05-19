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
                                <label for="">Merk</label>
                                <input type="text" class="form-control" name="nama_merk"
                                    value="{{ $Merk->nama_merk }}" disabled>
                            </div>
                            <a href="{{ route('kategori.index') }}" class="btn btn-primary"> Kembali</a>
                        </form>
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
