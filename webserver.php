<!DOCTYPE html>
<html lang="da">
    <head> 
        
        <title> Webserver</title>
        <?php include "overordnet.inc" ?>
        <link rel="stylesheet" href="CSS/webserver.css">


     </head>
    <body>
        
    <?php include "menu.inc" ?>    
        
        <div id="pagewrap">

        <div id="webserver"> <!--Webserver start-->
            <h1> Webserver og FTP </h1> 
            
            <p class="tekst"> En webserver bruges til at placere alle filer og billeder til en hjemmeside, så de kan tilgås via et netværk. Den leverer HTML, CSS, javascript og billeder til klienter (browsere) via http.
            </p> 
            
            <p class="tekst"> Der findes mange forskellige typer servere f.eks. fil-server, print-server, ftp-server, mail-server, data-server, SSH-server, RDP-server. Vi har primært beskæftiget os med webserver og FTP-server.</p> 
            
            <p class="tekst">En webserver tilgås med en webklient, det kunne være en browser som Firefox. I dette tilfælde vil firefox koble sig til serveren og udveksle information med den. Webserveren har en IP-adresse, som ofte er tilknyttet et domænenavn f.eks. www.dania.dk. Browseren bruger enten ip-adressen eller domænenavnet til at finde hjemmesiden. Domænenavnet oversættes i en DNS-server til den rigtige IP-adresse. </p> 
            
            <p class="tekst">Derudover har vi også arbejdet med FTP-server, som betyder File Transport Protocol - FTP er en meget anvendt metode til at udveksle filer til en webserver. Det er et program, som giver adgang til serveren. Et eksempel på et FTP-program kunne være FileZilla, som vi har arbejdet med i undervisningen, og brugt til at tilgå webserveren. </p>
            
            
            </div>  <!--Webserver slut-->
            
                <div id="filezillacontainer">
                    
                    <img id="filezilla" class="allebilleder" src="Billeder/filezilla.jpg">
                
                 <blockquote> Filezilla er den FTP-Klient jeg har brugt til at oploade denne side</blockquote>    
                    
            </div>  
            
        <div id="felt4"> &nbsp;</div> <!--holder footer nede på siden-->
            
        </div> <!--pagewrap slut-->
        
            <?php include "footer.inc" ?>    

    </body>
</html>