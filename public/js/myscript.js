$(function () {
  $(document).on('click', '#addtocart', function () {
    var id = $(this).data('id');
    $.ajax({
      headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
      type: 'POST',
      url: '/cart/add',
      data: {
        id: id,
      },
      success: function () {
        $('#incart').show();
        $('#addtocart').hide();
      }
    });
  });

  $(document).on('click', '.delete', function () {
    var id = $(this).data('id');
    $.ajax({
      headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
      type: 'POST',
      url: '/cart/delete',
      data: {
        id: id,
      },
      success: function () {
        location.reload();
      }
    });
  });

  $(document).on('click', '.add', function () {
    var id = $(this).data('id');
    $.ajax({
      headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
      type: 'POST',
      url: '/cart/update',
      data: {
        id: id,
        button: true,
      },
      success: function (r) {
        location.reload();
      }
    });
  });

  $(document).on('click', '.minus', function () {
    var id = $(this).data('id');
    $.ajax({
      headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
      type: 'POST',
      url: '/cart/update',
      data: {
        id: id,
        button: false,
      },
      success: function () {
        location.reload();
      }
    });
  });

});