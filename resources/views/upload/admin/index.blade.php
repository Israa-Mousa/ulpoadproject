<!DOCTYPE html>
<html lang="en">
<head>



    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">




</head>
<body>
    <div class="container">
    <div class="row justify-content-center">

        <div class="col-md-8">
            <h5>Upload files</h5>


    </div>
    </div>
    <?php
    // dd($files)
    // var_dump($allfile);
    ?>
   <div class="row justify-content-center">
       <div class="col-md-2">
           <a href="{{route('upload')}}"><i class="fa fa-arrow-circle-left"  style="font-size:24px"></i></a>


       </div>
    <div class="col-md-8">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <!-- {{-- <th scope="col">file</th> --}} -->
            <th scope="col">file path</th>
            <th>title</th>
            {{-- <th>Delete</th> --}}
          </tr>
        </thead>

        <tbody>
            @foreach ($files as $file)
            <tr>
            <td scope="col">{{$file->id}}</td>
            <td scope="col">{{$file->file}}</td>

            <td scope="col">{{$file->title}}</td>

            </tr>
            @endforeach
        </tbody>
      </table>
    </div>
   </div>
</div>
</body>
</html>
