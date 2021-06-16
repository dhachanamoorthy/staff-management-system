<?php
    include('php/connection.php');
    $username=$_SESSION['username'];
    $sql="SELECT * FROM employee WHERE email='$username'";
    $result = mysqli_query($con,$sql);
    $row=$result->fetch_assoc();
    $emp_id=$row['emp_id'];
    $alert="";
    $name=$row['name'];
    $phone=$row['mobile'];
    $position=$row['position'];
    $dept=$row['dept'];
    $dob=$row['dob'];
    $gender=$row['gender'];
    $doj=$row['doj'];
    $age=strtotime($dob);
    $now=time();
    $age=$now-$age;
    $age=floor($age / 31556926);
?>
<div class="container-fluid dashboard-content ">
    <div class="loader loader-default " id="content-loader" data-text="Loading..."></div>
    <div class="row">
         <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
            <div class="card ">
                <div class="card-body">
                    <span class="badge badge-primary">Employee ID:<?php echo $emp_id;?></span>
                    <div class="user-avatar text-center d-block">
                        <figure class="card-figure figure">
                            <div class="figure-img rounded-circle">
                                <img src="<?php echo $path?>" alt="User Avatar"  class="rounded-circle user-avatar-xxxl">
                               <a onclick="profilePic()" class="img-link rounded-circle">
                                    <div class="tile tile-circle " id="bt">
                                        <span><i class="fas fa-circle text-primary fa-2x"></i></span>
                                    </div>
                                </a>
                                <input type="file" id='file' style="display: none" />
                            </div>
                            <figcaption class="figure-caption">
                                <h6 class="figure-title"><a href="#"></a></h6>
                                <p class="text-muted mb-0"> Click Image to Change Image </p>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="text-center">
                        <h2 class="font-24 mb-0 text-secondary"><?php echo ucwords($name);?></h2>
                        <h4 class="text-dark"><?php echo ucwords($position);?></h4>
                        <h3 class="font-16 mb-0 text-danger"><?php echo ucwords($dept);?></h3>
                    </div>
                </div>
                <div class="card-body border-top">
                    <h3 class="font-16 text-info">Contact Information</h3>
                    <div class="">
                        <ul class="list-unstyled mb-0">
                        <li class="mb-2"><i class="fas fa-fw fa-envelope mr-2"></i><a href="<?php echo 'mailto:'.$username;?>"><?php echo $username?></a></li>
                        <li class="mb-0"><i class="fas fa-fw fa-phone mr-2"></i><a href="<?php echo 'tel:'.$phone;?>"><?php echo $phone?></a></li>
                    </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header">Other Info</h5>
                <div class="card-body">
                    <table class="table table-clear">
                        <tbody>
                            <tr>
                                <td class="left">
                                    <strong class="text-dark">Gender</strong>
                                </td>
                                <td class="right"><?php 
                                                    if(strcmp('male',$gender)==0){
                                                        echo "<i class='fas fa-male mr-2'></i>Male";
                                                    }
                                                    else{
                                                         echo "<i class='fas fa-female mr-2'></i>Female";   
                                                    }
                                                ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="left">
                                    <strong class="text-dark">Date Of Birth</strong>
                                </td>
                                <td class="right"><?php echo $dob?></td>
                            </tr>
                            <tr>
                                <td class="left">
                                    <strong class="text-dark">Date of joining</strong>
                                </td>
                                <td class="right"><?php echo $doj?></td>
                            </tr>
                            <tr>
                                <td class="left">
                                    <strong class="text-dark">Age</strong>
                                </td>
                                <td class="right">
                                    <strong class="text-dark"><?php echo $age?></strong>
                                </td>
                            </tr>
                            <tr class="border-bottom">
                                <td class="left">
                                    <p class="text-left">
                                        <a class="btn btn-space btn-primary" href="#">Add Certification</a>
                                    </p>
                                </td>
                                <td class="right">
                                     <p class="text-right">
                                        <a class="btn btn-space btn-primary" href="#">Add Experience</a>
                                    </p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="row">
                        <div class="col-sm-12 pb-0 pb-sm-4 pb-lg-0 pr-0">
                            <p class="text-center">
                                <button type="submit" class="btn btn-space btn-secondary" data-toggle="modal" data-target="#changepassword">Change Password</button>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="changepassword" tabindex="-1" role="dialog" aria-labelledby="changepassword" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Change Password</h5>
                        <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </a>
                    </div>
                    <div class="modal-body">
                        <div class="alert " id="ack" role="alert" style="display: none;">
                            <span id="ack-data"></span>
                             <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </a>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword"> Current Password</label>
                            <input id="currentpassword" type="password" placeholder="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="inputPassword">New Password</label>
                            <input id="newpassword" type="password" placeholder="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="inputPassword">Confirm Password</label>
                            <input id="confirmpassword" type="password" placeholder="" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="#" class="btn btn-secondary" data-dismiss="modal">Close</a>
                        <a href="#" class="btn btn-primary" onclick="updatePassword()">Update</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>