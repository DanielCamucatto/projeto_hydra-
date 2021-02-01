$(document).ready(function(){
  var botao = $(".click");

  //ação de clicar no botão +1
  botao.on("click", function(){
       var numero = 1;
       $.ajax({
             url: "processa.php",
             data: {valor: numero},
             dataType: "HTML",
             method: "GET"
       }).done(function(retorno){
                alert(retorno);   
       }).fail(function(retorno){
             alert(retorno);
       });

  }); 
});

// var count = 0;
// $(".click").click(function() {
//   count++;
//   $(".click").css('opacity', "0.7");
//   $("#totalLike").html(count);
//   $(this).off(event);
//   if(count === 1){
//     $(this).off(count == 0);
//   }
// });


// var count2 = 0;
// $(".click2").click(function() {
//   count2++;
//   $(".click2").css('opacity', "0.7");
//   $("#totalLike2").html(count2);
//   // $(this).off(event);
  
//   if(count2 === 1){
//     $(this).off(count2 == 0);
//   }
// });
