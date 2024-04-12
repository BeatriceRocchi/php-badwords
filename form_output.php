<?php 
$text = $_POST['inputText'];
$badword = $_POST['inputBadWord'];

$text_without_badword = str_replace($badword, '***',$text);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- Bootstrap -->
   <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />

  <title>PHP Badwords</title>
</head>

<body>
 <div class="container my-5">

  <h2 class="text-primary text-center">Testo completo</h2>
  <p><span class="text-decoration-underline text-primary">Contenuto del testo:</span> <?php echo $text?></p>
  <p><span class="text-decoration-underline text-primary">Lunghezza del testo:</span> <?php echo strlen($text)?> caratteri</p>

  <h2 class="text-primary text-center">Testo senza badword</h2>
  <p><span class="text-decoration-underline text-primary">Contenuto del testo:</span> <?php echo $text_without_badword?></p>
  <p><span class="text-decoration-underline text-primary">Lunghezza del testo:</span> <?php echo strlen($text_without_badword)?> caratteri</p>
  

 </div>
</body>
</html>