(function($){
  $(function(){

    $('.sidenav').sidenav();
    $('.parallax').parallax();
    $('.datepicker').datepicker();

  }); // end of document ready
})(jQuery); // end of jQuery name space

$(".dropdown-trigger").dropdown();

//tab function Materialize
$(document).ready(function(){
  $('.tabs').tabs()
});

//select fonction Materialize
$(document).ready(function(){
  $('select').formSelect();
});

//autocomplete function Materialize
$(document).ready(function(){
  $('input.autocomplete').autocomplete({
    data: {
      "Marne-la-Vallée": null,
      "Osny": null,
      "Cergy Préfecture": null,
      "Nanterre": null,
      "Monaco" : null,
      "Minas Tirith" : null,
    },
  });
});

//Modal function Materialize
$(document).ready(function(){
  $('.modal').modal();
});

//Media function Materialize
$(document).ready(function(){
  $('.materialboxed').materialbox();
});