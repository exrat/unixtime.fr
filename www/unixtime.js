$(document).ready(function () {

    var timestamp = $('input[name=timestamp]');
    var convert = $('input[name=goconvert]');

    timestamp.on('keyup', function () {

        $.post('/ajax.php', {type:'timestamp', timestamp:timestamp.val(), timezone:$('select[name=timezone]').val()}, function (html) {
            $('#resultat-timestamp').html(html);
        });

    });

    convert.on('click', function () {

        $.post('/ajax.php', {type:'date', h:$('select[name=h]').val(), m:$('select[name=m]').val(),
            s:$('select[name=s]').val(), dd:$('select[name=dd]').val(), mm:$('select[name=mm]').val(),
            yyyy:$('select[name=yyyy]').val(), timezone:$('select[name=timezone]').val()}, function (html) {

            $('#resultat-convert').html(html);

        });

    });

    timestamp.on('click', function () {

        $(this).select();

    });

});