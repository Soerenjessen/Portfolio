<!DOCTYPE html>
<html lang="da">
    <head> 
        
        <title> CSS</title>
        <?php include "overordnet.inc" ?>
        <link rel="stylesheet" href="CSS/cs.css">


     </head>
    <body>
        
    <?php include "menu.inc" ?>    
        
        <div id="pagewrap">

        <div id="genereltcss"> <!--Generelt om CSS-->
            <h1> Generelt om CSS </h1> 
            
            <p class="tekst"> CSS står for cascading style sheet. Det er et kodesprog, som vi bruger til at style vores HTML. Det smarte ved at bruge CSS er, at vi kan adskille struktur (HTML) og udseende (CSS). Man opretter et HTML dokument, hvor man henviser til sit CSS stylesheet.  På den måde forstår HTML´en, hvor den skal hente udseende eller stylingen fra.</p> 
            
           <p class="tekst"> Et stylesheet er en samling af regler, som hele tiden kan overskrides. Det er det, vi kalder kaskaderegler. Det seneste vi bestemmer, er det der gælder.</p> 
                
            <p class="tekst">Første version af CSS blev udviklet af Håkum Wium Lie. I dag understøtter alle browsere CSS. </p>  
            
            <p class="tekst">Der er tre måder at skrive CSS på. Den ene måde er Embedded, her skriver man CSS ind i Head på html´en. </p>  
            
            <p class="tekst">Den anden måde er, at style CSS i et separat stylesheet. Det er med til at sikre ensartethed og overblik. Derudover kan man bruge den samme styling i andre dokumenter. Det er denne fremgangsmåde, som vi primært har beskæftiget os med.  </p>  
            
            <p class="tekst">Den tredje måde er inline CSS. Her skriver man CSS´en ind i HTML. Det gør man ved at vælge attributten style, og herefter vælges en attributværdi. Det er ikke en fremgangsmåde, der er efterstræbelsesværdig, da den hurtig bliver upraktisk og svær at læse.</p> 
            
        </div> <!--Generelt om CSS slut-->
            
            
        <div id="syntaks"> <!--CSS syntaks start-->
            <h1> CSS Syntaks </h1> 
            
            <p class="tekst"> CSS-syntaks handler om den grammatik, der er i CSS. Her er der nogle forskellige begreber, som er vigtige at have styr på.</p>  
            
            <p class="tekst"> En selector angiver, hvad det er man ønsker at style. Der findes fire forskellige selector. </p>
            
            <p class="tekst">1. Element selector fokuserer på almindelige tags såsom body, h1, p, article osv.</p> 
            
            <p class="tekst"> 2. Id selector bruges, når det er et helt specifikt emne man vil style. Man mærker op med et id inde i html, og inde i CSS skriver man et #.</p> 
            
            <p class="tekst"> 3. Class selector bruges, når man ønsker at style flere elementer på samme måde. Dette gøres ved at man skriver en class inde i tagget i html, og sætter et punktum inde i CSS.</p> 
            
            <p class="tekst"> 4. Pseudo selector kan f.eks. være når, man bruger hover.</p> 
            
            
            
            
            <p class="tekst"> Derudover er der en række deklarationer, som bruges til at fortælle, hvorfra man gerne vil foretage en specifik styling. En deklaration startes med en krøllet parentes { og sluttes med en krøllet parentes }. Inde for disse parenteser har vi nogle properties (egenskaber) og values (værdier), som i øvrigt er adskilt af et kolon. Propertyen bestemmer, hvad vi gerne vil style, det kunne f.eks. være back-ground color, og valuen er selve farven, det kunne f.eks. være blue. Efter valuen sætter man et semikolon, der afslutter valuen. </p>  
            
        </div>  <!--CSS Syntaks slut-->
            
        
        <div id="deklerationcontainer">
            
            <img id="dekleration" class="allebilleder" src="Billeder/dekleration.jpg">
            
            <blockquote>CSS Syntaks</blockquote>
            
        </div>     
            
            
        <div id="csseksempelcontainer">
            
            <img id="csseksempel" class="allebilleder" src="Billeder/csseksempel.jpg">
            
            <blockquote>Eksempel: Jeg har brugt CSS til styling af denne side</blockquote>
            
        </div>      
        
             <div id="felt5"> &nbsp;</div> <!--holder footer nede på siden-->
            
        </div> <!--pagewrap slut-->
        
            <?php include "footer.inc" ?>    

    </body>
</html>