<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('contacts')->delete();
        
        \DB::table('contacts')->insert(array (
            0 => 
            array (
                'id' => 2,
                'name' => 'shaikh islam',
                'email' => 'shaikh-islam@example.com',
                'subject' => 'Re considering about sharing knowledge to all',
                'body' => 'Assalamu Alaikum sir,
I am a military student of CE Dept of Military Institute of Science & Technology (MIST). Till some days ago this valuable site was free for all. Guest teachers from BUET suggested us this site. You may understand that starting study at an older age after a long break, this site was almost like a tutor to us. You may have restricted this site recently due to some special or unwanted reason. I understand that this site should belong to BUET students. Here comes my request. If you give us a chance to get access by paying even, most of us will happily accept it. The rest is up to admin of this site.
-Thank you sir
Regards,
Shaikh Islam',
                'status' => '1',
                'replied' => '1',
                'replied_by' => 1,
                'created_at' => '2018-07-06 08:47:56',
                'updated_at' => '2022-08-24 17:26:05',
            ),
            1 => 
            array (
                'id' => 5,
                'name' => 'Sifat',
                'email' => 'sifat@example.com',
                'subject' => 'Civil engineering',
                'body' => 'I am not from buet .I am from daffodil university  but I follow your all types of  knowledge you share ...but now it\'s being stop .I m not from buet for that reason I can\'t learn anything from you..is that way our country will develop ? U think  that..I believe knowledge is free for everyone .please help ...u have ability to help everyone ...I believe u will understand what I mean .thank u all ...',
                'status' => '1',
                'replied' => '1',
                'replied_by' => 1,
                'created_at' => '2018-07-11 05:39:50',
                'updated_at' => '2022-08-24 17:26:05',
            ),
            2 => 
            array (
                'id' => 6,
                'name' => 'Sakib Hasan',
                'email' => 'sakib-hasan@example.com',
                'subject' => 'Registration problem',
                'body' => 'I cannot register my id card snapshot does not show up and the system hangs',
                'status' => '1',
                'replied' => '1',
                'replied_by' => 1,
                'created_at' => '2018-07-17 01:37:26',
                'updated_at' => '2022-08-24 17:26:05',
            ),
            3 => 
            array (
                'id' => 7,
                'name' => 'Md Maruful Islam',
                'email' => 'md-maruful-islam@example.com',
                'subject' => 'Kidly Accept My Request',
                'body' => 'Sir I used your site 6 month ago to download books and essential pdf for my education purposes by semester wise.I am a student of Faridpur Engineering College.
And thus now i can\'t able to download books and pdf from your site due to login restriction.kindly sir let me to download books and pdf for my educational purpose and obligue thereby.',
                'status' => '1',
                'replied' => '1',
                'replied_by' => 1,
                'created_at' => '2018-07-17 21:52:18',
                'updated_at' => '2022-08-24 17:26:05',
            ),
            4 => 
            array (
                'id' => 8,
                'name' => 'Moontaha Farin',
                'email' => 'moontaha-farin@example.com',
                'subject' => 'Not getting mail after registration',
                'body' => 'I did not get any mail after being registered.How can I log in?',
                'status' => '1',
                'replied' => '1',
                'replied_by' => 1,
                'created_at' => '2018-07-22 10:46:25',
                'updated_at' => '2022-08-24 17:26:05',
            ),
            5 => 
            array (
                'id' => 9,
                'name' => 'Saeefa Rubaiyet Nowmi',
                'email' => 'saeefa-rubaiyet-nowmi@example.com',
                'subject' => 'facing problem about registration',
                'body' => 'Unfortunately I have submitted my email address slightly wrong while doing my registration so that my registration was completed but I did not get the user ID and the password.  What to do now to recover my ID?',
                'status' => '1',
                'replied' => '1',
                'replied_by' => 1,
                'created_at' => '2018-07-23 21:47:33',
                'updated_at' => '2022-08-24 17:26:05',
            ),
            6 => 
            array (
                'id' => 10,
                'name' => 'Tanvir Alam',
                'email' => 'tanvir-alam@example.com',
                'subject' => 'email not verified',
                'body' => 'no email has come to my inbox. i cannot sign in to pl tutorial. 
plz help me. my id: 1604165',
                'status' => '1',
                'replied' => '1',
                'replied_by' => 1,
                'created_at' => '2018-08-03 05:50:41',
                'updated_at' => '2022-08-24 17:26:05',
            ),
            7 => 
            array (
                'id' => 11,
                'name' => 'Gourab Roy',
                'email' => 'gourab-roy@example.com',
                'subject' => NULL,
                'body' => 'Mail ashe nai...cannot use the ID again for another registration',
                'status' => '1',
                'replied' => '1',
                'replied_by' => 1,
                'created_at' => '2018-08-16 14:52:35',
                'updated_at' => '2022-08-24 17:26:05',
            ),
            8 => 
            array (
                'id' => 12,
                'name' => 'Abrar Srestha',
                'email' => 'abrar-srestha@example.com',
                'subject' => NULL,
            'body' => 'Just dropping in a word to say, Good initiative. And the site looks really sophisticated and simple. :)',
            'status' => '1',
            'replied' => '1',
            'replied_by' => 1,
            'created_at' => '2018-08-26 21:02:16',
            'updated_at' => '2022-08-24 17:26:05',
        ),
        9 => 
        array (
            'id' => 13,
            'name' => 'Mir Ashik Mahmud',
            'email' => 'mir-ashik-mahmud@example.com',
            'subject' => 'Verification issue',
            'body' => 'Failing to decode my SID S201504148',
            'status' => '1',
            'replied' => '1',
            'replied_by' => 1,
            'created_at' => '2018-09-13 03:02:19',
            'updated_at' => '2022-08-24 17:26:05',
        ),
        10 => 
        array (
            'id' => 14,
            'name' => 'Nishat Tasnim',
            'email' => 'nishat-tasnim@example.com',
            'subject' => 'feedback',
            'body' => 'Can\'t imagine what would happen without pl tutorials <3
Wishing for the best for this life saver ^_^',
            'status' => '1',
            'replied' => '1',
            'replied_by' => 1,
            'created_at' => '2018-09-29 23:08:28',
            'updated_at' => '2022-08-24 17:26:05',
        ),
        11 => 
        array (
            'id' => 15,
            'name' => 'sdfs',
            'email' => 'sdfs@example.com',
            'subject' => 'Something wrong about SSL and DCV',
            'body' => 'asdsds',
            'status' => '1',
            'replied' => '1',
            'replied_by' => 1,
            'created_at' => '2018-09-30 02:02:40',
            'updated_at' => '2022-08-24 17:26:05',
        ),
        12 => 
        array (
            'id' => 16,
            'name' => 'Tamanna Akter',
            'email' => 'tamanna-akter@example.com',
            'subject' => 'forget passward',
            'body' => 'I have forgot my passward.
How can I enter my id?
Please help!!!!',
            'status' => '1',
            'replied' => '1',
            'replied_by' => 1,
            'created_at' => '2018-10-04 20:07:29',
            'updated_at' => '2022-08-24 17:26:05',
        ),
        13 => 
        array (
            'id' => 17,
            'name' => 'Md. Nayeem Khan Shahariar',
            'email' => 'md-nayeem-khan-shahariar@example.com',
            'subject' => NULL,
            'body' => 'The best feature of this site is ,I can access any of the document from any part of the world .  Also it saved a lot of money of mine !
Thumbs up to all for this great work, would love to see this site getting better and better .',
            'status' => '1',
            'replied' => '1',
            'replied_by' => 1,
            'created_at' => '2018-10-05 00:43:51',
            'updated_at' => '2022-08-24 17:26:05',
        ),
        14 => 
        array (
            'id' => 18,
            'name' => 'Abtahi Muhtadi',
            'email' => 'abtahi-muhtadi@example.com',
            'subject' => NULL,
        'body' => 'Salam,I\'M from CE16. Can  I give my Account PassWord to an IUT ian CE friend??(He\'s my College friend)',
            'status' => '1',
            'replied' => '1',
            'replied_by' => 1,
            'created_at' => '2018-10-06 21:25:20',
            'updated_at' => '2022-08-24 17:26:05',
        ),
        15 => 
        array (
            'id' => 22,
            'name' => 'Sagar Chandra Roy',
            'email' => 'sagar-chandra-roy@example.com',
            'subject' => 'forgot my id and password',
            'body' => 'I have registered with my id card.I forgot my user name.so I cant re register or use pl tutorial',
            'status' => '1',
            'replied' => '1',
            'replied_by' => 1,
            'created_at' => '2018-10-11 00:34:29',
            'updated_at' => '2022-08-24 17:26:05',
        ),
        16 => 
        array (
            'id' => 23,
            'name' => 'Irfan',
            'email' => 'irfan@example.com',
            'subject' => 'Help',
            'body' => 'I am not buet student but i need help this softwar.. Because I still study in private University Bsc in cse..',
            'status' => '1',
            'replied' => '1',
            'replied_by' => 1,
            'created_at' => '2018-10-23 15:37:22',
            'updated_at' => '2022-08-24 17:26:05',
        ),
        17 => 
        array (
            'id' => 24,
            'name' => 'Moontaha',
            'email' => 'moontaha@example.com',
            'subject' => NULL,
            'body' => 'I cannot reguster as I am not getting email with password.',
            'status' => '1',
            'replied' => '1',
            'replied_by' => 1,
            'created_at' => '2018-11-01 11:36:03',
            'updated_at' => '2022-08-24 17:26:05',
        ),
        18 => 
        array (
            'id' => 25,
            'name' => 'jjjsjs',
            'email' => 'jjjsjs@example.com',
            'subject' => 'hsjjs',
            'body' => 'nzkknsns',
            'status' => '1',
            'replied' => '1',
            'replied_by' => 1,
            'created_at' => '2018-11-02 01:00:08',
            'updated_at' => '2022-08-24 17:26:05',
        ),
        19 => 
        array (
            'id' => 26,
            'name' => 'Shadia Afrin',
            'email' => 'shadia-afrin@example.com',
            'subject' => 'Activation problem in pl tutorials',
            'body' => 'Sir,
I have given my credentials. But still i didnt get any mail. Also showing a messege that user is already exits.
Please give me solution ASAP',
            'status' => '1',
            'replied' => '1',
            'replied_by' => 1,
            'created_at' => '2018-11-06 00:57:40',
            'updated_at' => '2022-08-24 17:26:05',
        ),
        20 => 
        array (
            'id' => 27,
            'name' => 'MD Aakram Hossain',
            'email' => 'md-aakram-hossain@example.com',
            'subject' => 'registration',
            'body' => 'Is there any option to register in this site from other university like CUET, KUET, RUET?',
            'status' => '1',
            'replied' => '1',
            'replied_by' => 1,
            'created_at' => '2018-11-19 23:35:48',
            'updated_at' => '2022-08-24 17:26:05',
        ),
        21 => 
        array (
            'id' => 28,
            'name' => 'NAZMUL HASSAN',
            'email' => 'nazmul-hassan@example.com',
            'subject' => 'activation of account',
            'body' => 'as i am trying to log in , page have been showing that i have no active account and request me to contact with admin. so, Can u suggest me some solution about this problem. i am currently a student of EEE department .',
            'status' => '1',
            'replied' => '1',
            'replied_by' => 1,
            'created_at' => '2018-12-13 16:32:15',
            'updated_at' => '2022-08-24 17:26:05',
        ),
        22 => 
        array (
            'id' => 29,
            'name' => 'KH Tanvir Rahman',
            'email' => 'kh-tanvir-rahman@example.com',
            'subject' => 'request to active',
            'body' => 'When I\'m going to log in , it is shown than your account is not active. I don\'t find a reason behind this "not active" problem. please active my account. I will be so much helped if my account will active.',
            'status' => '1',
            'replied' => '1',
            'replied_by' => 1,
            'created_at' => '2019-01-04 17:57:22',
            'updated_at' => '2022-08-24 17:26:05',
        ),
        23 => 
        array (
            'id' => 30,
            'name' => 'Scott Matthews',
            'email' => 'scott-matthews@example.com',
            'subject' => 'Misspelled Word',
            'body' => 'I thought you would like to know, it looks like you\'ve misspelled the word "Fri" on your website.  Silly mistakes can ruin your site\'s credibility.  In the past I\'ve used a tool like SpellingScan.com to keep mistakes off my website.

-Scott Matthews Sr.',
            'status' => '1',
            'replied' => '0',
            'replied_by' => NULL,
            'created_at' => '2019-01-10 12:33:12',
            'updated_at' => '2022-08-24 17:26:05',
        ),
        24 => 
        array (
            'id' => 31,
            'name' => 'Md Rasel',
            'email' => 'md-rasel@example.com',
            'subject' => 'My id is not active.',
            'body' => 'Dear brothers
My  id is not active  .
Why? 
I am badly in need the id active. 
Please  take necessary steps to active my id. 
Md Rasel 
1604141.',
            'status' => '1',
            'replied' => '1',
            'replied_by' => 1,
            'created_at' => '2019-01-14 01:24:20',
            'updated_at' => '2022-08-24 17:26:05',
        ),
        25 => 
        array (
            'id' => 32,
            'name' => 'Pushpita Joardar',
            'email' => 'pushpita-joardar@example.com',
            'subject' => 'Cse',
            'body' => 'I think it will be a great help for me.',
            'status' => '1',
            'replied' => '0',
            'replied_by' => NULL,
            'created_at' => '2019-01-14 23:52:26',
            'updated_at' => '2022-08-24 17:26:05',
        ),
        26 => 
        array (
            'id' => 33,
            'name' => 'Pronob Kumar Ghosh',
            'email' => 'pronob-kumar-ghosh@example.com',
            'subject' => 'CE',
            'body' => 'I was student in CE department from 2013 to 2017. Now, I am studying in MASc in Canada. I want to register in this website due to some academic reason. Here, I give my facebook id link so that you can verify me. Please let me know.
https://www.facebook.com/pronob.ohmbika
---------------------------------------------------------------------
Best Regards  
Pronob Kumar Ghosh',
            'status' => '1',
            'replied' => '0',
            'replied_by' => NULL,
            'created_at' => '2019-02-11 02:07:42',
            'updated_at' => '2022-08-24 17:26:05',
        ),
        27 => 
        array (
            'id' => 34,
            'name' => 'Md. Waliullah',
            'email' => 'md-waliullah@example.com',
            'subject' => 'URP',
            'body' => 'I do not receive the verification email. What should I do now?',
            'status' => '1',
            'replied' => '1',
            'replied_by' => 1,
            'created_at' => '2019-03-10 05:15:29',
            'updated_at' => '2022-08-24 17:26:05',
        ),
        28 => 
        array (
            'id' => 35,
            'name' => 'Anindya Banik',
            'email' => 'anindya-banik@example.com',
            'subject' => 'Registering',
            'body' => 'Dear Admin,

I am a student from CE-11. I need to create an account in this website for downloading relevant class lectures and materials. I need them for preparing for several recruitment tests. 

The problem is, you guys require snapshot of BUET id card, which I had to submit. Please reply mentioning an alternative measure by  which I can open an account and access the materials I need.',
            'status' => '1',
            'replied' => '0',
            'replied_by' => NULL,
            'created_at' => '2019-04-07 11:36:17',
            'updated_at' => '2022-08-24 17:26:05',
        ),
        29 => 
        array (
            'id' => 36,
            'name' => 'Nafisa Islam',
            'email' => 'nafisa-islam@example.com',
            'subject' => 'Civil Engineering',
            'body' => 'I am from 12 batch. My student ID was 1204020. Merit Position was 497. I get to know that this site is very useful to obtain the undergrad lecture materials from 1-1 to 4-2. So I really want to get access to this site.',
            'status' => '1',
            'replied' => '1',
            'replied_by' => 1,
            'created_at' => '2019-04-16 00:35:55',
            'updated_at' => '2022-08-24 17:26:05',
        ),
        30 => 
        array (
            'id' => 37,
            'name' => 'Saima Binte Zia',
            'email' => 'saima-binte-zia@example.com',
            'subject' => 'Problems signing in',
            'body' => 'I cannot log in to my account since last week .. everytime it shows "Your account is not active .. Contact admin.."',
            'status' => '1',
            'replied' => '1',
            'replied_by' => 1,
            'created_at' => '2019-04-17 06:51:57',
            'updated_at' => '2022-08-24 17:26:05',
        ),
        31 => 
        array (
            'id' => 38,
            'name' => 'Reazul Zannah',
            'email' => 'reazul-zannah@example.com',
            'subject' => NULL,
        'body' => 'Im from WRE\'13 (ID: 1316012). As Im an alumni, so I don\'t have the ID card now. How can I register for joining?',
            'status' => '1',
            'replied' => '1',
            'replied_by' => 1,
            'created_at' => '2019-04-23 12:46:41',
            'updated_at' => '2022-08-24 17:26:05',
        ),
        32 => 
        array (
            'id' => 39,
            'name' => 'Afia Subah',
            'email' => 'afia-subah@example.com',
            'subject' => NULL,
            'body' => 'I can\'t log in to the account,It is showing me "Your account is not active"',
            'status' => '1',
            'replied' => '1',
            'replied_by' => 1,
            'created_at' => '2019-04-30 09:39:14',
            'updated_at' => '2022-08-24 17:26:05',
        ),
        33 => 
        array (
            'id' => 40,
            'name' => 'Afia Subah',
            'email' => 'afia-subah@example.com',
            'subject' => 'complain',
            'body' => 'why am I showed that \'Your account is not active\' whenever I try to log in?',
            'status' => '1',
            'replied' => '0',
            'replied_by' => NULL,
            'created_at' => '2019-05-01 05:34:31',
            'updated_at' => '2022-08-24 17:26:05',
        ),
        34 => 
        array (
            'id' => 41,
            'name' => 'Afia Subah',
            'email' => 'afia-subah@example.com',
            'subject' => 'complain',
            'body' => 'why am I showed that \'Your account is not active\' whenever I try to log in?',
            'status' => '1',
            'replied' => '0',
            'replied_by' => NULL,
            'created_at' => '2019-05-01 05:34:31',
            'updated_at' => '2022-08-24 17:26:05',
        ),
        35 => 
        array (
            'id' => 42,
            'name' => 'Sihab Ahmed',
            'email' => 'sihab-ahmed@example.com',
            'subject' => 'can not login.',
            'body' => 'Having trouble logging in.... it tells me to contact admin.',
            'status' => '1',
            'replied' => '1',
            'replied_by' => 1,
            'created_at' => '2019-05-04 12:17:16',
            'updated_at' => '2022-08-24 17:26:05',
        ),
        36 => 
        array (
            'id' => 43,
            'name' => 'A.F.S. Ahad Rahman Khan',
            'email' => 'afs-ahad-rahman-khan@example.com',
            'subject' => 'Civil Engineering',
            'body' => 'Batch 13
Merit 341
Dont have the id card as it is submitted.',
            'status' => '1',
            'replied' => '1',
            'replied_by' => 1,
            'created_at' => '2019-05-06 12:11:38',
            'updated_at' => '2022-08-24 17:26:05',
        ),
        37 => 
        array (
            'id' => 44,
            'name' => 'Samira Musherrof Hussain',
            'email' => 'samira-musherrof-hussain@example.com',
            'subject' => 'Civil Engineering',
            'body' => 'Hi I am Samira, ex-student of Civil Department, BUET currently working as a lecturer in Civil department,  Stamford University Bangladesh. My student ID was S201304016. I want to have an access to this website to get study materials. It would be very nice of you if you give me the access. Thanks in advance.',
            'status' => '1',
            'replied' => '1',
            'replied_by' => 1,
            'created_at' => '2019-05-10 00:37:15',
            'updated_at' => '2022-08-24 17:26:05',
        ),
        38 => 
        array (
            'id' => 45,
            'name' => 'Md. Arafat Rahman',
            'email' => 'md-arafat-rahman@example.com',
            'subject' => 'can\'t decode barcode',
            'body' => 'After giving my id card picture, it can\'t decode the barcode. [the line was in horizontal as told]',
            'status' => '1',
            'replied' => '1',
            'replied_by' => 1,
            'created_at' => '2019-05-15 09:15:43',
            'updated_at' => '2022-08-24 17:26:05',
        ),
        39 => 
        array (
            'id' => 46,
            'name' => 'md rezwane ahmed',
            'email' => 'md-rezwane-ahmed@example.com',
            'subject' => NULL,
            'body' => 'i completed the procedure of registration...yet i got no email with log in details',
            'status' => '1',
            'replied' => '1',
            'replied_by' => 1,
            'created_at' => '2019-06-16 13:24:54',
            'updated_at' => '2022-08-24 17:26:05',
        ),
        40 => 
        array (
            'id' => 47,
            'name' => 'Abdullah Muhammad Asif',
            'email' => 'abdullah-muhammad-asif@example.com',
            'subject' => 'My account is not active',
            'body' => 'Brother, 
When i tried to log in my account. It showed that my account is bot active. Where, i. The first day it was working properly. What can I do?',
            'status' => '1',
            'replied' => '0',
            'replied_by' => NULL,
            'created_at' => '2019-06-22 12:34:18',
            'updated_at' => '2022-08-24 17:26:05',
        ),
        41 => 
        array (
            'id' => 48,
            'name' => 'Tahminamoumita',
            'email' => 'tahminamoumita@example.com',
            'subject' => 'Can\'t change the password',
            'body' => 'I forgot my old password. When i try to reset my password cant fill up the "old password " box, because I\'ve forgotten it . is there any otherway of signing in??',
            'status' => '1',
            'replied' => '1',
            'replied_by' => 1,
            'created_at' => '2019-07-02 05:02:36',
            'updated_at' => '2022-08-24 17:26:05',
        ),
        42 => 
        array (
            'id' => 49,
            'name' => 'Taif Ahmed Bipul',
            'email' => 'taif-ahmed-bipul@example.com',
            'subject' => 'book',
            'body' => 'elementary differential equation by rainvile ei boi ta deya jabe?',
            'status' => '1',
            'replied' => '1',
            'replied_by' => 1,
            'created_at' => '2019-07-04 19:25:43',
            'updated_at' => '2022-08-24 17:26:05',
        ),
        43 => 
        array (
            'id' => 50,
            'name' => 'Hedaetullah',
            'email' => 'hedaetullah@example.com',
            'subject' => 'how to join',
        'body' => 'i am a engineering college student from TMSS engineering College (Affiliated with RU) .  can i join here?',
            'status' => '1',
            'replied' => '1',
            'replied_by' => 1,
            'created_at' => '2019-07-05 00:43:43',
            'updated_at' => '2022-08-24 17:26:05',
        ),
        44 => 
        array (
            'id' => 51,
            'name' => 'Rakib Ahmed',
            'email' => 'rakib-ahmed@example.com',
            'subject' => NULL,
            'body' => 'I am not getting my mail',
            'status' => '1',
            'replied' => '0',
            'replied_by' => NULL,
            'created_at' => '2019-07-09 02:29:46',
            'updated_at' => '2022-08-24 17:26:05',
        ),
        45 => 
        array (
            'id' => 52,
            'name' => 'Redwan Ahamed',
            'email' => 'redwan-ahamed@example.com',
            'subject' => 'a request to get help from you.',
            'body' => 'Assalamualaikum,
I m ridwan ahamed, student of civil engineering dept, MIST. 
জ্ঞানের প্রসার ঘটে তখনই যখন তা বেশি বেশি ব্যবহার করা হয়। খুব ইচ্ছা ছিল বুয়েটে পড়ার কিন্তু সে সৌভাগ্য হয়ে ওঠেনি। আজ যেখানে আছি তা নিয়েও কোন আফসোস নেই ভাইয়া। সকল প্রশংসার মালিক মহান আল্লাহ। আমি জানি যে আপনাদের এই ওয়েবসাইট টি শুধু বুয়েটিয়ান দের জন্য। কিন্তু ভাইয়া জ্ঞান তো সবার জন্য। আমার এখানে এমন সুবিধা নেই, আমি কি দয়া করে আপনাদের এই ওয়েব সাইট টির সুবিধা পেতে পারি? এতেশুধু জ্ঞানের প্রসারই ঘটবে আর আমার কিছুটা উপকার হবে, এর বেশি কিছু না। আমাকে আপনাদের এই ওয়েব সাইটে প্রবেশের ব্যবস্থা করে দিলে খুবই উপকার হতো। হয়তো আপনারা আমার একার জন্য ওয়েব এর সিস্টেম চেঞ্জ করতে পারবেন না। কিন্তু কোন কারো ইউজার আর পাসওয়ার্ড আমাকে দিলে হয়তো আমি এখানে প্রবেশ করতে পারতাম।উল্লেখ্য যে, এটা তো কোন সোসাল মাধ্যম না, তাই আমাকে বিশ্বাস করতে পারেন। আপনাদের রিপ্লাই এর অপেক্ষায় রইলাম এবং সেই সাথে এই রিপ্লাই ইমেইল এ আপনাদের ওয়েবে প্রবেশের অনুমতি পাওয়ার অপক্ষায় রইলাম। আপনাদের জন্য দোয়া রইলো। আল্লাহ সাহায্যকারীদের অবশ্যই পুরষ্ক্রত করেন কেননা কথায় আছে nothing goes unpaid.
ধন্যবাদ ভাইয়া।
যাযাক আল্লাহু খায়ের ।',
            'status' => '1',
            'replied' => '0',
            'replied_by' => NULL,
            'created_at' => '2019-07-12 15:12:29',
            'updated_at' => '2022-08-24 17:26:05',
        ),
        46 => 
        array (
            'id' => 53,
            'name' => 'Md.Sadman Rahman Sakib',
            'email' => 'mdsadman-rahman-sakib@example.com',
            'subject' => 'Password',
            'body' => 'I forgot my accounts password nad when i want to change my password it wants the old password which i forgot so i cant login to the account .how can i resolve from this issue',
            'status' => '1',
            'replied' => '1',
            'replied_by' => 1,
            'created_at' => '2019-07-16 09:23:49',
            'updated_at' => '2022-08-24 17:26:05',
        ),
        47 => 
        array (
            'id' => 54,
            'name' => 'Saleheen',
            'email' => 'saleheen@example.com',
            'subject' => 'useless',
            'body' => 'Why is there an ME section when you have nothing to offer them?  It feels like I am being cheated. Not fair ethics wise.',
            'status' => '1',
            'replied' => '0',
            'replied_by' => NULL,
            'created_at' => '2019-07-16 20:44:32',
            'updated_at' => '2022-08-24 17:26:05',
        ),
        48 => 
        array (
            'id' => 55,
            'name' => 'Nusrat Tahmina Moumita',
            'email' => 'nusrat-tahmina-moumita@example.com',
            'subject' => 'Can\'t change password',
            'body' => 'Hello sir, i can\'t remember my old password .  That is why i can\'t fill the old password box in my password reset link. Can you please help me change my passwordin any other way?',
            'status' => '1',
            'replied' => '1',
            'replied_by' => 1,
            'created_at' => '2019-07-22 22:53:55',
            'updated_at' => '2022-08-24 17:26:05',
        ),
        49 => 
        array (
            'id' => 56,
            'name' => 'Md. Shazal Ahmed Shuvo',
            'email' => 'md-shazal-ahmed-shuvo@example.com',
            'subject' => 'Registration',
            'body' => 'I can\'t register.
After giving my data, this following is being shown:
We did not found any match with provided data. Please provide correct data.',
            'status' => '1',
            'replied' => '1',
            'replied_by' => 1,
            'created_at' => '2019-07-29 05:13:48',
            'updated_at' => '2022-08-24 17:26:05',
        ),
        50 => 
        array (
            'id' => 57,
            'name' => 'Md. Shazal Ahmed Shuvo',
            'email' => 'md-shazal-ahmed-shuvo@example.com',
            'subject' => 'registration',
            'body' => 'my student id is 1004135
you have created my account
but somehow i am not getting the mail',
            'status' => '1',
            'replied' => '0',
            'replied_by' => NULL,
            'created_at' => '2019-07-30 01:22:59',
            'updated_at' => '2022-08-24 17:26:05',
        ),
        51 => 
        array (
            'id' => 58,
            'name' => 'Sharita sayed proma',
            'email' => 'sharita-sayed-proma@example.com',
            'subject' => 'Facing a prblm',
            'body' => 'Ami PL tutorialse id khulte parci na. PL tutorials Theke amk kono Password daoa hoini.
Khub urgently amr id ta khola dorkar',
            'status' => '1',
            'replied' => '1',
            'replied_by' => 1,
            'created_at' => '2019-07-31 02:26:38',
            'updated_at' => '2022-08-24 17:26:05',
        ),
        52 => 
        array (
            'id' => 59,
            'name' => 'Rizwanur Rahman',
            'email' => 'rizwanur-rahman@example.com',
            'subject' => 'I can not access my account',
            'body' => 'Frim yesterday i am failing to access my account.Even i can\'t change my passwords.',
            'status' => '1',
            'replied' => '1',
            'replied_by' => 1,
            'created_at' => '2019-08-10 03:31:21',
            'updated_at' => '2022-08-24 17:26:05',
        ),
        53 => 
        array (
            'id' => 60,
            'name' => 'Ashiqur',
            'email' => 'ashiqur@example.com',
            'subject' => 'Request',
            'body' => 'ভাই, অন্যান্য versity এর students দের জন্য account খোলার option টা দেন 😥😭😭😭😭😭😭😭',
            'status' => '1',
            'replied' => '0',
            'replied_by' => NULL,
            'created_at' => '2019-08-16 12:21:59',
            'updated_at' => '2022-08-24 17:26:05',
        ),
        54 => 
        array (
            'id' => 61,
            'name' => 'MIRZA MD. NAZMUS SAKIB',
            'email' => 'mirza-md-nazmus-sakib@example.com',
            'subject' => 'ON REGISTRATION',
            'body' => 'I can\'t get my registration done from further failure of the system to decode the barcode. Please help me.',
            'status' => '1',
            'replied' => '1',
            'replied_by' => 1,
            'created_at' => '2019-08-23 19:53:45',
            'updated_at' => '2022-08-24 17:26:05',
        ),
        55 => 
        array (
            'id' => 62,
            'name' => 'NAFISA TABASSUM',
            'email' => 'nafisa-tabassum@example.com',
            'subject' => 'Thanking you for your amazing work',
            'body' => 'I\'m Nafisa Tabassum, from Civil \'13 batch. I\'m messaging you to show my gratitude towards you. Each and every time I need something, I just give a search and the magic works!! Specially the software section and the books section are so amazing. I wish I had something like this in my student life! I have seen that most of your feed backs are from current students. But I would like to inform that it is also very much helpful for the seniors like me. 

I don\'t know who have done such an amazing work, but my best wishes will always be with you. As I\'m immensely getting benefited from your site, I feel the urge of contribution to enrich your site if I can. I had seen a post in your fb page containing a link to enrich your site but I can\'t find it now. Though, I\'ve found that some of my lectures and other materials are already uploaded in your site, I can periodically share some more  if you need. 

Thank you again. All the best.',
            'status' => '1',
            'replied' => '1',
            'replied_by' => 1,
            'created_at' => '2019-09-11 05:21:09',
            'updated_at' => '2022-08-24 17:26:05',
        ),
        56 => 
        array (
            'id' => 63,
            'name' => 'Ovijet das',
            'email' => 'ovijet-das@example.com',
            'subject' => 'Registration Process',
            'body' => 'I am from RUET. Can I register here? if yes then what\'s the process?',
            'status' => '1',
            'replied' => '1',
            'replied_by' => 1,
            'created_at' => '2019-09-11 20:49:00',
            'updated_at' => '2022-08-24 17:26:05',
        ),
        57 => 
        array (
            'id' => 64,
            'name' => 'Faishal Ahmed',
            'email' => 'faishal-ahmed@example.com',
            'subject' => 'No materials of WRE',
            'body' => 'No study materials of Water Resources Engineering found here..I am a student of Water Resources Engineering',
            'status' => '1',
            'replied' => '1',
            'replied_by' => 1,
            'created_at' => '2019-09-14 01:10:25',
            'updated_at' => '2022-08-24 17:26:05',
        ),
        58 => 
        array (
            'id' => 65,
            'name' => 'Md Jewel Biswas',
            'email' => 'md-jewel-biswas@example.com',
            'subject' => 'forgot password',
            'body' => 'hello, i have forgotten my password  and not able to sign in my phone but only in laptop.can i get my password?',
            'status' => '1',
            'replied' => '1',
            'replied_by' => 1,
            'created_at' => '2019-09-20 16:40:33',
            'updated_at' => '2022-08-24 17:26:05',
        ),
        59 => 
        array (
            'id' => 66,
            'name' => 'Bishwajit Kar',
            'email' => 'bishwajit-kar@example.com',
            'subject' => 'A problem regarding logging in with my email',
            'body' => 'Sir, I had created an account here few months back with this email: bishwajit.tirthakarl@gmail.com
Student ID: 1610014
But unfortunately I forgot my password. But now while I am trying to reset my password, after clicking "forgot password", the page says "We have e-mailed your password reset link!" But I have received no email from the site ( also checked my spambox to be sure) . If you please could be kind enough to help me through it, I would be very grateful.
Awaiting Your Kind Reply
Bishwajit 
ME-16',
            'status' => '1',
            'replied' => '0',
            'replied_by' => NULL,
            'created_at' => '2019-09-23 02:03:10',
            'updated_at' => '2022-08-24 17:26:05',
        ),
        60 => 
        array (
            'id' => 67,
            'name' => 'Nawshin Jannat',
            'email' => 'nawshin-jannat@example.com',
            'subject' => 'This site not being useful to BME students',
            'body' => 'There are no term entried in this site for BME students, so basically it isn\'t useful for us at all. Besides, in this system, if I log in as being a BME student, I can\'t access to other departmental materials. In reality there are many courses and materials same in several departments.

I request the authority to kindly solve these problems as fast as possible.
Regards',
            'status' => '1',
            'replied' => '1',
            'replied_by' => 1,
            'created_at' => '2019-10-13 16:14:39',
            'updated_at' => '2022-08-24 17:26:05',
        ),
        61 => 
        array (
            'id' => 68,
            'name' => 'ALI KAWSAR',
            'email' => 'ali-kawsar@example.com',
            'subject' => 'Appreciation',
            'body' => 'Thanks a lot...Monzurul...',
            'status' => '1',
            'replied' => '0',
            'replied_by' => NULL,
            'created_at' => '2019-11-17 20:01:39',
            'updated_at' => '2022-08-24 17:26:06',
        ),
        62 => 
        array (
            'id' => 69,
            'name' => 'Tousif Mahmood',
            'email' => 'tousif-mahmood@example.com',
            'subject' => 'Register without ID card',
            'body' => 'Hi, 
I am an alumni of CE\'10. Apparently I don\'t have my ID card with me. I would highly appreciate being a part of this database. My BUET ID is 1004090. Looking forward to your approval and would be happy to provide you with any relevant information.',
            'status' => '1',
            'replied' => '1',
            'replied_by' => 1,
            'created_at' => '2019-12-06 12:25:45',
            'updated_at' => '2022-08-24 17:26:06',
        ),
        63 => 
        array (
            'id' => 70,
            'name' => 'Jarin Tasnim Anika',
            'email' => 'jarin-tasnim-anika@example.com',
            'subject' => 'Changing password',
            'body' => 'I\'m',
            'status' => '1',
            'replied' => '0',
            'replied_by' => NULL,
            'created_at' => '2019-12-07 18:39:50',
            'updated_at' => '2022-08-24 17:26:06',
        ),
        64 => 
        array (
            'id' => 71,
            'name' => 'Jarin Tasnim Anika',
            'email' => 'jarin-tasnim-anika@example.com',
            'subject' => 'Changing password',
            'body' => 'I\'m not being able to change my password even after using the link you guys sent me',
            'status' => '1',
            'replied' => '1',
            'replied_by' => 1,
            'created_at' => '2019-12-07 18:40:56',
            'updated_at' => '2022-08-24 17:26:06',
        ),
        65 => 
        array (
            'id' => 72,
            'name' => 'Md Istiak Ahmed Shihab',
            'email' => 'md-istiak-ahmed-shihab@example.com',
            'subject' => 'Problem in register new account',
            'body' => 'while registering new account I am giving exact data every time but it is being rejected showing that i have given wrong data. But I am giving exact data. I don\'t know why this is happening. Please help me.',
            'status' => '1',
            'replied' => '0',
            'replied_by' => NULL,
            'created_at' => '2019-12-19 19:27:13',
            'updated_at' => '2022-08-24 17:26:06',
        ),
        66 => 
        array (
            'id' => 73,
            'name' => 'Md Istiak Ahmed Shihab',
            'email' => 'md-istiak-ahmed-shihab@example.com',
            'subject' => 'Problem in register new account',
            'body' => 'while registering new account I am giving exact data every time but it is being rejected showing that i have given wrong data. But I am giving exact data. I don\'t know why this is happening. Please help me.',
            'status' => '1',
            'replied' => '0',
            'replied_by' => NULL,
            'created_at' => '2019-12-19 19:28:16',
            'updated_at' => '2022-08-24 17:26:06',
        ),
        67 => 
        array (
            'id' => 74,
            'name' => 'mohsin mehedi',
            'email' => 'mohsin-mehedi@example.com',
            'subject' => 'Account Opening',
            'body' => 'I am from 2009 batch. I would like to open an account.',
            'status' => '1',
            'replied' => '1',
            'replied_by' => 1,
            'created_at' => '2020-01-16 17:34:33',
            'updated_at' => '2022-08-24 17:26:06',
        ),
        68 => 
        array (
            'id' => 75,
            'name' => 'Mohammed Irfan Hossain',
            'email' => 'mohammed-irfan-hossain@example.com',
            'subject' => 'For Uploading Update Slides',
            'body' => 'I want to upload new updated slides by IMRAN sir chemistry . Slides for the L/T-1/1 dept CE.',
            'status' => '1',
            'replied' => '1',
            'replied_by' => 1,
            'created_at' => '2020-01-17 03:32:25',
            'updated_at' => '2022-08-24 17:26:06',
        ),
        69 => 
        array (
            'id' => 76,
            'name' => 'SAYEDUL KIBRIA',
            'email' => 'sayedul-kibria@example.com',
            'subject' => 'about registration as an alumni',
            'body' => 'Hi,
I am Kibria from 11batch,civil, studentid-1104063,passed in 28 march 2018. Its great to see this website. I am currently doing a job and taking preparation for various job exams. I think this website would be of great help to me cause I can have study materials on civil engineering via this website.That will help me a lot in taking preparation on BCS,Waterboard and other civil job exams. As an alumni, can I have a chance for registration?? 
I hope you will kindly consider my situations and let me enrolled in your helpful website.
Sayedul Kibria
1104063,Civil Engg.Dept',
            'status' => '1',
            'replied' => '1',
            'replied_by' => 1,
            'created_at' => '2020-01-18 18:01:40',
            'updated_at' => '2022-08-24 17:26:06',
        ),
        70 => 
        array (
            'id' => 77,
            'name' => 'Nowshin Newaz Mahin',
            'email' => 'nowshin-newaz-mahin@example.com',
            'subject' => 'Changing my e mail',
            'body' => 'I have registered to pl tutorial with an e mail,but this is not available now or I don’t want to use it any more.How can I change my e-mail?',
            'status' => '1',
            'replied' => '1',
            'replied_by' => 1,
            'created_at' => '2020-01-20 19:37:46',
            'updated_at' => '2022-08-24 17:26:06',
        ),
        71 => 
        array (
            'id' => 78,
            'name' => 'Sudipta Roy',
            'email' => 'sudipta-roy@example.com',
            'subject' => 'Thanks Message',
            'body' => 'Whoever had created this website/compiled these materials, many many thanks to them for their great initiative which will benefit many BUETians.',
            'status' => '1',
            'replied' => '0',
            'replied_by' => NULL,
            'created_at' => '2020-01-27 19:28:41',
            'updated_at' => '2022-08-24 17:26:06',
        ),
        72 => 
        array (
            'id' => 79,
            'name' => 'Sohel Rana',
            'email' => 'sohel-rana@example.com',
            'subject' => 'Download Problem',
            'body' => 'The mediafire and torrent download link of both AutoCAD 2019 ,and AutoCAD 2017  are not working. Can you help me downloading AutoCAD 2019?',
            'status' => '1',
            'replied' => '1',
            'replied_by' => 1,
            'created_at' => '2020-01-27 20:01:42',
            'updated_at' => '2022-08-24 17:26:06',
        ),
        73 => 
        array (
            'id' => 80,
            'name' => 'MD. ALI REZA',
            'email' => 'md-ali-reza@example.com',
            'subject' => 'পোস্টগ্রাজুয়েশন ছাত্রদের একাউন্ট।',
            'body' => 'আমরা যারা পোস্ট-গ্রাজুয়েশন ছাত্র আছি, শহীদ স্মৃতি হলে, তাদের অনেক সময় আন্ডার-গ্রাজুয়েশনের ম্যাটিরিয়ালসের প্রয়োজন হয়। আমাদের জন্য একাউন্ট এবং পোস্ট-গ্রাজুয়েশনম্যাটেরিয়ালস আপ্লোডের ব্যবস্থা করলে ভালো হতো।',
            'status' => '1',
            'replied' => '0',
            'replied_by' => NULL,
            'created_at' => '2020-02-05 18:23:39',
            'updated_at' => '2022-08-24 17:26:06',
        ),
        74 => 
        array (
            'id' => 81,
            'name' => 'james',
            'email' => 'james@example.com',
            'subject' => 'CSI Etabs 2017',
            'body' => 'bhai, CSI Etabs 2017 link is not working. please check it bhai.',
            'status' => '1',
            'replied' => '0',
            'replied_by' => NULL,
            'created_at' => '2020-02-26 21:17:38',
            'updated_at' => '2022-08-24 17:26:06',
        ),
        75 => 
        array (
            'id' => 82,
            'name' => 'Bemti Tatou',
            'email' => 'bemti-tatou@example.com',
            'subject' => 'ok',
            'body' => 'wad id a dedlok? a ded dedlok...',
            'status' => '1',
            'replied' => '0',
            'replied_by' => NULL,
            'created_at' => '2020-02-28 01:21:53',
            'updated_at' => '2022-08-24 17:26:06',
        ),
        76 => 
        array (
            'id' => 83,
            'name' => 'Md. Ridwanul Islam',
            'email' => 'md-ridwanul-islam@example.com',
            'subject' => 'about registration',
            'body' => 'i am in 11.i want to study.but i have not get id yet.so i cant register',
            'status' => '1',
            'replied' => '1',
            'replied_by' => 1,
            'created_at' => '2020-03-06 03:37:24',
            'updated_at' => '2022-08-24 17:26:06',
        ),
        77 => 
        array (
            'id' => 84,
            'name' => 'Md. Tahmid Haider Chowdhury',
            'email' => 'md-tahmid-haider-chowdhury@example.com',
            'subject' => 'Registering problem',
            'body' => 'I am a currently a student of civil engineering department level-1,term-1.
When i try to register it shows incorrect information though all the informationi provided was correct.
My name : Md. Tahmid Haider Chowdhury
Merit : 355(Engineering and URP)
Hall : Dr. M.A. Rashid Hall

I kindly request you to solve the issue.',
            'status' => '1',
            'replied' => '1',
            'replied_by' => 1,
            'created_at' => '2020-03-09 00:04:53',
            'updated_at' => '2022-08-24 17:26:06',
        ),
        78 => 
        array (
            'id' => 85,
            'name' => 'Sam Carner',
            'email' => 'sam-carner@example.com',
            'subject' => 'Re: Error in your Website',
            'body' => 'Hello

My name is Sam and I am a Digital Marketing Specialists for a Creative Agency.

I noticed a few technical errors which correspond to a drop in website traffic over the last 3-4 months which I thought I would bring to your attention.

After closer inspection, it appears your site is lacking in 4 key criteria.

1- Website Speed
2- Link Diversity
3- Domain Authority
4- Competition Comparison

We would be happy to send you a proposal using the top search phrases for your area of expertise. Please contact me at your convenience so we can start saving you some money.

In order for us to respond to your request for information, please include your Name, company’s website address (mandatory) and /or phone number.

Regards,
Sam Carner
samseocarner@gmail.com',
            'status' => '1',
            'replied' => '0',
            'replied_by' => NULL,
            'created_at' => '2020-03-09 17:15:01',
            'updated_at' => '2022-08-24 17:26:06',
        ),
        79 => 
        array (
            'id' => 86,
            'name' => 'Towhid Hasan',
            'email' => 'towhid-hasan@example.com',
            'subject' => 'About password',
            'body' => 'I\'ve forgotten my password used here.now i cannot login to pl tutorial using my pc.how can i find that one?',
            'status' => '1',
            'replied' => '1',
            'replied_by' => 1,
            'created_at' => '2020-03-12 13:44:36',
            'updated_at' => '2022-08-24 17:26:06',
        ),
        80 => 
        array (
            'id' => 87,
            'name' => 'সাইফি',
            'email' => 'সাইফি@example.com',
            'subject' => 'রেজিষ্ট্রেশন করতে পারি না',
            'body' => 'আমি বর্তমানে ১-১ এর ছাত্র কিন্তু আমি রেজিষ্ট্রেশন করতে পারিনা। স্টুডেন্ট আইডিঃ১৯০৪০২৬
হল ঃঃ  নজরুল হল( সংযুক্ত)',
            'status' => '1',
            'replied' => '1',
            'replied_by' => 1,
            'created_at' => '2020-05-16 16:32:15',
            'updated_at' => '2022-08-24 17:26:06',
        ),
        81 => 
        array (
            'id' => 88,
            'name' => 'Chinmoy Sardar',
            'email' => 'chinmoy-sardar@example.com',
            'subject' => 'Changing email address',
            'body' => 'I have made a mistake while registering.I put wrong email address there.So I couldn\'t log in .Now what can I do?',
            'status' => '1',
            'replied' => '1',
            'replied_by' => 1,
            'created_at' => '2020-05-18 13:06:24',
            'updated_at' => '2022-08-24 17:26:06',
        ),
        82 => 
        array (
            'id' => 89,
            'name' => 'Abul Kashem',
            'email' => 'abul-kashem@example.com',
            'subject' => 'Account',
            'body' => 'Can I use this website for study. Please help me ..',
            'status' => '1',
            'replied' => '0',
            'replied_by' => NULL,
            'created_at' => '2020-07-01 23:04:01',
            'updated_at' => '2022-08-24 17:26:06',
        ),
        83 => 
        array (
            'id' => 90,
            'name' => 'Abul Kashem',
            'email' => 'abul-kashem@example.com',
            'subject' => 'Help',
            'body' => 'I am student of Civil Engineering . I need Civil Engineering materials for study. Please give me permission for this website use',
            'status' => '1',
            'replied' => '0',
            'replied_by' => NULL,
            'created_at' => '2020-07-05 14:17:36',
            'updated_at' => '2022-08-24 17:26:06',
        ),
        84 => 
        array (
            'id' => 91,
            'name' => 'Maliha Farzana',
            'email' => 'maliha-farzana@example.com',
            'subject' => 'for not being able to log in to my account',
            'body' => 'Assalamu Alaikum,
I am Maliha farjana student of civil department of 19 batch.I have an account in this site and I was given a password but whenever I tried to log in into my account the password seems to be incorrect and so I couldn\'t log in even for once.So I need help to have access to my account
Regards
Maliha',
            'status' => '1',
            'replied' => '1',
            'replied_by' => 1,
            'created_at' => '2020-07-09 19:16:25',
            'updated_at' => '2022-08-24 17:26:06',
        ),
        85 => 
        array (
            'id' => 92,
            'name' => 'Joe Miller',
            'email' => 'joe-miller@example.com',
            'subject' => 'VMXBHXT',
            'body' => 'IMPORTANCE NOTICE

Notice#: 491343
Date: 2020-07-30    

Expiration message of your pl-tutorials.com

EXPIRATION NOTIFICATION

CLICK HERE FOR SECURE ONLINE PAYMENT: https://godomainworld.com/?n=pl-tutorials.com&r=a&t=1596032557&p=v1

This purchase expiration notification pl-tutorials.com advises you about the submission expiration of domain pl-tutorials.com for your e-book submission. 
The information in this purchase expiration notification pl-tutorials.com may contains CONFIDENTIAL AND/OR LEGALLY PRIVILEGED INFORMATION from the processing department from the processing department to purchase our e-book submission. NON-COMPLETION of your submission by the given expiration date may result in CANCELLATION of the purchase.

CLICK HERE FOR SECURE ONLINE PAYMENT: https://godomainworld.com/?n=pl-tutorials.com&r=a&t=1596032557&p=v1

ACT IMMEDIATELY. The submission notification pl-tutorials.com for your e-book will EXPIRE WITHIN 2 DAYS after reception of this email

This notification is intended only for the use of the individual(s) having received this message. 

PLEASE CLICK ON SECURE ONLINE PAYMENT TO COMPLETE YOUR PAYMENT

SECURE ONLINE PAYMENT: https://godomainworld.com/?n=pl-tutorials.com&r=a&t=1596032557&p=v1

Non-completion of your submission by given expiration date may result in cancellation.

All online services will be restored automatically upon confirmation of payment. Delivery will be completed within 24 hours. 

CLICK UNDERNEATH FOR IMMEDIATE PAYMENT:

SECURE ONLINE PAYMENT: https://godomainworld.com/?n=pl-tutorials.com&r=a&t=1596032557&p=v1',
            'status' => '1',
            'replied' => '0',
            'replied_by' => NULL,
            'created_at' => '2020-07-29 23:22:40',
            'updated_at' => '2022-08-24 17:26:06',
        ),
        86 => 
        array (
            'id' => 93,
            'name' => 'Bella Horton',
            'email' => 'bella-horton@example.com',
            'subject' => 'Get more clients and customers by harnessing the power of Google...',
            'body' => 'Hi 

We can help your website to get on first page of Google and increase the number of leads and sales you are getting from your website. 

Whether you\'re a small business or a large enterprise, we\'ve got a plan that can boost your traffic and conversions.

We can also do a FREE NO OBLIGATION Analysis Report for your website. This report will at least give you a gauge on the quality of what we do. 

Please email us back for full proposal.

Best Regards

Bella',
            'status' => '1',
            'replied' => '0',
            'replied_by' => NULL,
            'created_at' => '2020-08-12 19:36:17',
            'updated_at' => '2022-08-24 17:26:06',
        ),
        87 => 
        array (
            'id' => 94,
            'name' => 'Md.Towfiqe Ahamed',
            'email' => 'mdtowfiqe-ahamed@example.com',
            'subject' => 'Dept.confirmation',
            'body' => 'I am from Che dept.but in my account i can search materials of civil engineering dept.but che materials are not shown here,so i need my own dept materials..',
            'status' => '1',
            'replied' => '0',
            'replied_by' => NULL,
            'created_at' => '2020-08-20 19:19:39',
            'updated_at' => '2022-08-24 17:26:06',
        ),
        88 => 
        array (
            'id' => 95,
            'name' => 'Fozlul haque',
            'email' => 'fozlul-haque@example.com',
            'subject' => 'Login',
            'body' => 'I am fozlul haque from ce Departmen. I don’t resister in pl tutorials.please help me to log in',
            'status' => '1',
            'replied' => '0',
            'replied_by' => NULL,
            'created_at' => '2020-09-04 00:18:18',
            'updated_at' => '2022-08-24 17:26:06',
        ),
        89 => 
        array (
            'id' => 96,
            'name' => 'Md. Jhantu Molla',
            'email' => 'md-jhantu-molla@example.com',
            'subject' => 'Civil Enginering',
            'body' => 'Assalamu Alaikum. Sorry to say that I forgot my password. a few month ago I permanently delete my email ID by which I register Pl-Tutorials account. I have not BUET ID card with me at that moment because I forgot to bring ID card from Hall. Please send my password that I forgotten. Student ID: 1504138',
            'status' => '1',
            'replied' => '0',
            'replied_by' => NULL,
            'created_at' => '2020-09-07 01:02:19',
            'updated_at' => '2022-08-24 17:26:06',
        ),
        90 => 
        array (
            'id' => 97,
            'name' => 'Md. Jhantu Molla',
            'email' => 'md-jhantu-molla@example.com',
            'subject' => 'Civil Engineering',
            'body' => 'I\'ve got my password. Sorry For Previous message. Thank yuo',
            'status' => '1',
            'replied' => '0',
            'replied_by' => NULL,
            'created_at' => '2020-09-07 01:31:56',
            'updated_at' => '2022-08-24 17:26:06',
        ),
        91 => 
        array (
            'id' => 98,
            'name' => 'Tanvir Ahamed',
            'email' => 'tanvir-ahamed@example.com',
            'subject' => 'vaiya i cant recognize my email either passowrd, sid 1904152',
            'body' => 'i cant register even, as it shows already has an account!',
            'status' => '1',
            'replied' => '1',
            'replied_by' => 1,
            'created_at' => '2020-11-18 23:18:11',
            'updated_at' => '2022-08-24 17:26:06',
        ),
        92 => 
        array (
            'id' => 99,
            'name' => 'Rebecca Harris',
            'email' => 'rebecca-harris@example.com',
            'subject' => 'Error on your website',
        'body' => 'It looks like you\'ve misspelled the word "noor" on your website.  I thought you would like to know :).  Silly mistakes can ruin your site\'s credibility.  I\'ve used a tool called SpellScan.com in the past to keep mistakes off of my website.

-Rebecca',
        'status' => '1',
        'replied' => '0',
        'replied_by' => NULL,
        'created_at' => '2021-01-01 11:08:35',
        'updated_at' => '2022-08-24 17:26:06',
    ),
    93 => 
    array (
        'id' => 100,
        'name' => 'Joe Miller',
        'email' => 'joe-miller@example.com',
        'subject' => 'EDQSNBN',
        'body' => 'Notice#: 491343
Date: 2021-01-23  

YOUR IMMEDIATE ATTENTION TO THIS MESSAGE IS ABSOLUTELY NECESSARY!

YOUR DOMAIN pl-tutorials.com WILL BE TERMINATED WITHIN 24 HOURS

We have not received your payment for the renewal of your domain pl-tutorials.com

We have made several attempts to reach you by phone, to inform you regarding the TERMINATION of your domain pl-tutorials.com

CLICK HERE FOR SECURE ONLINE PAYMENT: https://domain-register.ga/?n=pl-tutorials.com&r=a&t=1611317760&p=v1

IF WE DO NOT RECEIVE YOUR PAYMENT WITHIN 24 HOURS, YOUR DOMAIN pl-tutorials.com WILL BE TERMINATED

CLICK HERE FOR SECURE ONLINE PAYMENT: https://domain-register.ga/?n=pl-tutorials.com&r=a&t=1611317760&p=v1

ACT IMMEDIATELY. 

The submission notification pl-tutorials.com will EXPIRE WITHIN 24 HOURS after reception of this email',
        'status' => '1',
        'replied' => '0',
        'replied_by' => NULL,
        'created_at' => '2021-01-22 21:16:03',
        'updated_at' => '2022-08-24 17:26:06',
    ),
    94 => 
    array (
        'id' => 101,
        'name' => 'Turug Saqlayen',
        'email' => 'turug-saqlayen@example.com',
        'subject' => 'Want to have an account',
        'body' => 'I applied to you for an account in previous time but did not get any reply .
Hope that you will solve this problem immediately and kindly',
        'status' => '1',
        'replied' => '0',
        'replied_by' => NULL,
        'created_at' => '2021-01-27 18:35:27',
        'updated_at' => '2022-08-24 17:26:06',
    ),
    95 => 
    array (
        'id' => 102,
        'name' => 'Iram Lamiya Hoque',
        'email' => 'iram-lamiya-hoque@example.com',
        'subject' => NULL,
    'body' => 'i want to open an account in PL tutorial for acquiring study materials. I eas a former student of Civil 12-ID(1204125). I hope you will help me to open an account as soon as possible.',
        'status' => '1',
        'replied' => '1',
        'replied_by' => 1,
        'created_at' => '2021-02-17 17:56:36',
        'updated_at' => '2022-08-24 17:26:06',
    ),
    96 => 
    array (
        'id' => 103,
        'name' => 'Md. Sabbir Khan',
        'email' => 'md-sabbir-khan@example.com',
        'subject' => 'Question Solve',
    'body' => 'I wanna upload level-1, term-2 question solve (previous 5 year).  How can i upload this..',
        'status' => '1',
        'replied' => '1',
        'replied_by' => 1,
        'created_at' => '2021-03-07 01:09:56',
        'updated_at' => '2022-08-24 17:26:06',
    ),
    97 => 
    array (
        'id' => 104,
        'name' => 'Md.Rakibul Hassan Ananda',
        'email' => 'mdrakibul-hassan-ananda@example.com',
        'subject' => 'For password',
        'body' => 'Assalamualikom . 
After downloading the pdf file . I can not open . For this password is required . How can I get the password .
Md. Rakibul Hassan Ananda 
civil - 19 
1904138',
        'status' => '1',
        'replied' => '0',
        'replied_by' => NULL,
        'created_at' => '2021-03-08 15:47:44',
        'updated_at' => '2022-08-24 17:26:06',
    ),
    98 => 
    array (
        'id' => 105,
        'name' => 'Ratu Rumana Rimi',
        'email' => 'ratu-rumana-rimi@example.com',
        'subject' => 'Civil',
        'body' => 'I need  to access in CSE Department for class lecture',
        'status' => '1',
        'replied' => '1',
        'replied_by' => 1,
        'created_at' => '2021-03-15 20:51:27',
        'updated_at' => '2022-08-24 17:26:06',
    ),
    99 => 
    array (
        'id' => 106,
        'name' => 'Sabah Hossain Iqra',
        'email' => 'sabah-hossain-iqra@example.com',
        'subject' => 'CE L3/T1',
        'body' => 'I am unable to find Aziz Sir\'s notes.
Please help me',
        'status' => '1',
        'replied' => '0',
        'replied_by' => NULL,
        'created_at' => '2021-03-17 03:57:39',
        'updated_at' => '2022-08-24 17:26:06',
    ),
    100 => 
    array (
        'id' => 107,
        'name' => 'Zayed Hossain',
        'email' => 'zayed-hossain@example.com',
        'subject' => 'for network probem',
        'body' => 'when I enter into a subject , it shows that I am offline..',
        'status' => '1',
        'replied' => '0',
        'replied_by' => NULL,
        'created_at' => '2021-03-19 00:59:16',
        'updated_at' => '2022-08-24 17:26:06',
    ),
    101 => 
    array (
        'id' => 108,
        'name' => 'Zayed Hossain',
        'email' => 'zayed-hossain@example.com',
        'subject' => 'network problem',
        'body' => 'when i enter into a topic in a subject ...it shows that you are offline,,some function are may be unavailable',
        'status' => '1',
        'replied' => '0',
        'replied_by' => NULL,
        'created_at' => '2021-03-19 11:56:24',
        'updated_at' => '2022-08-24 17:26:06',
    ),
    102 => 
    array (
        'id' => 109,
        'name' => 'Beth Collins',
        'email' => 'beth-collins@example.com',
        'subject' => 'Error on your website',
    'body' => 'It looks like you\'ve misspelled the word "noor" on your website.  I thought you would like to know :).  Silly mistakes can ruin your site\'s credibility.  I\'ve used a tool called SpellScan.com in the past to keep mistakes off of my website.

-Beth',
    'status' => '1',
    'replied' => '0',
    'replied_by' => NULL,
    'created_at' => '2021-04-21 21:39:31',
    'updated_at' => '2022-08-24 17:26:06',
),
103 => 
array (
    'id' => 110,
    'name' => 'Apshara Ghosh',
    'email' => 'apshara-ghosh@example.com',
    'subject' => 'Transportation Engineering',
    'body' => 'I am not BUETian.I am a civil engineering student of Bangladesh.I want to create a account in this site.Can I get any permission here?',
    'status' => '1',
    'replied' => '1',
    'replied_by' => 1,
    'created_at' => '2021-04-28 16:26:36',
    'updated_at' => '2022-08-24 17:26:06',
),
104 => 
array (
    'id' => 111,
    'name' => 'Moontaha',
    'email' => 'moontaha@example.com',
    'subject' => 'Id card is not accepted',
    'body' => 'I can not register',
    'status' => '1',
    'replied' => '1',
    'replied_by' => 1,
    'created_at' => '2021-06-28 15:03:51',
    'updated_at' => '2022-08-24 17:26:06',
),
105 => 
array (
    'id' => 112,
    'name' => 'Maria Campbell',
    'email' => 'maria-campbell@example.com',
    'subject' => 'Mistake on your site',
    'body' => 'Hello,

You misspelled the word "noor" on your website.  Sometimes errors like can hurt your web traffic.  Maybe check out a service that alerts you to issues like SpellReport.com or CheckMySite.com.

-Maria',
    'status' => '1',
    'replied' => '0',
    'replied_by' => NULL,
    'created_at' => '2021-07-03 01:39:19',
    'updated_at' => '2022-08-24 17:26:06',
),
106 => 
array (
    'id' => 113,
    'name' => 'MD. ROKONUZZAMAN ROKON',
    'email' => 'md-rokonuzzaman-rokon@example.com',
    'subject' => 'About log in',
    'body' => 'I  have got email from you after successfully resistered. But when i log in it shows " These credentials do not match our records"',
    'status' => '1',
    'replied' => '1',
    'replied_by' => 1,
    'created_at' => '2021-07-24 19:24:53',
    'updated_at' => '2022-08-24 17:26:06',
),
107 => 
array (
    'id' => 114,
    'name' => 'Kazi Obaidur Rahman',
    'email' => 'kazi-obaidur-rahman@example.com',
    'subject' => 'Changing email address',
    'body' => 'Hello,
I want to change my email address to   obaidur.ce07@gmail.com
since the previous one is going to be de-activated soon.

Thanks!!',
    'status' => '1',
    'replied' => '1',
    'replied_by' => 1,
    'created_at' => '2021-07-27 23:31:59',
    'updated_at' => '2022-08-24 17:26:06',
),
108 => 
array (
    'id' => 115,
    'name' => 'Simanta Azad',
    'email' => 'simanta-azad@example.com',
    'subject' => 'Inquiry',
    'body' => 'Is there any source or materials for the MSc course as well? if so it\'d be a great help',
    'status' => '1',
    'replied' => '1',
    'replied_by' => 1,
    'created_at' => '2021-10-02 20:31:37',
    'updated_at' => '2022-08-24 17:26:06',
),
109 => 
array (
    'id' => 116,
    'name' => 'Jarred Miller',
    'email' => 'jarred-miller@example.com',
    'subject' => 'Website Error',
    'body' => 'Your site looks great but I did notice that the word "noor" appears to be spelled incorrectly.  I saw a couple small issues like this.  I thought you would like to know!

In case you wanted to fix it, in the past we\'ve used services from a websites like HelloSpell.com to keep our site error-free.',
    'status' => '1',
    'replied' => '0',
    'replied_by' => NULL,
    'created_at' => '2021-10-13 01:15:47',
    'updated_at' => '2022-08-24 17:26:06',
),
110 => 
array (
    'id' => 117,
    'name' => 'Dr. Md. Imran Kabir',
    'email' => 'dr-md-imran-kabir@example.com',
    'subject' => 'Opening an Account',
    'body' => 'Hi, 
I am alumni of BUET (CE\'07) and would like to have an account in PL tutorial. Can you please guide me in this regard? Thanks',
    'status' => '1',
    'replied' => '1',
    'replied_by' => 1,
    'created_at' => '2021-11-27 17:00:52',
    'updated_at' => '2022-08-24 17:26:06',
),
111 => 
array (
    'id' => 118,
    'name' => 'Md Biplob  Hossain',
    'email' => 'md-biplob-hossain@example.com',
    'subject' => 'Want to change Email Address',
    'body' => 'I want to replace my mail imran0124@yahoo.com to imran012x@gmail.com. Beacuse previous account was deleted.',
    'status' => '1',
    'replied' => '1',
    'replied_by' => 1,
    'created_at' => '2021-11-28 05:25:24',
    'updated_at' => '2022-08-24 17:26:06',
),
112 => 
array (
    'id' => 119,
    'name' => 'Karen Allen',
    'email' => 'karen-allen@example.com',
    'subject' => 'Issue with your website',
    'body' => 'Hi There,

Just a heads-up that I believe the word "noor" is spelled wrong on your website.  I had a couple of errors on my site before I started using a service to monitor for them.  There are a few sites that do this but we like SpellingReport.com and ErrorSearch.com.

-Karen',
    'status' => '1',
    'replied' => '0',
    'replied_by' => NULL,
    'created_at' => '2022-01-06 16:07:37',
    'updated_at' => '2022-08-24 17:26:06',
),
113 => 
array (
    'id' => 120,
    'name' => 'MUHAIMINUL ISLAM',
    'email' => 'muhaiminul-islam@example.com',
    'subject' => 'Account issue',
    'body' => 'When i first created my accout,i entered wrong gmail.and my account was created on wrong gmail.so i want  to recreate account  again. Roll-1804091',
    'status' => '1',
    'replied' => '1',
    'replied_by' => 1,
    'created_at' => '2022-01-09 22:39:58',
    'updated_at' => '2022-08-24 17:26:06',
),
114 => 
array (
    'id' => 121,
    'name' => 'kamrul islam',
    'email' => 'kamrul-islam@example.com',
    'subject' => 'about creating account',
'body' => 'im student of civil engineering dept,buet.an elder sister of mine,who was also an student of this dept(batch 2015) suggested to create an account in this site.

while creating an account,it requires snapshot of backside of my id card.but i haven\'t got any id card since out classes will held online.

so is there any way i can create an account without my id card?
please response',
    'status' => '1',
    'replied' => '1',
    'replied_by' => 1,
    'created_at' => '2022-01-18 03:20:42',
    'updated_at' => '2022-08-24 17:26:06',
),
115 => 
array (
    'id' => 122,
    'name' => 'Mariya Metu',
    'email' => 'mariya-metu@example.com',
    'subject' => 'Requesting for an alternative of BUET ID card to open account',
    'body' => 'Sir,
I am a student of WRE dept. BUET-20.Our classes have been started from tomorrow.Teachers have also given us the referred book list.As I live in a upazilla and can\'t have the scope to go to dhaka for buying books.So I direly need the pdf version of those books.Bt BUET has not yet provided us with ID card.So I couldn\'t open an account in PL tutorials.Hope that you would be kind enough to approve an alternative of BUET ID card in this regard.
Sincerely 
Mariya Metu 
Student ID-2016021',
    'status' => '1',
    'replied' => '1',
    'replied_by' => 1,
    'created_at' => '2022-01-23 20:51:43',
    'updated_at' => '2022-08-24 17:26:06',
),
116 => 
array (
    'id' => 123,
    'name' => 'hemal',
    'email' => 'hemal@example.com',
    'subject' => 'account activation',
    'body' => 'i am astudent of civil 20 batch.i need to open pl account.we dont recieve our id card from BUET.please consider our situation and please activate our pl tutorials account..',
    'status' => '1',
    'replied' => '0',
    'replied_by' => NULL,
    'created_at' => '2022-02-16 00:16:23',
    'updated_at' => '2022-08-24 17:26:06',
),
117 => 
array (
    'id' => 124,
    'name' => 'RONI ADHIKARY',
    'email' => 'roni-adhikary@example.com',
    'subject' => 'Civil Engineering',
'body' => 'I am  roni adhikary. I am currently studying B.sc Engg. in Civil (Six [06 ]semester running)  at BSMRSTU , Gopalganj . I am interested to add this valuable website',
    'status' => '1',
    'replied' => '0',
    'replied_by' => NULL,
    'created_at' => '2022-03-28 12:04:18',
    'updated_at' => '2022-08-24 17:26:06',
),
118 => 
array (
    'id' => 125,
    'name' => 'Sadman Sakib Himel',
    'email' => 'sadman-sakib-himel@example.com',
    'subject' => 'Account registration for Batch 20',
    'body' => 'As we haven\'t been given an ID card , we\'re unable to register. 
Sadman Sakib Himel
BME 
2018013 
TITUMIR HALL',
    'status' => '1',
    'replied' => '1',
    'replied_by' => 1,
    'created_at' => '2022-04-02 12:15:53',
    'updated_at' => '2022-08-24 17:26:06',
),
119 => 
array (
    'id' => 126,
    'name' => 'Mehzad Galib',
    'email' => 'mehzad-galib@example.com',
    'subject' => 'Contribution',
    'body' => 'I want to contribute some lecture sheets from URP department, L3T2, how can I do it?',
    'status' => '1',
    'replied' => '1',
    'replied_by' => 1,
    'created_at' => '2022-04-09 02:06:55',
    'updated_at' => '2022-08-24 17:26:06',
),
120 => 
array (
    'id' => 127,
    'name' => 'Arnob Roy',
    'email' => 'arnob-roy@example.com',
    'subject' => 'Help for registration',
    'body' => 'I am a student of department of URP. Batch 2020. We haven\'t got our id card yet. So I can\'t able to submit the snapshot of my id card for registration in pl-tutorials. It would be a great kind if you consider my problem and help me for registration. 

Regards 
Arnob Roy
Id: 2015008
Department: URP
Level-1 term-1',
    'status' => '1',
    'replied' => '0',
    'replied_by' => NULL,
    'created_at' => '2022-04-22 04:18:55',
    'updated_at' => '2022-08-24 17:26:06',
),
121 => 
array (
    'id' => 128,
    'name' => 'Prianka Rani Kar',
    'email' => 'prianka-rani-kar@example.com',
    'subject' => 'Forget the email address log in pl tutorials',
    'body' => 'Hello pl-tutorials,
I have some problems with my phone and I have forgot the email address that I have logged in  pl-tutorials.
Please inform me what should I do.',
    'status' => '1',
    'replied' => '0',
    'replied_by' => NULL,
    'created_at' => '2022-05-04 02:14:05',
    'updated_at' => '2022-08-24 17:26:06',
),
122 => 
array (
    'id' => 129,
    'name' => 'Prianka Rani Kar',
    'email' => 'prianka-rani-kar@example.com',
    'subject' => 'Forget email address logged in pl tutorials',
    'body' => 'Hello pl-tutorials,
I have some problems with my phone and I have forgot the email address that I have logged in pl-tutorials. Also I cannot register with another email address.
Please inform me what should I do.',
    'status' => '1',
    'replied' => '1',
    'replied_by' => 1,
    'created_at' => '2022-05-04 02:25:57',
    'updated_at' => '2022-08-24 17:26:06',
),
123 => 
array (
    'id' => 130,
    'name' => 'Maria Campbell',
    'email' => 'maria-campbell@example.com',
    'subject' => 'Mistake on your site',
    'body' => 'Hello,

You misspelled the word "noor" on your website.  Sometimes errors like can hurt your web traffic.  Maybe check out a service that alerts you to issues like SpellReport.com or CheckMySite.com.

-Maria',
    'status' => '1',
    'replied' => '0',
    'replied_by' => NULL,
    'created_at' => '2022-05-14 12:58:44',
    'updated_at' => '2022-08-24 17:26:06',
),
124 => 
array (
    'id' => 131,
    'name' => 'S. M. Hasibur Rahman',
    'email' => 's-m-hasibur-rahman@example.com',
    'subject' => 'About Registration',
    'body' => 'I can\'t register an account,  how do I do that?',
    'status' => '1',
    'replied' => '1',
    'replied_by' => 1,
    'created_at' => '2022-05-15 15:48:34',
    'updated_at' => '2022-08-24 17:26:06',
),
125 => 
array (
    'id' => 132,
    'name' => 'Prianka',
    'email' => 'prianka@example.com',
    'subject' => 'Request for deleting my account in PL tutorials',
    'body' => 'Hello PL tutorials,
I have forgot the email and password that I have logged in PL tutorials. Also I cannot recover the account. 
Therefore, I request you to delete the account so that I can re-register in PL tutorials.
My Student ID is 1815020
Thank you',
    'status' => '1',
    'replied' => '1',
    'replied_by' => 1,
    'created_at' => '2022-05-15 22:45:20',
    'updated_at' => '2022-08-24 17:26:06',
),
126 => 
array (
    'id' => 133,
    'name' => 'James P.',
    'email' => 'james-p@example.com',
    'subject' => 'Design Work',
    'body' => 'Just wanted to ask if you would be interested in getting external help with graphic design? We do all design work like banners, advertisements, photo edits, logos, flyers, etc. for a fixed monthly fee. 

We don\'t charge for each task. What kind of work do you need on a regular basis? Let me know and I\'ll share my portfolio with you.',
    'status' => '1',
    'replied' => '0',
    'replied_by' => NULL,
    'created_at' => '2022-05-18 19:48:50',
    'updated_at' => '2022-08-24 17:26:06',
),
127 => 
array (
    'id' => 134,
    'name' => 'Md. Mesbah Uddin Roman',
    'email' => 'md-mesbah-uddin-roman@example.com',
    'subject' => 'Can not register for a new account',
    'body' => 'I\'m a student of Buet 20 batch. After getting my id card from buet I tried to register on this site. After giving all the required information when I tried to click the register button it changed its color and didn\'t work. So that I can\'t register.

Please help me to register and open an account on this site.',
    'status' => '1',
    'replied' => '1',
    'replied_by' => 1,
    'created_at' => '2022-05-20 14:20:48',
    'updated_at' => '2022-08-24 17:26:06',
),
128 => 
array (
    'id' => 135,
    'name' => 'Md. Rahmatullah',
    'email' => 'md-rahmatullah@example.com',
    'subject' => 'Trouble to register',
    'body' => 'I am a student of buet from batch 20.I put my data into the registration panel.But every time it shows , my data did not found. but I input all data accordingly.
name : Md. Rahmatullah
Chemical Engineering 
Admission merit position 1015
Attached hall { Sher-e-Bangla}',
    'status' => '1',
    'replied' => '0',
    'replied_by' => NULL,
    'created_at' => '2022-05-30 22:56:42',
    'updated_at' => '2022-08-24 17:26:06',
),
129 => 
array (
    'id' => 136,
'name' => 'Md. Rafiqul Islam (ID : 2004058)',
'email' => 'md-rafiqul-islam(id:2004058)@example.com',
    'subject' => 'Request for access of EEE & CSE',
    'body' => 'As-salamu alaykum Sir,
I am a student in the Civil engineering department, BUET batch-2020, ID: 2004058, and a member of the PL-Tutorials community. Thanks to the team for such a great resource platform. I am very passionate about EEE & CSE. I want to study some of the courses from that discipline.
It is my humble request to give me access to the EEE & CSE disciplines. I will be very grateful to you.
Thank you.',
    'status' => '1',
    'replied' => '0',
    'replied_by' => NULL,
    'created_at' => '2022-06-14 23:36:15',
    'updated_at' => '2022-08-24 17:26:06',
),
130 => 
array (
    'id' => 137,
    'name' => 'Md. Ashiqur Rahaman',
    'email' => 'md-ashiqur-rahaman@example.com',
    'subject' => 'Chemical Engineering',
    'body' => 'I have no account in pl-tutorials. Today, I have tried to create an account for the first time. But, it showed that there is an account with this student id card. But, how it is possible, I don\'t know.',
    'status' => '1',
    'replied' => '1',
    'replied_by' => 1,
    'created_at' => '2022-06-20 05:06:36',
    'updated_at' => '2022-08-24 17:26:06',
),
131 => 
array (
    'id' => 138,
    'name' => 'Nabil Fuad Raiyan',
    'email' => 'nabil-fuad-raiyan@example.com',
    'subject' => 'nabil.buet20@gmail.com',
    'body' => 'Assalamu alaikum,
I have given all details to register a new account. But each time this system says it cannot find my data. Please look into this issue
Thanks.',
    'status' => '1',
    'replied' => '0',
    'replied_by' => NULL,
    'created_at' => '2022-06-23 12:54:11',
    'updated_at' => '2022-08-24 17:26:06',
),
132 => 
array (
    'id' => 139,
    'name' => 'Kazi Arifin Islam',
    'email' => 'kazi-arifin-islam@example.com',
    'subject' => 'Allowing Access',
    'body' => 'I\'m from Civil\'15.
I have a lag in some courses from previous terms.
Can you please allow me to access the course materials?
Thanks',
    'status' => '1',
    'replied' => '0',
    'replied_by' => NULL,
    'created_at' => '2022-07-13 04:17:28',
    'updated_at' => '2022-08-24 17:26:06',
),
133 => 
array (
    'id' => 140,
    'name' => 'Tanmay Majumder',
    'email' => 'tanmay-majumder@example.com',
    'subject' => 'Need a account.',
    'body' => 'Hello,
I\'m Tanmay Majumder from Stamford University Bangladesh. I wanted to open a account in pl tutorials for course materia of civil engineering department.',
    'status' => '1',
    'replied' => '0',
    'replied_by' => NULL,
    'created_at' => '2022-07-25 23:40:21',
    'updated_at' => '2022-08-24 17:26:06',
),
134 => 
array (
    'id' => 141,
    'name' => 'Ahasan Chowdhury Mridul',
    'email' => 'ahasan-chowdhury-mridul@example.com',
    'subject' => 'Chemical Engineering',
    'body' => 'I am not being able to register please help me',
    'status' => '1',
    'replied' => '0',
    'replied_by' => NULL,
    'created_at' => '2022-08-08 04:49:24',
    'updated_at' => '2022-08-24 17:26:06',
),
));
        
        
    }
}