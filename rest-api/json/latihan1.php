<?php 

    // $mahasiswa = [
    //     [
    //         "nama" => "Mustafa Harahap",
    //         "nrp" => "043040023",
    //         "email" => "mustafa400@gmail.com"
    //     ],
    //     [
    //         "nama" => "Harahap",
    //         "nrp" => "043040023",
    //         "email" => "harahap400@gmail.com"
    //     ],
    // ];

$dbh = new PDO('mysql:host=localhost;dbname=php_dasar', 'root', '12345');
$db = $dbh->prepare('SELECT * FROM user');
$db->execute();
$user = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($user);
echo $data;

?>