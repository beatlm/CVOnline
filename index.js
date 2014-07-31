$(document).ready(function(){ 
	  hideAll();
	  $("#content").show();
 });
 function hideAll(){
	$("#content").hide();
	$("#contentH").hide();
	$("#contentA").hide();
	$("#contentF").hide();
	$("#contentI").hide();
	$('#html1').hide();
	$('#html2').hide();
	$('#html3').hide();
	$('#prevH').hide();
	$('#prevA').hide();
	$('#prevF').hide();
	$("#contentA").hide();
	$('#android1').hide();
	$('#android2').hide();
	$("#contentF").hide();
	$('#flash1').hide();
	$('#flash2').hide();
 }
 
function show(id){
console.log("show:"+id);
	hideAll();
	switch(id){
	  case(0):
	   $("#content").show("slow");
		break;
		  case(1):
	   $("#contentH").show();
	   $('#prevH').show("size");
	   	  $('#tmp').text('');
		break;
		case(11):
			$("#contentH").show();
			$('#html1').show("slide");
			$('#tmp').text(' > Puzzlink');
		break;
		case(12):
			$("#contentH").show();
			$('#html2').show("slide");
			$('#tmp').text(' > Space Invaders');
		break;
		case(13):
			$("#contentH").show();
			$('#html3').show("slide");
			$('#tmp').text(' > 2048');
		break;
	   case (2):
	  	   $("#contentA").show();
	   $('#prevA').show("size");
	   	  $('#tmp').text('');
		break;
		case(21):
			$("#contentA").show();
			$('#android1').show("slide");
			$('#tmp').text(' > London Tour');
		break;
				case(22):
			$("#contentA").show();
			$('#android2').show("slide");
			$('#tmp').text(' > London Tour');
		break;
	   case(3):
	    $("#contentF").show();
	   $('#prevF').show("size");
	   	  $('#tmp').text('');
		break;
		case(31):
			$("#contentF").show();
			$('#flash1').show("slide");
			$('#tmp').text(' > Wally');
		break;
		case(32):
			$("#contentF").show();
			$('#flash2').show("slide");
			$('#tmp').text(' > Alicia');
		break;
		case(4):
	   $("#contentI").show();
	   $('#prevI').show("size");
	   	  $('#tmp').text('');
		break;
	 
	}
}