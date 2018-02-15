$(document).ready(function(){
	
	$(':submit:first').click(function(){
		var vhod_slova = $('#vhod_slova').val();
		$.post("cgi-bin/analizator.py", {vhod_slova: vhod_slova}, function(data){$('#ish_slova').text(data)});
		
	});
	
	$(':submit:last').click(function(){
		var name = $('#name').val();
		var coment = $('#coment').val();
		var generator = $('#generator').prop('checked');
		
		if(generator){
			name = Math.round(Math.random() * 1000000);
		}
		
		if(name != "" && coment != ""){
			$.post("nastrComment.php", {name: name, coment: coment}, function(){
				$('#yvidomlenie').text("Ваш коментарий добавлен, вы сможете его увидеть после перезагрузки страницы.");
				$('#yvidomlenie').css('color', 'green').show()
				$('#yvidomlenie').show();
				setTimeout("$('#yvidomlenie').hide();", 3000);
				
				$('#name').val("");
				$('#coment').val("");
			});
		}
		else{
			$('#yvidomlenie').text("Заполните пожалуйста все поля");
			$('#yvidomlenie').css('color', 'red').show();
			setTimeout("$('#yvidomlenie').hide();", 3000);
		}
		
	});
	
	
});