<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <script src="{{asset('bootstrap/jQuery.js')}}"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <style>
        #wrap {
            min-height: 100%;
        }

        .fixed-bottom {
            position: fixed;
            right: 15px;
            bottom: 0;
            left: 15px;
            z-index: 1030;
        }
    </style>
</head>
<body id="wrap">
<div>
    <div class="row ml-0 mr-0 p-0">
        <div class="col-md-12">
            <div class="jumbotron">
                <h2 class="text-center">ORM Relationship</h2>
            </div>
        </div>
    </div>
    <div class="row ml-0 mr-0 p-0" style="margin-top: -40px;">
        <div class="col-md-12">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{url('/ont-to-one')}}">Home <span class="sr-only">(current)</span></a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                One TO One
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{url('/ont-to-one/create')}}">Add User </a>
                                <a class="dropdown-item" href="{{url('/ont-to-one')}}">Manage User</a>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                One TO Many
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{url('/ont-to-many/category/create')}}">Add Category </a>
                                <a class="dropdown-item" href="{{url('/ont-to-many/category')}}">Manage Category</a><hr/>
                                <a class="dropdown-item" href="{{url('/ont-to-many/product/create')}}">Add Product </a>
                                <a class="dropdown-item" href="{{url('/ont-to-many/product')}}">Manage Product</a>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Many TO Many
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{url('/many-to-many/tag/create')}}">Add Tag </a>
                                <a class="dropdown-item" href="{{url('/many-to-many/tag')}}">Manage Tag</a><hr/>
                                <a class="dropdown-item" href="{{url('/many-to-many/blog/create')}}">Add Blog </a>
                                <a class="dropdown-item" href="{{url('/many-to-many/blog')}}">Manage Blog</a>
                            </div>
                        </li>


                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </nav>

        </div>
    </div>

    <div class="row m-0 p-0" style="margin-bottom: 50px;">

        <div class="col-md-12 mt-4 mb-4">
            {{$slot}}
        </div>


    </div>

    <div class="row ml-0 mr-0 p-0 fixed-bottom">
        <div class="col-md-12 bg-dark">
            <p class="text-light text-center">@Copyright © Toaha 2021</p>
        </div>
    </div>
</div>
</body>
<script src="{{asset('bootstrap/jQuery.js')}}"></script>
<script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('bootstrap/js/popper.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('#tag_select').select2();
    });
</script>
</html>