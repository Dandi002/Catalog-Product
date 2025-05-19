

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
                  <a href="{{ route('kategori.create') }}" class="btn btn-outline-primary btn-sm"
                    >Tambah</a>
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>
                            No
                          </th>
                          <th>
                            Nama Kategori
                          </th>
                          <th>
                            Aksi
                          </th>
                      </thead>
                      <tbody> @php $no = 1; @endphp
                            @foreach ($kategori as $data)
                       <tr>
                                <td scope="row">{{ $no++ }}</td>
                                <td scope="row">{{ $data->nama_kategori }}</td>
                                <td>
                                    <form action="{{ route('kategori.destroy', $data->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('kategori.edit', $data->id) }}" class="btn btn-success btn-sm">Edit</a>
                                        <a href="{{ route('kategori.show', $data->id) }}" class="btn btn-warning btn-sm">Show</a>
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
