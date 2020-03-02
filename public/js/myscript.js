$(function () {
  $(document).on('click', '#addtocart', function (e) {
    var id = $(this).data('id');
    $.ajax({
      headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
      type: 'POST',
      url: '/product/add',
      data: {
        id: id,
      },
      success: function () {
        $('#incart').show();
        $('#addtocart').hide();
      }
    });
  });

});