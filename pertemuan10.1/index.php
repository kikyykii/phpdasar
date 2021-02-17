<?php
$conn = mysqli_connect('localhost', 'root', '', 'phpdasar');
if(!$conn){
    die(mysqli_connect_error());
}else{
    die(mysqli_query($conn, "SELECT * FROM mahasiswa"))    
}
// class myclass{
//     public $conn = mysqli_connect("localhost", "root", "", "phpdasar");;
//     public function tes(){
        
//         if(!$this->conn){
//             die("connection failure". mysqli_connect_error());
//         }else{
//             echo "success connect";
//         }
        
//     }
// }

// $data = new myclass;
// var_dump($data->tes());
// exit
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test PHP</title>
</head>
<body>
    <h1>Hello World</h1>
    
    <ul>
    </ul>
</body>
</html>