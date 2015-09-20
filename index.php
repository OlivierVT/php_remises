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

            echo '<div class="negative_answer">'."<p>". ucfirst("NOPE... $&@#è!*% punk")."</p>".'<img src="img/get_out.gif" alt="grumpy cat dis non">'.'</div>';

        }else if ($total_quest >= 4){

            echo '<div class="positive_answer">'.'<img src="img/ok_car.gif" alt="voiture qui roule">'."<p>". ucfirst("bien évidemment ! Brave fils.")."</p>".'</div>';

        }else{

            echo '<div class="maybe_answer">'.'<img src="img/maybe.gif" alt="christian bale maybe">'."<p>". ucfirst("On verra... peut être...")."</p>".'</div>';
        }

    }
?>

<!--// trouver une solution pour que si un des choix est "non", même si les autres sont = OUI ils donne une réponse négative.-->

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Exercice 1 || Emprunter une voiture</title>
        <meta name="description" content="content">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="google" content="notranslate"/>
        <!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js">               </script>
<![endif]-->
        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
        <style>

            body{

                color:rgba(52, 73, 94,1.0);
            }

            header{
                background:rgba(189, 195, 199,.2);
                height:100px;
                padding:20px;
                margin-bottom:50px;
                position:relative;

            }



            .positive_answer{
                width:100%;
                height: 100%;
                border: 2px solid rgba(22, 160, 133,1.0);
                overflow:hidden;
                position: relative;
            }

            .positive_answer p{
                z-index:5;
                position: absolute;
                background:rgba(22, 160, 133,.5);
                padding:10px;
                bottom:0;
                margin:0;
                width:100%;
                text-align:center;
                color:rgba(236, 240, 241,1.0);
            }

            .positive_answer img{
                width:100%;
                height:100%;

                z-index:4;
            }

            .negative_answer{
                width:100%;
                height:312px;
                border:2px solid rgba(231, 76, 60,1.0);
                overflow:hidden;
                position:relative;
            }

            .negative_answer p{
                z-index:5;
                position: absolute;
                background:rgba(231, 76, 60,.5);
                padding:10px;
                bottom:0;
                margin:0;
                width:100%;
                text-align:center;
                color:rgba(236, 240, 241,1.0);
            }

            .negative_answer img{
                width:100%;
                position:relative;
                top:-75%;
                z-index:4;
            }

            .maybe_answer{
                 width:100%;
                height:312px;
                border:2px solid rgba(230, 126, 34,1.0);
                overflow:hidden;
                position:relative;
            }

            .maybe_answer p{
                z-index:5;
                position: absolute;
                background:rgba(230, 126, 34,.7);
                padding:10px;
                bottom:0;
                margin:0;
                width:100%;
                text-align:center;
                color:rgba(236, 240, 241,1.0);
            }

            .maybe_answer img{
                width:100%;
                position:relative;
                top:-45%;
                z-index:4;
            }


            h1{
                margin-top:0;
                position: relative;
                top:50%;
                left:25%;
                transform: translateY(-50%);
            }

            form{
                width: 1200px;
                margin: 0 auto;
                margin-bottom:50px;
            }

            .input_zone{
/*                display:inline-block;*/
                margin-bottom:50px;
                margin-right:10px;
                border: 1px solid rgba(44, 62, 80,1.0);
                padding:20px;
            }

            .input_zone legend{
                background:rgba(44, 62, 80,.5);
                padding:10px;
                border: 1px solid rgba(44, 62, 80,1.0);
                color: rgba(236, 240, 241,1.0);
            }

            .input_zone input{
                margin-right: 10px;
            }

            .input_zone label{
                margin-right: 30px;
            }

            sup{
                color:rgba(236, 240, 241,1.0);
            }

            .btn_link{
                position:absolute;
                right:0;
                top:0px;
                background:rgba(26, 188, 156,1.0);
                padding:15px;
                color:rgba(236, 240, 241,1.0);
                text-decoration:none;
            }

            .btn_form{
                display: block;
                padding: 15px ;
                background:rgba(236, 240, 241,1.0);
                border: none;
                transition: background .3s, color .3s;
            }

            .btn_form:hover{
                background: rgba(22, 160, 133,1.0);
                color: white;

            }

            footer{

                background:rgba(52, 73, 94,.5);
                color:rgba(236, 240, 241,1.0);
                padding: 20px;
                width:100%;
                text-align:center;
            }

            footer a{
                color:rgba(236, 240, 241,1.0);
                text-decoration:none;
                transition: background .3s, color .3s;
            }

            footer a:hover{
                color:rgba(52, 73, 94,.5);
            }

        </style>
    </head>
    <body>
<!--|| !isyes($questions[1]) || !isyes($questions[2])-->
    <?php
        if (!$_GET || $total_quest <= 3 ){
    ?>
        <header>

            <h1>Salut papa je peux avoir la voiture...</h1>
            <a href="https://github.com/OlivierVT/php_remises" class="btn_link">Voir le code sur Github</a>
        </header>


    <form action="" method="GET">

    <fieldset class="input_zone">
       <legend>J'aimerais aller à Amsterdam avec des potes<sup>*</sup></legend>
        <input id="amsterdam" type="radio" name="amsterdam" value="oui" required <?php if((!empty($_GET['amsterdam']) &&($_GET['amsterdam']) =='oui') ){ echo 'checked="checked"';} ?>><label for="amsterdam" class="pure-radio">pour aller voir Dave en concert. </label>

        <input id="amsterdam_2" type="radio" name="amsterdam" value="non" required <?php if((!empty($_GET['amsterdam']) &&($_GET['amsterdam']) =='non')){ echo 'checked="checked"';} ?>><label for="amsterdam_2" class="pure-radio">expérimenter une végétation exotique.

        </label>

    </fieldset>

   <fieldset class="input_zone">
    <legend>je compte sortir en boite<sup>*</sup></legend>
       <input id="boire" type="radio" name="boire" value="oui" required <?php if( (!empty($_GET['boire']) &&($_GET[ 'boire']) =='oui') ){ echo 'checked="checked"';} ?>><label for="boire" class="pure-radio">et boire un tit Yop</label>
       <input id="boire_2" type="radio" name="boire" value="non" required <?php if( (!empty($_GET['boire']) &&($_GET[ 'boire']) =='non') ){ echo 'checked="checked"';} ?>><label for="boire_2" class="pure-radio">et payer la tournée</label>
    </fieldset>

    <fieldset class="input_zone">
       <legend>faire des courses<sup>*</sup></legend>
        <input id="course" type="radio" name="course" value="oui" required <?php if( (!empty($_GET['course']) &&($_GET[ 'course']) =='oui') ){ echo 'checked="checked"';} ?>><label for="course" class="pure-radio">du coté de chez Swan</label>
        <input id="course_2" type="radio" name="course" value="non" required <?php if( (!empty($_GET['course']) &&($_GET[ 'course']) =='non') ){ echo 'checked="checked"';} ?>><label for="course_2" class="pure-radio">probablement à Amsterdam</label>
    </fieldset>

   <fieldset class="input_zone">
    <legend>conduire la soeur à un entretien<sup>*</sup></legend>
       <input id="entretien" type="radio" name="entretien" value="oui" required <?php if( (!empty($_GET['entretien']) &&($_GET[ 'entretien']) =='oui') ){ echo 'checked="checked"';} ?>><label for="entretien" class="pure-radio">et l'attendre sur place</label>
       <input id="entretien_2" type="radio" name="entretien" value="non" required <?php if( (!empty($_GET['entretien']) &&($_GET[ 'entretien']) =='non') ){ echo 'checked="checked"';} ?>><label for="entretien_2" class="pure-radio">ah, parce qu'il faut la ramener aussi ?!?</label>
    </fieldset>

    <fieldset class="input_zone">
       <legend>aller réviser mon blocus en bibliothèque<sup>*</sup> <sup></sup></legend>
       <input id="vaiselle" type="radio" name="vaiselle" value="oui" required <?php if( (!empty($_GET['vaiselle']) &&($_GET[ 'vaiselle']) =='oui') ){ echo 'checked="checked"';} ?>><label for="vaiselle" class="pure-radio">et espérer faire une distinction</label>

       <input id="vaiselle_2" type="radio" name="vaiselle" value="non" required <?php if( (!empty($_GET['vaiselle']) &&($_GET[ 'vaiselle']) =='non') ){ echo 'checked="checked"';} ?>><label for="vaiselle_2" class="pure-radio">et participer au BeerPong inter faculté</label>
    </fieldset>

    <fieldset class="input_zone">
       <legend>pour l'amener au carwash<sup>*</sup></legend>
       <input id="carwash" type="radio" name="carwash" value="oui" required <?php if( (!empty($_GET['carwash']) &&($_GET[ 'carwash']) =='oui') ){ echo 'checked="checked"';} ?>><label for="carwash" class="pure-radio">et te la ramener toute propre</label>
       <input id="carwash_2" type="radio" name="carwash" value="non" required <?php if( (!empty($_GET['carwash']) &&($_GET[ 'carwash']) =='non') ){ echo 'checked="checked"';} ?>><label for="carwash_2" class="pure-radio">mais probablement que je ferrai un détour en rentrant</label>
    </fieldset>

    <button type="submit" class="btn_form">Demander à papa la voiture</button>

    </form>
    <?php } ?>

    <footer><p>Exerice n°1 Server Side réalisé par <a href="oliviervantriel.be">Olivier van triel</a> <small>&copy;</small> HEAJ 2015 </p></footer>

    </body>

</html>

