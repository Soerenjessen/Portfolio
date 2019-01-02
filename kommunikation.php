<!DOCTYPE html> 
<html lang="da">
    <head> 
        
        <title> Kommunikation</title>
        <?php include "overordnet.inc" ?>    
        <link rel="stylesheet" href="CSS/kommunikation.css">

     </head>
    <body>
        
    <?php include "menu.inc" ?>    
        
        <div id="pagewrap">
        
        <a href="pmodeller.php"><div id="pmodel"> <!--Produktionsmodeller box start-->
            <div id="pmtekst">
                <h1> Kommunikation<br>og Produktions-<br>modeller</h1>
                <p>Paradigmer, Laswell, AIDA osv. </p>
            </div>
                <div id="pmbillede">    
                    <img id="pmbillede" class="allebilleder" src="Billeder/pmbillede400px.jpg"> 
                </div>
        </div></a> <!--Produktionsmodeller box slut-->
            
        <a href="present.php"><div id="pteknik"> <!--Præsentationsteknik box start-->
            <div id="ptekniktekst">
                <h1> Præsentations-<br>teknik </h1>
                <p> Elevatortale, Dispositio, Taler, Kropssprog osv.</p>
            </div>
                <div id="ptbillede">    
                    <img id="ptbillede" class="allebilleder" src="Billeder/ptbillede400px.jpg"> 
                </div>
        </div></a> <!--Præsentationsteknik box slut-->    
        
        <a href="tekstpro.php"><div id="tproduktion"> <!--tekstproduktion box start-->
            <div id="tproduktiontekst">
                <h2> Tekstproduktion</h2>
                <p> Find din indre "Jørgen Forfatter" frem.</p>
            </div>
                <div id="tproduktionbillede">
                    <img id="tproduktionbillede" class="allebilleder" src="Billeder/tproduktionbillede400px.jpg">
                </div>
        </div></a> <!--Tekstproduktion box slut-->
    
        <a href="brugertest.php"><div id="bruger"> <!--Brugertest box start-->
            <div id="brugertekst">
                <h2> Brugertest</h2>
                <p> Videnskabsteori, Kortsortering, gangstertest osv.</p>
                
            </div>
                <div id="brugerbillede">
                    <img id="brugerbillede" class="allebilleder" src="Billeder/brugerbillede400px.jpg">
                </div>
        </div> </a> <!--Brugertest box slut-->
        
        <a href="bmc.php"><div id="bmc"> <!--BMC box start-->
            <div id="bmctekst">
                <h2> Business Model Canvas </h2>
                <p> Forretnings-<br>forståelse, strategisk analyse osv.</p>
                
            </div>
                <div id="bmcbillede">
                    <img id="bmcbillede" class="allebilleder" src="Billeder/bmcbillede400px.jpg">
                </div>    
        </div></a> <!--BMC box slut-->
    
            <div id="felt11"> &nbsp;</div> <!--holder footer nede på siden-->
            
        </div> <!--pagewrap slut-->
        
            <?php include "footer.inc" ?>    

    </body>
</html>