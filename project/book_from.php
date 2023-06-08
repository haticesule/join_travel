<!--  MySQL ile veritabanına bağlanmayı ve rezervasyon formumuzdan gelen verileri veritabanına ekler. -->
<?php

$connection = mysqli_connect('localhost', 'root', '', 'book_db');

if ($connection) {
    if (isset($_POST['send'])) {
        $name = $_POST['ad'];
        $email = $_POST['email'];
        $phone = $_POST['telefon'];
        $adres = $_POST['adres'];
        $location = $_POST['konum'];
        $guests = $_POST['Misafirler'];
        $arrivals = $_POST['Gidis'];
        $leaving = $_POST['Donus'];

        $request = "INSERT INTO book_form(ad, email, telefon, adres, konum, Misafirler, Gidis, Donus)
                    VALUES('$name', '$email', '$phone', '$adres', '$location', '$guests', '$arrivals', '$leaving')";

        mysqli_query($connection, $request);

        echo 'Veri başarıyla eklendi.';
        header('Location: book.php');
        exit;
    } else {
        echo 'Form gönderimi başarısız oldu.';
    }
} else {
    die('Veritabanına bağlanılamadı: ' . mysqli_connect_error());
}
?>