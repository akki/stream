/******************************** When DOM is ready **************************************/
$(document).ready(function(){

	$("#link").focus();

	$(document).on('click', '#results li', function() {
		var link = 'https://www.youtube.com/watch?v=' + $(this).attr("id");
		$("#link").val(link);
		$("#requestForm input[type='submit']").click();
	});

	$(document).on('keyup', "#link", function(){
		
		q = $("#link")[0].value;
		q = q.replace(' ', '+');
		data = {
			q    : q,
			part : "snippet",
			key  : YOUR-YOUTUBE-SEARCH-API-KEY,
			maxResults : "10"
			type : "video"
		};
		$.ajax({
			type: "GET",
			url: "https://www.googleapis.com/youtube/v3/search",
			datatype: 'json',
			data : data,
			success: function(response){
				showResults(response);
			}
		});
	});

	// $("#link").keyup();

});

// To display the videos received from youtube api.
function showResults(response) {

	data = response.items;

	var htmly = '', len = response.items.length;

	for(var i = 0; i < len; i++) {
		htmly += '<li id="' + data[i].id.videoId;
		htmly += '"><div class="results-content"><h4 class="results-name row">';
		htmly += '<span class="results-img col-xs-2"><img src="';
		htmly += data[i].snippet.thumbnails["default"].url;
		htmly += '" /></span><span class="results-title col-xs-8">';
		htmly += data[i].snippet.title;
		htmly += '</span></h4></div></li>';
	}

	$("#results ul").html(htmly);

}
