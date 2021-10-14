<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <!--  SNAK 1 -->

<!--   
    Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario, di 8 partite. 
    Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
    Stampiamo a schermo tutte le partite con questo schema.
-->

<?php 
    $partiteDiBasket = [
        [
            "SquadraCasa" => "Milano",
            "SquadraOspite" => "Padova",
            "PuntiSquadraCasa" => 50,
            "PuntiSquadraOspite" => 60,
        ],
        [
            "SquadraCasa" => "Roma",
            "SquadraOspite" => "Lecce",
            "PuntiSquadraCasa" => 70,
            "PuntiSquadraOspite" => 80,
        ],
        [
            "SquadraCasa" => "Torino",
            "SquadraOspite" => "Verona",
            "PuntiSquadraCasa" => 70,
            "PuntiSquadraOspite" => 90,
        ],
        [
            "SquadraCasa" => "Salerno",
            "SquadraOspite" => "Cosenza",
            "PuntiSquadraCasa" => 50,
            "PuntiSquadraOspite" => 60,
        ],
        [
            "SquadraCasa" => "Inter",
            "SquadraOspite" => "Caserta",
            "PuntiSquadraCasa" => 50,
            "PuntiSquadraOspite" => 60,
        ],
        [
            "SquadraCasa" => "Lazio",
            "SquadraOspite" => "Entella",
            "PuntiSquadraCasa" => 50,
            "PuntiSquadraOspite" => 60,
        ],
        [
            "SquadraCasa" => "Bari",
            "SquadraOspite" => "Empoli",
            "PuntiSquadraCasa" => 50,
            "PuntiSquadraOspite" => 60,
        ],
        [
            "SquadraCasa" => "Genoa",
            "SquadraOspite" => "Sampdoria",
            "PuntiSquadraCasa" => 50,
            "PuntiSquadraOspite" => 60,
        ],

    ];
    
; ?>

<h1>SNACK 1</h1>
<ul>
    <?php  foreach ($partiteDiBasket as $partita) { ; ?>
        <li> 
            <?php echo $partita["SquadraCasa"] ?> -
            <?php echo $partita["SquadraOspite"]; ?> |
            <?php echo $partita["PuntiSquadraCasa"]; ?> - 
            <?php echo $partita["PuntiSquadraOspite"]; ?>
         </li>
    <?php }; ?>
</ul>

<!-- SNACK 2 -->

<!-- 
    Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, 
    che mail contenga un punto e una chiocciola e che age sia un numero. 
    Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato" 
-->
<h2>SNACK 2</h2>
<?php 
    
    $data = $_GET;
    // print_r($data);

    if (empty($_GET["name"]) || empty($_GET["email"]) || empty($_GET["age"]) ) {
        echo "Errore";
    } elseif (strlen($_GET["name"] ) <= 3) {
        echo "Accesso negato";
    } elseif (strpos($_GET["email"], "@") === false || strpos($_GET["email"], ".") === false){
        echo "Accesso negato";
    } elseif (!is_numeric($_GET["age"])){
        echo "Accesso negato";
    } else {
        echo "Accesso eseguito";
    }

; ?>

<!-- SNACK 3 -->

<!-- 

Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e 
come valore un array di post associati a quella data. Stampare ogni data con i relativi post.
Qui l'array di esempio: https://www.codepile.net/pile/R2K5d68z 

-->

<h1>SNACK 3</h1>

<?php 
    $posts = [

        '10/01/2021' => [
            [
                'title' => 'Post 1',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 1'
            ],
            [
                'title' => 'Post 2',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 2'
            ],
        ],
        '10/02/2021' => [
            [
                'title' => 'Post 3',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 3'
            ]
        ],
        '15/05/2021' => [
            [
                'title' => 'Post 4',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 4'
            ],
            [
                'title' => 'Post 5',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 5'
            ],
            [
                'title' => 'Post 6',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 6'
            ]
        ],
    ];
; ?>

<?php foreach($posts as $data => $post) {; ?>

    <h3>
       Lista dei post del giorno : <?php echo $data; ?>
    </h3>

    <?php foreach($post as $singlePost) {; ?>

        <h4>
            <?php echo $singlePost["title"]; ?>
    </h4>

        <p>
            <?php echo $singlePost["author"]; ?>   
        </p>

        <p>
            <?php echo $singlePost["text"]; ?>   
        </p>

    <?php }; ?>

<?php }; ?>

<!-- SNACK 4 -->

<!-- 
Creare un array con 15 numeri casuali, 
tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta 
-->

<h1>SNACK 4</h1>


<?php 

    $arrayNumeri =[];
   
    for ($i = 0 ; $i < 15 ; $i++) {
        $numero = rand(0, 100);
        if(!in_array($numero,$arrayNumeri)){
            array_push($arrayNumeri,$numero);
        }else {
            $i--;
        };
    };
       
   var_dump($arrayNumeri)

; ?>

<!-- SNACK 5 -->

<!-- 
Utilizzare questo array: https://pastebin.com/CkX3680A
Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. 
-->

<h1>SNACK 5</h1>

<?php
 
    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];
 
?>

<div class="row">
    <div class="col-6 gray-container">
        <h3 class="text-center">Insegnanti</h3>
        <ul>
            <?php foreach($db["teachers"] as $insegnante) {; ?>
                <li>
                   <?php echo $insegnante["name"]; ?> - <?php echo $insegnante["lastname"]; ?>
                   
                </li>
            <?php } ; ?>
        </ul>
    </div>
    <div class="col-6 green-container">
        <h3 class="text-center">PM</h3>
        <ul>
            <?php foreach($db["pm"] as $pm) {; ?>
                <li>
                   <?php echo $pm["name"]; ?> - <?php echo $pm["lastname"]; ?>
                   
                </li>
            <?php } ; ?>
        </ul>
    </div>
</div>


<!-- SNACk 6 -->

<!-- 

Creare un array contenente qualche alunno di un'ipotetica classe. 
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
Stampare Nome, Cognome e la media dei voti di ogni alunno.

-->

<?php 
    
    $classe = [
        [
            "nome" => "Gerry",
            "cognome" => "Lupo",
            "voti" => [5,6,7,8,10],
        ],
        [
            "nome" => "Antonio",
            "cognome" => "Cane",
            "voti" => [5,5,5,8,10],
        ],
        [
            "nome" => "Vincenzo",
            "cognome" => "Danese",
            "voti" => [5,6,6,6,10],
        ],
        [
            "nome" => "Miriana",
            "cognome" => "Poto",
            "voti" => [5,6,2,3,5],
        ],
    ];

    function calcolaMedia($array) {
        $numeroVoti = count($array);
        $res = 0;
        foreach ($array as $voto) {
          $res += $voto;
        }
        return $res/$numeroVoti;
      }
; ?>

<h1>SNACK 6</h1>

<ul>
    <?php foreach($classe as $alunno) { ; ?>
        <li>
          Alunno:  <?php echo $alunno["nome"]; ?>, <?php echo $alunno["cognome"]; ?>
          || Media Scolastica : <?php echo calcolaMedia($alunno["voti"]) ; ?>
        </li>
    <?php  } ; ?>
</ul>


<!-- SNACK 7 -->

<!--  

Prendere un paragrafo abbastanza lungo, contenente diverse frasi. 
Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.

-->
<?php 

    $paragrafi = [
        [
            "testo" => "
            <p> La recente decisione della Corte di giustizia dell'Unione europea ha profonde conseguenze per i motori di ricerca in Europa. La Corte ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome. Per poter essere rimossi, i risultati visualizzati devono essere inadeguati, irrilevanti o non più rilevanti, o eccessivi. </p>
            <p> Da quando questa decisione è stata pubblicata il 13 maggio 2014, abbiamo lavorato incessantemente per uniformarci a essa. Si tratta di una procedura complessa perché dobbiamo valutare ogni singola richiesta e effettuare un bilanciamento tra il diritto dell'individuo a controllare i suoi dati personali ed il diritto di tutti di conoscere e distribuire le informazioni. </p>
            <p>Nei prossimi mesi lavoreremo a stretto contatto con le autorità per la protezione dei dati e con altre autorità per perfezionare il nostro approccio. La decisione della CGUE rappresenta un cambiamento significativo per i motori di ricerca. Siamo preoccupati per le sue conseguenze, ma riteniamo anche che sia importante rispettare la decisione della Corte e ci stiamo adoperando per predisporre una procedura conforme alla legge.</p>
            <p>Quando cerchi un nome, potresti trovare una notifica in cui viene spiegato che i risultati potrebbero essere stati modificati nel rispetto delle leggi europee per la protezione dei dati. Mostriamo questa notifica agli utenti europei quando cercano la maggior parte dei nomi, non soltanto le pagine che sono state soggette a una rimozione.</p>
            ",
        ],

    ];

; ?>

<h1 >SNACK 7</h1>

<div class="row">
    <?php foreach($paragrafi as $paragrafo) { ; ?>

        <div class="col-7">
            <?php echo $paragrafo["testo"]; ?>
        </div>

    <?php }; ?>
        
</div>


</body>
</html>