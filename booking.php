<?php
if (isset($_POST['submit-form'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];
  $bedrooms = $_POST['bedrooms'];
  $bathrooms = $_POST['bathrooms'];
  $service = $_POST['service'];
  $date = $_POST['date'];
  $time1 = $_POST['time1'];
  $time2 = $_POST['time2'];
  $often = $_POST['often'];

  $to = 'info@sparklingdiamondcleaning.co.za';
  $subject = 'Request For Quotation';
  $message = "Name: " .$name."\n"."Email: ".$email."\n"."Phone: ".$phone."\n"."Address: ".$address."\n"."Bedrooms: ".$bedrooms."\n"."Bathrooms: ".$bathrooms."\n"."Service: ".$service."\n"."Date: ".$date."\n"."Between: ".$time1." and ".$time2."\n"."Frequency: ".$often;
  $headers = $name;
  $headers .= "Reply-To: Support <$to>\r\n";
  $headers .= "Return-Path: Support <$to>\r\n";
  $headers .= "From: $name <$name>\r\n";
  $headers .= "Organization: Sparkling Diamond Cleaning Services\r\n";
  $headers .= "Content-Type: text/plain\r\n";


  if(mail($to, $subject, $message)){
    echo "<div style='background: linear-gradient(#B39456, #F7ED9C, #d4b74d); padding:100px; height: 150px; text-align: center;'>
    <h2> Sent Successfully! Thank you ".$name.  ". We will contact you shortly <br> Click <a style='color: red;' href='https://sparklingdiamondcleaning.co.za'>here</a> to go back to the home page
    </h2>
    </div>
    " ;

  }else {
    echo "Something went wrong!";
  }
}
?>
