<!-- Descrizione:
Stampare a schermo una decina di dischi musicali (vedi screenshot). 
Utilizzare: Html, CSS, VueJS, axios, PHP

Prima Milestone:
Stampiamo i dischi solo con l’utilizzo di PHP, che stampa direttamente i dischi in pagina: 
al caricamento della pagina ci saranno tutti i dischi.

Seconda Milestone:
Attraverso l’utilizzo di axios: al caricamento della pagina axios chiederà, 
attraverso una chiamata api, i dischi a php e li stamperà attraverso vue.

Bonus:
Attraverso un’altra chiamata api, filtrare gli album per genere -->

<?php 
    include_once __DIR__ . '/data.php';

    header('Content-Type: application/json');
    echo json_encode([
        'results' => $records,
        'length' => count($records)
    ]);
?>