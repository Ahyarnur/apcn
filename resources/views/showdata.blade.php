<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center">Hello, world!</h1>
    <div class="px-5 mt-5">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Judul</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Foto</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($show as $item)
                    
              <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->judul}}</td>
                <td>{{$item->deskripsi}}</td>
                <td><img src="{{ url('/storage/' . $item->foto) }}" style="height: 40px; width: 40px;" alt=""></td>
                <td><a href="{{route('edit',$item->id)}}" type="button" class="btn btn-success">Edit</a>
                    <a href="{{route('delete',$item->id)}}" type="button" class="btn btn-danger">Hapus</a>
                </td>
              </tr>
              @endforeach
             
            </tbody>
          </table>
    </div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
