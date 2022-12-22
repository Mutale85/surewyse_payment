<?php
$endpoint = "https://secure.3gdirectpay.com/API/v6/";
$xmlData = "<?xml version=\"1.0\" encoding=\"utf-8\"?>
            <API3G>
                <CompanyToken>57466282-EBD7-4ED5-B699-8659330A6996</CompanyToken>
                <Request>createToken</Request>
                <Transaction>
                    <PaymentAmount>450.00</PaymentAmount>
                    <PaymentCurrency>USD</PaymentCurrency>
                    <CompanyRef>49FKEOA</CompanyRef>
                    <RedirectURL>http://www.domain.com/payurl.php</RedirectURL>
                    <BackURL>http://www.domain.com/backurl.php </BackURL>
                    <CompanyRefUnique>0</CompanyRefUnique><PTL>5</PTL>
                </Transaction>
                <Services>
                    <Service>
                        <ServiceType>45</ServiceType>
                        <ServiceDescription>Flight from Nairobi to Diani</ServiceDescription>
                        <ServiceDate>2013/12/20 19:00</ServiceDate>
                    </Service>
                </Services>
            </API3G>";

$ch = curl_init();

if (!$ch) {
    die("Couldn't initialize a cURL handle");
}
curl_setopt($ch, CURLOPT_URL, $endpoint);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_TIMEOUT, 60);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/xml'));
curl_setopt($ch, CURLOPT_POSTFIELDS, $xmlData);

$result = curl_exec($ch);

curl_close($ch);
