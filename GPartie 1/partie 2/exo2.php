<?php

class Bank_accounts
    {
        
        public String $titulaire;
        public int $balance;
        public int $interest_rate;
        public String $motto;

            public function crediter(int $amount)
            {
                $this -> balance += $amount;
            }

            public function debiter(int $amount)
            {
                $this -> balance -= $amount;
            }

    }




?>