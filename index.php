<?php 
/**
 * Index file
 * 
 * This file is important to all pages changes can be made to constants if  the 
 * need arises
 * @author Ibrahim & Atiku 
 * @version 1.0
 * @link http://www.github.com/hssd8/sound
 */
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="style/layout.css" rel="stylesheet" type="text/css" />
        <title>Sound Up Load System</title>
    </head>
    <body>
        <div class="wrapper">
            <div class='top-holder' >
                <img src='images/logo.fw.png' />
            </div>
            <div class='login-style'>
                <div id='left'>
                    <div class='sub-cat'>
                        
                    </div>
                    <div class='sub-cat'>
                        
                    </div>
                </div>
                <div id='right'>
                    <div id='top'>
                        <input type='text' name='email' class='gen_inp inp_top' value='Email' />
                        <input type='password' name='pswd' class='gen_inp inp_bottom' value='pasword' title='Enter Password'/>
                        <input type='submit' name='login_sub' class='gen_sub login_but' value='LOGIN'/>
                    </div>
                    <div id='bottom'>
                        <input type='text'  name='reg_name'  class='gen_inp inp_top' value='Full Name'/>
                        <input type='text'  name='reg_email' class='gen_inp inp_mid'value='Email'/>
                        <input type='password' name='reg_pswd' class='gen_inp inp_bottom' value='password' title='Enter Password'/>
                        <input type='submit' name='reg_sub'class='gen_sub reg_but' value='REGISTER'/>
                    </div>
                </div>
            </div>
            <div class='footer-login'>
                 &copy; Sound Upload System 2015
            </div>
        </div>
    </body>
</html>