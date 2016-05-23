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
        
	if ($a === $c)
	    echo('$a i $c są równe (?)');
	else
	    echo('$a i $ nie są równe...');

        ?>
    </body>
</html>
