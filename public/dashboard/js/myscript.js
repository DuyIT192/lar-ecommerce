$(document).ready(function() {
    $('#dataTables-example').DataTable({
            responsive: true
    });
});

$( ".datepicker" ).datepicker({
       dateFormat: 'dd-mm-yy'
});

$("div.alert").delay(5000).slideUp();

function xacnhanxoa(msg){
	if (window.confirm(msg)) {
		return true;
	}
	return false;
};
$(document).ready(function(){
	var _token = $("input[name='_token']").val();
    $("#matp").change(function(e){
    	$("#xaid").html("<option  value='0'>"+'--- Xã / Phường ---'+"</option>");
        var cityCode = e.target.value;
        var _url = 'http://localhost/lar-ecommerce/public/admin/users/city/'+cityCode;
        jQuery.ajax({
            url: _url,
            type:'GET',
            data: {cityCode:cityCode,_token:_token},
            success:function(data)
            {
            	$("#maqh").empty();
                $("#maqh").html(data);
            }
        });
    });
    $("#maqh").change(function(e){
        var dtCode = e.target.value;
       	var _url = 'http://localhost/lar-ecommerce/public/admin/users/district/'+dtCode;
       	jQuery.ajax({
            url: _url,
            type:'GET',
            data: {dtCode:dtCode,_token:_token},
            success:function(data)
            {
                $("#xaid").html(data);
            }
        });
    });
    $("#smUser").click(function(){
		var cityCode = $("select[name='city']").val();
		if (cityCode ==0) {
	    	alert("Bạn chưa chọn thành phố !!!");
			event.preventDefault();
	    }
	});
});
