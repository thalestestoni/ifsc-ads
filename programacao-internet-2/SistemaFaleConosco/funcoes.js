function abrirUrl(url, divId, idOpcao){
  // Remove as classes das opções da página
  $('ul li').each(function(i)
  {
    console.log($(this).attr('class', "")); 

  });

  $.get(url, function(data, status){
        document.getElementById(divId).innerHTML = data;
        $("#"+idOpcao).attr('class', 'active');
        console.log($(idOpcao))
		});

  if (idOpcao === 'opcaoMensagens') {
    listarMensagens();
  }
}


function salvarForm(){
	  var formulario = $("#formTeste");
    var url = formulario.attr('action');

    $.ajax({
      type: "POST",
      url: url,
		  dataType:'json',
      data: formulario.serialize(), // serializa os elementos do formulario.
      success: function(data) {
        console.log(data);
				alert(data.msg); // Mostra a resposta do PHP - apenas para teste.
			   if(data.result == true){
				   formulario.trigger('reset');
			   }
      },
      error: function(_, exception) {
        console.log(_);
        console.log(exception);
      }
  });
}

function listarMensagens() {
  $.ajax({
    type: 'GET',
    url: 'listaMensagens.php',
    success: function(data) {
      const mensagens = JSON.parse(data);

      let listaMensagens = document.getElementById('lista-mensagens');

      mensagens.forEach(mensagem => {
        let li = document.createElement("li");
        li.innerText = mensagem;
        listaMensagens.appendChild(li);
      });
    }
  })
}