<?php

declare(strict_types=1);


class Bank_accounts
    {

    /** @var string */
    private $Holder;

    /** @var int */
    private $Balance;

    /** @var int */
    private $InterestRate;

    /** @var string */
    private $Currency;


        
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