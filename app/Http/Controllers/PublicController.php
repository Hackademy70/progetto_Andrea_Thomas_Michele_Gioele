<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PublicController extends Controller


{
    public $games = [


        [
            "title" => "Super Mario Bros",
            "autore" => "Nintendo",
            "anno" => 1985,
            "id" => "001",
            "img" => "https://www.mariocastle.it/news/wp-content/uploads/2022/10/locandina.jpeg",
            "description" => "Il Regno dei Funghi (Mushroom Kingdom) è un luogo pacifico in cui creature dalla testa a forma di fungo chiamate Toad vivono in perfetta armonia. Questa pace viene compromessa da Bowser, il malvagio re dei Koopa Troopa e dal suo esercito che conquista il territorio e trasforma gli abitanti in blocchi di mattone e goomba. Successivamente rapisce la principessa del regno Peach Toadstool, l'unica in grado di spezzare l'incantesimo che grava sui Toad, e di cui è innamorato e vuole farsi consegnare il regno.

            Per molto tempo, nel Regno dei Funghi dominano le tenebre, ma quando la notizia giunge anche ai due fratelli italoamericani Mario e Luigi, questi si dirigono verso i confini del regno per salvare la principessa. Dopo un lungo viaggio attraverso 8 mondi, Mario e Luigi riescono a raggiungere il castello di Bowser e a sconfiggerlo in battaglia (facendolo cadere nella lava). È così che la principessa viene salvata e il Regno dei Funghi riportato alla pace. Dopo aver compiuto la missione, Mario e Luigi decidono di rimanere nel Regno dei Funghi per proteggerlo da eventuali minacce. Il rapporto tra Mario e la principessa Peach diventerà col tempo amore.",
            "genre" => "avventura",
        ],

        [
            "title" => "The Legend of Zelda",
            "autore" => "Nintendo",
            "anno" => 1986,
            "id" => "002",
            "img" => "https://m.media-amazon.com/images/I/81NPLf6o0LL._AC_SL1500_.jpg",
            "description" => "Il nemico principale, un malvagio mostro chiamato Ganondorf (o Ganon, a seconda dell'episodio), deciso a impossessarsi del mistico oggetto chiamato Triforza, semina il terrore per le lande di Hyrule invadendole con le sue orde di creature e mostri e prendendo in ostaggio la Principessa Zelda, erede al trono di Hyrule. A frapporsi alle malefatte di Ganondorf interviene sempre Link, l'eroe eletto dalle dee. Alcuni giochi della serie principale, però, non possono essere rappresentati da questa trama: in diversi manca Ganondorf, come in Majora's Mask o Phantom Hourglass, in quanto già sconfitto nei predecessori dei suddetti giochi (rispettivamente Ocarina of Time e The Wind Waker), mentre altri, come lo stesso Majora's Mask, non sono ambientati ad Hyrule. I giochi della serie sembrano ambientati nell'era medievale.",
            "genre" => "azione",

        ],

        [
            "title" => "Sonic the Hedgehog",
            "autore" => "Sega",
            "anno" => 1991,
            "id" => "003",
            "img" => "https://m.media-amazon.com/images/I/71qdLgD09JL._AC_UF894,1000_QL80_.jpg",
            "description" => "In modo da riuscire a rubare i sei Smeraldi del Caos (chiamati nell'edizione italiana Smeraldi Caotici[32]) e sfruttare il loro potere, l'antagonista Dr. Eggman (Dr.Ivo Robotnik nella versione Americana) ha intrappolato gli animali che abitano a South Island all'interno di robot aggressivi ed in capsule metalliche[15]. Il giocatore controlla Sonic, che mira a fermare i piani del malvagio scienziato liberando i suoi amici animali[15] e raccogliendo gli smeraldi da solo[18]. Se vengono raccolti tutti gli Smeraldi del Caos e viene completato il gioco, comparirà la sequenza finale che mostrerà l'epilogo[33], mentre se le gemme non verranno ottenute tutte quante, Eggman rimprovererà il giocatore mentre tiene in mano uno dei qualsiasi smeraldi non raccolti mostrando la scritta [34],se invece il giocatore farà vincere il Riccio, lo scienziato apparirà saltando arrabbiato per aver perso sopra la scritta.",
            "genre" => "avventura"

        ],

        [
            "title" => "Final Fantasy VII",
            "autore" => "Square Enix",
            "anno" => 1997,
            "id" => "004",
            "img" => "https://m.media-amazon.com/images/I/81EwyjiNh+L.jpg",
            "description" => "Final Fantasy XVI è ambientato nel mondo fantasy di Valisthea, diviso tra diverse fazioni, tra cui il Sacro Impero di Sanbreque, il Regno di Waloed, la Repubblica Dhalmekkiana, il Granducato di Rosaria e il Regno di Ferro. Il mondo soffre di una piaga che è tenuta a bada dal Cristallo Madre. Una parte centrale della trama sono gli Eikon, mostri evocati controllati da o che si manifestano attraverso umani soprannominati Araldi; Il protagonista è Clive Rosfield, il figlio primogenito dell'arciduca di Rosaria che si imbarca in una ricerca di vendetta dopo tragici eventi che coinvolgono l'oscuro Eikon Ifrit. Mentre i Co-protagonisti sono: Joshua Rosfield, il fratello minore di Clive, Araldo dell'Eikon Fenice, ed erede apparente di Rosaria e Jill Warrick, una ragazza dei Caduti territori del Nord che è la sorella adottiva e confidente di Clive e Joshua. Il gameplay vede Clive combattere usando una combinazione di attacchi con la spada basati sulla mischia e abilità magiche.[1][2]",
            "genre" => "horror",

        ],


        [
            "title" => "Grand Theft Auto V",
            "autore" => "Rockstar Games",
            "anno" => 2013,
            "id" => "005",
            "img" => "https://i.etsystatic.com/13367669/r/il/013579/3107621028/il_fullxfull.3107621028_hfi8.jpg",
            "description" => "North Yankton, 2004. Nella cittadina di Ludendorff, Trevor Philips, Michael Townley e Bradley Snider effettuano una rapina presso un deposito locale ma le cose non vanno come previsto. Durante la fuga, Michael e Brad vengono colpiti da un cecchino, mentre Trevor scompare nella nebbia inseguito dalla polizia.
             Nel 2013, si scopre che Michael è ancora vivo e si è fatto una nuova vita a Los Santos (controparte di Los Angeles) e che frequenta regolarmente uno psicologo, con il quale si sfoga della sua difficile situazione familiare.
            Franklin Clinton, giovane criminale di strada legato a un gruppo di gang locali conosciuto come (The Families), riceve l'ordine da Simeon Yetarian, truffatore e titolare armeno del concessionario in cui lavora, di recuperare un'auto da James De Santa, figlio di Michael, poiché quest'ultimo è in ritardo[6] con il pagamento delle rate della macchina. Avendo capito che il figlio sta per essere derubato, Michael si nasconde nell'auto che Franklin deve recuperare; il giovane viene quindi sorpreso e costretto sotto minaccia a irrompere nel concessionario, cosicché Michael possa regolare i conti con Simeon. Dopo questo evento Franklin viene licenziato.",
            "genre" => "azione",

        ],

        [
            "title" => "The Witcher 3",
            "autore" => "CD Projekt RED",
            "anno" => 2015,
            "id" => "006",
            "img" => "https://i.ebayimg.com/images/g/KuYAAOSwFG1ea2YT/s-l1600.jpg",
            "description" => "Il mondo di The Witcher 3: Wild Hunt è un mondo medievale-fantasy: ciò significa che sono presenti creature e razze fantastiche. Insieme agli uomini si ritrovano anche elfi, nani, witcher e mezzuomini. La situazione narrata nella storia ha come sfondo la terza guerra tra Nilfgaard e i regni settentrionali, ormai ridotti allo stremo. Le legioni nilfgaardiane imperversano in quella che era una volta la Temeria settentrionale, una regione chiamata Velen, dove l'offensiva si è fermata al fiume Pontar, che segna il confine con la Redania, ultimo vero baluardo alla totale conquista da parte del Sud. Contemporaneamente, nelle isole Skellige si svolge l'elezione del nuovo sovrano, scelto tra i vari clan.
            Dopo gli eventi di The Witcher 2: Assassins of Kings, nella Redania e soprattutto in Novigrad aleggia un clima di tensione: i non-umani e i maghi vengono perseguitati dalla chiesa del fuoco eterno e dai cacciatori di streghe, in quanto ritenuti ingiustamente responsabili dello scoppio del conflitto e delle possibilità di lucro derivate da esso. Nonostante l'accentuazione dell'ultimo periodo, queste divergenze tra le diverse razze sono sempre esistite. Geralt stesso è un witcher che uccide i mostri e protegge le persone comuni, ma viene visto con disgusto e disprezzo dalle stesse persone che aiuta, cosa che accomuna tutti gli strighi, ritenuti uguali agli altri non-umani.",
            "genre" => "horror",

        ],




    ];

    public function home()
    {
        return view('welcome',[ 'games' => $this->games]);
    }

    public $us = [
        [
            'name' => 'Andrea',
            'surname' => 'Palmieri',
            'img' => "img/andre.jpg",
            'role' => 'CEO',
        ],
        [
            'name' => 'Gioele',
            'surname' => 'Coviello',
            'img' => "img/gio.jpg",
            'role' => 'CEO',
        ],
        [
            'name' => 'Michele',
            'surname' => 'Boaretto',
            'img' => 'img/michi.jpg',
            'role' => 'CEO',
        ],
        [
            'name' => 'Thomas',
            'surname' => 'Fazziani',
            'img' => 'img/tom.jpg',
            'role' => 'CEO',
        ],
        ];

        public function chisiamo()
        {
            return view('aboutus',[ 'us' => $this->us]);
        }

        public function videogames($id)
        {
  
            foreach($this->games as $game){
         
                if ($game['id'] == $id ) {
                    return view('videogames',[ 'game' => $game]);
                }
            

                
            }
            
        }

        
        public function genere($genre)
        {
            $gamesGenre = [];
  
            foreach($this->games as $game){
         
                if ($game['genre'] == $genre ) {
                    $gamesGenre[] = $game;
          
                }
            

                
            }
            return view('details',[ 'games' => $gamesGenre, 'genre' => $genre]); 
        }

    }
