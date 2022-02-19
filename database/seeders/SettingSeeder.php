<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $qel = "
INSERT INTO `settings` (`id`, `key`, `value`, `fa5_icon`, `fa4_icon`, `created_at`, `updated_at`) VALUES
(5, 'email', 'pltutorialsbuet@gmail.com', 'fas fa-eye-slash', 'fa-envelope-open-o', '2021-09-14 07:38:54', '2021-09-14 07:38:54'),
(6, 'facebook', 'https://www.facebook.com/thepltutorials/', NULL, NULL, '2021-09-14 07:39:16', '2021-09-14 07:39:16'),
(7, 'messenger', 'm.me/thepltutorials', NULL, NULL, '2021-09-14 07:39:26', '2021-09-14 07:39:26'),
(8, 'hero-title', 'next pl in', NULL, NULL, '2021-09-14 07:39:56', '2021-09-14 07:39:56'),
(9, 'youtube', 'https://www.youtube.com/c/PLTutorials', NULL, NULL, '2021-09-14 07:40:10', '2021-09-14 07:40:10');
";

        DB::statement($qel);
    }
}
