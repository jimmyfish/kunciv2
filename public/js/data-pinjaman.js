$(function () {

    var selection = $('#nama_pengguna'),
        kunciSelection = $('#nama_kunci'),
        kunciContainer = $('#kunci-container'),
        errorSpan = $('#error'),
        inpSubmit = $('input[type=submit]');
    
    selection.on('change', function () {
        var penggunaId = $('#nama_pengguna').find(':selected').val();

        $.ajax({
            url: "/api/kunci-result/"+penggunaId,
            type: "GET",
            success: function (data) {
                var htmlan = "";
                if (data.length > 0) {
                    $.each(data, function (key, item) {
                        kunciContainer.removeClass('hide');
                        kunciSelection.find('option').remove();
                        kunciSelection.removeAttr('disabled');
                        errorSpan.addClass('hide');
                        inpSubmit.removeAttr('disabled');
                        htmlan += "<option value='"+ item.id +"'>"+ item.nama_lokasi + "-"+ item.keterangan +"</option>";
                    });
                    kunciSelection.html(htmlan);
                } else {
                    kunciContainer.removeClass('hide');
                    errorSpan.removeClass('hide');
                    errorSpan.text('Kunci Belum dikembalikan');
                    inpSubmit.attr('disabled', 'disabled');
                    kunciSelection.attr('disabled', 'disabled');
                }
            }
        })
    });
});