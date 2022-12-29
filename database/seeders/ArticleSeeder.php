<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::create([
            'user_id' => '1',
            'title' => 'Makima\'s Role in Chainsawman',
            'content' => "
                Makima is the main antagonist of Chainsaw Man Part 1: Public Safety.
                She serves as the overarching antagonist of the Gun Devil Arc, where
                she reveals her true nature and also the titular main antagonist of
                the Control Devil Arc, the final arc of Part 1.

                She is the leader of the Public Safety Devil Hunter organization who
                takes Denji under her wing, giving him a happy life compared to the
                suffering that he endured during his childhood days. Initially acting
                as a helpful ally, she is later revealed to be a powerful and omniscient
                devil as old as the history of humanity known as the Control Devil who was
                feared by human beings for several centuries and several other nations,
                including the United States.

                She then proclaims herself to be an admirer of the Chainsaw Man, the
                entity that was sealed in Denji's body, and plans to either be devoured by
                him or use his powers to eradicate all of the devils that have plagued humanity
                for years in order to bring a better world for humanity, fulfilling the hopes of
                her contractor, the Japanese Prime Minister.

                After her death, the Control Devil was reincarnated in the form of a child named
                Nayuta. Having no recollection of her previous life as Makima, she was given to be
                raised by Denji to ensure she lives a better life and not end up like Makima once more.
            ",
            'picture' => "images/articles/makima.jpg",
        ]);

        Article::create([
            'user_id' => '1',
            'title' => 'Airing of Chainsawman',
            'content' => "
            Chainsaw Man hit bookstore shelves in 2018 and immediately caught the attention
            of readers around the world. The violence, bloodshed, and subversions of shonen
            tropes captivated readers, and in 2021, the series became the 7th best-selling
            manga series that year. As of June 2022, the series sold over 13-million copies
            worldwide, and that number is expected to rise once the anime adaptation begins.
            Despite the first part of the story reaching its conclusion, Chainsaw Man's popularity
            and reception amongst audiences has made it an instant classic.

            After concluding his first serialized manga series, Fire Punch, in January 2018,
            Tatsuki Fujimoto was back at work to deliver another exhilarating series for his
            audience. Much like Fire Punch, Chainsaw Man presents itself as a dark fantasy
            packed with violent action and dark comedy. Fans of the series were quick to discover
            that what laid dormant beyond the continuous action was a bittersweet narrative,
            where the true pulse of its power took the spotlight. Chainsaw Man won the Best Shōnen
            Manga award at the 66th Shogakukan Manga Awards and the 27th at Manga Barcelona, as
            well as Best Manga at the Harvey Awards in 2021.

            The story of Chainsaw Man follows a young man named Denji who is tasked with paying
            off his father's debt to the yakuza by working as a Devil Hunter. Those with the
            title of Devil Hunter seek out, hunt, and exterminate devils that wreak havoc on Earth.
            Denji is soon betrayed by his yakuza employers, and in order to save his life, his
            companion Pochita merges with Denji, becoming his heart and turning him into the
            eponymous Chainsaw Man.

            Denji soon becomes wrapped up with Makima, a high-ranking public service Devil Hunter,
            taking on dangerous jobs to wipe out Devils that threaten the safety of Japan. He quickly
            becomes acquainted with fellow Devil Hunters, and even Devils themselves, changing his
            once very simple life forever. In time, Denji begins to discover that all is not quite
            what it seems.

            Chainsaw Man has thus far been collected into eleven volumes, completing the \"Public Safety Arc\".
            Part 2 of the series, simply titled \"School Arc\" began serializing in July 2022. While little
            is known about how much the anime will adapt, Chainsaw Man is expected to be divided into two
            cours, with an estimated twenty-four episodes. This gives studio MAPPA ample opportunity to
            cover the first 52 chapters, leading to the conclusion of the Bomb Devil Arc Fans of Chainsaw
            Man are in for a treat with MAPPA producing the anime release, following their phenomenal work
            on beloved series such as Attack on Titan and Jujutsu Kaisen.",
            'picture' => "images/articles/chainsawman.png",
        ]);

        Article::create([
            'user_id' => '1',
            'title' => 'Joker\'s Psychology',
            'content' => "
                The Joker is a villain that both fascinates and terrifies us. His origin has remained relatively
                mysterious, sparking questions about how a “psycho killer” is created. Using real methods and theory,
                clinical expert Dr. Andrea Letamendi examines several portrayals of the Clown Prince of Crime, including
                Jack Nicholson in 1989’s Batman, Heath Ledger in The Dark Knight, and Mark Hamill in Batman: The
                Animated Series. Given the raised concerns causing tension to surround the new film, Joker (2019),
                considerations are given to the science behind behavioral threat assessment, case study, and occurrences
                of real events in an effort to responsibly inform the discourse.  The author wishes to note to readers that
                this collection of psychological profiles includes some references and descriptions of both real and
                fictional portrayals of mass violence, intimate partner abuse, and suicide. Just like the Joker, these
                conceptualizations are fictional and are not meant to diagnose any real person. This series is not intended
                as a substitute for the medical or mental health advice of psychiatrists or other clinical professionals.

                Arthur Fleck, played by Joaquin Phoenix in the solo origin story film Joker (2019) is an impoverished,
                scraggy middle-aged man who works as a party clown in the crime-riddled city of Gotham. Arthur is significantly
                underweight, his face sunken and pallid; and although he isn’t repulsive, his untidy, bizarre appearance is
                off-putting to others. Behaviorally, too, Arthur is odd. He is withdrawn and anti-social, but does not seem to
                be inherently callous or devious. In fact, Arthur is somewhat innocent and initially well-meaning toward others,
                especially children. Arthur lives with his mother, Penny, who he cares about deeply, but maintains no other strong,
                meaningful connections. His communication skills are generally poor; he may hold his gaze too long at someone,
                use abnormal body posturing or facial expressions, or miss important interpersonal cues, which cause others to
                be upset or discomforted around him. In his line of work as a cheap party clown, Arthur’s oddities are amplified.
                In many ways, Arthur is a product of interactionalsocialization; his peculiarities influence others to ostracize,
                bully, or avoid him, which in turn, lead him to isolate, grow weirder, and inevitably miss opportunities to improve
                his social skills.

                This Joker is not inherently provocative. In fact, when we’re introduced to him, Arthur has little insight in
                how he comes across to others. He’s generally aware that he is odd, but does not quite grasp the degree to
                which others find him unsettling. Quite the contrary, Arthur dreams of winning the adoration of others by
                becoming a successful stand-up comedian. He believes his purpose in life is to instill happiness in others—his
                overactive fantasies depict his mother as his number one support: “you were put on this earth to spread joy
                and laughter,” he imagines her saying to him adoringly. Arthur fantasizes of being in the spotlight, basking
                in the glow of show lights, approval, and applause. At times, he even closes his eyes and slowly dances to the
                sound of imaginary music; picturing himself as the center of attention, a popular figure like the famous
                talk-show host, Murray Franklin: visible, idolized, and respected. As he pantomimes the scene, Arthur envisions
                himself as charming, masculine, and dominant. Despite these uplifting dreams, Arthur’s actual life as a loner
                is monotonous, repetitive, unrewarding, and—much like the landscape of the Gotham City—hopelessly bleak.
            ",
            'picture' => "images/articles/joker.jpg",
        ]);

        Article::create([
            'user_id' => '1',
            'title' => 'Valorant is Coming to China',
            'content' => "
                The National Press and Publication Administration in China announced that Riot Games’ VALORANT
                will be available to play in the country, it was announced today. 

                VALORANT, alongside another five titles by Riot Games-owned Chinese conglomerate Tencent, was
                approved by the video game regulatory body, meaning that gamers in the country will finally have
                access to the game. 

                Until now, players had to use a virtual private network and connect to the Hong Kong servers to
                play the game. Despite the restrictions, plenty of professional teams flourished, such as EDward
                Gaming, which attended Champions earlier this year. 

                China’s video game market took a hit due to last August’s temporary suspension of video game
                licenses in the country. Even prior to the ban, the Chinese government implemented strict measures
                that limited the time young people could spend on video games. 

                The harsh restrictions have seen children spend less time on video games in China, with the research
                firm CNG alongside the China Game Industry Group Committee praising the measures taken, according to
                a November report by CNBC. 

                China is one of the major market players for video game companies, with Riot benefitting from the
                game’s 27 servers in China, which has allowed millions of players to access the title. The regulatory
                change means that players should now be able attain access to their own servers without having to
                utilize a virtual private network, but this remains in the air. 
            ",
            'picture' => "images/articles/valorant.jpg",
        ]);

        Article::factory(1)->hasComments(3)->create();
    }
}
