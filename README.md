# KeyGenerationAndDecryption
Some files for explaining and decrytion in php

1. Install openssl
2. Create directory for keys and move with commandline to this directory
3. Create private key:
	openssl genrsa -des3 -out private.pem 4096
	
	Here you have to choose a passphrase. You have to remember this!!!
4. Create public key:
	openssl rsa -in private.pem -out public.pem -outform PEM -pubout
	
#For Decryption:
1. Download encrypted file
2. Add filename of encrypted file in decryptionExample.php in line 6 and 79. (In line 79 it has to be .csv)
3. Add your passphrase in line 66 (actually it is hello1234)
4. Run script for example via command line
	php decryptionExample.php
