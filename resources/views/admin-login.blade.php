<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        @if(Session::has('error'))
            <span class="alert alert-danger">{{ Session::get('error')}}</span>
        @endif
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-center">Admin Login</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('admin/login') }}" method="post">
                            @csrf
                            <div class="form-control">
                                <label for="email">Email Id</label>
                                <input type="email" name="email" id="email" class="form-group"/>
                            </div>

                            <div class="form-control">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" class="form-group" />
                            </div>
                            <div>
                                <button type="submit" class="btn btn-success">Login</button>
                            </div>
                        
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
