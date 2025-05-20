<?php
require 'vendor/autoload.php';

use Web3\Web3;
use Web3\Contract;

$rpcUrl = 'https://rpc.testnet.monad.xyz'; // Example Monad testnet RPC
$web3 = new Web3($rpcUrl);

$contractAddress = '0xNerzoNFTContractAddress'; // Replace with actual
$abi = json_decode(file_get_contents('nerzo_abi.json'), true);

$contract = new Contract($web3->provider, $abi);

$walletAddress = '0xYourWalletAddress';
$privateKey = 'your_private_key'; // Handle securely!
$metadataURI = 'ipfs://QmYourMetadataCID';

// Prepare mint transaction data
$mintData = $contract->getData('safeMint', $walletAddress, $metadataURI);

// Get nonce, gas price, etc., then build and sign transaction
// Send signed transaction using web3.eth_sendRawTransaction

// Note: Full signing logic requires Ethereum transaction construction libraries in PHP
