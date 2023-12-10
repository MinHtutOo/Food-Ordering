<!doctype html>
<!-- 
* Bootstrap Simple Admin Template
* Email: heyalexluna@gmail.com
* Version: 1.1
* Author: Alexis Luna
* Copyright 2019 Alexis Luna
* Website: https://github.com/mralexisluna/bootstrap-simple-admin-template
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tables | Start Bootstrap</title>

    <link href="{!!asset('/vendor/bootstrap4/css/bootstrap.min.css')!!}" rel="stylesheet">
    <link href="{!!asset('/vendor/DataTables/datatables.min.css')!!}" rel="stylesheet">
    <link href="{!!asset('/css/master.css')!!}" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <nav id="sidebar" class="active">
            <div class="sidebar-header">
                <a href="{{url('/')}}">
                    <img src="{!!asset('/images/logo/logo.png')!!}" alt="logo" />
                </a>
            </div>
            <ul class="list-unstyled components">
                <li>
                    <a href="{{url('admin/index')}}"><i class="fas fa-home"></i> Dashboard</a>
                </li>
                <li>
                    <a href="#authmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down"><i class="fas fa-user-shield"></i> User</a>
                    <ul class="collapse list-unstyled" id="authmenu">
                        <li>
                            <a href="{{url('admin/customers')}}"><i class="fas fa-user-friends"></i>Customers List</a>
                        </li>
                        <li>
                            <a href="{{url('admin/owners')}}"><i class="fas fa-user-friends"></i>Owners List</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="settings.html"><i class="fas fa-cog"></i>Restaurants List</a>
                </li>
                <li>
                    <a href="{{url('restaurant/order')}}"><i class="fas fa-file-alt"></i> Order List</a>
                </li>
                <li>
                    <a href="tables.html"><i class="fas fa-table"></i> Payment</a>
                </li>
            </ul>
        </nav>

        <div id="body" class="active">
            <nav class="navbar navbar-expand-lg navbar-primary bg-primary">
                <button type="button" id="sidebarCollapse" class="btn btn-outline-light default-light-menu"><i class="fas fa-bars"></i><span></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <div class="nav-dropdown">
                                <a href="" class="nav-item nav-link dropdown-toggle" data-toggle="dropdown"><i class="fas fa-link"></i> <span>Quick Links</span> <i style="font-size: .8em;" class="fas fa-caret-down"></i></a>
                                <div class="dropdown-menu dropdown-menu-right nav-link-menu">
                                    <ul class="nav-list">
                                        <li><a href="{{url('admin/customers')}}" class="dropdown-item"><i class="fas fa-user-friends"></i> Customer List</a></li>
                                        <div class="dropdown-divider"></div>
                                        <li><a href="{{url('admin/owners')}}" class="dropdown-item"><i class="fas fa-user-friends"></i> Owner List</a></li>
                                        <div class="dropdown-divider"></div>
                                        <li><a href="{{url('restaurant/index')}}" class="dropdown-item"><i class="fas fa-list"></i> Restaurant List</a></li>
                                        <div class="dropdown-divider"></div>
                                        <li><a href="{{url('restaurant/order')}}" class="dropdown-item"><i class="fas fa-list"></i> Order List</a></li>
                                        <div class="dropdown-divider"></div>
                                        <li><a href="{{url('admin/role')}}" class="dropdown-item"><i class="fas fa-user-shield"></i> Roles</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <div class="nav-dropdown">
                                <a href="" class="nav-item nav-link dropdown-toggle" data-toggle="dropdown"><i class="fas fa-user"></i> <span>John Doe</span> <i style="font-size: .8em;" class="fas fa-caret-down"></i></a>
                                <div class="dropdown-menu dropdown-menu-right nav-link-menu">
                                    <ul class="nav-list">
                                        <li><a href="{{url('user/profile')}}" class="dropdown-item"><i class="fas fa-address-card"></i> Profile</a></li>
                                        <div class="dropdown-divider"></div>
                                        <li><a href="" class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="content">
                <div class="container-fluid">
                    <div class="page-title">
                        <h3>Owners List</h3>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                  <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Username</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>@twitter</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{!!asset('/vendor/jquery3/jquery-3.4.1.min.js')!!}"></script>
    <script src="{!!asset('/vendor/bootstrap4/js/bootstrap.bundle.min.js')!!}"></script>
    <script src="{!!asset('/vendor/DataTables/datatables.min.js')!!}"></script>
    <script src="{!!asset('/vendor/fontawesome5/js/solid.min.js')!!}"></script>
    <script src="{!!asset('/vendor/fontawesome5/js/fontawesome.min.js')!!}"></script>
    <script src="{!!asset('/js/initiate-datatables.js')!!}"></script>
    <script src="{!!asset('/js/script.js')!!}"></script>

</body>

</html>