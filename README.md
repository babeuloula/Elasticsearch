# ElasticSearch

ElasticSearch est un moteur de recherche libre basé sur Lucene qui permet notamment des recherches poussées au sein de texte.

## Utilisation

```php

<?php

	require_once 'ElasticSearch.php';

    $elastic = new \my_index\ElasticSearch();

    

    // Insertion classique
    $response = $elastic->post('/my_index/my_type', array(
        // Your datas
    ));



    // Insertion avec un id spécifique
    $response = $elastic->post('/my_index/my_type/my_id', array(
        // Your datas
    ));



    // Récupération d'une entrée
    $response = $elastic->get('/my_index/my_type/my_id');

    

    // Modification d'une entrée
    $response = $elastic->put('/my_index/my_type/my_id', array(
        // Your datas
    ));



    // Suppression d'une entrée
    $response = $elastic->delete('/my_index/my_type/my_id');



    // Recherche
    $response = $elastic->post('/my_index/my_type/_search', array(
        "query" => array(
            "query_string" => array(
                "query" => "keyword"
            ),
        ),
    ));

```