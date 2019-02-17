
$(function(){
	// Cria uma div.paginas que receberá os paginadores
        var div = $('<div></div>').addClass('paginas');
        // Insere a div criada antes da lista de destaques
        $('.slider ul').after(div);

	
	$('.slider ul').cycle({
		
		pager: 'div.paginas', // Paginadores
        pause: true, // Pausa ao passar o mouse sobre ele?
        pauseOnPagerHover: true

	});
})