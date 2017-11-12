function upload_pic() {
	$("#upic").trigger('click');
}

function send_pic() {
	$("#picform")[0].submit();
}

$("#sendrembtn").click(function(){
	let title = $("#rtitle").val(),
		desc = $("#rdesc").val(),
		pri = $("#rprio").val(),
		data = "&title="+title+"&desc="+desc+"&pri="+pri;

	$.ajax({
		url: "../controller/reqHandler.php?type=rem"+data,
		method: "GET",
		success: function(data) {
			if(data == "1") 
				render_html(title, desc, pri);
		},
		error: function(err) {
			//
		}
	});
});

function render_html(title, desc, pri) {
	let cls = "";

	if(pri == "Lowest")
		cls = "priority-3";
	else if(pri == "Medium")
		cls = "priority-2";
	else
		cls = "priority-1";

	let html = '<div class="card ' + cls + ' custom-card"><div class="card-body"><h5>' + title + '</h5><p>' + desc + '</p></div></div>';

	$("#render_outlet").prepend(html);
}