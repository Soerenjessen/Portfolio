<!DOCTYPE html> <!--hallo-->
<html lang="da">
    <head> 
        
        <title> Webudvikling</title>
        <?php include "overordnet.inc" ?>    
        <link rel="stylesheet" href="CSS/webudvikling.css">

     </head>
    <body>
        
    <?php include "menu.inc" ?>    
        
        <div id="pagewrap">
        
        <a href="tml.php"><div id="tml"> <!--HTML box start-->
            <div id="tmltekst">
                <h1> HTML</h1>
                <p> Semantiske tags, Struktur, Elementer, Kodeskik, Editor osv</p>
            </div>
                <div id="tmlbillede">    
                    <img id="tmlbillede" class="allebilleder" src="Billeder/htmlbillede400px.jpg"> 
                </div>
        </div></a> <!--HTML box slut-->
            
        <a href="historie.php"><div id="historie"> <!--internettets historie box start-->
            <div id="historietekst">
                <h1> Internettets Historie</h1>
                <p> Historien bag World Wide Web og dens pionerer </p>
            </div>
                <div id="historiebillede">    
                    <img id="historiebillede" class="allebilleder" src="Billeder/historiebillede400px.jpg"> 
                </div>
        </div></a> <!--Internettets historie box slut-->    
        
        <a href="webserver.php"><div id="webserver"> <!--webserver box start-->
            <div id="servertekst">
                <h2> Webserver</h2>
                <p> Her kan du finde information om Server, Klienter, FTP Server osv </p>
            </div>
                <div id="serverbillede">
                    <img id="serverbillede" class="allebilleder" src="Billeder/serverbillede400px.jpg">
                </div>
        </div> </a><!--webserver box slut-->
    
        <a href="css.php"><div id="css"> <!--CSS box start-->
            <div id="csstekst">
                <h2> CSS</h2>
                <p> Kaskaderegler, Styling, Layout, Class, Id, Selectors osv</p>
                
            </div>
                <div id="cssbillede">
                    <img id="cssbillede" class="allebilleder" src="Billeder/cssbillede400px.jpg">
                </div>
        </div> </a> <!--CSS box slut-->
        
        <a href="plan.php"><div id="planning"> <!--Planlægning box start-->
            <div id="plantekst">
                <h2> Planlægning og Overordnet Design</h2>
                <p> Det Bette Ismejeri</p>
                
            </div>
                <div id="planbillede">
                    <img id="planbillede" class="allebilleder" src="Billeder/planbillede400px.jpg">
                </div>    
        </div> </a><!--Planlægning box slut-->
    
        <a href="work.php"><div id="workshop"> <!--Workshop box start-->
            <div id="worktekst">   
                <h2> HTML og CSS Workshop</h2>
                <p> HTML Tabeller og Styling af dem</p>
                
            </div>
                <div id="workbillede">
                    <img id="workbillede" class="allebilleder" src="Billeder/workbillede400px.jpg">
                </div>    
        </div> </a><!--Workshop box slut-->
        
        <a href="grid.php"><div id="grids"> <!--CSS Grid box start-->
            <div id="gridtekst">
                <h2> CSS Grid</h2>
                <p> Responsive Webdesign, Grid Container, Mobile First</p>
            
            </div>
                <div id="gridbillede">
                    <img id="gridbillede" class="allebilleder" src="Billeder/gridbillede400px.jpg">
                </div>    
        </div></a> <!--CSS Grid box slut-->
            
        <a href="version.php"><div id="version"> <!--Versionsstyring box start-->
            <div id="versiontekst">
                <h2> Versionsstyring</h2>
                <p> Github, Protokoller, projektmapper, Commits osv</p>
            
            </div>
                <div id="versionbillede">
                    <img id="versionbillede" class="allebilleder" src="Billeder/versionbillede400px.jpg">
                </div>    
        </div></a> <!--Versionsstyring box slut-->    
            
        <a href="arktiktur.php"><div id="ia"> <!--Informationsarkitektur box start-->
            <div id="iatekst">
                <h2> Informations-<br>arkitektur</h2>
                <p> Organisering og Struktur af information</p>
            
            </div>
                <div id="iabillede">
                    <img id="iabillede" class="allebilleder" src="Billeder/iabillede400px.jpg">
                </div>    
        </div></a> <!--Informationsarkitektur box slut-->    
            
        <a href="onepage.php"><div id="onepage"> <!--One page box start-->
            <div id="onetekst">
                <h2> One Page</h2>
                <p> Biotex Bent og One Page Projektet</p>
            
            </div>
                <div id="onebillede">
                    <img id="onebillede" class="allebilleder" src="Billeder/onebillede400px.jpg">
                </div>    
        </div></a> <!--One page box slut-->
            
            <div id="felt1"> &nbsp;</div> <!--holder footer nede på siden-->     
        </div> <!--pagewrap slut-->
        
            <?php include "footer.inc" ?>    

    </body>
</html>