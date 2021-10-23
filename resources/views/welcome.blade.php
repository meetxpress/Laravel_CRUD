<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD Operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-12">
                @if (session('status'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('status') }}!!
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <div class="card">
                    <div class="card-header">
                        <h4 class="d-inline">Student Data</h4>
                        <button class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#AddDataModal">Add Student</button>

                        <!-- Modal Starts -->
                        <div class="modal fade" id="AddDataModal" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Insert Student Data</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form action="{{ route('students.store') }}" method="post">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="mb-2">
                                                <label for="fname" class="form-label mb-0">First Name</label>
                                                <input type="text" class="form-control" name="fname" placeholder="First Name">
                                            </div>
                                            <div class="mb-2">
                                                <label for="lname" class="form-label mb-0">Last Name</label>
                                                <input type="text" class="form-control" name="lname" placeholder="Last Name">
                                            </div>
                                            <div class="mb-2">
                                                <label for="addr" class="form-label mb-0">Address</label>
                                                <input type="text" class="form-control" name="addr" placeholder="Address">
                                            </div>
                                            <div class="mb-2">
                                                <label for="mno" class="form-label mb-0">Mobile Number</label>
                                                <input type="text" class="form-control" name="mno" placeholder="Mobile Number">
                                            </div>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Insert Record</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Modal Ends -->


                    </div>
                    <div class="card-body"></div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</html>
