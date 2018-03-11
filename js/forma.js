
$(".order__form-button").on("click", function (e) {
    e.preventDefault();
   // console.log("vlivk");

    $.ajax({
        url: 'ajax.php',
        type:'post',
        // data:{
        //     id:superperemenaya
        // },
        data:$('#order-form').serialize()
        //dataType:'json'
    }).done(function (resultat) {
         console.log(resultat)
        // console.log(resultat.name);
        // console.log(resultat.email);
        // $("#result").html(resultat.name + ' ' + resultat.email);
    })


});