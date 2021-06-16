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
                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Track leave</a></li>
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
                    <div class="col-md-12">
                        <div class="position-relative form-group">
                            <div class="form-row">
                                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                    <label for="inputDate">From</label>
                                    <div class="form-group">
                                        <div class="input-group date" id="from1" data-target-input="nearest">
                                            <input type="text" id="from"class="form-control datetimepicker-input" data-target="#from" placeholder="" autocomplete="off" />
                                            <div class="input-group-append" data-target="#from" data-toggle="datetimepicker">
                                                <div class="input-group-text"><i class="fa fa-calendar-alt"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                    <label for="inputDate">To</label>
                                    <div class="form-group">
                                        <div class="input-group date" id="to1" data-target-input="nearest">
                                            <input type="text" id="to" class="form-control datetimepicker-input" data-target="#to" placeholder="" autocomplete="off" />
                                            <div class="input-group-append" data-target="#to" data-toggle="datetimepicker">
                                                <div class="input-group-text"><i class="fa fa-calendar-alt"></i></div>
                                            </div>
                                        </div>
                                    </div>     
                                </div>
                                 <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                         <label for="inputDate">Department</label>
                                                
                                             <?php  
                                         if($_SESSION['position']=='secretary' || $_SESSION['position']=='chairman' || $_SESSION['position']=='principal'){
                                              echo'<select class="form-control" id="dept">
                                                <option value="9">IT</option>
                                                <option value="5">CSE</option>
                                                <option value="6">MECH</option>
                                                <option value="4">CIVIL</option>
                                                <option value="24">AGRI</option>        
                                                <option value="15">FT</option>
                                                <option value="7">ECE</option>
                                                <option value="8">EEE</option>
                                                <option value="14">BT</option>
                                           </select>';
                                            }
                                            if ($_SESSION['position']=='hod'){
                                                $dept= $_SESSION['department'];
                                                switch ($dept) {
                                                    case "information_technology":
                                                        echo '<select disabled="true" class="form-control" id="dept">
                                                                <option  value="9">IT</option>
                                                                </select>';
                                                        break;

                                                    case "cse":
                                                        echo '<select disabled="true" class="form-control" id="dept">
                                                                    <option  value="5">IT</option>
                                                                </select>';
                                                        break;
                                                    case "ece":
                                                        echo '<select disabled="true" class="form-control" id="dept">
                                                                <option  value="7">IT</option>
                                                                </select>';
                                                        break;
                                                    case "eee":
                                                        echo '<select disabled="true" class="form-control" id="dept">
                                                                <option  value="8">IT</option>
                                                                </select>';
                                                        break;
                                                    
                                                    default:
                                                        echo '<select disabled="true" class="form-control" id="dept">
                                                            <option  value="0">No-Dept</option>
                                                            </select>';
                                                }
                                           }

                                        ?>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                        <button  class='btn btn-info' onclick='track()';>Track</button>
                                        <img id="loading-image" src="assets/images/ajax-loader-t.gif" style="display: none;width:100px;height:20px;" />  
                                    </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Track Leave</h4>
                      <div class="text-right">
                                 <a class="btn btn-primary active" onclick="exportToExcel()">Export</a>
                            </div>
                </div>         
                <div class="card-body" id="table-area">
                    <div class="table-responsive">
                        <table id="table2" class="table table-striped table-bordered second" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Department</th>
                                    <th>Date</th>
                                    <th>day</th>
                                </tr>
                            </thead>
                            <tbody id="tbody">
                            </tbody>
                            <tfoot>
                                 <tr>
                                    <th>Name</th>
                                    <th>Department</th>
                                    <th>Date</th>
                                    <th>day</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
    