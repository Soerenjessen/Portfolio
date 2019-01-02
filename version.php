<!DOCTYPE html>
<html lang="da">
    <head> 
        
        <title> Versionsstyring</title>
        <?php include "overordnet.inc" ?>
        <link rel="stylesheet" href="CSS/version.css">


     </head>
    <body>
        
    <?php include "menu.inc" ?>    
        
        <div id="pagewrap">

        <div id="version"> <!--Generelt om version-->
            <h1> Versionsstyring </h1> 
            
            <p class="tekst"> Vi bruger versionsstyring til at holde styr på forskellige delprojekter, og samtidig giver det os mulighed for at samarbejde med andre kode-hajer om det samme projekt. Vi bruger det også til at undgå fejl i vores kode, men hvis der alligevel opstår nogle fejl heri, har vi mulighed for at gå tilbage og rette dem, og sammenligne de forskellige kodeløsninger. </p> 
            
            <p class="tekst"> Grunden til at versionsstyring er relevant for os som multimediedesigner er, at alle professionelle it-projekter benytter sig af versionsstyring, uanset om man udvikler apps, hjemmesider, systemer osv. Det er altså blevet en standard i dagens it-verden.</p> 
                
            <p class="tekst">I praksis har vi lært at bruge Github til versionsstyring. Her er det vigtigt at slå fast, at Git og Github ikke er det samme.</p>  
            
        </div> <!--Generelt om version slut-->
            
            
        <div id="git"> <!--Git start-->
            <h2> Git </h2> 
            
            <p class="tekst"> Git er en protokol, altså et versionsstyringssystem. Det blev i øvrigt udviklet af Linus Thorvalds i forbindelse med udviklingen af Linux styresystem. 
            </p>  
            
            <p class="tekst"> Hvorimod Github er en tjeneste som benytter sig af Git. Github fungerer i dag som kodedelingsside, hvor kode-hajer fra hele verden kan udveksle koder og erfaringer. I dag bliver Github også brugt som et socialt medie, hvor bl.a. mange store open source-projekter bliver hostet.</p>
            
         <div id="githubbcontainer">
            
            <img id="githubb" class="allebilleder" src="Billeder/githubb.jpg">
            
            <blockquote>Github</blockquote>
            
        </div>       
            
        </div>  <!--Git slut-->
            
        <div id="repository"> <!--Repository start-->
            <h2> Repository </h2> 
            
            <p class="tekst"> Et repository er en projekt-mappe, hvor man oploader sine filer til.   
            </p>  
            
        <div id="reposcontainer">
            
            <img id="repos" class="allebilleder" src="Billeder/repos.jpg">
            
            <blockquote>Dette er mit Repository til denne side</blockquote>
            
        </div>   
            
            
        </div>  <!--Repository slut-->    
        
        <div id="branch"> <!--Branch start-->
            <h2> Branch </h2> 
            
            <p class="tekst"> En branch er gren af projektet, som oprettes i dit repository. Det bruges til, at man kan arbejde videre med sin kode, selvom master-branchen er online. Bemærk en Master Branch er selve hovedprojektet  
            </p>  
            
        </div>  <!--Branch slut-->   
            
        <div id="commit"> <!--Commit start-->
            <h2> Commit </h2> 
            
            <p class="tekst"> Når man comitter en branch svarer det til at gemme den seneste kodeversion. På den måde kan man altid finde tilbage til tidligere kodeversioner. 
            </p>  
            
        </div>  <!--Commit slut-->  
        
        <div id="pull"> <!--Pull request start-->
            <h2> Pull Request </h2> 
            
            <p class="tekst"> En pull request er egentlig bare et forslag til en ny kodeversion. Pull Request gives typisk af andre folk, som også arbejder på det samme projekt. Det vil sige, når en anden kodehaj har været ved at ændre i koden, kan man gå ind og se forskellen på koden før og efter.
            </p>  
            
        </div>  <!--Pull request slut--> 
            
        <div id="merge"> <!--Merge start-->
            <h2>Merge</h2> 
            
            <p class="tekst"> Når man merger kan man samle forskellige branches i f.eks. en master branch. Dette kan foregå ved at man f.eks. accepterer de ændringer som er sket i en pull request, og merger dem til at være den nye online version. 
            </p>  
            
        </div>  <!--Merge slut-->   
            
            <div id="felt9"> &nbsp;</div> <!--holder footer nede på siden-->
        
        </div> <!--pagewrap slut-->
        
            <?php include "footer.inc" ?>    

    </body>
</html>