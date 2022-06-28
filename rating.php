<!DOCTYPE html>
<html>
    <head>
        <?php include('components/header.html') ?>
    </head>
    <body>
        <?php include('components/navbar.php')?>
        <div style="background-color: #ff594c; padding-bottom:5%;">
            <div class="container">
                <?php 
                    $players = ['Player 1', 'Player 2'];
                    $visible = [true, false];
                    for($i = 0; $i <=count($players)-1; $i++){
                        print('<div class="q-container" style="text-align: center;"><div><h2>');
                        print($players[$i]);
                        print('</h2>');
                        print('<button class="submit-btn" type="submit">Sottovalutato</button>');
                        print('<button class="submit-btn" type="submit">Giustamente valutato</button>');
                        print('<button class="submit-btn" type="submit">Sopravvalutato</button>');
                        print('</div></div>');
                    }
                ?>
            </div>
        </div>
        <?php include('components/footer.php')?>
    </body>
</html>