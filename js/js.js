$('li').on('click', this, function() {
	$(this).toggleClass('completed');

	$.post('done.php', 
		{id: $(this).attr('id')},
		function(data, status){
	});
});


$('#newTask').keypress(function(event) {

	if (event.which == 13){
		var todoText = $(this).val();
		$(this).val('');
		
		$.post('create.php', {task: todoText}, function(data, status) {
			$('ul').append('<li id="' +data+ '"><span><i class="fa fa-trash"></i></span> '+todoText+'</li>');
		});
		$('#message').css({opacity: '1'});
	}
});


$('#newTask').click(function() {
	$('#message').css({opacity: ''});
	$('#delete').css({opacity: ''});
	$('.fa-trash-o').removeClass('animated shake');
});


$('ul').on('click', 'span', function(event) {
	$(this).parent().fadeOut(300, function() {
		$(this).remove();
	});

	$.post('delete.php', {id: $(this).parent().attr('id')}, function(data, status) {
	});

	$('.fa-trash-o').addClass('animated shake');

	$('#delete').css({opacity: '1'});
	$('#message').css({opacity: ''});
});


$('li').hover(function() {
	$('.fa-trash-o').removeClass('animated shake');
}, function() {
	
});