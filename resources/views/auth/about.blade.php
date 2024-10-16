<x-layout>
<!doctype html>
  <html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Data Mahasiswa</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    </head>
    <body class="">
      
        @if (Session::has('success'))
        <div class="pt-3">

            <div class="alert alert-success">
                {{ Session::get('success') }}


            </div>
        </div>
            
    @endif 
          
          <!-- START DATA -->
          <div class="my-3 p-3 bg-body rounded shadow-sm">
                  <!-- FORM PENCARIAN -->
                  <div class="pb-3">
                    <form class="d-flex" action="" method="get">
                        <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
                        <button class="btn btn-secondary" type="submit">Cari</button>
                    </form>
                  </div>
                  
                  <!-- TOMBOL TAMBAH DATA -->
                  <div class="pb-3">
                    <a href="/create" class="btn btn-primary">+ Tambah Data</a>
                  </div>
            
                  <table class="table table-striped">
                      <thead>
                          <tr>
                              <th class="col-md-1">No</th>
                              <th class="col-md-3">NIM</th>
                              <th class="col-md-4">Nama</th>
                              <th class="col-md-2">Jurusan</th>
                              <th class="col-md-2">Aksi</th>
                          </tr>
                      </thead>
                      <tbody>
                        <?php $i = $data3->firstItem() ?>
                        @foreach ($data3 as $item)
                        
                        <tr>
                          <td>{{ $i }}</td>
                          <td>{{ $item->nim }}</td>
                          <td>{{ $item->nama }} </td>
                          <td>{{ $item->jurusan }}</td>
                          <td>
                              <a href='{{ url('mahasiswa/'.$item->nim.'/edit') }}' class="btn btn-warning btn-sm">Edit</a>
                          <form onsubmit="return confirm('yakin akan di hapus data')"class='d-inline'action="{{ url('mahasiswa/'.$item->nim) }}" method="post">
                            @csrf
                            @method('DELETE')
                          <button type="submit" name="submit" class="btn btn-danger btn-sm">del

                          </button>
                          
                          </form>
                          </td>
                      </tr>
                            <?php $i++ ?>
                            
                        @endforeach                           
                        
                      </tbody>
                  </table>

                  {{ $data3->links() }}
                 
            </div>
            <!-- AKHIR DATA -->
          </x-layout>