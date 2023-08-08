<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GameLinkSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('game_links')->insert([
            [
                'name' => 'globle-capitals',
                'link' => 'https://globle-capitals.com/game',
                'category' => 'geo',
            ],
            [
                'name' => '5 אותיות | וורדעל בעברית ✔️',
                'link' => 'https://www.haaretz.co.il/riddles/ty-page/haaretz-wordle',
                'category' => 'word',
            ],
            [
                'name' => 'Wordle - The New York Times',
                'link' => 'https://www.nytimes.com/games/wordle/index.html',
                'category' => 'word',
            ],
            [
                'name' => 'Globle',
                'link' => 'https://globle-game.com/',
                'category' => 'geo',
            ],
            [
                'name' => 'Worldle - Guess the Country!',
                'link' => 'https://worldle.teuteuf.fr/',
                'category' => 'geo',
            ],
            [
                'name' => 'Sweardle - the 4 letter word guessing game',
                'link' => 'https://sweardle.com/',
                'category' => 'word',
            ],
            [
                'name' => 'Framed - The daily movie guessing game',
                'link' => 'https://framed.wtf/',
                'category' => 'movies',
            ],
            [
                'name' => 'Octordle',
                'link' => 'https://www.britannica.com/games/octordle/?mwrd=646be83fc80330b14f5462d1',
                'category' => 'word',
            ],
            [
                'name' => 'Wordle Game - Play Unlimited',
                'link' => 'https://wordlegame.org/',
                'category' => 'word',
            ],
            [
                'name' => 'Plotwords - Daily',
                'link' => 'https://plotwords.com/daily',
                'category' => 'movies',
            ],
            [
                'name' => 'Moviedle: The Movie Guessing Game | Likewise TV',
                'link' => 'https://likewisetv.com/arcade/moviedle',
                'category' => 'movies',
            ],
            [
                'name' => 'סמנטעל',
                'link' => 'https://semantle.ishefi.com/?guesses=[]',
                'category' => 'word',
            ],
            [
                'name' => 'Episode - The weekly TV show guessing game',
                'link' => 'https://episode.wtf/?ref=framed',
                'category' => 'movies',
            ],
            [
                'name' => 'Degle',
                'link' => 'https://degle.ishefi.com/',
                'category' => 'geo',
            ],
            [
                'name' => 'Statele - Guess the State!',
                'link' => 'https://statele.teuteuf.fr/',
                'category' => 'geo',
            ],
            [
                'name' => 'La palabra del día',
                'link' => 'https://lapalabradeldia.com/',
                'category' => 'word',
            ],
            [
                'name' => 'City Guesser - Can you guess what city you\'re in?',
                'link' => 'https://virtualvacation.us/guess',
                'category' => 'geo',
            ],
            [
                'name' => 'WhereTaken',
                'link' => 'https://wheretaken.teuteuf.fr/',
                'category' => 'geo',
            ],
            [
                'name' => 'Emovi',
                'link' => 'https://emovi.teuteuf.fr/',
                'category' => 'movies',
            ],
            [
                'name' => 'Coderdle - Wordle for Tech Community | Wordle for Coders',
                'link' => 'https://nofluffjobs.com/coderdle/',
                'category' => 'word',
            ],
            [
                'name' => 'mimamu',
                'link' => 'https://mimamu.ishefi.com/',
                'category' => 'word',
            ],
            [
                'name' => 'flagle',
                'link' => 'https://www.flagle.io/',
                'category' => 'geo',
            ],
            [
                'name' => 'flaggle+',
                'link' => 'https://ducc.pythonanywhere.com/flaggle/',
                'category' => 'geo',
            ],
            [
                'name' => 'flaggle pro max',
                'link' => 'https://flagle.net/',
                'category' => 'geo',
            ],
        ]);
    }
}
