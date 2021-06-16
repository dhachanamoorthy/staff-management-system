<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Concept - Bootstrap 4 Admin Dashboard Template</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <style>
    html,
    body {
        height: 100%;
    }

    body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
    }
    </style>
</head>
<!-- ============================================================== -->
<!-- signup form  -->
<!-- ============================================================== -->

<body>
    <!-- ============================================================== -->
    <!-- signup form  -->
    <!-- ============================================================== -->
    <div class="splash-container">
        <div class="card">
            <div class="card-header">
                <h3 class="mb-1">Registration</h3>
                <p></p>
            </div>
            <div class="card-body">
                <div class="alert  alert-dismissible fade show" role="alert" id="ack" style="display: none;">
                    <span id="ack-data"></span>
                    <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </a>
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" type="text" id="emp_id" required="" placeholder="Employee ID" autocomplete="off">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" type="email" id="email" required="" placeholder="E-mail" autocomplete="off">
                </div>
                 <div class="form-group">
                    <input class="form-control form-control-lg" type="text" id="name" required="" placeholder="Name" autocomplete="off">
                </div>
                <div class="form-group">
                    <button class="btn btn-block btn-primary" onclick="createUser()">Create User</button>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
<script src="assets/libs/js/custom.js"></script>
 
</html>