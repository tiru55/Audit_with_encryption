<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
    <link rel="stylesheet" href="css/mdb.min.css" />
</head>
<body>
    <div class="container-fluid my-5">
        <div class="col-md-12">
            <div class="card rounded-lg shadow mt-n2">
                <div class="card-header">Data</div>
                <div class="card-body">
                    <div class="table-responsive">
                    <table class="table table-hover">
                        <thead class="">
                          <tr class="bg-success text-white">
                            <th scope="col">#</th>
                            <th scope="col">Emp_Id</th>
                            <th scope="col">Emp_Name</th>
                            <th scope="col">Emp_Email</th>
                            <th scope="col">Emp_Asset</th>
                            <th scope="col">EMP_File_Upload</th>
                            <th scope="col">Emp_OS</th>
                            <th scope="col">Emp_Browser</th>
                            <th scope="col">EMP_Ip</th>
                            <th scope="col">EMP_City</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ( $assets as $asset )
                          <tr>
                            <th scope="row">{{ $asset->id }}</th>
                            <td>{{ $asset->emp_id }}</td>
                            <td>{{ $asset->emp_name }}</td>
                            <td>{{ $asset->emp_email }}</td>
                            <td>{{ $asset->emp_asset_num }}</td>
                            <td>{{ $asset->emp_file_upload }}</td>
                            <td>{{ $asset->emp_os   }}</td>
                            <td>{{ $asset->emp_browser }}</td>
                            <td>{{ $asset->emp_ip_address }}</td>
                            <td>{{ $asset->emp_city }}</td>
                        </tr>
                          
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                </div>
                <div class="card-footer border-bottom border-secondary  d-flex justify-content-end">
                     {{ $assets->links('layouts.paginationlinks') }}
                </div>
            </div>
        </div>
    </div>
</body>
<script type="text/javascript " src="js/mdb.min.js "></script>
</html>