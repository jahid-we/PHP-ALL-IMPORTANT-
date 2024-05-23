<?php
declare(strict_types=1);
/* 
class BankAccount {
    public $accountNumber;
    public $ownerName;
    public $balance;

    public function __construct( int $accountNumber, string $ownerName, int $balance = 0) {
        $this->accountNumber = $accountNumber;
        $this->ownerName = $ownerName;
        $this->balance = $balance;
    }

    public function deposit($amount) {
        if ($amount > 0) {
            $this->balance += $amount;
            echo "Deposited $" . $amount . " Into Account " . $this->accountNumber . " And Account Owner Name Is " . $this->ownerName . ".\n";
        } else {
            echo "Sorry, You Can't Deposit this type of Amount. Please Try Again.\n";
        }
    }

    public function withdraw($amount) {
        if ($amount > 0 && $amount <= $this->balance) {
            $this->balance -= $amount;
            echo "$" . $amount . " withdraw from Account " . $this->accountNumber . "\n";
        } else {
            echo "Insufficient Funds\n";
        }
    }

    public function getBalance() {
        echo "Your Current balance Is $" . $this->balance . "\n";
    }

    public function displayAccountInfo() {
        echo "Account Number : " . $this->accountNumber . "\n";
        echo "Owner Name : " . $this->ownerName . "\n";
        echo "Balance : $" . $this->balance . "\n";
    }
}

$Person1 = new BankAccount(1001, "John Bro", 700);
$Person1->deposit(500);
$Person1->withdraw(50);
$Person1->getBalance();
$Person1->displayAccountInfo();

echo "\n\n";

$Person2 = new BankAccount(1002, "Doe Bro", 1000);
$Person2->deposit(0);
$Person2->withdraw(2001);
$Person2->getBalance();
$Person2->displayAccountInfo(); */

class BankAccount {
    private $accountNumber;
    private $ownerName;
    private $balance;

    public function __construct( int $accountNumber, string $ownerName, int $balance = 0) {
        $this->accountNumber = $accountNumber;
        $this->ownerName = $ownerName;
        $this->balance = $balance;
    }

    public function deposit($amount) {
        if ($amount > 0) {
            $this->balance += $amount;
            printf("Deposited $%d Into Account %d And Account Owner Name Is %s.\n", $amount, $this->accountNumber, $this->ownerName);
        } else {
            printf("Sorry, You Can't Deposit this type of Amount. Please Try Again.\n");
        }
    }

    public function withdraw($amount) {
        if ($amount > 0 && $amount <= $this->balance) {
            $this->balance -= $amount;
            printf("$%d withdraw from Account %d\n", $amount, $this->accountNumber);
        } else {
            printf("Insufficient Funds\n");
        }
    }

    public function getBalance() {
        printf("Your Current balance Is $%d\n", $this->balance);
    }

    public function displayAccountInfo() {
        printf("Account Number : %d\n", $this->accountNumber);
        printf("Owner Name : %s\n", $this->ownerName);
        printf("Balance : $%d\n", $this->balance);
    }
}

$Person1 = new BankAccount(1001, "John Bro", 700);
$Person1->deposit(500);
$Person1->withdraw(50);
$Person1->getBalance();
$Person1->displayAccountInfo();

printf("\n\n");

$Person2 = new BankAccount(1002, "Doe Bro", 1000);
$Person2->deposit(0);
$Person2->withdraw(2001);
$Person2->getBalance();
$Person2->displayAccountInfo();





