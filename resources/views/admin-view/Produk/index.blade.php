

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
     <div class="col-lg-12 grid-margin stretch-card">
         <div class="content-wrapper">
              <div class="card">
                <div class="card-body">
                  <a href="{{ route('Produks.create') }}" class="btn btn-outline-primary btn-sm"
                    >Tambah</a>
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>
                            No
                          </th>
                          <th>
                            Nama Merk
                          </th>
                          <th>
                            Nama Kategori
                          </th>
                          <th>
                            Foto
                          </th>
                          <th>
                            Nama Tas
                          </th>
                          <th>
                            Deskripsi
                          </th>
                          <th>
                            Harga
                          </th>
                          <th>
                            Aksi
                          </th>
                      </thead>
                      <tbody> @php $no = 1; @endphp
                            @foreach ($produk as $data)
                       <tr>
                                <td scope="row">{{ $no++ }}</td>
                                <td scope="row">{{ $data->merk->nama_merk }}</td>
                                <td scope="row">{{ $data->kategori->nama_kategori }}</td>
                                <td scope='row'><img src="{{ asset('Storage/foto/' . $data->foto)}}" style="width: 100px; height: 100px;" alt=""></td>
                                 <td scope='row'>{{ $data->nama_tas }}</td>
                                <td scope='row'>{{ $data->deskripsi }}</td>
                                <td scope='row'>{{ $data->harga }}</td>
                                <td>
                                    <form action="{{ route('Produks.destroy', $data->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('Produks.edit', $data->id) }}" class="btn btn-success btn-sm">Edit</a>
                                        <a href="{{ route('Produks.show', $data->id) }}" class="btn btn-warning btn-sm">Show</a>
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda Yakin?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach</tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            </div>
            </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
 @endsection
