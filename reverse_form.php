<html lang="ru">
<meta charset="utf-8">

<link rel="stylesheet" href="css/styles.css">
<head>
    <title>Nix Education</title>
</head>

<body>
<main>

    <?php
    function mb_strrev($str){
        preg_match_all('/./us', $str, $ar);
        return implode('',array_reverse($ar[0]));
    }

    echo mb_strrev($_POST["reverse"]);
    ?>
    
    <form action="form.html">
        <input type="submit" value="назад" >
    </form>
</main>

<footer></footer>
</body>
</html>