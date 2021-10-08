function GetCine()
{
    $.ajax
    (
        {
            //appel à un script PHP
            url:"../PHP/GetCine.php",
            success: function(data)
            {
                $('#divCine').append(data);
            },
            error: function()
            {
                alert("Erreur sur l'appel des catégories");
            }
        }
    );
}

function GetFilms(codeCine)
{
    $.ajax
    (
        {
            method:"get",
            url:"../PHP/GetFilms.php",
            data:"numCine="+codeCine,
            success: function(donnees)
            {
                $('#divFilms').empty();
                $('#divFilms').append(donnees);
            },
            error: function()
            {
                alert("Erreur sur la page jeux");
            }
        }
    )
}