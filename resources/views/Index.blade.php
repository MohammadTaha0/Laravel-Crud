<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Bootstra 5 CSS CDN  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Crud App</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 col justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="col-5 m-auto my-5">
        <form action="{{ url('/home') }}" method="POST" class="form">
            @csrf
            <div class="row">
                <div class="col-12 my-3">
                    <h3>Insert Data Form</h3>
                </div>
                <div class="col-12 mb-3">
                    <input type="text" class="form-control" name="FirstName" placeholder="Please Enter First Name">
                </div>
                <div class="col-12 mb-3">
                    <input type="text" class="form-control" name="LastName" placeholder="Please Enter Last Name">
                </div>
                <div class="col-12 mb-3">
                    <button type="submit" class="btn btn-primary px-5" name="btn">Insert</button>
                </div>
            </div>
        </form>
    </div>


    @if(session('status'))
    <div class="col-5 m-auto">
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            {{ session('status') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
    @endif


    <div class="col-5 m-auto">
        <table class="table table-bordered align-middle text-center table-striped">
            <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Actions</th>
            </tr>
            @foreach($query as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->fname }}</td>
                <td>{{ $item->lname }}</td>
                <td> <a href="{{'update/'.$item->id}}" class="btn btn-success btn-sm">Update</a> | <a href="{{'del/'.$item->id}}" class="btn btn-danger btn-sm">Delete</a></td>
            </tr>
            @endforeach

        </table>


    </div>


</body>
<!-- Bootstrap 5 JS CDN -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>