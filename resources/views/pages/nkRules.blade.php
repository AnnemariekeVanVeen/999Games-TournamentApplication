@extends('layouts.app')

@section('content')
    <div class="bg-footer">
        <div class="container">
            <br>
            <div class="head-faq title-margin">
                <h1>Toernooi regels</h1>
            </div>
            <div class="row rules-outer">
                <div class="col rules-inner">
                    <ul>
                        <li>
                            <h2>1. Algemene informatie</h2>
                            <p>
                                1.1 Voor elk spel staat een maximale speelduur (verschillend per spel en/of toernooi).Na deze tijd maakt de actieve speler zijn beurt af.De ronde wordt vervolgensafgemaakt, zodat iedereen evenveel beurten heeftgehad.
                            </p>
                        </li>
                        <li>
                            <h2>2. Voorwaarden</h2>
                            <p>
                                2.1 Iedereen dient de spelregels te kennen en eerlijk te spelen.
                            </p>
                            <p>
                                2.2 Speelfouten van jezelf of een ander moet je direct melden.
                            </p>
                        </li>
                        <li>
                            <h2>3. Algemene regels</h2>
                            <p>
                                3.1 Alleen spellen uitgegeven door999 Games wordentijdens het toernooigebruikt.
                            </p>
                            <p>
                                3.2 Bij speelfouten bepaalt de organisatie ter plekke hoe ontstane problemen worden opgelost.
                            </p>
                            <p>
                                3.3 De organisatie behoudthet recht om toernooiregels te wijzigen of mensen van deelnameuit te sluiten.De toernooiorganisatie en medewerkers van 999 Games zijn uitgesloten van deelname met uitzondering het demonstratiepersoneel van 999 Games.
                            </p>
                            <p>
                                3.4 Om in aanmerking te komen voor de ranking,dient een speler naam en email aan de organisatiete geven, die de organisatie weeraan 999 Gamesdoorgeeft. Deze worden uitsluitendgebruikt om, indien nodig, over de rankingte communiceren.
                            </p>
                            <p>
                                3.5 Deelnemers aan het toernooi gaan akkoord met het nemen van foto's en videobeelden ten behoeve van Twitter, Facebook, Youtube en live streaming/uitzendingen.
                            </p>
                            <p>
                                3.6 Deelnemers die zich voor het toernooi willen inschrijven, moeten zich hiervoor kunnen aanmeldenmet deelname als gevolg. De sfeer en beleving zijnbelangrijk. Ermoet een prettigeen gezellige stemming heersen.
                            </p>
                        </li>
                        <li>
                            <h2>4. Spelregels</h2>
                            <p>
                                4.1 Het toernooi wordt gespeeld volgens de spelregels van 999 Games (incl. eventuele errata zoals dezeop de site staat:www.999games.nl).
                            </p>
                            <a href=" {{ url('gamerules') }} ">Klik hier voor de spelregels</a>
                        </li>
                        <li>
                            <h2>5. Tafelindeling van de kwalificatieronden</h2>
                            <p>
                                5.1 Er wordt zoveel mogelijk met een evenredig aantal deelnemersaan één tafel gespeeld.
                            </p>
                            <p>
                                5.2 Het toernooi wordt gespeeld volgens het Deensesysteem. Hierbijblijven alle spelers het hele toernooi spelen en verzamelen ze punten naarmate het toernooi vordert. Tijdens elke ronde noteer je toernooipunten voor iedere deelnemer naar aanleiding van de eindstand en het aantal spelers per tafel:
                                UitslagTafel van 6spelersTafel van 5spelersTafel van 4spelersTafel van 3spelersTafel van 2spelers
                                <img src="">
                                De tafelindeling voor de eerste ronde wordt willekeurig bepaald. Vanaf de tweede ronde wordt de tafelindeling gemaakt op basis van toernooipunten, waarbij spelers met hetzelfde aantal toernooipunten tegen elkaar worden ingedeeld.Bij gelijke stand geven de totaal individueel behaalde speelpunten van het spel de doorslag. Noteer deze ook aan het eindevan elke ronde voor iedere deelnemer.
                            </p>
                            <p>
                                5.3 De startspeler wordt elke keer willekeurig gekozen.
                            </p>
                            <p>
                                5.4 Als iemand 1 minuut of meer te laat is,wordt het spel (deze ronde) zonder deze deelnemer gestart.Deze speler ontvangt geen speelpunten/toernooipuntenvoor deze ronde,maar kan in een latere ronde wel weer instromen.De tafel speelt met een of meer deelnemer(s) minder. Dedeelnemers diedaadwerkelijk spelen,krijgen toernooipunten op basis vanhet werkelijke aantal spelers. Voorbeeld:Op een tafel van 4 deelnemers komt er 1 niet opdagen. De 3 deelnemers spelen deze ronde af en ontvangen toernooipunten zoals ze bij 5.2 beschreven op basisvan een spel met3 spelers.
                            </p>
                        </li>
                        <li>
                            <h2>6. Punten</h2>
                            <p>
                                6.1 Aantal ronden: Bij een toernooi met 1 tafel met deelnemers is 1 ronde voldoende om een toernooiuitslag te krijgen. Vanaf 2 tafels zijn minimaal 2 rondennodig.
                            </p>
                            <p>
                                6.2 Rankingpunten: De helft van het aantal deelnemers krijgt 1 punt. De anderehelft krijgt, tebeginnen met de laatste plek,steeds 1punt extra. Als dit aantal onevenis,ronden we naar benedenaf. Voorbeeld: Bij 8 deelnemers krijgen plekken 5,6,7 en 8 allen 1 punt en de plekken 4,3,2 en 1 krijgen respectievelijk 2,3,4 en 5 punten. Bij 9 deelnemers krijgen plekken 5,6,7, 8 en 9 allen 1 punt en de plekken 4,3,2 en 1 krijgen respectievelijk 2,3,4 en 5 punten
                                Deelnemers kunnen aan elk aangeboden toernooi meedoen om punten te behalen. Deze punten zijn cumulatief. Dat wil zeggen dat alle behaalde punten bij elkaar worden opgeteld.Deze punten wordenaan 999 Gamesdoorgegeven, datvervolgens de ranking bijhoudt. De ranking staat online en wordt wekelijks bijgewerkt,zodat deelnemers de actuele stand kunnen zien.
                            </p>
                        </li>
                        <li>
                            <h2>7. Prijzen</h2>
                            <p>
                                7.1 Bij 8 of meer deelnemers faciliteren wij toernooiprijzen en/of goodies voor de individuele toernooien. Bij 8 of meer deelnemers krijgt de winnaar een kaartspel. Bij 16 of meer deelnemers krijgt de winnaar een middelgroot spel. Bij 32 of meer deelnemers krijgt de winnaar een groot spel.
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
