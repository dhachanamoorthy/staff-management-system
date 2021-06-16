<?php
  include('php/sessionManager.php');
  include('php/connection.php');
  $user=$_SESSION['username'];
  $sql="SELECT * FROM employee WHERE email='$user'";
  $result = mysqli_query($con,$sql);
  $row=$result->fetch_assoc();
  $emp_id=$row['emp_id'];
?>
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
     <link rel="stylesheet" href="assets/vendor/datepicker/tempusdominus-bootstrap-4.css" />
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

<body onload="$('.loader').removeClass('is-active')">
    <div class="loader loader-border is-active" data-text="Loading..."></div>
    <!-- ============================================================== -->
    <!-- signup form  -->
    <!-- ============================================================== -->

    <div class="splash-container">
        <div class="card">
            <div class="card-header">
                <h3 class="mb-1">Requires Following Infomation</h3>
                <p class="text-danger">These Informations are Important!!!</p>
            </div>
            <div class="card-body">
              <div class="alert  alert-dismissible fade show" role="alert" id="ack" style="display: none;">
                    <span id="ack-data"></span>
                    <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </a>
                </div>
                <div class="form-group">
                      <label>Employee ID<small class="text-muted"></small></label>
                      <input type="text" class="form-control "  placeholder="<?php echo $emp_id ?>" disabled>
                  </div>
                  <div class="form-group">
                      <label>E-mail<small class="text-muted"></small></label>
                      <input type="text" class="form-control "  placeholder="<?php echo $user ?>" disabled>
                  </div>
                  <div class="form-group">
                      <label>Phone <small class="text-muted">(999) 999-9999</small></label>
                      <input type="text" class="form-control phone-inputmask" id="mobile" placeholder="" value="" onchange="">
                  </div>
                  <div class="form-group">
                      <label for="inputEmail">Position</label>
                      <select class="form-control" id="position" placeholder="" value="">
                          <option value="professor">Professor</option>
                          <option value="assistant-professor">Assistant-Professor</option>
                          <option value="hod">HOD</option>
                          <option value="professor">Principal</option>
                          <option value="sceretary">Sceretary</option>
                      </select>
                  </div>
                  <div class="form-group">
                      <label for="inputEmail">Department</label>
                      <select class="form-control" id="dept"  placeholder="">
                          <option value="information technology">Information Technology</option>
                          <option value="computer science engg">Computer Science Engg</option>
                          <option value="electrical and communication engg">Electrical and Communication Engg</option>
                          <option value="electrical and electonic engg">Electrical and Electronics Engg</option>
                          <option value="mechanical engg">Mechanical Engg</option>
                          <option value="management">management</option>
                      </select>
                  </div>
                  <div class="form-group">
                      <label for="inputEmail">Gender</label>
                       <label class="custom-control custom-radio">
                          <input type="radio" name="gender" checked="" value="male" class="custom-control-input" id="gender"><span class="custom-control-label">Male</span>
                      </label>
                      <label class="custom-control custom-radio custom-control-inline">
                          <input type="radio" name="gender" value="female"class="custom-control-input" id="gender"><span class="custom-control-label">Female</span>
                      </label>
                  </div>
                  <div class="form-group">
                      <label for="inputDate">Date of Birth</label>
                       <div class="form-group">
                                  <div class="input-group date" id="dob1" data-target-input="nearest">
                                      <input type="text" id="dob"class="form-control datetimepicker-input" data-target="#dob1" placeholder="" />
                                      <div class="input-group-append" data-target="#dob1" data-toggle="datetimepicker">
                                          <div class="input-group-text"><i class="fa fa-calendar-alt"></i></div>
                                      </div>
                                  </div>
                              </div>
                  </div>
                   <div class="form-group">
                      <label for="inputDate">Date of Joining</label>
                       <div class="form-group">
                          <div class="input-group date" id="doj1" data-target-input="nearest">
                              <input type="text" id="doj"class="form-control datetimepicker-input" data-target="#doj1" placeholder="" />
                              <div class="input-group-append" data-target="#doj1" data-toggle="datetimepicker">
                                  <div class="input-group-text"><i class="fa fa-calendar-alt"></i></div>
                              </div>
                          </div>
                      </div>
                  </div>
                <div class="form-group pt-2">
                    <button class="btn btn-block btn-primary"  onclick="updateAccount()">Update</button>
                </div>
            </div>
        </div>
    </div>
</body>
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js -->
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
     <script src="assets/vendor/inputmask/js/jquery.inputmask.bundle.js"></script>
     <!-- datepicker -->
    <script src="assets/vendor/datepicker/moment.js"></script>
    <script src="assets/vendor/datepicker/tempusdominus-bootstrap-4.js"></script>
    <script src="assets/vendor/datepicker/datepicker.js"></script>
    <!-- main js -->
    <script src="assets/libs/js/main-js.js"></script>
    <script src="assets/libs/js/custom.js"></script>
    <script type="text/javascript">
        $(function(e) {
    "use strict";
        $(".date-inputmask").inputmask("dd/mm/yyyy"),
        $(".phone-inputmask").inputmask("(999) 999-9999"),
        $(".email-inputmask").inputmask({
            mask: "*{1,20}[.*{1,20}][.*{1,20}][.*{1,20}]@*{1,20}[*{2,6}][*{1,2}].*{1,}[.*{2,6}][.*{1,2}]",
            greedy: !1,
            onBeforePaste: function(n, a) {
                return (e = e.toLowerCase()).replace("mailto:", "")
            },
            definitions: {
                "*": {
                    validator: "[0-9A-Za-z!#$%&'*+/=?^_`{|}~/-]",
                    cardinality: 1,
                    casing: "lower"
                }
            }
        })
});
    </script>
</html>