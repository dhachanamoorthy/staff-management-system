function login(){
  var username=$("#username").val();
  var password=$("#password").val();
  var datastring='username='+ username +'&password='+password;
   $.ajax({
        url: "php/login.php",
        type: "POST",
        dataType:"json",
        encode:true,
        data:datastring,   
        cache: false,
        beforeSend:function(){$('.loader').addClass('is-active')},
        success: function(data)
        {   
            if(data.type == '201')
            {
                 document.getElementById("ack").innerHTML=data.text;
                 location.href="signup.php";

            }else if(data.type == 'success'){
                 document.getElementById("ack").innerHTML=data.text;
                   location.href="index.php";
            }
            else{
                $('.loader').removeClass('is-active');
                document.getElementById("ack").innerHTML=data.text;
            }
        },
        error: function() 
        {
            document.getElementById("ack").innerHTML="*please check your connection and try again";
        }           
 });
}
function logout(){
	$.ajax({
		url: "php/logout.php",
        type: "POST",
        dataType:"json",
        encode:true,  
        cache: false,
        beforeSend:function(){
        	$("#loader-1").show();
        },
        success: function(data)
        {   
            if(data.type='success')
                window.location='login.php';
        }          
    });
}
function updatePassword(){
    var password=$("#newpassword").val();
    var confirmpassword=$("#confirmpassword").val();
    if(password==''){
        $('#ack').addClass('alert-danger');
        $('#ack-span').html("Please Enter the new password");
        $("#ack").show();
    }
    else if(password!=confirmpassword){
        $('#ack').addClass('alert-danger');
        $('#ack-span').html("Password and Confirm Password doesn't match");
        $("#ack").show();
    }
    else{
        var current="password="+$("#currentpassword").val();
        current=current+"&newpassword="+password;
        $.ajax({
            url: "php/updatePassword.php",
            type: "POST",
            data:current,
            dataType:"json",
            encode:true,  
            cache: false,
            success: function(data)
            {   
                if(data.type=='success'){
                    $("#ack").show();
                    $("#ack").removeClass('alert-danger');
                    $("#ack").addClass('alert-success');
                    $('#ack-data').html("Successfully Updated");
                    var a=setInterval(function(){
                        $("#changepassword").modal('hide');
                        clearInterval(a);
                            },1500);
                    
                }
                else{
                    $("#ack").show();
                    $("#ack").removeClass('alert-success');
                    $("#ack").addClass('alert-danger');
                    $('#ack-data').html(data.text);
                    $("#content-loader").removeClass('is-active');
                }          
            }
        });
    }
}
function createUser(){
     var emp_id=$("#emp_id").val();
    var email=$('#email').val();
    if(emp_id=='' || email==''){
        $("#ack").show();
        $("#ack").addClass('alert-danger');
        $('#ack-data').html("Fill all the Details");
        $("#ack").fadeOut(300);
        //$("#ack").removeClass('alert-danger');
    }
    else{
        var datastring="emp_id="+emp_id+"&email="+email;
        $.ajax({
            url: "php/createUser.php",
            type: "POST",
            data:datastring,
            dataType:"json",
            encode:true,  
            cache: false,
            success: function(data)
            {   
                if(data.type=='success'){
                    $("#ack").show();
                    $("#ack").addClass('alert-success');
                    $('#ack-data').html("Successfully Created");
                    $("#ack").fadeOut();
                    $("#ack").removeClass('alert-success');
                }
                else{
                     $("#ack").show();
                    $('#ack-data').html("Failed to Create");
                    $("#content-loader").removeClass('is-active');
                    $("#ack").fadeOut();
                    $("#ack").removeClass('alert-danger');
                }
            }
        });
    }
}
function updateAccount(){
    var mobile=$("#mobile").val();
    var position=$('#position').val();
    var dept=$('#dept').val();
    var dob=$("#dob").val().split(" ")[0];
    var doj=$("#doj").val().split(" ")[0];
    if(mobile=='' || position==''|| dept=='' || dob=='' || doj==''){
        // $("#ack").show();
        // $("#ack").addClass('alert-danger');
        // $('#ack-data').html("Fill all the Details");
        // setTimeout(function() {
        //    $("#ack").removeClass('alert-danger');
        // }, 250);
        // $("#ack").removeClass('alert-danger');
        alert("Fill all the Details");
    }
    else{
        var gender=$("input[name=gender]:checked").val();
        var datastring="mobile="+mobile+"&position="+position+"&dept="+dept+"&dob="+dob+"&doj="+doj+"&gender="+gender;
        $.ajax({
            url: "php/updateAccount.php",
            type: "POST",
            data:datastring,
            dataType:"json",
            encode:true,  
            cache: false,
            beforeSend:function(){
                $("#loader").addClass('is-active');
            },
            success: function(data)
            {   
                if(data.type=='success'){
                    $("#ack").show();
                    $("#ack").addClass('alert-success');
                    $('#ack-data').html("Successfully Updated");
                    $("#ack").fadeOut();
                    $("#ack").removeClass('alert-success');
                    // $("#loader").removeClass('is-active');
                    window.location='index.php';
                }
                else{
                    $("#ack").show();
                    $('#ack-data').html("Failed to Update");
                    $("#content-loader").removeClass('is-active');
                    $("#ack").fadeOut();
                    $("#ack").removeClass('alert-danger');
                }          
            }
        });
    }
}
function profilePic(){
    $('#file').click();
}
$('#file').change(function(){
    var img=document.getElementById("file").files[0];
    var form=new FormData();
    form.append('file',img);
      //e.preventDefault(); 
    $.ajax({
        url: "php/profilepic.php",
        type: "POST",
        data:  form,
        dataType:'json',
        encode:true,
        contentType: false,     //when we send json file we write contentType: 'application/json'
        cache: false,
        processData:false,
        success: function(data){
            var node1 = document.getElementById('bt');
            var node2 = document.getElementById('icon');
            refresh(node1,data.img);
            refresh(node2,data.img);
        },
        error: function(e,x,y) 
        {
            alert(e+" ."+y+"."+x);
        }   
    });  
});
function refresh(node,imagename){
    var times = 10000; // gap in Milli Seconds;
    (function startRefresh(){
        var address=imagename;
        if(node.src.indexOf('?')>-1)
        address = node.src.split('?')[0];
        else 
        address = node.src;
        node.src = address+"?time="+new Date().getTime();
        setTimeout(startRefresh,times);
    })();
}
function profileView(td){
    var emp_id=td.id;
    $('#profile').modal('toggle');
    $("#iframe").empty();
    $.ajax({
        url: "php/profileView.php",
        type: "POST",
        data:'emp_id='+emp_id,
        encode:true,  
        cache: false,
        beforeSend:function(){
            $("#loader").addClass('is-active');
        },
        success: function(data)
        {   
            $('#iframe').html(data);
        }
    });
}
function resetPassword(){
    var email=$('#email').val();
    $.ajax({
        url: "php/mailer.php",
        type: "POST",
        data:'email='+email,
        dataType:"json",
        encode:true,  
        cache: false,
        beforeSend:function(){
         $(".loader").addClass('is-active');
         // $('.loader').attr('data-text','Please wait while we sent new password yoor email');
        },
        success: function(data)
        {   
            if(data.type=='success'){
                $('.loader').attr('data-text',data.text);
                var delay = 1000; 
                var i=setTimeout(function(){window.location = 'login.php';clearInterval(i); }, delay);
            }
            else if(data.type=='error'){
                alert(data.text);
                $(".loader").removeClass('is-active');
            }
        }
    });
}
function addcertifiacte(){
    //ajax variable declaration
    //Certificate name
    var name = $("#name").val();
    //Specification
    var spec = $("#spec").val();
    //mark
    var mark = $("#mark").val();
    //course type
    var type = $("#type").val();
    //class passed
    var c_passed = $("#c_passed").val();
    //class authority name
    var a_name = $("#a_name").val();
    //duration
    var duration = $("#duration").val();
    //year passed
    var y_passed = $("#y_passed").val();
    //certification number
    var c_no = $("#c_no").val();
    if(name=='' || spec == '' || mark == '' || type == '' || c_passed == '' || a_name == '' || duration == '' || y_passed == '' || c_no == '' || flag==1)
    {
        document.getElementById("rack").innerHTML="*Please fill all the details";
    }
    else
    {
        document.getElementById("rack").innerHTML="";
        var datastring = 'name=' + name + '&spec=' + spec + '&mark=' + mark + '&type=' + type + '&c_passed=' + c_passed + '&a_name=' + a_name + '&duration=' + duration + '&y_passed=' + y_passed + '&c_no=' + c_no;
        $.ajax({
            type:"POST",
            dataType:"json",
            encode:true,
            data:datastring,
            cache:false,
            success: function(data)
            {
                if(data.type != 'error')
                {
                    alert(data.text);
                    removevalue();
                }
                else
                {
                    document.getElementById("rack").innerHTML=data.text;
                }
            },
            error: function()
            {
                document.getElementById("rack").innerHTML=data.text;
            }
        })
    }
}
 function track(){
         from=$("#from").val();
         to=$("#to").val();
        var dept=$("#dept").val();
        var datastring='from='+from+'&to='+to+'&dept='+dept;
       $.ajax({
        url:"php/track_leave.php",
            type: "POST",
            datatype:"html",
            data:datastring, 
            cache: false,
            beforeSend: function() {
              $("#loading-image").show();
           },
            success: function(data)
            { 
                $('#tbody').empty();
                $("#loading-image").hide();
                data = JSON.parse(data);
                 data.forEach(getData);
                 function getData(record){
                    if(record.name!='nill')
                        $('<tr><td>'+record.name+'</td><td>'+record.dept+'</td><td>'+record.date+'</td><td>'+record.day+'</td></tr>').prependTo($('#tbody')); 
                    else{
                        $('<tr><td colspan=4 class="text-center">No Records Found</td></tr>').prependTo($('#tbody'));
                    }         
                }
            },
            error: function(requestObject, error, errorThrown) 
            {
                alert(error);
                document.getElementById("rack").innerHTML="*please check your connection and try again";
            }           
     });
       return from+'---'+to;
}
 function lateEntry(){
         from=$("#from").val();
         to=$("#to").val();
        var dept=$("#dept").val();
        var datastring='from='+from+'&to='+to+'&dept='+dept;
       $.ajax({
        url:"php/late_entry.php",
            type: "POST",
            datatype:"html",
            data:datastring, 
            cache: false,
            beforeSend: function() {
              $("#loading-image").show();
           },
            success: function(data)
            { 
                $('#tbody').empty();
                $("#loading-image").hide();
                data = JSON.parse(data);
                 data.forEach(getData);
                 function getData(record){
                    if(record.name!='nill')
                        $('<tr><td>'+record.name+'</td><td>'+record.dept+'</td><td>'+record.intime+'</td><td>'+record.date+'</td><td>'+record.day+'</td></tr>').prependTo($('#tbody'));
                    else{
                        $('<tr><td colspan=5 class="text-center">No Record(s) Found</td></tr>').prependTo($('#tbody'));
                    }          
                }
            },
            error: function(requestObject, error, errorThrown) 
            {
                alert(error);
                document.getElementById("rack").innerHTML="*please check your connection and try again";
            }           
     });
       return from+'---'+to;
}
function exportToExcel(){
    fr=track();
    $('.loader').addClass('is-active');
    $('.loader').attr('data-text','Preparing your Data To Export');
    var delayInMilliseconds = 3000; //1 second
    setTimeout(function() {
        $('.loader').removeClass('is-active');
        var table = $("table");
        if(table && table.length){
            var preserveColors = (table.hasClass('table2excel_with_colors') ? true : false);
            $(table).table2excel({
                exclude: ".noExl",
                name: "Excel Document Name",
                filename: fr+ ".xls",
                fileext: ".xls",
                exclude_img: true,
                exclude_links: true,
                exclude_inputs: true,
                preserveColors: preserveColors
            });
        }
    }, delayInMilliseconds);
    
}
function exportToExcel2(){
    fr=lateEntry();
    $('.loader').addClass('is-active');
   $('.loader').attr('data-text','Preparing your Data To Export');
    var delayInMilliseconds = 3000; //1 second
    setTimeout(function() {
        $('.loader').removeClass('is-active');
        var table = $("table");
        if(table && table.length){
            var preserveColors = (table.hasClass('table2excel_with_colors') ? true : false);
            $(table).table2excel({
                exclude: ".noExl",
                name: "Excel Document Name",
                filename: fr+ ".xls",
                fileext: ".xls",
                exclude_img: true,
                exclude_links: true,
                exclude_inputs: true,
                preserveColors: preserveColors
            });
        }
    }, delayInMilliseconds);
}
function pagination(){
    var req_num_row=10;
    var $tr=jQuery('tbody tr');
    var total_num_row=$tr.length;
    var num_pages=0;
    if(total_num_row % req_num_row ==0){
        num_pages=total_num_row / req_num_row;
    }
    if(total_num_row % req_num_row >=1){
        num_pages=total_num_row / req_num_row;
        num_pages++;
        num_pages=Math.floor(num_pages++);
    }
    for(var i=1; i<=num_pages; i++){
        jQuery('#pagination').append(" "+i+" ");
    }
    $tr.each(function(i){
        jQuery(this).hide();
        if(i+1 <= req_num_row){
            $tr.eq(i).show();
        }
    
    });
    jQuery('#pagination a').click(function(e){
        e.preventDefault();
        $tr.hide();
        var page=jQuery(this).text();
        var temp=page-1;
        var start=temp*req_num_row;
        //alert(start);
        
        for(var i=0; i< req_num_row; i++){
            
            $tr.eq(start+i).show();
        
        }
    });
}
function applyLeave(){
  var no=$("#no_of_days").val();
  var type=$("#type").val();
  var from=$("#from").val();
  var to=$("#to").val();
  var start=$("#strat").val();
  var end=$("#end").val();
  var reason=$("#reason").val();
  var adj=$("#adjustment").val();
  if(no=='' || type=='' || from=='' || to==''  || start=='' || end=='' || reason=='' || adj==''){
        $("#alert").modal("toggle");
        $("#ack").addClass("text-danger");
        $("#ack").html("Required all Feilds");
  }
  else{
      var datastring='no='+ no +'&from='+from+'&to='+to+'&start='+start+'&end='+end+'&reason='+reason+'&adj='+adj+'&type='+type;
       $.ajax({
            url: "php/applyLeave.php",
            type: "POST",
            dataType:"json",
            encode:true,
            data:datastring,   
            cache: false,
            beforeSend:function(){$('.loader').addClass('is-active')},
            success: function(data)
            {   
                if(data.type == 'success')
                {
                    $('.loader').removeClass('is-active');
                    $("#alert").modal("toggle");
                    $("#ack").addClass("text-success");
                    $("#ack").html(data.text);
                }
                else{
                   $('.loader').removeClass('is-active');
                   $("#alert").modal("toggle");
                    $("#ack").addClass("text-danger");
                   $("#ack").html("Failed to Submit");

                }
            },
            error: function() 
            {
                $('.loader').removeClass('is-active');
                 $("#alert").modal("toggle");
                    $("#ack").addClass("text-danger");
                   $("#ack").html("Please check your Internet Connection");
            }           
        });
    }
}
function approvals(){
      $.ajax({
        url: "php/leaveApplications.php",
        type: "POST",
        dataType:"json",
        encode:true,
        success:function(data){
           data.forEach(getApplications);
           function getApplications(record){
            $('<div class="card "><div class="card-header" id="heading-'+record.leave_id+'"><h5 class="mb-0"> <button class="btn btn-link" data-toggle="collapse" data-target="#collapse-'+record.leave_id+'" aria-expanded="false" aria-controls=collapse-"'+record.leave_id+'"> <span class="fas fa-angle-down mr-3"></span> From:'+record.name+',<p class="text-muted">Regarding '+record.type_of_leave+'</p></button></h5></div><div id="collapse-'+record.leave_id+'" class="collapse" aria-labelledby="collapse-'+record.leave_id+'" data-parent="heading-'+record.leave_id+'"><div class="card-body"><h5>Respected Sir/Madam,</h5><p class="mb-0 ">---This is '+record.name+', '+record.position+' from the department of '+record.dept+'. I request you to kindly grant me '+record.type_of_leave+' for '+record.no_of_days+' day(s) on '+record.starts_from+' due to '+record.reason+'. I have arranged for uninterrupted and smooth handling of my class and the same will be handled by the following faculty as detailed below.</p><div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12"><table class="table table-bordered"><thead><tr><th>S NO</th><th>Subject</th><th>Faculty Name</th></tr></thead><tbody><tr><th scope="row">1</th><td>Mark</td><td>Otto</td></tr><tr><th scope="row">2</th><td>Jacob</td><td>Thornton</td></tr></tbody></table></div><div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 id="ack"><button class="btn btn-success" id="'+record.leave_id+'" onclick="approve(this)">Approve</button><button class="btn btn-danger mr-2" id="'+record.leave_id+'" onclick="reject(this)">Reject</button></div></div></div></div>').prependTo('#accordion3');
           }
        }
    })
}
function approve(r){
    str='value=1&leave='+r;
    $.ajax({
        url: "php/approvals.php",
        type: "POST",
        data:str, 
        encode:true,  
        dataType:"json",
        encode:true,
        success:function(data){  
             if(data.type=='success'){
                $('#ack').empty();
                $('#ack').append('<span><i class="mdi-check-circle-outline"></i>Approved</span>');
             }
         }
    })  
}
function reject(r){
     str='value=2&leave='+r;
    $.ajax({
        url: "php/approvals.php",
        type: "POST",
        data:str, 
        encode:true,  
        dataType:"json",
        encode:true,
        success:function(data){  
             
         }
    })  
}
function notification(){
    getApprovalNoti();
}
function getApprovalNoti(){
    $.ajax({
        url: "php/notification.php",
        type: "POST",
        dataType:"json",
        encode:true,
        success:function(data){
            if(data.approvals>0){
                if(!$("#approval-indicator").length)
                    $("#approval-link").append(' <span class="mr-1"><span class="badge-dot badge-primary" id="approval-indicator">'+data.approvals+'</span></span>');
            }
            else{
                $("#approval-link").empty();
            }
        }
    })
}
setInterval(function(){
    notification()
}, 5000);