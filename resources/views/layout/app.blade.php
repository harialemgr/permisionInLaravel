<html>
    <head>
    <title></title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


{{-- Bootstrap jquery --}}
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>
    <body>
        <nav>

        </nav>
        <div class="container" style="margin-top:60px">
            <div class="row">
                <div class="col-sm-12">
                    {{-- <form action="" method="POST">
                        <div class="form-group">
                            <label for=""name>Name</label>
                            <input type="text" name="name" class="form-control" value=""><br>
                         </div>
                        <div class="form-group">
                            <label for="age">Enter Age</label>
                            <input type="number" class="form-control" name="age">
                        </div>
                        <div class="form-group" style="text-align:center">
                        <input type="submit" name="submit" class="btn btn-info" value="Add Me">
                         </div>
            </form> --}}
                {!! Form::open(['method'=>'GET','route'=>['datastore']]) !!}
                  @csrf
                  @method('POST')
            
                Name:        {!!  Form::text('name','Ram')!!}
                Age:     {!!  Form::number('age',15) !!}
                {!! Form::submit('click me!') !!}
                {!! Form::close() !!}  
                </div>
            </div>
        </div>
    </body>
</html>