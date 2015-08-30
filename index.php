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
        <link rel="icon" href="./images/icon.fw.png" />
        <script type="text/javascript" src="./script/jquery.min.js"></script>
        <script type="text/javascript" src="./script/jquery.defaultvalue.js"></script>
        <script type="text/javascript" src="./script/engine.js"></script>
        <title>Sound Upload System</title>
    </head>
    <body>
        <div class='loader'> </div>
        <div class="wrapper">
            <div class='top-holder' >
                <img src='images/logo.fw.png' />
                <div class='sys-error'>
                    Invalid login detail<span class='close-div' title='Close'>X</span>
                </div>
            </div>
            <div class='login-style'>
                <div id='left'>
                    
                </div>
                <div id='right'>
                    <!-- Login Holder -->
                    <div id='top'>
                        <input type='text' 
                               name='log-email' 
                               class='gen_inp inp_top' 
                               placeholder='Email' />
                        <input type='password' 
                               name='pswd' 
                               class='gen_inp inp_bottom' 
                               placeholder='Password' />
                        <input type='submit' 
                               name='login_sub' 
                               class='gen_sub login_but' 
                               value='LOGIN'/>
                    </div>
                    <!-- Register Holder -->
                    <div id='bottom'>
                        <input type='text'  
                               name='reg_name'  
                               class='gen_inp inp_top' 
                               placeholder='Enter your full name'/>
                        <input type='text'  
                               name='reg_email' 
                               class='gen_inp inp_mid' 
                               placeholder='Enter your email'/>
                        <input type='password' 
                               name='reg_pswd' 
                               class='gen_inp inp_bottom' 
                               placeholder='Enter Password'/>
                        <input type='submit' 
                               name='reg_sub'
                               class='gen_sub reg_but' 
                               value='REGISTER'/>
                    </div>
                </div>
            </div>
            <div class='footer-login'>
                 &copy; Sound Upload System 2015
            </div>
        </div>
    </body>
</html>