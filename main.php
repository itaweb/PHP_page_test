<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice </title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    
  <div class="flex-container">

    <div class="header">     
        <?php include 'logo.inc.php' ?>         
        <?php include 'menu.inc.php' ?>	   
    </div>       
     
    <div class="about_me">
         
      <h1>  <?php  echo $helloText  ?> </h1>

        <div class="data">
          <div class="myImg">
          <?php echo'<img src="./img/kali_img.jpg">'; ?>                   
          </div>

          <div class="fullname">
             <p> Меня зовут 
             <?php echo $name , ' ', $surname . '<br>'; 
                   echo 'город', ' ', $city; ?>                                      
             </p> 
           
             <p> Мне
             <?php  echo $age;   ?>          
             лет </p>
             <p> Мы научились создавать переменные </p>
             <p> Изучили простые операции с ними </p>
          </div>
        </div>

    <div class="knowledge">
                                   
      <?php  include 'knowledge.inc.php'; ?>
      <?php   echo $a, ' ', $b, ' ', $c; ?> <br>
                                       
      <?php
          $a = 40;
          $b = 35;
          $c = $a + $b;
          echo $c;
      ?> 
        
      <br> 

      <?php
        echo $d;
      ?> 

    </div>

    <div class="article">
        <blockquote class="text">
            <p>Хакер – это слово, значение которого может быть как позитивным, так и негативным. Многие из тех, кто 
              называет себя хакерами, — блестящие программисты с идеалами, другие — блестящие программисты с плохими 
              намерениями. Общественность никогда этого не поймет
            </p>
        </blockquote>
    </div>

    <?php include 'footer.inc.php' ?>

  </div>


</body>
</html>