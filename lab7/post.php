<?php
$post_id = $_GET['postId'];

$posts = [
    [
        'id' => 1,
        'title' => 'The Road Ahead',
        'subscription' => 'The road ahead might be paved - it might not be.',
        'image' => 'static/images/index/p1.png', 
        'post_text' => 'Dark spruce forest frowned on either side the frozen waterway. The trees had been stripped by a recent wind of their white covering of frost, and they seemed to lean towards each other, black and ominous, in the fading light. A vast silence reigned over the land. The land itself was a desolation, lifeless, without movement, so lone and cold that the spirit of it was not even that of sadness. There was a hint in it of laughter, but of a laughter more terrible than any sadness—a laughter that was mirthless as the smile of the sphinx, a laughter cold as the frost and partaking of the grimness of infallibility. It was the masterful and incommunicable wisdom of eternity laughing at the futility of life and the effort of life. It was the Wild, the savage, frozen-hearted Northland Wild. But there was life, abroad in the land and defiant. Down the frozen waterway toiled a string of wolfish dogs. Their bristly fur was rimed with frost. Their breath froze in the air as it left their mouths, spouting forth in spumes of vapour that settled upon the hair of their bodies and formed into crystals of frost. Leather harness was on the dogs, and leather traces attached them to a sled which dragged along behind. The sled was without runners. It was made of stout birch-bark, and its full surface rested on the snow. The front end of the sled was turned up, like a scroll, in order to force down and under the bore of soft snow that surged like a wave before it. On the sled, securely lashed, was a long and narrow oblong box. There were other things on the sled—blankets, an axe, and a coffee-pot and frying-pan; but prominent, occupying most of the space, was the long and narrow oblong box. In advance of the dogs, on wide snowshoes, toiled a man. At the rear of the sled toiled a second man. On the sled, in the box, lay a third man whose toil was over,—a man whom the Wild had conquered and beaten down until he would never move nor struggle again. It is not the way of the Wild to like movement. Life is an offence to it, for life is movement; and the Wild aims always to destroy movement. It freezes the water to prevent it running to the sea; it drives the sap out of the trees till they are frozen to their mighty hearts; and most ferociously and terribly of all does the Wild harry and crush into submission man—man who is the most restless of life, ever in revolt against the dictum that all movement must in the end come to the cessation of movement. But at front and rear, unawed and indomitable, toiled the two men who were not yet dead. Their bodies were covered with fur and soft-tanned leather. Eyelashes and cheeks and lips were so coated with the crystals from their frozen breath that their faces were not discernible. This gave them the seeming of ghostly masques, undertakers in a spectral world at the funeral of some ghost. But under it all they were men, penetrating the land of desolation and mockery and silence, puny adventurers bent on colossal adventure, pitting themselves against the might of a world as remote and alien and pulseless as the abysses of space.'
    ],

    [
        'id' => 2,
        'title' => 'From Top To Down',
        'subscription' => 'Please visit Chongquing if you have any chance!',
        'image' => 'static/images/index/p2.png', 
        'post_text' => 'Idk hahahahahahahahahaahahahIdk hahahahahahahahahaahahahIdk hahahahahahahahahaahahahIdk hahahahahahahahahaahahahIdk hahahahahahahahahaahahahIdk hahahahahahahahahaahahah',
    ],

    [
        'id' => 3,
        'title' => "Assembler's importancy",
        'subscription' => 'Assembler is a great opportunity to be a straight "A" student!',
        'image' => 'static/images/index/p3.png', 
        'post_text' => 'Assembler is greatAssembler is greatAssembler is greatAssembler is greatAssembler is greatAssembler is greatAssembler is greatAssembler is greatAssembler is greatAssembler is great',
    ],

    [
        'id' => 4,
        'title' => "Why sleeping is important?",
        'subscription' => 'Just sleep and everything is alright!',
        'image' => 'static/images/index/p4.png', 
        'post_text' => 'Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ Я ХОЧУ СПАТЬ ',
    ],

    [
        'id' => 5,
        'title' => 'Trip to Saint Petersburg',
        'subscription' => "The beauty of Russia's Netherlands can't be described in words!",
        'image' => 'static/images/index/p5.png', 
        'post_text' => 'Petersburg was found by Peter The FirstPetersburg was found by Peter The FirstPetersburg was found by Peter The FirstPetersburg was found by Peter The FirstPetersburg was found by Peter The FirstPetersburg was found by Peter The FirstPetersburg was found by Peter The FirstPetersburg was found by Peter The FirstPetersburg was found by Peter The FirstPetersburg was found by Peter The FirstPetersburg was found by Peter The FirstPetersburg was found by Peter The FirstPetersburg was found by Peter The FirstPetersburg was found by Peter The FirstPetersburg was found by Peter The FirstPetersburg was found by Peter The First',
    ],

    [
        'id' => 6,
        'title' => "Through the mist",
        'subscription' => 'Travel makes you see what a tiny place you occupy in the world.',
        'image' => 'static/images/index/p6.png', 
        'post_text' => 'MIST IS CALLINGMIST IS CALLINGMIST IS CALLINGMIST IS CALLINGMIST IS CALLINGMIST IS CALLINGMIST IS CALLINGMIST IS CALLINGMIST IS CALLINGMIST IS CALLINGMIST IS CALLINGMIST IS CALLINGMIST IS CALLINGMIST IS CALLINGMIST IS CALLINGMIST IS CALLINGMIST IS CALLINGMIST IS CALLINGMIST IS CALLINGMIST IS CALLINGMIST IS CALLING',
    ],

    [
        'id' => 7,
        'title' => "Awaken early",
        'subscription' => 'Not thouse who wander are lost.',
        'image' => 'static/images/index/p7.png', 
        'post_text' => 'I AM WAKING UP IN 5:40 AM EVERY DAYI AM WAKING UP IN 5:40 AM EVERY DAYI AM WAKING UP IN 5:40 AM EVERY DAYI AM WAKING UP IN 5:40 AM EVERY DAYI AM WAKING UP IN 5:40 AM EVERY DAYI AM WAKING UP IN 5:40 AM EVERY DAYI AM WAKING UP IN 5:40 AM EVERY DAYI AM WAKING UP IN 5:40 AM EVERY DAYI AM WAKING UP IN 5:40 AM EVERY DAYI AM WAKING UP IN 5:40 AM EVERY DAYI AM WAKING UP IN 5:40 AM EVERY DAYI AM WAKING UP IN 5:40 AM EVERY DAYI AM WAKING UP IN 5:40 AM EVERY DAYI AM WAKING UP IN 5:40 AM EVERY DAYI AM WAKING UP IN 5:40 AM EVERY DAYI AM WAKING UP IN 5:40 AM EVERY DAYI AM WAKING UP IN 5:40 AM EVERY DAYI AM WAKING UP IN 5:40 AM EVERY DAYI AM WAKING UP IN 5:40 AM EVERY DAYI AM WAKING UP IN 5:40 AM EVERY DAYI AM WAKING UP IN 5:40 AM EVERY DAYI AM WAKING UP IN 5:40 AM EVERY DAY',
    ],

    [
        'id' => 8,
        'title' => "Try it Always",
        'subscription' => 'The world is a book, and those who do not travel read only the page.',
        'image' => 'static/images/index/p8.png', 
        'post_text' => 'THERE IS ALWAYS A CHOICETHERE IS ALWAYS A CHOICETHERE IS ALWAYS A CHOICETHERE IS ALWAYS A CHOICETHERE IS ALWAYS A CHOICETHERE IS ALWAYS A CHOICETHERE IS ALWAYS A CHOICETHERE IS ALWAYS A CHOICETHERE IS ALWAYS A CHOICETHERE IS ALWAYS A CHOICETHERE IS ALWAYS A CHOICETHERE IS ALWAYS A CHOICETHERE IS ALWAYS A CHOICETHERE IS ALWAYS A CHOICETHERE IS ALWAYS A CHOICETHERE IS ALWAYS A CHOICETHERE IS ALWAYS A CHOICETHERE IS ALWAYS A CHOICETHERE IS ALWAYS A CHOICETHERE IS ALWAYS A CHOICETHERE IS ALWAYS A CHOICETHERE IS ALWAYS A CHOICETHERE IS ALWAYS A CHOICETHERE IS ALWAYS A CHOICETHERE IS ALWAYS A CHOICETHERE IS ALWAYS A CHOICETHERE IS ALWAYS A CHOICETHERE IS ALWAYS A CHOICETHERE IS ALWAYS A CHOICETHERE IS ALWAYS A CHOICE',
    ]
];

$links = ['home', 'categories', 'about', 'contact'];

?>

<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewsport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="static/style/style.css">
        <title><?= $posts[$post_id - 1]['title'] ?></title>

        <style>
            @import url('https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap');
            @import url('https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Oxygen:wght@300;400;700&display=swap');
            @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
        </style>   
    </head>

    <body>
        <!-- Верхние кнопки выхода -->
        <header class="tra_header">
            <h3 class="tra_header__text">Escape.</h3>

            <ul class="tra_header__tra_menu tra_menu">
                <?php
                    foreach ($links as $link) {
                        include 'other_links/post/header_links.php';
                    }
                ?>
            </ul>
        </header>

        <!-- Контент сайта -->
        <section class="tra_content">
            <!-- Заголовок -->
            <section class="tra_content__upper_text upper_text">
                <h1 class="upper_text__header"><?= $posts[$post_id - 1]['title'] ?></h1>
                <p class="upper_text__underheader"><?= $posts[$post_id - 1]['subscription'] ?></p>
            </section>

            <img class="tra_content__image" src=<?= $posts[$post_id - 1]['image'] ?> alt="">

            <!-- Текст -->
            <p class="tra_content__information"><?= $posts[$post_id - 1]['post_text'] ?></p>
        </section>
        
        <!-- Нижняя часть сайта -->
        <footer class="site_footer">
            <!-- Блок "Stay in touch" -->
            <article class="site_footer__sit sit">
                <h3 class="sit__text">Stay in Touch</h3>

                <div class="sit__console_log console_log">
                    <input id="email" name="console_log" placeholder="Enter your email" class="console_log__console">
                    <button class="console_log__button" onclick="alert()">Submit</button>
                </div>
            </article>

            <!-- Нижние кнопки выхода -->
            <article class="site_footer__exit_buttons exit_buttons">
                <h3 class="exit_buttons__footer_text">Escape.</h3>

                <ul class="exit_buttons__nav_menu nav_menu">
                    <?php
                        foreach ($links as $link) {
                            include 'other_links/post/footer_links.php';
                        }
                    ?>
                </ul>
            </article>
        </footer>
    </body>
</html>