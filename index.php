<!DOCTYPE html>
<html lang="en">
  <head>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="css/bootstrap-material-design.css">
      <script src="js/bootstrap-material-design.js"></script>
    <link
      href="https://fonts.googleapis.com/css?family=Montserrat:500,500i,600,700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" type="text/css" href="./style.css" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>NIS CUP</title>
  </head>
  <body>
      <script>
          var visits = 0;
            function redirect(linkto){
                visits++;
                console.log(visits);
                window.location = linkto;
            }
      </script>
    <div class="outerhead">
      <div class="cell">
        <div class="title"><h1>NIS CUP</h1></div>
        <h1 id="dscrptn1">Турнир по FIFA</h1>
        <h1 id="dscrptn2">FIFA</h1>
      </div>
    </div>
    <script>
      // Set the date we're counting down to
      var countDownDate = new Date("Sep 24, 2019 16:15:00").getTime();
      var serverDate = <?= time() ?>;
      var now0 = new Date().getTime();
      var diff = now0 - serverDate*1000;
      // Update the count down every 1 second
      var x = setInterval(function() {

        // Get today's date and time
        var now = new Date().getTime();

        // Find the distance between now and the count down date
        var distance = countDownDate - now + diff;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Display the result in the element with id="demo"
        document.getElementById("demo").innerHTML = days*24 + hours + "h "
        + minutes + "m " + seconds + "s ";

        // If the count down is finished, write some text
        if (distance < 0) {
          clearInterval(x);
          document.getElementById("demo").innerHTML = "НАЧАЛОСЬ";
        }
      }, 1000);
    </script>
    <h2> ДО НАЧАЛА <span class="gold">GRANDFINALS</span> </h2>
    <div class="countdown" id="demo"></div>
    <div class="body">
      <h2>МЕСТО ПРОВЕДЕНИЯ</h2>
      <h3 class="blue">
        Холл перед кабинетом Роботехники, рядом со столовой. 
      </h3>
    </div>
    <h2>ТАБЛИЦА <i>GRANDFINALS</i></h2>
    <div class="outerbody">
      <div class="cell"><button type="button" class="btn btn-light" onclick="redirect(\"https://challonge.com/niscupgrand\")">Перейти к таблице</button></div>
    </div>
    <h2>ТАБЛИЦА <i>КВАЛИФИКАЦИИ</i></h2>
    <div class="outerbody">
      <div class="cell"><button type="button" class="btn btn-light" onclick="redirect(\"https://challonge.com/niscupfifa\")">Перейти к таблице</button></div>
    </div>
    <h2 class="blue">ПОБЕДИТЕЛИ УЧЕНИКИ</h2>
    <?php 
      $teachers = array(
        array("Вихорев Тимур", "Азангалиев Арнур")
      );
      echo "<h2 class=\"groupname\">Чемпион верхней сетки  - <i>grandfinalists</i></h2>";
      foreach($teachers as $index){
        echo "<div class=\"group\">";
        echo "<div class=\"half1\">";
        echo "<h3 class=\"italic\">";
        echo $index[0];
        echo "</h3>";
        echo "</div>";
        echo "<div class=\"separation\"></div>";
        echo "<div class=\"half2\">";
        echo "<h3 class=\"italic\">";
        echo $index[1];
        echo "</h3>";
        echo "</div>";
        echo "</div>";
      }

      $teachers = array(
        array("Куанышкалиев Ахмет", "Оразғұл Арнұр"),
      );
      echo "<h2 class=\"groupname\">Чемпион нижней сетки - <i>grandfinalists</i></h2>";
      foreach($teachers as $index){
        echo "<div class=\"group\">";
        echo "<div class=\"half1\">";
        echo "<h3 class=\"italic\">";
        echo $index[0];
        echo "</h3>";
        echo "</div>";
        echo "<div class=\"separation\"></div>";
        echo "<div class=\"half2\">";
        echo "<h3 class=\"italic\">";
        echo $index[1];
        echo "</h3>";
        echo "</div>";
        echo "</div>";
      }

      $teachers = array(
        array("Есенгалиев Арсен", "Жұмалиев Жангир"),
      );
      echo "<h2 class=\"groupname\">Второе место нижней сетки</h2>";
      foreach($teachers as $index){
        echo "<div class=\"group\">";
        echo "<div class=\"half1\">";
        echo "<h3 class=\"italic\">";
        echo $index[0];
        echo "</h3>";
        echo "</div>";
        echo "<div class=\"separation\"></div>";
        echo "<div class=\"half2\">";
        echo "<h3 class=\"italic\">";
        echo $index[1];
        echo "</h3>";
        echo "</div>";
        echo "</div>";
      }

      $teachers = array(
        array("Ихсан Сержан", "Мади Алтынбек"),
      );
      echo "<h2 class=\"groupname\">Полуфиналисты нижней сетки</h2>";
      foreach($teachers as $index){
        echo "<div class=\"group\">";
        echo "<div class=\"half1\">";
        echo "<h3 class=\"italic\">";
        echo $index[0];
        echo "</h3>";
        echo "</div>";
        echo "<div class=\"separation\"></div>";
        echo "<div class=\"half2\">";
        echo "<h3 class=\"italic\">";
        echo $index[1];
        echo "</h3>";
        echo "</div>";
        echo "</div>";
      }

      $teachers = array(
        array("Сарсенгалиев Акылбек", "Баймагамбетов Ансар"),
        array("Алибеков Кайсар", "Баянов Жангир"),
      );
      echo "<h2 class=\"groupname\">Четвертьфиналисты нижней сетки</h2>";
      foreach($teachers as $index){
        echo "<div class=\"group\">";
        echo "<div class=\"half1\">";
        echo "<h3 class=\"italic\">";
        echo $index[0];
        echo "</h3>";
        echo "</div>";
        echo "<div class=\"separation\"></div>";
        echo "<div class=\"half2\">";
        echo "<h3 class=\"italic\">";
        echo $index[1];
        echo "</h3>";
        echo "</div>";
        echo "</div>";
      }
    ?>
    <h2 class="blue">ПОБЕДИТЕЛИ ПЕРСОНАЛ</h2>
    <?php 
      $teachers = array(
        array("Жардеков Асылбек", "Максотов Армат")
      );
      echo "<h2 class=\"groupname\">7 очков - <i>grandfinalists</i></h2>";
      foreach($teachers as $index){
        echo "<div class=\"group\">";
        echo "<div class=\"half1\">";
        echo "<h3 class=\"italic\">";
        echo $index[0];
        echo "</h3>";
        echo "</div>";
        echo "<div class=\"separation\"></div>";
        echo "<div class=\"half2\">";
        echo "<h3 class=\"italic\">";
        echo $index[1];
        echo "</h3>";
        echo "</div>";
        echo "</div>";
      }
      $teachers = array(
        array("Гайсин Ернар", "Аюпов Темирлан")
      );
      echo "<h2 class=\"groupname\">6 очков - <i>grandfinalists</i></h2>";
      foreach($teachers as $index){
        echo "<div class=\"group\">";
        echo "<div class=\"half1\">";
        echo "<h3 class=\"italic\">";
        echo $index[0];
        echo "</h3>";
        echo "</div>";
        echo "<div class=\"separation\"></div>";
        echo "<div class=\"half2\">";
        echo "<h3 class=\"italic\">";
        echo $index[1];
        echo "</h3>";
        echo "</div>";
        echo "</div>";
      }
      $teachers = array(
        array("Мунбаев Сакен", "Жанахметов Алтынбек")
      );
      echo "<h2 class=\"groupname\">4 очка</h2>";
      foreach($teachers as $index){
        echo "<div class=\"group\">";
        echo "<div class=\"half1\">";
        echo "<h3 class=\"italic\">";
        echo $index[0];
        echo "</h3>";
        echo "</div>";
        echo "<div class=\"separation\"></div>";
        echo "<div class=\"half2\">";
        echo "<h3 class=\"italic\">";
        echo $index[1];
        echo "</h3>";
        echo "</div>";
        echo "</div>";
      }
    ?>
    <div class="foot">
        <p>Made by Novel.Systems</p>
    </div>
  </body>
</html>



