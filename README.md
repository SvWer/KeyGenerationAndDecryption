# KeyGenerationAndDecryption
Some files for explaining and decrytion in php

1. Install openssl
2. Create directory for keys and move with commandline to this directory
3. Create private key:
	openssl genrsa -des3 -out private.pem 4096
	
	Here you have to choose a passphrase. You have to remember this!!!
4. Create public key:
	openssl rsa -in private.pem -out public.pem -outform PEM -pubout