/**
 * jQuery плагин choosen для организации автокомплита
 * @see https://github.com/harvesthq/chosen
 * Автокомлит с Ajax загрузкой элементов
 */

$('.chzn-choices input').autocomplete({
source: function( request, response ) {
  $.ajax({
      url: "/change/name/autocomplete/"+request.term+"/",
      dataType: "json",
      beforeSend: function(){$('ul.chzn-results').empty();},
      success: function( data ) {
         response( $.map( data, function( item ) {
            $('ul.chzn-results').append('<li class="active-result">' + item.name +       '</li>');

      }
   });
}
});
