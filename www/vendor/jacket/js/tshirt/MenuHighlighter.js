$(function() {
	url = document.URL;
	urlSplit = url.split('/');
	$("a[href='" + url + "']").addClass ("active");
	$("a[href='" + url + "']").parent ().addClass ("active");
	$(".sidebar a[href*='" + urlSplit[6] + "']").addClass ("active");
	$(".sidebar a[href*='" + urlSplit[6] + "']").parent ().addClass ("active");
});