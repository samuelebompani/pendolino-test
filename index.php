<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/style.css">
        <title>Pendolino test</title>
    </head>
    <body>
        <?php include('components/navbar.php')?>
        <div class="container">
            <form action="result.php" method="post">
                <div class="q-container">
                    <div><h2>Il traffico e l'arbre magique - PND#34</h2>
                        <div class="q-body">A Roma c’è molto traffico, quasi come a Los Angeles. Puoi risolvere questo problema per sempre, ma non solo: in qualunque posto arrivi trovi sempre parcheggio, non solo a Roma. In cambio, per tutta la vita e in qualunque contesto devi portare al collo un arbre magique. Se le persone ti chiedono e/o ti prendono in giro, devi far finta di non averlo. Ovviamente l’arbre magique rimane su anche durante i rapporti sessuali.</div>
                    </div>
                    <div class="q-option">
                        <div>
                            <input type="radio" id="1" name="q1" value="1">
                            <label for="1">Accetto</label>
                        </div>
                        <div>
                            <input type="radio" id="2" name="q1" value="2">
                            <label for="2">Non accetto</label>
                        </div>
                    </div>
                    
                </div>
                <div style="text-align: center; margin-top: 2%;">
                    <button class="submit-btn" type="submit">Conferma</button>
                </div>
            </form>
            
        </div>
        <?php include('components/footer.php')?>
    </body>
</html>