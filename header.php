<!DOCTYPE html>

<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="<?=bloginfo('template_url')?>/css/main.css">
    <link rel="stylesheet" type="text/css" href="<?=bloginfo('template_url')?>/css/mobile.css">
    <link rel="stylesheet" type="text/css" href="<?=bloginfo('template_url')?>/css/reset.css">
    <title>Blog ClickLig </title>
    

  
</head>

<body>

<header>

    <div class="header">

      <div class="logo"><?php if (has_custom_logo()): the_custom_logo();  endif; ?></div>

      <nav><?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?></nav>

      <div class="btns">         
              
        <ul>

            <li><Link to="login"><button class="btn btn-log">Entrar</button></Link></li>

            <li><Link to="criar-conta"><button class="btn">Cadastrar</button></Link></li>

        </ul>               
        
       </div>      

     </div>

</header>