
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assets</title>
    <!-- Shortcut icon -->
    <link rel="shortcut icon" href="img/laptop.png" type="image/x-icon">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />

    <link rel="stylesheet" href="css/mdb.min.css" />
    <link rel="stylesheet" href="css/audit.css">

    <style>

    </style>
</head>

<body>
<form method="POST" action="save" enctype="multipart/form-data">
    @csrf
  
    <div class="container-fluid my-4">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8 col-lg-8">
                <img src="img/5127314-removebg.png" alt="img" class="bg-img rounded" style="width: 100%;height: 100%;">
            </div>
            <div class="col-md-4 col-lg-4">
                <div class="card shadow">
                    <div class="card-header custom-gradient-color text-white text-center fw-bold">
                        <i class="fas fa-user-edit me-2"></i> Employee Details
                    </div>
                    <div class="card-body">
                        <div class="form-outline mb-3">
                            <input type="number" id="empid" name="emp_id" class="form-control" tabindex="1" required="" />
                            <label class="form-label" for="empid">Employee ID</label>
                        </div>
                        <div class="form-outline mb-3">
                            <input type="text" id="name" name="emp_name" class="form-control" tabindex="2" required="" />
                            <label class="form-label" for="name">Name</label>
                        </div>
                        <div class="form-outline mb-3">
                            <input type="email" id="email" name="emp_email" class="form-control" tabindex="3" required="" />
                            <label class="form-label" for="email"> Email</label>
                        </div>

                        <div class="form-outline mb-3">
                            <input type="text" id="asset_no" name="emp_asset_num" class="form-control" tabindex="4" />
                            <label class="form-label" for="asset_no">Asset Number</label>
                        </div>
                        <div class="form-outline mb-3">
                            <textarea id="comments" name="emp_comments" class="form-control" tabindex="5" rows="2" cols="6" ></textarea>
                            <label class="form-label" for="comments">Comments</label>
                        </div>
                        <div class="form-outline mb-3">
                            <p class="note note-secondary">

                                <a href="">Know more about Asset Tag..?</p>
                        </div>
                        <div class="form-outline mb-3">
                            <label for="formFileMultiple" class="form-label">Upload</label>
                            <input class="form-control border" type="file" id="formFileMultiple" name="Image" multiple tabindex="6" />
                            @if (session('errors'))
                            @foreach ($errors as $error)
                            <small class="text-danger">
                                {{$error}}
                            </small>
                            @endforeach
                                
                            @endif
                        </div>
            
                    </div>
                    <div class="card-footer">
                        <div class="d-grid gap-2">
                            <button class="btn btn-success" type="submit">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</form>
@include('sweetalert::alert')

</body>
<!-- MDB -->
<script type="text/javascript " src="js/mdb.min.js "></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<!-- Custom scripts -->
<script type="text/javascript ">

</script>

</html>