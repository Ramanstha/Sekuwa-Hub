$(function() {
    $('.sitesetting').change(function() {
        var sitesettingstatus = $(this).prop('checked') == true ? 1 : 0;
        var sitesetting_id = $(this).data('id');
        $.ajax({
            type: "GET",
            dataType: "json",
            url: '/sitesetting-status',
            data: {'sitesettingstatus': sitesettingstatus, 'sitesetting_id': sitesetting_id},
            success: function(data){
             window.location.reload();
            }
        });
    })
  })