<?php
    // Include la classe Anonimo per poterla estendere
    require_once __DIR__ . "/Anonimo.php";
    // Include il trait per poterlo utilizzare nella classe UtenteLoggato
    require_once __DIR__ . "/Trait.php";

    // Classe UtenteLoggato che estende la classe Anonimo
    class UtenteLoggato extends Anonimo{

        // Utilizza il trait Name per avere accesso al metodo getName
        use Name;

        // Variabile che contiene lo sconto applicabile per questa classe
        public $sconto = 20;
    }
?>