<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="message"></div>
        <div class="row-mt-5">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3>Welcome to Admin page</h3>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('add/user') }}" class="btn btn-primary">Add User</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
