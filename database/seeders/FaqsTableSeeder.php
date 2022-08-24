<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FaqsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('faqs')->delete();
        
        \DB::table('faqs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'If you are eligible to open an account !',
                'body' => '<p>1.If you are a student of current batch, then you can open an account by <a href="http://pl-tutorials.com/register" target="_blank">going here.</a></p><p>2. If you are an alumnus, then please send a message <a href="https://www.facebook.com/thepltutorials/" target="_blank">here</a> to open your account.</p><p>3. If you a foreign student of BUET then please send a message <a href="https://www.facebook.com/thepltutorials/" target="_blank">here&nbsp;</a> to open your account. <br><br>Have a good day. -PL Tutorials<br></p>',
                'status' => 1,
                'created_at' => '2018-06-26 18:37:50',
                'updated_at' => '2018-11-04 00:13:50',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'How can i open an account !!',
            'body' => '<p>1. Take a clear photograph of the backside of your student id.</p><p><span style="font-family: &quot;Arial Black&quot;;">Like this one</span><br></p><p><img src="http://pl-tutorials.com/user/img/id/2.jpg" width="271" height="203"><img src="http://pl-tutorials.com/user/img/id/1.jpg" width="270" height="203"><br></p><p><span style="font-family: &quot;Arial Black&quot;;">Not like this</span></p><p><img src="http://pl-tutorials.com/user/img/id/3.jpg" width="205" height="226"><img src="http://pl-tutorials.com/user/img/id/4.jpg" width="301" height="225"></p><p><br></p><p>2. Goto This link <a href="http://pl-tutorials.com/register">http://pl-tutorials.com/register</a> and fill up the form carefully.</p><p>3.&nbsp; If everything&nbsp; goes right then you will see this message&nbsp;</p><p><img style="width: 546px;" src="http://pl-tutorials.com/user/img/id/ok.png"><br>4. After submitting the form please check your mail (spam folder also if needed) for your login details.<br>5. If you still face any problem then send a message <a href="https://www.facebook.com/thepltutorials/" target="_blank">here.</a><br></p>',
                'status' => 1,
                'created_at' => '2018-06-26 19:01:16',
                'updated_at' => '2018-06-26 19:01:16',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'I am a non BUETian, can i open an account ?',
                'body' => '<p>Sorry, you can not :(<br>This website is only for current and previous students of BUET. <br>Have a good day. -PL Tutorials<br></p>',
                    'status' => 1,
                    'created_at' => '2018-06-27 00:45:31',
                    'updated_at' => '2018-06-27 00:46:05',
                ),
                3 => 
                array (
                    'id' => 4,
                    'title' => 'I have forgot my password. What should i do now?',
                'body' => '<div dir="ltr">1. Goto this link <a href="https://pl-tutorials.com/password/reset" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://pl-tutorials.com/password/reset&amp;source=gmail&amp;ust=1543495257402000&amp;usg=AFQjCNEGaxMIsSe_rqYFFMIH3q45If2BTQ">https://pl-tutorials.com/<wbr>password/reset</a><br></div><div>2. enter your email <br></div><div>3. Press Submit</div><div>4. You will get an email with a password reset link (expires after 6 hours) <br></div><div>5. goto that link and enter your email address and new password<br></div><div>6. click change password<br></div>7. Congratulations, you have successfully changed your password.<br><br>Have a good day.<br>',
                    'status' => 1,
                    'created_at' => '2018-11-28 21:41:58',
                    'updated_at' => '2018-11-28 21:41:58',
                ),
            ));
        
        
    }
}