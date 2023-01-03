<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                    @if(Session::has('error'))
                        <span class="alert alert-danger">{{Session::get('error')}}</span>
                    @endif    
                        <h3>Add User Form</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('adduser') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Username</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter username..."/>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email..."/>
                        </div>

                        <input type="hidden" class="form-control" id="password" name="password" />
                        

                        <div class="mb-3">
                            <label for="profile_image" class="form-label">ProfileImage</label>
                            <input type="file" class="form-control" id="profile_image" name="profile_image" />
                            @error('profile_image')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <button class="btn btn-primary" type="submit">Add User</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>