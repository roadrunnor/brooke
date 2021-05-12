<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->string('product_id', 10);
            $table->string('product_name', 30);
            $table->decimal('product_price', 10, 2);
            $table->decimal('product_promotion_price', 10, 2);
            $table->integer('product_stock_quantity');
            $table->string('product_description', 2000);
            $table->string('product_image', 50);
            $table->string('sub_category_id', 10);
            $table->primary('product_id');
            $table->foreign('sub_category_id')->references('sub_category_id')->on('sub_categories')->onDelete('cascade');
        });

        /* 20 Books */
        DB::table('products')->insert([
            'product_id' => 'pr-001',
            'product_name' => 'Javascipt for Kids',
            'product_price' => 45.95,
            'product_promotion_price' => 35.49,
            'product_stock_quantity' => 250,
            'product_description' => 'A Playful Introduction to Programming',
            'product_image' => 'book_01.jpg',
            'sub_category_id' => 'sub-001'

        ]);
        DB::table('products')->insert([
            'product_id' => 'pr-002',
            'product_name' => 'HTML5 Unleashed',
            'product_price' => 52.29,
            'product_promotion_price' => 45.49,
            'product_stock_quantity' => 250,
            'product_description' => 'HTML5 Unleashed',
            'product_image' => 'book_02.jpg',
            'sub_category_id' => 'sub-001'

        ]);
        DB::table('products')->insert([
            'product_id' => 'pr-003',
            'product_name' => 'Leaning JS Design Pattern',
            'product_price' => 52.29,
            'product_promotion_price' => 45.49,
            'product_stock_quantity' => 250,
            'product_description' => 'Learning Javascript Design Patterns',
            'product_image' => 'book_03.jpg',
            'sub_category_id' => 'sub-001'

        ]);
        DB::table('products')->insert([
            'product_id' => 'pr-004',
            'product_name' => 'Building with Javascript',
            'product_price' => 52.29,
            'product_promotion_price' => 45.49,
            'product_stock_quantity' => 250,
            'product_description' => 'Learning Path Building Microservices with Javascript',
            'product_image' => 'book_04.jpg',
            'sub_category_id' => 'sub-001'

        ]);
        DB::table('products')->insert([
            'product_id' => 'pr-005',
            'product_name' => 'HTML5 Website Features',
            'product_price' => 52.29,
            'product_promotion_price' => 45.49,
            'product_stock_quantity' => 250,
            'product_description' => 'HTML5 Website Features and Elements in 1 Day',
            'product_image' => 'book_05.jpg',
            'sub_category_id' => 'sub-001'

        ]);
        DB::table('products')->insert([
            'product_id' => 'pr-006',
            'product_name' => 'HTML5 for Web Designers',
            'product_price' => 52.29,
            'product_promotion_price' => 45.49,
            'product_stock_quantity' => 250,
            'product_description' => 'HTML5 for Web Designers',
            'product_image' => 'book_06.jpg',
            'sub_category_id' => 'sub-001'

        ]);
        DB::table('products')->insert([
            'product_id' => 'pr-007',
            'product_name' => 'Ruby on Rails Tutorial',
            'product_price' => 52.29,
            'product_promotion_price' => 45.49,
            'product_stock_quantity' => 250,
            'product_description' => 'Ruby on Rails Tutorial Second Edition',
            'product_image' => 'book_07.jpg',
            'sub_category_id' => 'sub-001'

        ]);
        DB::table('products')->insert([
            'product_id' => 'pr-008',
            'product_name' => 'Ruby on Rails',
            'product_price' => 52.29,
            'product_promotion_price' => 45.49,
            'product_stock_quantity' => 250,
            'product_description' => 'Ruby on Rails Learn Web Development with Ruby on Rails',
            'product_image' => 'book_08.jpg',
            'sub_category_id' => 'sub-002'

        ]);

        DB::table('products')->insert([
            'product_id' => 'pr-009',
            'product_name' => 'Guide to HTML, JS & PHP',
            'product_price' => 52.29,
            'product_promotion_price' => 45.49,
            'product_stock_quantity' => 250,
            'product_description' => 'Guide to HTML, Javascript and PHP for Scientists and Engineers',
            'product_image' => 'book_09.jpg',
            'sub_category_id' => 'sub-003'

        ]);

        DB::table('products')->insert([
            'product_id' => 'pr-010',
            'product_name' => 'Full Stack Javascript',
            'product_price' => 52.29,
            'product_promotion_price' => 45.49,
            'product_stock_quantity' => 250,
            'product_description' => 'Full Stack Javascript',
            'product_image' => 'book_10.jpg',
            'sub_category_id' => 'sub-003'

        ]);

        DB::table('products')->insert([
            'product_id' => 'pr-011',
            'product_name' => 'Learning Web Design',
            'product_price' => 45.95,
            'product_promotion_price' => 35.49,
            'product_stock_quantity' => 250,
            'product_description' => "A Beginner\'s Guide to HTML, CSS, Javascript, and Web Graphics",
            'product_image' => 'book_11.jpg',
            'sub_category_id' => 'sub-001'

        ]);
        DB::table('products')->insert([
            'product_id' => 'pr-012',
            'product_name' => 'Learning React',
            'product_price' => 52.29,
            'product_promotion_price' => 45.49,
            'product_stock_quantity' => 250,
            'product_description' => 'A Hands-On Guide to Building Web Applications Using React and Redux',
            'product_image' => 'book_12.jpg',
            'sub_category_id' => 'sub-005'

        ]);
        DB::table('products')->insert([
            'product_id' => 'pr-013',
            'product_name' => 'Simplifying Javascript',
            'product_price' => 52.29,
            'product_promotion_price' => 45.49,
            'product_stock_quantity' => 250,
            'product_description' => 'Simplifying Javascript: Writing Modern Javascript with ES5, ES6, and Beyond',
            'product_image' => 'book_13.jpg',
            'sub_category_id' => 'sub-003'

        ]);
        DB::table('products')->insert([
            'product_id' => 'pr-014',
            'product_name' => 'Mission Javascript',
            'product_price' => 52.29,
            'product_promotion_price' => 45.49,
            'product_stock_quantity' => 250,
            'product_description' => 'Mission Javascript',
            'product_image' => 'book_14.jpg',
            'sub_category_id' => 'sub-002'

        ]);
        DB::table('products')->insert([
            'product_id' => 'pr-015',
            'product_name' => 'HTML5 for Web Designers',
            'product_price' => 52.29,
            'product_promotion_price' => 45.49,
            'product_stock_quantity' => 250,
            'product_description' => 'HTML5 for Web Designers: Foreword by Jeffrey Zeidman',
            'product_image' => 'book_15.jpg',
            'sub_category_id' => 'sub-004'

        ]);
        DB::table('products')->insert([
            'product_id' => 'pr-016',
            'product_name' => 'Introducing HTML5',
            'product_price' => 52.29,
            'product_promotion_price' => 45.49,
            'product_stock_quantity' => 250,
            'product_description' => 'Introducing HTML5',
            'product_image' => 'book_16.jpg',
            'sub_category_id' => 'sub-005'

        ]);
        DB::table('products')->insert([
            'product_id' => 'pr-017',
            'product_name' => 'Javascript Novice to Ninja',
            'product_price' => 52.29,
            'product_promotion_price' => 45.49,
            'product_stock_quantity' => 250,
            'product_description' => "Javascript Novice to Ninja Second Edition. The Ultimate Beginner\'s Guide to Javascript",
            'product_image' => 'book_17.jpg',
            'sub_category_id' => 'sub-005'

        ]);
        DB::table('products')->insert([
            'product_id' => 'pr-018',
            'product_name' => 'HTML, CSS & JS Web Publishing',
            'product_price' => 52.29,
            'product_promotion_price' => 45.49,
            'product_stock_quantity' => 250,
            'product_description' => 'HTML, CSS & Javascript Web Publishing in One Hour a Day',
            'product_image' => 'book_18.jpg',
            'sub_category_id' => 'sub-003'

        ]);

        DB::table('products')->insert([
            'product_id' => 'pr-019',
            'product_name' => 'The HTML and CSS Workshop',
            'product_price' => 52.29,
            'product_promotion_price' => 45.49,
            'product_stock_quantity' => 250,
            'product_description' => 'The HTML and CSS Workshop, A New, Interactive Approach to Learning HTML and CSS',
            'product_image' => 'book_19.jpg',
            'sub_category_id' => 'sub-004'

        ]);

        DB::table('products')->insert([
            'product_id' => 'pr-020',
            'product_name' => 'JS for Data Science',
            'product_price' => 52.29,
            'product_promotion_price' => 45.49,
            'product_stock_quantity' => 250,
            'product_description' => 'Javascript for Data Science: Data Science Series',
            'product_image' => 'book_20.jpg',
            'sub_category_id' => 'sub-003'

        ]);

        /* 20 films */
        DB::table('products')->insert([
            'product_id' => 'pr-021',
            'product_name' => 'Cuatro paredes, 2021',
            'product_price' => 52.29,
            'product_promotion_price' => 45.49,
            'product_stock_quantity' => 250,
            'product_description' => 'Karla arrives in Tijuana, Mexico to stay at her estranged aunt’s house a year after her father’s death. In this moment of solitude and calm, she looks up, down, inward and outward through the transpositional alchemy of text and is reminded that speaking to oneself feels like a vital human practice',
            'product_image' => 'film_01.jpg',
            'sub_category_id' => 'sub-006'

        ]);
        DB::table('products')->insert([
            'product_id' => 'pr-022',
            'product_name' => 'The French Dispatch, 2021',
            'product_price' => 52.29,
            'product_promotion_price' => 45.49,
            'product_stock_quantity' => 250,
            'product_description' => 'On the death of the Editor-in-Chief, the editorial staff decides to publish a last, memorial edition highlighting the three best stories which appeared over the ten-year existence of the magazine.The stories involve an artist sentenced to life imprisonment; student riots, and a kidnapping.',
            'product_image' => 'film_02.jpg',
            'sub_category_id' => 'sub-007'

        ]);
        DB::table('products')->insert([
            'product_id' => 'pr-023',
            'product_name' => 'Shangri-La, 2021',
            'product_price' => 52.29,
            'product_promotion_price' => 45.49,
            'product_stock_quantity' => 250,
            'product_description' => 'On the death of the Editor-in-Chief, the editorial staff decides to publish a last, memorial edition highlighting the three best stories which appeared over the ten-year existence of the magazine.The stories involve an artist sentenced to life imprisonment; student riots, and a kidnapping.',
            'product_image' => 'film_03.jpg',
            'sub_category_id' => 'sub-006'

        ]);
        DB::table('products')->insert([
            'product_id' => 'pr-024',
            'product_name' => 'Petite maman, 2021',
            'product_price' => 52.29,
            'product_promotion_price' => 45.49,
            'product_stock_quantity' => 250,
            'product_description' => 'Eight-year-old Nelly has just lost her beloved grandmother and is helping her parents clean out her mother’s childhood home. One day her mother suddenly leaves. That is when Nelly meets a girl of her own age in the woods, building a treehouse. Her name is Marion.',
            'product_image' => 'film_04.jpg',
            'sub_category_id' => 'sub-007'

        ]);
        DB::table('products')->insert([
            'product_id' => 'pr-025',
            'product_name' => 'Dune, 2021',
            'product_price' => 52.29,
            'product_promotion_price' => 45.49,
            'product_stock_quantity' => 250,
            'product_description' => 'Paul Atreides, a brilliant and gifted young man born into a great destiny beyond his understanding, who must travel to the most dangerous planet in the universe to ensure the future of his family and his people.',
            'product_image' => 'film_05.jpg',
            'sub_category_id' => 'sub-006'

        ]);
        DB::table('products')->insert([
            'product_id' => 'pr-026',
            'product_name' => 'Judas Black Messiah, 2021',
            'product_price' => 52.29,
            'product_promotion_price' => 45.49,
            'product_stock_quantity' => 250,
            'product_description' => 'The story of Fred Hampton, Chairman of the Illinois Black Panther Party, and his fateful betrayal by FBI informant William O’Neal.',
            'product_image' => 'film_06.jpg',
            'sub_category_id' => 'sub-009'

        ]);
        DB::table('products')->insert([
            'product_id' => 'pr-027',
            'product_name' => 'House of Gucci, 2021',
            'product_price' => 52.29,
            'product_promotion_price' => 45.49,
            'product_stock_quantity' => 250,
            'product_description' => 'web design with Laravel85',
            'product_image' => 'film_07.jpg',
            'sub_category_id' => 'sub-006'

        ]);
        DB::table('products')->insert([
            'product_id' => 'pr-028',
            'product_name' => 'Blossoms Shanghai, 2021',
            'product_price' => 52.29,
            'product_promotion_price' => 45.49,
            'product_stock_quantity' => 250,
            'product_description' => 'The story of a self-made millionaire in Shanghai during the 1990s from a young opportunist with a troubled past to the heights of the gilded city.',
            'product_image' => 'film_08.jpg',
            'sub_category_id' => 'sub-006'

        ]);
        DB::table('products')->insert([
            'product_id' => 'pr-029',
            'product_name' => 'Hey There!, 2021',
            'product_price' => 52.29,
            'product_promotion_price' => 45.49,
            'product_stock_quantity' => 250,
            'product_description' => 'While Istanbul is under lockdown, Felek and Kerim have their scheme set up: they plan to infiltrate the computers of people at home, pretend they’re the government, scare them with their “crimes,” and rip them off. But this is Istanbul, and people come in all types.',
            'product_image' => 'film_09.jpg',
            'sub_category_id' => 'sub-007'

        ]);
        DB::table('products')->insert([
            'product_id' => 'pr-030',
            'product_name' => 'There Is No Evil, 2020',
            'product_price' => 52.29,
            'product_promotion_price' => 45.49,
            'product_stock_quantity' => 250,
            'product_description' => 'The four stories that comprise There Is No Evil are variations on the crucial themes of moral strength and the death penalty that ask to what extent individual freedom can be expressed under a despotic regime and its seemingly inescapable threats.',
            'product_image' => 'film_10.jpg',
            'sub_category_id' => 'sub-006'

        ]);
        DB::table('products')->insert([
            'product_id' => 'pr-031',
            'product_name' => 'Benedetta, 2021',
            'product_price' => 52.29,
            'product_promotion_price' => 45.49,
            'product_stock_quantity' => 250,
            'product_description' => 'In the late 15th century, with plague ravaging the land, Benedetta Carlini joins the convent in Pescia, Tuscany, as a novice. Capable from an early age of performing miracles, Benedetta’s impact on life in the community is immediate and momentous.',
            'product_image' => 'film_11.jpg',
            'sub_category_id' => 'sub-007'

        ]);
        DB::table('products')->insert([
            'product_id' => 'pr-032',
            'product_name' => 'Persian Lessons, 2020',
            'product_price' => 52.29,
            'product_promotion_price' => 45.49,
            'product_stock_quantity' => 250,
            'product_description' => 'Set during the Second World War, the story follows a Jewish man who avoids being sent to a concentration camp by claiming to be Persian. When a German military officer enlists him to speak him Farsi, he must pretend to speak the language to secure his survival.',
            'product_image' => 'film_12.jpg',
            'sub_category_id' => 'sub-006'

        ]);
        DB::table('products')->insert([
            'product_id' => 'pr-033',
            'product_name' => 'film_6',
            'product_price' => 52.29,
            'product_promotion_price' => 45.49,
            'product_stock_quantity' => 250,
            'product_description' => 'web design with PHP5',
            'product_image' => 'film_13.jpg',
            'sub_category_id' => 'sub-009'

        ]);
        DB::table('products')->insert([
            'product_id' => 'pr-034',
            'product_name' => 'film_7',
            'product_price' => 52.29,
            'product_promotion_price' => 45.49,
            'product_stock_quantity' => 250,
            'product_description' => 'web design with Laravel85',
            'product_image' => 'film_14.jpg',
            'sub_category_id' => 'sub-006'

        ]);
        DB::table('products')->insert([
            'product_id' => 'pr-035',
            'product_name' => 'Indiana Jones: the German',
            'product_price' => 52.29,
            'product_promotion_price' => 45.49,
            'product_stock_quantity' => 250,
            'product_description' => 'Indiana Jones',
            'product_image' => 'film_15.jpg',
            'sub_category_id' => 'sub-006'

        ]);
        DB::table('products')->insert([
            'product_id' => 'pr-036',
            'product_name' => 'film_15',
            'product_price' => 52.29,
            'product_promotion_price' => 45.49,
            'product_stock_quantity' => 250,
            'product_description' => 'web design with HTML5',
            'product_image' => 'film_16.jpg',
            'sub_category_id' => 'sub-007'

        ]);
        DB::table('products')->insert([
            'product_id' => 'pr-037',
            'product_name' => 'film_3',
            'product_price' => 52.29,
            'product_promotion_price' => 45.49,
            'product_stock_quantity' => 250,
            'product_description' => 'web design with PHP5',
            'product_image' => 'film_17.jpg',
            'sub_category_id' => 'sub-006'

        ]);
        DB::table('products')->insert([
            'product_id' => 'pr-038',
            'product_name' => 'film_4',
            'product_price' => 52.29,
            'product_promotion_price' => 45.49,
            'product_stock_quantity' => 250,
            'product_description' => 'web design with Laravel85',
            'product_image' => 'film_18.jpg',
            'sub_category_id' => 'sub-007'

        ]);
        DB::table('products')->insert([
            'product_id' => 'pr-039',
            'product_name' => 'film_5',
            'product_price' => 52.29,
            'product_promotion_price' => 45.49,
            'product_stock_quantity' => 250,
            'product_description' => 'web design with HTML5',
            'product_image' => 'film_19.jpg',
            'sub_category_id' => 'sub-006'

        ]);
        DB::table('products')->insert([
            'product_id' => 'pr-040',
            'product_name' => 'film_6',
            'product_price' => 52.29,
            'product_promotion_price' => 45.49,
            'product_stock_quantity' => 250,
            'product_description' => 'web design with PHP5',
            'product_image' => 'film_20.jpg',
            'sub_category_id' => 'sub-009'

        ]);

        /* 20 VGames */
        DB::table('products')->insert([
            'product_id' => 'pr-041',
            'product_name' => 'Grand Theft Auto V',
            'product_price' => 52.29,
            'product_promotion_price' => 45.49,
            'product_stock_quantity' => 250,
            'product_description' => 'Grand Theft Auto V is an action-adventure game played from either a third-person or first-person perspective. Players complete missions—linear scenarios with set objectives—to progress through the story. Outside of the missions, players may freely roam the open world.',
            'product_image' => 'ps4_01.jpg',
            'sub_category_id' => 'sub-011'

        ]);
        DB::table('products')->insert([
            'product_id' => 'pr-042',
            'product_name' => 'Marvel\'s Spider-Man',
            'product_price' => 52.29,
            'product_promotion_price' => 45.49,
            'product_stock_quantity' => 250,
            'product_description' => 'Starring the world\'s most iconic Super Hero, Spider-Man PS4 (working title) features the acrobatic abilities, improvisation and web-slinging that the wall-crawler is famous for, while also introducing elements never-before-seen in a Spider-Man game. ... This isn\'t the Spider-Man you\'ve met before, or seen in a movie.',
            'product_image' => 'ps4_02.jpg',
            'sub_category_id' => 'sub-011'

        ]);
        DB::table('products')->insert([
            'product_id' => 'pr-043',
            'product_name' => 'Jumanji, The Video Game',
            'product_price' => 52.29,
            'product_promotion_price' => 45.49,
            'product_stock_quantity' => 250,
            'product_description' => 'Unite in adventure and laughter in the action-packed game of Jumanji, the ultimate challenge for those who seek to leave their world behind. Play online, split-screen or with AI teammates, and combine the unique abilities of Dr. Bravestone, Ruby, Mouse and Prof. Oberon to defeat your foes and save the day!',
            'product_image' => 'ps4_03.jpg',
            'sub_category_id' => 'sub-011'

        ]);
        DB::table('products')->insert([
            'product_id' => 'pr-044',
            'product_name' => 'Destroy All Humans!',
            'product_price' => 52.29,
            'product_promotion_price' => 45.49,
            'product_stock_quantity' => 250,
            'product_description' => 'The cult-classic returns! Terrorize the people of 1950\'s Earth in the role of the evil alien Crypto-137. Harvest DNA and bring down the US government in the remake of the legendary alien invasion action adventure. Annihilate puny humans using an assortment of alien weaponry and psychic abilities.',
            'product_image' => 'ps4_04.jpg',
            'sub_category_id' => 'sub-011' 

        ]);
        DB::table('products')->insert([
            'product_id' => 'pr-045',
            'product_name' => 'Marvel\'s Avengers',
            'product_price' => 52.29,
            'product_promotion_price' => 45.49,
            'product_stock_quantity' => 250,
            'product_description' => 'Marvel\'s Avengers is a third-person, action-adventure game that combines an original, cinematic story with single-player and co-operative gameplay. The game features a unique combat system chaining attacks, dodges, abilities, skills and elements to succeed a combat phase.',
            'product_image' => 'ps4_05.jpg',
            'sub_category_id' => 'sub-011'

        ]);
        DB::table('products')->insert([
            'product_id' => 'pr-046',
            'product_name' => 'Assassin\s Creed: Valhalla',
            'product_price' => 52.29,
            'product_promotion_price' => 45.49,
            'product_stock_quantity' => 250,
            'product_description' => 'Become a legendary Viking warrior raised on tales of battle and glory. Raid your enemies, grow your settlement, and build your political power in the quest to earn a place among the gods in Valhalla. Advanced RPG mechanics allow you to shape the growth of your character and influence the world around you.',
            'product_image' => 'ps4_06.jpg',
            'sub_category_id' => 'sub-011'

        ]);
        DB::table('products')->insert([
            'product_id' => 'pr-047',
            'product_name' => 'Rage 2',
            'product_price' => 52.29,
            'product_promotion_price' => 45.49,
            'product_stock_quantity' => 250,
            'product_description' => 'With ludicrous vehicle combat, super-powered first-person mayhem, and an open world full of emergent madness, you will tear across an unforgiving wasteland battling sadistic gangs to find the tools and tech needed to crush the oppressive rule of The Authority once and for all.',
            'product_image' => 'ps4_07.jpg',
            'sub_category_id' => 'sub-011'

        ]);
        DB::table('products')->insert([
            'product_id' => 'pr-048',
            'product_name' => 'Call of Duty: Black OPS',
            'product_price' => 52.29,
            'product_promotion_price' => 45.49,
            'product_stock_quantity' => 250,
            'product_description' => 'Black Ops is back! Featuring gritty, grounded Multiplayer combat, the biggest Zombies offering ever with three full undead adventures at launch, and Blackout, where the universe of Black Ops comes to life in a massive battle royale experience.',
            'product_image' => 'ps4_08.jpg',
            'sub_category_id' => 'sub-011'

        ]);
        DB::table('products')->insert([
            'product_id' => 'pr-049',
            'product_name' => 'Control',
            'product_price' => 52.29,
            'product_promotion_price' => 45.49,
            'product_stock_quantity' => 250,
            'product_description' => 'Control revolves around the titular Federal Bureau of Control (FBC), a clandestine U.S. government agency which investigates supernatural Altered World Events (AWEs). ... Control takes place entirely within the Oldest House, a Brutalist skyscraper in New York City which is the headquarters of the FBC.',
            'product_image' => 'ps4_09.jpg',
            'sub_category_id' => 'sub-011'

        ]);
        DB::table('products')->insert([
            'product_id' => 'pr-050',
            'product_name' => 'NBA 2K20',
            'product_price' => 52.29,
            'product_promotion_price' => 45.49,
            'product_stock_quantity' => 250,
            'product_description' => 'Take your skills to the next level with the most realistic player control ever, featuring an upgraded motion engine with signature styles, advanced shooting controls, a new dribble size-up system, refined off-ball collisions, and a new read & react defensive game.',
            'product_image' => 'ps4_10.jpg',
            'sub_category_id' => 'sub-011'

        ]);
        DB::table('products')->insert([
            'product_id' => 'pr-051',
            'product_name' => 'W2K20',
            'product_price' => 52.29,
            'product_promotion_price' => 45.49,
            'product_stock_quantity' => 250,
            'product_description' => 'WWE 2K20 will feature key gameplay improvements, streamlined controls, and the most fun and creatively expansive entry in the franchise to date. ... Although this game is playable on PS5, some features available on PS4 may be absent. See PlayStation.com/bc for more details.',
            'product_image' => 'ps4_11.jpg',
            'sub_category_id' => 'sub-011'

        ]);
        DB::table('products')->insert([
            'product_id' => 'pr-052',
            'product_name' => 'American Ninja Warrior',
            'product_price' => 52.29,
            'product_promotion_price' => 45.49,
            'product_stock_quantity' => 250,
            'product_description' => 'Race the clock and your friends in this intuitive and addictive game through a variety of frantic obstacle courses. Those who successfully complete the city courses move on to the finals where they face a stunning four-stage course modeled after the famed Mt. Midoriyama course in Japan.',
            'product_image' => 'ps4_12.jpg',
            'sub_category_id' => 'sub-011'

        ]);
        DB::table('products')->insert([
            'product_id' => 'pr-053',
            'product_name' => 'Fast & Furious: Crossroad',
            'product_price' => 52.29,
            'product_promotion_price' => 45.49,
            'product_stock_quantity' => 250,
            'product_description' => 'Fast & furious crossroads is an action-adventure video game set in the fast & furious universe. ... With adrenaline-fueled stunts and heists, gadgets, exotic locations, cars, and heroes from the films, fast & furious crossroads casts you right at the center of the action.',
            'product_image' => 'ps4_13.jpg',
            'sub_category_id' => 'sub-011'

        ]);
        DB::table('products')->insert([
            'product_id' => 'pr-054',
            'product_name' => 'Borderlands 3',
            'product_price' => 52.29,
            'product_promotion_price' => 45.49,
            'product_stock_quantity' => 250,
            'product_description' => 'The original shooter-looter returns, packing bazillions of guns and a mayhem-fueled adventure! Blast through new worlds and enemies as one of four new Vault Hunters. Play solo or with friends to take on insane enemies, score loads of loot and save your home from the most ruthless cult leaders in the galaxy.',
            'product_image' => 'ps4_14.jpg',
            'sub_category_id' => 'sub-011'

        ]);
        DB::table('products')->insert([
            'product_id' => 'pr-055',
            'product_name' => 'Deadpool',
            'product_price' => 52.29,
            'product_promotion_price' => 45.49,
            'product_stock_quantity' => 250,
            'product_description' => 'Deadpool is an action-adventure video game based on the Marvel Comics antihero of the same name. The game was developed by High Moon Studios and published by Activision. ... The game was re-released on November 18, 2015 on PlayStation 4 and Xbox One to coincide with the release of the 2016 film based on the character.',
            'product_image' => 'ps4_15.jpg',
            'sub_category_id' => 'sub-011'

        ]);
        DB::table('products')->insert([
            'product_id' => 'pr-056',
            'product_name' => 'Project Cars',
            'product_price' => 52.29,
            'product_promotion_price' => 45.49,
            'product_stock_quantity' => 250,
            'product_description' => 'It features 140 track layouts at 60 different spots and 189 cars ranging from go-karts to Supercars, including Porsche, Ferrari, Lamborghini, etc. It was available worldwide on 22 September 2017 for Microsoft Windows, PlayStation 4, and Xbox One platforms.',
            'product_image' => 'ps4_16.jpg',
            'sub_category_id' => 'sub-011'

        ]);
        DB::table('products')->insert([
            'product_id' => 'pr-057',
            'product_name' => 'Five Nights at Freddy\'s',
            'product_price' => 52.29,
            'product_promotion_price' => 45.49,
            'product_stock_quantity' => 250,
            'product_description' => 'Welcome to your new summer job at Freddy Fazbears Pizza, where kids and ... five nights at Freddysbrbr1 playerbrDUALSHOCK®4brbr Software subject to license us.playstation.comsoftwarelicense. ... One-time license fee for play on account\'s designated primary PS4™ system ... See PlayStation.com/bc for more details.',
            'product_image' => 'ps4_17.jpg',
            'sub_category_id' => 'sub-011'

        ]);
        DB::table('products')->insert([
            'product_id' => 'pr-058',
            'product_name' => 'Metro Exodus',
            'product_price' => 52.29,
            'product_promotion_price' => 45.49,
            'product_stock_quantity' => 250,
            'product_description' => 'Metro Exodus is an epic, story-driven first person shooter from 4A Games that blends deadly combat and stealth with exploration and survival horror in one of the most immersive game worlds ever created. ... To play this game on PS5, your system may need to be updated to the latest system software.',
            'product_image' => 'ps4_18.jpg',
            'sub_category_id' => 'sub-011'

        ]);
        DB::table('products')->insert([
            'product_id' => 'pr-059',
            'product_name' => 'Redout Race Fast Ever',
            'product_price' => 52.29,
            'product_promotion_price' => 45.49,
            'product_stock_quantity' => 250,
            'product_description' => 'Redout is a tribute to the old racing monsters such as F-Zero, WipeOut, ... Summary: NEXT GENERATION AG RACING IS HERE! ... The sense of speed is great and this game is a very capable ... genre that has never been celebrated enough, RedOut will surely be your case. ... #57 Best PS4 Game of 2017',
            'product_image' => 'ps4_19.jpg',
            'sub_category_id' => 'sub-011'

        ]);
        DB::table('products')->insert([
            'product_id' => 'pr-060',
            'product_name' => 'Shenmue 3',
            'product_price' => 52.29,
            'product_promotion_price' => 45.49,
            'product_stock_quantity' => 250,
            'product_description' => 'In this third installment of the epic Shenmue series, Ryo seeks to solve the mystery behind the Phoenix Mirror, an artifact sought after by his father\'s killer. His journey takes him to an immersive representation of rural China, brimming with activity and surrounded by beautiful landscapes.',
            'product_image' => 'ps4_20.jpg',
            'sub_category_id' => 'sub-011'

        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
