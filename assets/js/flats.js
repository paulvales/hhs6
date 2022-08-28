(function ($) {
    $('#flats').DataTable({
        "pageLength": 15,
        "language": dtLang,
        "dom": '<f<"addFlat ui blue button right floated">rtip>',
        "ajax": {
            'url': getFlatsPath,
            'dataSrc': '',
        },
        "columns": [
            {"data": "adres", "defaultContent": "-"},
            {"data": "descr", "defaultContent": "-"},
            {"data": "kom", "defaultContent": "-"},
            {"data": "priceday", "defaultContent": "-"},
            {"data": "partnerObject.name", "defaultContent": ""},
            {
                "data": "hidden",
                render: function (data, type, row, meta) {
                    if (type === 'display') {
                        var status = '';

                        switch (data) {
                            case 1:
                                status = '<a class="ui red label">Да</a>';
                                break;
                            case 0:
                                status = '<a class="ui green label">Нет</a>';
                                break;
                        }

                        return status;
                    }

                    return data;
                }
            }
        ],
        createdRow: function (row, data, dataIndex, cells) {
            $(row).data('id', data.id);
        },
        initComplete: function (settings, json) {
            flats = json
            this.api().columns().every(function () {

                var column = this;

                if ([2, 5].indexOf(column[0][0]) == -1) {
                    return;
                }
                var select = $('<select class="ui clearable selection dropdown"><option value=""></option></select>')
                    .appendTo($(column.footer()).empty())
                    .on('change', function () {
                        var val = $.fn.dataTable.util.escapeRegex(
                            $(this).val()
                        );

                        column
                            .search(val ? val : '', true, false)
                            .draw();
                    });

                if (column[0][0] == 5) {
                    select.append('<option value="1">Да</option>')
                    select.append('<option value="0">Нет</option>')
                } else {

                    var values = [];
                    column.data().unique().sort().each(function (d, j) {

                        if (column[0][0] == 5) {
                            if (d == 1) {
                                d = 'Да';
                            } else {
                                d = 'Нет';
                            }
                        }
                        values.push(d);

                    });
                    values = [...new Set(values)];
                    $.each(values, function () {
                        select.append('<option value="' + this + '">' + this + '</option>')
                    })
                }

            });
            $('.ui.dropdown').dropdown();
            $('.addFlat').text('Добавить');
            if(accessFlatsEdit){
                $('#flats > tbody > tr').on('click', function () {
                    let flat = $().findID(flats, $(this).data('id'));
                    if (!$.isEmptyObject(flat)) {
                        $.each(flat, function (key, item) {
                            if ($('#' + key).length > 0) {
                                $('#' + key).val(item)
                            }
                        })

                        $('.phone').mask(phoneFormat);
                        $('#editFlatModal .ui.dropdown').dropdown();
                        $('#editFlatModal').modal({
                            closable: false
                        }).modal('show');
                    }
                })
            }

        }
    });
}(jQuery));

$('.saveFlat').buttonClick( function(resolve, reject){
    let data = $('#editFlatModal').postData();
    console.log(data)
    $.post(saveFlatPath, data, function (msg) {
        if (msg) {
            $().msgok('Сохранено');
        }else{
            $().msgerr('Ошибка сохранения');
        }
        resolve(msg)

    }).fail(function (error) {
        $().msgerr('Ошибка сохранения');
        reject(error)
    })
});

$('.addFlat').on('click', function(){
    $('#editFlatModal input, #editFlatModal textarea').val('');
    $('#editFlatModal .dropdown').dropdown('clear');
    $('.phone').mask(phoneFormat);
    $('#editFlatModal').modal({
        closable: false
    }).modal('show');
})
