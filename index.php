<?php
	error_reporting(E_ALL ^ E_NOTICE);
    ini_set('session.use_trans_sid', false);
    ini_set('session.use_only_cookies', true); 

    include("constants.php");
    include("whitelist.php");

    //trim all spaces before touching the $_POST array
    $_POST = array_map('trim', $_POST);


    
    if (isset($section[$_GET['section']])) {
        $isSection = $section[$_GET['section']];
        include("includes/".$isSection.'.php');
    } else {
        $isSection = 'home';
        include("includes/".$isSection.'.php');        
    }
    
    include 'templates/html_head_begin.tpl';
        
    if (file_exists('templates/'.$isSection.'.js.tpl')) {
        include 'templates/'.$isSection.'.js.tpl'; 
    }
    include 'templates/html_head_end.tpl';
        
    include 'templates/html_body_tag.tpl';
    include 'templates/header.tpl';
    
    include 'templates/content_begin_tag.tpl';
    
    include("templates/".$isSection.'.tpl'); 
    
    include 'templates/content_end_tag.tpl';   
    include 'templates/footer.tpl';
     
    include 'templates/html_footer.tpl';

?>