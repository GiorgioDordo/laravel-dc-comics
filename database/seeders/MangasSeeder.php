<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Manga;

class MangasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $mangas = [
            [
                'title' => 'One Piece',
                'autor' => 'Eiichiro Oda',
                'genre' => 'Avventura, Fantasy',
                'publisher' => 'Shueisha',
                'price' => 7.99,
                'thumbs' => 'https://cdn.myanimelist.net/images/manga/2/253146.jpg',
                'description' => 'La storia di un giovane pirata, Monkey D. Luffy, alla ricerca del leggendario tesoro, il One Piece.'
            ],
            [
                'title' => 'Naruto',
                'autor' => 'Masashi Kishimoto',
                'genre' => 'Azione, Avventura',
                'publisher' => 'Shueisha',
                'price' => 6.99,
                'thumbs' => 'https://cdn.myanimelist.net/images/manga/3/249658.jpg',
                'description' => 'Le avventure del giovane ninja Naruto Uzumaki e la sua lotta per diventare Hokage del suo villaggio.'
            ],
            [
                'title' => 'Attack on Titan',
                'autor' => 'Hajime Isayama',
                'genre' => 'Azione, Horror',
                'publisher' => 'Kodansha',
                'price' => 9.99,
                'thumbs' => 'https://cdn.myanimelist.net/images/manga/2/37846.jpg',
                'description' => 'Lotta disperata dell’umanità per la sopravvivenza contro i giganti che minacciano l’esistenza.'
            ],
            [
                'title' => 'My Hero Academia',
                'autor' => 'Kohei Horikoshi',
                'genre' => 'Azione, Supereroi',
                'publisher' => 'Shueisha',
                'price' => 8.99,
                'thumbs' => 'https://cdn.myanimelist.net/images/manga/1/209370.jpg',
                'description' => 'La storia di Izuku Midoriya, un ragazzo senza poteri che sogna di diventare un eroe.'
            ],
            [
                'title' => 'Death Note',
                'autor' => 'Tsugumi Ohba',
                'genre' => 'Mystery, Thriller',
                'publisher' => 'Shueisha',
                'price' => 10.99,
                'thumbs' => 'https://cdn.myanimelist.net/images/manga/1/258245.jpg',
                'description' => 'Un quaderno misterioso che permette di uccidere chiunque scrivendo il nome, finisce nelle mani di uno studente geniale.'
            ],
            [
                'title' => 'Fullmetal Alchemist',
                'autor' => 'Hiromu Arakawa',
                'genre' => 'Azione, Fantascienza',
                'publisher' => 'Square Enix',
                'price' => 9.99,
                'thumbs' => 'https://cdn.myanimelist.net/images/manga/1',
                'description' => 'La storia segue i giovani alchimisti Edward e Alphonse Elric, due fratelli in viaggio per la nazione di Amestris alla ricerca della leggendaria pietra filosofale con lo scopo di riottenere i loro corpi originari persi in una trasmutazione umana finita male.'
            ],
            [
                'title' => 'Bleach',
                'autor' => 'Tite Kubo',
                'genre' => 'Azione, Sovrannaturale',
                'publisher' => 'Shueisha',
                'price' => 7.99,
                'thumbs' => 'https://cdn.myanimelist.net/images/manga/3/104031.jpg',
                'description' => 'Le avventure di Ichigo Kurosaki, un giovane che acquisisce poteri di mietitore d’anime per proteggere gli umani dai mostri.'
            ],
            [
                'title' => 'Hunter x Hunter',
                'autor' => 'Yoshihiro Togashi',
                'genre' => 'Azione, Avventura',
                'publisher' => 'Shueisha',
                'price' => 9.49,
                'thumbs' => 'https://cdn.myanimelist.net/images/manga/1/157931.jpg',
                'description' => 'Gon Freecss si avventura nel mondo per diventare un cacciatore e trovare suo padre scomparso.'
            ],
            [
                'title' => 'Fairy Tail',
                'autor' => 'Hiro Mashima',
                'genre' => 'Azione, Fantasy',
                'publisher' => 'Kodansha',
                'price' => 8.99,
                'thumbs' => 'https://cdn.myanimelist.net/images/manga/2/162765.jpg',
                'description' => 'Lucy si unisce alla gilda Fairy Tail, vivendo avventure con Natsu e i suoi amici in un mondo magico.'
            ],
            [
                'title' => 'Berserk',
                'autor' => 'Kentaro Miura',
                'genre' => 'Azione, Dark Fantasy',
                'publisher' => 'Hakusensha',
                'price' => 10.99,
                'thumbs' => 'https://cdn.myanimelist.net/images/manga/1/157666.jpg',
                'description' => 'La storia oscura e brutale del guerriero Guts e la sua lotta per la sopravvivenza in un mondo crudele.'
            ],
            [
                'title' => 'Black Clover',
                'autor' => 'Yūki Tabata',
                'genre' => 'Azione, Fantasy',
                'publisher' => 'Shueisha',
                'price' => 7.49,
                'thumbs' => 'https://cdn.myanimelist.net/images/manga/2/206602.jpg',
                'description' => 'Asta, nato senza magia in un mondo magico, lotta per diventare l’imperatore magico.'
            ],
            [
                'title' => 'Chainsaw Man',
                'autor' => 'Tatsuki Fujimoto',
                'genre' => 'Azione, Horror',
                'publisher' => 'Shueisha',
                'price' => 9.99,
                'thumbs' => 'https://cdn.myanimelist.net/images/manga/3/222319.jpg',
                'description' => 'Denji, un giovane povero, viene trasformato in un ibrido uomo-demone con motoseghe per mani.'
            ],
            [
                'title' => 'Vinland Saga',
                'autor' => 'Makoto Yukimura',
                'genre' => 'Avventura, Storico',
                'publisher' => 'Kodansha',
                'price' => 11.99,
                'thumbs' => 'https://cdn.myanimelist.net/images/manga/2/149739.jpg',
                'description' => 'Thorfinn, un giovane vichingo, cerca vendetta per la morte di suo padre nel violento mondo dei vichinghi.'
            ],
            [
                'title' => 'The Seven Deadly Sins',
                'autor' => 'Nakaba Suzuki',
                'genre' => 'Azione, Fantasy',
                'publisher' => 'Kodansha',
                'price' => 7.99,
                'thumbs' => 'https://cdn.myanimelist.net/images/manga/4/178840.jpg',
                'description' => 'Elizabeth e il cavaliere Meliodas cercano i sette peccati capitali per salvare il regno di Liones.'
            ],
            [
                'title' => 'JoJo\'s Bizarre Adventure',
                'autor' => 'Hirohiko Araki',
                'genre' => 'Azione, Sovrannaturale',
                'publisher' => 'Shueisha',
                'price' => 12.99,
                'thumbs' => 'https://cdn.myanimelist.net/images/manga/1/203190.jpg',
                'description' => 'Saga epica che segue le generazioni della famiglia Joestar e la loro lotta contro le forze del male.'
            ],
            [
                'title' => 'Re:Zero - Starting Life in Another World',
                'autor' => 'Tappei Nagatsuki',
                'genre' => 'Fantasy, Isekai',
                'publisher' => 'Media Factory',
                'price' => 8.99,
                'thumbs' => 'https://cdn.myanimelist.net/images/manga/3/207870.jpg',
                'description' => 'Subaru viene trasportato in un mondo fantasy e scopre di poter tornare in vita ogni volta che muore.'
            ]
        ];

        foreach ($mangas as $manga) {
            $newManga = new Manga();
            $newManga->title = $manga['title'];
            $newManga->autor = $manga['autor'];
            $newManga->genre = $manga['genre'];
            $newManga->publisher = $manga['publisher'];
            $newManga->price = $manga['price'];
            $newManga->thumbs = $manga['thumbs'];
            $newManga->description = $manga['description'];
            $newManga->save();
        }

    }
};