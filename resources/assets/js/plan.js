$(document).on('click', '.rowTable', function () {
  $('.botonesRE').addClass('d-none');
  $(this).find('.botonesRE').removeClass('d-none');
});

$(document).on('click', '.inputRe', function () {
  $('.botonesRE').addClass('d-none');
  $(this).closest('.rowTable').find('.botonesRE').removeClass('d-none').removeClass('.readonly');
  $(this).closest('.rowTable').find('.botonesRE');
});

$(document).on('click', '.editRE', function () {
  $(this).addClass('d-none');
  $(this).parent().find('.saveRE').removeClass('d-none');
  //cambiar campos a input

  var ele = $(this).parent().parent().parent();

  ele.find('.tdDesde').find('input').removeAttr('readonly').removeClass('readonly');
  ele.find('.tdHasta').find('input').removeAttr('readonly').removeClass('readonly');
  ele.find('.tdImporte').find('input').removeAttr('readonly').removeClass('readonly');
  ele.find('.tdCarencia').find('input').removeAttr('readonly').removeClass('readonly');
});

$(document).on('click', '.saveRE', function () {
  $(this).addClass('d-none');
  $(this).parent().find('.editRE').removeClass('d-none');

  var ele = $(this).parent().parent().parent();

  ele.find('.tdDesde').find('input').attr('readonly', true).addClass('readonly');
  ele.find('.tdHasta').find('input').attr('readonly', true).addClass('readonly');
  ele.find('.tdImporte').find('input').attr('readonly', true).addClass('readonly');
  ele.find('.tdCarencia').find('input').attr('readonly', true).addClass('readonly');
});

$(document).on('click', '.delRE', function () {
  $(this).parent().parent().parent().remove();
});

$('.btnSaveNewRE').on('click', function () {
  var ele = $('.rowTable:first').clone();

  var rowAdd = $(this).parent().parent().parent();

  ele.find('.tdDesde').find('input').val($(this).parent().parent().parent().find('#addDesde').val());
  ele.find('.tdHasta').find('input').val($(this).parent().parent().parent().find('#addHasta').val());
  ele.find('.tdImporte').find('input').val($(this).parent().parent().parent().find('#addImporte').val());
  ele.find('.tdCarencia').find('input').val($(this).parent().parent().parent().find('#addCarencia').val());

  $('.active').find('#addDesde').val(0);
  $('.active').find('#addHasta').val(0);
  $('.active').find('#addImporte').val(0);
  $('.active').find('#addCarencia').val(0);

  $(this).parent().parent().parent().parent().parent().parent().find('.tableRE').append(ele);
});

$(document).on('click', '.addRowRe', function () {
  var ele = $('.active').find('.addRe');

  if (ele.hasClass('d-none')) {
    ele.removeClass('d-none');
  } else {
    ele.addClass('d-none');
  }
});

$(document).on('click', '.addPlan', function () {
  console.log($(this).html());
  console.log($('.cuentasHeader').find('navbar-brand').html());

  $('.cuentasHeader').find('.navbar-brand').html($(this).html());
});
