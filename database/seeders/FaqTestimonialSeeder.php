<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FaqTestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sql = "
INSERT INTO `faqs` (`id`, `title`, `body`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Amela', '<p>Quis voluptatum est .</p>', 1, '2021-10-15 06:21:41', '2021-10-15 06:21:41'),
(2, 'Allen', '<p>In modi omnis dolore.</p>', 1, '2021-10-15 06:21:47', '2021-10-15 06:21:47');
";

        DB::statement($sql);

        $page = "INSERT INTO `pages` (`id`, `title`, `slug`, `body`, `status`, `created_at`, `updated_at`) VALUES
(2, 'asdf', 'asdf', 'sdfasdfasdfdf', 0, '2022-01-30 10:47:08', '2022-01-30 10:47:08'),
(3, 'asdfasdfsdf', 'asdf3', 'asdfdasfasdf', 0, '2022-01-30 10:47:35', '2022-01-30 10:47:35');";
        DB::statement($page);

        $twst = "
INSERT INTO `testimonials` (`id`, `name`, `user_letter`, `dept_batch`, `message`, `status`, `created_at`, `updated_at`) VALUES
(5, 'Sanjida Afrin', 'S', 'CE\'17', 'It\'s actually a great help for the students . We have some topics about which we don\'t have any idea before then pl tutorials really helps us . We find notes class lecture lab reports drawing methods etc etc that is greatly helpful for all of us .', 1, '2018-06-10 16:21:29', '2018-06-10 16:21:29'),
(6, 'Ahmed Salman', 'A', 'CE\'15', 'It\'s great. literally it\'s great. and it\'s the reason of many of us\'s success.', 1, '2018-06-10 16:22:00', '2018-06-10 16:22:00'),
(7, 'Ragib noor', 'R', 'CE\'17', 'Helpful though but some articles may be full with virus or for other causes they can\' t be run over all it is a good site to get prepared for the exam in a short time?', 1, '2018-06-10 16:22:48', '2018-06-10 16:22:48'),
(8, 'Maiesha Tabassum', 'M', 'CE\'15', 'this website has really been very useful. all the contents are worthy of visitng the site and downloading them.', 1, '2018-06-10 16:23:26', '2018-06-10 16:23:26'),
(9, 'Atiya Anika', 'A', 'CE\'15', 'Whenever I am tired of finding any type of study material provided by the teachers, PL tutorial works there as a bliss. It undoubtedly saves time.', 1, '2018-06-10 16:24:03', '2018-06-10 16:24:03'),
(10, 'Md.Mehedi Hasan', 'M', 'CE\'15', 'I think it\'s  an awesome website for every civil engineering student.I get all the necessary  notes, books, data, lectures from it.', 1, '2018-06-20 18:04:13', '2018-06-20 18:04:13'),
(11, 'Md Rasel Hossain', 'R', 'CE\'16', 'Actually, who create this site gratitude and deep respect from the core of the heart. You are doing a great job for buet student of CE dept. Without this site  buet civil life would be partial, unfilled.', 1, '2018-06-20 18:07:58', '2018-06-20 18:07:58'),
(12, 'Mehedi Hasan Shakil', 'M', 'CE\'16', 'It\'s a great website where we can find our course materials.The difficulty we mainly face is to collect our study materials.We don\'t know where to look at.But for pl tutorials,we can have the data in a single place without wasting our time.\r\nThanks for the good work and Eid Mubarak :)', 1, '2018-06-20 18:09:28', '2018-06-20 18:09:28'),
(13, 'Mir Tanvir Al Biruni', 'T', 'CE\'15', 'You won\'t get 100% accuracy in course materials as there may be changes in course teacher but you\'ll get a complete idea of any CE undergrad (BUET) course here. Hats off to you guys for your wonderful and selfless work and may the Almighty bless you.', 1, '2018-06-20 18:10:24', '2018-06-20 18:10:24'),
(14, 'Hasibur Hridoy', 'H', 'CE\'15', 'PL_tutorial is playing a vital role for students like us who look for previous lectures, notes and other accessory materials.\r\n#LOVE_THIS_SITE', 1, '2018-06-20 18:12:47', '2018-06-20 18:12:47'),
(15, 'Nishat Tasnim', 'N', 'CE\'15', 'Can\'t imagine what would happen without pl tutorials <3 Wishing for the best for this lifesaver ^_^', 1, '2018-09-29 14:28:27', '2021-09-14 08:12:21'),
(17, 'Wayne', 'W', 'Eos dignissimos aliq', 'Mollit quibusdam ea', 0, '2021-09-14 08:12:43', '2021-09-14 08:12:43');
";
        DB::statement($twst);
    }
}