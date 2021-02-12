<?php

$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api-et.hellocash.net/invoices',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{
    "from": "+251920874415",
    "amount": 10,
    "description": "Payment for goods from Ethio CODSM",
    "currency": "ETB",
    "expires": "2021-03-03T14:47:23.000Z",
   "notifyto": true,
   "notifyfrom": true
   }',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json',
    'Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJwcmluY2lwYWwiOiIxODU0NTM4Iiwic3lzdGVtIjoibHVjeSIsImdyb3VwIjoiYnVzaW5lc3MiLCJ1c2VybmFtZSI6IjE4NTQ1MzgiLCJjaGFpbiI6WyJwYXNzd29yZCJdLCJpYXQiOjE2MTI5ODcwNDUsImV4cCI6MTYxMzA3MzQ0NX0.g108qFAhLif48dduauaWG_Cv_Lkf9e2_YJgzOecKdAI'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
?>

<?




?>