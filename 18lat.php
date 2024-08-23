<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8" />
    <title>Oficjalny Program Sprawdzający Pełnoletność</title>
    <meta name="description" content="Zapomnisz dowodu, nie problem! Oto Oficjalny Program Sprawdzający Pełnoletność "/>
    <meta name="keywords" content="pełnoletność" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="author" content="Dominik " />
    <link rel="stylesheet"href="18.css" type="text/css" />
  
    
</head>

<body>
 
    <div id="container">

        <div id="logo">
        <h1>Program sprawdzający pełnoletność</h1>
        </div>

        <div id="nav">
        Menu strony<br/><br/>  
        <a href="18lat.php">Sprawdzanie Pełnoletności </a><br /><br />
        <a href="Autor.php">O autorze </a><br /><br />
        
        </div>

        <div id="content">
          
          <h1>Program sprawdzi czy masz 18 lat</h1>  

          <form action="18.php" method="post">

            Wybierz rok urodzenia:
            <select name='rok'>

                <?php
                //for($i=1950; $i<date('Y'); $i++){
                for( $i=date('Y'); $i>1950; $i--){
            
                    ?>
            <option value="<?php echo $i ?>"><?php echo $i ?></option>
            <?php }?>

            </select><br />


            Wybierz miesiac urodzenia:
            <select name="miesiac">
                
                <option value="1">Styczen</option>
                <option value="2">Luty</option>
                <option value="3">Marzec</option>
                <option value="4">Kwiecien</option>
                <option value="5">Maj</option>
                <option value="6">Czerwiec</option>
                <option value="7">Lipiec</option>
                <option value="8">Sierpien</option>
                <option value="9">Wrzesien</option>
                <option value="10">Pazdziernik</option>
                <option value="11">Listopad</option>
                <option value="12">Grudzien</option>

            </select><br />

            Wybierz dzień urodzenia:
            <select name='dzien'>

                <?php for($i=1; $i<32; $i++){ ?>
            <option value='<?php echo $i ?>'> <?php echo $i ?> </option>
            <?php }?>

            </select><br />

            <input type="submit" value="wyslij"><br>

          </form>

        </div>

        <div id="ad">
            <img src="" alt="AD"/>
        </div>

        <div id="footer">

            Dominik  - Oficjalny Program Sprawdzający Pełnoletność &copy; 2023 - <?php echo date('Y'); ?>

        </div>

    </div>

</body>
</html>

