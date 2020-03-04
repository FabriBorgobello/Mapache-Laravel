//update cantidad de item del carro

$(".btn-update-item").on('click', function(e){ //al click se dispara la funcion
  e.preventDefault(); //quita func predeterminada

  var id= $(this).data('id'); // getid
  var href= $(this).data('href'); // url
  var cantidad=$("#producto_"+id).val(); //cantidad q esta en el i del tipo number
//redireccionar
  window.location.href= href+"/"+ cantidad;

});
