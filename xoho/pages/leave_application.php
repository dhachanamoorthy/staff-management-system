<div class="container-fluid  dashboard-content">
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <h2 class="pageheader-title">Apply Leave</h2>
                <p class="pageheader-text"></p>
                <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Leave Application</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header">Leave Details</h5>
                <div class="card-body">
                    <div id="basicform" data-parsley-validate="">
                        <div class="form-group row" >
                            <div class="col-sm-6">
                                <label for="inputUserName">Number of Days</label>
                                <input id="inputUserName" type="number" min="0" name="name" id="no_of_days" required="" placeholder="" autocomplete="off" class="form-control">
                            </div>
                             <div class="col-sm-6">
                                <label for="inputUserName">Type of Leave</label>
                                 <select class="form-control" id="type">
                                    <option>Casual Leave</option>
                                    <option>Working Holiday</option>
                                    <option>On Duty</option>
                                    <option>Emergency Leave</option>
                                    <option>Vacation Leave</option>
                                    <option>Permissions</option>
                                </select>
                            </div>
                        </div>
                         <div class="form-group row" >
                              <div class="col-xl-4 col-lg-4 col-8 mb-2">
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
                           <div class="col-xl-2 col-lg-2  col-4 mb-2">
                                <label for="inputUserName">Session</label>
                                <select class="form-control" id="start">
                                    <option value="am">AM</option>
                                    <option  value="pm">PM</option>
                                </select>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-8 mb-2">
                                    <label for="inputDate">To</label>
                                    <div class="form-group">
                                        <div class="input-group date" id="to1" data-target-input="nearest">
                                            <input type="text" id="to"class="form-control datetimepicker-input" data-target="#to" placeholder="" autocomplete="off" />
                                            <div class="input-group-append" data-target="#to" data-toggle="datetimepicker">
                                                <div class="input-group-text"><i class="fa fa-calendar-alt"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                           <div class="col-xl-2 col-lg-2 col-4 mb-2">
                                <label for="inputUserName">Session</label>
                                <select class="form-control" id="end">
                                    <option value="am">AM</option>
                                    <option  value="pm">PM</option>
                                </select>
                            </div>
                        </div>
                         <div class="form-group row" >
                            <div class="col-sm-6">
                                <label for="inputUserName">Reason</label>
                                <input id="inputUserName" type="text" name="name" id="reason"data-parsley-trigger="change" required="" placeholder="" autocomplete="off" class="form-control">
                            </div>
                             <div class="col-sm-6">
                                <label for="inputUserName">Adjustment</label>
                                <textarea class="form-control" id="adjustment" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="form-group row" >
                            <div class="col-12 text-right">
                                 <a class="btn btn-primary active" onclick="applyLeave()">Submit</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="modal fade" id="alert" tabindex="-1" role="dialog" aria-labelledby="changepassword" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                         <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </a>
                      <h3 class="text-center" id="ack"></h3>
                    </div>
                </div>
            </div>
        </div>