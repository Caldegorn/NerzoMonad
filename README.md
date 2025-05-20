
# NerzoMonad

**Nerzo Monad NFT Auto Minting**

## Overview

NerzoMonad is a PHP-based tool designed to automate the minting of Nerzo NFTs on the Monad testnet. This repository provides scripts to interact with the Nerzo NFT smart contract, enabling programmatic minting of NFTs by sending transactions directly to the Monad blockchain.

## Features

- Automated NFT minting on Monad testnet
- Interaction with Nerzo NFT smart contract
- Uses PHP and Ethereum-compatible libraries (`web3.php`)
- Easy to configure with your wallet and contract details

## Prerequisites

- PHP 7.4 or higher
- Composer for dependency management
- Access to a Monad testnet RPC endpoint (EVM-compatible)
- Wallet private key with testnet MON tokens for gas fees
- Nerzo NFT contract address and ABI

## Installation

1. Clone the repository:

```
git clone https://github.com/Caldegorn/NerzoMonad.git
cd NerzoMonad
```

2. Install dependencies using Composer:

```
composer install
```

3. Configure your wallet private key, RPC URL, and contract details in `nerzo.php`.

## Usage

1. Update `nerzo.php` with:

- Your wallet address and private key
- Monad testnet RPC endpoint URL
- Nerzo NFT smart contract address
- Path to the contract ABI JSON file
- Metadata URI for the NFT to mint

2. Run the minting script:

```
php nerzo.php
```

3. The script will:

- Connect to the Monad testnet
- Build and sign a transaction to mint the NFT
- Broadcast the transaction to the network
- Output the transaction hash and status

## Example

```
// nerzo.php snippet
$walletAddress = '0xYourWalletAddress';
$privateKey = 'your_private_key';
$rpcUrl = 'https://rpc.testnet.monad.xyz';
$contractAddress = '0xNerzoNFTContractAddress';
$metadataURI = 'ipfs://QmYourMetadataCID';

// Mint NFT by calling safeMint or equivalent contract method
```

## Notes

- Ensure your wallet has sufficient testnet MON tokens for gas fees.
- Minting NFTs requires correct metadata hosted on IPFS or similar decentralized storage.
- Follow Nerzo project guidelines for minting limits and metadata standards.
- Keep your private keys secure and never expose them publicly.

## Contributing

Contributions are welcome! Please open issues or submit pull requests to improve functionality or add features.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.

---

