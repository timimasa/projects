$("ul").on("click", "li", function() {
  $(this).toggleClass("completed");
});

//Click on X to delete todo
$("ul").on("click", "span", function(e) {
  $(this).parent().fadeOut(500, function(){
    $(this).remove();
  });
  event.stopPropagation;
});

$("input[type='text']").keypress(function(e){
  if(event.which === 13){
    var todoText = $(this).val();
    $(this).val("");
    $("ul").append("<li><i class='fas fa-trash'></i> " + todoText + "</li>")
  }
});

$(".fa-plus-circle").click(function() {
  $("input[type='text']").fadeToggle();
});