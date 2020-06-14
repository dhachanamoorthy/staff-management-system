<?php
    include('connection.php');
    include('sessionManager.php');
    $emp_id=$_POST['emp_id'];
    $sql="SELECT * FROM employee WHERE emp_id='$emp_id'";
    $result = mysqli_query($con,$sql);
    $row=$result->fetch_assoc();
    $username=$row['email'];
    $name=$row['name'];
    $position=$row['position'];
    $img=$row['pic'];
    $phone=$row['mobile'];
    if($phone== NULL){
        $phone='Not Available';
    }
    $path="";
    if($img!=NUll){
        $path='images/'.$img;
    }
    else{
        $path='assets/images/avatar.jpg';
    }

                 $profile='<div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-5 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="user-avatar text-center d-block">
                                        <img src="'.$path.'" alt="User Avatar" class="rounded-circle user-avatar-xl">
                                    </div>
                                    <div class="text-center">
                                        <h2 class="font-24 mb-0">'.$name.'</h2>
                                        <p>'.$position.'</p>
                                    </div>
                                </div>
                                <div class="card-body border-top">
                                    <h3 class="font-16">Contact Information</h3>
                                    <div class="">
                                        <ul class="list-unstyled mb-0">
                                        <li class="mb-2"><i class="fas fa-fw fa-envelope mr-2"></i><a href="mailto:"'.$username.'>'.$username.'</a></li>
                                        <li class="mb-0"><i class="fas fa-fw fa-phone mr-2"></i><a href="tel:"' .$phone.'>'. $phone.'</a></li>
                                    </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                      <div class="col-xl-8 col-lg-8 col-md-7 col-sm-12 col-12">
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
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="section-block">
                                                    <h2 class="section-title">Experience</h2>
                                                </div>
                                            </div>';
                                                $sql="SELECT * FROM experience WHERE emp_id='$emp_id'";
                                                $result = mysqli_query($con,$sql);
                                                $row=$result->num_rows;
                                                if($row>0){
                                                    while($row=$result->fetch_assoc()){
                                                        $duration=$row['duration'];
                                                        $desg=$row['designation'];
                                                        $institution=$row['institution_address'];
                                                        $from=$row['date_taking_charge'];
                                                        $to=$row['date_ending_charge'];
                                            $profile=$profile.'<div class="card">
                                             <div class="card-body">
                                                <div class="row">
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <div class="media influencer-profile-data d-flex align-items-center p-2">
                                                            <div class="media-body ">
                                                                <div class="influencer-profile-data">
                                                                    <h3 class="m-b-10"><span class="text-muted">As:</span>'.ucwords($position).'<span class="text-muted"> In </span>'.$institution.'</h3>
                                                                    <p>
                                                                        <span class="m-r-20 d-inline-block">From : 
                                                                            <span class="m-l-10 text-primary">'.$from.'</span>
                                                                        </span>
                                                                        <span class="m-r-20 d-inline-block"> To : 
                                                                            <span class="m-l-10 text-secondary">'.$to.'</span>
                                                                        </span>
                                                                            <span class="m-r-20 d-inline-block">Duration :<span class="m-l-10  text-info">'.$duration.'</span>
                                                                        </span>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div></div>
                                                         ';
                                                    }
                                                }
                                                else{
                                    $profile=$profile.'<div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <div class="media influencer-profile-data d-flex align-items-center ">
                                                            <div class="media-body">
                                                                  <h3 class="mr-4">No Records Found</h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div></div>';
                                                    
                                                }
                                
                                $profile=$profile.'    </div>
                                    <div class="tab-pane fade" id="pills-packages" role="tabpanel" aria-labelledby="pills-packages-tab">
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="section-block">
                                                    <h2 class="section-title">Certification</h2>
                                                </div>
                                            </div>';
                                                $sql="SELECT * FROM certification WHERE emp_id='$emp_id'";
                                                $result = mysqli_query($con,$sql);
                                                $row=$result->num_rows;
                                                if($row>0){
                                                    while($row=$result->fetch_assoc()){
                                                        $name=$row['name_of_certificate'];
                                                        $specialization=$row['specialiazion'];
                                                        $marks=$row['mark'];
                                                        $type=$row['course_type'];
                                                        $class=$row['class_passed'];
                                                        $duration=$row['duration'];
                                                        $year=$row['year_passed'];
                                                        $c_no=$row['certificate_no'];
                                            $profile=$profile.'<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="card">
                                                    <div class="card-header bg-primary text-center p-3 ">
                                                        <h4 class="mb-0 text-white">'.$name.'</h4>
                                                    </div>
                                                    <div class="card-body text-center">
                                                        <h1 class="mb-2">'.$specialization.'</h1>
                                                        <p>Duration-'.$duration.'</p>
                                                    </div>
                                                    <div class="card-body border-top">
                                                        <ul class="list-unstyled bullet-check font-14">
                                                            <li>Year - '.$year.'</li>
                                                            <li>Certificate No-<span class="text-danger">'.$c_no.'</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>';
                                        }
                                    }
                                    else{
                                        $profile=$profile.'<div class="card">
                                            <div class="card-body">
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <div class="media influencer-profile-data d-flex align-items-center ">
                                                            <div class="media-body">
                                                                  <h3 class="mr-4">No Records Found</h3>
                                                            </div>
                                                        </div>
                                                    </div></div></div>';
                                    }
                                    
                                    $profile=$profile.'    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>';
            echo $profile;
              ?>