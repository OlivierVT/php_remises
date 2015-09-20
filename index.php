<?php

function isyes($question){
    if($question == 'oui'){
        return 1;
    }else{
        return 0;
    }
}
//function checked($check_input){
//    if(!empty($_GET) && (isyes($questions))){
//        echo 'checked="checked"';}
//    }
    if($_GET){

        $questions = array($_GET['amsterdam'],
                           $_GET['boire'],
                           $_GET['course'],
                           $_GET['entretien'],
                           $_GET['vaiselle'],
                           $_GET['carwash']);

        $total_quest = isyes($questions[0])+
                    isyes($questions[1])+
                    isyes($questions[2])+
                    isyes($questions[3])+
                    isyes($questions[4])+
                    isyes($questions[5]);

//|| !isyes($questions[1]) || !isyes($questions[2])

    if(($total_quest < 3) ){

            echo '<div class="negative_answer">'.'<p><img src="img/get_out.gif" alt="grumpy cat dis non"></p>'."<p>". ucfirst("et puis quoi encore ? La réponse est NON.")."</p>".'</div>';

        }else if ($total_quest >= 4){

            echo '<div class="positive_answer">'.'<p><img src="img/ok_car.gif" alt="voiture qui roule"></p>'."<p>". ucfirst("bien évidemment ! Brave fils.")."</p>".'</div>';

        }else{

            echo "<p>". ucfirst("on verra plus tard, j'ai plus urgent pour le moment")."</p>";
        }

    }
?>

<!--// trouver une solution pour que si un des choix est "non", même si les autres sont = OUI ils donne une réponse négative.-->

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Je peux squat' ta caisse ?</title>
        <meta name="description" content="content">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="google" content="notranslate"/>
        <!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js">               </script>
<![endif]-->
        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
        <style>

            body{
                margin-left:30px;
            }
            .input_zone{
                background : rgba(175, 174, 174,.2);
                border: 1px solid rgba(175, 174, 174,.4);
                width: 450px;
                padding : 10px;
                display: inline-block;
                margin: 10px;
            }

            input{
                margin-left: 10px;
            }

            button{
                display: block;
                margin-left:10px;
                padding: 15px !important;
            }

            button:hover{
                background: rgb(39, 181, 39);
                color: white;
                transition: background .3s, color .3s;
            }

        </style>
    </head>
    <body>
<!--|| !isyes($questions[1]) || !isyes($questions[2])-->
    <?php
        if (!$_GET || $total_quest < 3 ){
    ?>

        <h1>Salut popa' je peux avoir la voiture pour...</h1>

    <form action="" method="GET" class="pure-form">

    <div class="input_zone">
       <p>aller à Amsterdam avec des potes</p>
        <p><label for="amsterdam" class="pure-radio">oui
            <input type="radio" name="amsterdam" value="oui" required <?php if((!empty($_GET['amsterdam']) &&($_GET['amsterdam']) =='oui') ){ echo 'checked="checked"';} ?>>
            </label>

        <label for="amsterdam" class="pure-radio">non
            <input type="radio" name="amsterdam" value="non" required <?php if((!empty($_GET['amsterdam']) &&($_GET['amsterdam']) =='non')){ echo 'checked="checked"';} ?>>
        </label>
        </p>
    </div>

   <div class="input_zone">
    <p>sortir en boite et boire avec des potes</p>
       <p><label for="boire" class="pure-radio">oui<input type="radio" name="boire" value="oui" required <?php if( (!empty($_GET['boire']) &&($_GET[ 'boire']) =='oui') ){ echo 'checked="checked"';} ?>></label>
       <label for="boire" class="pure-radio">non<input type="radio" name="boire" value="non" required <?php if( (!empty($_GET['boire']) &&($_GET[ 'boire']) =='non') ){ echo 'checked="checked"';} ?>></label></p>
    </div>

    <div class="input_zone">
       <p>faire des courses pour un barbecue avec des potes</p>
        <p><label for="course" class="pure-radio">oui<input type="radio" name="course" value="oui" required <?php if( (!empty($_GET['course']) &&($_GET[ 'course']) =='oui') ){ echo 'checked="checked"';} ?>></label>
        <label for="course" class="pure-radio">non<input type="radio" name="course" value="non" required <?php if( (!empty($_GET['course']) &&($_GET[ 'course']) =='non') ){ echo 'checked="checked"';} ?>></label></p>
    </div>
   <div class="input_zone">
    <p>conduire la soeur à un entretien</p>
       <p><label for="entretien" class="pure-radio">oui<input type="radio" name="entretien" value="oui" required <?php if( (!empty($_GET['entretien']) &&($_GET[ 'entretien']) =='oui') ){ echo 'checked="checked"';} ?>></label>
       <label for="entretien" class="pure-radio">non<input type="radio" name="entretien" value="non" required <?php if( (!empty($_GET['entretien']) &&($_GET[ 'entretien']) =='non') ){ echo 'checked="checked"';} ?>></label></p>
    </div>
    <div class="input_zone">
       <p>aller réviser mon blocus en bibliothèque</p>
       <p><label for="vaiselle" class="pure-radio">oui<input type="radio" name="vaiselle" value="oui" required <?php if( (!empty($_GET['vaiselle']) &&($_GET[ 'vaiselle']) =='oui') ){ echo 'checked="checked"';} ?>></label>
       <label for="vaiselle" class="pure-radio">non<input type="radio" name="vaiselle" value="non" required <?php if( (!empty($_GET['vaiselle']) &&($_GET[ 'vaiselle']) =='non') ){ echo 'checked="checked"';} ?>></label></p>
    </div>
    <div class="input_zone">
       <p>pour l'amener au carwash</p>
       <p><label for="carwash" class="pure-radio">oui<input type="radio" name="carwash" value="oui" required <?php if( (!empty($_GET['carwash']) &&($_GET[ 'carwash']) =='oui') ){ echo 'checked="checked"';} ?>></label>
       <label for="carwash" class="pure-radio">non<input type="radio" name="carwash" value="non" required <?php if( (!empty($_GET['carwash']) &&($_GET[ 'carwash']) =='non') ){ echo 'checked="checked"';} ?>></label></p>
    </div>
        <button type="submit" class="button-large pure-button">demander à papa la voiture</button>

    </form>
    <?php } ?>


    </body>

</html>

