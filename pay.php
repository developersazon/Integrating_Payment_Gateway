      
 <!-- form data -->
  <?php
      
      $cus_name = $_POST["name"];  
      $company_email = $_POST["email"];  
      $company_phone = $_POST["phone"];  
      $amount = $_POST["amount"];  
      $money_currency = $_POST["currency"];

      // Random Number generator
      $random_id = "SA".rand();


      $curl = curl_init();

      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://sandbox.aamarpay.com/jsonpost.php',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS =>'{
          "store_id": "aamarpaytest",
          "tran_id": " '.$random_id.' ",
          "success_url": "http://localhost/integration/success.php",
          "fail_url": "http://www.merchantdomain.com/failedpage.html",
          "cancel_url": "http://www.merchantdomain.com/cancellpage.html",
          "amount": "'.$amount.'",
          "currency": "'.$money_currency.'",
          "signature_key": "dbb74894e82415a2f7ff0ec3a97e4183",
          "desc": "Merchant Registration Payment",
          "cus_name": " '.$cus_name.' ",
          "cus_email": "'.$company_email.'",
          "cus_add1": "House B-158 Road 22",
          "cus_add2": "Mohakhali DOHS",
          "cus_city": "Dhaka",
          "cus_state": "Dhaka",
          "cus_postcode": "1206",
          "cus_country": "Bangladesh",
          "cus_phone": " '.$company_phone.' ",
          "type": "json"
      }',
        CURLOPT_HTTPHEADER => array(
          'Content-Type: application/json'
        ),
      ));

      $response = curl_exec($curl);

      curl_close($curl);
      $data = json_decode($response, true);
      $data_url = $data["payment_url"];
      header('Location: '.$data_url);

       
   ?>





      

