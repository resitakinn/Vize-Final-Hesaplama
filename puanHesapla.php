
<!doctype html>
<html lang="tr">

<head>
  <title>Öğrenci Vize Final</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!-- Style Css -->
  <link rel="stylesheet" href="style.css">
  <!-- sweetalert -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <style>
    .swal2-content {
        color: white;
    }
  </style>
</head>
<body>
<?php 


if (isset($_POST['puanHesapla'])) {
$vizePuan = $_POST['vizeSinav'];
$finalPuan = $_POST['finalSinav'];


$vizeSonuc = $vizePuan * 0.40;
$finalSonuc = $finalPuan * 0.60;
$ortalama = $vizeSonuc + $finalSonuc;

if ($ortalama >= 90 && $ortalama <= 100 ) { 
 echo '<script>
 Swal.fire({
 icon: "success",
 title: "Başarılı",
 text: "'.$ortalama.' ( Harf Karşılığı - AA ) ",
 confirmButtonText: "Tamam"
             });
 </script>';
 header("Refresh:3;url=index.html");
    
    }
elseif ($ortalama >= 80 && $ortalama <= 89 ) { 
 echo '<script>
 Swal.fire({
 icon: "success",
 title: "Başarılı",
 text: "'.$ortalama.' ( Harf Karşılığı - BA ) ",
 confirmButtonText: "Tamam"
             });
 </script>';
 header("Refresh:3;url=index.html");
    
    }
elseif ($ortalama >= 70 && $ortalama <= 79 ) { 
 echo '<script>
 Swal.fire({
 icon: "success",
 title: "Başarılı",
 text: "'.$ortalama.' ( Harf Karşılığı - BB ) ",
 confirmButtonText: "Tamam"
             });
 </script>';
 header("Refresh:3;url=index.html");
    
    }
elseif ($ortalama >= 65 && $ortalama <= 69 ) { 
 echo '<script>
 Swal.fire({
 icon: "success",
 title: "Başarılı",
 text: "'.$ortalama.' ( Harf Karşılığı - CB ) ",
 confirmButtonText: "Tamam"
             });
 </script>';
 header("Refresh:3;url=index.html");
    
    }
elseif ($ortalama >= 60 && $ortalama <= 64 ) { 
 echo '<script>
 Swal.fire({
 icon: "success",
 title: "Başarılı",
 text: "'.$ortalama.' ( Harf Karşılığı - CC ) ",
 confirmButtonText: "Tamam"
             });
 </script>';
 header("Refresh:3;url=index.html");
    
    }
elseif ($ortalama >= 50 && $ortalama <= 50 ) { 
 echo '<script>
 Swal.fire({
 icon: "success",
 title: "Başarılı",
 text: "'.$ortalama.' ( Harf Karşılığı - DD ) ",
 confirmButtonText: "Tamam"
             });
 </script>';
 header("Refresh:3;url=index.html");
    
    }
elseif ($ortalama >= 30 && $ortalama <= 49 ) { 
 echo '<script>
 Swal.fire({
 icon: "error",
 title: "Başarısız",
 text: "'.$ortalama.' ( Harf Karşılığı - FD ) ",
 confirmButtonText: "Tamam"
             });
 </script>';
 header("Refresh:3;url=index.html");
    
    }
elseif ($ortalama >= 0 && $ortalama <= 29 ) { 
 echo '<script>
 Swal.fire({
 icon: "error",
 title: "Başarısız",
 text: "'.$ortalama.' - FF ",
 confirmButtonText: "Tamam"
             });
 </script>';
 header("Refresh:3;url=index.html");
    
    }
else { 
 echo '<script>
 Swal.fire({
 icon: "error",
 title: "Başarısız",
 text:  "Hata Anasayfa Yönlendiriliyorsunuz",
 confirmButtonText: "Tamam"
             });
 </script>';
 header("Refresh:3;url=index.html");
    
    }


}







?>


<!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>