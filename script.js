/* global $*/
$(function(){
	var visited = [];
	var a = false;
	$("#indi_search").click(function(){
		var s = $('#search_box').val();
		s = s.toLowerCase();
		if(s != "" && visited.indexOf(s) < 0 && a === false){
			$.ajax({
				url: "request.php",
				method: 'GET',
				data:{q:s},
				success: function(data){
					visited.push(s);
					console.log(visited);
					$("#results").append(data);
				},
				error:function(){
					alert('Word not found.')
				}
			});
		}
	 });
	 
	$("#mult_search").click(function(){
		$.ajax({
				url: "request.php",
				method: 'GET',
				data:{'all':true},
				success: function(data){
					var def = $(data).find('definition');
					$("#results").append("<ol></ol>");
					$(def).each(function(){
						$("#results ol").append('<li><h1>'+$(this).attr('name')+'</h1><p>'+$(this).text()+'</p></li>');
					});
					a = true;
				},
				error:function(){
					alert('Problem with the request.')
				}
			});
	});
	 
});