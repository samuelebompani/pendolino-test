<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/style.css">
        <link rel="icon" type="image/x-icon" href="/media/favicon.ico">
        <title>Pendolino test</title>
    </head>
    <body>
        <?php include('components/navbar.php')?>
        <?php 
            $result = array(0,0,0);
            $names = array("Marco", "Dario", "Emanuele");
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                foreach($_POST as $ss => $s) {
                                    $index = (int)$s;
                                    $result[$index] += 1;
                                    print($result[0]);
                                    print($result[1]);
                                    print($result[2]);
                                }
                            }
            $max = 0;
            foreach($result as $i => $v) {
                if($v > $result[$max]) {
                    $max = $i;
                }
            }?>
        <div class="container">
            <div style="text-align: center;">
                <h2>Se fossi un conduttore di Pendolino, saresti <?php print($names[$max])?>!</h2>
            </div>

            <div style="text-align: center; margin-top: 2%;">
                <a href="/"><button class="submit-btn" type="submit">Torna al test</button></a>
            </div>
        </div>
        <?php include("components/footer.php"); ?>
    </body>
</html>