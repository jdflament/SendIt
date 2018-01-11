<html>
<head>
    <meta charset="UTF-8">

    <title>SendMark</title>

    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0">

    <!-- Style -->
    <link rel="stylesheet" href="css/choice.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato|Philosopher:400,400i,700,700i">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Javascript -->
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/functions.js"></script>
</head>
<body>

    <div id="alerts"></div>

    <div class="container positions">
        <div class="header">
            <h1>Que souhaitez-vous faire ?</h1>
        </div>
        <ul>
            <li class="pos-card" id="pos_1">
                <div class="content">
                    <div class="title"><i class="fa fa-graduation-cap"></i> Envoi de notes (SendMarks)</div>
                    <div class="dept">Plus d'infos <i class="fa fa-chevron-down"></i></div>
                    <!-- <div class="date">Disponible</div> -->
                    <a href="sendmarks.php" class="refer">Choisir</a>
                </div>
                <ul class="desc">
                    <li>Cette application permet d'envoyer des notes à vos élèves.</li>
                    <li>Il vous suffit d'y télécharger un fichier CSV (n°étudiant;note), d'y indiquer la matière puis le barème.</li>
                    <li>Une fois cela fait, il ne vous reste plus qu'à valider puis envoyer les emails.</li>
                </ul>
            </li>
            <li class="pos-card" id="pos_2">
                <div class="content">
                    <div class="title"><i class="fa fa-comments"></i> Envoi de messages (SendText)</div>
                    <div class="dept">Plus d'infos <i class="fa fa-chevron-down"></i></div>
                    <!-- <div class="date">Disponible</div> -->
                    <a href="sendmarks.php" class="refer">Choisir</a>
                </div>
                <ul class="desc"> 
                    <li>Cette application permet d'envoyer des messages à vos élèves.</li>
                    <li>Il vous suffit d'y télécharger un fichier CSV (n°étudiant), d'y indiquer votre nom, l'objet puis votre message.</li>
                    <li>Une fois cela fait, il ne vous reste plus qu'à valider puis envoyer les emails.</li>
                </ul>
            </li>
        </ul>
    </div>

    <div class="footer">
        <p>SendMarks, IUT de Lens</p>
        <a href="http://www.iut-lens.univ-artois.fr/"><img src="img/LOGO_IUT_LENS.jpg" alt="logo-iut-lens" /></a>
    </div>
</body>

</html>