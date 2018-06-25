<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--    twitter-->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:creator" content="@PeltosR">
    <meta name="twitter:title" content="Do you have a funko problem?">
    <meta name="twitter:description" content="Do you have a funko problem? Click here to find out">
    <meta name="twitter:image" content="http://ithinkimighthaveafunkoproblem.nl/img/pop-addict.png">

    <title>I think i might have a funko problem</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style/style.css"/>
</head>

<body>
<div id="container" class="container">
    <div class="container--cover">
        <img class="container--cover__image" src="img/pop-addict.png">
    </div>
    <h1 class="container--header">i think i might have a funko problem</h1>
    <p class="container--funkoproblem">Do you have a funko problem?<br> Insert total amount of funko's in your collection here</p>
    <form class="container--form">
        <input id="target" class="container--form__input" type="number" value="0">
    </form>
    <p id="result" class="container--result"></p>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
    $("#target").keyup(function (event) {
        if ( $("#target").val()  < 30 ) {
            $("#result").removeClass( "yes no maybe hellyes" );
            $("#container").removeClass( "yes no maybe hellyes" );
            $("#result").addClass( "no" );
            $("#container").addClass( "no" );
        }else if( ($("#target").val()  >= 30) && ( $("#target").val()  < 100 ) ){
            $("#result").removeClass( "yes no maybe hellyes error" );
            $("#container").removeClass( "yes no maybe hellyes" );
            $("#result").addClass( "maybe" );
            $("#container").addClass( "maybe" );
        }else if( ($("#target").val()  >= 100) && ( $("#target").val()  < 500 )  ){
            $("#result").removeClass( "yes no maybe hellyes error" );
            $("#container").removeClass( "yes no maybe hellyes" );
            $("#result").addClass( "yes" );
            $("#container").addClass( "yes" );
        }else if( $("#target").val()  >= 500 ){
            $("#result").removeClass( "yes no maybe hellyes error" );
            $("#container").removeClass( "yes no maybe hellyes" );
            $("#result").addClass( "hellyes" );
            $("#container").addClass( "hellyes" );
        }else{
            $("#result").removeClass( "yes no maybe hellyes error" );
            $("#container").removeClass( "yes no maybe hellyes" );
            $("#result").addClass( "error" );
            $("#container").addClass( "error" );
        }
    });
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-46484367-4"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-46484367-4');
</script>

</body>
</html>