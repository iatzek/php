<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo('<pre>');
        
        $c = '3.0';
        $a = doubleval($c);
        
        echo("to jest zmienna: " . $a ."\n");
        echo("to też: $a\n");
        echo('a to nie $a' . "\n");
        echo('</pre>');
        ?>
    </body>
</html>
