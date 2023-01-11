<?php
    // Trait "Name" che fornisce un metodo per recuperare il nome dell'utente
    trait Name {

        // Metodo per recuperare il nome dell'utente
        public function getName($_name){
            // verifica se il nome passato come parametro è "Giovanni Verdi"
            if($_name === "Giovanni Verdi"){
                // genera un'eccezione con il messaggio "User is Giovanni Verdi"
                throw new Exception("User is Giovanni Verdi");
            }
            // restituisce il nome passato come parametro
            return $_name;
        }
    }
?>