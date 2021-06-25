-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2021 at 11:10 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vadikastro`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'astro', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `astrologers`
--

CREATE TABLE `astrologers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(55) NOT NULL,
  `age` varchar(55) NOT NULL,
  `phone_no` varchar(55) NOT NULL,
  `alternate_no` varchar(55) NOT NULL,
  `dob` varchar(55) NOT NULL,
  `gender` varchar(55) NOT NULL,
  `experience` varchar(55) NOT NULL,
  `city` varchar(55) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pan_card_no` varchar(55) NOT NULL,
  `ac_no` varchar(55) NOT NULL,
  `ifsc_code` varchar(55) NOT NULL,
  `ac_name` varchar(55) NOT NULL,
  `category` varchar(255) NOT NULL,
  `short_bio` varchar(255) NOT NULL,
  `long_bio` text NOT NULL,
  `skills` varchar(255) NOT NULL,
  `language` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `id_proof` varchar(255) NOT NULL,
  `status` varchar(55) NOT NULL DEFAULT 'pending',
  `password` varchar(55) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `balance` varchar(55) NOT NULL DEFAULT '0',
  `report_charge` varchar(255) NOT NULL,
  `call_charge` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `astrologers`
--

INSERT INTO `astrologers` (`id`, `name`, `email`, `age`, `phone_no`, `alternate_no`, `dob`, `gender`, `experience`, `city`, `address`, `pan_card_no`, `ac_no`, `ifsc_code`, `ac_name`, `category`, `short_bio`, `long_bio`, `skills`, `language`, `photo`, `id_proof`, `status`, `password`, `date`, `balance`, `report_charge`, `call_charge`) VALUES
(2, 'Ashutosh shastri', '', '29', '07275215936', '8756666633', '1991-10-20', 'Male', '10 Years', 'Lucknow', 'B/299 Deen dayal pauram takrohi indira nagar Lucknow', 'CARPP1683F', '20136239343', 'Sbin018189', 'Tej Bahadur Pandey', 'Vaidik', 'We have good control by the grace of God in all the departments like palmistry, vastu scripture, horoscope, question horoscope etc.', 'I am from a Sarauparin Brahmin. Astrology work in my family is from the time of grandfather, through him I wished to learn astrology and I studied Shastri in Vedic astrology. ', 'All departments of astrology', 'Hindi', '', 'IMG-20210405-WA0000.jpg', 'active', '012Ashish@', '2021-04-05 08:31:49', '0', '10', ''),
(3, 'purnendra shekhar', '', '24', '8577944643', '8957973994', '1997-10-07', 'Male', '6 Years', 'akbarpur', 'vill-chaubey pur, post-madarbhari, dist-ambedkar nagar', 'NWFPS7325A', '10568100009291', 'BARB0BHITEX', 'bank of baroda', 'vedic,prashna,vasthu', 'purnendra shekhar is a renowned Astrologer with an experience of more than 6 years in the field of Astrology.', 'Purnendra shekhar is a renowned Astrologer with an experience of more than 6 years in the field of Astrology. He is an expert of Vedic Astrology and has been learning this divine science ever since his childhood. Throughout his Astrological journey, he has served a number of people and tried to understand how different planets work according to different life situations and what role these planets have in shaping the life of an individual. Working from the last 6 years, he has leant almost every genre of Astrology but mainly focused on Vedic Astrology as he believes that Vedic Astrology is the basic thing that everybody needs to understand in order to get their life on track. His approach is very simple and straightforward. he provides solutions completely based on your birth chart and will never include any personal opinions in his reports. Apart from this. if you have any queries related to your personal life such as marriage problems, relationship problems, health issues, legal matters etc he is always there to assist you.', 'I have good communition skil and problem solving approach and great knowledge of astrology', 'hindi', '', 'WhatsApp Image 2021-04-10 at 15.48.03.jpeg', 'active', 'Vipin@123', '2021-04-10 10:26:54', '0', '20', ''),
(4, 'Rajeev Kumar upadhyay', '', '34', '09452042210', '09452042210', '1989-10-11', 'Male', '5 Years', 'Lucknow', 'C-3881/2 rajajipuram, Rajaji puram', 'Acxpu6769r', '1856000100742983', 'Punb0185600', 'Punjab National Bank', 'Horoscope', 'Abc', 'Abc', 'Vaidic pujas', 'Hindi', '', 'IMG-20201014-WA0001.jpg', 'active', '411953', '2021-04-11 17:41:53', '0', 'Abc', ''),
(5, 'Pradeep Bhanot', '', '49', '7888933521', '9876473610', '1972-08-20', 'Male', '11 Years', 'Panchkula', '2011,sector  15', 'CYBPB2705G ', '6082500101004401', 'KARB0000608 ', 'Karnataka Bank Ltd ', 'Vedic ', 'Abc', 'Pradeep Bhanot is an intuitive and spiritually blessed practitioner of the sublime and ancient science of astrology and vastu shastra since the last 15years. He has predicted the course of events in the lives of many leading personalities and laypeople with equal devotion and dedication. An intense and insightful consulting session with Pradeep Bhanot can be life transforming. ', 'A', 'English  Hindi ', '', '20210226_193855.jpg', 'pending', 'prdp2020', '2021-04-12 18:02:36', '0', '1100', ''),
(8, 'Vivek Gupta', 'vivek@gmail.com', '28', '7485968575', '9685747478', '1998-07-01', 'Male', '4 Years', 'Lucknow', 'Naugarh Chandauli', 'BWSPG2878R', '32648421958', 'SBIN0003655', 'State Bank Of India', 'Astrologers', 'Im astrolger', 'Im just a player of code. That\'s enough to describe myself.', 'mern', 'english, hindi', 'upload/img17.jpg', 'upload/img26.jpg', 'pending', 'admin', '2021-06-10 23:03:30', '0', '50', '18'),
(9, 'fcghbjk', 'ghjk@fgh.rdtfgyjhk', '454', '234567890345', '234567834567', '2014-09-27', 'Female', '4 Years', 'rdfghjk', 'dfghj', 'fdghjk', 'fghjk', 'fghjk', 'fghjk', 'fghjkl', 'fghjkl', 'fghjk', 'fghjk', 'fghjk', 'upload/img41.jpg', 'upload/img81.jpg', 'pending', 'admin', '2021-06-10 23:09:47', '0', '99', '99');

-- --------------------------------------------------------

--
-- Table structure for table `astro_mall`
--

CREATE TABLE `astro_mall` (
  `id` int(11) NOT NULL,
  `cat_id` varchar(55) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `quantity` varchar(11) NOT NULL,
  `price` varchar(55) NOT NULL,
  `description` text NOT NULL,
  `status` varchar(55) NOT NULL DEFAULT 'active',
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `astro_mall`
--

INSERT INTO `astro_mall` (`id`, `cat_id`, `name`, `image`, `quantity`, `price`, `description`, `status`, `created_at`) VALUES
(2, '12', 'Evil Eye', 'upload/evil.png', '1', '599', '<p>Duration: 5 minutes on Video Call<br />\r\nDid you know that the evil eye is not only a superstitious belief but is supported scientifically via the thoughts of waves?</p>\r\n\r\n<p><strong>How is works?</strong></p>\r\n\r\n<p>How it works is that, when a person directs his or hers negative/evil thought waves onto another person, the victim&rsquo;s forthcoming life events are delayed or denied. These forthcoming can be in the form of misfortune, diseases or serious injuries. Worry not, as there are many remedies followed by cultures around the world to remove this negativity. It is known to many as the &lsquo;&rsquo;buri nazar&rsquo;&rsquo; or the &lsquo;&rsquo;drishti&rsquo;&rsquo;.</p>\r\n\r\n<p>When someone looks at someone else with affection, envy, jealousy, hate, rage, resentment, hatred, sadness, joy and sorrow, the feelings or thoughts that arise in their mind, it had a bad impact on the vibration of your mind and energy. Human beings have an aura all around them, and it is assumed that the aura is a human shield. When an evil eye affects the shield of energy it is called Nazar. An Individual effected by this, goes through a bad phase in life immediately after that. His career, relationship and everything in life tends to decline or doesn&rsquo;t see any progress. Our experts perform a remedy on video call and remove the evil eye effect and the normal life kicks in immediately.</p>\r\n\r\n<p><strong>Who needs Evil Eye?</strong></p>\r\n\r\n<p>Here are the common symptoms of Buri Nazar:<br />\r\nRise in restlessness<br />\r\nSudden sweating and negative thoughts<br />\r\nNot having control over speech<br />\r\nBlurring of vision<br />\r\nUsing abusive language<br />\r\nBabies crying a lot suddenly<br />\r\nSaliva dripping from the mouth<br />\r\nThoughts of committing suicide<br />\r\nFainting, manifestation of negative energy<br />\r\nEven thoughts about/of killing someone</p>\r\n', 'active', '2021-06-13 09:07:53'),
(3, '11', 'Natural Tiger Eye Orgone Pyramid Decorative Showpiece', 'upload/p1.jpeg', '1', '899', '<p>For Vastu Correction/Reiki Healing/Meditation/Wealth/Protection/Will Power/Creativity/Business/Stability/Success<br />\r\nNatural Crystal Stone Tiger Eye Orgonite / Orgone Pyramid Size 45-50 mm Approx. Charged By Reiki Grand Master &amp; Vastu Expert<br />\r\nNatural Healing Stone / Crystal - small holes, crack marks on the surface or inside the stones are often visible<br />\r\nMaterial : Natural Healing Stones See Images &amp; Product Description For Healing Properties/Advantages<br />\r\n100% Authentic, Original and Natural Healing Stone / Crystal - small holes, crack marks on the surface or inside the stones are often visible<br />\r\nCan be used for Reiki Healing, Feng Shui, Vastu, Crystal Healing, Meditation, Vastu correction, Reiki Grid and Aura Cleaning,</p>\r\n', 'active', '2021-06-13 09:08:47'),
(4, '11', 'Natural 5 Mukhi Rudraksha Orgone Pyramid Decorative Showpiece', 'upload/p2.jpeg', '1', '899', '<p>It is the most Strong and powerful pyramid in crystal orgone<br />\r\nNatural Mind Body Soul Stone Pyramid - Length 45-50 mm - Width 45-50 mm Approx Natural Mind Body Soul Healing Stone / Crystal - small holes, crack marks on the surface or inside the stones are often visible<br />\r\nNatural Healing Stone Orgone Pyramid for Reiki Healing, Crystal Healing, Numerology, Tarot, Astrology, Vastu, Angle Healing &amp; Feng Shui<br />\r\nMaterial : Natural Healing Stones Mind Body Soul See Images &amp; Product Description For Healing Properties/Advantages<br />\r\nCan be used for Reiki Healing, Feng Shui, Vastu, Crystal Healing, Meditation, Vastu correction, Reiki Grid and Aura Cleaning,<br />\r\nRudraksha- Rudraksha Pyramid is the one of the most Strong and powerful pyramid in crystal orgone</p>\r\n', 'active', '2021-06-13 09:09:27'),
(5, '11', 'Natural Seven Chakra 7 Chakra Pyramid', 'upload/p3.jpeg', '1', '999', '<p>Experience more vitality and a restful sleep, relieve mental and physical stress, aids meditation<br />\r\nNatural Crystal Stone Multi Stone Orgone Pyramid Size 55-60 mm Approx<br />\r\nNatural Healing Stone / Crystal - small holes, crack marks on the surface or inside the stones are often visible<br />\r\nMaterial : Natural Healing Stones See Images &amp; Product Description For Healing Properties/Advantages<br />\r\n100% Authentic, Original and Natural Healing Stone / Crystal - small holes, crack marks on the surface or inside the stones are often visible<br />\r\nCan be used for Reiki Healing, Feng Shui, Vastu, Crystal Healing, Meditation, Vastu correction, Reiki Grid and Aura Cleaning.</p>\r\n', 'active', '2021-06-13 09:10:07'),
(6, '11', 'Natural Brass Chowki Pyramid Decorative Showpiece', 'upload/p4.jpeg', '1', '499', '<p>For Positive Energy And Vastu Correction.Good Luck<br />\r\nCrystal Pyramid Can be Placed on Home / Office / Study Table<br />\r\nThe Crystal Pyramid can be used for wish fulfillment and can be placed in the South West of your Homes and offices. It can also be used in Vastu and should be placed in South East for positive energy.<br />\r\nGlass Crystal Pyramid can be used as Wish Pyramid and for Vastu and Feng Shui<br />\r\nThis is also used to speed up the blocked tasks and assignments<br />\r\nIt works as a prism and can be placed on window sill for attracting positive chi in your home, shops and offices</p>\r\n', 'active', '2021-06-13 09:10:48'),
(7, '11', 'Brass Silver And Golden Finish Vastu Pyramid Decorative Showpiece - 7 Cm (Brass, Yellow, Silver)', 'upload/p5.jpeg', '1', '899', '<p>Pyramid Feng Shui<br />\r\nSpecially designed for the beautiful home &amp; office interior. you always wish for, this center piece comes from the Handmade store house of Aakrati. Constructed by some artistic hands, this piece can be placed on your Decoration Point. The high quality material used makes it a long lasting product for your Decoration.</p>\r\n', 'active', '2021-06-13 09:11:27'),
(8, '9', 'Rudra Parad Mala', 'upload/item1.jpg', '1', '1999', '<p>Contains Parad (Mercury)<br />\r\nThe goodness which one gets by donating many cows or wealth or taking a dip in the holy rivers is nothing when compared to just watching a holy rudraksha.<br />\r\nThe person who worships Shivalinga of Mercury or Parad Shivlinga</p>\r\n\r\n<p>Benefits of Rudra Parad Rosary:</p>\r\n\r\n<p>The wearer of this rosary reaches to Shiva Loka after his demise.<br />\r\nHe enjoys all the worldly pleasures as long as he is alive.<br />\r\nHe never faces dearth of any kind and is protected from evils like an untimely death.<br />\r\nOne looking to make more and more wealth should use this rosary to chant hymns of Goddess Lakshmi and Lord Shiva.<br />\r\nThis rosary mitigates the ill effects of kaal sarpa dosha and mangal dosha too so if you have these dosha in your chart then you should definitely wear this rosary.<br />\r\nRudraksha beads have carbon, nitrogen, hydrogen and oxygen in them which gives a very good spiritual boost to the mind of the wearer.</p>\r\n\r\n<p>How to use Rudra Parad Mala:</p>\r\n\r\n<p>After getting this Rudra Parad Mala you should keep it in your place of worship and wear it from the next day.<br />\r\nEven if you do now wish to wear it, you can keep it in your worship place for long.</p>\r\n\r\n<p>Why Buy from Us:</p>\r\n\r\n<p>Our Vedic Brahmins recite the hymns of Lord Shiva on this rosary to make it very effective and when you will wear it you will feel the difference after some days.</p>\r\n', 'active', '2021-06-13 09:12:33'),
(9, '9', 'Rose Quartz Rosary 6 Mm Beads With JGL Lab Certified Quartz Stone Necklace', 'upload/item2.jpg', '1', '699', '<p>Used for love and prosperity<br />\r\nEnergized rose quartz crystal mala 6mm 108 + 1 beads rose quartz mala<br />\r\n6mm Beads size rose quartz mala for love and prosperity<br />\r\nRose quartz is associated with the heart chakra as a crystal of love<br />\r\nThe fair and lovely rose quartz, with its gentle pink</p>\r\n', 'active', '2021-06-13 09:13:14'),
(10, '9', 'Budha Stone And Natural Kale Rudraksha Mala/Lab Certified', 'upload/item3.jpg', '1', '1499', '<p>Most widely worn bead by students<br />\r\n(Panch MUKHI RUDRAKSHA). RUDRAKSHA BEADS SIZE- 7-8 MM. (APPROX.)TOTAL 108 + 1 BEADS ORIGIN - JAVA (INDONESIA). It cultivates Wisdom and intellect. It enhances one&rsquo;s intellect &amp; self-awareness. It removes malefic effects of planet Jupiter. It is extensively used for wearing and chanting mantras. This is auspicious rudraksha helps awaken one&rsquo;s higher self means Upa Guru and through that to God. The planet associated with 5 mukhi(Faced) rudraksha is Jupiter. It is the most widely worn bead by students and sages since ancient times. Hence, 5 mukhi(Faced) is associated with learning, developing one&rsquo;s own uniqueness. It is also associated with optimism and growth (including mental and spiritual growth). Benefits: It is highly beneficial for students, journalists, scholars and teachers researchers. It helps singers and public speakers achieve greater success in their respective fields. It helps to remove intellectual dullness and in obtaining spiritual faith and insight. It is highly recommended for those preparing for competitive examinations. It cultivates Wisdom and intellect. It enhances one&rsquo;s intellect and self-awareness. It removes malefic effects of planet Jupiter. It is extensively used for wearing and chanting mantras.</p>\r\n', 'active', '2021-06-13 09:13:54'),
(11, '9', '9 Mukhi Rudraksha Bracelet', 'upload/item4.jpg', '1', '2699', '<p>10-12 mm Indonesia Origin Energized Bracelet<br />\r\nMaha Shivpurana states that this Rudraksha is symbol of Goddess Durga. Thus, it is very beneficial for everyone especially for ladies. The wearer is bestowed with stronger will power and their sins are destroyed. With the grace of Mother Goddess this bracelet receives blessings from all the Gods.</p>\r\n\r\n<p>Benefits of Nine faced Rudraksh Bracelet</p>\r\n\r\n<p>Wearing this nine faced rudraksh comes with many benefits. The wearer of this bracelet is blessed with increase in wealth, honour, glory and all kind of pleasures.<br />\r\nThis bracelet is very effective in increasing eyesight, and any other kind of eye ailments. This distinctive form of Mother Durga forms protective armour and therefore saves the wearer from any physical and mental problems.<br />\r\nIt brings mental peace for the wearer and increases concentration. It is a boon for any women. This bracelet would be of great use for anyone who is suffering from malefic effects of Ketu Grah. If you are facing obstacles in work place or financial front then you must wear this nine faced Rudraksha bracelet.</p>\r\n\r\n<p>How To Wear This Nine Faced Rudraksha Bracelet?</p>\r\n\r\n<p>Devotees of Goddess Durga must wear this nine faced rudraksh bracelet. Chant the mantra &ldquo;ॐ ह्रीं हूँ नमः&rdquo; while wearing this bracelet.</p>\r\n\r\n<p>Where To Buy Nine Faced Rudraksha Bracelet?</p>\r\n\r\n<p>You can buy this bracelet from AstroTalk. This is energized by our experienced Panditji before shipping it to you. This will ensure that you get maximum benefits of this bracelet.</p>\r\n', 'active', '2021-06-13 09:14:30'),
(12, '9', '7 Mukhi Rudraksha Bracelet', 'upload/item5.jpg', '1', '1499', '<p>Considered as the divine form of Goddess Laxmi.<br />\r\nSeven faced Rudraksha is considered as the divine form of Goddess Laxmi. This bracelet impacts the life of the wearer for many years after wearing. Seven faced bracelet keeps the wearer safe from wrath of Saturn planet&rsquo;s cruel eyes. It also gets the native blessings of Goddess Lakshmi.<br />\r\nIt is believed that wearing seven faced Rudraksha Mala brings prosperity in house, protects the entire family and ensures inflow of money.</p>\r\n\r\n<p>Let&#39;s now know the benefits of Seven Faced Rudraksha:</p>\r\n\r\n<p>With the effect of seven faced Rudraksha financial conditions of the home increases and with blessings of Goddess Lakshmi poverty is gone and respect in society is maintained. As this bracelet is related to Saturn it protects the wearer from wrath of Shani Grah. It is very beneficial in joints pain and helps in nerve related diseases. Malefic effects of Saturn affect the mental condition of an individual the most. Seven faced bracelet brings peace to mind and increases calmness. This bracelet protects the seven materials of the body and increases the metabolism of body. New sources of income in business and job are generated with the effect of this bracelet.</p>\r\n\r\n<p>How To Wear Seven Faced Rudraksha Bracelet Procedure:</p>\r\n\r\n<p>Wearing seven faced Rudraksha helps in achieving desired results. Following Mantra must be recited after wearing this bracelet. &ldquo;ॐ हूँ नमः&rdquo; &ldquo;Aum Hoom Namah&rdquo; This mantra could be recited everyday for increasing auspicious effects of Rudraksha bracelets bringing fame, respect and prosperity.</p>\r\n\r\n<p>Why You Should Buy Seven Faced Rudraksha Bracelet From Us?</p>\r\n\r\n<p>Once you order this Bracelet, our revered Pandit ji will energize it for you for no extra cost. This will ensure early and complete results to you.</p>\r\n', 'active', '2021-06-13 09:15:12'),
(13, '9', 'Amethyst Bracelet', 'upload/item6.jpg', '1', '999', '<p>Beneficial to promote the spirit of love, harmony<br />\r\nThis purple, lilac or lavender colored stone has always been associated with royalty, is also having so many benefits associated with it. It is believed that wearing seven faced Rudraksha Mala brings prosperity in house, protects the entire family and ensures inflow of money.</p>\r\n\r\n<p>Benefits of Amethyst Stone:</p>\r\n\r\n<p>This acts and promotes the antioxidant activities of the body. So, anyone looking out to lose some extra body fat will be benefitted with this bracelet. This Amethyst stone is also commonly known as the healing stone because of the high level of energy it emanates.<br />\r\nThis bracelet will make you look stylish and funky. It will cleanse your body, mind, and spirit, with the infinite source of power that the amethyst stone embodies.<br />\r\nThis bracelet is also beneficial to promote the spirit of love, harmony, and peace in an individual.<br />\r\nPeople wear amethyst rings, pendants, and earrings, to benefit from its amazing power. It is a sub stone of Blue Sapphire and thus it will help you in getting benefits from Saturn. It mitigates the ill effects of Saturn.</p>\r\n\r\n<p>Why Purchase Amethyst Bracelet From Us?</p>\r\n\r\n<p>This Amethyst bracelet is energized by our esteemed punditji to yield more benefits and effects in your life.<br />\r\nThis is surely going to benefit you in all spheres of life by adding a dash of fashion and style to your life.</p>\r\n', 'active', '2021-06-13 09:15:53'),
(14, '9', 'Tiger Eye Bracelet', 'upload/item7.jpg', '1', '999', '<p>This gemstone basically stands for increasing honesty, strong willpower, practicality and loyalty in an individual life<br />\r\nA tiger Eye Bracelet is a funky piece of jewelry (bracelet) that is surely going to add a sense of funk and style to your personality.</p>\r\n\r\n<p>Benefits Of a Tiger Eye Bracelet:</p>\r\n\r\n<p>A tiger eye gemstone basically stands for increasing honesty, strong willpower, practicality and loyalty in an individual life.<br />\r\nAs like a tiger is known for having strong willpower and dedication, similarly tiger eye is known for having similar energy and vibrations.<br />\r\nExtremely Beneficial as well as stylish and funky, this tiger eye Bracelet will also add up your luck and positivity in life.</p>\r\n\r\n<p>Why Purchase From Us?</p>\r\n\r\n<p>This tiger eye bracelet available at AstroTalk is not only stylish and funky but at the same time, it is energized by our esteemed punditji to yield more benefits and effects in your life.<br />\r\nThis is surely going to benefit you in all spheres of life by adding a dash of fashion and style to your life.</p>\r\n', 'active', '2021-06-13 09:16:31'),
(15, '9', 'Rose Quartz With Tulsi Bracelet', 'upload/item8.jpg', '1', '999', '<p>Increases romance and peace between couples<br />\r\nRose Quartz is the stone of heart with pink essence representing love. It is meant for increasing the romance and peace between couples.<br />\r\nWearing a rose quartz bracelet is highly effective in bringing back the love and romance in your life. This stone is symbolic of the energy of love, peace and positive energy.</p>\r\n\r\n<p>Benefits Of Rose Quartz with Tulsi Bracelet:</p>\r\n\r\n<p>Tulsi leaves are an essential part in the worship of Vishnu and his avatars, including Krishna and Rama and hence, this Tulsi mala or bracelet is most recommended for chanting the Vishnu, Krishna &amp; Rama Mantras.<br />\r\nThis bracelet will make you look stylish and funky with other benefits also such as to cleanse your body, mind, and spirit, with the infinite source of power that this stone and tulsi embodies.<br />\r\nA Rose Quartz stone will spread out its love energy and vibrations into its surroundings to help all those who are nearby, such as your nearest and dearest ones. If you are facing from a rough and tough phase of life that is, if you are in a depression and having some emotional breakdowns in life then a rose quartz stone would be helpful to bring a change in your life.</p>\r\n\r\n<p>Why Purchase From Us?</p>\r\n\r\n<p>This Rose Quartz with Tulsi bracelet available at Astrotalk is not only stylish and funky, but at the same time, it is energized by our esteemed astrologers to yield more benefits and effects in your life.<br />\r\nThis is surely going to benefit you in all spheres of life by adding a dash of fashion and style to your life.</p>\r\n', 'active', '2021-06-13 09:17:16'),
(16, '9', 'Red Agate With Tulsi Bracelet', 'upload/item9.jpg', '1', '999', '<p>Very good for blood disorders and energizing the body system<br />\r\nThis Red Agate with Tulsi Bracelet is a unique combination of red agate stones with white colored Tulsi beads.<br />\r\nWho would have thought that this bracelet can provide you a win over fashion and style as well be beneficial in many ways.</p>\r\n\r\n<p>Benefits Of Red Agate with Tulsi Bracelet:</p>\r\n\r\n<p>Red agate is very good for blood disorders and energizing the body system. This bracelet is also beneficial and used to help improve the efficiency of all bodily functions and for any skin damage caused by burns. Red Agate Stone helps to promote love, abundance, wealth, good luck, longevity, acceptance, courage, protection, balance, harmony, generosity, strength, security and appreciation of nature.<br />\r\nThis Bracelet is also helpful in promoting prosperity and the growth of all things, this good luck bringer may be used both for business as well as your private life. Extremely Beneficial as well as stylish and funky this Malachite stone with Tulsi Bracelet will also add up your luck and positivity in life. Tulsi leaves are an essential part in the worship of Vishnu and his avatars, including Krishna and Rama and hence, this Tulsi mala or bracelet is most recommended for chanting the Vishnu, Krishna &amp; Rama Mantras.</p>\r\n\r\n<p>Why Purchase From Us?</p>\r\n\r\n<p>This Red Agate bracelet with Tulsi available at AstroTalk is not only stylish and funky but at the same time, it is energized by our esteemed astrologers to yield more benefits and effects in your life.<br />\r\nThis is surely going to benefit you in all spheres of life by adding a dash of fashion and style to your life.</p>\r\n', 'active', '2021-06-13 09:17:53'),
(17, '9', 'Malachite With Tulsi Bracelet', 'upload/item10.jpg', '1', '999', '<p>A protection stone, absorbing negative energies and pollutants<br />\r\nMalachite, with its beautiful, rich green color, leaves no doubt of its importance as a jewel. Its opaque strength and power demands respect, mesmerizing the viewer gives it an appealing feel.<br />\r\nThis Bracelet is surely going to win the laurels of appreciation of everyone who will see this bracelet on your hand.<br />\r\nMalachite is also known as a protection stone, absorbing negative energies and pollutants from the atmosphere and from the body.</p>\r\n\r\n<p>Benefits Of Malachite With Tulsi Bracelet:</p>\r\n\r\n<p>Tulsi clears the aura. It helps to balance vata and kapha doshas. Chanting the mantra on Tulsi increases the spiritual power of the prayer, increases devotion and spiritual growth. Malachite stone is also known as a healing stone, as it heals on physical and emotional levels, drawing out impurities and stimulating the Life force throughout the aura and body. This can be specifically helpful to the students and persons who are seeking mental peace and solace from this complex world of complexities.<br />\r\nExtremely Beneficial as well as stylish and funky this Malachite stone with Tulsi Bracelet will also add up your luck and positivity in life. With its pure energy rays of green, Malachite is dedicated to the Heart Chakra. Located near the center of the breastbone, it regulates our interaction with the external world and controls what we embrace and what we resist.</p>\r\n\r\n<p>Why Purchase From Us?</p>\r\n\r\n<p>This Malachite bracelet with Tulsi available at AstroTalk is not only stylish and funky but at the same time, it is energized by our esteemed astrologers to yield more benefits and effects in your life.<br />\r\nThis is surely going to benefit you in all spheres of life by adding a dash of fashion and style to your life.</p>\r\n', 'active', '2021-06-13 09:19:12'),
(18, '9', 'Green Aventurine With Tulsi Bracelet', 'upload/item11.jpg', '1', '999', '<p>Helpful in releasing old habits and disappointments<br />\r\nGreen Aventurine is known as the &ldquo;Stone of Opportunity,&rdquo; thought to be the luckiest of all crystals, especially in manifesting prosperity and wealth.</p>\r\n\r\n<p>Benefits Of Green Aventurine With Tulsi Bracelet:</p>\r\n\r\n<p>Green Aventurine stone is helpful in releasing old habits and disappointments so new growth and development can take place in an individual&rsquo;s life. This Green aventurine bracelet with Tulsi bracelet is beneficial in bring peace and calm as it has a green color in this that is already known for its calm and solace effects. Tulsi leaves are an essential part in the worship of Vishnu and his avatars, including Krishna and Rama and hence, this Tulsi mala or bracelet is most recommended for chanting the Vishnu, Krishna &amp; Rama Mantras. This bracelet will also enhance one&#39;s creativity and motivation and encourages perseverance and courage in life&rsquo;s obstacles. This bracelet is definitely a must buy for all the students as it reinforces one&rsquo;s decisiveness and amplifies leadership qualities, injecting a sense of humor and openness to the ideas of others</p>\r\n\r\n<p>Why Purchase From Us?</p>\r\n\r\n<p>This green aventurine bracelet with Tulsi available at Astrotalk is not only stylish and funky but at the same time, it is energized by our esteemed punditji to yield more benefits and effects in your life.<br />\r\nThis is surely going to benefit you in all spheres of life by adding a dash of fashion and style to your life.</p>\r\n', 'active', '2021-06-13 09:19:57'),
(19, '9', 'Black Agate With Tulsi Bracelet', 'upload/item12.jpg', '1', '999', '<p>Helpful in increasing concentration<br />\r\nThis is surely going to win the appreciation of everyone who is going to see this bracelet in your hand.<br />\r\nTulsi wood, which belongs to the family of basil, is the most sacred of all wood in the Hindu tradition. It is worshipped in Indian temples as a living goddess.<br />\r\nSuch is the importance of Tulsi is in Hinduism. Whereas, Agate stone is a symbol of protection, courage, and success.<br />\r\nIt is a stylish stone that is made up of a bracelet especially to attract good fortune by eliminating bad luck in an individual&rsquo;s life.</p>\r\n\r\n<p>Benefits Of Black Agate With Tulsi Bracelet:</p>\r\n\r\n<p>It is surely going to pump up your style sense by providing a funk and jazz to your personality.<br />\r\nIf you are a college student then surely you may have some enemies and bad friends in your company who are jealous and envy of your style. It can protect you from their evil eye as well. Black Agate stone is having a strong significance in astrology as well, as this stone is beneficial to pacify the malefic effects of Planet Saturn or to strengthen this planet in one&#39;s Horoscope.<br />\r\nTulsi leaves are an essential part in the worship of Vishnu and his avatars, including Krishna and Rama and hence, this Tulsi mala or bracelet is most recommended for chanting the Vishnu, Krishna &amp; Rama Mantras. This stylish bracelet is also helpful in increasing concentration &amp; clarity and promotes good will.<br />\r\nIt has a calming effect during times of stress, giving a sense of strength and courage.</p>\r\n\r\n<p>Why Purchase From Us?</p>\r\n\r\n<p>This black agate bracelet with Tulsi available at AstroTalk is not only stylish and funky but at the same time, it is energized by our esteemed astrologers.<br />\r\nThis is surely going to benefit you in all spheres of life by adding a dash of fashion and style to your life.</p>\r\n', 'active', '2021-06-13 09:20:36'),
(20, '9', 'Tiger Eye Stone Mala', 'upload/item13.jpg', '1', '2699', '<p>Used as a protection against black magic and ghosts<br />\r\nTiger Eye Stone Mala is very beautiful to see. The stone earned its name from the resemblance with eye of a tiger. This astrological remedy brings positivity in life. Thus, you are up for any kind of challenge. Wearing this Mala can convert your bad luck into good luck.</p>\r\n\r\n<p>Here are some benefits of Tiger Eye Stone Mala</p>\r\n\r\n<p>Tiger Stone Mala is especially used as a protection against black magic and ghosts. This miraculous garland protects the wearer from evil eyes.<br />\r\nIt brings positivity in the life of wearer as well as in his family.<br />\r\nThis stone belongs to the Saturn and Jupiter planet. Therefore, it is used in reducing the ill effects of these planets and increases their auspicious results.<br />\r\nIf you are always fearful of unknown reasons then you must wear Tiger Eye Mala. Wearing this mala in neck relieves the wearer from bad dreams and gives him courage.<br />\r\nTiger Eye Mala fills the wearer with enthusiasm. The energy filled native is determined to achieve his goals.<br />\r\nThis Mala is very effective for people who are facing trouble in getting married. They start getting right proposals for marriage and they soon settle down after wearing Tiger Eye Mala. This Mala has the ability to bless childless couples with children. Thus, such couples must wear this Mala.<br />\r\nThis garland develops creativity in the wearer. Its divine powers give success in work. This Mala develops leadership qualities in the wearer. It must be worn by people willing to enter leadership roles<br />\r\nPeople who find themselves trapped in debt must wear this Mala. This will free them from any kind of loan</p>\r\n\r\n<p>Where Do You Get Tiger Eye Stone Mala-</p>\r\n\r\n<p>You can buy this Mala from AstroVidhi. This is sent to you only after being energized by our experienced pundit. This ensures that you receive full benefits of the Mala soon.</p>\r\n', 'active', '2021-06-13 09:21:24'),
(21, '9', 'Grah Shanti Mala', 'upload/item14.jpg', '1', '2299', '<p>Protection you from any conspiracies planned against you by your enemies<br />\r\nThis Grah Shanti Mala is designed to please Brihaspati, Mangal and Shani Grah at the same time. If Saturn Planet is giving negative results in horoscope then you must wear this garland. If is very effective in reducing the malefic effects of Mars planet also. This works well for the benefit of the wearer in either case.<br />\r\nLava pearl is also adorned in this Grah Shanti Mala. It is the energy center located at the aura level of our body, which protects us from various diseases. Wearing Lava Pearl is helpful in receiving spiritual, mental and emotional peace.</p>\r\n\r\n<p>This is a very mystical Mala. Let&#39;s know about its benefits-</p>\r\n\r\n<p>This Mala will protect you from any conspiracies planned against you by your enemies. Apart from this, you may also score a win over them.<br />\r\nIf you are not able to achieve success due to lack of confidence then this Mala will help you. It boosts confidence in the wearer.<br />\r\nThose people who accept defeat before even before reaching any decision, such people must wear this Mala. It improves the decision making power.<br />\r\nShani Sade Sati is a phase of life which affects everyone. If you are passing through this phase then you must wear this Grah Shanti Mala. Wearing this Mala will help in reducing the malefic effects of Shani grah in wearer&rsquo;s life. It could also be worn during the phases of Shani Mahadasha and Antardasha.<br />\r\nThe mystical powers of this Mala fill the wearer with new energy. It develops immunity to fight diseases. Thus, the wearer is freed from any diseases. Also, it opens new doors of good fortune in life and strength.<br />\r\nIf you want to achieve mental, physical and financial well-being, then you must get this Mala without a doubt.<br />\r\nIt is considered the best astrological remedy for people having confidence problem. If someone is always worried of no particular reasons then this Mala will surely help him get over anxiety.</p>\r\n\r\n<p>How Grah Shanti Mala Is Made-</p>\r\n\r\n<p>This amazing garland is made from Firoza (turquoise stone), Lal Hakeek (Red Agate), Jamunia (Amethyst or Kathela), Lava Beads, Jasper stone and Green Hakeek (Green Agate) which brings benefits to the holder soon.</p>\r\n\r\n<p>Where To Buy Grah Shanti Mala?</p>\r\n\r\n<p>Astrotalk will provide you authentic Grah Shanti Mala. We will send this Mala to you after our Pandit ji energizes it using sacred Vedic Mantras. This will get you maximum benefits of the Mala soon.</p>\r\n', 'active', '2021-06-13 09:22:03'),
(22, '9', 'Rudraksha Hakik Mala', 'upload/item15.jpg', '1', '2299', '<p>Your money related problems will vanish with auspicious effects of this Mala.<br />\r\nPanchamukhi Rudraksha or five faced Rudraksha is said to be the form of Lord Shiva only. It receives blessings from five Gods. Therefore, this removes any faults created by five elements.<br />\r\nFive faced Rudraksha holds its significance in meditation and spiritual work. It is ruled by Jupiter planet and represents Lord Shiva also. Thus, this is a good stone to receive blessings of Brihaspati Grah. Additionally, it is associated with Kalagni symbolizing Lord Shiva. On the other hand Black Agate symbolizes courage. It is associated with Shani Grah.</p>\r\n\r\n<p>What are the benefits of Five Faced Rudraksha &amp; Hakik Mala?</p>\r\n\r\n<p>Your money related problems will vanish with auspicious effects of this Mala. Problems related to malefic effects of Brihaspati and Shani grah are reduced after wearing Rudraksha Hakik Mala.<br />\r\nThis Mala is very effective in getting rid of problems such as dizziness, headache as well as skin problems or indigestion.<br />\r\nJupiter Planet blesses us with a happy married life. You must wear this Mala to receive blessings of Brihaspati grah and live a harmonious married life.<br />\r\nRudraksha Hakik Mala is very effective for women suffering from menstrual problems. This also works on getting rid of any other sexual problems.<br />\r\nEffects of this Mala could be felt in the mind of the wearer. It helps the wearer attaining mental peace and free from any mental diseases. Also, the family life becomes happier. Problem of blood pressure could be relieved by using this Mala. It is also effective in any kind of heart diseases.<br />\r\nIf someone is suffering from insomnia then they can use this Mala for relief. People having frequent nightmares must keep this Rudraksha Hakik Mala under their pillow. It will stop nightmares.<br />\r\nThis Mala works as an armour against black magic and ghosts.<br />\r\nIt removes any architectural faults present in the house.<br />\r\nRudraksha Hakik Mala boosts confidence and concentration of the wearer increases.<br />\r\nYou and your house are protected from any negative energy. Prosperity in the home is increased.</p>\r\n\r\n<p>Where To Buy Rudraksha Hakeek Mala</p>\r\n\r\n<p>You can buy this Mala from AstroTalk. This Mala is sent to you only after being energized by our experienced pundit ji, so that you can get the full benefit of this Mala very soon.</p>\r\n', 'active', '2021-06-13 09:22:35'),
(23, '9', 'Green Aventurine Heart Pendant', 'upload/item16.jpg', '1', '1699', '<p>It enhances luck and fortune<br />\r\nGreen Aventurine stone is the luckiest stone. It is known as the stone of opportunity. The properties of this stone suits best to the people aspiring for wealth and prosperity.</p>\r\n\r\n<p>Benefits of Green Aventurine:</p>\r\n\r\n<p>Green Aventurine Pendant brings optimism in one&rsquo;s life.<br />\r\nIt enhances luck and fortune.<br />\r\nIt opens the door for new and creative opportunities.<br />\r\nIt is the best remedy for people who desire promotion.</p>\r\n\r\n<p>How To Use:</p>\r\n\r\n<p>Before wearing Green Aventurine Pendant, meditate while keeping the stone in your hand. Think of the qualities you want the stone to integrate and wear it.</p>\r\n\r\n<p>Why Purchase From Us:</p>\r\n\r\n<p>It is energized by our esteemed panditiji. Fully energized and purified Green Aventurine Pendant without any crack will work best from the rest. Buy Green Aventurine Pendant online and you will definitely see a change.</p>\r\n', 'active', '2021-06-13 09:23:10'),
(24, '9', 'Chandra Lakshmi Mala', 'upload/item17.jpg', '1', '2999', '<p>Wearing Chandra Lakshmi Mala has a positive impact on mental peace. It brings relief in mental disorders.<br />\r\nThe married life and family life of the wearer is improved. Love is maintained with the blessings of this Mala.<br />\r\nThis garland is very useful for controlling blood pressure.<br />\r\nThis garland is suggested to people suffering from ill effects of black magic and ghosts. This is very beneficial in removal of architectural flaws in home.<br />\r\nThis Mala improves concentration and boosts confidence.<br />\r\nHurdles in work are removed and professional life gets back on a smooth track progressing track. Any kind of physical impairment may be reduced with effects of this garland.<br />\r\nWearer gets courage to face any kind of adverse situation.<br />\r\n-The divine powers of this Mala protect you from negative energies.<br />\r\nThe savings for family are maintained with positive effects of Chandra Lakshmi Mala.<br />\r\nThis Mala blesses you with cash inflow. And you may never face shortage of money.</p>\r\n\r\n<p>How Chandra Lakshmi Mala Is Made</p>\r\n\r\n<p>This auspicious Mala is made by Five Faced Rudraksha and Tiger Eye stone beads. It is also adorned with small statue of hands of Goddess Lakshmi. Wearer receives maximum benefits of all these.</p>\r\n\r\n<p>Where To Buy Chandra Lakshmi Mala</p>\r\n\r\n<p>Astrotalk is a trusted brand in field of Astrology. We energize each mala with sacred Vedic Mantras so that you receive maximum benefits as soon as possible. The whole process is performed by experienced Pandit ji.</p>\r\n', 'active', '2021-06-13 09:28:22'),
(25, '8', 'Yellow Sapphire', 'upload/gem1.jpg', '1', '999', '<p>Pukhraj<br />\r\nYellow Sapphire is considered to be one of the most auspicious and beneficial stones out of all the Navratnas (nine gems) as prescribed in the Hindu scriptures and is also known as &#39;Pukhraj&#39; stone or Peetmani. This stone claims a very special place in the world of Astrology. The Pukhraj Stone is believed to hold the powers of the planet Jupiter. The wearer of this stone must ascertain its suitability for them from a learned astrologer and a Gemologist to draw maximum benefits out of it. Yellow Sapphire is a symbol of Wisdom and Truth. To know more about the stone contact an astrologer on our platform.<br />\r\n*Here is a short guide for Carat to Ratti interconversion:*<br />\r\n1 carat = 200 mg = 0.20g<br />\r\n1 Ratti = 182 mg = 0.18g<br />\r\nHence,<br />\r\n*1 Ratti = 0.90 carats or 1 carat = 1.09 Ratti*</p>\r\n', 'active', '2021-06-13 09:29:23'),
(26, '8', 'Ruby (Manik)', 'upload/gem2.jpg', '1', '499', '<p>Lab Certified. Energized. Certificate Included. Free Shipping.<br />\r\nRuby: Its used to Enhance the power of Sun. Ruby known as Manik / Manak in hindi, is the gemstone of Lord Sun associated with Zodiac Leo. Ruby Is Worn As A Mark Of Royalty. Benefits The Wearer For Being In Power In Ruling Authority, As Politicians And Government Personnel ● It Is Able To Dissolve Confusion And Give Sharp And Focused Eye. ● Promotes Self-Awareness &amp; Gives Success In Competitive Exams. It represents father, authority, dignity, boldness, commanding power, ambition, and courage and kind heartedness. A person whose Sun is weak or is affected by maleficent planets is recommended to wear Ruby gemstone. Such a person is usually found having unstable professional life and lacking a good decision-making skill. He is usually not recognized well by others. He does not have a good social standing and is not able to succeed even after making many efforts. For such a person, his weak Sun causes problems like blood pressure, irregular heartbeat, bilious nature, hemorrhage and cardiac problems etc. Such people, on consultation with an astrologer, are recommended to wear gemstone Ruby. To know more about the stone contact an astrologer on our platform.<br />\r\n*Here is a short guide for Carat to Ratti interconversion:*<br />\r\n1 carat = 200 mg = 0.20g<br />\r\n1 Ratti = 182 mg = 0.18g<br />\r\nHence,<br />\r\n*1 Ratti = 0.90 carats or 1 carat = 1.09 Ratti*</p>\r\n', 'active', '2021-06-13 09:30:01'),
(27, '8', 'Amber Stone', 'upload/gem3.jpg', '1', '389', '<p>Amber stone clears stress, phobias and fears.<br />\r\nWearing Amber Stone will help in balancing of emotions by clearing stress, phobias and fears. It attracts good luck to the wearer. Being a powerful healer it gives the wearer the sense of good health and ambience.The gem stone also helps the wear to abolish the negative energy by clearing the unhealthy thoughts and filling the mind with refreshed and positive thoughts. To gain more results from the stone consult an astrologer on our platform and seek the guidance.<br />\r\n*Here is a short guide for Carat to Ratti interconversion:*<br />\r\n1 carat = 200 mg = 0.20g<br />\r\n1 Ratti = 182 mg = 0.18g<br />\r\nHence,<br />\r\n*1 Ratti = 0.90 carats or 1 carat = 1.09 Ratti*</p>\r\n', 'active', '2021-06-13 09:30:32'),
(28, '8', 'Blue Sapphire', 'upload/gem4.jpg', '1', '999', '<p>Neelam, the Blue Sapphire is beneficial in handling nerve related problems.<br />\r\nRemoval of poverty and attaining of wealth can be done by wearing Blue Sapphire gem stone. Wearing a Sapphire can improve the health of the individual and also give long life. Saturn also catapults people to fame, name and fortune. Wearing Sapphire can produce positive results. Protection against theft, terror, accidents, and problems that could be caused due to natural calamities like storms, fire etc can be avoided by wearing this stone. To know more benefits about the Blue Sapphire seek guidance from an astrologer on our platform.<br />\r\n*Here is a short guide for Carat to Ratti interconversion:*<br />\r\n1 carat = 200 mg = 0.20g<br />\r\n1 Ratti = 182 mg = 0.18g<br />\r\nHence,<br />\r\n*1 Ratti = 0.90 carats or 1 carat = 1.09 Ratti*</p>\r\n', 'active', '2021-06-13 09:31:02'),
(29, '8', 'Rose Quartz', 'upload/gem5.jpg', '1', '45', '<p>Rose Quartz boosts the positive feeling among the wearer.<br />\r\nClearing of various problems such as healing of emotions, including heartache, paranoia, self-pity, possessiveness, control, fear, anger, resentment can be attained by wearing Rose Quartz gem stone. The stone boosts the feelings of self-acceptance, gratitude, trust, and confidence by abolishing the feeling of negativity. Thus it helps the wearer to lead the life in a positive manner. To know more about the stone talk to an astrologer on our platform. To receive higher benefits wear the gem stone by consulting an astrologer on our platform.<br />\r\n*Here is a short guide for Carat to Ratti interconversion:*<br />\r\n1 carat = 200 mg = 0.20g<br />\r\n1 Ratti = 182 mg = 0.18g<br />\r\nHence,<br />\r\n*1 Ratti = 0.90 carats or 1 carat = 1.09 Ratti*</p>\r\n', 'active', '2021-06-13 09:31:44'),
(30, '8', 'Pearl (Moti)', 'upload/gem6.jpg', '1', '599', '<p>Lab Certified. Energized. Certificate Included. Free Shipping.<br />\r\nPearl is a symbol of Beauty and is an Organic Gem. Natural pearls can be freshwater or saltwater. Pearls strengthen mental ability , also pearls increase peace of mind and help to calm the emotions. Pearl also symbolizes longevity , patience, and purity. Pearl inspires love and faithfulness and bestows one with good memory. Pearl Rings should be worn in the Little finger. Ruling planet is the moon and Zodiac sign is cancer. According to Numerology it symbolizes number 2. To receive higher benefits wear the gem stone by consulting an astrologer on our platform.<br />\r\n*Here is a short guide for Carat to Ratti interconversion:*<br />\r\n1 carat = 200 mg = 0.20g<br />\r\n1 Ratti = 182 mg = 0.18g<br />\r\nHence,<br />\r\n*1 Ratti = 0.90 carats or 1 carat = 1.09 Ratti*</p>\r\n\r\n<p><strong>Price: 599.00/carat</strong></p>\r\n', 'active', '2021-06-13 09:38:05'),
(31, '8', 'Red Coral (Lal Moonga)', 'upload/gem7.jpg', '1', '1099', '<p>Lab Certified. Energized. Certificate Included. Free Shipping.</p>\r\n\r\n<p>Coral is called &lsquo;Moonga&rsquo; in Hindi. It is associated with Planet &lsquo;Mars&rsquo;. Wearing Coral enhances the effect of Mars on one&rsquo;s life. Mars is considered as &lsquo;Commander-in-chief&rsquo; among all planets. It is Aggressive, Intelligent, Active, Dutiful, courageous, Brave, Disciplined and Confident. Wearing Coral as per Vedic guidelines activates these properties in the person. Mars is related to Blood, Immune system and Sexual health of the person. People with weak health related to blood related disease or disorder or people who fall sick frequently or people with low sex drive should wear Coral Gemstone. Mars is also significator for Marriage, Children and Career. Coral is also beneficial for people who are into business related to Land like Real Estate, Agriculture, and Farming etc. To receive higher benefits wear the gem stone by consulting an astrologer on our platform.</p>\r\n\r\n<p>*Here is a short guide for Carat to Ratti interconversion:*<br />\r\n1 carat = 200 mg = 0.20g<br />\r\n1 Ratti = 182 mg = 0.18g<br />\r\nHence,<br />\r\n*1 Ratti = 0.90 carats or 1 carat = 1.09 Ratti*</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Price: 1099.00/carat</strong></p>\r\n', 'active', '2021-06-13 09:38:44'),
(32, '8', 'Emerald (Panna)', 'upload/gem8.jpg', '1', '1499', '<p>Lab Certified. Energized. Certificate Included. Free Shipping.<br />\r\nEmerald is a valuable gemstone and it is also known as Panna stone. Emerald is very helpful for increasing business, financial life, and professional life. Also, Students benefits aloat on wearing emeralds. Emerald improves psychics powers, intuition, sharpens memory, improves learning ability, communication. Emerald is also good for health, especially the nervous system. The Emerald Gemstone Ring should be worn in the Little finger. As the ruling planet is Mercury. Birth Sign Gemini &amp; Virgo. According to Numerology, it symbolizes number 5. To receive higher benefits wear the gem stone by consulting an astrologer on our platform.<br />\r\n*Here is a short guide for Carat to Ratti interconversion:*<br />\r\n1 carat = 200 mg = 0.20g<br />\r\n1 Ratti = 182 mg = 0.18g<br />\r\nHence,<br />\r\n*1 Ratti = 0.90 carats or 1 carat = 1.09</p>\r\n\r\n<p><strong>Price: 1499.00/carat</strong></p>\r\n', 'active', '2021-06-13 09:39:19'),
(33, '8', 'Love Stone', 'upload/gem9.jpg', '1', '1249', '<p>Love Stone to enhance a better understanding between you and your partner.<br />\r\nLove Stone helps in enhancing the understanding between the wearer and his partner by erasing or decreasing all the negative powers of misunderstanding, and misconceptuations. The stone helps the pair to have a strong bonding between the two which eventually results in a healthy relationship. To know more about the stone contact an astrologer on our platform.<br />\r\n*Here is a short guide for Carat to Ratti interconversion:*<br />\r\n1 carat = 200 mg = 0.20g<br />\r\n1 Ratti = 182 mg = 0.18g<br />\r\nHence,<br />\r\n*1 Ratti = 0.90 carats or 1 carat = 1.09 Ratti*</p>\r\n\r\n<p><strong>Price: 1249.00/carat</strong></p>\r\n', 'active', '2021-06-13 09:40:03'),
(34, '8', 'Hessonite (Gomed)', 'upload/gem11.jpg', '1', '538', '<p>Lab Certified. Energized. Certificate Included. Free Shipping.<br />\r\nHessonite is a very powerful gemstone which boosts immunity &amp; overall health. Gomed helps avert disaster, insanity, evil spirits, Wearing a good quality gomed protects from sudden misfortune. Hessonite Rings should be worn in the Middle finger. The ruling planet is Rahu and the zodiac sign is Aquarius. According to Numerology it symbolizes number 4. To receive higher benefits wear the gem stone by consulting an astrologer on our platform.<br />\r\n*Here is a short guide for Carat to Ratti interconversion:*<br />\r\n1 carat = 200 mg = 0.20g<br />\r\n1 Ratti = 182 mg = 0.18g<br />\r\nHence,<br />\r\n*1 Ratti = 0.90 carats or 1 carat = 1.09 Ratti*</p>\r\n\r\n<p><strong>Price: 538.00/carat</strong></p>\r\n', 'active', '2021-06-13 09:40:58'),
(35, '8', 'Cat\'s Eye (Lehsunia)', 'upload/gem12.jpg', '1', '390', '<p>Lab Certified. Energized. Certificate Included. Free Shipping.<br />\r\nAs the name suggests cat&#39;s eye is a lovely gemstone of goldish green color with a white band of reflecting light. Wearing a cat&rsquo;s eye gives you mystical power and improves physic movements. Cats&#39; eyes protect from mysterious, dangerous, enemies, and diseases. Cats&#39; eyes bring fortune to gamblers. Cats EyeRing should be worn in the Middle finger. The ruling planet is Ketu and the zodiac sign is Pisces. According to Numerology, it symbolizes number 7. To receive higher benefits wear the gem stone by consulting an astrologer on our platform.<br />\r\n*Here is a short guide for Carat to Ratti interconversion:*<br />\r\n1 carat = 200 mg = 0.20g<br />\r\n1 Ratti = 182 mg = 0.18g<br />\r\nHence,<br />\r\n*1 Ratti = 0.90 carats or 1 carat = 1.09 Ratti*</p>\r\n\r\n<p><strong>Price: 390.00/carat</strong></p>\r\n', 'active', '2021-06-13 09:41:34');

-- --------------------------------------------------------

--
-- Table structure for table `astro_mall_category`
--

CREATE TABLE `astro_mall_category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `status` varchar(55) NOT NULL DEFAULT 'active',
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `astro_mall_category`
--

INSERT INTO `astro_mall_category` (`cat_id`, `cat_name`, `status`, `created_at`) VALUES
(5, 'Crystals', 'active', '2021-06-13 09:04:27'),
(6, 'Parad Items', 'active', '2021-06-13 09:04:39'),
(7, 'Home Decor Items', 'active', '2021-06-13 09:04:53'),
(8, 'Gemstone', 'active', '2021-06-13 09:05:11'),
(9, 'Items to Wear', 'active', '2021-06-13 09:05:45'),
(10, 'Spell', 'active', '2021-06-13 09:05:53'),
(11, 'Pyramids', 'active', '2021-06-13 09:06:06'),
(12, 'Evil Eye (Nagar Lagna)', 'active', '2021-06-13 09:06:34');

-- --------------------------------------------------------

--
-- Table structure for table `astro_notification`
--

CREATE TABLE `astro_notification` (
  `id` int(11) NOT NULL,
  `notification` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `astro_notification`
--

INSERT INTO `astro_notification` (`id`, `notification`) VALUES
(3, 'This notification for Astrologer ');

-- --------------------------------------------------------

--
-- Table structure for table `astro_support`
--

CREATE TABLE `astro_support` (
  `id` int(11) NOT NULL,
  `question` text NOT NULL,
  `answer` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `astro_support`
--

INSERT INTO `astro_support` (`id`, `question`, `answer`, `date`) VALUES
(1, 'how to schedule times for puja', 'client will decide this', '2020-07-23 11:08:01');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `cat_id` int(55) NOT NULL,
  `blog_title` varchar(255) NOT NULL,
  `blog_image` varchar(255) NOT NULL,
  `blog_description` text NOT NULL,
  `status` varchar(55) DEFAULT 'active',
  `posted_by` varchar(55) NOT NULL DEFAULT 'Admin',
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `astrologer_id` int(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `cat_id`, `blog_title`, `blog_image`, `blog_description`, `status`, `posted_by`, `date`, `astrologer_id`) VALUES
(3, 30, 'Blog Title 1', 'upload/img2.jpg', '<p>Blog Description Here 1</p>\r\n', 'active', '', '2020-07-25 15:22:13', 0),
(4, 29, 'sdrtfgbhjkl, dfghjkl edrtfgyhjkl', 'upload/img3.jpg', '<p>rtyuhjio erftgyhujiko ertyguhj</p>\r\n', 'active', 'Admin', '2021-06-10 13:23:31', 0),
(5, 27, 'gctc  fcfcfcg gvftvfvg bh gvftrcfg bgvtrfctfvf', 'upload/img6.jpg', '<p>wedfvygbgyvyv</p>\r\n', 'active', 'Admin', '2021-06-10 13:23:47', 0),
(6, 32, 'blog title here', 'upload/img31.jpg', '<p>blog description</p>\r\n', 'active', 'Admin', '2021-06-10 17:34:04', 0);

-- --------------------------------------------------------

--
-- Table structure for table `blog_category`
--

CREATE TABLE `blog_category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `status` varchar(55) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_category`
--

INSERT INTO `blog_category` (`cat_id`, `cat_name`, `status`) VALUES
(26, 'Pitru Pujas', 'active'),
(27, 'Shanti Pujas', 'active'),
(28, 'Festival Pujas', 'active'),
(29, 'Paaths', 'active'),
(30, 'Jaaps', 'active'),
(31, 'Hawans', 'active'),
(32, 'Pooja', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `puja_name` varchar(55) NOT NULL,
  `puja_location` varchar(55) NOT NULL,
  `priest_preference` varchar(255) NOT NULL,
  `puja_date` varchar(255) NOT NULL,
  `puja_time` varchar(255) NOT NULL,
  `puja_price` varchar(55) NOT NULL,
  `name` varchar(55) NOT NULL,
  `mobno` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `country` varchar(55) NOT NULL,
  `state` varchar(55) NOT NULL,
  `city` varchar(55) NOT NULL,
  `pincode` varchar(55) NOT NULL,
  `note` varchar(55) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `status` varchar(55) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `puja_name`, `puja_location`, `priest_preference`, `puja_date`, `puja_time`, `puja_price`, `name`, `mobno`, `email`, `country`, `state`, `city`, `pincode`, `note`, `date`, `status`) VALUES
(7, 'Ganesh Puja', 'At Home', 'Hindi', '2020-07-26', '12:00', '2100', 'Vivek', '74859685858', 'vivek@gmail.com', 'India', 'Uttar Pradesh', 'City', '748589', 'note here', '2020-07-25 13:33:22', 'confirm'),
(8, 'Donation For Needy Priests', 'At Home', 'Hindi', '2021-06-26', '08:25', '1000', 'erstfguhi', '234567890', 'test@gmail.com', 'India', 'dfghjkl', 'dfghjk', 'fdghjk', 'dfghjkl', '2021-06-24 23:10:55', 'pending'),
(9, 'Donation For Needy Priests', 'At Home', 'Hindi', '2021-06-26', '08:25', '1000', 'erstfguhi', '234567890', 'test@gmail.com', 'India', 'dfghjkl', 'dfghjk', 'fdghjk', 'dfghjkl', '2021-06-24 23:11:45', 'pending'),
(10, 'Donation For Needy Priests', 'At Home', 'Hindi', '2021-06-25', '02:26', '1000', 'rttdfyhj', 'dtfyuhiokp', 'test@gmail.com', 'dtyguhij', 'tdyuuhij', 'tdyguji', 'tydguij', 'dytguhiojo', '2021-06-24 23:22:50', 'pending'),
(11, 'Donation For Needy Priests', 'At Home', 'Hindi', '2021-06-25', '02:26', '1000', 'rttdfyhj', 'dtfyuhiokp', 'test@gmail.com', 'dtyguhij', 'tdyuuhij', 'tdyguji', 'tydguij', 'dytguhiojo', '2021-06-24 23:23:18', 'confirm'),
(12, 'Shradh', 'At Home', 'Hindi', '2021-06-27', '04:00', '2800', 'rdtfuhjok', 'srdguiokp', 'test@gmail.com', 'rtfgyu', 'dtyfyug', 'rdttfyguh', 'tdyguh', 'tfyguijo', '2021-06-24 23:24:51', 'confirm');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kundali`
--

CREATE TABLE `kundali` (
  `id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `gender` varchar(55) NOT NULL,
  `date` varchar(11) NOT NULL,
  `month` varchar(11) NOT NULL,
  `year` varchar(11) NOT NULL,
  `hour` varchar(11) NOT NULL,
  `minute` varchar(11) NOT NULL,
  `second` varchar(11) NOT NULL,
  `birth_place` varchar(55) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pujas`
--

CREATE TABLE `pujas` (
  `puja_id` int(11) NOT NULL,
  `cat_id` varchar(55) NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `puja_name` varchar(255) NOT NULL,
  `puja_img` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `status` varchar(55) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pujas`
--

INSERT INTO `pujas` (`puja_id`, `cat_id`, `cat_name`, `puja_name`, `puja_img`, `description`, `price`, `status`) VALUES
(5, '8', 'Pujas', 'Annaprashan Puja', 'upload/annaprashan.jpg', '<p>Annaprasana is the ceremony where the baby is introduced with solid foods usually payasa for the first time. The pooja is performed bestow a very healthy and prosperous life for the baby.</p>\r\n', '200', 'active'),
(6, '8', 'Pujas', 'Bhoomi Pooja', 'upload/bhumi_puja1.jpg', '<p>Bhoomi Pooja is performed for Pruthvi Devate and Vastu Purusha who is the lord of directions, five elements of nature. All the negative dosha and evil forces are removed by performing this pooja.</p>\r\n', '', 'active'),
(7, '8', 'Pujas', 'Brihaspati Vrat Udyapan Puja', 'upload/brihaspati.jpg', '<p>Brihaspati Udyapan Puja is performed on 17th Thursday. Lord Vishnu is the main deity for this Vrat Udyapan Puja. Performing this Vrath for 16 Thursdays and doing udyapan on 17th thursday helps one attain happy life and marital happiness.</p>\r\n', '', 'active'),
(8, '8', 'Pujas', 'Durga Puja', 'upload/durga_puja.jpg', '<p>Durga mata is a very powerful deity. Performing this Puja protects us from all our troubles and sufferings. One shall be blessed with a happy life and positivity in life.</p>\r\n', '', 'active'),
(9, '8', 'Pujas', 'Engagement Puja - Sagai', 'upload/engagement.jpg', '<p>Engagement is an occasion where there is a formal agreement to get married and families announce the same to the society. It is also known as betrothal ceremony, Sagai, Ring ceremony, Nishchitartham, roka, chunni, etc.</p>\r\n', '1600', 'active'),
(10, '8', 'Pujas', 'Gand Mool Nakshatra Shanti Puja', 'upload/gand.jpg', '<p>Sataisa Puja is performed when the baby is born in Ashvani, Ashlesha, Magha, Revati, Jyestha and Moola Nakshatras. The child is said to be born in Gand Mool Nakshatras, it is very important to perform Gand mool nakshatra shanti puja for that nakshatra ', '500', 'active'),
(11, '8', 'Pujas', 'Ganesh Puja', 'upload/ganesh_puja.jpg', '<p>Ganesh Puja is performed for Lord Ganapathi who removes all the obstacles and negative energies. This puja bestows one with victory, brings harmony in family and helps one succeed in life.</p>\r\n', '', 'active'),
(12, '8', 'Pujas', 'Graha Shanti Puja', 'upload/graha_shanti_puja.jpg', '<p>Grah Shanti Puja is the set of Poojas and rituals that are performed for Navgrahas for removing all the grah dosh of the person and family performing this puja and havan.</p>\r\n', '', 'active'),
(13, '8', 'Pujas', 'Griha Pravesh', 'upload/griha_pravesh.jpg', '<p>Grih Pravesh Puja</p>\r\n', '', 'active'),
(14, '8', 'Pujas', 'Janamdin Puja - Birthday Puja', 'upload/birthday_puja.jpg', '<p>Janamdin is the one of the most important day in ones life. Janamdin Puja is done on the date of birth and recommended for everyone for happy long life.</p>\r\n', '', 'active'),
(15, '8', 'Pujas', 'Kuber Upasana Puja', 'upload/kuber.jpg', '<p>Kuber Havan is performed for the purpose of gaining, increasing and conserving the existing wealth by appeasing Lord Kuber, who controls the distribution of wealth and prosperity.</p>\r\n', '', 'active'),
(16, '8', 'Pujas', 'Mahalaxmi Puja', 'upload/mahalaxmi.jpg', '<p>MahaLaxmi Puja is performed for the purpose of gaining, conserving the existing wealth and gaining financial stability by appeasing Goddess Laxmi, the Goddess of wealth and prosperity.</p>\r\n', '', 'active'),
(17, '8', 'Pujas', 'Mundan or Chudakarana Ceremony', 'upload/mundan.jpg', '<p>Mundan Ceremony is performed to the child, the hairs are freshly shaven to signify freedom from the past and moving into their new life. Chudakarana is to ensure and pray to the gods to bless the baby and pray that the baby grows up into a healthy and ', '', 'active'),
(18, '8', 'Pujas', 'Namkaran Puja', 'upload/namkaran.jpg', '<p>Namkaran is the naming ceremony of the child, it is very important as it&acirc;&euro;&trade;s the first ceremony of a child&acirc;&euro;&trade;s life grah shanti and havan is performed for the well being of the child and get all the blessings for a hea', '', 'active'),
(19, '8', 'Pujas', 'Office Opening Puja', 'upload/office.jpg', '<p>Many negative dosh and effects are there in new building or place, by performing Office Opening Pooja, blessings of Lord Ganesha and Mata Lakshmi is invoked to negate the power or influence of negative energies and bring in success in the business.</p>', '', 'active'),
(20, '8', 'Pujas', 'Roka Ceremony', 'upload/roka.jpg', '<p>Roka is is an occasion where there is a formal agreement to get married and families announce the same to the society. It&acirc;&euro;&trade;s a Pre-wedding Ceremony.</p>\r\n', '', 'active'),
(21, '8', 'Pujas', 'Rudrabhishek Puja', 'upload/rudrabhishek.jpg', '<p>Rudrabhishek Puja is a very powerful pooja of Lord Shiv. Lord Ram did Rudrabhishekam in Rameswaram to Shiv lingam to get the blessings of Lord Shiv. This puja helps in having a strong mind, good health and getting rid of evil effects.</p>\r\n', '', 'active'),
(22, '8', 'Pujas', 'Saraswati Puja', 'upload/saraswati.jpg', '<p>Mata Saraswati is the deity of intelligence, wisdom, arts, music, memory power and other soft skills. This havan relieves us from mental pressure and improves our concentration, memory power, focus and our ability to understand complex things.</p>\r\n', '', 'active'),
(23, '8', 'Pujas', 'Satyanarayan Puja', 'upload/satyanarayan.jpg', '<p>Satyanarayan Puja is performed to removes all the obstacles and negative energies and gives victory or success, acquire wealth and prosperity and bring harmony in family and success in life.</p>\r\n', '', 'active'),
(24, '8', 'Pujas', 'Shuddhikaran Puja', 'upload/shuddhikaran.jpg', '<p>Shuddhikaran Puja is performed on different occasions like on the 11th day after the childbirth, this ceremony is performed for purifying the house and the members in the home.</p>\r\n', '', 'active'),
(25, '8', 'Pujas', 'Solah Somvar Upyapan Puja', 'upload/solah_somvar.jpg', '<p>Solah Somvar Udyapan Puja is performed on 17th Monday. Bholenath is the main deity for this Vrat Udyapan Puja. Performing this Vrath for 16 Mondays and doing udyapan on 17th monday helps the girl get a good husband and helps in marital bliss.</p>\r\n', '', 'active'),
(26, '8', 'Pujas', 'Vastu Shanti Puja', 'upload/vastu_shanti.jpg', '<p>Vastu Shanti puja is performed for Vastu Purush, lord of directions, five elements of nature to remove negative influences or Vastu dosh of the home or office to have a good and happy life.</p>\r\n', '', 'active'),
(27, '8', 'Pujas', 'Vishwakarma Puja', 'upload/vishwakarma.jpg', '<p>Lord Vishwakarma is the chief deity of all architects and craftsman also known as &acirc;&euro;&tilde;Devashilpi&acirc;&euro;&trade;. This puja is performed to please lord vishwakarma and get his blessings for a happy and a wealthy life.</p>\r\n', '', 'active'),
(28, '8', 'Pujas', 'Vivah(Marriage)', 'upload/vivah.jpg', '<p>Marriage Puja or Wedding Ceremony is one of the most important events in one&acirc;&euro;&trade;s life. It signifies the transitional state from Brahmacharayashram to Grihasthashramam. Performing vivah puja acts as an invitation to the many Gods and Go', '', 'active'),
(29, '8', 'Pujas', 'Yagnopavit Sanskar', 'upload/yagnopavit_sanskar.jpg', '<p>Yagnopavit Sanskar or Upnayan Sanskar is performed to a boy who enters the age of 8. It makes a person fit to receive instruction in the vedas and spread their divine power throughout the world.</p>\r\n', '', 'active'),
(30, '8', 'Hawans', 'Ayush Havan', 'upload/ayush_homam.jpg', '<p>Ayush havan creates positive vibrations and shields you against diseases and other health disorders. Lord Ayurdevata , an incarnation of Lord Vishnu is the chief deity of the havan who is the divine physician for all the three worlds.</p>\r\n', '', 'active'),
(31, '8', 'Hawans', 'Chandi Havan', 'upload/chandi_havan.jpg', '<p>Chandi Havan is performed to receive the blessings of Goddess Chandi Devi. This is one of the most powerful havan one can perform for eliminating all kinds of problems and to ensure a Grand success in Life.</p>\r\n', '', 'active'),
(32, '8', 'Hawans', 'Dhanvantri havan', 'upload/dhanvantri_havan.jpg', '<p>Dhanvantari Havan creates positive vibrations and shields you against diseases and other health disorders. Lord Dhanvantari, an incarnation of Lord Vishnu is the chief deity of the havan who is the divine physician for all the three worlds.</p>\r\n', '', 'active'),
(33, '8', 'Hawans', 'Ganapathi Havan', 'upload/ganapathi_havan.jpg', '<p>Ganapathi Havan is performed to invoke the blessings of Lord Ganapathi at the start of any event or program in your life thereby removing all obstacles and hindrances from your life. Performing Ganapathi havan bestows the person with prosperity, wealth', '', 'active'),
(34, '8', 'Hawans', 'Laxmi Kubera Havan', 'upload/laxmi_kubera.jpg', '<p>Goddess Laxmi and Lord Kubera are the gods of wealth. Laxmi Kubera Havan is a powerful remedy for a person who wants to acquire wealth and prosperity or who is under financial crisis or severe debt in life.</p>\r\n', '', 'active'),
(35, '8', 'Hawans', 'Laxmi Narasimha Havan', 'upload/laxmi_narasimha.jpg', '<p>Laxmi Narasimha Havan is performed to receive the blessings of Goddess Maha Laxmi and Lord Narasimha to ensure an increase in wealth, to win legal issues and court cases and keeping enemies away.</p>\r\n', '', 'active'),
(36, '8', 'Hawans', 'Mrityunjaya Havan', 'upload/mrityunjaya_havan.jpg', '<p>Maha Mrityunjaya havan is performed to receive the blessings of Lord Shiv to avoid untimely death and achieve Victory over death and rejuvenates the person who is fighting against death.</p>\r\n', '', 'active'),
(37, '8', 'Hawans', 'Navagrah Havan', 'upload/navagraha_havan.jpg', '<p>The Navagraha Havan is performed to appease all the nine graha and reduce the malefic effects of the planets in one&acirc;&euro;&trade;s life. These planets influence the day to day events taking place in one&acirc;&euro;&trade;s life.</p>\r\n', '', 'active'),
(38, '8', 'Hawans', 'Rudra Havan', 'upload/rudra_havan.jpg', '<p>Rudra havan is performed to appease Shiva Devaru. Performing this havan reduces the process of death and rejuvenates the person who is fighting against death or against any terminal diseases and bestows them with good health.</p>\r\n', '', 'active'),
(39, '8', 'Hawans', 'Saraswati Havan', 'upload/saraswati_(1).jpg', '<p>Mata Saraswati is the deity of intelligence, wisdom, arts, music, memory power and other soft skills. This havan relieves us from mental pressure and improves our concentration, memory power, focus and our ability to understand complex things.</p>\r\n', '', 'active'),
(40, '8', 'Hawans', 'Sudarshan Havan', 'upload/sudarshan_havan.jpg', '<p>Sudarshan havan is performed for removal of all enemies &amp; avoiding accidents. This is to improve the energy level in the environment and to eliminate undesirable elements.</p>\r\n', '', 'active'),
(41, '8', 'Jaaps', 'Budha Graha Shanti Jaap', 'upload/budha_graha.jpg', '<p>Budha brings unhappiness and all evil effects if the person has Budha dosha present in one&acirc;&euro;&trade;s horoscope. All the bad effects of the Budha Graha Dosha can be overcome by performing this Graha Shanti Jaap.</p>\r\n', '', 'active'),
(42, '8', 'Jaaps', 'Chandra Graha Shanti Jaap', 'upload/chandra_graha.jpg', '<p>Moon is responsible for childhood, pleasures, fertility. Moon brings unhappiness and all Evil effects if it is wrongly placed. All the malefic effects of the Chandra Graha dosha can be nullified by performing this Jaap with full devotion.</p>\r\n', '', 'active'),
(43, '8', 'Jaaps', 'Gayatri Mantra Jaap', 'upload/gayatri_mantra.jpg', '<p>Gayatri Mata considered as the mother of all the four Vedas, Performing this Jaap brings the blessings of Sun, eradicates the sins of past life, helps in getting rid of pitru dosh, enlightens you and enables you to possess divine qualities and success ', '', 'active'),
(44, '8', 'Jaaps', 'Guru Graha Shanti Jaap', 'upload/guru_graha.jpg', '<p>Brihaspati the ruler of all planets, is responsible for intelligence, wisdom, religion, knowledge. Weak Guru brings unhappiness and all evil effects. All the malefic effects of the Guru Graha dosha can be overcome by performing this Jaap.</p>\r\n', '', 'active'),
(45, '8', 'Jaaps', 'Ketu Graha Shanti Jaap', 'upload/ketu_graha.jpg', '<p>People afflicted by malefic ketu suffers from theft, putra dosha, absent-mindedness and loss of property. All the bad effects of the Ketu Graha dosha can be overcome by performing this Jaap.</p>\r\n', '', 'active'),
(46, '8', 'Jaaps', 'Maha Mrityunjay Jaap', 'upload/maha_mrityunjaya_jaap.jpg', '<p>Maha Mrityunjaya Jaap is performed to receive the blessings of Shivji to avoid untimely death and achieve Victory (jaya) over death (Mritya).</p>\r\n', '', 'active'),
(47, '8', 'Jaaps', 'Mangal Graha Shanti Jaap', 'upload/mangal_graha_shanti_jaap.jpg', '<p>When Mars is in a deliberated state in the horoscope, then it brings all evil effects. All the malefic effects of the Mangal Graha dosha can be overcome by performing this Jaap.</p>\r\n', '', 'active'),
(48, '8', 'Jaaps', 'Rahu Graha Shanti Jaap', 'upload/Rahu-Graha-Shanti-Jaap.jpg', '<p>Rahu graha is associated with material manifestation and worldly desires. Rahu brings separations in family and lots of unwanted problems if its wrongly placed. All the malefic effects of the Rahu can be overcome by performing this Jaap.</p>\r\n', '', 'active'),
(49, '8', 'Jaaps', 'Santan Gopal Mantra Jaap', 'upload/Santan-Gopal-Mantra-Jaap.jpg', '<p>Santan means heir and Gopala Krishna is the infant or baby Krishna. Any couple who are having problems in begetting the baby should perform this Jaap to get the blessings from Lord Krishna to get the baby.</p>\r\n', '', 'active'),
(50, '8', 'Jaaps', 'Shani Graha Shanti Jaap', 'upload/Shani-Graha-Shanti-Jaap.jpg', '<p>Shani god signifies judgment, discipline, truthfulness in one&acirc;&euro;&trade;s life. Malefic Shani Graha causes a lot of hurdles in one&acirc;&euro;&trade;s life. All the malefic effects of the Shani Graha dosha can be overcome by performing this J', '', 'active'),
(51, '8', 'Jaaps', 'Shukra Graha Shanti Jaap', 'upload/Shukra-Graha-Shanti-Jaap.jpg', '<p>Shukra Graha governs the attributes like passion, beauty, love, marriage sex etc. performing this Jaap gives the person power to control their sense organs and enables the person to live a happy life full of love and bliss.</p>\r\n', '', 'active'),
(52, '8', 'Jaaps', 'Surya Graha Shanti Jaap', 'upload/Surya-Graha-Shanti-Jaap.jpg', '<p>Surya Devaru is responsible for increasing knowledge, strength, will-power, but when wrongly placed in our horoscope it gives malefic effects. To overcome all these bad effects this graha shanti Jaap should be performed.</p>\r\n', '', 'active'),
(53, '8', 'Paaths', 'Akhand Ramayan Path', 'upload/Akhand-Ramayan-Path.jpg', '<p>Akhand Ramayan Path is the recital of Ramcharit manas continuously without stopping for 24 hours, its performed with bhajans and kirtan in the praise of lord Shri Ram and his life teachings for getting the blessings and having a peaceful life.</p>\r\n', '', 'active'),
(54, '8', 'Paaths', 'Durga Saptashati Path', 'upload/durga_saptashati.jpg', '<p>Durga Saptashati path is dedicated to Durga devi. Performing this path protects and helps us overcome all our troubles and sufferings. This puja also liberates one from evil eyes, fears and curses. its very auspicious to perform during Navratri, or fri', '', 'active'),
(55, '8', 'Paaths', 'Hanuman Chalisa Path', 'upload/Hanuman-Chalisa-Paath.jpg', '<p>Lord Hanuman is one of the chiranjeevis, Performing Hanuman Chalisa paath, helps one get total focus over their mind and body and gets rid of all the fear and invokes the blessings of Lord Hanuman.</p>\r\n', '', 'active'),
(56, '8', 'Paaths', 'Sunderkand Path', 'upload/Sunderkand-Path.jpg', '<p>Sundarkand Path describes Mahaveer Hanuman devotion along with stories of valor, wisdom, faith, dedication, and strength of Lord Hanuman. Performing this Path in our home gives us mental and physical strength and helps in getting rid of daridrata and i', '', 'active'),
(57, '8', 'Festival Pujas', 'Diwali Laxmi Puja', 'upload/Diwali-Lakshmi-Puja.jpg', '<p>Diwali Lakshmi Puja is performed for the purpose of gaining, conserving the existing wealth and gaining financial stability by appeasing Goddess Laxmi, the Goddess of wealth and prosperity.</p>\r\n', '', 'active'),
(58, '8', 'Festival Pujas', 'Dussehra Puja', 'upload/Dussehra-Puja.jpg', '<p>Dussehra or Vijaya Dashami festival celebrates the triumph of good over evil and falls on the tenth day after Navratri. Dussehra is considered to be an auspicious day to start any new venture or the start of anything new.</p>\r\n', '', 'active'),
(59, '8', 'Festival Pujas', 'Ganesh Sthapana And visarjan Puja', 'upload/ganesh_sthapana.jpg', '<p>Ganesh puja is performed for Lord Ganapathi who removes all the obstacles and negative energies. This puja bestows one with victory, brings harmony in family and helps one succeed in life.</p>\r\n', '', 'active'),
(60, '8', 'Festival Pujas', 'Hartalika Teej Puja', 'upload/Hartalika-Teej-Puja.jpg', '<p>Hartalika Teej is celebrated by women by Observing fast to seek long life and prosperity of their husband and unmarried women keep fast to seek husband just like Lord Shiva.</p>\r\n', '', 'active'),
(61, '8', 'Festival Pujas', 'Holika Puja', 'upload/Holika-Puja.jpg', '<p>This occasion signifies marking an end to all the evil thoughts and getting rid of all the sins from our life and help the person lead a happy life with Lord&acirc;&euro;&trade;s blessings.</p>\r\n', '', 'active'),
(62, '8', 'Festival Pujas', 'Janmashtami Puja', 'upload/Janmashtami-Puja.jpg', '<p>In Janmashtami, Janma means &acirc;&euro;&tilde;Birth&acirc;&euro;&trade; and Ashtami means the &acirc;&euro;&tilde;Eighth Day&acirc;&euro;&trade;. Performing Krishna Janmashtami Puja on this day is considered very auspicious to invoke the blessings of', '', 'active'),
(63, '8', 'Festival Pujas', 'Navratri Kalash Sthapana Puja And Havan', 'upload/Navratri-Kalash-Sthapana-Puja-And-Havan.jpg', '<p>Navratri is celebrated in the glory of mata Durga, Kalash sthapana puja is performed on the first day of the navratri and havan is performed on the ninth day, its very auspiicious and beneficial to perform chandi path during navratri.</p>\r\n', '', 'active'),
(64, '8', 'Festival Pujas', 'Tulsi Vivah Puja', 'upload/Tulsi-Vivah-Puja.jpg', '<p>Tulsi Vivah Puja involves the marriage between the Lord Krishna and Tulsi Plant. Tulsi or basil plant is considered to be a very sacred plant by Hindus.</p>\r\n', '', 'active'),
(65, '8', 'Festival Pujas', 'Govardhan Puja', 'govardhan.jpg', '<p>Govardhan Puja as it is also known, is a Hindu festival in which devotees prepare and offer a large variety of vegetarian food to Bhagwan Shri Krishna as a mark of gratitude</p>\r\n', '', 'active'),
(66, '8', 'Shanti Pujas', 'Guru Chandal Yoga Shanti', 'upload/chandal-yog-shanti-puja.jpg', '<p>Guru Chandal Yog Shanti is performed for overcoming all the problems coming due to the Yuti of Guru with Rahu or Ketu Graha. Helps in attaining happy life and increases focus and maintains happy relations.</p>\r\n', '', 'active'),
(67, '8', 'Shanti Pujas', 'Kaal Sarp Dosh Puja', 'upload/kaal-sarp-dosh-puja.png', 'When all the planets come between Rahu and Ketu than Kaal Sarpa Dosha occurs. A person faces lots of hardships due to this dosh. By performing this shanti all the negative effects are nullified.', '', 'active'),
(68, '8', 'Shanti Pujas', 'Shani Chandra Vish Yog Nivaran', 'upload/shani-chandra-vish-yog-shanti.jpg', 'Shani and Chandra Vish Yog Shanti is performed for overcoming all the problems coming due to the Yuti of both the grahas.', '', 'active'),
(69, '7', 'Shanti Pujas', 'Shani Chandra Vish Yog Nivaran', 'shani-chandra-vish-yog-shanti.jpg', 'Shani and Chandra Vish Yog Shanti is performed for overcoming all the problems coming due to the Yuti of both the grahas.', '11800', 'active'),
(70, '8', 'Shanti Pujas', 'Shani Ketu Shrapit Dosh Nivaran', 'upload/Shani-Ketu-Shrapit-Dosh.jpg', 'Shani Ketu Shrapit Dosh Nivaran\r\nShani Ketu Shrapit Dosh Shanti is performed for overcoming all the problems coming due to the Yuti of both the grahas. attain stability in professional and Business life', '', 'active'),
(71, '8', 'Shanti Pujas', 'Vishti Karan(Bhadra)Shanti Puja', 'upload/Vishti-Karan-Shanti-puja.jpg', 'Vishti karan is one among the 11 Karanas , when a person born under the Vishti yog has a very impatient nature and gets many health-related problems. Performing Vishti Yog Shanti helps in removing all the ill effects and helps the person attain peace and ', '', 'active'),
(72, '8', 'Shanti Pujas', 'Mangal Dosh Shanti Puja', 'upload/mangal_dosh.jpg', 'Mangala Dosha, also known as Mangal Dosh because of schwa deletion, is a Hindu superstition prevalent in India. A person born under the influence of Mars as per Hindu astrology is said to have \"mangala dosha\" such a person is called a Mangalik.', '', 'active'),
(73, '8', 'Pitru Pujas', 'Amavasya Tarpan', 'upload/Tarpanam.jpg', 'Tarpan is to please our ancestors and satisfy them by offering water mixed with Black Til. Ancestors ie Pithrus, since they have left the world are dependent on only their younger generation to feed them. This feeding is done through Tarpan. It is importa', '', 'active'),
(74, '8', 'Pitru Pujas', 'Antim Sanskar-Last Rites', 'upload/Antim-Sanskar-Last-Rites.jpg', 'Antim Sanskar is the set of rituals performed for the person who dies so that their Soul gets peace and they go to the Pitru lok happily without any problem.', '', 'active'),
(75, '8', 'Pitru Pujas', 'Barsi Ceremony', 'upload/Barsi-Puja.jpg', 'The Barsi Ceremony is the First year Shradh ceremony performed for the departed soul. Eldermost son performs the shradh and other members participate in the ceremony and brahman bhojan is given to get the blessings from our pitrus.', '', 'active'),
(76, '8', 'Pitru Pujas', 'Brahmin For Bhojan', 'upload/Brahmin-Bhojan.jpg', 'A Brahmin Bhoj is an Ancient Custom of offering food to Brahmins since they represent God, to get the blessings of our pitrus. Brahmin Bhojan Can be arranged for any ceremonies like Marriage, Shradh, Pitru paksha.', '', 'active'),
(77, '8', 'Pitru Pujas', 'Donation For Needy Priests', 'upload/DonateNow.jpg', 'Donate for the poor Priest families who are most suffering in this Corona lockdown across the country. Your small donation can make a huge difference in the life of their family. The Coronavirus COVID-19 has spread across all the countries and infected th', '', 'active'),
(78, '8', 'Pitru Pujas', 'Pitru Paksha (Mahalaya) Shradh Puja', 'upload/Pitru-paksha.jpg', 'Pitru paksha or Mahalaya paksha is a 15 lunar days period wherein our pitrus are allowed to come to earth and Eldermost son performs the shradh and other members participate in the ceremony and brahman bhojan is given to get the blessings from our pitrus.', '', 'active'),
(79, '8', 'Pitru Pujas', 'Shradh', 'upload/Shradh.jpeg', 'The Shradh Ceremony is offering food for your pithrus in the pithru loga and thus satisfying their atma enabling us to receive the blessings of the Pitrus. This Shradh Ceremony can be done as Hiranya or it can be performed along with the havan.', '', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `puja_category`
--

CREATE TABLE `puja_category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `cat_status` varchar(55) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `puja_category`
--

INSERT INTO `puja_category` (`cat_id`, `cat_name`, `cat_status`) VALUES
(2, 'Pujas', 'active'),
(3, 'Hawans', 'active'),
(4, 'Jaaps', 'active'),
(5, 'Paaths', 'active'),
(6, 'Festival Pujas', 'active'),
(7, 'Shanti Pujas', 'active'),
(8, 'Pitru Pujas', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `puja_location`
--

CREATE TABLE `puja_location` (
  `id` int(11) NOT NULL,
  `location` varchar(255) NOT NULL,
  `puja_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `puja_location`
--

INSERT INTO `puja_location` (`id`, `location`, `puja_id`) VALUES
(1, 'lucknow', '5'),
(3, 'Varanasi ', '18');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `id` int(11) NOT NULL,
  `report_type` varchar(255) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `mobno` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `dot` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `marital_status` varchar(255) NOT NULL,
  `employed_in` varchar(255) NOT NULL,
  `language` varchar(255) NOT NULL,
  `partner_name` varchar(255) NOT NULL,
  `partner_dob` varchar(255) NOT NULL,
  `partner_dot` varchar(255) NOT NULL,
  `partner_city` varchar(255) NOT NULL,
  `partner_state` varchar(255) NOT NULL,
  `partner_country` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `astrologer_email` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `amount` varchar(255) NOT NULL,
  `astro_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `report` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`id`, `report_type`, `f_name`, `l_name`, `gender`, `mobno`, `dob`, `dot`, `city`, `state`, `country`, `marital_status`, `employed_in`, `language`, `partner_name`, `partner_dob`, `partner_dot`, `partner_city`, `partner_state`, `partner_country`, `comment`, `astrologer_email`, `status`, `date`, `amount`, `astro_name`, `user_email`, `report`) VALUES
(3, 'Love and Relationship Report', 'Vivek', 'Gupta', 'Male', '7485968587', '2000-02-01', '02:03', 'tryguhkj', 'xfthjkxfg', 'chjk', 'Single', 'Private Sector', 'Hindi', 'dxfgchvjbk', '2007-01-01', '02:56', 'tdfyhij', 'dxfgcvbhjk', 'gfchbjkl', 'ddxtfgvhbjk', 'vivek@gmail.com', 'pending', '0000-00-00 00:00:00', '1400', 'Vivek', 'vivek@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `transaction_history`
--

CREATE TABLE `transaction_history` (
  `id` int(11) NOT NULL,
  `payment_id` varchar(255) NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `payment_mode` varchar(255) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `gross_amount` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction_history`
--

INSERT INTO `transaction_history` (`id`, `payment_id`, `order_id`, `payment_mode`, `email_id`, `gross_amount`, `date`) VALUES
(1, '78494-52019-77719-01029', '15956524092414', 'Credit Card', 'vivek@gmail.com', '10', '2020-07-25 10:49:01'),
(2, '96682-20797-14577-07047', '15956544502388', 'Credit Card', 'vivek@gmail.com', '50', '2020-07-25 10:51:25'),
(3, '09871-49520-76827-82907', '15956553702885', 'Credit Card', 'vivek@gmail.com', '10', '2020-07-25 11:07:35'),
(4, '49518-08907-62279-01797', '15956555053695', 'Credit Card', 'vivek@gmail.com', '10', '2020-07-25 11:09:25'),
(5, '80075-19820-74270-97490', '16245472062905', 'Credit Card', 'test@gmail.com', '5000', '2021-06-24 20:37:15'),
(6, '18770-02904-79727-81527', '16245595692205', 'Credit Card', 'test@gmail.com', '500', '2021-06-25 00:03:19'),
(7, '32759-41480-28097-78077', '16245597755951', 'Credit Card', 'test@gmail.com', '500', '2021-06-25 00:06:46');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `f_name` varchar(55) NOT NULL,
  `l_name` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `balance` varchar(55) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `f_name`, `l_name`, `email`, `password`, `date`, `balance`) VALUES
(3, 'test first name', 'testing last name', 'deepy.kumar4@gmail.com', '123', '2020-09-28 06:38:59', '0'),
(4, 'kugubl', 'yghj', 'ghuhgh@ghghkj.ugu', '00000000', '2021-06-10 08:48:25', '0'),
(6, 'xtcvjh', 'srtdfygjh', 'test@gmail.com', 'admin', '2021-06-24 20:34:41', '700');

-- --------------------------------------------------------

--
-- Table structure for table `wallet_history`
--

CREATE TABLE `wallet_history` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wallet_history`
--

INSERT INTO `wallet_history` (`id`, `email`, `description`, `amount`, `date`) VALUES
(1, 'vivek@gmail.com', 'Annaprashan Puja', '2500', '2020-07-25 13:25:53'),
(2, 'vivek@gmail.com', 'Ganesh Puja', '2100', '2020-07-25 13:33:23'),
(3, 'vivek@gmail.com', 'Love and Relationship Report', '1400', '2020-07-27 12:14:53'),
(4, 'test@gmail.com', 'Donation For Needy Priests', '1000', '2021-06-24 23:23:18'),
(5, 'test@gmail.com', 'Shradh', '2800', '2021-06-24 23:24:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `astrologers`
--
ALTER TABLE `astrologers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `astro_mall`
--
ALTER TABLE `astro_mall`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `astro_mall_category`
--
ALTER TABLE `astro_mall_category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `astro_notification`
--
ALTER TABLE `astro_notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `astro_support`
--
ALTER TABLE `astro_support`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_category`
--
ALTER TABLE `blog_category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kundali`
--
ALTER TABLE `kundali`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pujas`
--
ALTER TABLE `pujas`
  ADD PRIMARY KEY (`puja_id`);

--
-- Indexes for table `puja_category`
--
ALTER TABLE `puja_category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `puja_location`
--
ALTER TABLE `puja_location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction_history`
--
ALTER TABLE `transaction_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wallet_history`
--
ALTER TABLE `wallet_history`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `astrologers`
--
ALTER TABLE `astrologers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `astro_mall`
--
ALTER TABLE `astro_mall`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `astro_mall_category`
--
ALTER TABLE `astro_mall_category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `astro_notification`
--
ALTER TABLE `astro_notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `astro_support`
--
ALTER TABLE `astro_support`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `blog_category`
--
ALTER TABLE `blog_category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kundali`
--
ALTER TABLE `kundali`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pujas`
--
ALTER TABLE `pujas`
  MODIFY `puja_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `puja_category`
--
ALTER TABLE `puja_category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `puja_location`
--
ALTER TABLE `puja_location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `transaction_history`
--
ALTER TABLE `transaction_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `wallet_history`
--
ALTER TABLE `wallet_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
