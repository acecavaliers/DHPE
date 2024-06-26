<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Phone Book App</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    </head>
    <body>
        <div>
            @include('navbar')

        </div>
        <div class="container mt-5">
            <h1>Symptoms</h1>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                Add New Symptoms
              </button>


            <table class="table mt-5 table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">illness_group_id</th>
                        <th scope="col">created_by</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($illnesses) > 0)
                        @foreach ($illnesses as $illness)
                            <tr>
                                <th>{{ $illness->id }}</th>
                                <th>{{ $illness->name }}</th>
                                <th>{{ $illness->illness_group_id }}</th>
                                <th>{{ $illness->created_by }}</th>
                                <th><a href="/edit/{{ $illness->id }}" class="btn btn-primary">Edit</a>
                                    <a href="/delete/{{ $illness->id }}" class="btn btn-danger">Delete</a>
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
        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Add Illness</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{url('addsypmtoms')}}">
                        @csrf

                        <div class="form-group mb-2">
                            <label for="exampleInputEmail1">Illness Group</label>
                            <select class="custom-select" name="illness_group_id">
                                <option selected disabled>Choose . . .</option>
                                @if (count($illnessesGroup) > 0)
                                    @foreach ($illnessesGroup as $illnessGrp)
                                        <option value="{{$illnessGrp->id}}">{{$illnessGrp->name}}</option>
                                    @endforeach
                                @else
                                    <option selected disabled>No illnessesGroup available</option>
                                @endif
                              </select>
                        </div>
                        <div class="form-group mb-2">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter name">
                        </div>
                        <div class="form-group mb-2">
                            <label for="exampleInputPassword1">Created_by</label>
                            <input type="text" class="form-control" name="created_by" placeholder="created_by">
                        </div>
                        <div  class="form-group mb-5">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="is_active" value="1">
                                <label class="form-check-label" for="inlineCheckbox1">Active</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </form>
                </div>
                <div class="modal-footer">
                {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button> --}}
                </div>
            </div>
            </div>
        </div>
    </body>
</html>
