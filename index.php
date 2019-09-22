<!DOCTYPE html>
<html lang="en">
  <head>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="css/bootstrap-material-design.min.css">
      <script src="js/bootstrap-material-design.js"></script>
    <link
      href="https://fonts.googleapis.com/css?family=Montserrat:500,500i,600,700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" type="text/css" href="style.css" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Document</title>
  </head>
  <body>
      <script>
      function redirect(){
          window.location = "https://challonge.com/niscupfifa";
      }</script>
    <div class="outerhead">
      <div class="cell">
        <div class="title"><h1>NIS CUP</h1></div>
        <h1 id="dscrptn1">Турнир по FIFA</h1>
        <h1 id="dscrptn2">FIFA</h1>
      </div>
    </div>
    <div class="body">
      <h2>МЕСТО ПРОВЕДЕНИЯ</h2>
      <h3>
        Холл перед кабинетом Роботехники, рядом со столовой. </br> 
        <b>ПОСЛЕ 9-го УРОКА. </b> </br> </br> 
        <i>Если учстник отсутствует на матче более 3 минут, присуждается техническое поражение</i> </br> </br>
        <i>Если оба участника отсутствуют, играется следующий матч, если таковых нет, оба исключаются по истечении 3 минут</i> 
      </h3>
    </div>
    <h2>ОНЛАЙН ТАБЛИЦА</h2>
    <div class="outerbody">
      <div class="cell"><button type="button" class="btn btn-light" onclick="redirect()">Перейти к таблице</button></div>
    </div>
    <h2>СПИСОК УЧАСТНИКОВ</h2>
    <?php 
        $teachers = array(
            array("Ажгалиев Дидар", "Жапеков Ержан"),
            array("Жардеков Асылбек", "Максотов Армат"),
            array("Аюпов Темирлан", "Гайсин Ернар"),
            array("Мунбаев Саке", "Жанахметов Алтынбек"),
        );
        echo "<h2 class=\"groupname\">Персонал</h2>";
        foreach($teachers as $index){
            echo "<div class=\"group\">";
            echo "<div class=\"half1\">";
            echo "<h3>";
            echo $index[0];
            echo "</h3>";
            echo "</div>";
            echo "<div class=\"separation\"></div>";
            echo "<div class=\"half2\">";
            echo "<h3>";
            echo $index[1];
            echo "</h3>";
            echo "</div>";
            echo "</div>";
        }

        $teachers = array(
            array("Булатов Бекзат", "Муканов Арыстан"),
            array("Вихорев Тимур", "Азангалиев Арнур")
        );
        echo "<h2 class=\"groupname\">12 класс</h2>";
        foreach($teachers as $index){
            echo "<div class=\"group\">";
            echo "<div class=\"half1\">";
            echo "<h3>";
            echo $index[0];
            echo "</h3>";
            echo "</div>";
            echo "<div class=\"separation\"></div>";
            echo "<div class=\"half2\">";
            echo "<h3>";
            echo $index[1];
            echo "</h3>";
            echo "</div>";
            echo "</div>";
        }

        $teachers = array(
            array("Алибеков Кайсар", "Жангир Баянов"),
            array("Карин Альнур", "Утегенов Азат")
        );
        echo "<h2 class=\"groupname\">11 класс</h2>";
        foreach($teachers as $index){
            echo "<div class=\"group\">";
            echo "<div class=\"half1\">";
            echo "<h3>";
            echo $index[0];
            echo "</h3>";
            echo "</div>";
            echo "<div class=\"separation\"></div>";
            echo "<div class=\"half2\">";
            echo "<h3>";
            echo $index[1];
            echo "</h3>";
            echo "</div>";
            echo "</div>";
        }

        $teachers = array(
            array("Имангали Мирас", "Асет Жумин"),
            array("Сарсенгалиев Кадырбек", "Бектурган Ибрахим"),
            array("Мусралимов Алим", "Шопликов Алишер"),
            array("Слам Ералхан", "Абдигалиев Данабек"),
            array("Рысбеков Берик", "Акылбекулы Ансар"),
            array("Кеңесов Әли", "Мұқтар Әділет"),
        );
        echo "<h2 class=\"groupname\">10 класс</h2>";
        foreach($teachers as $index){
            echo "<div class=\"group\">";
            echo "<div class=\"half1\">";
            echo "<h3>";
            echo $index[0];
            echo "</h3>";
            echo "</div>";
            echo "<div class=\"separation\"></div>";
            echo "<div class=\"half2\">";
            echo "<h3>";
            echo $index[1];
            echo "</h3>";
            echo "</div>";
            echo "</div>";
        }

        $teachers = array(
            array("Сапаргали Елнур", "Бауыржан Нурторе"),
            array("Исатай Дастан", "Максот Даниял"),
            array("Токтасынов Аманжан", "Максотов Райынбек"),
            array("Серик Санжар", "Тауфик Ерулан"),
            array("Мірсейіт Арлан", "Нұрадин Медет"),
            array("Асқаров Нұұрсұлтан", "Бағдат Камиль"),
            array("Габдуалиев Ернар", "Серик Мират"),
        );
        echo "<h2 class=\"groupname\">9 класс</h2>";
        foreach($teachers as $index){
            echo "<div class=\"group\">";
            echo "<div class=\"half1\">";
            echo "<h3>";
            echo $index[0];
            echo "</h3>";
            echo "</div>";
            echo "<div class=\"separation\"></div>";
            echo "<div class=\"half2\">";
            echo "<h3>";
            echo $index[1];
            echo "</h3>";
            echo "</div>";
            echo "</div>";
        }

        $teachers = array(
            array("Есен Актлек", "Танатай Нурдаулет"),
            array("Берденғали Бибарыс", "Айтбай Нұсұлтан"),
            array("Павлов Роман", "Лукпанов Жан"),
            array("Есенгалиев Арсен", "Жұмалиев Жангир"),
        );
        echo "<h2 class=\"groupname\">8 класс</h2>";
        foreach($teachers as $index){
            echo "<div class=\"group\">";
            echo "<div class=\"half1\">";
            echo "<h3>";
            echo $index[0];
            echo "</h3>";
            echo "</div>";
            echo "<div class=\"separation\"></div>";
            echo "<div class=\"half2\">";
            echo "<h3>";
            echo $index[1];
            echo "</h3>";
            echo "</div>";
            echo "</div>";
        }

        $teachers = array(
            array("Нугманов Арсен", "Избасаров Азат"),
            array("Мусин Бексултан", "Серик Ануар"),
            array("Махмуд Адильжан", "Анвар Даниял"),
            array("Умаров Адлет", "Галимулла Амир"),
            array("Ихсан Сержан", "Мади Алтынбек"),
            array("Дауенов Чингиз", "Сагимбаев Мансур"),
            array("Есетов Жан", "Кунбулатов Арлан"),
            array("Шамиш Мейрбек", "Бахтыгереев Алихан"),
            array("Нургелдыулы Ерасыл", "Юсубалиев Рустам"),
            array("Тлеу Ерұлан", "Тыныштық Дархан"),
        );
        echo "<h2 class=\"groupname\">7 класс</h2>";
        foreach($teachers as $index){
            echo "<div class=\"group\">";
            echo "<div class=\"half1\">";
            echo "<h3>";
            echo $index[0];
            echo "</h3>";
            echo "</div>";
            echo "<div class=\"separation\"></div>";
            echo "<div class=\"half2\">";
            echo "<h3>";
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

