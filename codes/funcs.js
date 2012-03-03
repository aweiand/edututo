function abrePag(asd){
	 $.ajax({
	   beforeSend: function(){
	  $('#centro').html = "processando...";
	},
      url:asd,
      success: function(result){
        $('#centro').html(result);  
      },
	    statusCode: {404: function() {
        $('#centro').html('página não encontrada...'); 
  }}
       })
} 


function carPag (pag)
{
	$.ajax({
		beforeSend: function(){
	$('#centro').html = ("processando...");
		},
	    url:pag,
		success: function (result){
		$('#centro').html(result);
      },
	    statusCode: {404: function() {
        $('#centro').html('página não encontrada...'); 
  }}
       })
}

function mostraTab ()
{
	var nome;
	nome=document.getElementById('selTabu').value;
	$.ajax({
		beforeSend: function(){
	$('#tabuadas').html = ("processando...");
		},
	    url:'pg/'+nome,
		success: function (result){
		$('#tabuadas').html(result);
      },
	    statusCode: {404: function() {
        $('#tabuadas').html('página não encontrada...'); 
  }}
       })
}

function mostraExer (nome)
{
	$.ajax({
		beforeSend: function(){
	$('#exercs').html = ("processando...");
		},
	    url:'pg/'+nome,
		success: function (result){
		$('#exercs').html(result);
      },
	    statusCode: {404: function() {
        $('#exercs').html('página não encontrada...'); 
  }}
       })
}