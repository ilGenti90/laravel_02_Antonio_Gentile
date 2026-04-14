<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CardgamesController extends Controller
{
    public function indice()
    {
        $arrayGames = [
            [
                'title' => 'The Last of Us',
                'description' => "The Last of Us è una celebre saga post-apocalittica (videogioco Naughty Dog e serie TV HBO) ambientata vent'anni dopo che un fungo parassita (Cordyceps) ha infettato l'umanità, trasformando le persone in creature aggressive. La storia segue Joel, un sopravvissuto cinico, e Ellie, una ragazza immune al fungo, mentre attraversano un'America devastata alla ricerca di una cura, affrontando pericoli umani e infetti in un viaggio emotivo di sopravvivenza e redenzione.",
                'category' => 'Action-Adventure',
                'image' => 'media/thelastofus.jpeg',
                'alt' => 'The Last of Us',
            ],
            [
                'title' => 'God of War',
                'description' => 'God of War è una celebre saga videoludica action-adventure di Santa Monica Studio, incentrata sulle brutali imprese di Kratos, un semidio spartano.',
                'category' => 'Action-Adventure',
                'image' => 'media/godofwar.jpeg',
                'alt' => 'God of War',
            ],

             [
                'title' => 'Ghost of Tsushima',
                'description' => "Ghost of Tsushima è un acclamato gioco d'azione e avventura open-world sviluppato da Sucker Punch Productions, ambientato nel Giappone feudale del 1274. Vesti i panni di Jin Sakai, un samurai che deve abbandonare il codice d'onore per combattere l'invasione mongola sull'isola di Tsushima, evolvendosi nel leggendario guerriero noto come lo Spettro di Tsushima, in un viaggio epico di vendetta, sacrificio e redenzione.",
                'category' => 'Action-Adventure',
                'image' => 'media/Ghostoftsushima.jpeg',
                'alt' => 'Ghost of Tsushima',
            ],

            [
                'title' => 'Cyberpunk 2077',
                'description' => "Cyberpunk 2077 è un action RPG open-world sviluppato da CD Projekt RED, ambientato nella metropoli distopica di Night City. Il giocatore interpreta V, un mercenario personalizzabile alla ricerca di un impianto unico che garantisce l'immortalità, muovendosi tra potenziamenti cibernetici, gang violente e mega-corporazioni in una storia incentrata su scelte e sopravvivenza.",
                'category' => 'Action-RPG',
                'image' => 'media/cyberpunk2077.jpeg',
                'alt' => 'Cyberpunk 2077',
            ],
            [
                'title' => 'Elden Ring',
                'description' => "Elden Ring è un action RPG open-world sviluppato da FromSoftware, ambientato nel mondo fantasy di Elden Ring. Il giocatore interpreta il Tainted One, un esploratore che cerca di diventare l'Elden King, muovendosi tra regni misteriosi, nemici potenti e enigmi complessi in una storia incentrata su scelte e sopravvivenza.",
                'category' => 'Action-RPG',
                'image' => 'media/eldenring.jpeg',
                'alt' => 'Elden Ring',
            ],

            [
                'title' => 'Resident Evil saga',
                'description' => "Resident Evil è una celebre saga di survival horror sviluppata da Capcom, incentrata su un gruppo di personaggi che combattono contro un'epidemia causata da un virus mutageno, spesso creato dalla malvagia Umbrella Corporation. La serie è nota per la sua atmosfera tesa, enigmi complessi e combattimenti contro creature infette, offrendo un mix di azione e suspense in ambientazioni claustrofobiche.",
                'category' => 'Survival Horror',
                'image' => 'media/RE.jpeg',
                'alt' => 'Resident Evil',
            ],
            [
                'title' => 'Need for Speed saga',
                'description' => "Need for Speed (NFS) è una celebre serie di videogiochi di corse automobilistiche, lanciata da Electronic Arts nel 1995. Incentrata sulle corse clandestine, il tuning (personalizzazione estetica e tecnica) e inseguimenti polizieschi, la saga è nota per la sua grafica realistica, ambientazioni open-world e uno stile arcade orientato all'azione. Nel corso degli anni, NFS ha esplorato vari temi, dalle corse su strada alle competizioni ufficiali, mantenendo un forte focus sulla cultura automobilistica e offrendo ai giocatori un'esperienza di guida adrenalinica e coinvolgente.",
                'category' => 'Drive Simulation',
                'image' => 'media/needforspeed.jpeg',
                'alt' => 'Need for Speed',
            ],

            [
                'title' => 'eFootball(PES) saga',
                'description' => "eFootball è il videogioco di simulazione calcistica free-to-play di Konami, erede della celebre serie PES (Pro Evolution Soccer). Rinnovato nel 2021, punta su un modello basato su aggiornamenti costanti, cross-play tra console, PC e mobile, e la modalità Dream Team per costruire la propria squadra, utilizzando l'Unreal Engine. Nonostante le ambizioni, eFootball ha ricevuto critiche per problemi tecnici e di gameplay al lancio, ma Konami continua a lavorare su miglioramenti per offrire un'esperienza calcistica più solida e coinvolgente.",
                'category' => 'Sport-Calcio',
                'image' => 'media/efootball.png ',
                'alt' => 'eFootball',
            ],

        ];
        return view('indice',['gamesBlog' => $arrayGames]);
    }

    public function dettaglio($title)
    {
        $arrayGames = [
            [
                'title' => 'The Last of Us',
                'description' => "The Last of Us è una celebre saga post-apocalittica (videogioco Naughty Dog e serie TV HBO) ambientata vent'anni dopo che un fungo parassita (Cordyceps) ha infettato l'umanità, trasformando le persone in creature aggressive. La storia segue Joel, un sopravvissuto cinico, e Ellie, una ragazza immune al fungo, mentre attraversano un'America devastata alla ricerca di una cura, affrontando pericoli umani e infetti in un viaggio emotivo di sopravvivenza e redenzione.",
                'category' => 'Action-Adventure',
                'image' => 'media/thelastofus.jpeg',
                'alt' => 'The Last of Us',
            ],
            [
                'title' => 'God of War',
                'description' => 'God of War è una celebre saga videoludica action-adventure di Santa Monica Studio, incentrata sulle brutali imprese di Kratos, un semidio spartano.',
                'category' => 'Action-Adventure',
                'image' => 'media/godofwar.jpeg',
                'alt' => 'God of War',
            ],

             [
                'title' => 'Ghost of Tsushima',
                'description' => "Ghost of Tsushima è un acclamato gioco d'azione e avventura open-world sviluppato da Sucker Punch Productions, ambientato nel Giappone feudale del 1274. Vesti i panni di Jin Sakai, un samurai che deve abbandonare il codice d'onore per combattere l'invasione mongola sull'isola di Tsushima, evolvendosi nel leggendario guerriero noto come lo Spettro di Tsushima, in un viaggio epico di vendetta, sacrificio e redenzione.",
                'category' => 'Action-Adventure',
                'image' => 'media/Ghostoftsushima.jpeg',
                'alt' => 'Ghost of Tsushima',
            ],

            [
                'title' => 'Cyberpunk 2077',
                'description' => "Cyberpunk 2077 è un action RPG open-world sviluppato da CD Projekt RED, ambientato nella metropoli distopica di Night City. Il giocatore interpreta V, un mercenario personalizzabile alla ricerca di un impianto unico che garantisce l'immortalità, muovendosi tra potenziamenti cibernetici, gang violente e mega-corporazioni in una storia incentrata su scelte e sopravvivenza.",
                'category' => 'Action-RPG',
                'image' => 'media/cyberpunk2077.jpeg',
                'alt' => 'Cyberpunk 2077',
            ],
            [
                'title' => 'Elden Ring',
                'description' => "Elden Ring è un action RPG open-world sviluppato da FromSoftware, ambientato nel mondo fantasy di Elden Ring. Il giocatore interpreta il Tainted One, un esploratore che cerca di diventare l'Elden King, muovendosi tra regni misteriosi, nemici potenti e enigmi complessi in una storia incentrata su scelte e sopravvivenza.",
                'category' => 'Action-RPG',
                'image' => 'media/eldenring.jpeg',
                'alt' => 'Elden Ring',
            ],

            [
                'title' => 'Resident Evil saga',
                'description' => "Resident Evil è una celebre saga di survival horror sviluppata da Capcom, incentrata su un gruppo di personaggi che combattono contro un'epidemia causata da un virus mutageno, spesso creato dalla malvagia Umbrella Corporation. La serie è nota per la sua atmosfera tesa, enigmi complessi e combattimenti contro creature infette, offrendo un mix di azione e suspense in ambientazioni claustrofobiche.",
                'category' => 'Survival Horror',
                'image' => 'media/RE.jpeg',
                'alt' => 'Resident Evil',
            ],
            [
                'title' => 'Need for Speed saga',
                'description' => "Need for Speed (NFS) è una celebre serie di videogiochi di corse automobilistiche, lanciata da Electronic Arts nel 1995. Incentrata sulle corse clandestine, il tuning (personalizzazione estetica e tecnica) e inseguimenti polizieschi, la saga è nota per la sua grafica realistica, ambientazioni open-world e uno stile arcade orientato all'azione. Nel corso degli anni, NFS ha esplorato vari temi, dalle corse su strada alle competizioni ufficiali, mantenendo un forte focus sulla cultura automobilistica e offrendo ai giocatori un'esperienza di guida adrenalinica e coinvolgente.",
                'category' => 'Drive Simulation',
                'image' => 'media/needforspeed.jpeg',
                'alt' => 'Need for Speed',
            ],

            [
                'title' => 'eFootball(PES) saga',
                'description' => "eFootball è il videogioco di simulazione calcistica free-to-play di Konami, erede della celebre serie PES (Pro Evolution Soccer). Rinnovato nel 2021, punta su un modello basato su aggiornamenti costanti, cross-play tra console, PC e mobile, e la modalità Dream Team per costruire la propria squadra, utilizzando l'Unreal Engine. Nonostante le ambizioni, eFootball ha ricevuto critiche per problemi tecnici e di gameplay al lancio, ma Konami continua a lavorare su miglioramenti per offrire un'esperienza calcistica più solida e coinvolgente.",
                'category' => 'Sport-Calcio',
                'image' => 'media/efootball.png ',
                'alt' => 'eFootball',
            ],

        ];

        foreach ($arrayGames as $game) {
            if ( $title == $game['title']) {
                return view('cards/cardsDettaglio', ['game' => $game]);
            }
        }
       
    }
}
