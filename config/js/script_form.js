function price_old_select_func()
{
	//alert (document.getElementById("price_old_select").value);
	if (document.getElementById("price_old_select").value=='0') {
	document.getElementById("skidka").disabled = true;
	document.getElementById("price_old").disabled = false;	
		
	
	}
else {
	document.getElementById("skidka").disabled = false;
	document.getElementById("price_old").disabled = true;
	
}
return true;
}

function script1()
{
	//alert (document.getElementById("script").value);
	if (document.getElementById("script").value=='0') {
		
document.getElementById("title").disabled = true;
document.getElementById("country_script").disabled = true;
document.getElementById("auditoria").disabled = true;
document.getElementById("tovar").disabled = true;
document.getElementById("vsego").disabled = true;
document.getElementById("delay1").disabled = true;
document.getElementById("delay2").disabled = true;
}
else {
document.getElementById("title").disabled = false;
document.getElementById("country_script").disabled = false;
document.getElementById("auditoria").disabled = false;
document.getElementById("tovar").disabled = false;
document.getElementById("vsego").disabled = false;
document.getElementById("delay1").disabled = false;
document.getElementById("delay2").disabled = false;
}
	return true;
}

function script2()
{
	//alert (document.getElementById("modal").value);
	if (document.getElementById("modal").value=='0') {
		
document.getElementById("modal_title").disabled = true;
document.getElementById("modal_text").disabled = true;
document.getElementById("modal_text2").disabled = true;
document.getElementById("button").disabled = true;
document.getElementById("modal_delay").disabled = true;

}
else {
document.getElementById("modal_title").disabled = false;
document.getElementById("modal_text").disabled = false;
document.getElementById("modal_text2").disabled = false;
document.getElementById("button").disabled = false;
document.getElementById("modal_delay").disabled = false;
}
	return true;
}

function script3()
{
	//alert (document.getElementById("upsel").value);
	if (document.getElementById("upsel").value=='0') {
		
document.getElementById("upsel_title").disabled = true;
document.getElementById("upsel_dir").disabled = true;
document.getElementById("upsel_pic").disabled = true;
document.getElementById("upsel_pic_p").disabled = true;
document.getElementById("upsel_url").disabled = true;
document.getElementById("upsel_url_title").disabled = true;
document.getElementById("upsel_delay").disabled = true;
document.getElementById("upsel_pic_h").disabled = true;

}
else {
document.getElementById("upsel_title").disabled = false;
document.getElementById("upsel_dir").disabled = false;
document.getElementById("upsel_pic").disabled = false;
document.getElementById("upsel_pic_p").disabled = false;
document.getElementById("upsel_url").disabled = false;
document.getElementById("upsel_url_title").disabled = false;
document.getElementById("upsel_delay").disabled = false;
document.getElementById("upsel_pic_h").disabled = false;
}
	return true;
}