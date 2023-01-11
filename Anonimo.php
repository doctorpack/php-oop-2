<?php 
    // Classe che rappresenta un utente anonimo
    class Anonimo{
        // Variabile che memorizza il nome dell'utente
        public $name;
        // Variabile che memorizza il balance dell'utente
        public $balance;
        // Variabile che memorizza il carrello dell'utente (accedibile solo all'interno della classe e delle sue sottoclassi)
        protected $cart;

        //Costruttore per creare un'istanza della classe
        public function __construct($_name, $_balance){
            // Assegna il nome passato come parametro alla proprietà name
            $this->name = $_name;
            // Assegna il balance passato come parametro alla proprietà balance
            $this->balance = $_balance;
        }

        // Metodo che permette di aggiungere un prodotto al carrello dell'utente
        public function aggiungiProdotto($_prodotto){
            // Aggiunge un prodotto al carrello
            $this->cart[] = $_prodotto;
        }

        // Metodo che calcola il totale del carrello e verifica se c'è abbastanza denaro sul balance dell'utente
        public function calcolaConto($_logged){
            // Variabile che memorizza il totale del carrello
            $sum = 0;
            // Variabile che indica se c'è abbastanza denaro sul balance
            $flag = false;
            // se l'utente è loggato, applica uno sconto del 20% al totale del carrello
            if($_logged === true){
                for($i = 0; $i < count($this->cart); $i++){
                    $sum += $this->cart[$i]->prezzo;
                }
                $sum = $sum - ($sum * 0.2);
            }else{
                for($i = 0; $i < count($this->cart); $i++){
                    $sum += $this->cart[$i]->prezzo;
                }
            }
            // verifica se c'è abbastanza denaro sul balance
            if($this->balance < $sum){
                $flag = false;
            }else{
                $flag = true;
            }
            return $flag;
        }
    }
?>


