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


        public function __construct(string $newHolder, int $newBalance, int $newRate, string $newCurrency)
        {
            $this->set_holder($newHolder);
            $this->set_balance($newBalance);
            $this->set_interestRate($newRate);
            $this->set_currency($newCurrency);
        }

        
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