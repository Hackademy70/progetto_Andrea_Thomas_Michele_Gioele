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
            'img' => "public\img\andre.jpg",
            'role' => 'CEO',
        ],
        [
            'name' => 'Gioele',
            'surname' => 'Coviello',
            'img' => "https://media.licdn.com/dms/image/D4D03AQGv8A11N4bUJg/profile-displayphoto-shrink_200_200/0/1681223943837?e=1687392000&v=beta&t=U3yB2NojI1r6ueDlTXS4hmpxMRtrx5Zmpp7VSsEZkkM",
            'role' => 'CEO',
        ],
        [
            'name' => 'Michele',
            'surname' => 'Boaretto',
            'img' => 'https://media.licdn.com/dms/image/D4E35AQGIPR1Kx-O-gQ/profile-framedphoto-shrink_200_200/0/1681223930354?e=1682352000&v=beta&t=LFajtvDDDsnF1ujjm62bj8IF_3zc8Wl5cKokO0F0Ar8',
            'role' => 'CEO',
        ],
        [
            'name' => 'Thomas',
            'surname' => 'Fazziani',
            'img' => 'https://media.licdn.com/dms/image/D4E03AQFCT7pAUqAahQ/profile-displayphoto-shrink_800_800/0/1681223386117?e=1687392000&v=beta&t=3RuM5Gap6Sk9fdE88XaBcjYRh9hchh6MYFWs0D0Dheg',
            'role' => 'CEO',
        ],
        ];

        public function chisiamo()
        {
            return view('aboutus',[ 'us' => $this->us]);
        }
}

