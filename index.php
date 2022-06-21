<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/style.css">
        <title>Pendolino test</title>
        <?php 
            class Question {
                public $title;
                public $body;
                public $opt1;
                public $opt2;
            
                public function __construct($title, $body, $val1, $val2) {
                    $this->title = $title;
                    $this->body = $body;
                    $this->opt1 = $val1;
                    $this->opt2 = $val2;
                }
            }
            $questions = array(new Question("Il traffico e l'arbre magique - PND#34", 
                "A Roma c’è molto traffico, quasi come a Los Angeles. Puoi risolvere questo problema per sempre, ma non solo: in qualunque posto arrivi trovi sempre parcheggio, non solo a Roma. In cambio, per tutta la vita e in qualunque contesto, devi portare al collo un arbre magique. Se le persone ti chiedono e/o ti prendono in giro, devi far finta di non averlo. Ovviamente l’arbre magique rimane su anche durante I rapporti sessuali", 
                "1", "0"));
        ?>
    </head>
    <body>
        <?php include('components/navbar.php')?>
        <div class="container">
            <form action="result.php" method="post">
                <?php
                foreach($questions as $qs => $q) {
                    print('<div class="q-container">');
                    print("<div><h2>".$q ->title."</h2>");
                    print('<div class="q-body">'.$q->body.'</div></div>');
                    print('<div class="q-option">
                                <div>
                                    <input type="radio" id="0" name="q1" value="'.$q->opt1.'">
                                    <label for="0">Accetto</label>
                                </div>
                                <div>
                                    <input type="radio" id="1" name="q1" value="'.$q->opt2.'">
                                    <label for="1">Non accetto</label>
                                </div>
                            </div>');
                    print("</div>");
                }?>
                <div style="text-align: center; margin-top: 2%;">
                    <button class="submit-btn" type="submit">Conferma</button>
                </div>
            </form>
            
        </div>
        <?php include('components/footer.php')?>
    </body>
</html>