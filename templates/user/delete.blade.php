<form method="post" action="{{{ URL::current() }}}" id="deleteRecord">
	<p class="banner"><i class="xn xn-user xn-3x"></i><i class="xn xn-right-bold xn-3x"></i><i class="xn xn-trash xn-3x"></i></p>
    <p>Are you sure want to delete this user?</p>
</form>
<ul class="actions">
    <li><a href="#" onclick="$('#deleteRecord').submit (); return false;" class="error">Yes</a></li>
    <li class="primary"><a href="#" onclick="$.fn.popup().close(); return false;">No</a></li>
</ul>
