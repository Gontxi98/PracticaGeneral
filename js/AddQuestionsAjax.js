$(document).ready(function(){
    $('#enviar').click(function(){
     var url = '../php/AddQuestionWithImage.php';
     var form = $('#fquestion').serialize();
     alert(form);
        $.ajax({
            type: 'post',
            url: url,
            data: form,
            success: function(){
            $('#mensaje').html('<strong>Pregunta insertada correctamente.</strong>');
        },
        error: function(){
            $('#mensaje').html('<strong>Error al añadir la pregunta.</strong>');
        }
        });
    });
});