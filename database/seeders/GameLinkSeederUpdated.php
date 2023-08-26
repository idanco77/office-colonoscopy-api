<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GameLinkSeederUpdated extends Seeder
{
    public function run(): void
    {
        DB::table('game_links')->insert([
            [
                'name' => 'Globle-capitals',
                'description' => 'Find the right capital on a globe',
                'link' => 'https://globle-capitals.com/game',
                'category' => 'geo',
                'sub_category' => json_encode(['map','geography']),
            ],
            [
                'name' => 'Where taken - usa',
                'description' => 'Get a picture of a location in the usa and try to guess where it is',
                'link' => 'https://wheretakenusa.teuteuf.fr/',
                'category' => 'geo',
                'sub_category' => json_encode(['geography', 'picture']),
            ],
            [
                'name' => 'Hebrew wordle - וורדל בעברית',
                'description' => 'Try to guess the word - Hebrew',
                'link' => 'https://www.haaretz.co.il/riddles/ty-page/haaretz-wordle',
                'category' => 'word',
                'sub_category' => json_encode(['language', 'puzzle']),
            ],
            [
                'name' => 'Wordle',
                'description' => 'Try to guess the word',
                'link' => 'https://www.nytimes.com/games/wordle/index.html',
                'category' => 'word',
                'sub_category' => json_encode(['language', 'puzzle']),
            ],
            [
                'name' => 'Globle',
                'description' => 'Find the right country on a globe',
                'link' => 'https://globle-game.com/',
                'category' => 'geo',
                'sub_category' => json_encode(['map', 'geography']),
            ],
            [
                'name' => 'Worldle - Guess the Country!',
                'description' => 'Find the right country by shape',
                'link' => 'https://worldle.teuteuf.fr/',
                'category' => 'geo',
                'sub_category' => json_encode(['map', 'geography']),
            ],
            [
                'name' => 'Sweardle',
                'description' => 'Try to guess the curse word',
                'link' => 'https://sweardle.com/',
                'category' => 'word',
                'sub_category' => json_encode(['language', 'puzzle']),
            ],
            [
                'name' => 'Framed',
                'description' => 'Guess the movie by frame',
                'link' => 'https://framed.wtf/',
                'category' => 'movies',
                'sub_category' => json_encode(['movies', 'quiz', 'picture']),
            ],
            [
                'name' => 'Octordle',
                'description' => 'Try to guess the words - 8 words at once',
                'link' => 'https://www.britannica.com/games/octordle/?mwrd=646be83fc80330b14f5462d1',
                'category' => 'word',
                'sub_category' => json_encode(['language', 'puzzle']),
            ],
            [
                'name' => 'Wordle - Play Unlimited',
                'description' => 'Try to guess the word',
                'link' => 'https://wordlegame.org/',
                'category' => 'word',
                'sub_category' => json_encode(['language', 'puzzle']),
            ],
            [
                'name' => 'Plotwords - Daily',
                'description' => 'Try to guess the movie by references',
                'link' => 'https://plotwords.com/daily',
                'category' => 'movies',
                'sub_category' => json_encode(['movies', 'quiz', 'language']),
            ],
            [
                'name' => 'Moviedle',
                'description' => 'Try to guess the movie by a fast forward sequence of frames',
                'link' => 'https://likewisetv.com/arcade/moviedle',
                'category' => 'movies',
                'sub_category' => json_encode(['movies', 'puzzle', 'video']),
            ],
            [
                'name' => 'Smentle - Hebrew',
                'description' => 'Try to guess the word',
                'link' => 'https://semantle.ishefi.com/?guesses=[]',
                'category' => 'word',
                'sub_category' => json_encode(['language', 'puzzle']),
            ],
            [
                'name' => 'Episode',
                'description' => 'Try to guess the TV show by frames',
                'link' => 'https://episode.wtf/?ref=framed',
                'category' => 'movies',
                'sub_category' => json_encode(['movies', 'quiz', 'picture']),
            ],
            [
                'name' => 'Degle',
                'description' => 'Guess the flag!',
                'link' => 'https://degle.ishefi.com/',
                'category' => 'geo',
                'sub_category' => json_encode(['flag', 'quiz', 'geo', 'picture']),
            ],
            [
                'name' => 'Statele - Guess the State!',
                'description' => 'Guess the american state by shape',
                'link' => 'https://statele.teuteuf.fr/',
                'category' => 'geo',
                'sub_category' => json_encode(['map', 'geography']),
            ],
            [
                'name' => 'Wordle - Spanish',
                'description' => 'Try to guess the word',
                'link' => 'https://lapalabradeldia.com/',
                'category' => 'word',
                'sub_category' => json_encode(['language', 'puzzle']),
            ],
            [
                'name' => 'City Guesser',
                'description' => 'Guess the location in the world by a video of a person travels there',
                'link' => 'https://virtualvacation.us/guess',
                'category' => 'geo',
                'sub_category' => json_encode(['geography', 'quiz', 'video']),
            ],
            [
                'name' => 'WhereTaken',
                'description' => 'Get a picture of a location in the world and try to guess where it is',
                'link' => 'https://wheretaken.teuteuf.fr/',
                'category' => 'geo',
                'sub_category' => json_encode(['geography', 'quiz', 'picture']),
            ],
            [
                'name' => 'Emovi',
                'description' => 'Get a set of emojis and guess the movie it trying to describe',
                'link' => 'https://emovi.teuteuf.fr/',
                'category' => 'movies',
                'sub_category' => json_encode(['movies', 'puzzle', 'picture']),
            ],
            [
                'name' => 'Coderdle',
                'description' => 'Try to guess the code term',
                'link' => 'https://nofluffjobs.com/coderdle/',
                'category' => 'word',
                'sub_category' => json_encode(['language', 'puzzle']),
            ],
            [
                'name' => 'Mimamu',
                'description' => 'Get an AI generated picture and try to guess the prompt that was used to create it',
                'link' => 'https://mimamu.ishefi.com/',
                'category' => 'word',
                'sub_category' => json_encode(['language', 'puzzle', 'picture']),
            ],
            [
                'name' => 'Flagle',
                'description' => 'Guess the flag!',
                'link' => 'https://www.flagle.io/',
                'category' => 'geo',
                'sub_category' => json_encode(['flag', 'quiz', 'picture']),
            ],
            [
                'name' => 'Flaggle',
                'description' => 'Guess the flag!',
                'link' => 'https://ducc.pythonanywhere.com/flaggle/',
                'category' => 'geo',
                'sub_category' => json_encode(['flag', 'quiz', 'picture']),
            ],
            [
                'name' => 'Flagle',
                'description' => 'Guess the flag!',
                'link' => 'https://flagle.net/',
                'category' => 'geo',
                'sub_category' => json_encode(['flag', 'quiz', 'picture']),
            ],
        ]);
    }
}
