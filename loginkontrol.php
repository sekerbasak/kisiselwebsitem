<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="bootstrap.css">
  <link rel="stylesheet" href="stil.css">
</head>
<body>
  <header>

    <div class="arkaplan2 text-light">

        <div class="container">

            <div class="col-md-12 px-0">
                <h1 class="display-5 fw-bold">
                    Formunuz Başarılı Bir Şekilde Gönderilmiştir!!!
                </h1>
            </div>

        </div>

    </div>

</header>

<main>

    <div class="container">
        
        <div class="row">

        <?php 
      $_isim=$_POST['name'];
      $_email=$_POST['email'];
      $_mesaj=$_POST['message']; 
     
      echo "<strong><table >
      <tr>
          <td >İSİM </td>
          <td>------------------------------</td>
          <td>$_isim</td>
      </tr>
      <tr>
          <td>E-MAİL </td>
          <td>------------------------------</td>
          <td>$_email</td>
      </tr>
      <tr>
          <td>MESAJ </td>
          <td>------------------------------</td>
          <td>$_mesaj</td>
      </tr>
     </table></strong> "; 

     
    ?> 
  
      
           


           


        </div>

    </div>

</main>
   




<script src="bootstrap.js"></script>
 </body>
</html>