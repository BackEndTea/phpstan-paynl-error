<?php

use Paynl\Error\Api;
use Paynl\Transaction;

function execute(Transaction  $t): void
{
    try {
        $t::start();
    }catch (Api $e) {}
}


function exec(): void
{
    try {
        Transaction::start();
    }catch (Api $e) {}
}

