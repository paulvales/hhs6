
$('#users').DataTable({
    "pageLength": 15,
    "language": dtLang,
    "dom": '<f<"addUser ui blue button right floated">rtip>',
    initComplete: function () {
        this.api().columns().every(function () {

            var column = this;

            if ([1, 4, 6].indexOf(column[0][0]) == -1) {
                return;
            }
            var select = $('<select class="ui clearable selection dropdown"><option value=""></option></select>')
                .appendTo($(column.footer()).empty())
                .on('change', function () {
                    var val = $.fn.dataTable.util.escapeRegex(
                        $(this).val()
                    );

                    column
                        .search(val ?  val : '', true, false)
                        .draw();
                });

            var values = [];
            column.data().unique().sort().each(function (d, j) {
                if (d.length > 0) {
                    d = d.replace(/(<([^>]+)>)/ig, "");
                    d = d.split(',');
                    $.each(d, function () {
                        values.push(this);
                    })
                }

            });
            values = [...new Set(values)];

            $.each(values, function () {
                select.append('<option value="' + this + '">' + this + '</option>')
            })
        });
        $('.ui.dropdown').dropdown();
        $('.addUser').text('Добавить')
    }
});

let skipField = ['password'];
let dropdownField = ['roles', 'dtend', 'partner'];

$('.editUser').on('click', function(){
    $('.saveUser').text('Сохранить');
    let idUser = $(this).data('iduser');
    console.log(users[idUser])
    $.each(users[idUser], function (key, item) {
        if($('#'+key).length > 0 && skipField.indexOf(key) == -1){
            if(key == 'birth'){
                if(item !== null && moment(item.date).isValid()){
                    item = moment(item.date).format('DD.MM.YYYY');
                    $("#birth").flatpickr({
                        defaultDate: item
                    });
                }
            }
            if(key == 'dtend'){
                item = item ? 1:0;
            }

            $('#'+key).val(item)
        }
    })

    $('#editUserModal .ui.dropdown').dropdown();
    $('#editUserModal').modal({
        closable: false
    }).modal('show');
})

$('.saveUser').buttonClick( function(resolve, reject){
    let data = $('#editUserModal').postData();
    console.log(data)
    $.post(saveUserPath, data, function (msg) {
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

$('.addUser').on('click', function(){
    $('.saveUser').text('Добавить');
    $("#birth").flatpickr();
    $('#editUserModal .ui.dropdown').dropdown();
    $('#editUserModal').modal({
        closable: false
    }).modal('show');
})

// $('.deleteUser').buttonClick( function(resolve, reject){
//     swal({
//         title: "Удалить пользователя?",
//         text: "Once deleted, you will not be able to recover this imaginary file!",
//         icon: "warning",
//         buttons: true,
//         dangerMode: true,
//     })
//         .then((willDelete) => {
//             if (willDelete) {
//                 swal("Poof! Your imaginary file has been deleted!", {
//                     icon: "success",
//                 });
//             } else {
//                 swal("Your imaginary file is safe!");
//             }
//         });
//     let data = $('#editUserModal').postData();
//     console.log(data)
//     $.post(saveUserPath, data, function (msg) {
//         if (msg) {
//             $().msgok('Сохранено');
//         }else{
//             $().msgerr('Ошибка сохранения');
//         }
//         resolve(msg)
//
//     }).fail(function (error) {
//         $().msgerr('Ошибка сохранения');
//         reject(error)
//     })
// });