<?php

$test = '-----BEGIN PUBLIC KEY-----
MIICIjANBgkqhkiG9w0BAQEFAAOCAg8AMIICCgKCAgEA/foMA2jwiqBXGs/vxZiz
4kukg6snWkpVjVz5WqhrMf6ZxY7RRJv9DhISBnaXDiOcgBGozyCXPzJDA0qKTIgG
u67j7b1skUfKKL0p0S7rGem8uFGzBKx8/J4ny84OI8/fDHon+IuVRpy7tPqZVD+b
5Z/qBdSj9qJvaypENwVFGz211Sw8bJp+r0XKXvBpnDTFbarRExXGPzIsm4niBhoH
MoYgeKf+Ufjot3qHFZ3lKbQ2ydio50IDuzX1Adv6ex/8pq0vEulL+h3tWIWKsg87
G2OmDRrE7m2CRLTpDs/ioTtzAlP+SOlflusE40rBdn/H7cgNLSeCMXLT7OsnA24I
+jh5pZPEzbFP6Yj3UAXYIhDX6AwhuJoRjqYBKwVgO3RqcsNxGkSyIKOIWG4aoYDq
TfZY3MZBQLKZAIpALQDW3rr8qnM5b1s5p8I40HpsBLJT1phqIfUOwhuWGSNG6iND
E/q36dWwPkN024l3Cj/dG3YEdYHqiwR5aB7aUY/tX06Sb8SvzZE3TEhldHnaa1zB
u2ocy4i3ft3NHlbgyw78/mIZ4STNzNcVyWm0EkBi1ELEaSvY7igmT8i2nH7KNglh
QATAPY8Aw9iXk98ZsP3PG5Dc2Jycusg8tYNZmbiDr5PrCCA0UtBylHFNEEgZoPX0
0Kui7xFtYT1cHY0nTjNls4UCAwEAAQ==
-----END PUBLIC KEY-----
';
//$publicKey = openssl_get_publickey(file_get_contents(".keys/public.pem"));
$publicKey = openssl_get_publickey($test);
$message = "My Secret Message";

openssl_public_encrypt($message,$encryptedMessage,$publicKey);
echo bin2hex($encryptedMessage);