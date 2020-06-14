<div class="container-fluid  dashboard-content">
    <!-- ============================================================== -->
    <!-- pageheader -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <h2 class="pageheader-title">Employee Leave</h2>
                <p class="pageheader-text"></p>
                <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php" class="breadcrumb-link">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Search</a></li>
                            <li class="breadcrumb-item active" aria-current="page"></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0"></p>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example1" class="table table-striped table-bordered second" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Employee ID</th>
                                    <th>Name</th>
                                    <th>Mobile</th>
                                    <th>Position</th>
                                    <th>Department</th>
                                    <th>Link</th>
                                </tr>
                            </thead>
                            <tbody>
                              <?php
                                  include('php/connection.php');
                                  $sql="SELECT emp_id,name,mobile,position,dept FROM employee";
                                  $result = mysqli_query($con,$sql);
                                  if ($result->num_rows>0) {           
                                    while ($row = $result->fetch_assoc()){       
                                      echo "<tr><td>".$row['emp_id']."</td><td>";
                                      echo $row['name']."</td><td>";
                                      echo $row['mobile']."</td><td>";
                                      echo $row['position']."</td><td>";
                                       echo $row['dept']."</td><td>";
                                      echo "<button class='btn btn-primary' id='".$row['emp_id']."' onclick='profileView(this)'>View Profile</button></td></tr>"; 
                                    }
                                  }
                                  else{
                                    echo "<tr><td id='rack' colspan='5' style='text-align:center;'>No result found</td></tr>";
                                  }
                              ?>                   
                                   
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Employee ID</th>
                                    <th>Name</th>
                                    <th>Mobile</th>
                                    <th>Position</th>
                                    <th>Department</th>
                                    <th>Link</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <div class="row">
        <div class="modal fade" id="profile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog"role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Profile</h5>
                        <a  class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </a>
                    </div>
                    <div class="modal-body" id="iframe">

                     <!--  <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12" id="info">
                           
                            <div class="card">
                                <div class="card-body">
                                    <div class="user-avatar text-center d-block">
                                        <img src="assets/images/avatar.jpg" alt="User Avatar" class="rounded-circle user-avatar-xxl">
                                    </div>
                                    <div class="text-center">
                                        <h2 class="font-24 mb-0">Moorthy</h2>
                                        <p>Assistant-professor</p>
                                    </div>
                                </div>
                                <div class="card-body border-top">
                                    <h3 class="font-16">Contact Information</h3>
                                    <div class="">
                                        <ul class="list-unstyled mb-0">
                                        <li class="mb-2"><i class="fas fa-fw fa-envelope mr-2"></i><a href="mailto:dhachanamoorthy3@gmail.com">dhachanamoorthy3@gmail.com</a></li>
                                        <li class="mb-0"><i class="fas fa-fw fa-phone mr-2"></i><a href="tel:(763) 961-9985">(763) 961-9985</a></li>
                                    </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="influence-profile-content pills-regular">
                                <ul class="nav nav-pills mb-3 nav-justified" id="pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="pills-campaign-tab" data-toggle="pill" href="#pills-campaign" role="tab" aria-controls="pills-campaign" aria-selected="true">Experience</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-packages-tab" data-toggle="pill" href="#pills-packages" role="tab" aria-controls="pills-packages" aria-selected="false">Certifications</a>
                                    </li>

                                </ul>
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-campaign" role="tabpanel" aria-labelledby="pills-campaign-tab">
                                         <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" id="experience">
                                                        
                                                    </div>
                                                </div>
                                            </div></div>                                    </div>
                                    <div class="tab-pane fade" id="pills-packages" role="tabpanel" aria-labelledby="pills-packages-tab">
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="section-block">
                                                    <h2 class="section-title">Certification</h2>
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" id="certification">
                                                 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          </div>
                       </div>
                      </div> -->
                </div>
                 
                </div>
            </div>
        </div>
    </div>
</div>