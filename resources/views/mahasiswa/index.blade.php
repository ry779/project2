<!doctype html>
  <html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Data Mahasiswa</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    </head>
    <body class="bg-light">
     
          
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
                        @foreach ($data2 as $item)
                        
                        <tr>
                          <td>1</td>
                          <td>{{ $item->nim }}</td>
                          <td>{{ $item->nama }} </td>
                          <td>{{ $item->jurusan }}</td>
                          <td>
                              <a href='' class="btn btn-warning btn-sm">Edit</a>
                              <a href='' class="btn btn-danger btn-sm">Del</a>
                          </td>
                      </tr>
                            
                            
                        @endforeach                          
                          
                      </tbody>
                  </table>
                 
            </div>
            <!-- AKHIR DATA -->
      
