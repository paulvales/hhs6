/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */
// require jQuery normally
const $ = require('jquery');

global.$ = global.jQuery = $;
import './sweetalert/dist/sweetalert.css'
import './sweetalert/dist/sweetalert.min'
import '../node_modules/flatpickr/dist/themes/airbnb.css'
// any CSS you import will output into a single css file (app.css in this case)
import * as mask from "jquery-mask-plugin";
import moment from "moment";

import flatpickr from "flatpickr";
import {Russian} from "flatpickr/dist/l10n/ru.js"
import jsGrid from "./jsgrid/jsgrid";
import './jsgrid/jsgrid.css';
// import './jsgrid/i18n/ru';

/*** Datepicker flatpickr settings***/
flatpickr.localize(Russian);
flatpickr.defaultConfig.dateFormat = "d.m.Y";

// window.jsGrid.locale("ru");


/*** Global settings***/

global.moment = moment;
global.mask = mask;
global.flatpickr = flatpickr;
global.dtFormat = 'DD.MM.YY HH:mm';

global.phoneFormat = '+7 (000) 000-0000';
// import dt from 'datatables.net-se'

global.dtLang = {
    "processing": "Подождите...",
    "search": "Поиск:",
    "lengthMenu": "Показать _MENU_ записей",
    "info": "Записи с _START_ до _END_ из _TOTAL_ записей",
    "infoEmpty": "Записи с 0 до 0 из 0 записей",
    "infoFiltered": "(отфильтровано из _MAX_ записей)",
    "infoPostFix": "",
    "loadingRecords": "Загрузка записей...",
    "zeroRecords": "Записи отсутствуют.",
    "emptyTable": "В таблице отсутствуют данные",
    "paginate": {
        "first": "Первая",
        "previous": "Предыдущая",
        "next": "Следующая",
        "last": "Последняя"
    },
    "aria": {
        "sortAscending": ": активировать для сортировки столбца по возрастанию",
        "sortDescending": ": активировать для сортировки столбца по убыванию"
    },
    "select": {
        "rows": {
            "_": "Выбрано записей: %d",
            "0": "Кликните по записи для выбора",
            "1": "Выбрана одна запись"
        }
    }
};

(function ($) {

    /**
     * Лоадер для кнопки, отключается автоматически как запрос завершен
     * @param callback
     */
    $.fn.buttonClick = function (callback) {
        $(this).on('click', function () {
            let button = $(this);
            button.addClass('elastic loading disabled');
            let promise = new Promise((resolve, reject) => {
                callback(resolve, reject);
            });
            promise.finally(() => {
                button.removeClass('elastic loading disabled');
            });

        })
    };

    /**
     * Собирает и формирует данные с инпутов для AJAX отправки
     * @returns {{}}
     */
    $.fn.postData = function () {
        let data = {};
        let inputs = $(this).find('input, textarea');
        $.each(inputs, function () {
            let field = $(this).attr('id') || $(this).attr('name');
            data[field] = $(this).val();
        })
        return data;
    };

    $.fn.msgerr = function (msg = false) {
        $('body').toast({
            position: 'bottom left',
            class: 'error',
            displayTime: 5000,
            message: msg || 'Ошибка'
        });
    };

    $.fn.msgok = function (msg = false) {
        $('body').toast({
            position: 'bottom left',
            class: 'success',
            displayTime: 5000,
            message: msg || 'Успешно'
        });
    };


    function _find(element, index, array) {
        if (element.id == this) {
            return element;
        }
    }

    /**
     * Поиск по ключу ID в массиве с объектами
     * @param array
     * @param id
     * @returns {{}|*}
     */
    $.fn.findID = function (array, id) {
        let find = array.find(_find, id);
        if (typeof find !== 'undefined') {
            return find;
        } else {
            console.warn(id + ' ID not found in array', array)
            return {};
        }
    };

    $.fn.visible = function() {
        return this.css('visibility', 'visible');
    };

    $.fn.invisible = function() {
        return this.css('visibility', 'hidden');
    };

    $.fn.visibilityToggle = function() {
        return this.css('visibility', function(i, visibility) {
            return (visibility == 'visible') ? 'hidden' : 'visible';
        });
    };

    $(document).ajaxError(function (event, jqxhr, settings, thrownError) {
        if(jqxhr.status === 500){
            $().msgerr();
        }
    });




}(jQuery));

