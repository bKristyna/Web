$(document).ready(function() {

    $("#submit").submit(function(event) {
        event.preventDefault ();
        var nazev = $("#nazev").val();
        var autor = $("#autor").val();
        var obsah = $("#obsah").val();
        var kategory = $('#kategorie').find(":selected").val();
        
        var today = new Date();
var dd = String(today.getDate()).padStart(2, '0');
var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
var yyyy = today.getFullYear();

today = mm + '/' + dd + '/' + yyyy;

        var url = window.location.href; 
        url = url.replace("index.php", "insert.php");
        if( !url.includes('insert.php') ){
            url = url + 'insert.php';
        }

        $.ajax({
            type: "POST",
            url: url,
            data: {
                nazev: nazev,
                autor: autor,
                obsah: obsah,
                kategorie: kategory,
                date: today, 
                
            },
            cache: false,
            success: function(data) {
                $('#result').toggleClass ('show');
                $('input').val('');
                $('textarea').val('');
                setTimeout (() => {
                $('#result').toggleClass ('show');
                }, 5000)
            },
        });
            
    });

});

