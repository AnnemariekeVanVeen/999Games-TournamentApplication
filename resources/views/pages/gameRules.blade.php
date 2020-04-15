@extends('layouts.app')

@section('content')
    <div class="bg-footer">
        <div class="container">
            <br>
            <div class="head-faq title-margin">
                <h1>Spelregels</h1>
            </div>
            <div class="row rules-outer">
                <div class="col rules-inner">
                    <p>
                        De Zuid-Franse stad Carcassonne is beroemd door haar unieke vestingen uit de tijd van de Romeinen en de Ridders. De spelers proberen met hun 'volgelingen' op de straten en in de stad, op de weiden en in de kloosters in de omgeving van Carcassonne hun geluk te vinden. De uitbouw van die wijde omgeving ligt in hun handen. Door het gepast inzetten van hun volgelingen als handelsreizigers, ridders, boeren of monniken effenen ze hun weg naar succes.
                    </p>
                    <ul>
                        <li>
                            <h2>Spelmateriaal:</h2>
                            <p>
                                72 landschapskaarten (waarvan 1 startkaart met een donkere rugzijde) - Deze kaartjes bevatten stadsdelen, straatdelen, kruispunten, weilanden en/of kloosters.
                            </p>
                            <p>
                                40 'volgelingen' (telkens 8 per kleur) - Elke figuur kan als ridder, handelsreiziger, boer of monnik ingezet worden. Één van de figuren wordt op de puntentabel gebruikt.
                            </p>
                            <p>
                                1 waarderingstabel - Deze geeft op elk moment de 'tussenstand' aan.
                            </p>
                        </li>
                        <li>
                            <h2>Doel:</h2>
                            <p>
                                De spelers bouwen samen om de beurt het landschap uit door het aanleggen van een landschapskaartje. Zo ontstaan er een aaneengesloten stratennet, steden, weidelandschappen en kloosters waarop de spelers hun volgelingen kunnen plaatsen om zodoende punten te verzamelen. Daar men zowel tijdens het spel als na afloop ervan punten kan scoren, staat pas na de eindtelling de winnaar vast.
                            </p>
                        </li>
                        <li>
                            <h2>Voorbereiding:</h2>
                            <p>
                                De startkaart wordt open in het midden van de tafel gelegd.
                            </p>
                            <p>
                                De resterende kaartjes worden geschud en in meerdere verdekte stapeltjes verdeeld.
                            </p>
                            <p>
                                De waarderingstabel wordt aan de rand van het speelveld gelegd.
                            </p>
                            <p>
                                Elke speler ontvangt 8 volgelingen van eenzelfde kleur en plaatst één daarvan op het startveld van de puntentabel. De overblijvende 7 figuren worden voor de speler op de tafel klaargezet.
                            </p>
                            <p>
                                De jongste speler begint.
                            </p>
                        </li>
                        <li>
                            <h2>Spelverloop:</h2>
                            <p>
                                Er wordt in wijzerzin gespeeld. Wie aan de beurt is, voert onderstaande acties in de opgegeven volgorde uit:
                            </p>
                            <p>
                                1. De speler moet een kaartje van een stapel nemen en aanleggen.
                            </p>
                            <p>
                                2. De speler mag een eigen volgeling uit zijn voorraad nemen en op het door hem gelegde kaartje plaatsen.
                            </p>
                            <p>
                                3. Worden er door het aanleggen van dat kaartje straten, steden of kloosters afgesloten, dan moeten deze aansluitend gewaardeerd worden.
                            </p>
                        </li>
                        <li>
                            <h2>1. Het leggen van een landschapskaartje:</h2>
                            <p>
                                Als eerste actie moet een speler een kaartje van een verdekte stapel nemen en open voor zich neerleggen en dit zo dat iedereen het kaartje kan bekijken. Hierdoor kunnen alle medespelers de speler aan beurt 'goede raad' meegeven...
                            </p>
                            <p>
                                Daarna moet de speler dat kaartje bij de reeds geplaatste kaartjes aanleggen. Daarbij gelden de volgende eenvoudige regels:
                            </p>
                            <ul>
                                <li>
                                    <p>
                                        De nieuwe kaart moet met minstens één zijde aan één (of meerdere) reeds aanwezig kaartje(s) grenzen.
                                    </p>
                                    <p>
                                        Alle getekende weiden, straten en stadsdelen moeten voortgezet worden en dus 'passen' aan hun buurkaartjes. (Voorbeelden: zie p. 2 bovenaan)
                                    </p>
                                </li>
                            </ul>
                            <p>
                                In het zeldzame geval dat een speler het getrokken kaartje niet kan aanleggen, wordt dit uit het spel genomen en mag die speler een nieuw kaartje trekken en leggen.
                            </p>
                        </li>
                        <li>
                            <h2>2. Het inzetten van een volgeling:</h2>
                            <p>
                                Na het aanleggen, mag een speler nog één volgeling inzetten. Hij moet daarbij op het volgende letten:
                            </p>
                            <ul>
                                <li>
                                    <p>
                                        Per beurt mag slechts één volgeling ingezet worden.
                                    </p>
                                    <p>
                                        De volgeling moet uit de eigen voorraad genomen worden.
                                    </p>
                                    <p>
                                        De volgelling kan alleen op het laatst aangelegde kaartje ingezet worden.
                                    </p>
                                    <p>
                                        De speler moet duidelijk kiezen en aangeven op welke deel van het kaartje hij de volgeling plaatst. Hij heeft daarbij de volgende mogelijkheden (zie ook de figuren halfweg p. 2):
                                    </p>
                                    <ul>
                                        <li>
                                            <p>
                                                in een stadsdeel = ridder
                                            </p>
                                            <p>
                                                op een wegdeel = handelsreiziger
                                            </p>
                                            <p>
                                                op een weiland = boer
                                            </p>
                                            <p>
                                                op een klooster = monnik
                                            </p>
                                        </li>
                                    </ul>
                                    <p>
                                        Belangrijkste regel: De volgeling kan enkel geplaatst worden in een 'deel' waar nog geen enkele andere figuur (eigen of vreemde) aanwezig is. Hiervoor moet elk mogelijk deel waarvoor gekozen kan worden bekeken worden in aansluiting met de reeds aanwezige en aangrenzende kaartjes. Aaneengesloten wegstukken, stadsdelen of weilanden vormen daarbij telkens samen één deel.
                                    </p>
                                    <ul>
                                        <li>
                                            <p>
                                                voorbeeld 1 - (linkerfiguur) Speler blauw kan enkel zijn figuur als 'boer' inzetten. Het stadsdeel op zijn kaartje is nl. verbonden met het stadsdeel op het aangrenzende kaartje waarop reeds een rode 'ridder' staat. De weide is daarentegen nog met geen enkele andere weide verbonden.
                                            </p>
                                            <p>
                                                voorbeeld 2 - (rechterfiguur) De rode speler creëert door het aanleggen een groot aaneengesloten weiland. In dat weiland staat (drie kaartjes verder) reeds een rode figuur. Hierdoor kan rood geen nieuwe 'boer' meer plaatsen. Hij heeft wel nog de keuze op een figuur als 'ridder' (in het stadsdeel), als handelsreiziger (op de weg) of als 'boer' op het apart begrensde weiland te plaatsen.
                                            </p>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <p>
                                Heeft een speler na verloop van tijd geen figuren meer in zijn voorraad, dan kan hij enkel nog kaartjes aanleggen. Door 'gepast' inzetten zal hij later zijn ingezette figuren wel terug krijgen en kan ze dan opnieuw inzetten.
                            </p>
                            <p>
                                Hierna is in de meeste gevallen de volgende speler aan de beurt.Uitzondering: Is door het aanleggen van het kaartje een weg afgesloten, een stad volledig ommuurd of een klooster volledig omringd door kaartjes, dan volgt eerst een tussenwaardering.
                            </p>
                        </li>
                        <li>
                            <h2>3. Tussentijdse puntentellingen:</h2>
                            <p>
                                De punten van elke tussentijdse waardering worden onmiddellijk op het scoretabel aangebracht. Daarna worden de figuren die gewaardeerd werden van het speelveld weggenomen en terug aan hun eigenaar gegeven. Deze kan ze dan op een later ogenblik terug inzetten.
                            </p>
                            <ul>
                                <li>
                                    <p>
                                        a) een afgesloten straat
                                    </p>
                                    <ul>
                                        <li>
                                            <p>
                                                Een straat is volledig afgesloten als hij aan beide zijden door een stadsdeel, een kruispunt of een klooster is begrensd.
                                            </p>
                                            <p>
                                                Voor een afgewerkte straat ontvangt de speler die op het afgesloten gedeelte een handelsreiziger had staan, evenveel punten als de lengte van de straat. Dit komt overeenmet het aantal kaartjes waaruit de straat is opgebouwd.
                                            </p>
                                        </li>
                                    </ul>
                                    <p>
                                        b) een ommuurde stad•Een stad is afgewerkt als deze volledig door muren is omringd en er geen hiaten meer aanwezig zijn.
                                    </p>
                                    <ul>
                                        <li>
                                            <p>
                                                Voor een afgewerkte stad ontvangt de speler die in die stad een ridder had staan 2 punten voor elk stadsdeel (= aantal kaartjes). Daarenboven brengt elk wapenschild eveneens 2 punten extra op.
                                            </p>
                                            <p>
                                                Enige uitzondering: een 'kleine' afgewerkte stad van twee kaartjes, brengt slechts 2 punten op!
                                            </p>
                                        </li>
                                    </ul>
                                    <p>
                                        Opmerkingen:
                                    </p>
                                    <ul>
                                        <li>
                                            <p>
                                                1) Wat gebeurt er als er meerdere figuren op eenzelfde afwerkte straat staan of in eenzelfde stad voorkomen?Als gevolg van het aanleggen van kaartjes kan het voorkomen dat meerdere figuren op dezelfde straat of in dezelfde stad terechtkomen. In dit geval gaan de punten enkel naar de speler met de meeste figuren. Bij gelijkheid, krijgen beide spelers de volledige puntenwaarde.
                                            </p>
                                            <p>
                                                2) Het is perfect mogelijk dat in eenzelfde beurt iemand een figuur inzet en dit onmiddellijk aanleiding geeft tot een waardering waardoor hij de ingezette figuur direct terugkrijgt. (Voorbeelden: halfweg p. 3)
                                            </p>
                                        </li>
                                    </ul>
                                    <p>
                                       c) een afgewerkt klooster
                                    </p>
                                    <ul>
                                        <li>
                                            <p>
                                                Een klooster wordt gewaardeerd als het betreffende kaartje door 8 andere kaartje is omringd en daardoor in het midden van een vierkant van 9 kaartjes ligt.
                                            </p>
                                            <p>
                                                De speler die op het klooster een monnik had staan, ontvangt nu 9 punten.
                                            </p>
                                        </li>
                                    </ul>
                                    <p>
                                        d) weiland
                                    </p>
                                    <ul>
                                        <li>
                                            <p>
                                                Weiland wordt nooit tussentijds gewaardeerd. Figuren die als 'boer' ingezet worden, blijven dan ook steeds tot het einde van het spel staan! Pas dan brengen ze eventueel punten op.
                                            </p>
                                            <p>
                                                Meerdere aan elkaar grenzende weiden worden steeds samen als een weidelandschap aanzien. Dit wordt enkel begrensd door straten, stadsmuren of de rand van het speelveld. Door het aanleggen van kaartjes kunnen meerdere boeren binnen eenzelfde weidelandschap terecht komen! Speler moeten dit heel goed in de gaten houden! (Voorbeelden onderaan p. 3)
                                            </p>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <h2>Speleinde en puntentelling:</h2>
                            <p>
                                Het spel eindigt na de beurt waarin het laatste kaartje werd aangelegd. Daarna volgt de slotwaardering.
                            </p>
                            <p>
                                Eerst worden alle onvolledige straten, steden en kloosters bekeken.
                            </p>
                            <ul>
                                <li>
                                    <p>
                                        Een straat brengt evenveel punten op als kaartjes waardoor hij is opgebouwd.
                                    </p>
                                    <p>
                                        Een stad brengt per stadsdeel en per wapenschild 1 punt op.
                                    </p>
                                    <p>
                                        Een klooster brengt evenveel punten op als kaartjes waaruit het betreffende vierkant bestaat.
                                    </p>
                                </li>
                            </ul>
                            <p>
                                Gewaardeerde figuren worden onmiddellijk weggenomen om latere verwarring te vermijden.
                            </p>
                            <p>
                                Aansluitend worden de boeren gewaardeerd. Zij staan nl. in voor de voorzieningen van een stad en worden daarvoor beloond.
                            </p>
                            <ul>
                                <li>
                                    <p>
                                        Boeren voorzien enkel volledig ommuurde steden. Alleen zij leveren dus punten op.
                                    </p>
                                    <p>
                                        Het weidelandschap waarin de 'verzorgende' boer staat, moet aan die stad grenzen. De afstand van de boer naar die stad speelt daarbij geen enkele rol.
                                    </p>
                                    <p>
                                        Voor elke stad die een boer 'voorziet', ontvangt hij 4 punten. Dit puntenaantal is onafhankelijk van de stadsgrootte.
                                    </p>
                                    <p>
                                        Eenzelfde boer kan meerdere steden in hun noden voorzien en krijgt dan per stad 4 punten.
                                    </p>
                                    <p>
                                        Een stad grenst meestal aan meerdere weidelandschappen tegelijk. In die gevallen moeten alle 'aangrenzende' boeren in rekening gebracht worden. Enkel de speler die de meeste boeren deed aangrenzen, krijgt de 4 punten. Bij gelijkheid ontvangen alle betrokken spelers 4 punten.
                                    </p>
                                    <ul>
                                        <li>
                                            <p>
                                                voorbeeld 1 - (linkerfiguur) De stad grenst aan drie weidelandschappen. Daarbinnen staan samen 2 blauwe en één rode boer. Blauw krijgt de 4 punten.
                                            </p>
                                            <p>
                                                voorbeeld 2 - (rechterfiguur) Aan de kleine stad grenzen twee weidelandschappen. In het ene staat een rode boer in het andere een blauwe boer. Beide spelers krijgen 4 punten voor die stad. Aan de grote stad grenzen eveneens 2 weidelandschappen. In elk van die landschappen staat een blauwe boer. Blauw ontvangt nog eens 4 punten. (Niet dubbel tellen!)
                                            </p>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <p>
                                Winnaar: De speler met de meeste punten wint dit spel.
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
