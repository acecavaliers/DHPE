<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Phone Book App</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
        </script>
    </head>
    <body>
        <div>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                  <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="/crud">Accounts</a>
                    <a class="nav-item nav-link" href="#">Illness</a>
                    <a class="nav-item nav-link" href="#">DDDDD</a>
                  </div>
                </div>
              </nav>
        </div>
        <div class="container mt-5">

            <form method="post" action="{{url('addd')}}">
                @csrf
                <div class="form-group mb-2">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter name">
                </div>
                <div class="form-group mb-2">
                    <label for="exampleInputPassword1">Created_by</label>
                    <input type="text" class="form-control" name="created_by" placeholder="created_by">
                </div>
                {{-- <div class="form-group mb-2">
                    <label for="exampleInputPassword1">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Name">
                </div> --}}
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <table class="table mt-5 table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">created_by</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($account) > 0)
                        @foreach ($account as $acct)
                            <tr>
                                <th>{{ $acct->id }}</th>
                                <th>{{ $acct->name }}</th>
                                <th>{{ $acct->created_by }}</th>
                                <th><a href="/edit/{{ $acct->id }}" class="btn btn-primary">Edit</a>
                                    <a href="/delete/{{ $acct->id }}" class="btn btn-danger">Delete</a>
                                </th>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <th>No Data</th>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </body>
</html>
