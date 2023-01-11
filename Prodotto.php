<?php
    // Classe che rappresenta un prodotto
    class Prodotto{
        // Variabile che memorizza il nome del prodotto
        public $nome;
        // Variabile che memorizza il prezzo del prodotto
        public $prezzo;
        // Variabile che memorizza la marca del prodotto
        public $marca;
        // Variabile che memorizza il tipo del prodotto
        public $tipo;
        
        // Costruttore per creare un'istanza della classe
        public function __construct($_nome, $_prezzo, $_marca, $_tipo){
            // Assegna il nome passato come parametro alla proprietà $nome
            $this->nome = $_nome;
            // Assegna il prezzo passato come parametro alla proprietà $prezzo
            $this->prezzo = $_prezzo;
            // Assegna la marca passato come parametro alla proprietà $marca
            $this->marca = $_marca;
            // Assegna il tipo passato come parametro alla proprietà $tipo
            $this->tipo = $_tipo;
        }
    }
?>