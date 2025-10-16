<script type='text/javascript'>
function madeSelection(elem, helperMsg){
	if(elem.value == "Please Choose"){
		alert(helperMsg);
		elem.focus();
		return false;
	}else{
		return true;
	}
}
</script>
<form>
Selection: <select id='selection'>
<option>Please Choose</option>
<option>CA</option>
<option>WI</option>
<option>XX</option>
</select>
<input type='button' 
	onclick="madeSelection(document.getElementById('selection'), 'Please Choose Something')"
	value='Check Field' />
</form>