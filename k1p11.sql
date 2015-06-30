-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Gegenereerd op: 30 jun 2015 om 10:56
-- Serverversie: 5.6.24
-- PHP-versie: 5.6.8
USE `k1p11`;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `k1p11`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `content`
--

CREATE TABLE IF NOT EXISTS `content` (
  `id` int(11) NOT NULL,
  `page` varchar(255) DEFAULT NULL,
  `description` text
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `content`
--

INSERT INTO `content` (`id`, `page`, `description`) VALUES
(1, 'index', '<b>Inleiding</b>\r\nBij voeding denk je waarschijnlijk gelijk aan eten. Misschien denk je wel aan gezond eten zoals fruit en brood. Of hou je meer van ongezond eten zoals friet, chocola en koekjes? Eten is voor iedereen belangrijk. In voedsel zitten namelijk verschillende bouwstoffen die je lichaam nodig heeft om te groeien en om gezond te blijven. Thuis leer je dat je niet alleen maar moet snoepen. Je hebt ook vitamines, mineralen, eiwitten en koolhydraten nodig, en die zitten in gezond voedsel.\r\n\r\n<b>Tien spelregels van gezonde voeding</b>\r\n<i>1	Eet niet altijd hetzelfde</i>\r\n	Er is niet Ã©Ã©n voedingsmiddel waar alle voedingsstoffen in zitten. Als je verschillende dingen eet, krijg je alle stoffen binnen die je nodig hebt. Door verschillende dingen te eten, heb je minder kans om veel ongezonde stoffen binnen te krijgen.\r\n\r\n<i>2	Let op vet</i>\r\n	Eet niet te veel verzadigd vet. Een beetje vet heb je wel nodig. Als je onverzadigd vet, krijg je goede dingen binnen zoals onverzadigde vetzuren, vitamine A, D en E en energie.\r\n\r\n<i>3	Eet genoeg brood en aardappelen</i>\r\n	Eet genoeg brood, vooral volkoren-, bruin- en roggebrood. Eet ook genoeg aardappelen, rijst, pasta (macaroni, spaghetti) en peulvruchten (bruine en witte bonen, kapucijners).\r\n\r\n<i>4	Eet lekker veel groente en fruit</i>\r\n	Door genoeg groente en fruit te eten, word je minder snel ziek! De regel is: elke dag twee ons groente en twee stuks fruit.\r\n\r\n<i>5	Let op je gewicht!</i>\r\n	Als je een gezond gewicht hebt, krijg je minder snel ziekten waar je nooit meer van af komt. Eet verstandig. En sport, fiets of loop in elk geval een half uur per dag.\r\n\r\n<i>6	Wees zuinig met zout</i>\r\n	Helemaal zonder zout kan je lichaam niet. In heel veel eten komt al natuurlijk zout voor. Je hoeft dus vaak geen extra zout toe te voegen. Wil je toch wat meer smaak toevoegen aan je eten? Probeer dan eens kruiden en specerijen!\r\n\r\n<i>7	Drink per dag ten minste anderhalve liter vocht</i>\r\n	Je lichaam heeft veel water nodig. Het liefst zo''n anderhalf liter per dag. Maar je mag ook iets anders drinken dan water alleen.\r\n\r\n<i>8	Eet niet de hele dag door</i>\r\n	Drie keer per dag eten is de basis voor een gezonde voeding. Eet niet te vaak iets tussendoor: dit is slecht voor je gebit en je kunt er dik door worden.\r\n\r\n<i>9	Ga veilig met voedsel om</i>\r\n	Storing in je maag en darmen, zoals misselijkheid en braken komt vaak door voedselvergiftiging. Het kan zijn dat het eten bedorven is, of niet goed gebakken.\r\n\r\n \r\n<i>10	Lees wat er op de verpakking staat</i>\r\n	Op de verpakking van voedingsmiddelen staat veel nuttige informatie. Bijvoorbeeld over hoe lang het nog goed is, waar het van gemaakt is, hoeveel goede stoffen erin zitten en hoe het klaar gemaakt moet worden.\r\n\r\n<b>Wie eet wat?</b>\r\nIn Nederland zijn aardappelen, bloemkool en stamppot de gewoonste zaak van de wereld, maar in andere landen staan ze er raar van te kijken...\r\n\r\n<i>Marokko</i>\r\nIn Marokko is het heel belangrijk hoe het eten eruitziet. Daarom ziet Marokkaans eten er altijd feestelijk uit. Vaak worden er veel verschillende ingrediÃ«nten gebruikt. Kip, (lams)vlees en vis worden veel gegeten in Marokko.\r\n\r\n<i>Arabische tafelmanieren:</i>\r\nOmdat je met de eerste drie vingers van de rechterhand eet, was je eerst je handen.\r\nMidden op een heel lage tafel staat het hoofdgerecht. Daaromheen staan schaaltjes met verschillende salades. In ieder schaaltje zit salade voor twee of drie personen. Is het feest, dan is er een voorgerecht.\r\nIngewikkelde gerechten en sauzen worden niet met de handen maar met brood gegeten. Er is bijna altijd een toetje: fruit en noten samen met verschillende koekjes. Tijdens het hoofdgerecht eet je alleen wat ''in de buurtâ€™ van je eigen saladeschaaltjes ligt.\r\nAls je voelt dat je ''genoeg'' hebt gehad, is het beleefd om met kleine hapjes door te blijven eten. Anders vinden de anderen dat ze ook moeten stoppen. Ben je echt helemaal klaar, lik dan je vingers af.\r\n\r\n<i>Suriname</i>\r\nIn Suriname eten ze vaak eenpansgerechten: dit zijn gerechten die bij elkaar in Ã©Ã©n pan klaargemaakt worden, zoals vlees en groente bij elkaar.\r\nOm extra smaak aan het eten te geven, gebruiken ze vaak heel hete pepers (''Madam Janet'') of zoute vis zoals kabeljauw en garnalen.\r\nRijst en bonen zijn meestal een vast onderdeel van de maaltijd, aangevuld met een stoof- of ovenschotel van vlees en/of vis en groenten.\r\nAls dessert eten Surinamers zoete toetjes of vers fruit. Vers kokos, kokosmelk, geraspte kokos en lichtbruin geroosterde kokos worden vooral in zoete gerechten gebruikt.\r\n\r\n<i>Turkije</i>\r\nHet eten in Turkije is heel gevarieerd. Dat komt omdat de Turken uit verschillende landen om hen heen dingen overgenomen hebben.\r\nBekende Turkse gerechten zijn de sjisj kebab (geroosterd vlees aan pennen), de bÃ¶rek (warme pasteitjes), kÃ¶ftes (geroosterde gehaktballetjes) en de pidet (plat brood). Beroemd zijn baklava met honing en noten en natuurlijk het Turkse fruit.\r\nDe Turken houden ervan om groenten te vullen. Aubergines en paprika''s worden dan ook vaak gevuld met een pittig mengsel van gehakt, groenten en kruiden. Andere geliefde groenten zijn komkommer, prei, spinazie en uien.\r\n\r\n<i>Eten en geloof</i>\r\nWat mensen eten heeft ook heel vaak met het geloof te maken. Moslims mogen bijvoorbeeld geen varkensvlees en Hindoes geen rundvlees.\r\n\r\n<b>Geschiedenis van eten</b>\r\nDe eerste mensen aten voornamelijk vlees. Dat weten we van de grotschilderingen. Vaak zie je jagers afgebeeld die achter een wild dier aanzitten.\r\nToen mensen vuur konden maken, ontdekten hoe ze ook dat je vlees kon koken of roosteren. Dat smaakte lekkerder en was gemakkelijker te kauwen dan rauw vlees.\r\nZe verzamelden zelf eten dat ze in de buurt konden vinden. Dat waren bijvoorbeeld bessen, groenten en wilde dieren. Drinken haalden ze uit een beek of rivier.\r\nPas toen ze langere tijd op een vaste plek bleven wonen, kwamen ze erachter dat je uit zaadjes eetbare planten kon laten groeien.\r\n\r\nIn ontwikkelingslanden zijn 146 miljoen kinderen jonger dan vijf jaar. Dat betekent dat in ontwikkelingslanden van elke vier kinderen er Ã©Ã©n ondervoed is.\r\nâ€¢	Meer dan de helft van de ondervoede kinderen woont in Zuid-AziÃ«.\r\nâ€¢	Op het platteland hebben kinderen twee keer zoveel kans op ondervoeding. Bijvoorbeeld doordat de oogst mislukt, of doordat te veel voedsel aan mensen in de stad verkocht wordt.\r\nâ€¢	Een derde van alle babyâ€™s in ontwikkelingslanden krijgt de eerste zes maanden alleen maar borstvoeding.\r\n\r\nVolgens Unicef is dit heel belangrijk!\r\n(Bron: Unicef)\r\n\r\n<b>Veel voorkomende vragen</b>\r\n<i>Waarom is eten belangrijk?</i>\r\nVoedsel is belangrijk voor iedereen. Vooral voor kinderen. Goed eten helpt je namelijk om te groeien, om energie te krijgen en om gezond te blijven. Om te groeien heb je eiwitten nodig.\r\nEiwitten vind je in vlees, vis, kaas, noten, melk en eieren. Eten heb je ook nodig voor energie, zodat je kunt leren en spelen. Energie haal je uit koolhydraten, en die zitten in aardappelen, pasta, brood en rijst. Je blijft gezond als je genoeg vitamines binnenkrijgt. Vitamines zitten in groenten en fruit. Al met al heb je een heleboel verschillende voedingsstoffen nodig.\r\n\r\n<i>Is er ook ondervoeding in Nederland?</i>\r\nJa. Zelfs in landen als Nederland en Amerika zijn er soms ondervoede kinderen. Ze eten bijvoorbeeld alleen patat en hamburgers, en nooit groenten of fruit. Maar er zijn wel veel minder kinderen ondervoed dan in ontwikkelingslanden.\r\nIn Amerika is 2% van de kinderen (jonger dan vijf jaar) ondervoed, en in ontwikkelingslanden gemiddeld wel 25%.\r\n\r\n<i>Is er genoeg voedsel voor iedereen?</i>\r\nJa. Het eten is alleen oneerlijk verdeeld. Wij gooien soms eten weg en in andere landen hebben mensen honger. Hoe dat komt? Natuurrampen â€“ zoals droogte, overstromingen, een aardbeving of een insectenplaag â€“ vernietigen vaak de oogst. Er zijn ook mensen die moeten vluchten tijdens een oorlog. Ze kunnen dan geen eten meer verbouwen, of het vee (koeien, schapen, geiten, paarden) verzorgen. Bovendien willen rijke landen niet altijd hun voedsel eerlijk delen met armere landen.\r\n\r\n<i>Belangrijke stoffen</i>\r\nIn veel ontwikkelingslanden krijgen kinderen niet genoeg van (een van de) voedingsstoffen uit de tabel. Terwijl ze heel belangrijk zijn! Unicef heeft oplossingen.\r\n\r\n<i>Wat is goede voeding voor babyâ€™s?</i>\r\nVolgens Unicef is borstvoeding de beste voeding voor babyâ€™s. In moedermelk zitten alle belangrijke stoffen die een baby nodig heeft. Zo zitten er bijvoorbeeld afweerstoffen in die een kind beschermen tegen ziektes. Van alle kinderen in ontwikkelingslanden krijgt maar een derde het eerste half jaar borstvoeding. De rest van de babyâ€™s krijgt flesvoeding: melkpoeder gemengd met water. Maar het water is niet overal even schoon, waardoor in sommige landen babyâ€™s diarree kunnen krijgen en zelfs dood kunnen gaan. \r\n\r\n<i>Wat is ondervoeding?</i>\r\nIn ontwikkelingslanden zijn 146 miljoen kinderen jonger dan vijf jaar ondervoed. Maar wat is dat, ondervoeding? Je bent ondervoed als je te weinig eet, Ã³f als je niet gezond genoeg eet. Ondervoede kinderen eten bijvoorbeeld alleen maar rijst, zonder groenten, fruit, vlees of vis. Ze krijgen dan niet alle vitamines, mineralen, eiwitten, koolhydraten en vetten binnen die nodig zijn. Als je ondervoed bent, word je sneller ziek. Ondervoede kinderen kunnen ziektes krijgen met moeilijke namen, zoals kwashiorkor of marasmus.\r\n\r\n\r\n                          ');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `password` varchar(60) DEFAULT NULL,
  `level` tinyint(3) unsigned DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `level`) VALUES
(15, 'admin', '5f4dcc3b5aa765d61d8327deb882cf99', 2);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `name` (`name`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `content`
--
ALTER TABLE `content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=48;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
