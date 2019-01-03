<!DOCTYPE html>
<html lang="da">
    <head> 
        
        <title> CSS grid</title>
        <?php include "overordnet.inc" ?>
        <link rel="stylesheet" href="CSS/grid.css">


     </head>
    <body>
        
    <?php include "menu.inc" ?>    
        
        <div id="pagewrap">

        <div id="genereltgrid"> <!--Generelt om Grids-->
            <h1> CSS Grids </h1> 
            
            <p class="tekst"> CSS grid er den nyeste standard indenfor styling af CSS. Det blev introduceret i efteråret 2017, og bliver betegnet som det mest revolutionerende siden responsive webdesign. Mange af principperne i CSS grid minder om konceptet med tabeller og CSS flexbox.</p> 
            
            <p class="tekst"> Den store forskel på CSS grid og CSS flexbox er, at CSS grid er tænkt til at arbejde i to retninger, både vertikalt og horisontalt, hvorimod CSS flexbox var tænkt til at arbejde i en retning. Derudover tager CSS grid udgangspunkt i layoutet, hvor at flexbox er mere styret af indholdet. </p> 
                
            <p class="tekst">Flexbox gjorde det svære at placere to billeder ved siden af hinanden, hvis de ikke havde samme størrelse, hvorimod grid selv finder ud af bredden, så det kun er selve højden man bliver nød til at forholde sig til. </p>  
            
            <p class="tekst">Man opdeler sit grid i grid-template-rows og grid-template-coloums. Rows er vandrette inddelinger og Coloums er de lodrette inddelinger.</p>  
            
            <p class="tekst">Tanken med CSS grid er, at man opretter en grid-container, som opdeles i det antal dele man har behov for. De forskellige dele kan oprettes som fractions, pixels, procenter, em og mange andre størrelser som HTML godtager. </p>  
            
            <p class="tekst">Inde i de forskellige dele i gridet placerer man sine ”child” elemeter, hvilket gør det nemmere at styre placeringen af sine elementer på siden, især i forhold til layout. </p> 
            
        </div> <!--Generelt om Grids slut-->
            
            
        <div id="responsive"> <!--Responsive start-->
            <h2> Responsive Design</h2> 
            
            <p class="tekst"> Når man designer hjemmesider i dag, gør man det til forskellige skærmstørrelser desktop, tablet, mobil. Tankegangen er, at man designer ”mobile first” og derefter designer man tablet og desktop. 
            Grunden til at man tænker ”mobile first” er, at tilgange til hjemmesider i dag oftere foregår på mobil. 
            </p>  
            
            <p class="tekst"> Det kræver en gennemtænkt designplan, men derudover er det ikke specielt vanskeligt at håndtere. Fordelen er, at man kan benytte det samme HTML og CSS til alle tre enheder. </p>
            
            <p class="tekst">
            Rent teknisk indsætter man nogle forskellige breakpoints, der fortæller, hvornår siden skal vises som mobil, tabler og desktop. 
            </p>  
            
         <div id="respons1container">
            
            <img id="respons1" class="allebilleder" src="Billeder/respons1.jpg">
            
            <blockquote>Eksemepel: Denne side er responsiv</blockquote>
            
        </div>    
            
            <p class="tekst">
            På dette eksempel er der indsat et breakingpoint ved 500 pixel. Det vil sige, når skærmen er mindre end 500 pixel vil baggrundsfarven være gul, og når skærmen er er større end 500 pixel vil baggrundsfarven være sort.</p>  
            
            <p class="tekst"> Således kan man tilpasse sit layout til forskellige skærmstørrelser og enheder</p>  
            
            
        </div>  <!--Responsive slut-->  
            
        <div id="respons2container"> <!--eksempel 2-->
            
            <img id="respons2" class="allebilleder" src="Billeder/respons2.jpg">
            
            <blockquote>Eksemepel: Samme side som den sorte</blockquote>
            
        </div> <!--eksempel 2 slut-->     
            
        
         <div id="respons3container"> <!--eksempel 3-->
            
            <img id="respons3" class="allebilleder" src="Billeder/respons3.jpg">
            
            <blockquote>Eksemepel: CSS til de to sider</blockquote>
            
        </div> <!--eksempel 3 slut-->      
            
            
            
            <div id="felt8"> &nbsp;</div> <!--holder footer nede på siden-->
        
        </div> <!--pagewrap slut-->
        
            <?php include "footer.inc" ?>    

    </body>
</html>