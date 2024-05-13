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
        <div class="container">
            <div >
                <h5 class="d-flex justify-content-end">History & Physical Examination Form</h5>
                <h5 class="d-flex justify-content-end">LIFESTYLE and WELLNESS CENTER</h5>

            </div>
            <div class="p-1 mb-2 bg-secondary text-white">
                TO DMC LWC PATIENT: ENTER REQUIRED INFORMATION. CHECK (/) THE APPROPRIATE TICK BOX. MINOR PATIENT TO BE ASSISTED BY A PARENT OR GUARDIAN.
            </div>
            <form method="post" action="{{ url('addsypmtoms') }}">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="first_name">First Name</label>
                        <input type="text" class="form-control" name="first_name" placeholder="Enter first name">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="middle_name">Middle Name</label>
                        <input type="text" class="form-control" name="middle_name" placeholder="Enter middle name">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="last_name">Last Name</label>
                        <input type="text" class="form-control" name="last_name" placeholder="Enter last name">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-8">
                        <label for="job_title">Job Title</label>
                        <input type="text" class="form-control" name="job_title" placeholder="Enter job title">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="birth_date">Birth Date</label>
                        <input type="date" class="form-control" name="birth_date">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="gender">Gender</label>
                        <select class="form-control" name="gender">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>

                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="country">Country</label>
                        <input type="text" class="form-control" name="country" placeholder="Enter country">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="region">Region</label>
                        <input type="text" class="form-control" name="region" placeholder="Enter region">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="province">Province</label>
                        <input type="text" class="form-control" name="province" placeholder="Enter province">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="city">City</label>
                        <input type="text" class="form-control" name="city" placeholder="Enter city">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="zipcode">Zip Code</label>
                        <input type="text" class="form-control" name="zipcode" placeholder="Enter zip code">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="street">Street</label>
                        <input type="text" class="form-control" name="street" placeholder="Enter street">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="bldgsubd">Building/Subdivision</label>
                        <input type="text" class="form-control" name="bldgsubd" placeholder="Enter building/subdivision">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="account_type_id">Account Type ID</label>
                        <input type="text" class="form-control" name="account_type_id" placeholder="Enter account type ID">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="account_detail">Account Detail</label>
                        <input type="text" class="form-control" name="account_detail" placeholder="Enter account detail">
                    </div>
                </div>
                <div class="form-check mb-2">
                    <input class="form-check-input" type="radio" name="is_pre_employment" id="is_pre_employment1" value="1" checked>
                    <label class="form-check-label" for="is_pre_employment1">
                        Pre Employment
                    </label>
                </div>
                <div class="form-check mb-2">
                    <input class="form-check-input" type="radio" name="is_pre_employment" id="is_pre_employment2" value="2">
                    <label class="form-check-label" for="is_pre_employment2">
                        ANNUAL EXECUTIVE CHECK-UP
                    </label>
                </div>
                <div class="form-group mb-2">
                    <label for="job_title">Job Title</label>
                    <input type="text" class="form-control" name="job_title" placeholder="Enter job title">
                </div>

                <div class="form-group mb-2">

                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </form>
            {{-- <form>
             <button type="submit" class="btn btn-primary">Sign in</button>
            </form> --}}

        </div>
        <div class="mt-5">
            <h1>Patients</h1>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                Add New Patient
              </button>

              <div class="table-responsive-sm">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Middle Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Birth Date</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Job Title</th>
                            <th scope="col">Street</th>
                            <th scope="col">Building/Subdivision</th>
                            <th scope="col">Country</th>
                            <th scope="col">Region</th>
                            <th scope="col">Province</th>
                            <th scope="col">City</th>
                            <th scope="col">Barangay</th>
                            <th scope="col">Zip Code</th>
                            <th scope="col">Account Type ID</th>
                            <th scope="col">Account Detail</th>
                            <th scope="col">Pre Employment</th>
                            <th scope="col">Created By</th>
                            <th scope="col">Updated By</th>
                            <th scope="col">Deleted By</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @if (count($symptoms) > 0)
                            @foreach ($symptoms as $symptom)
                                <tr>
                                    <th>{{ $symptom->id }}</th>
                                    <th>{{ $symptom->name }}</th>
                                    <th>{{ $symptom->illness_group_id }}</th>
                                    <th>{{ $symptom->created_by }}</th>
                                    <th><a href="/edit/{{ $symptom->id }}" class="btn btn-primary">Edit</a>
                                        <a href="/delete/{{ $symptom->id }}" class="btn btn-danger">Delete</a>
                                    </th>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <th>No Data</th>
                            </tr>
                        @endif --}}
                    </tbody>
                </table>
              </div>

        </div>
        <!-- Modal -->
        {{-- <div class="modal fade" id="examx --}}
        <div class="modal fade bd-example-modal-xl" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Add Patient</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{ url('addsypmtoms') }}">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="first_name">First Name</label>
                                <input type="text" class="form-control" name="first_name" placeholder="Enter first name">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="middle_name">Middle Name</label>
                                <input type="text" class="form-control" name="middle_name" placeholder="Enter middle name">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="last_name">Last Name</label>
                                <input type="text" class="form-control" name="last_name" placeholder="Enter last name">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-8">
                                <label for="job_title">Job Title</label>
                                <input type="text" class="form-control" name="job_title" placeholder="Enter job title">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="birth_date">Birth Date</label>
                                <input type="date" class="form-control" name="birth_date">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="gender">Gender</label>
                                <select class="form-control" name="gender">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="country">Country</label>
                                <input type="text" class="form-control" name="country" placeholder="Enter country">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="region">Region</label>
                                <input type="text" class="form-control" name="region" placeholder="Enter region">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="province">Province</label>
                                <input type="text" class="form-control" name="province" placeholder="Enter province">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="city">City</label>
                                <input type="text" class="form-control" name="city" placeholder="Enter city">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="zipcode">Zip Code</label>
                                <input type="text" class="form-control" name="zipcode" placeholder="Enter zip code">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="street">Street</label>
                                <input type="text" class="form-control" name="street" placeholder="Enter street">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="bldgsubd">Building/Subdivision</label>
                                <input type="text" class="form-control" name="bldgsubd" placeholder="Enter building/subdivision">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="account_type_id">Account Type ID</label>
                                <input type="text" class="form-control" name="account_type_id" placeholder="Enter account type ID">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="account_detail">Account Detail</label>
                                <input type="text" class="form-control" name="account_detail" placeholder="Enter account detail">
                            </div>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="is_pre_employment" id="is_pre_employment1" value="1" checked>
                            <label class="form-check-label" for="is_pre_employment1">
                                Pre Employment
                            </label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="is_pre_employment" id="is_pre_employment2" value="2">
                            <label class="form-check-label" for="is_pre_employment2">
                                ANNUAL EXECUTIVE CHECK-UP
                            </label>
                        </div>
                        <div class="form-group mb-2">
                            <label for="job_title">Job Title</label>
                            <input type="text" class="form-control" name="job_title" placeholder="Enter job title">
                        </div>

                        <div class="form-group mb-2">

                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </form>
                    {{-- <form>
                     <button type="submit" class="btn btn-primary">Sign in</button>
                    </form> --}}

                </div>
                <div class="modal-footer">
                </div>
            </div>
            </div>
        </div>
    </body>
</html>
