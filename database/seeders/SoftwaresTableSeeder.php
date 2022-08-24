<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SoftwaresTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('softwares')->delete();
        
        \DB::table('softwares')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Ansys 18.1',
                'author' => 'ansys',
                'department_slug' => 'ce',
                'level_term_slug' => '4-1',
                'course_id' => NULL,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'software',
                'link' => 'https://btdb.to/torrent/xD0jabvODDSpWQPY8VabiOZjBA2MvXt817N.html',
                'image' => 'ansys_1_1529842738.jpg',
                'status' => '1',
                'custom_message' => '<h4>download link 2: <a href="https://www.idope.se/torrent/h/542ff40a3582cf706e023a7c6840ac820ff3d38a/">https://www.idope.se/torrent/h/542ff40a3582cf706e023a7c6840ac820ff3d38a/</a></h4><h4>download link 3: <a href="https://monova.to/542FF40A3582CF706E023A7C6840AC820FF3D38A" target="_blank">https://monova.to/542FF40A3582CF706E023A7C6840AC820FF3D38A</a><br></h4><h3>Installation Procedure:</h3><p><iframe src="//www.youtube.com/embed/0cuygWIFhug" class="note-video-clip" frameborder="0" width="640" height="360"></iframe><br></p>',
                'description' => 'Ansys 18.1 ansys ce ansys_1_1529842738.jpg <h4>download link 2: <a href="https://www.idope.se/torrent/h/542ff40a3582cf706e023a7c6840ac820ff3d38a/">https://www.idope.se/torrent/h/542ff40a3582cf706e023a7c6840ac820ff3d38a/</a></h4><h4>download link 3: <a href="https://monova.to/542FF40A3582CF706E023A7C6840AC820FF3D38A" target="_blank">https://monova.to/542FF40A3582CF706E023A7C6840AC820FF3D38A</a><br></h4><h3>Installation Procedure:</h3><p><iframe src="//www.youtube.com/embed/0cuygWIFhug" class="note-video-clip" frameborder="0" width="640" height="360"></iframe><br></p>',
                'created_at' => '2018-06-24 21:18:58',
                'updated_at' => '2018-06-24 21:18:58',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'PVT Vissim 6',
                'author' => 'PVT',
                'department_slug' => 'ce',
                'level_term_slug' => '4-1',
                'course_id' => NULL,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'software',
                'link' => 'https://drive.google.com/file/d/1z29rpRdPE76UqLgy6DmrhnAbcgcZKF7G/view?usp=sharing',
                'image' => 'vissim_1_1529843977.png',
                'status' => '1',
                'custom_message' => '<h3>Installation Procedure:</h3><p><iframe src="//www.youtube.com/embed/ps6VZX9z8Fg" class="note-video-clip" frameborder="0" width="640" height="360"></iframe><br></p>',
                'description' => 'PVT Vissim 6 PVT ce 4-1 <h3>Installation Procedure:</h3><p><iframe src="//www.youtube.com/embed/ps6VZX9z8Fg" class="note-video-clip" frameborder="0" width="640" height="360"></iframe><br></p>',
                'created_at' => '2018-06-24 21:27:40',
                'updated_at' => '2018-06-28 13:20:44',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Grasp & Gear',
                'author' => NULL,
                'department_slug' => 'ce',
                'level_term_slug' => '3-2',
                'course_id' => 15,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'software',
                'link' => 'http://www.mediafire.com/file/qw3nk9q0t3nqv7i/Grasp+%26+Gear+%28pl-tutorials.weebly.com%29.rar',
                'image' => '',
                'status' => '1',
                'custom_message' => '<p><iframe src="//www.youtube.com/embed/g2Rn0xhlkx0" class="note-video-clip" frameborder="0" width="640" height="360"></iframe><br></p>',
                'description' => 'Grasp & Gear  ce  <p><iframe src="//www.youtube.com/embed/g2Rn0xhlkx0" class="note-video-clip" frameborder="0" width="640" height="360"></iframe><br></p>',
                'created_at' => '2018-06-24 21:46:29',
                'updated_at' => '2018-06-24 21:46:29',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'CSI Etabs 9.7.2',
            'author' => 'Computers and Structures(CSI)',
                'department_slug' => 'ce',
                'level_term_slug' => '4-1',
                'course_id' => 53,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'software',
                'link' => 'https://drive.google.com/file/d/0B_elY4W6sGj5TndpRjIySG9PXzg/view?usp=sharing',
                'image' => 'etbas_1_1529844747.jpg',
                'status' => '3',
                'custom_message' => '<p><iframe src="//www.youtube.com/embed/_yngpXHqXXo" class="note-video-clip" frameborder="0" width="640" height="360"></iframe><br></p>',
            'description' => 'CSI Etabs 9.7.2 Computers and Structures(CSI) ce 4-1 <p><iframe src="//www.youtube.com/embed/_yngpXHqXXo" class="note-video-clip" frameborder="0" width="640" height="360"></iframe><br></p>',
                'created_at' => '2018-06-24 21:52:27',
                'updated_at' => '2019-07-20 00:46:51',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'CSI SAP 2000 v14',
            'author' => 'Computers and Structures(CSI)',
                'department_slug' => 'ce',
                'level_term_slug' => '3-2',
                'course_id' => 15,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'software',
                'link' => 'http://www.mediafire.com/file/xt0yqt3fyj4tj22/sap2000v14advance.rar/file',
                'image' => 'sap_1_1529845209.jpg',
                'status' => '1',
            'custom_message' => '<p><br></p><h4><span style="color: rgb(0, 0, 255);">see the video description for more download links</span><br></h4><p><iframe src="//www.youtube.com/embed/1QYlCHr4cCk" class="note-video-clip" width="640" height="360" frameborder="0"></iframe><br></p>',
            'description' => 'CSI SAP 2000 v14 Computers and Structures(CSI) ce 3-2 <p><br></p><h4><span style="color: rgb(0, 0, 255);">see the video description for more download links</span><br></h4><p><iframe src="//www.youtube.com/embed/1QYlCHr4cCk" class="note-video-clip" width="640" height="360" frameborder="0"></iframe><br></p>',
                'created_at' => '2018-06-24 22:00:09',
                'updated_at' => '2020-07-20 01:05:38',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'CSI SAP 2000 v19',
            'author' => 'Computers and Structures(CSI)',
                'department_slug' => 'ce',
                'level_term_slug' => '3-2',
                'course_id' => 15,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'software',
                'link' => 'https://www.dropbox.com/s/dkbh95a6vmws93c/CSI%20SAP2000%20Version%2019.1.0%20Build%201321.zip?dl=0',
                'image' => 'sap19_1_1529845384.jpg',
                'status' => '1',
                'custom_message' => '<p><iframe src="//www.youtube.com/embed/FBs6YbBn-Wg" class="note-video-clip" frameborder="0" width="640" height="360"></iframe><br></p>',
            'description' => 'CSI SAP 2000 v19 Computers and Structures(CSI) ce 3-2 <p><iframe src="//www.youtube.com/embed/FBs6YbBn-Wg" class="note-video-clip" frameborder="0" width="640" height="360"></iframe><br></p>',
                'created_at' => '2018-06-24 22:03:04',
                'updated_at' => '2019-07-20 01:06:38',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'MS Visual C++ 6.0',
                'author' => 'Microsoft',
                'department_slug' => 'ce',
                'level_term_slug' => '2-1',
                'course_id' => 42,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'software',
                'link' => 'https://drive.google.com/file/d/0B_elY4W6sGj5UElHU04zODcxX2c/view?usp=sharing',
                'image' => 'vs6_1_1529845558.jpg',
                'status' => '1',
                'custom_message' => '<p><iframe src="//www.youtube.com/embed/2U3zZLP6jmA" class="note-video-clip" frameborder="0" width="640" height="360"></iframe><br></p>',
                'description' => 'MS Visual C++ 6.0 Microsoft ce 2-1 <p><iframe src="//www.youtube.com/embed/2U3zZLP6jmA" class="note-video-clip" frameborder="0" width="640" height="360"></iframe><br></p>',
                'created_at' => '2018-06-24 22:05:58',
                'updated_at' => '2018-06-24 22:06:34',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'AutoCAD 2007',
                'author' => 'Autodesk',
                'department_slug' => 'ce',
                'level_term_slug' => '1-2',
                'course_id' => 6,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'software',
                'link' => 'https://mega.nz/file/aZpmTYoB#2X7mWgEZGG-j6u2-CqBqKMhVmD2sB2q8g5Q_30yx6q8',
                'image' => 'ACAD-2007-Crack_1_1529845814.jpg',
                'status' => '1',
                'custom_message' => '<p>Installation Video: </p><p><a href="https://drive.google.com/file/d/0B_elY4W6sGj5Y1piQUsySnItNlE/view?usp=sharing">https://drive.google.com/file/d/0B_elY4W6sGj5Y1piQUsySnItNlE/view?usp=sharing</a><a href="https://drive.google.com/file/d/0B_elY4W6sGj5Y1piQUsySnItNlE/view?usp=sharing" target="_blank"><br><br></a>alternative links: <br><br><a href="https://share.multcloud.link/share/064fe476-fce0-468a-ad64-aca7b709fce6">https://share.multcloud.link/share/064fe476-fce0-468a-ad64-aca7b709fce6</a><br><a href="https://mega.nz/file/aZpmTYoB#2X7mWgEZGG-j6u2-CqBqKMhVmD2sB2q8g5Q_30yx6q8">https://mega.nz/file/aZpmTYoB#2X7mWgEZGG-j6u2-CqBqKMhVmD2sB2q8g5Q_30yx6q8</a></p><p>https://drive.google.com/file/d/0B_elY4W6sGj5cW5hYTFfS1hwRXc/view?usp=sharing<br></p><p><br></p>',
                'description' => 'AutoCAD 2007 Autodesk ce 1-2 <p>Installation Video: </p><p><a href="https://drive.google.com/file/d/0B_elY4W6sGj5Y1piQUsySnItNlE/view?usp=sharing">https://drive.google.com/file/d/0B_elY4W6sGj5Y1piQUsySnItNlE/view?usp=sharing</a><a href="https://drive.google.com/file/d/0B_elY4W6sGj5Y1piQUsySnItNlE/view?usp=sharing" target="_blank"><br><br></a>alternative links: <br><br><a href="https://share.multcloud.link/share/064fe476-fce0-468a-ad64-aca7b709fce6">https://share.multcloud.link/share/064fe476-fce0-468a-ad64-aca7b709fce6</a><br><a href="https://mega.nz/file/aZpmTYoB#2X7mWgEZGG-j6u2-CqBqKMhVmD2sB2q8g5Q_30yx6q8">https://mega.nz/file/aZpmTYoB#2X7mWgEZGG-j6u2-CqBqKMhVmD2sB2q8g5Q_30yx6q8</a></p><p>https://drive.google.com/file/d/0B_elY4W6sGj5cW5hYTFfS1hwRXc/view?usp=sharing<br></p><p><br></p>',
                'created_at' => '2018-06-24 22:10:14',
                'updated_at' => '2022-06-06 02:16:29',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Foxit Reader',
                'author' => 'Foxit',
                'department_slug' => '',
                'level_term_slug' => '',
                'course_id' => NULL,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'software',
                'link' => 'https://drive.google.com/file/d/1dfbi0jcV87fs6j39-OTxVjOZSJ51EC30/view?usp=sharing',
                'image' => 'foxit4_1_1530258887.png',
                'status' => '1',
                'custom_message' => '<p>PDF files are widely used for their high compression and increased 
quality when it comes to containing images, forms or formatted texts. 
And since Windows does not provide native support for this format, a 
specialized application is required to access their contents, such as 
Foxit Reader. Specifically designed to work with PDF files in the 
easiest way ever, Foxit Reader is an intuitive application that serves 
its purpose pretty well: it opens PDFs instantly without bothering the 
user too much and, at the same time, offering them some very interesting
goodies.</p>',
                'description' => 'Foxit Reader Foxit  foxit4_1_1530258887.png <p>PDF files are widely used for their high compression and increased 
quality when it comes to containing images, forms or formatted texts. 
And since Windows does not provide native support for this format, a 
specialized application is required to access their contents, such as 
Foxit Reader. Specifically designed to work with PDF files in the 
easiest way ever, Foxit Reader is an intuitive application that serves 
its purpose pretty well: it opens PDFs instantly without bothering the 
user too much and, at the same time, offering them some very interesting
goodies.</p>',
                'created_at' => '2018-06-29 16:54:47',
                'updated_at' => '2018-06-29 16:54:47',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'CSI Col 9',
            'author' => 'Computers and Structures(CSI)',
                'department_slug' => 'ce',
                'level_term_slug' => '',
                'course_id' => NULL,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'software',
                'link' => 'https://www.dropbox.com/s/fia607obobnfskx/CSICOL%209.zip?dl=0',
                'image' => 'screenshot-2018-1-3-reinforced-concrete-column-design-software-csicol_1_1530619834.jpg',
                'status' => '1',
                'custom_message' => '<p><span style="font-family: "Impact";" impact";"="">Alternative link:</span> <a href="http://www.mediafire.com/file/esfsdt8qhq7pars/CSICOL_9.zip/file">http://www.mediafire.com/file/esfsdt8qhq7pars/CSICOL_9.zip/file</a><br></p><p><span style="font-family: "Impact";" impact";"="">Courtesy:</span><span style="font-family: "Impact";"> </span>Partho Protim Barua[CE\'11]</p>',
            'description' => 'CSI Col 9 Computers and Structures(CSI) ce  <p><span style="font-family: "Impact";" impact";"="">Alternative link:</span> <a href="http://www.mediafire.com/file/esfsdt8qhq7pars/CSICOL_9.zip/file">http://www.mediafire.com/file/esfsdt8qhq7pars/CSICOL_9.zip/file</a><br></p><p><span style="font-family: "Impact";" impact";"="">Courtesy:</span><span style="font-family: "Impact";"> </span>Partho Protim Barua[CE\'11]</p>',
                'created_at' => '2018-07-03 21:10:34',
                'updated_at' => '2019-07-20 00:58:42',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'STAADPro v8i',
                'author' => 'Bentley',
                'department_slug' => 'ce',
                'level_term_slug' => '',
                'course_id' => NULL,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'software',
                'link' => 'https://drive.google.com/file/d/1WX3ylEhsSsT1MjYePs2GgvJ_oHfT37pk/view?usp=sharing',
                'image' => 'bentley-staad-pro-v8i-selectseries_1_1530640320.jpg',
                'status' => '1',
                'custom_message' => '<div class="page-title">
<h1>        
3D Structural Analysis and Design Software
</h1>
</div>








<div id="content_1_innercontent_1_pnlIntroText" class="intro-text">

<p>Confidently design any type of structure and share 
your synchronized model data among your design team, in one integrated 
set of applications. Complete your steel, concrete, timber, aluminum, 
and cold-formed steel projects, on time and in budget, regardless of 
complexity. Design structures anywhere in the world with confidence 
using over 90 international codes, reducing your team’s need to learn 
multiple software applications. Increase your design productivity with 
streamlined workflows to reduce duplication of effort and eliminate 
errors.</p>                

</div>',
                'description' => 'STAADPro v8i Bentley ce  <div class="page-title">
<h1>        
3D Structural Analysis and Design Software
</h1>
</div>








<div id="content_1_innercontent_1_pnlIntroText" class="intro-text">

<p>Confidently design any type of structure and share 
your synchronized model data among your design team, in one integrated 
set of applications. Complete your steel, concrete, timber, aluminum, 
and cold-formed steel projects, on time and in budget, regardless of 
complexity. Design structures anywhere in the world with confidence 
using over 90 international codes, reducing your team’s need to learn 
multiple software applications. Increase your design productivity with 
streamlined workflows to reduce duplication of effort and eliminate 
errors.</p>                

</div>',
                'created_at' => '2018-07-04 02:52:00',
                'updated_at' => '2018-07-04 02:52:33',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'MS office 2016',
                'author' => 'Microsoft Office',
                'department_slug' => '',
                'level_term_slug' => '',
                'course_id' => NULL,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'software',
                'link' => 'https://drive.google.com/file/d/1nfUaFQggTWK6IcyPTvp0XThbgvWffgaV/view?usp=sharing',
                'image' => 'office2016_1_1530764585.png',
                'status' => '1',
                'custom_message' => '<h3><span style="font-family: " impact";"="">Preactivated file[courtesy: BM Lava]<br></span></h3><h3><span style="font-family: " impact";"="">ইনফরমেশন </span><br></h3><p>
</p><p></p><p></p><div style="text-align: left;">
» ভার্শনঃ ২০১৬<br>
» সেটাপ মুডঃ ইন্সটলার<br>
» ফাইল সাইজঃ ৮০০ এমবি<br>
» সফটওয়্যার ইনফোঃ ৬৪ বিট<br>
» অপারেটিং সিস্টেমঃ উইন্ডোজ ৭, ৮ ও ১০; ৩২ ও ৬৪ বিট<br></div><div style="text-align: left;"><h3>ইন্সটলেশন নোট </h3></div><div style="text-align: left;">» আগের ভার্শন থাকলে আনইন্সটল করে নিন।<br>
» আপনার যদি উইন্ডোজ ৭ হয় তাহলে "নেট ফ্রেমওয়ার্ক ৪.৭" ইন্সটল করা লাগতে 
পারে, নাহলে এক্টিভেশন হবেনা। <br>
» এরপর আপনার কাংখিত অফিস ভার্শনটি ইন্সটল করলেই অটো এক্টিভেট হয়ে যাবে।<br>
» যদি "কেএমএস পিকো" আগে ইন্সটল করা থাকে তাহলে অফিস ইন্সটল এর শেষের দিকে ইরর আসবে, তখন "এবোর্ট" এ ক্লিক করলেই হবে।</div><div style="text-align: left;"><h3>টিপস ও ট্রিক্স </h3></div><div style="text-align: left;">» ওয়ার্ডের পেপার সাইজ এফোর ডিফল্ট করা আছে।<br>
» ওয়ার্ড ও পাওয়ারপয়েন্ট এ রুলার ডিফল্টভাবে অন করা হয়েছে।<br>
» ডেস্কটপ শর্টকাট এড করা হয়েছে।</div><p></p><p></p><p></p>',
                'description' => 'MS office 2016 Microsoft Office   <h3><span style="font-family: " impact";"="">Preactivated file[courtesy: BM Lava]<br></span></h3><h3><span style="font-family: " impact";"="">ইনফরমেশন </span><br></h3><p>
</p><p></p><p></p><div style="text-align: left;">
» ভার্শনঃ ২০১৬<br>
» সেটাপ মুডঃ ইন্সটলার<br>
» ফাইল সাইজঃ ৮০০ এমবি<br>
» সফটওয়্যার ইনফোঃ ৬৪ বিট<br>
» অপারেটিং সিস্টেমঃ উইন্ডোজ ৭, ৮ ও ১০; ৩২ ও ৬৪ বিট<br></div><div style="text-align: left;"><h3>ইন্সটলেশন নোট </h3></div><div style="text-align: left;">» আগের ভার্শন থাকলে আনইন্সটল করে নিন।<br>
» আপনার যদি উইন্ডোজ ৭ হয় তাহলে "নেট ফ্রেমওয়ার্ক ৪.৭" ইন্সটল করা লাগতে 
পারে, নাহলে এক্টিভেশন হবেনা। <br>
» এরপর আপনার কাংখিত অফিস ভার্শনটি ইন্সটল করলেই অটো এক্টিভেট হয়ে যাবে।<br>
» যদি "কেএমএস পিকো" আগে ইন্সটল করা থাকে তাহলে অফিস ইন্সটল এর শেষের দিকে ইরর আসবে, তখন "এবোর্ট" এ ক্লিক করলেই হবে।</div><div style="text-align: left;"><h3>টিপস ও ট্রিক্স </h3></div><div style="text-align: left;">» ওয়ার্ডের পেপার সাইজ এফোর ডিফল্ট করা আছে।<br>
» ওয়ার্ড ও পাওয়ারপয়েন্ট এ রুলার ডিফল্টভাবে অন করা হয়েছে।<br>
» ডেস্কটপ শর্টকাট এড করা হয়েছে।</div><p></p><p></p><p></p>',
                'created_at' => '2018-07-05 13:23:05',
                'updated_at' => '2018-07-05 14:40:59',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'CSI Etabs 9.6',
            'author' => 'Computers and Structures(CSI)',
                'department_slug' => 'ce',
                'level_term_slug' => '',
                'course_id' => NULL,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'software',
                'link' => 'https://www.dropbox.com/s/nrj90x4kzed7udp/Etabs.StandAlone.V9.6-iSi.rar?dl=0',
                'image' => '',
                'status' => '1',
                'custom_message' => '<p>Installation guide is given in the file<br></p>',
            'description' => 'CSI Etabs 9.6 Computers and Structures(CSI) ce  <p>Installation guide is given in the file<br></p>',
                'created_at' => '2018-10-28 22:07:10',
                'updated_at' => '2019-07-20 00:58:14',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Matlab R2015a',
                'author' => 'mathworks',
                'department_slug' => 'ce',
                'level_term_slug' => '2-2',
                'course_id' => 22,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'software',
            'link' => 'http://www.mediafire.com/folder/6qenrs77vr80s/Mathworks_Matlab_R2015a_(64-Bit)-%5BFirstUploads%5D',
                'image' => 'index_1_1544609219.jpg',
                'status' => '1',
            'custom_message' => '<p><strong>Mathworks Matlab R2015a (64-Bit)<br><br></strong><iframe src="//www.youtube.com/embed/eZT2GjTuQPM" class="note-video-clip" width="640" height="360" frameborder="0"></iframe><strong><br><br>MATLAB®</strong> is the high-level language and interactive environment used by millions of engineers and scientists worldwide. It lets you explore and visualize ideas and collaborate across disciplines including signal and image processing, communications, control systems, and computational finance. <br><br><strong>Put your ideas into action </strong> <br>You can use MATLAB in projects such as modeling energy consumption to build smart power grids, developing control algorithms for hypersonic vehicles, analyzing weather data to visualize the track and intensity of hurricanes, and running millions of simulations to pinpoint optimal dosing for antibiotics.</p><p><br></p><p>Alternative link: <a href="https://1337x.to/torrent/1100084/Mathworks-Matlab-R2015a-64-Bit-FirstUploads/" target="_blank">https://1337x.to/torrent/1100084/Mathworks-Matlab-R2015a-64-Bit-FirstUploads/</a><br></p>',
            'description' => 'Matlab R2015a mathworks ce 2-2 <p><strong>Mathworks Matlab R2015a (64-Bit)<br><br></strong><iframe src="//www.youtube.com/embed/eZT2GjTuQPM" class="note-video-clip" width="640" height="360" frameborder="0"></iframe><strong><br><br>MATLAB®</strong> is the high-level language and interactive environment used by millions of engineers and scientists worldwide. It lets you explore and visualize ideas and collaborate across disciplines including signal and image processing, communications, control systems, and computational finance. <br><br><strong>Put your ideas into action </strong> <br>You can use MATLAB in projects such as modeling energy consumption to build smart power grids, developing control algorithms for hypersonic vehicles, analyzing weather data to visualize the track and intensity of hurricanes, and running millions of simulations to pinpoint optimal dosing for antibiotics.</p><p><br></p><p>Alternative link: <a href="https://1337x.to/torrent/1100084/Mathworks-Matlab-R2015a-64-Bit-FirstUploads/" target="_blank">https://1337x.to/torrent/1100084/Mathworks-Matlab-R2015a-64-Bit-FirstUploads/</a><br></p>',
                'created_at' => '2018-12-12 19:06:59',
                'updated_at' => '2018-12-12 19:13:55',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Autocad 2017',
                'author' => 'Autodesk',
                'department_slug' => 'ce',
                'level_term_slug' => '',
                'course_id' => NULL,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'software',
                'link' => 'https://www.mediafire.com/file/ho30no2524b8oi0/acad17.zip/file',
                'image' => 'acad2017_1_1551456327.jpg',
                'status' => '1',
            'custom_message' => '<p><strong><strong>Autodesk AutoCAD 2017 (x64) </strong> </strong></p><p><strong>Create stunning designs and speed up documentation work with productivity tools in AutoCAD® software. </strong></p><p><strong>Is It Activated ? </strong> <br><strong>Answer: </strong> Keygen Is Provided With Instructions Text File <br><br><strong>How To Use Keygen ? </strong> <br><strong>Answer: </strong> Please See The <strong>"Instructions !!!.txt" </strong> File <br><br><strong>Is It Multilingual ? </strong> <br><strong>Answer: </strong> No. Only English <br><br><strong>Is It For x86 & x64 ? </strong> <br><strong>Answer: </strong> No. It Is Only For 64-Bit<br><br>Torrent Link: </p><p><a href="https://1337x.to/torrent/1508775/Autodesk-AutoCAD-2017-x64-Keygen-SadeemPC/" target="_blank">https://1337x.to/torrent/1508775/Autodesk-AutoCAD-2017-x64-Keygen-SadeemPC/</a><br></p>',
            'description' => 'Autocad 2017 Autodesk ce  <p><strong><strong>Autodesk AutoCAD 2017 (x64) </strong> </strong></p><p><strong>Create stunning designs and speed up documentation work with productivity tools in AutoCAD® software. </strong></p><p><strong>Is It Activated ? </strong> <br><strong>Answer: </strong> Keygen Is Provided With Instructions Text File <br><br><strong>How To Use Keygen ? </strong> <br><strong>Answer: </strong> Please See The <strong>"Instructions !!!.txt" </strong> File <br><br><strong>Is It Multilingual ? </strong> <br><strong>Answer: </strong> No. Only English <br><br><strong>Is It For x86 & x64 ? </strong> <br><strong>Answer: </strong> No. It Is Only For 64-Bit<br><br>Torrent Link: </p><p><a href="https://1337x.to/torrent/1508775/Autodesk-AutoCAD-2017-x64-Keygen-SadeemPC/" target="_blank">https://1337x.to/torrent/1508775/Autodesk-AutoCAD-2017-x64-Keygen-SadeemPC/</a><br></p>',
                'created_at' => '2019-03-02 12:05:27',
                'updated_at' => '2019-03-02 12:14:42',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'IBM SPSS 25',
                'author' => 'IBM',
                'department_slug' => 'ce',
                'level_term_slug' => '',
                'course_id' => NULL,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'software',
                'link' => 'https://drive.google.com/file/d/15r9RaE8mjckZ7Xd7PtW_wsSZ8JQwCKn3/view?usp=sharing',
                'image' => 'spss_1_1555153773.jpg',
                'status' => '1',
            'custom_message' => '<p><strong>IBM SPSS Statistics 25.0 (x64) Multilingual </strong> <br><br>IBM SPSS Statistics Subscription delivers the power of SPSS Statistics predictive analytics capabilities with a flexible subscription payment option, including an easier purchasing, management and licensing experience. With the introduction of SPSS Statistics Subscription, organizations, groups and individuals can take advantage of predictive analytics capabilities to deliver the maximum amount of value to the user. </p><p><br></p><p><strong>Propel research &amp; analysis with a fast and powerful solution: </strong> <br>A comprehensive set of statistical tools
<br>Work inside a single, integrated interface to run descriptive 
statistics, regression, advanced statistics and many more. Create 
publication ready charts, tables, and decision trees in one tool.
<br>Integration with Open Source
<br>Enhance the SPSS Syntax with R and Python through specialized 
extensions. Leverage the 130+ extensions available on our Extension Hub,
or build your own and share with your peers to create a customized 
solution.
<br>Easy statistical analysis
<br>Use a simple drag and drop interface to access a wide range of 
capabilities and work across multiple data sources. Plus, flexible 
deployment options make purchasing and managing your software easy.
</p>',
            'description' => 'IBM SPSS 25 IBM ce spss_1_1555153773.jpg <p><strong>IBM SPSS Statistics 25.0 (x64) Multilingual </strong> <br><br>IBM SPSS Statistics Subscription delivers the power of SPSS Statistics predictive analytics capabilities with a flexible subscription payment option, including an easier purchasing, management and licensing experience. With the introduction of SPSS Statistics Subscription, organizations, groups and individuals can take advantage of predictive analytics capabilities to deliver the maximum amount of value to the user. </p><p><br></p><p><strong>Propel research &amp; analysis with a fast and powerful solution: </strong> <br>A comprehensive set of statistical tools
<br>Work inside a single, integrated interface to run descriptive 
statistics, regression, advanced statistics and many more. Create 
publication ready charts, tables, and decision trees in one tool.
<br>Integration with Open Source
<br>Enhance the SPSS Syntax with R and Python through specialized 
extensions. Leverage the 130+ extensions available on our Extension Hub,
or build your own and share with your peers to create a customized 
solution.
<br>Easy statistical analysis
<br>Use a simple drag and drop interface to access a wide range of 
capabilities and work across multiple data sources. Plus, flexible 
deployment options make purchasing and managing your software easy.
</p>',
                'created_at' => '2019-04-14 06:09:33',
                'updated_at' => '2019-04-14 06:09:33',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Autocad civil 3d',
                'author' => 'Autodesk',
                'department_slug' => '',
                'level_term_slug' => '',
                'course_id' => NULL,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'software',
                'link' => 'https://drive.google.com/file/d/1pYJpNpvHy_wKpft8KPv4irq7wUe7eR9f/view?usp=sharing',
                'image' => 'C3D_2014_1_1557476352.jpg',
                'status' => '1',
            'custom_message' => '<p><strong>Autodesk AutoCAD Civil 3D 2018 (x64) ISO </strong> <br><br>AutoCAD Civil 3D is the software of choice for anyone who is active in civil engineering. For each phase of a project is within AutoCAD Civil 3D to find a suitable job. Whether it is about the process of surveying inwinningen or the design of roads, sewers, embankments and other volume objects (wells, dykes etc.), AutoCAD Civil 3D provides the right features to make this happen.</p><p><br></p><p>Torrent link <a href="https://1337x.to/torrent/2164787/Autodesk-AutoCAD-Civil-3D-2018-x64-ISO-Keygen-SadeemPC/" target="_blank">https://1337x.to/torrent/2164787/Autodesk-AutoCAD-Civil-3D-2018-x64-ISO-Keygen-SadeemPC/</a><br></p>',
            'description' => 'Autocad civil 3d Autodesk  C3D_2014_1_1557476352.jpg <p><strong>Autodesk AutoCAD Civil 3D 2018 (x64) ISO </strong> <br><br>AutoCAD Civil 3D is the software of choice for anyone who is active in civil engineering. For each phase of a project is within AutoCAD Civil 3D to find a suitable job. Whether it is about the process of surveying inwinningen or the design of roads, sewers, embankments and other volume objects (wells, dykes etc.), AutoCAD Civil 3D provides the right features to make this happen.</p><p><br></p><p>Torrent link <a href="https://1337x.to/torrent/2164787/Autodesk-AutoCAD-Civil-3D-2018-x64-ISO-Keygen-SadeemPC/" target="_blank">https://1337x.to/torrent/2164787/Autodesk-AutoCAD-Civil-3D-2018-x64-ISO-Keygen-SadeemPC/</a><br></p>',
                'created_at' => '2019-05-11 03:19:12',
                'updated_at' => '2019-05-11 03:19:12',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Leica Liscad 12',
                'author' => 'leica-geosystems',
                'department_slug' => 'ce',
                'level_term_slug' => '',
                'course_id' => NULL,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'software',
                'link' => 'https://drive.google.com/file/d/1ZjJgQiSJOCo-wOj7No4gvfSf1fceuE29/view?usp=drivesdk',
                'image' => '2019-06-15_203827_1_1560609977.png',
                'status' => '1',
                'custom_message' => '<p><span class="notranslate">LISCAD </span> is a portfolio of integrated land surveying and civil engineering software modules. With <span class="notranslate"> LISCAD </span>, you can purchase only the modules that you require for your specific needs, and at a later date purchase additional modules as you require them. Configure, organise, manage and report on your projects with the Utilities module. <br>
<br>Use the Input &amp; Output module to transfer data to and from all popular, total station, data logger, GPS and digital level field surveying devices as well as other software systems including AutoCAD DWG, MicroStation DGN and LandXML.</p><h3>Installation Video: </h3><p><a href="https://drive.google.com/file/d/14J6DDFASMxisWI9w6ro8IxZyNm_f_d31/view?usp=drivesdk" target="_blank">https://drive.google.com/file/d/14J6DDFASMxisWI9w6ro8IxZyNm_f_d31/view?usp=drivesdk</a><br></p>',
                'description' => 'Leica Liscad 12 leica-geosystems ce 2019-06-15_203827_1_1560609977.png <p><span class="notranslate">LISCAD </span> is a portfolio of integrated land surveying and civil engineering software modules. With <span class="notranslate"> LISCAD </span>, you can purchase only the modules that you require for your specific needs, and at a later date purchase additional modules as you require them. Configure, organise, manage and report on your projects with the Utilities module. <br>
<br>Use the Input &amp; Output module to transfer data to and from all popular, total station, data logger, GPS and digital level field surveying devices as well as other software systems including AutoCAD DWG, MicroStation DGN and LandXML.</p><h3>Installation Video: </h3><p><a href="https://drive.google.com/file/d/14J6DDFASMxisWI9w6ro8IxZyNm_f_d31/view?usp=drivesdk" target="_blank">https://drive.google.com/file/d/14J6DDFASMxisWI9w6ro8IxZyNm_f_d31/view?usp=drivesdk</a><br></p>',
                'created_at' => '2019-06-15 23:46:17',
                'updated_at' => '2019-06-15 23:46:17',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'STAAD.Pro V8i',
                'author' => 'Bentley Systems Inc',
                'department_slug' => 'ce',
                'level_term_slug' => '',
                'course_id' => NULL,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'software',
                'link' => 'https://drive.google.com/file/d/138sAOOpmz_-3fu8piS8JrMcCT3M4vlGX/view?usp=sharing',
                'image' => 'staad-pro-v8i-500x500_1_1561139681.jpg',
                'status' => '1',
            'custom_message' => '<p><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;"><b>STAAD.<i>Pro</i> V8i SELECTseries 6 (20.07.11.33)</b>
introduces the latest enhancements to the world\'s leading analysis and 
design application. This latest version includes a new Interactive 
Editor Commands are created with a powerful Intellisense service. A new 
Building Planner Mode has been added that provides a fully integrated 
mode to create multi-story buildings and integrated with the RCDC design
application. An updated Advanced Analysis solver which can result in a 
performance boost for some larger models. There are more new and 
enhanced existing design codes including enhanced AISC 360 design 
options adding greater flexibility. There are new steel design modules 
to S16-14 and SANS 10162:2011 with concrete designs to ACI 318-11 and SP
63.13330.2011.</span></p>',
            'description' => 'STAAD.Pro V8i Bentley Systems Inc ce  <p><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;"><b>STAAD.<i>Pro</i> V8i SELECTseries 6 (20.07.11.33)</b>
introduces the latest enhancements to the world\'s leading analysis and 
design application. This latest version includes a new Interactive 
Editor Commands are created with a powerful Intellisense service. A new 
Building Planner Mode has been added that provides a fully integrated 
mode to create multi-story buildings and integrated with the RCDC design
application. An updated Advanced Analysis solver which can result in a 
performance boost for some larger models. There are more new and 
enhanced existing design codes including enhanced AISC 360 design 
options adding greater flexibility. There are new steel design modules 
to S16-14 and SANS 10162:2011 with concrete designs to ACI 318-11 and SP
63.13330.2011.</span></p>',
                'created_at' => '2019-06-22 02:54:41',
                'updated_at' => '2019-06-22 09:42:02',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'MS Office 2019',
                'author' => 'Microsoft',
                'department_slug' => '',
                'level_term_slug' => '',
                'course_id' => NULL,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'software',
                'link' => 'https://www.mediafire.com/file/gxw9epy11m8255b/Microsoft_Office_Pro_2019_64-Bit_Pre-Activated_-_Lava.zip/file',
                'image' => '543029-microsoft-office-professional-2019-logo_1_1561214582.jpg',
                'status' => '1',
                'custom_message' => '<h2 class="app-summary__description" data-auto="app-summary-title">Meet the New Standard with Microsoft Office 2019</h2><p><strong>Microsoft Office 2019 </strong>is the latest iteration of the industry-standard office suit. Microsoft Office 2019 includes the latest versions of Word, Excel, PowerPoint, Outlook, Exchange, SharePoint and Skype for Business, each of which is an essential tool<strong> </strong>in the computerized office workplace of today. It also boasts a range of enhanced IT options that are designed to make life easier for newcomers to the field. Make no mistake: this is a versatile set of tools and no office should be without it.</p>',
                'description' => 'MS Office 2019 Microsoft  543029-microsoft-office-professional-2019-logo_1_1561214582.jpg <h2 class="app-summary__description" data-auto="app-summary-title">Meet the New Standard with Microsoft Office 2019</h2><p><strong>Microsoft Office 2019 </strong>is the latest iteration of the industry-standard office suit. Microsoft Office 2019 includes the latest versions of Word, Excel, PowerPoint, Outlook, Exchange, SharePoint and Skype for Business, each of which is an essential tool<strong> </strong>in the computerized office workplace of today. It also boasts a range of enhanced IT options that are designed to make life easier for newcomers to the field. Make no mistake: this is a versatile set of tools and no office should be without it.</p>',
                'created_at' => '2019-06-22 23:43:02',
                'updated_at' => '2019-06-22 23:43:02',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'GeoStudio 2012 v8.15.*',
                'author' => 'GEOSLOPE',
                'department_slug' => 'ce',
                'level_term_slug' => '',
                'course_id' => NULL,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'software',
                'link' => 'http://www.mediafire.com/file/l4vybje3i1q0h1i/Geostudio.zip/file',
                'image' => 'geostudio_1_1561378843.jpg',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'GeoStudio 2012 v8.15.* GEOSLOPE ce  ',
                'created_at' => '2019-06-24 21:20:43',
                'updated_at' => '2019-06-24 21:23:59',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'plaxis 8.2',
                'author' => 'plaxis',
                'department_slug' => 'ce',
                'level_term_slug' => '',
                'course_id' => NULL,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'software',
                'link' => 'http://www.mediafire.com/file/csflw14cpy2sly3/Plaxis_Professional_8.2_%2B_Crack.zip',
                'image' => 'plax_1_1561378972.jpg',
                'status' => '5',
                'custom_message' => '<div class="is-module"><section class="intro intro--left"> <div class="intro__img-wrap">  </div> <div class="intro__content"><p>PLAXIS 2D is a powerful and user friendly finite element package intended for two-dimensional analysis of<br>deformation
and stability in geotechnical engineering and rock mechanics. PLAXIS is
used worldwide by top engineering companies and institutions in the 
civil and geotechnical engineering industry. Applications range from 
excavations, embankment and foundations to tunnelling, mining and 
reservoir geomechanics.</p></div></section></div>',
                'description' => 'plaxis 8.2 plaxis ce  <div class="is-module"><section class="intro intro--left"> <div class="intro__img-wrap">  </div> <div class="intro__content"><p>PLAXIS 2D is a powerful and user friendly finite element package intended for two-dimensional analysis of<br>deformation
and stability in geotechnical engineering and rock mechanics. PLAXIS is
used worldwide by top engineering companies and institutions in the 
civil and geotechnical engineering industry. Applications range from 
excavations, embankment and foundations to tunnelling, mining and 
reservoir geomechanics.</p></div></section></div>',
                'created_at' => '2019-06-24 21:22:52',
                'updated_at' => '2019-12-18 15:58:45',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'AutoCad 2019',
                'author' => 'Autodesk',
                'department_slug' => 'ce',
                'level_term_slug' => '',
                'course_id' => NULL,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'software',
                'link' => 'http://www.mediafire.com/file/02zjc2rrj7p57qc/Autodesk_AutoCad_2019.1.1_%2528x86%252Bx64%2529_%252B_Crack_%255BCracksNow%255D.zip/file',
                'image' => 'th_R1_DULH4_UMluc_OJ6_S1_IEg_Bpy2_Jw_AZAp_Jr_1_1561431429.jpg',
                'status' => '1',
                'custom_message' => '<p>Autodesk AutoCAD 2019 design and documentation software, of the world’s leading 2D and 3D CAD tools. It will allow you to design and shape the world around you using its powerful and flexible features. Speed documentation, share ideas seamlessly, and explore ideas more intuitively in 3D. With thousands of available add-ons, AutoCAD software provides the ultimate in flexibility, customized for your specific needs. It’s time to take design further. <br>AutoCAD 2019 enables you to create and explore ideas like never before. It is all you need to create, visualize, document, and share your ideas. From conceptual design through drafting and detailing. Import a wide variety of other formats including SolidWorks, Pro/ENGINEER, CATIA, Rhino, and NX. Drawing views, edge display, and location are instantly updated when an engineering change is made.</p><p><br></p><p>Torrent Link: <a href="https://1337x.to/torrent/3215224/Autodesk-AutoCad-2019-1-1-x86-x64-Crack-CracksNow/" target="_blank">https://1337x.to/torrent/3215224/Autodesk-AutoCad-2019-1-1-x86-x64-Crack-CracksNow/</a><br></p>',
                'description' => 'AutoCad 2019 Autodesk ce  <p>Autodesk AutoCAD 2019 design and documentation software, of the world’s leading 2D and 3D CAD tools. It will allow you to design and shape the world around you using its powerful and flexible features. Speed documentation, share ideas seamlessly, and explore ideas more intuitively in 3D. With thousands of available add-ons, AutoCAD software provides the ultimate in flexibility, customized for your specific needs. It’s time to take design further. <br>AutoCAD 2019 enables you to create and explore ideas like never before. It is all you need to create, visualize, document, and share your ideas. From conceptual design through drafting and detailing. Import a wide variety of other formats including SolidWorks, Pro/ENGINEER, CATIA, Rhino, and NX. Drawing views, edge display, and location are instantly updated when an engineering change is made.</p><p><br></p><p>Torrent Link: <a href="https://1337x.to/torrent/3215224/Autodesk-AutoCad-2019-1-1-x86-x64-Crack-CracksNow/" target="_blank">https://1337x.to/torrent/3215224/Autodesk-AutoCad-2019-1-1-x86-x64-Crack-CracksNow/</a><br></p>',
                'created_at' => '2019-06-25 11:57:09',
                'updated_at' => '2019-06-25 22:59:14',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'ArcGIS 10.7.0.*',
                'author' => 'Esri',
                'department_slug' => '',
                'level_term_slug' => '',
                'course_id' => NULL,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'software',
                'link' => 'http://www.mediafire.com/file/njg83m6vrs1p9ar/_Getintopc.com_Esri_ArcGIS_Desktop_10.7.0.10450.zip/file',
                'image' => 'ArcGIS_logo_1_1561514167.png',
                'status' => '1',
                'custom_message' => '<p>Esri ArcGIS Desktop is a very handy application which can be used for 
working with various different maps as well as geographic information 
developed by ESRI. With this application you can create the maps and 
geographical data collection. </p>',
                'description' => 'ArcGIS 10.7.0.* Esri  ArcGIS_logo_1_1561514167.png <p>Esri ArcGIS Desktop is a very handy application which can be used for 
working with various different maps as well as geographic information 
developed by ESRI. With this application you can create the maps and 
geographical data collection. </p>',
                'created_at' => '2019-06-26 10:56:08',
                'updated_at' => '2019-06-26 10:56:08',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'ArcGIS 10.4.1',
                'author' => 'Esri',
                'department_slug' => '',
                'level_term_slug' => '',
                'course_id' => NULL,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'software',
                'link' => 'http://www.mediafire.com/file/57kdwaq2cx343bf/ArcGIS_10.4.1.zip/file',
                'image' => 'ArcGIS_logo_1_1561514212.png',
                'status' => '1',
                'custom_message' => 'Esri ArcGIS Desktop is a very handy application which can be used for 
working with various different maps as well as geographic information 
developed by ESRI. With this application you can create the maps and 
geographical data collection.',
                'description' => 'ArcGIS 10.4.1 Esri  ArcGIS_logo_1_1561514212.png Esri ArcGIS Desktop is a very handy application which can be used for 
working with various different maps as well as geographic information 
developed by ESRI. With this application you can create the maps and 
geographical data collection.',
                'created_at' => '2019-06-26 10:56:52',
                'updated_at' => '2019-06-26 10:56:52',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'ArcGIS 10.1',
                'author' => 'Esri',
                'department_slug' => '',
                'level_term_slug' => '',
                'course_id' => NULL,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'software',
                'link' => 'http://www.mediafire.com/file/a4sznw7bthwvekv/ArcGIS_10.1.zip/file',
                'image' => 'ArcGIS_logo_1_1561514253.png',
                'status' => '1',
                'custom_message' => '<p>Esri ArcGIS Desktop is a very handy application which can be used for 
working with various different maps as well as geographic information 
developed by ESRI. With this application you can create the maps and 
geographical data collection. </p>',
                'description' => 'ArcGIS 10.1 Esri  ArcGIS_logo_1_1561514253.png <p>Esri ArcGIS Desktop is a very handy application which can be used for 
working with various different maps as well as geographic information 
developed by ESRI. With this application you can create the maps and 
geographical data collection. </p>',
                'created_at' => '2019-06-26 10:57:33',
                'updated_at' => '2019-06-26 10:57:33',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'CSI Etabs 2017',
            'author' => 'Computers and Structures(CSI)',
                'department_slug' => 'ce',
                'level_term_slug' => '',
                'course_id' => NULL,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'software',
                'link' => 'https://www.mediafire.com/file/b8pllg1njmoyp13/CSI_ETABS_Ultimate_17.0.1_Build_1888_x64.rar/file',
                'image' => 'etabs17_1_1568916603.jpg',
                'status' => '1',
            'custom_message' => '<h3>Installation video:</h3><p> <span style="color: rgb(0, 0, 0); font-family: &quot;SF Regular&quot;, &quot;Segoe UI Regular&quot;, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;"><a href="https://www.mediafire.com/file/1xir6q5wgt5qumh/How_to_download_and_Setup_Etabs_17.0.1_full.mp4/file" target="_blank">https://www.mediafire.com/file/1xir6q5wgt5qumh/How_to_download_and_Setup_Etabs_17.0.1_full.mp4/file</a></span></p><p><span style="color: rgb(0, 0, 0); font-family: &quot;SF Regular&quot;, &quot;Segoe UI Regular&quot;, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;"><br></span></p>',
            'description' => 'CSI Etabs 2017 Computers and Structures(CSI) ce etabs17_1_1568916603.jpg <h3>Installation video:</h3><p> <span style="color: rgb(0, 0, 0); font-family: &quot;SF Regular&quot;, &quot;Segoe UI Regular&quot;, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;"><a href="https://www.mediafire.com/file/1xir6q5wgt5qumh/How_to_download_and_Setup_Etabs_17.0.1_full.mp4/file" target="_blank">https://www.mediafire.com/file/1xir6q5wgt5qumh/How_to_download_and_Setup_Etabs_17.0.1_full.mp4/file</a></span></p><p><span style="color: rgb(0, 0, 0); font-family: &quot;SF Regular&quot;, &quot;Segoe UI Regular&quot;, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;"><br></span></p>',
                'created_at' => '2019-09-20 07:10:03',
                'updated_at' => '2019-09-20 07:10:03',
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'Tekla Struc. 19',
                'author' => 'Tekla',
                'department_slug' => 'ce',
                'level_term_slug' => '',
                'course_id' => NULL,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'software',
                'link' => 'http://www.mediafire.com/file/4ewxdz990ynu9ie/_Getintopc.com_m-tkst19sr1.iso',
                'image' => '238_1_1569163268.jpg',
                'status' => '1',
                'custom_message' => '<p>Courtesy: GetIntoPC.com<br></p>',
                'description' => 'Tekla Struc. 19 Tekla ce  <p>Courtesy: GetIntoPC.com<br></p>',
                'created_at' => '2019-09-23 03:41:08',
                'updated_at' => '2019-09-23 03:51:45',
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'SketchUp pro 2019',
                'author' => 'Google',
                'department_slug' => '',
                'level_term_slug' => '',
                'course_id' => NULL,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'software',
                'link' => 'http://www.mediafire.com/file/b2x5t66hwwhrkg5/Google_SketchUp_2019_Pro_19.2.222_Silent-Activated_-_Lava.zip/file',
                'image' => 'sketchup-pro-2019-3_1_1569163537.png',
                'status' => '1',
                'custom_message' => '<p>SketchUp Pro is a professional software application designed to help users create and edit 3D models in a clean and intuitive working environment. Create 3D objects from scratch in a user-friendly environment. It comes packed with a built-in editor that allows you to design 3D objects from scratch, a layout designer for combining 3D models, and a Style builder for customizing your models with different styles. The editor gives you the possibility to import data from 3DS, DWG, KMZ, JPG, PNG, PSD, TIF, TGA, and other file formats. It also offers detailed information about each editing tool, so even rookies can learn to set up the dedicated parameters with minimum effort. Plus, you can draw freehand designs, insert arcs, lines, rectangles, circles, and polygons, use an eraser, push and pull objects to add or subtract volume from your 3D models. In addition, you can create copy of lines at a uniform distance from the original ones, and move, stretch, rotate, distort or copy components.</p><h4>Installation Note<br></h4><p>» Double click on the installer and wait for the installation completed notification or the icon to be appeared on the desktop.<br><br>» The software will activate itself with built in crack, no additional cracking or patching needed.<br><br>» If it\'s not activated please uninstall the previous version, turn off the antivirus and install again.<br><br>Courtesy: Cyberspace<br></p>',
                'description' => 'SketchUp pro 2019 Google   <p>SketchUp Pro is a professional software application designed to help users create and edit 3D models in a clean and intuitive working environment. Create 3D objects from scratch in a user-friendly environment. It comes packed with a built-in editor that allows you to design 3D objects from scratch, a layout designer for combining 3D models, and a Style builder for customizing your models with different styles. The editor gives you the possibility to import data from 3DS, DWG, KMZ, JPG, PNG, PSD, TIF, TGA, and other file formats. It also offers detailed information about each editing tool, so even rookies can learn to set up the dedicated parameters with minimum effort. Plus, you can draw freehand designs, insert arcs, lines, rectangles, circles, and polygons, use an eraser, push and pull objects to add or subtract volume from your 3D models. In addition, you can create copy of lines at a uniform distance from the original ones, and move, stretch, rotate, distort or copy components.</p><h4>Installation Note<br></h4><p>» Double click on the installer and wait for the installation completed notification or the icon to be appeared on the desktop.<br><br>» The software will activate itself with built in crack, no additional cracking or patching needed.<br><br>» If it\'s not activated please uninstall the previous version, turn off the antivirus and install again.<br><br>Courtesy: Cyberspace<br></p>',
                'created_at' => '2019-09-23 03:45:37',
                'updated_at' => '2019-09-23 03:54:46',
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'MS Office 2019',
                'author' => 'Microsoft',
                'department_slug' => '',
                'level_term_slug' => '',
                'course_id' => NULL,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'software',
                'link' => 'http://www.mediafire.com/file/41xybbkjf3e7t8u/Microsoft_Office_Pro_2019_64-Bit_Pre-Activated_-_Lava.zip/file',
                'image' => '543029-microsoft-office-professional-2019-logo_1_1569163723.jpg',
                'status' => '1',
                'custom_message' => '<h3>Installation Note:</h3><p>» If you have any previous Office just click "Uninstall Office". Then select the Office version you had installed, press "Uninstall Office" and wait for it to finish.<br><br>» For installing just press "Start Installation".<br>» Lastly close it after the "Activation Task" is completed.<br><br>Courtesy: Cyberspace<br></p>',
                'description' => 'MS Office 2019 Microsoft   <h3>Installation Note:</h3><p>» If you have any previous Office just click "Uninstall Office". Then select the Office version you had installed, press "Uninstall Office" and wait for it to finish.<br><br>» For installing just press "Start Installation".<br>» Lastly close it after the "Activation Task" is completed.<br><br>Courtesy: Cyberspace<br></p>',
                'created_at' => '2019-09-23 03:48:43',
                'updated_at' => '2019-09-23 03:50:59',
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'Rhinoceros 3D',
                'author' => 'Rhinoceros',
                'department_slug' => '',
                'level_term_slug' => '',
                'course_id' => NULL,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'software',
                'link' => 'https://drive.google.com/file/d/1tnRNPqWChaBaVVcz47bnPB_bxc6kBR9Q/view?usp=sharing',
                'image' => 'rhino-3d-modeling-workshop_1_1576648419.jpg',
                'status' => '1',
                'custom_message' => '<p><span>Rhinoceros is a commercial 3D computer graphics and computer-aided
design application software developed by Robert McNeel &amp; 
Associates, an American, privately held, employee-owned company founded 
in 1980.</span><span><span></span></span></p>',
                'description' => 'Rhinoceros 3D Rhinoceros  rhino-3d-modeling-workshop_1_1576648419.jpg <p><span>Rhinoceros is a commercial 3D computer graphics and computer-aided
design application software developed by Robert McNeel &amp; 
Associates, an American, privately held, employee-owned company founded 
in 1980.</span><span><span></span></span></p>',
                'created_at' => '2019-12-18 14:53:39',
                'updated_at' => '2019-12-18 14:53:39',
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'SAP2000 v22',
            'author' => 'Computers and Structures(CSI)',
                'department_slug' => '',
                'level_term_slug' => '',
                'course_id' => NULL,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'software',
                'link' => 'https://mega.nz/#F!e8MiDKqS!OQh4RKnXSX8psDuyh-ct-g',
                'image' => '84501163_3211415028872733_422222283361222656_o_1_1581569649.jpg',
                'status' => '1',
                'custom_message' => '<p><iframe src="//www.youtube.com/embed/3QhelgPSprw" class="note-video-clip" width="640" height="360" frameborder="0"></iframe><br></p>',
            'description' => 'SAP2000 v22 Computers and Structures(CSI)   <p><iframe src="//www.youtube.com/embed/3QhelgPSprw" class="note-video-clip" width="640" height="360" frameborder="0"></iframe><br></p>',
                'created_at' => '2020-02-13 13:48:25',
                'updated_at' => '2020-02-13 13:54:09',
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'Plaxis 2d 8.6',
                'author' => 'plaxis',
                'department_slug' => 'ce',
                'level_term_slug' => '',
                'course_id' => NULL,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'software',
                'link' => 'https://mega.nz/file/3I4VACiS#JwX5rPIJstihECq426S8IMo-h_ElKrK7pKxR9wR3wzM',
                'image' => 'Plaxis_logo_1_1588405256.jpg',
                'status' => '1',
                'custom_message' => '<p>PLAXIS 2D v8.6 is a handy application that allows users to perform 2D 
analysis for finite elements and improve performance, hence gaining 
stability in Geotechnical engineering and rock mechanics. It is a 
valuable application as it provides a powerful solution and used by 
engineers and institutions. It is a package with a different application
allowing access to different features to solve or eliminate a wide 
range of geotechnical problems.</p><p><br></p><p>getintopc link <a href="https://getintopc.com/softwares/analysis/download-plaxis-2d-v8-6-free-download/" target="_blank">https://getintopc.com/softwares/analysis/download-plaxis-2d-v8-6-free-download/</a><br></p>',
                'description' => 'Plaxis 2d 8.6 plaxis ce  <p>PLAXIS 2D v8.6 is a handy application that allows users to perform 2D 
analysis for finite elements and improve performance, hence gaining 
stability in Geotechnical engineering and rock mechanics. It is a 
valuable application as it provides a powerful solution and used by 
engineers and institutions. It is a package with a different application
allowing access to different features to solve or eliminate a wide 
range of geotechnical problems.</p><p><br></p><p>getintopc link <a href="https://getintopc.com/softwares/analysis/download-plaxis-2d-v8-6-free-download/" target="_blank">https://getintopc.com/softwares/analysis/download-plaxis-2d-v8-6-free-download/</a><br></p>',
                'created_at' => '2020-05-02 16:40:56',
                'updated_at' => '2020-05-02 16:41:16',
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'SciDAVis',
                'author' => 'SciDAVis',
                'department_slug' => '',
                'level_term_slug' => '',
                'course_id' => NULL,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'software',
                'link' => 'https://sourceforge.net/projects/scidavis/',
                'image' => '',
                'status' => '1',
                'custom_message' => '<p><span>SciDAVis is an open-source cross-platform computer program for interactive scientific graphing and data analysis.</span></p><p><span><br></span></p><p><span><br></span></p>',
                'description' => 'SciDAVis SciDAVis   <p><span>SciDAVis is an open-source cross-platform computer program for interactive scientific graphing and data analysis.</span></p><p><span><br></span></p><p><span><br></span></p>',
                'created_at' => '2020-05-21 18:24:12',
                'updated_at' => '2020-05-21 18:24:12',
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'Tecplot Focus 2019',
                'author' => 'Tecplot Focus',
                'department_slug' => '',
                'level_term_slug' => '',
                'course_id' => NULL,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'software',
                'link' => 'https://drive.google.com/file/d/1Vf_fpPvJVLCdvqn2M7Gwdt_yHNT14hPX/view?usp=drivesdk',
                'image' => 'Tecplot-Focus-2019-Free-Download_1_1590053675.jpg',
                'status' => '1',
                'custom_message' => '<p>Tecplot Focus 2019 is a flexible plotting software with extensive 2D and
3D capabilities for visualizing technical data from analyses 
simulations and experiments. It enables you to quickly plot your line 
and surface engineering and test your data exactly the way you want. </p><p><br></p><p>https://getintopc.com/softwares/tecplot-focus-2019-free-download/<br></p>',
                'description' => 'Tecplot Focus 2019 Tecplot Focus   <p>Tecplot Focus 2019 is a flexible plotting software with extensive 2D and
3D capabilities for visualizing technical data from analyses 
simulations and experiments. It enables you to quickly plot your line 
and surface engineering and test your data exactly the way you want. </p><p><br></p><p>https://getintopc.com/softwares/tecplot-focus-2019-free-download/<br></p>',
                'created_at' => '2020-05-21 18:34:35',
                'updated_at' => '2020-05-21 19:52:35',
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'PLAXIS 2D|3D CON',
                'author' => 'plaxis',
                'department_slug' => 'ce',
                'level_term_slug' => '',
                'course_id' => NULL,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'software',
                'link' => 'https://drive.google.com/drive/folders/1EYKb0OqDAiZrdfAWtKJ8SDpF8YltGgfC',
                'image' => '',
                'status' => '1',
                'custom_message' => 'PLAXIS 2D / 3D CONNECT Edition v20 + Activation [2020]

Plaxis is a finite and advanced element software for analyzing deformation and stability and is used in geotechnical engineering projects. In important geotechnical issues, an advanced behavioral model is usually required to model nonlinear and time-dependent behavior depending on the intended target. With this software, step excavation and embankment can be modeled with different loading and boundary conditions using triangular elements of 6 knots and 15 knots. The first edition of Plaxis was prepared in 1987 to analyze the earthen dams built on soft soils in the lowlands and lowlands of the Netherlands at the request of the country’s Water Resources Management at Delft University of Technology in 1987 and then expanded in 1993. for Civil Engineering Research and Codes has also been approved and supported.

<iframe width="560" height="315" src="https://www.youtube.com/embed/A2fLyUJLsJM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

https://drive.google.com/drive/folders/1EYKb0OqDAiZrdfAWtKJ8SDpF8YltGgfC',
                'description' => 'PLAXIS 2D|3D CON plaxis ce  PLAXIS 2D / 3D CONNECT Edition v20 + Activation [2020]

Plaxis is a finite and advanced element software for analyzing deformation and stability and is used in geotechnical engineering projects. In important geotechnical issues, an advanced behavioral model is usually required to model nonlinear and time-dependent behavior depending on the intended target. With this software, step excavation and embankment can be modeled with different loading and boundary conditions using triangular elements of 6 knots and 15 knots. The first edition of Plaxis was prepared in 1987 to analyze the earthen dams built on soft soils in the lowlands and lowlands of the Netherlands at the request of the country’s Water Resources Management at Delft University of Technology in 1987 and then expanded in 1993. for Civil Engineering Research and Codes has also been approved and supported.

<iframe width="560" height="315" src="https://www.youtube.com/embed/A2fLyUJLsJM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

https://drive.google.com/drive/folders/1EYKb0OqDAiZrdfAWtKJ8SDpF8YltGgfC',
                'created_at' => '2020-07-02 14:06:09',
                'updated_at' => '2020-07-02 14:08:24',
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'SPSS 25',
                'author' => NULL,
                'department_slug' => 'urp',
                'level_term_slug' => '2-2',
                'course_id' => 116,
                'user_id' => 1969,
                'user_type' => 'admin',
                'post_type' => 'software',
                'link' => 'https://drive.google.com/drive/folders/1FOqxZv_p51Z3GXdXsAx8y-Y1-4RRJiDK?usp=sharing',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'SPSS 25  urp  ',
                'created_at' => '2022-04-25 01:16:11',
                'updated_at' => '2022-04-25 01:16:11',
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'CSI ETABS 17.01',
                'author' => 'Computer and Structures',
                'department_slug' => 'ce',
                'level_term_slug' => '',
                'course_id' => NULL,
                'user_id' => 1,
                'user_type' => 'admin',
                'post_type' => 'software',
                'link' => 'https://mega.nz/file/TFJkAahS#RshwrebpqeGCu4mVRxt7KDfYlzfvzUbICVcxnYj9ejw',
                'image' => '',
                'status' => '1',
                'custom_message' => NULL,
                'description' => 'CSI ETABS 17.01 Computer and Structures ce  ',
                'created_at' => '2022-07-02 03:27:58',
                'updated_at' => '2022-07-02 03:27:58',
            ),
        ));
        
        
    }
}