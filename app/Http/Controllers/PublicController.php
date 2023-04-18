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
            "img" => "https://www.mariocastle.it/news/wp-content/uploads/2022/10/locandina.jpeg"
        ],

        [
            "title" => "The Legend of Zelda",
            "autore" => "Nintendo",
            "anno" => 1986,
            "id" => "002",
            "img" => "https://m.media-amazon.com/images/I/81NPLf6o0LL._AC_SL1500_.jpg"
        ],

        [
            "title" => "Sonic the Hedgehog",
            "autore" => "Sega",
            "anno" => 1991,
            "id" => "003",
            "img" => "https://m.media-amazon.com/images/I/71qdLgD09JL._AC_UF894,1000_QL80_.jpg"
        ],

        [
            "title" => "Final Fantasy VII",
            "autore" => "Square Enix",
            "anno" => 1997,
            "id" => "004",
            "img" => "https://m.media-amazon.com/images/I/81EwyjiNh+L.jpg"
        ],


        [
            "title" => "Grand Theft Auto V",
            "autore" => "Rockstar Games",
            "anno" => 2013,
            "id" => "005",
            "img" => "https://i.etsystatic.com/13367669/r/il/013579/3107621028/il_fullxfull.3107621028_hfi8.jpg"
        ],

        [
            "title" => "The Witcher 3",
            "autore" => "CD Projekt RED",
            "anno" => 2015,
            "id" => "006",
            "img" => "https://i.ebayimg.com/images/g/KuYAAOSwFG1ea2YT/s-l1600.jpg"
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
                if ($game['id'] == $id );
                return view('videogames',[ 'game' => $game]);
                
            }
            
        }

    }
