<!DOCTYPE html> <!--hallo-->
<html lang="da">
    <head> 
        
        <title> Forside</title>
        <?php include "overordnet.inc" ?>    

     </head>
    <body>
        
    <?php include "menu.inc" ?>    
        
        <div id="pagewrap">
        
        
        <div id="Forsidebillede">
            <img id="fbillede" class="allebilleder" src="Billeder/soren400px.jpg">
        </div>

        <div id="forsidetekst"> 
            <h1> Læringsportfolio ved Søren Roland Jessen.</h1> 
            <p class="tekst"> Mit navn er Søren, og jeg er studerende på Erhvervsakedemi Dania i Skive, hvor jeg er ved at uddanne mig til multimediedesigner. Dette er mit eksamensprojekt for 1. semester. </p> 
            
           <p class="tekst"> Her på siden vil jeg beskrive de forskellige fag Webudvikling, Design, Kommunikation, Online Marketing samt de emner og projekter jeg har arbejdet med i løbet af året.  Overordnet set kan du læse omkring min læring og erfaringer fra 1. Semester på multiemediedesign. </p> 
                
            <p class="tekst">Derudover vil mine refleksioner omkring dette projekt, og semesteret generelt fremgå på siden. Her vil jeg løbende give konkrete eksempler på, hvad jeg har arbejdet med. </p>    
                
        </div>
        
        <a href="webudvikling.php"><div id="webudvikling"> <!--webudvikling box start-->
            <div id="webtekst">
                <h2> Webudvikling</h2>
                <p> Her kan du læse mere omrking HTML, CSS, CSS Grid, IA, Git, Github osv.</p>    
            </div>
                <div id="webbillede">    
                    <img id="webbillede" class="allebilleder" src="Billeder/webudvikling400px.jpg"> 
                </div>
        </div></a><!--webudvikling box slut-->
        
        <a href="kommunikation.php"><div id="kommunikation"> <!--kommunikations box start-->
            <div id="komtekst">
                <h2> Kommunikation</h2>
                <p> Læs mere om Brugertest, Tekstproduktion, Teknikker til præsentation, BMC osv.</p>
            </div>
                <div id="kombillede">
                    <img id="kombillede" class="allebilleder" src="Billeder/kommunikation400px.jpg">
                </div>
        </div> </a><!--kommunikations box slut-->
    
        <a href="design.php"><div id="design"> <!--design box start-->
            <div id="designtekst">
                <h2> Design</h2>
                <p> Vi arbejdede med Gestaltlove, Illustrator, Vectorgrafik, Photoshop, layermasks osv. </p>
            </div>
                <div id="designbillede">
                    <img id="designbillede" class="allebilleder" src="Billeder/design400px.jpg">
                </div>
        </div> </a> <!--design box slut-->
        
        <a href="online.php"><div id="onlinemarkedsforing"> <!--om box start-->
            <div id="omtekst">
                <h2> Online Markedsføring</h2>
                <p>Guldkorn fra Carsten Guldborg omkring SEO, Facebook, Instagram, konvertering osv.</p>
            </div>
                <div id="ombillede">
                    <img id="ombillede" class="allebilleder" src="Billeder/online400px.jpg">
                </div>    
        </div> </a><!--om box slut-->
    
        <a href="designthinking.php"><div id="designthinking"> <!--desing thinking box start-->
            <div id="dttekst">   
                <h2> Design Thinking</h2>
                <p> SmartPark var et projekt vi udviklede i forbindelse med Design Thinking.</p>
            </div>
                <div id="dtbillede">
                    <img id="dtbillede" class="allebilleder" src="Billeder/designthinking400px.jpg">
                </div>    
        </div> </a><!--design thinking box slut-->
        
        <a href="refleksion.php"><div id="refleksion"> <!--refleksion box start-->
            <div id="refleksiontekst">
                <h2> Refleksion</h2>
                <p> Vil du vide mere om mine tanker og overvejelser omkring 1. semester og læse min Portfolio</p>
            </div>
                <div id="refleksionbillede">
                    <img id="refleksionbillede" class="allebilleder" src="Billeder/refleksion400px.jpg">
                </div>    
        </div> </a> <!--refleksion box slut-->
            
        <div id="felt"> &nbsp;</div> <!--holder footer nede på siden-->   
        
        </div> <!--pagewrap slut-->
        
            <?php include "footer.inc" ?>    

    </body>
</html>