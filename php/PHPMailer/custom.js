function wAlertBox(str){
			  var alert=document.createElement("div");
			  alert.className="alert alert-danger";
			  var span=document.createElement("i");
			  span.className="fa fa-cog fa-spin";
			  alert.innerHTML=str;
			  alert.appendChild(span);
			  var e=document.getElementById("ack").appendChild(alert);
			  setTimeout(function(){ alert.style.display = "none"; }, 4000);
}
function sAlertBox(str){
			  var alert=document.createElement("div");
			  alert.className="alert alert-success";
			  var span=document.createElement("i");
			  span.className="fa fa-check-circle-o";
			   alert.innerHTML=str+"  ";
			   alert.appendChild(span);
			  var e=document.getElementById("ack").appendChild(alert);
			  setTimeout(function(){ alert.style.display = "none"; }, 4000);
}