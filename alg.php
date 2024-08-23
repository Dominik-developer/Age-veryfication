<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8" />
    <title>Oficjalny Program Sprawdzający Pełnoletność</title>
    <meta name="description" content="ZApomnisz dowodu, nie problem! Oto Oficjalny Program Sprawdzający Pełnoletność "/>
    <meta name="keywords" content="pełnoletność" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="author" content="Dominik " />
    <link rel="stylesheet"href="styles.css" type="text/css" />
  
    
</head>

<body>
 
    <div id="container">

        <div id="logo">
            <h1>Program sprawdzający pełnoletność</h1>
        </div>

        <div id="nav">
            Menu strony<br/><br/>  
            <a href="index.php">Sprawdzanie Pełnoletności </a><br /><br />
            <a >O autorze </a><br /><br />
            
        </div>

        <div id="content">
          
        <h1>Program sprawdzi czy masz 18 lat</h1>  

          <?php
            $rok=$_POST['rok'];
            $miesiac=$_POST['miesiac'];
            $dzien=$_POST['dzien'];
    
            if($_POST['rok']+18>date('Y')){
                ?>
                za młody, wróć później / too young, come back later
                <?php
            }else{
                if($_POST['rok']+18==date('Y') && $_POST['miesiac']>date('m')){
                ?>
                    Za młody, wróc później/ too young, come back later
                <?php
                }else{
                ?>
                    Wystarczajaco stary, zapraszamy / old enough
            <?php
                }
            }

            ?>
        </div>

        <div id="ad">
            <img src="" alt="AD"/>
        </div>

        <div id="footer">
            Dominik - Oficjalny Program Sprawdzający Pełnoletność &copy; 2023 - <?php echo date('Y'); ?>
        </div>

    </div>

</body>
</html>
