String.prototype.capitalize = function () {
    return this.charAt(0).toUpperCase() + this.slice(1);
}

/*$('body, html').mouseleave(function () {
    console.log('You are exit');
});*/
$(".button").click(function () {
    $("html,body").animate({
        scrollTop: $('.tap-our').offset().top
    }, 500);
});

function height_Content() {
    $('.afterContactReletive').height($('#portfolio-wrap').position().top);
}


function triangle_white() {
    var hw = document.documentElement.clientHeight;
    var height_window = hw / 20;
    var ww = document.documentElement.clientWidth;
    $('.triangle-color').css('border-top', height_window + "px solid white");
    $('.triangle-color').css('border-right', ww + 'px solid transparent');
}
triangle_white();
$(window).resize(function () {
    triangle_white();
});

function auto_grow(element) {
    element.style.height = "50px";
    element.style.height = (element.scrollHeight) + "px";
}
/************************************* Validation Form ********************************************/
var drop = $("input#files");
drop.on('dragenter', function (e) {
    $(".drop").css({
        "border-botton": "3px solid white",
        "background": "rgba(0, 153, 255, .05)"
    });
    $(".cont").css({
        "color": "#09f"
    });
}).on('dragleave dragend mouseout drop', function (e) {
    $(".drop").css({
        "border-botton": "3px solid white",
        "background": "transparent"
    });
    $(".cont").css({
        "color": "#8E99A5"
    });
});



// Переменная куда будут располагаться данные файлов

var files;

// Вешаем функцию на событие
// Получим данные файлов и добавим их в переменную

$('input[type=file]').change(function () {
    files = this.files;
});

// Вешаем функцию ан событие click и отправляем AJAX запрос с данными файлов

$('.submit').click(function (event) {
    event.stopPropagation(); // Остановка происходящего
    event.preventDefault(); // Полная остановка происходящего

    // Создадим данные формы и добавим в них данные файлов из files

    var data = new FormData();
    $.each(files, function (key, value) {
        data.append(key, value);
    });

    // Отправляем запрос

    $.ajax({
        url: './submit.php?uploadfiles',
        type: 'POST',
        data: data,
        cache: false,
        dataType: 'json',
        processData: false, // Не обрабатываем файлы (Don't process the files)
        contentType: false, // Так jQuery скажет серверу что это строковой запрос
        success: function (respond, textStatus, jqXHR) {

            // Если все ОК
            if (typeof respond.error === 'undefined') {
                // Файлы успешно загружены, делаем что нибудь здесь

                // выведем пути к загруженным файлам в блок '.ajax-respond'

                var files_path = respond.files;
                var html = '';
                $.each(files_path, function (key, val) {
                    html += val + '<br>';
                })
                $('.ajax-respond').html(html);
            } else {
                console.log('ОШИБКИ ОТВЕТА сервера: ' + respond.error);
            }
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log('ОШИБКИ AJAX запроса: ' + textStatus);
        }
    });

});


function changeInput() {
        if ($('#userName').val() != "" && $('#userEmail').val() != "" && $('#userEmail').val().indexOf("@") > -1 && $("#content").val() !== "") {
            $(".button_click").removeAttr('disabled').css('border', 'rgba(255, 255, 255, 1) !important');
        } else {
            $(".button_click").attr('disabled', true).css('border', 'rgba(255, 255, 255, 0.1) !important');
        }
    }




$('input[type="file"]').on('change', function (event, files, label) {
    var file_name = this.value.replace(/\\/g, '/').replace(/.*\//, '')
    $('.file_attached').text(file_name);

    if ($('form input[type=file]').val() !== '') {
        var fileInput = $("#files")[0].files[0].size;
        if (fileInput > 2000000) {
            $('.file_size').html('Your file is larger than 2 MB');
            $(".button_click").attr('disabled', true).css('border', 'rgba(255, 255, 255, 0.1) !important');

        } else {
            $('.file_size').html('');
            changeInput();
            
        }
    }
});



function getFrameByName(name) {
    for (var i = 0; i < frames.length; i++)
        if (frames[i].name == name)
            return frames[i];

    return null;
}

function uploadDone(name) {
    var frame = getFrameByName(name);
    if (frame) {
        ret = frame.document.getElementsByTagName("body")[0].innerHTML;
        if (ret.length) {
            var json = eval("(" + ret + ")");
        }
    }
}


$(document).ready(function () {

    var IE = '\v' == 'v';
    if (IE) {
        $('header .content .text-block h2').css('font-family', 'BebasNeueRegular');
    }
    navigator.sayswho = (function () {
        var ua = navigator.userAgent,
            tem,
            M = ua.match(/(opera|chrome|safari|firefox|msie|trident(?=\/))\/?\s*([\d\.]+)/i) || [];
        if (/trident/i.test(M[1])) {
            tem = /\brv[ :]+(\d+(\.\d+)?)/g.exec(ua) || [];
            return 'IE ' + (tem[1] || '');
        }
        M = M[2] ? [M[1], M[2]] : [navigator.appName, navigator.appVersion, '-?'];
        if ((tem = ua.match(/version\/([\.\d]+)/i)) != null) M[2] = tem[1];
        return M.join(' ');
    })();


    if (navigator.sayswho == 'IE 11.0') {
        $('header .content .text-block h2').css('font-family', 'BebasNeueRegular');
    }


    $("#subject").val('Request for developers at Outsoft');
    var filesInsert;
    jQuery('form').submit(function () {
        //If form without file
        filesInsert = 'Without file';
        if ($('form input[type=file]').val() !== '') {
            //Send file
            event.stopPropagation(); // Остановка происходящего
            event.preventDefault(); // Полная остановка происходящего
            // Создадим данные формы и добавим в них данные файлов из files
            var data = new FormData();
            $.each(files, function (key, value) {
                data.append(key, value);
            });
            // Отправляем запрос
            $.ajax({
                url: './submit.php?uploadfiles',
                type: 'POST',
                data: data,
                cache: false,
                dataType: 'json',
                processData: false, // Не обрабатываем файлы (Don't process the files)
                contentType: false, // Так jQuery скажет серверу что это строковой запрос
                success: function (respond, textStatus, jqXHR) {
                    // Если все ОК
                    if (typeof respond.error === 'undefined') {
                        // Файлы успешно загружены, делаем что нибудь здесь

                        // выведем пути к загруженным файлам в блок '.ajax-respond'

                        var files_path = respond.files;
                        var html = '';
                        $.each(files_path, function (key, val) {
                            html += val + '<br>';
                        })
                        $('.ajax-respond').html(html);
                    } else {
                        console.log('ОШИБКИ ОТВЕТА сервера: ' + respond.error);
                    }
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.log('ОШИБКИ AJAX запроса: ' + textStatus);
                }
            });
            filesInsert = 'Files: http://kiev.baracuda.dp.ua/uploads/' + $('.file_attached').text();
        }
        

        var valid = validateContact();
        var contentURL = $('#userPhone').val() + '\n' + $('#content').val() + '\n' + 'Phone: ' + 'URL:' + location.href + '\n' + filesInsert + '\n' + 'IP: ';
        var formData = {
            userName: $("#userName").val(),
            userEmail: $("#userEmail").val(),
            content: contentURL,
            subject: $("#subject").val()
        };
        if (valid) {
            $('.after_contact').show(100);
            jQuery.ajax({
                url: "contact-form.php",
                data: formData,
                type: "POST",
                success: function () {
                    location.href = 'http://resume.outsoft.com/thank-you.html';
                },
                error: function (xhr, status, error) {
                    alert(xhr.responseText + '|\n' + status + '|\n' + error);
                }

            });

        }
        return false;
    });


    function validateContact() {
        var valid = true;
        if ($("#userEmail").val() == '') {
            valid = false;
        }
        if ($("#userName").val() == '') {
            valid = false;
        }
        if ($("#content").val() == '') {
            valid = false;
        }
        return valid;
    }


    $('#userEmail, #userName, #content').change(function () {
        changeInput();
    });

    $('#userName').change(function () {
        if ($('#userName').val() != "") {
            $(this).css('border-color', '#fff');
        } else {
            $(this).css('border-color', '#ff673e');
        }
    });

    $('#userEmail').change(function () {
        if ($("#userEmail").val() !== '' && $('#userEmail').val().indexOf("@") > -1) {
            $(this).css('border-color', '#fff');
        } else {
            $(this).css('border-color', '#ff673e');
        }
    });

    $('#content').keydown(function () {
        changeInput();
    });
    
    jQuery('#filters a').click(function () {
        jQuery('#filters a').removeClass('active');
        jQuery(this).addClass('active');
        var selector = jQuery(this).attr('data-filter');
        $('#portfolio-wrap').isotope({
            filter: selector
        });
        return false
    });
});