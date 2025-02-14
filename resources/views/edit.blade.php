
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="justify-content-center">
    <h1 class="text-center mt-5">Edit Berita</h1>
    <div style="padding: 50px">

        <form enctype="multipart/form-data" method="POST" action="{{route('update', ['id'=>$edit])}}">
          @csrf
          @method('PUT')
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Judul</label>
              <input type="text" name="judul" value="{{$edit->judul}}" class="form-control" >
           
            </div>
            <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" value="{{$edit->deskripsi}}" name="deskripsi"></textarea>
                <label for="floatingTextarea2">Deskripsi</label>
              </div>
           
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Foto</label>
                <input type="file" name="foto" value="{{$edit->foto}}" class="form-control" >
              </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
