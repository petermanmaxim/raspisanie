$(document).on('click', '#btn', function () {
    if($('#text').val() == '') {
        alert('Введите имя группы');
    }
    $.ajax({
        url: '/action.php',
        method: 'POST',
        dataType: 'HTML',
        data: {
            group: $('#text').val()
        },
        success: function (data) {
            if(data != ''){
                var array = JSON.parse(data);
                $('.td1style').html('');
                $.each(array, function (index, value) {
                    $('#' + index).html(value.Name_predmet +  '<br>' + value.Name_teach);
                });
            } else {
                alert('Ничего не наиденно');
            }
        }
    });
});