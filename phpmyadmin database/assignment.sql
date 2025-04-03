-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 14, 2021 at 10:06 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assignment`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

DROP TABLE IF EXISTS `book`;
CREATE TABLE IF NOT EXISTS `book` (
  `book_ID` int(11) NOT NULL AUTO_INCREMENT,
  `book_name` varchar(255) NOT NULL,
  `author` varchar(100) NOT NULL,
  `category` varchar(255) NOT NULL,
  `price` varchar(50) NOT NULL,
  `quantity` int(11) NOT NULL,
  `describtion` text NOT NULL,
  `book_image` varchar(255) NOT NULL,
  PRIMARY KEY (`book_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=73 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`book_ID`, `book_name`, `author`, `category`, `price`, `quantity`, `describtion`, `book_image`) VALUES
(14, 'Fragments of Horror', 'Ito, Junji', 'Horror', '43', 32, 'A new collection of delightfully macabre tales from a master of horror manga.\r\n\r\nAn old wooden mansion that turns on its inhabitants. A dissection class with a most unusual subject. A funeral where the dead are definitely not laid to rest. Ranging from the terrifying to the comedic, from the erotic to the loathsome.', 'Fragments of Horror.jpg'),
(12, 'Lovecraft Tales of Horror', 'Lovecraft', 'Horror', '79', 10, 'Let your imagination sink deep into more than a dozen classic tales of dark horror by an early master of the genre.\r\n\r\nThe stories of H. P. Lovecraft have been a source of fascination for readers since they were published in the early twentieth century, and legions of fans continue to reinvent his dark and fantastical world to this day.', 'Lovecraft Tales of Horror.jpg'),
(16, 'Classic Tales of Horror', 'Hilbert, Ernest ', 'Horror', '65', 21, 'Spine-tingling tales that will keep you on the edge of your seat!\r\nThis chilling collection of scary stories will keep you awake for hours! Psychological horrors, disturbing dramas, and gruesome ghosts compose this compendium of confessions made in the dead of night. From vampires and a monkey paw to an unstoppable heart and haunting apparitions, anecdotes of supernatural terror will have you turning pages long past the witching hour.', 'Tales of Horror.jpg'),
(17, 'Adult Coloring Book: Horror Land', 'Shah, A. M. ', 'Horror', '64', 23, 'Decompose, Destruct, Die a little as you sit back and tune out to color 40 hands made, custom, scary images from Horror Land. Take a stroll through the gates and see if you can make it back. Only 40 have ever dared to pass the 40/40 gates of Horror Land. None have returned. Will you?', 'Horror Land.jpg'),
(18, 'Dark Art: A Horror Coloring Book', 'Gautier, FranÃ§ois', 'Horror', '39', 23, 'Calling all coloring and horror fans Step into the beautiful, macabre world of Fran ois Gautier in this intricate, detailed, and genuinely frightening coloring book.', 'Dark Art.jpg'),
(19, 'The Amityville Horror', 'Anson, Jay', 'Horror', '66', 32, 'The classic and terrifying story of one of the most famous supernatural events--the infamous possessed house on Long Island from which the Lutz family fled in 1975. ...\"A fascinating and frightening book\" (Los Angeles Times)--the bestselling true story about a house possessed by evil spirits, haunted by psychic phenomena almost too terrible to describe.', 'The Amityville Horror.jpg'),
(20, 'An Illustrated History', 'Jones, Stephen', 'Horror', '56', 17, 'This magnificent companion to The Art of Horror, from the same creative team behind that award-winning illustrated volume, looks at the entire history of the horror film, from the silent era right up to the latest releases and trends.', 'The Art of Horror.jpg'),
(21, 'Some Will Not Sleep', 'Nevill, Adam', 'Horror', '67', 21, 'A bestial face appears at windows in the night.\r\nIn the big white house on the hill angels are said to appear.\r\nA forgotten tenant in an isolated building becomes addicted to milk.\r\nA strange goddess is worshipped by a home-invading disciple.\r\nThe least remembered gods still haunt the oldest forests.', 'Some Will Not Sleep.jpg'),
(22, 'Classic Horror Tales', 'Editors of Canterbury Classics', 'Horror', '74', 25, 'Curl up with this collection of classic scary stories from the masters of the genre.\r\n\r\nWith dozens of stories of the macabre, fantastic, and supernatural, Classic Horror Tales is sure to keep readers on the edges of their seats. This collection of works by classic writers spans more than a century--from 19th-century trailblazers such as John William Polidori, Nathaniel Hawthorne, and Washington Irving to 20th-century masters like Saki, Edith Wharton, and Franz Kafka.', 'Classic Horror Tales.jpg'),
(25, 'Hank the Cowdog', 'Erickson, John R. Holmes, Gerald L.', 'Adventure', '39', 21, 'The popular Hank the Cowdog series is based on the humorous antics of the canine Head of Ranch Security. In this first book, Hank and his little buddy, Drover, set out to solve a series of baffling murders on the ranch. Is Hank a suspect? An Outlaw? Can he clear his good name? Glory, danger, and sacrifice are all in a day.\r\n', 'Hank the Cowdog.jpg'),
(26, 'The Crystal Kingdom', 'Pietsch, Carey', 'Adventure', '41', 19, 'A desperate call for help interrupts holiday celebrations at the Bureau of Balance, and sends Taako, Magnus and Merle on a high-stakes mission to find and Reclaim a fourth deadly relic: a powerful transmutation stone, hidden somewhere in the depths of a floating arcane laboratory\r\n', 'The Crystal Kingdom.jpg'),
(27, 'Adventures in the Culinary Underbelly', 'Bourdain, Anthony', 'Adventure', '64', 13, 'A deliciously funny, delectably shocking banquet of wild-but-true tales of life in the culinary trade from Chef Anthony Bourdain, laying out his more than a quarter-century of drugs, sex, and haute cuisine--now with all-new, never-before-published material', 'Adventures in the Culinary Underbelly.jpg'),
(28, 'Phantom Blood', 'Araki, Hirohiko ', 'Adventure', '90', 9, ' A multigenerational tale of the heroic Joestar family and their never-ending battle against evil!', 'Phantom Blood.jpg'),
(29, 'Pokemon Adventures', 'Kusaka, Hidenori', 'Adventure', '47', 22, 'All your favorite Pokemon game characters jump out of the screen into the pages of this action-packed manga', 'Pokemon Adventures.jpg'),
(30, 'Rowley Jefferson Adventure', 'Kinney, Jeff', 'Adventure', '29', 11, 'From the imagination of Rowley Jefferson comes an adventure of epic proportions. Join Roland and his best friend, Garg the Barbarian, as they leave the safety of their village and embark on a quest to save Roland\'s mom from the White Warlock. ', 'Rowley Jefferson.jpg'),
(31, 'The Wild Beyond the Witchlight', 'Wizards RPG Team', 'Adventure', '71', 13, 'A wickedly whimsical adventure for the world\'s greatest roleplaying game.\r\n\r\nOnce every eight years, the fantastic Witchlight Carnival touches down on your world, bringing joy to one settlement after the next. Its owners, Mister Witch and Mister Light, know how to put on a good show. But there\'s more to this magical extravaganza than meets the eye!', 'The Wild Beyond the Witchlight.jpg'),
(32, 'Star Wars: The High Republic Adventures, Vol. 1', 'Older, Daniel Jose Tolibao, Harvey', 'Adventure', '57', 9, 'In the days of the High Republic, the Jedi are at the height of their power. But the emergence of the piratical, anarchic Nihil proves that even the most successful peace is fragile, and the Jedi\'s influence is neither as pervasive nor as benevolent as they would believe.', 'The High Republic Adventures.jpg'),
(33, 'Legend of the Star Runner', 'Wagner, J. I.', 'Adventure', '69', 13, 'Grandpa is in deep trouble. Following the clues concealed within a centuries-old family legacy, Timmi Tobbson and his friends hope to save the day. But only twenty-four hours remain to unravel the legend of a long-lost pirate ship, buried somewhere deep beneath the city streets....The reader is the hero]] Each chapter ending features', 'Legend of the Star Runner.jpg'),
(34, 'Dungeons & Dragons Starter Set', 'Wizards RPG Team', 'Adventure', '65', 20, 'Dungeons & Dragons is the world\'s greatest roleplaying game. Created in 1974, D&D transformed gaming culture by blending traditional fantasy with miniatures and wargaming. The main Dungeons & Dragons books are the Player\'s Handbook, Monster Manual, and Dungeon Master\'s Guide.', 'Dungeons & Dragons Starter Set.jpg'),
(36, 'Let\'s Make Dumplings!', 'Amano, Hugh', 'Comic', '101', 5, 'Chef Hugh Amano and comics artist Sarah Becan invite you to explore the big little world of Asian dumplings! Ideal for both newbies and seasoned cooks, this comic book cookbook takes a fun approach to a classic treat that is imbued with history across countless regions. From wontons to potstickers, buuz to momos, Amano\'s expert guidance paired with Becan\'s colorful and detailed artwork prove that intricate folding styles and flavorful fillings are achievable in the home kitchen.', 'Let\'s Make Dumplings!.jpg'),
(37, 'In Love & Pajamas', 'Chetwynd, Catana', 'Comic', '66', 20, 'When you\'ve reached that sweatpants-wearing cozy place in your relationship, it\'s all In Love & Pajamas This brand-new collection of Catana Comics presents 50 percent never-before-seen comics and some fan favorites that delight and amuse readers of all ages. Wholesome, sweet, feel-good humor, a perfect gift for your other half and a welcome add-on to any wedding, anniversary, or Valentine\'s Day gift.', 'In Love & Pajamas.jpg'),
(38, 'Guide to Creating Comics in 3-D', 'Howard, Kate', 'Comic', '51', 13, 'George and Harold know a LOT about making comic books. (Remember their Captain Underpants comics?) But before they told you that story, first they told you the story of Dog Man -- part dog, part man, and all cop Want to know how George and Harold come up with hilarious heroes like Dog Man and Li\'l Petey and Chief?', 'Guide to Creating Comics in 3-D.jpg'),
(39, 'What\'s Up, Beanie?', 'Tysoe, Alina', 'Comic', '74', 11, 'Hilariously eccentric and self-aware, Alina Tysoe, the pink-haired illustrator behind the wildly popular What\'s Up, Beanie?, captures relatable topics like family, the awkward pains of social anxiety, sweet moments of love and a growing relationship, amusing childhood stories, and her intense love of dogs. ', 'What\'s Up, Beanie.jpg'),
(40, 'Pizza and Taco', 'Shaskan, Stephen', 'Comic', '41', 14, 'When you love comics like Pizza and Taco do, the next step after reading them is to collaborate on one But what happens when they run up against artistic differences? Who gets to have the bigger muscles and the more rad superpowers? Can these two strong-willed foodstuffs compromise and make a comic that is more awesome than the sum of its parts?\r\n\r\n', 'Pizza and Taco.jpg'),
(41, 'Marvel-Verse: Loki', 'Marvel Comics', 'Comic', '66', 23, 'He\'s the most deceptive deity in the Marvel-Verse -- whether he\'s playing the villain, the hero or just an agent of chaos He\'s Loki -- and these are some of his legendary stories In an all-time classic, Loki pits his brother Thor against the Silver Surfer for a cosmic battle royale Then, take a fresh view of the founding of the accursed Avengers, through the eyes of the God of Lies responsible for assembling them On the trail of a sinister sorceress, Loki finds an unlikely ally in none other than Spider-Man -- and ends up in the webslinger\'s debt And when the rejuvenated Trickster turns over a new leaf, Kid Loki will learn exactly what his fellow Asgardians think of him', 'Marvel-Verse Loki.jpg'),
(42, 'Darth Vader and Son', 'Brown, Jeffrey', 'Comic', '54', 64, 'A hilarious re-imagining of what it would be like if Darth Vader had taken an active role in raising his son Luke, with a refreshing twist and illustrations. Life lessons include lightsaber batting practice, using the Force to raid the cookie jar, and more. ...What if Darth Vader took an active role in raising his son? What if Luke, I am your father was just a stern admonishment from an annoyed dad?', 'Darth Vader and Son.jpg'),
(43, 'Crack-Up Comics Collection', 'Vannotes', 'Comic', '37', 21, 'This collection of vintage 1930s-1940s Bendy comic strips is a must-have for those wanting to peek into the silly, scary world of Bendy and his friends!', 'Crack-Up Comics Collection.jpg'),
(44, 'Howl\'s Moving Castle Film Comic', 'Miyazaki, Hayao', 'Comic', '123', 24, 'Accosted by the infamous Witch of the Waste, Sophie finds herself cursed and turned into a creaky old woman. She finds herself taking shelter in the moving castle of the dreaded wizard, Howl, who is rumored to eat women\'s hearts. 176. ...Sophie thinks of herself as plain and boring, especially compared to her vivacious younger sister Lettie. Sophie expects to spend the rest of her life quietly making hats in the back room of her family\'s shop, but as her country prepares for war, she is forced to set out on an extraordinary adventure', 'Howl\'s Moving Castle Film Comic.jpg'),
(45, 'The Art Of War', 'SUN TZU', 'Classic', '89', 20, 'Art Of War Is Written By A Man Called Sun Bin, Who Was Also Known As Sunzi. It Is An Unusual Book That Was Written 2500 Years Ago In An Impenetrable Classical Language And Yet Figures On The Recommended Reading List Of The United States Marine Corps.', 'Sun Tzu.jpg'),
(46, 'Winnie-The-Pooh', ' Milne, A. A.', 'Classic', '51', 12, 'Since 1926, Winnie-the-Pooh and his friends--Piglet, Owl, Tigger, and the ever doleful Eeyore--have endured as the unforgettable creations of A.A. Milne, who wrote this book for his son, Christopher Robin, and Ernest H. Shepard, who lovingly gave Pooh and his companions shape.\r\n\r\nThese characters and their stories are timeless treasures of childhood that continue to speak to all of us with the kind of freshness and heart that distinguishes true storytelling.', 'Winnie-The-Pooh.jpg'),
(47, 'The Art of Mixology', 'Parragon Books', 'Classic', '31', 13, 'Become your own bartender and create new, delicious concoctions at home with this collection of artisan cocktail recipes. In addition to craft drinks and techniques, this book also covers traditional mixology methods and features classic cocktails that never go out of styles, such as the Mai Tai, Marilyn Monroe, and Zombie. Are you craving a cocktail but not the alcohol? Try your hand at making mock-tails with recipes for the Ginger Fizz, Long Boat, Sober Sunday, or Cranberry Energizer. Let the cocktail hour commence with more than 200 recipes to choose from!', 'The Art of Mixology.jpg'),
(48, 'The Nightmare Before Christmas', 'Golden Books', 'Classic', '41', 14, 'Tim Burton\'s classic film The Nightmare Before Christmas-retold for the first time as a Little Golden Book\r\n\r\nJack Skellington is the King of Halloween Town... but after so many years of the same spooky thing, he\'s become bored of scaring. When Jack accidentally discovers Christmas Town, he hatches a crazy scheme to take over a new holiday for the year. But can the master of monstrous scares spread Christmas cheer like jolly old Saint Nick? And what will Halloween Town\'s power-hungry Oogie Boogie do when he discovers Jack\'s plan?', 'The Nightmare before Christmas.jpg'),
(49, 'The Haunted Mansion', 'Clauss, Lauren', 'Classic', '51', 24, 'It\'s easy to get into the Haunted Mansion... but can you find your way out? Join the Ghost Host and search your way through all the creep-tastic rooms of Disney Parks\' Haunted Mansion-from the ominous S ance Room, to the ghoulish party in Grand Hall, to the attic that holds many scary secrets.', 'The Haunted Mansion.jpg'),
(50, 'Treasury of Greek Mythology', 'Napoli, Donna', 'Classic', '134', 21, 'School Library Journal Best Books of 2011Eureka! Silver Honor Books--California Reading AssociationCapitol Choices 2012 list of Noteworthy Titles for Children and Teens2012 Notable Children\'s Books--ALSCThe new National Geographic Treasury of Greek Mythology offers timeless stories of Greek myths in a beautiful new volume. Brought to life with lyrical text by award-winning author Donna Jo Napoli and stunning artwork by award-winning illustrator Christina Balit, the tales of gods and goddesses such as Zeus, Aphrodite, Apollo, and Athena', 'Treasury of Greek Mythology.jpg'),
(51, 'Classic Fairy Tales', 'Gustafson, Scott', 'Classic', '59', 10, 'A lavishly illustrated, enchanting collection of 10 of the best-loved fairy tales, chosen and edited by the artist, who spent more than four years creating the seventy-five oil paintings, reproduced here in full color. Belongs on every child\'s bookshelf.', 'Classic Fairy Tales.jpg'),
(52, 'Little Women', 'Louisa May', 'Classic', '46', 13, 'It\'s Christmas Eve In The March Household, But This Will Be A Christmas Like No Other: Their Father Is Away Fighting In The American Civil War And The March Sisters And Their Mother Must Try To Make Ends Meet While Their Father Is At War. Although Life Can Be Hard For The Family, And Times Are Tough, This Is An Extraordinary Story Of Triumph Over Adversity, Recounting In Exquisite Detail, The Lives, Loves, Trials, And Triumphs Of These Four Very Different Sisters. The Stories Of Jo, Beth, Amy, And Meg Have Charmed Readers Over Five Generations And Has Earned Its Place As A Classic Coming Of Age Novel.', 'Little Women.jpg'),
(53, 'The Little Prince', 'Antoine De', 'Classic', '27', 24, 'Antoine De Saint-ExupÃ©ry\'s The Little Prince Is An Endearing Tale Of Equal Appeal To The Young And The Grown-Ups. It Blends A Simple Story Of An Aviator Forced To Land In A Remote Desert And His Meeting A Small Boy, The Little Prince From Another Planet, With An Allegory Of Human Condition; Entertaining, Thought-Provoking And Mind-Triggering In The Process. The Beautiful Illustrations Drawn By The Author Are As Expressive As His Simple Language That Conveys Deeper Shades Of Philosophy.', 'The Little Prince.jpg'),
(54, 'Daughter of the Morning Star', ' Johnson, Craig', 'Mystery', '82', 10, 'When Lolo Long\'s niece Jaya begins receiving death threats, Tribal Police Chief Long calls on Absaroka County Sheriff Walt Longmire along with Henry Standing Bear as lethal backup. Jaya Longshot Long is the phenom of the Lame Deer Lady Stars High School basketball team and is following in the steps of her older sister, who disappeared a year previously, a victim of the scourge of missing Native Woman in Indian Country. Lolo hopes that having Longmire involved might draw some public attention to the girl\'s plight, but with this maneuver she also inadvertently places the good sheriff in a one-on-one with the deadliest adversary he has ever faced in both this world and the next.', 'Daughter of the Morning Star.jpg'),
(55, 'The Man Who Died Twice', 'Osman, Richard', 'Mystery', '51', 10, 'An unexpected visitor--an old pal of Elizabeth\'s (or perhaps more than just a pal?)--arrives, desperate for her help. He has been accused of stealing diamonds worth millions from the wrong men and he\'s seriously on the lam.\r\nThen, as night follows day, the first body is found. But not the last. Elizabeth, Joyce, Ron and Ibrahim are up against a ruthless murderer who wouldn\'t bat an eyelid at knocking off four septuagenarians. Can our four friends catch the killer before the killer catches them? And if they find the diamonds, too? Well, wouldn\'t that be a bonus? You should never put anything beyond the Thursday Murder Club.', 'The Man Who Died Twice.jpg'),
(56, 'The Advent Mystery of New Beginnings', 'Boss, Gayle', 'Mystery', '36', 20, 'Open a window each day of Advent onto the natural world. Here are twenty-five fresh images of the foundational truth that lies beneath and within the Christ story. In twenty-five portraits depicting how wild animals of the northern hemisphere ingeniously adapt when darkness and cold descend, we see and hear as if for the first time the ancient wisdom of Advent: The dark is not an end but the way a new beginning comes.', 'The Advent Mystery of New Beginnings.jpg'),
(57, 'Truly Devious', 'Johnson, Maureen', 'Mystery', '79', 10, 'The first in a series by the New York Times-bestselling author of 13 Little Blue Envelopes featuring a sharp, funny young detective who begins school at an elite, yet peculiar, boarding school and finds herself entangled in a suspenseful murder mystery.', 'Truly Devious.jpg'),
(58, 'Down the Hatch', 'Green, R. W.', 'Mystery', '64', 10, 'Local gossip points to the Swinburns themselves as the killers, spurred by a feud at the club where they, as well as the Admiral, were members. Distraught at this accusation, they turn to Agatha to clear their name, and she takes the case--despite the warnings of Chief Inspector Wilkes.\r\nAgatha encounters one suspicious character after another, becoming further enmeshed in the Admiral\'s own dark and shady past. And when she\'s run off the road, narrowly escaping with her life, and then another attack occurs, it becomes clear that someone doesn\'t want the case closed--and will stop at nothing to prevent Agatha from solving it.', 'Down the Hatch.jpg'),
(59, 'Claws for Alarm', 'Brown, Rita Mae ', 'Mystery', '37', 12, 'Pharamond Fair Haristeen is known throughout Crozet, Virginia, as a good horse vet and a better man. So when Benjamin Wagner, a new vet in town, is found dead in his unopened clinic, local police turn to Fair for help getting to the bottom of things. Fair quickly realizes Ben\'s clinic has been robbed of ketamine, used by doctors as a horse tranquilizer but also a popular recreational drug. Then Fair\'s own ketamine goes missing from the back of his truck. Was Ben killed for his supply? Or was he mixed up in something bigger', 'Claws for Alarm.jpg'),
(60, 'Finlay Donovan Is Killing It', 'Cosimano, Elle', 'Mystery', '51', 21, 'When Finlay is overheard discussing the plot of her new suspense novel with her agent over lunch, she\'s mistaken for a contract killer, and inadvertently accepts an offer to dispose of a problem husband in order to make ends meet . . . Soon, Finlay discovers that crime in real life is a lot more difficult than its fictional counterpart, as she becomes tangled in a real-life murder investigation.', 'Finlay Donovan Is Killing It.jpg'),
(61, 'If She Knew', 'Pierce, Blake', 'Mystery', '71', 10, 'A MASTERPIECE OF THRILLER AND MYSTERY. Blake Pierce did a magnificent job developing characters with a psychological side so well described that we feel inside their minds, follow their fears and cheer for their success. Full of twists, this book will keep you awake until the turn of the last page.', 'If She Knew.jpg'),
(62, 'The Twelve Jays of Christmas', 'Andrews, Donna ', 'Mystery', '47', 10, 'Meg and Michael\'s annual holiday celebration is well underway, with a throng of out-of-town relatives staying at their house. Hosting these festivities is a little harder than usual--they have to relocate all the events normally held in their library, currently occupied by Roderick Castlemayne, the irascible wildlife artist who\'s creating twelve paintings of birds to illustrate Meg\'s grandfather\'s latest nature book.', 'The Twelve Jays of Christmas.jpg'),
(63, 'Romantic Country', 'Eriy', 'Fantasy', '51', 10, 'Magnificent rural villages, prairies, forests, lakeside scenery and a beautiful towering castle await you and your colored pencils in Romantic Country: A Coloring Book by Japanese illustrator Eriy, who uses an ink-dipped toothpick to draw each intricate design. Inside are pages and pages of provincial delights for you to bring to life through coloring: delectable French pastries, magical forests filled with wildlife, charming town squares bustling with people-and so much more, sure to delight people of all ages.', 'Romantic Country.jpg'),
(64, 'Final Fantasy XIV', 'Square Enix', 'Fantasy', '67', 20, 'Covering content through the end of the Shadowbringers expansion, this deluxe, large-format book showcases artwork for YoRHa: Dark Apocalypse, Eden\'s Verse & Eden\'s Promise, Save the Queen, and much more. The Art of Reflection -Histories Unwritten- also includes detailed illustrations of characters, equipment, dungeons and trials, as well as messages from the artists. Volume two of a two-volume set with The Art of Reflection -Histories Forsaken-.', 'Final Fantasy XIV.jpg'),
(65, 'The Amazing Voyage', 'Stilton, Geronimo', 'Fantasy', '61', 10, 'Geronimo returns to the Kingdom of Fantasy and joins the effort to rescue Blossom, Queen of the Fairies, who has been kidnapped by the Queen of the Witches and taken to the Kingdom of Nightmares. Full color. ...Holey cheese Join Geronimo as he returns to the Kingdom of Fantasy for a third amazing adventure', 'The Amazing Voyage.jpg'),
(66, 'The Hobbit', 'Dixon, Chuck', 'Fantasy', '84', 20, 'When Thorin Oakenshield and his band of dwarves embark upon a dangerous quest to reclaim the hoard of gold stolen from them by the evil dragon Smaug, Gandalf the wizard suggests an unlikely accomplice: Bilbo Baggins, an unassuming Hobbit dwelling in peaceful Hobbiton.\r\n\r\nAlong the way, the company faces trolls, goblins, giant spiders, and worse. But as they journey from the wonders of Rivendell to the terrors of Mirkwood and beyond, Bilbo will find that there is more to him than anyone--himself included--ever dreamed. Unexpected qualities of courage and cunning, and a love of adventure, propel Bilbo toward his great destiny . . . a destiny that waits in the dark caverns beneath the Misty Mountains, where a twisted creature known as Gollum jealously guards a precious magic ring.', 'The Hobbit.jpg'),
(67, 'The Keepers of the Empire', 'Stilton, Geronimo', 'Fantasy', '73', 10, 'Fairies, dragons, wizards, and more await Geronimo on every magical Kingdom of Fantasy adventure\r\n\r\nThe Rebel Empress has regained her crown. But not everything has gone according to plan: The Army of the Invisible is still a serious threat. Geronimo and his team set out to save the Kingdom of Fantasy, again', 'The Keepers of the Empire.jpg'),
(68, 'Heavensward ', 'Square Enix', 'Fantasy', '79', 15, 'A treat for collectors and fans of Final Fantasy XIV, this high-quality, large-format art book presents a rich collection of illustrations and concept artwork for characters, environments, accessories, and more. Covering content through the end of the Heavensward expansion, this volume also includes comments from the art team and a look at the processes that the team uses when creating art pieces. Book two of a two-book set with The Art of Ishgard: Stone and Steel.', 'Heavensward.jpg'),
(69, 'The Quest for Paradise', 'Stilton, Geronimo', 'Fantasy', '72', 19, 'The Queen of the Fairies invites Geronimo back to her fantastical world to help in the quest for the true heart of happiness. This time Geronimo rides on the wings of a rainbow-colored dragon as he makes his way through seven fantastic lands. Full color. ...Holey cheese Join Geronimo as he returns to the Kingdom of Fantasy in this sequel to the very first Geronimo Stilton hardcover adventure', 'The Quest for Paradise.jpg'),
(70, 'Shadowbringers', 'Enix, Square', 'Fantasy', '68', 14, 'Delve into the breathtaking world of Final Fantasy XIV: Shadowbringers in this deluxe volume featuring hundreds of beautiful illustrations of characters, environments, equipment, and more. Offering concept art, reference images, and messages from the artists, this book is a must-have not only for fans of the game but for any who appreciate top-tier game art.', 'Shadowbringers.jpg'),
(71, 'Fantasy Mapmaker', 'Blando, Jared', 'Fantasy', '29', 10, 'Create authentic-looking maps of fantasy cities, hamlets, fortifications, and more in a popular tabletop, RPG style. More than 30 step-by-step demonstrations show how to draw fantasy cities, medieval settlements, and more from a professional gaming illustrator. ...Create authentic-looking maps of fantasy cities, hamlets, fortifications and more in a popular tabletop, RPG style.', 'Fantasy Mapmaker.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `cartid` int(11) NOT NULL AUTO_INCREMENT,
  `memberid` int(11) NOT NULL,
  `bookid` int(11) NOT NULL,
  `cquantity` int(11) NOT NULL,
  `totalprice` int(11) NOT NULL,
  PRIMARY KEY (`cartid`)
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `memberorder`
--

DROP TABLE IF EXISTS `memberorder`;
CREATE TABLE IF NOT EXISTS `memberorder` (
  `orderid` int(11) NOT NULL AUTO_INCREMENT,
  `memberid` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `cartid` int(11) NOT NULL,
  PRIMARY KEY (`orderid`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `memberorder`
--

INSERT INTO `memberorder` (`orderid`, `memberid`, `amount`, `cartid`) VALUES
(34, 1, 121, 43),
(33, 1, 78, 42),
(29, 1, 39, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `memberID` int(11) NOT NULL AUTO_INCREMENT,
  `member_name` varchar(255) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone_number` varchar(50) NOT NULL,
  `address` text NOT NULL,
  PRIMARY KEY (`memberID`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`memberID`, `member_name`, `gender`, `email_address`, `password`, `phone_number`, `address`) VALUES
(1, 'Ooi Zhen Zhi', 'Male', 'tp060844@gmail.com', '1234', '012243565', '10, jalan tanjung, bandar bangsai,41240,Kuala Lumpur.'),
(21, 'Soong Jia Yang', 'Male', 'jiayangsoong@GMAIL.COM', 'Seremban2', '0129013638', 'No.10, Jalan BK9/5K, Bandar Kinrara');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
