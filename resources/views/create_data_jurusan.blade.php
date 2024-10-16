<x-layout>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data jurusan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  
</head>
  <body class="bg-light">
    @if ($errors->any())
    <div class="pt-3">
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $item)
                <li>{{ $item }}</li>
                    
                @endforeach
            </ul>
        </div>

    </div>
        
    @endif
 

    <main class="container">

        @if (Session::has('success'))
        <div class="pt-3">

            <div class="alert alert-success">
                {{ Session::get('success') }}


            </div>
        </div>
            
        @endif


        
 <!-- START FORM -->
 

 <form action='{{ url('jurusan') }}' method='post'>
@csrf
        <div class="my-3 p-3 bg-body rounded shadow-sm">
        <a href='{{ url('about')}}' class="btn btn-secondary">kembali</a>
        <div class="mb-3 row">
            <label for="id" class="col-sm-2 col-form-label">id</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name='id' value="{{ Session::get('id') }}" id="id">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='nama' value="{{ Session::get('nama') }}"id="nama">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="prodi" class="col-sm-2 col-form-label" >prodi</label>
            <div class="col-sm-10" class="dropdown-options" >
               
              <input type="text" class="form-control"  name='prodi' value="{{ Session::get('prodi') }}" id="prodi">
            </div>
            
        </div>
        <div class="mb-3 row">
            <label for="prodi" class="col-sm-2 col-form-label" ></label>
            <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit" a>SIMPAN</button></div>
        </div>
   
    </div>
</form>

    <!-- AKHIR FORM -->
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>
</x-layout>