$(document).on('click', '.rowTable', function () {
  $('.delRE').addClass('d-none');
  $(this).find('.delRE').removeClass('d-none');
});

$(document).on('click', '.delRE', function () {
  $(this).parent().parent().remove();
});

$('.btnSaveNewRE').on('click', function () {
  var ele = $('.rowTable:first').clone();

  ele.find('.tdDesde').html($('#desde').val());
  ele.find('.tdHasta').html($('#hasta').val());
  ele.find('.tdImporte').html($('#importe').val());
  ele.find('.tdCarencia').html($('#carencia').val());

  $('#desde').val(0);
  $('#hasta').val(0);
  $('#importe').val(0);
  $('#carencia').val(0);

  $('.tableRE').append(ele);
});
