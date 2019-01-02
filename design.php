<!DOCTYPE html> 
<html lang="da">
    <head> 
        
        <title> Design</title>
        <?php include "overordnet.inc" ?>    
        <link rel="stylesheet" href="CSS/design.css">
     </head>
    <body>
        
    <?php include "menu.inc" ?>    
        
        <div id="pagewrap">
        
        <a href="illustrator.php"><div id="illustrator"> <!--Illustrator box start-->
            <div id="itekst">
                <h1> Illustrator</h1>
                <p> Vectorgrafik, Artboards, logoer, Figurer, Layer Masks osv.</p>
            </div>
                <div id="ibillede">    
                    <img id="ibillede" class="allebilleder" src="Billeder/ibillede400px.jpg"> 
                </div>
        </div> </a><!--Illustrator box slut-->
            
        <a href="photoshop.php"><div id="ps"> <!--Photoshop box start-->
            <div id="pstekst">
                <h1> Photoshop </h1> 
                <p> Billedebehandling, Manipulation, Pixels, Artboards, Layer osv.</p>
            </div>
                <div id="psbillede">    
                    <img id="psbillede" class="allebilleder" src="Billeder/psbillede400px.jpg"> 
                </div>
        </div></a> <!--Photoshop box slut-->    
        
        <a href="fotografering.php"><div id="fotografering"> <!--Fotografering box start-->
            <div id="fototekst">
                <h2> Fotografering</h2>
                <p> Lukketid, ISO, Blænde, lukkevide, Lys osv.</p>
            </div>
                <div id="fotobillede">
                    <img id="fotobillede" class="allebilleder" src="Billeder/fotobillede400px.jpg">
                </div>
        </div> </a><!--Fotografering box slut-->
    
        <a href="gestaltlove.php"><div id="gestalt"> <!--Gestaltlove box start-->
            <div id="gestalttekst">
                <h2> Gestaltlove</h2>
                <p> Proximity, Continuity, Simalarity, Perception osv.</p>
                
            </div>
                <div id="gestaltbillede">
                    <img id="gestaltbillede" class="allebilleder" src="Billeder/gestaltbillede400px.jpg">
                </div>
        </div> </a> <!--Gestaltlove box slut-->
        
        <a href="farve.php"><div id="farve"> <!--Farve og typografi box start-->
            <div id="farvetekst">
                <h2> Farve og Typografi </h2>
                <p> Farvehjul, Primær Farver, RGB, CMYK, Fonts, Weights, </p>
                
            </div>
                <div id="farvebillede">
                    <img id="farvebillede" class="allebilleder" src="Billeder/farvebillede400px.jpg">
                </div>    
        </div></a> <!--Farve og Typografi box slut-->
    
             <div id="felt12"> &nbsp;</div> <!--holder footer nede på siden-->
            
        </div> <!--pagewrap slut-->
        
            <?php include "footer.inc" ?>    

    </body>
</html>