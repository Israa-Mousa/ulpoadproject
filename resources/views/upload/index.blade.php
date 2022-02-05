<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
        <title>Document</title>
    </head>
    <body class="" style="background-image: linear-gradient(90deg, black, gray);">
        <div class="class container">
            <div class="class row">
                <div class="class col-md-10" style="color: white;">
                    <h1>File Upload Online</h1>
                </div>
            </div>
            @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error )
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif @if(Session()->has('success'))
            <div class="alert alert-success">
                {{ Session()->get('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
            <div class="class row mt-100">
                <div class="card" style="width: 18rem; margin-top: 100px;">
                    <div class="card-body">
                        <div class="" style="display: flex; justify-content: space-around;">
                            <i class="fa fa-plus-circle" id="add" style="font-size: 48px; color: #007bff;"></i>

                            <div>
                                <h5 class="card-title">uploads file</h5>
                                <label style="color: gray; text-decoration: underline;" id="addlabel"> or select folder</label>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <form action="{{route('create')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="class form-group">
                                <input type="file" id="file" name="file" style="display: none;" />

                                <input class="form-control" name="title" type="text" placeholder="title" />
                            </div>
                            <div class="class form-group">
                                <textarea class="form-control" name="message" placeholder="message"></textarea>
                            </div>
                            <input type="radio" name="send" id="" /> send email transfer

                            <div>
                                <div class="class form-group">
                                    <div style="display: flex; justify-content: space-between; margin-top: 13px;">
                                        <svg viewBox="0 0 24 24" width="30">
                                            <path
                                                fill="#409fff"
                                                d="M12,24 C5.372583,24 0,18.627417 0,12 C0,5.372583 5.372583,0 12,0 C18.627417,0 24,5.372583 24,12 C24,18.627417 18.627417,24 12,24 Z M12,22 C17.5228475,22 22,17.5228475 22,12 C22,6.4771525 17.5228475,2 12,2 C6.4771525,2 2,6.4771525 2,12 C2,17.5228475 6.4771525,22 12,22 Z M16.5,13.5 C17.3284271,13.5 18,12.8284271 18,12 C18,11.1715729 17.3284271,10.5 16.5,10.5 C15.6715729,10.5 15,11.1715729 15,12 C15,12.8284271 15.6715729,13.5 16.5,13.5 Z M12,13.5 C12.8284271,13.5 13.5,12.8284271 13.5,12 C13.5,11.1715729 12.8284271,10.5 12,10.5 C11.1715729,10.5 10.5,11.1715729 10.5,12 C10.5,12.8284271 11.1715729,13.5 12,13.5 Z M7.5,13.5 C8.32842712,13.5 9,12.8284271 9,12 C9,11.1715729 8.32842712,10.5 7.5,10.5 C6.67157288,10.5 6,11.1715729 6,12 C6,12.8284271 6.67157288,13.5 7.5,13.5 Z"
                                            ></path>
                                        </svg>
                                        <button type="submit" class="btn btn-primary" style="color: #fff; background-color: gray; border-color: gray; width: 60%; border-radius: 23px;">Get Link</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script>
            //click on image triger of image chosen
            // console.log('jsadajdn')
            document.getElementById("add").addEventListener("click", function (e) {
                document.getElementById("file").click();
            });
            document.getElementById("addlabel").addEventListener("click", function (e) {
                document.getElementById("file").click();
            });

            window.setTimeout(function () {
                $(".alert").alert("close");
            }, 5000);
        </script>
    </body>
</html>
