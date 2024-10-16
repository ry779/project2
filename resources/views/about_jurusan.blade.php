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
          
          
              <!-- START DATA -->
              <div class="my-3 p-3 bg-body rounded shadow-sm">
                      <!-- FORM PENCARIAN -->
                      <div class="pb-3">
                        <form class="d-flex" action="{{ url ('about_jurusan') }}" method="get">
                            <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
                            <button class="btn btn-secondary" type="submit">Cari</button>
                        </form>
                      </div>
                      
                      <!-- TOMBOL TAMBAH DATA -->
                      <div class="pb-3">
                        <a href="/create_data_jurusan" class="btn btn-primary">+ Tambah Data</a>
                      </div>
                
                      <table class="table table-striped">
                          <thead>
                              <tr>
                                  <th class="col-md-1">No</th>
                                  <th class="col-md-3">nama</th>
                                  <th class="col-md-4">prodi</th>
                                  <th class="col-md-2">Aksi</th>
                              </tr>
                          </thead>
                          <tbody>
                            <?php $i = $data4->firstItem() ?>
                            @foreach ($data4 as $item)
                            
                            <tr>
                              <td>{{ $i }}</td>
                              <td>{{ $item->nama }} </td>
                              <td>{{ $item->prodi}} </td>
                             
                              
                          </tr>
               
                          <?php $i++ ?>
                            @endforeach                           
                            
                          </tbody>
                      </table>
    
                      {{ $data4->withQueryString()->links() }}
                     
                </div>
                <!-- AKHIR DATA -->
          
              </x-layout>  