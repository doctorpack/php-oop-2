<?php
    //Include le classi Prodotto, Anonimo e UtenteLoggato per poterle utilizzare in questo script
    require_once __DIR__ . "/Prodotto.php";
    require_once __DIR__ . "/Anonimo.php";
    require_once __DIR__ . "/UtenteLoggato.php";
    
    // Crea una variabile booleana "logged" con valore true
    $logged = true;
    // verifica se la variabile è true, se vero, crea un oggetto UtenteLoggato con nome "enrico rossi" e balance 0
    if($logged === true){
      
        $utente = new UtenteLoggato("enrico rossi", 0);
    // altrimenti crea un oggetto Anonimo con nome "Anonimo" e balance 0
    }else{
       
        $utente = new Anonimo("Anonimo", 0);
    }
    //crea 3 istanze di prodotto con nome, prezzo e descrizione
    $prodotto1 = new Prodotto("cibo mega buono e saporito super sano per i tuoi amici pelosi", 2, "Purina","Cibo");
    $prodotto2 = new Prodotto("Cuccia", 2, "FEANDREA","Cucce");
    $prodotto3 = new Prodotto("Giochi per cani", 2, "PHYLES","Giochi");
    //aggiunge i prodotto1 e prodotto2 all'elenco dell'utente
    $utente->aggiungiProdotto($prodotto1);
    $utente->aggiungiProdotto($prodotto2);

    //utilizza il metodo calcolaConto dell'oggetto utente passando la variabile logged e controlla se il pagamento è riuscito o meno
    if(!$utente->calcolaConto($logged)){
        echo("Pagamento Non Riuscito");
    }else{
        echo("Pagamento Riuscito");
    }

    // utilizzo il metodo getName dell'oggetto utente e nel caso di errore stampare un messaggio ":User is Giovanni"
    try{
        $utente->getName($utente->name);
    } catch(Exception $e){
        echo(":User is Giovanni");
    }
?>