$(document).ready(function() {

	$('input[name=timestamp]').keyup(function() {
	
		$.post('/ajax.php',{'type':'timestamp','timestamp':$('input[name=timestamp]').val()},function(html) {
			$('#resultat_timestamp').html(html);
		});
	
	});
	
	$('input[name=goconvert]').click(function() {
	
		$.post('/ajax.php',{'type':'date','h':$('select[name=h]').val(),'m':$('select[name=m]').val(),'s':$('select[name=s]').val(),'dd':$('select[name=dd]').val(),'mm':$('select[name=mm]').val(),'yyyy':$('select[name=yyyy]').val()},function(html) {
			$('#resultat_convert').html(html);
		});
	
	});
	
	$('input[name=timestamp]').click(function() {
	
		$(this).select();
	
	});

});