<?php 
$blockchainClient = new BlockchainClient($apiContext);
$blockchain = $blockchainClient->get('BTC.main'); 
echo $blockchain;
?>