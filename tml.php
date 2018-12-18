<!DOCTYPE html>
<html lang="da">
    <head> 
        
        <title> HTML</title>
        <?php include "overordnet.inc" ?>
        <link rel="stylesheet" href="CSS/tml.css">


     </head>
    <body>
        
    <?php include "menu.inc" ?>    
        
        <div id="pagewrap">

        <div id="generelt"> <!--Generelt om HTML-->
            <h1> Generelt om HTML </h1> 
            
            <p class="tekst"> HTML står for Hyper Text Markup Language og er et kodesprog, som anvendes til at kode websites.</p> 
            
           <p class="tekst"> Når man arbejder med HTML-kodning foregår dette typisk i en Tekst-editor. En editor er en det program man bruger til at skrive HTML koder i. Dette kunne f.eks. være Notepad++, textedit, brackets osv. Fælles for disse editorer er at her arbejder man i ren tekst uden formatering.</p> 
                
            <p class="tekst">Vigtigt! Når man starter med et nyt HTML projekt i eksempelvis Brackets, så er det vigtigt at gemme projektet, som en HTML fil. Hvis man ikke starter med det, vil den browser man benytter ikke være i stand til at læse din kode. Man er altså nødt til at præcisere at man koder i HTML.</p>  
            
            <p class="tekst">HTML er et kodesprog som bruges til at skabe struktur på et website. Det kan være igennem overskrifter, brødtekster, tabeller, punktopstilling osv. Når vi taler om struktur, er det vigtigt at huske god kodeskik. Her er indrykning et meget essentielt punkt. Det skaber overblik for dig selv, men det gør det også muligt for andre at læse din kode.</p>
            
            <p class="tekst">HTML er derfor ikke tiltænkt til opsætning og layout på et website, men bruges derimod til at definere indhold på et site. </p>
            
            <p class="tekst">Derimod beskriver CSS hvordan layout og design skal se ud på en side. HTML har det formål at skabe struktur og fortælle en browser hvad indholdet (data) er. HTML fortæller at dette er min forside, tabel, overskrift, afsnit, billede, link osv.  </p>
            
            <p class="tekst">Formålet med HTML er at få tekst og billeder til at linke til andre HTML sider. I sidste ende er HTML det sprog, som en given browser bruger til at læse det indhold, man har lagt på et website.</p>    
            
            <p class="tekst">Markup er en måde at definere dit tekstindhold. Alt efter om du ønsker at skabe en overskrift h1 – h6 eller hvis du ønsker at indsætte en tabel.</p>    
        </div>  <!--Generelt om HTML slut-->
            
            
        <div id="elementer"> <!--Elementer og Tags om HTML-->
            <h1> Elementer og Tags </h1> 
            
            <p class="tekst"> En HTML kode består af en række elementer også kendt som tags. Hvert element har et åbnings-tag og et afslutningstag. Man bruger HTML elementer til at bestemme hvad der skal ske med den tekst eller data imellem tagsene.</p> 
            
            <p class="tekst"> Et eksempel på et element kunne være en overskrift h1 – h6. Overskifter bruges til at skabe overblik på et site, og inddeles efter betydning fra h1 (stor overskrift) til h6 (mindre overskrift) Dette er med til at angive vigtigheden af en overskrift, derfor er de hierarkisk inddelt. F.eks. overskriften &lt;Overskrift på min hjemmeside&gt; </p> 
                
            <p class="tekst">Andre eksempler på elementer kunne være Body, HTML, paragraph, title, header, footer, article, nav, img osv. Mange af disse elementer er også med til at forbedre din søgemaskineoptimering (SEO) Da bl.a. Google læser disse elementer. F.eks. article elementet er vigtigt i forhold til SEO, da det ofte fortæller noget om hovedindholdet på sitet. Dette kan være med til at give dig et højt organisk søgeresultat på google. Det er vigtigt at være opmærksom på at google også læser de elementer, som ikke er synlige på siden, eksempelvis din title. Så i forhold til SEO kan det godt betale sig at gøre sig umage med de forskellige elementer. </p>  
            
            <p class="tekst">Der findes mange forskellige elementer i HTML, et andet eksempel kunne være HTML elementet. Dette er et element der definerer at, hele dokumentet er HTML. Ligeledes har det et start tag &lt;html&gt; og sluttag &lt;/html&gt;. </p>
            
            <p class="tekst">Et andet element kunne være Body elementet, som beskriver selve indholdet der er synligt på siden. Her vil starttagget se sådan ud &lt;body&gt; og sluttagget &lt;/body&gt;. Som sagt alt hvad man skriver imellem body-elementets ”start tag” og ”slut tag” vil være synligt, når du åbner html-koden i en browser. Bemærk body elementet kan kun bruges en gang, derfor skal alt content som skal vises på siden indsættes i mellem &lt;body&gt; og &lt;body/&gt;.  </p>
            
            <p class="tekst">Elementer kan nestes – Det vil sige et element kan indeholde andre elementer. Et eksempel kunne være: Overskriften &lt;h1&gt; &lt;h1/&gt; på en hjemmeside som vil ligge under bodyelementet &lt;body&gt; &lt;body/&gt;, men bodyelementet ligger samtidig inden under html-elementet.</p>
            
        </div>  <!--Elementer og tags slut-->
            
        <div id="semantik"> <!--Semantiske tags start-->
            <h1> Semantiske Tags </h1> 
            
            <p class="tekst"> Tags som har semantisk betydning, er elementer som fortæller noget om indholdet, både i forhold til en søgemaskine, men også i forhold til mennesker. Fordelen ved at erstatte tags med semantiske tags er, at de fortæller noget om indholdet på et site, hvilket er hensigtsmæssigt i forhold til SEO, da f.eks. google læser alt tekst, som har betydning på din side. Dette vil være med til at forbedre dine søgeresultater. </p> 
            
           <p class="tekst"> Et eksempel på et semantisk tag kunne være ”article” – En artikel indeholder noget tekst som har betydning, og det kan samtidig læses af mennesker såvel som søgemaskiner. Dette kunne f.eks. være en blog eller nyhedsartikel.</p> 
                
            <p class="tekst">Et andet eksempel på et semantisk tag kunne være en header (Sidehoved). Det er et element som kan læse af både mennesker og søgemaskiner. Dette fortæller noget om indholdet på siden, da en header typisk, er en overskrift for en article eller section.</p>  
            
            <p class="tekst">Et tredje eksempel på et semantisk tag er en footer. Som på mange måder minder om en header. Forskellen er, at en footer fungerer som en slags sidefod, men indeholder information som kan læses af mennesker og søgemaskiner, derfor har indholdet betydning. Det kunne f.eks. være kontaktoplysninger, adresse, copyright info osv.</p>
            
            <p class="tekst">Andre semantiske tags kunne være: &lt;nav&gt;, &lt;figure&gt;, &lt;section&gt;, &lt;aside&gt;. Fælles for disse er, at de alle sammen definerer noget omkring indholdet på siden. </p>
            
            <p class="tekst">Her et par eksempler om ”ikke” semantiske tags. Første eksempel er div (inddeling) som bruges til at inddele noget, der skal formateres på en bestemt måde, men fortæller ikke noget om indholdet. Derfor har det ingen betydning for indholdet. </p>
            
            <p class="tekst">Et andet eksempel kunne være span, som minder lidt om div, og fortæller heller ikke noget om indholdet, og er derfor ikke et semantisk tag. </p>    
            
        </div>  <!--Semantiske Tags slut-->
            
        <div id="attributter"> <!--Attributter start-->
            <h1> Attributter </h1> 
            
            <p class="tekst"> Vi kan give vores tags forskellige attributter, alt efter hvad for nogle egenskaber vi ønsker at tillægge vores elementer.  Attributter bruges til at give yderligere oplysninger om HTML-elementer.</p> 
            
           <p class="tekst"> På et almindeligt website kunne det være relevant at indsætte et link. Ofte giver det høj troværdighed på søgemaskiner, at man har indgående og udgående links på et site.
           I det tilfælde vil man benytte href attributten – Her vil man først starte med at lave et anchor tag &lt;a&gt; Herefter specificerer man linket via href attributten. F.eks. &lt;a href=”https://www.dr.dk”&gt; Link til Danmarks Radio &lt;a/&gt;</p> 
                
            <p class="tekst">Et andet eksempel på en relevant attribut er, hvis man ønsker at indsætte et billede fra en side eller mappe. Først starter man med et billede tag &lt;img&gt; - Herefter udpeges selve filen med en src attribut. Src attributten er med til at bestemme hvorfra dit billede skal hentes fra, det kan være fra en mappe eller en side. Eksemplet vil se sådan ud: &lt;img src=”img_billede.jpg”&gt; </p>  
            
            <p class="tekst">Et tredje eksempel på en attribut kunne være alt-attributten, som angiver alternativ tekst. Der er flere fordele ved at have alternativ tekst til dine billeder. For det første er det smart i forhold til skærmlæsere, hvis f.eks. en blind person skal bruge din hjemmeside. Lad os sige, at vi har et billede af en hund, hvilket selvfølgelig vil være umuligt for en blind person at kunne se. Med alternativ tekst kan du beskrive, hvad der er vist på billedet, og derefter få en skærmoplæser til læse det højt for den blinde person. </p>
            
            <p class="tekst">Det kunne f.eks. se sådan ud: &lt;img scr=”img_hund.jpg” alt=”sort labrador med en bold”&gt; </p>
            
            <p class="tekst">Den anden fordel ved at skrive alternativ tekst er i forhold SEO. Søgemaskiner læser også din billedtekst, da det fortæller noget om indholdet på din side. Derfor vil det være med til at forbedre din ranking på Google og andre søgemaskiner.</p>
            
            <p class="tekst">Så ved at anvende alternativ tekst, slår man to fluer med et smæk. Man øger brugervenligheden, samtidig med at man forbedrer sine søgeresultater i forhold til søgemaskiner.</p>    
            
            <div id="website">
                <img id="hjemmeside" class="allebilleder" src="Billeder/hjemmeside.jpg">
            </div>
            
            <p class="tekst">Et sidste eksempel på en attribut, der kunne være relevant at bruge, er attributten (height og width), som angiver højde og bredde på et billede. I dette tilfælde er elementet img(billedet) og attributterne er først src (billedkilden) og dernæst width og heigt.</p>    
            
            <p class="tekst">Her et eksempel: &lt;img src=”img_hund.jpg” width=”300” height=”400”&gt;.</p>    
            
            
        </div>  <!--Attributter slut-->
        
        </div> <!--pagewrap slut-->
        
            <?php include "footer.inc" ?>    

    </body>
</html>