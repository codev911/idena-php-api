# idena-php-api
this is idena wrap rpc coded by using PHP

DNA API Usage

A. Server
https://localhost:9119 (example)

B. Header
Content-Type: application/json

C. Body
1. Get sync
{
	"key": "k9eaug3odjbu0vuqtvjol9ge1wc2eqcfp",
	"method": "bcn_syncing",
	"id": 1
}

2. Get fee rate
{
	"key": "k9eaug3odjbu0vuqtvjol9ge1wc2eqcfp",
	"method": "bcn_feePerByte",
	"id": 1
}

3. Get epoch
{
	"key": "k9eaug3odjbu0vuqtvjol9ge1wc2eqcfp",
	"method": "dna_epoch",
	"id": 1
}

4. Get Pending TX from address (useless)
{
	"key": "k9eaug3odjbu0vuqtvjol9ge1wc2eqcfp",
	"method": "bcn_pendingTransactions",
	"params": [
		{
			"address": "0xbd5ca7ee8b302deb0a1a7f72b02efb52ed7fe86e"
		}
	],
	"id": 1
}

5. Get Ceremony Interval
{
	"key": "k9eaug3odjbu0vuqtvjol9ge1wc2eqcfp",
	"method": "dna_ceremonyIntervals",
	"id": 1
}

6. Get Current Process (useless)
{
	"key": "k9eaug3odjbu0vuqtvjol9ge1wc2eqcfp",
	"method": "dna_state",
	"id": 1
}

7. Get Current Coinbase Address (internal)
{
	"key": "k9eaug3odjbu0vuqtvjol9ge1wc2eqcfp",
	"method": "dna_getCoinbaseAddr",
	"id": 1
}

8. Get Balance
{
	"key": "k9eaug3odjbu0vuqtvjol9ge1wc2eqcfp",
	"method": "dna_getBalance",
    "params": [
		"0xbd5ca7ee8b302deb0a1a7f72b02efb52ed7fe86e"
    ],
	"id": 1
}

9. Get Identities (useless)
{
	"key": "k9eaug3odjbu0vuqtvjol9ge1wc2eqcfp",
	"method": "dna_identities",
	"id": 1
}

10. Get Identity (useless)
{
	"key": "k9eaug3odjbu0vuqtvjol9ge1wc2eqcfp",
	"method": "dna_identity",
	"params": [
	    "0xbd5ca7ee8b302deb0a1a7f72b02efb52ed7fe86e"
	],
	"id": 1
}

11. Get Profile (useless)
{
	"key": "k9eaug3odjbu0vuqtvjol9ge1wc2eqcfp",
	"method": "dna_profile",
	"params": [
	    "0xbd5ca7ee8b302deb0a1a7f72b02efb52ed7fe86e"
	],
	"id": 1
}

12. Get TX hash
{
	"key": "k9eaug3odjbu0vuqtvjol9ge1wc2eqcfp",
	"method": "bcn_transaction",
	"params": [
	    "0x28b2b7f18fbd6bb001762f01100bf9653462d6e50d06830ff2f1438438c829ab"
	],
	"id": 1
}

13. Send DNA
{
	"key": "k9eaug3odjbu0vuqtvjol9ge1wc2eqcfp",
	"method": "dna_sendTransaction",
	"params": [
	    {
	      "from": "0xbd5ca7ee8b302deb0a1a7f72b02efb52ed7fe86e",
	      "to": "0x9df953a92bfb926e9197fd7a855109c22d48f236",
	      "amount": "1.1"
	    }
	],
	"id": 1
}

14. Get wallet transaction
{ 
	"key": "k9eaug3odjbu0vuqtvjol9ge1wc2eqcfp",
	"method": "bcn_transactions",
	"params": [
	    {
	      "address": "0xbd5ca7ee8b302deb0a1a7f72b02efb52ed7fe86e",
	      "count": 999
	    }
	],
	"id": 1
}

15. Generate Raw TX
{
	"key": "k9eaug3odjbu0vuqtvjol9ge1wc2eqcfp",
	"method": "bcn_getRawTx",
	"params": [
	    {
	      "from": "0xbd5ca7ee8b302deb0a1a7f72b02efb52ed7fe86e",
	      "to": "0x9df953a92bfb926e9197fd7a855109c22d48f236",
	      "amount": 1,
	      "maxFee": 0.000000000000021,
	      "tips": 0,
	      "nonce": 17,
	      "epoch": 41,
	      "payload": "0x"
	    }
	],
	"id": 1
}
