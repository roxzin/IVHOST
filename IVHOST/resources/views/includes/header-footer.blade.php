<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo-pagina', config('app.name'))</title> 
    <link href="{{ asset('css/estilo.css') }}" rel="stylesheet">

</head>

<body class="home page-template page-template-template-home page-template-template-home-php page page-id-290" >
   
   <nav class="utility-nav d-none d-lg-block">
     <div class="container-fluid">
       <div class="utility-nav-wrapper">
         <ul class="utility-nav-items">
         

         <li class="utility-nav-item has-submenu">
             <a class=" submenu-trigger" href="tel:+551640423415">SAC: (16) 4042-3415</a>
             
 <li>

           <li class="utility-nav-item has-submenu">
             <a class=" submenu-trigger" href="#">Empresa</a>
             <div class="submenu-drop " id="company650c6c3fd1f7d">
             <ul class="submenu-links">
 <li>
   <a href="/empresa/ivhost">IVHOST</a>
 </li>
 <li>
   <a href="/blog">Blog</a>
 </li>

</ul>

             </div>
           </li>
          
          
           <li id="search-toggle" class="utility-nav-item">
             <a href="#"> Procurar <svg class="nav-icon">
                 <use href="#search-v2" />
               </svg>
             </a>
           </li>
         </ul>
       </div>
     </div>
   </nav>
   <div class="d-lg-none mobile-bt-menu">
     <div class="mobile-bt-menu--content">
       <div class="bar-item" data-target="search-toggle">
         <span class="bar-item--icon">
           <svg class="bar-icon">
             <use href="#search" />
           </svg>
         </span>
         <span class="bar-item--content">Procurar...</span>
       </div>
       <div class="bar-cta toggle-dropdown-nav bar-item nav-cta__main nav-cta-button" data-target=".mobile-bt-menu--started">
         <span class="bar-item--icon ripple">
           <svg class="bar-icon">
             <use href="#dc-icon" />
           </svg>
         </span> 
         <a href='https://painel.ivhost.com.br/index.php?rp=/login' target='_blank'><span class="bar-item--content">CENTRAL DO CLIENTE</span></a>
       </div>
     </div>

     <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
       <symbol id="search" viewBox="0 0 23 18">
         <path d="M16.5774701,15.9476048 L18.1560629,14.369012 L14.8933383,11.1062874 C15.3671407,10.316991 15.6826347,9.42215569 15.6826347,8.42178144 C15.6826347,5.63285928 13.4191617,3.36938623 10.6302395,3.36938623 C7.84131737,3.36938623 5.57784431,5.63285928 5.57784431,8.42178144 C5.57784431,11.2107036 7.84131737,13.4741766 10.6302395,13.4741766 C11.6306138,13.4741766 12.5254491,13.1586826 13.3147455,12.6848802 L16.5774701,15.9476048 Z M20.2095808,0 C21.4199102,0 22.4202844,1.05314371 22.4202844,2.26347305 L22.4202844,15.7365269 C22.4202844,16.9468563 21.4199102,18 20.2095808,18 L2.21070359,18 C1.00037425,18 0,16.9468563 0,15.7365269 L0,2.26347305 C0,1.05314371 1.00037425,0 2.21070359,0 L20.2095808,0 Z M10.6302395,5.63173653 C12.1560629,5.63173653 13.4719311,6.89483533 13.4719311,8.42065868 C13.4719311,9.94648204 12.1560629,11.2623503 10.6302395,11.2623503 C9.10441617,11.2623503 7.84131737,9.94648204 7.84131737,8.42065868 C7.84131737,6.89483533 9.10441617,5.63173653 10.6302395,5.63173653 Z" />
       </symbol>
       <symbol id="translate" viewBox="0 0 31 18">
         <path d="M8.35489073,7.71428571 L7.71428571,9 L9,9 L8.35489073,7.71428571 Z M27.8796992,0 L16.7142857,0.0420888542 L16.7142857,18 L27.8796992,18 C29.5242716,18 30.8571429,16.6601715 30.8571429,15.0070148 L30.8571429,3.03507405 C30.8571429,1.38191738 29.5219455,0 27.8796992,0 Z M25.875,7.23214286 L25.8064219,7.23214286 C25.4275781,8.53433036 24.8192344,9.54261161 24.1629844,10.3418304 C24.5311406,10.5735335 24.7878281,10.6851429 24.7939219,10.6875335 C25.3667344,10.9219085 25.6465781,11.575346 25.4164219,12.1495647 C25.2375,12.5899554 24.8203125,12.8571429 24.3328125,12.8571429 C24.1965937,12.8571429 24.0574219,12.8322382 23.9226562,12.7787679 C23.8757812,12.7604585 23.2509375,12.4998147 22.4573437,11.9261116 C21.675,12.4904866 21.0557812,12.7548616 20.9957812,12.7787679 C20.9015625,12.8337054 20.7609375,12.8571429 20.625,12.8571429 C20.1767812,12.8571429 19.7535937,12.5868616 19.5778125,12.1446429 C19.35075,11.5680804 19.6335,10.9169866 20.2078125,10.6877679 C20.242875,10.673485 20.4907969,10.5601272 20.8289062,10.3507835 C20.6707031,10.1575179 20.512875,9.96059598 20.3630625,9.74000223 C20.0129531,9.22578348 20.1477187,8.52640848 20.6604375,8.17718973 C21.1774687,7.82783036 21.8749687,7.96184598 22.22325,8.47601786 C22.3115156,8.60586161 22.4051719,8.71911161 22.4976562,8.83611161 C22.8421875,8.39464286 23.1609375,7.86495536 23.4140625,7.23214286 L19.125,7.23214286 C18.50625,7.23214286 18,6.73058036 18,6.10714286 C18,5.48370536 18.50625,4.98214286 19.125,4.98214286 L21.375,4.98214286 C21.375,4.36104911 21.8789062,3.85714286 22.5,3.85714286 C23.1210937,3.85714286 23.625,4.36339286 23.625,4.98214286 L25.875,4.98214286 C26.4960937,4.98214286 27,5.48604911 27,6.10714286 C27,6.72823661 26.4984375,7.23214286 25.875,7.23214286 Z M0,2.99298519 L0,14.964926 C0,16.6180826 1.33287124,17.9579111 2.97744361,17.9579111 L14.1428571,18 L14.1428571,0.0420888542 L2.97744361,0 C1.33287124,0 0,1.38191738 0,2.99298519 Z M3.94781933,11.2665172 L6.7526751,4.47087435 C7.0896084,3.65256569 8.33873338,3.65256569 8.67575434,4.47087435 L11.4806101,11.2665172 C11.7161742,11.8380119 11.477871,12.5076659 10.9463727,12.7620306 C10.8083212,12.8238521 10.6636959,12.8568864 10.5190705,12.8568864 C10.1163984,12.8568864 9.73151958,12.6062027 9.55753087,12.1844009 L9.16485106,11.3278668 C9.17361623,11.332586 9.14732071,11.3467436 9.1166426,11.3467436 L6.31178683,11.3467436 C6.28080194,11.3467436 6.25459407,11.3306134 6.22431039,11.3277582 L5.87081091,12.1842924 C5.63388825,12.7572028 5.00787951,13.0125114 4.48196905,12.7595624 C3.95088714,12.5029467 3.7124744,11.83754 3.94781933,11.2665172 Z" />
       </symbol>
       <symbol id="conversation" viewBox="0 0 18 18">
         <path d="M11.9181416,0.485287829 C10.8559696,0.131230475 9.77297059,-0.0353847507 8.66914472,0.00626905564 C3.73316866,0.152057378 -0.161462235,4.27578421 0.00515299081,9.23258717 C0.025979894,10.2531054 0.234248926,11.2527968 0.609133184,12.1900074 C0.921536731,12.9814297 1.3380748,13.7311983 1.87957428,14.3976592 L1.12980576,16.1679459 C0.838229119,16.8344068 1.15063267,17.6258292 1.83792047,17.8965789 C2.06701641,18.0007134 2.33776615,18.0215403 2.58768899,17.9798865 L6.02412801,17.3759063 C10.6893543,19.0004048 15.7919456,16.5428302 17.4164441,11.8776039 C19.0409425,7.21237756 16.5833679,2.10978628 11.9181416,0.485287829 Z M5.33684021,10.4822014 C4.58707169,10.4822014 3.9622646,9.87822117 3.9622646,9.10762575 C3.9622646,8.35785724 4.56624479,7.73305014 5.33684021,7.73305014 C6.08660872,7.73305014 6.71141582,8.33703033 6.71141582,9.10762575 C6.71141582,9.87822117 6.08660872,10.4822014 5.33684021,10.4822014 Z M8.93989446,10.4822014 C8.19012595,10.4822014 7.56531885,9.87822117 7.56531885,9.10762575 C7.56531885,8.33703033 8.16929904,7.73305014 8.93989446,7.73305014 C9.68966298,7.73305014 10.3144701,8.33703033 10.3144701,9.10762575 C10.3144701,9.87822117 9.68966298,10.4822014 8.93989446,10.4822014 Z M12.5429487,10.4822014 C11.7931802,10.4822014 11.1683731,9.87822117 11.1683731,9.10762575 C11.1683731,8.33703033 11.7723533,7.73305014 12.5429487,7.73305014 C13.2927172,7.73305014 13.9175243,8.33703033 13.9175243,9.10762575 C13.9175243,9.87822117 13.2927172,10.4822014 12.5429487,10.4822014 Z" />
       </symbol>
       <symbol id="dc-icon" viewBox="0 0 24 24">
         <path fill="#FFF" fill-rule="evenodd" d="M12,0 C18.627417,0 24,5.372583 24,12 C24,18.627417 18.627417,24 12,24 C5.372583,24 0,18.627417 0,12 C0,5.372583 5.372583,0 12,0 Z M18,13 L6,13 L12.005394,19 L12.005394,14.6992497 L18,14.6992497 L18,13 Z M12.005394,5 L12.005394,9.29006182 L6,9.29006182 L6,11 L18,11 L12.005394,5 Z" />
       </symbol>
       <symbol id="user" viewBox="0 -5 25 40">
         <path d="M12.0054054,14.3907148 C8.03151926,14.3907148 4.8100481,11.1692435 4.8100481,7.19535739 C4.8100481,3.22147128 8.03151926,0 12.0054054,0 C15.9792915,0 19.2007627,3.22147128 19.2007627,7.19535739 C19.2007627,11.1692435 15.9792915,14.3907148 12.0054054,14.3907148 Z M4.73329751,26.9801918 C5.74528238,23.8184807 8.68448776,21.6731541 12.0042062,21.6731541 C15.3239245,21.6731541 18.2631299,23.8184807 19.2751148,26.9801918 C19.606272,28.2637569 20.9152631,29.0358362 22.1988283,28.704679 C23.4823935,28.3735218 24.2544728,27.0645307 23.9233157,25.7809655 C20.7789445,13.9158212 3.22467091,13.9206181 0.0898935393,25.7809655 C-0.14581137,26.6177641 0.0897505319,27.5165971 0.705577719,28.1302302 C1.32140491,28.7438633 2.22107294,28.9762156 3.05702492,28.7375254 C3.8929769,28.4988353 4.53432188,27.8264762 4.73329751,26.9801918 Z" />
       </symbol>
       <symbol id="search-v2" viewBox="0 0 24 24">
         <path d="M23.707,22.293l-5.969-5.969a10.016,10.016,0,1,0-1.414,1.414l5.969,5.969a1,1,0,0,0,1.414-1.414ZM10,18a8,8,0,1,1,8-8A8.009,8.009,0,0,1,10,18Z" />
         < </symbol>
           <symbol id="translate-v2" viewBox="0 0 24 24">
             <path d="M17 20H2.5A2.503 2.503 0 0 1 0 17.5v-15C0 1.122 1.122 0 2.5 0h8a.5.5 0 0 1 .473.338l6.5 19A.502.502 0 0 1 17 20zM2.5 1C1.673 1 1 1.673 1 2.5v15c0 .827.673 1.5 1.5 1.5h13.8L10.143 1H2.5z" />
             <path d="M21.5 24h-8a.5.5 0 0 1-.468-.324l-1.5-4a.5.5 0 0 1 .936-.352L13.847 23H21.5c.827 0 1.5-.673 1.5-1.5v-15c0-.827-.673-1.5-1.5-1.5H12a.5.5 0 0 1 0-1h9.5C22.878 4 24 5.122 24 6.5v15c0 1.378-1.122 2.5-2.5 2.5z" />
             <path d="M13.5 24a.5.5 0 01-.376-.83l3.5-4a.5.5 0 11.753.659l-3.5 4A.502.502 0 0113.5 24zM9.5 14a.499.499 0 01-.471-.332L7 7.987l-2.029 5.681a.5.5 0 01-.942-.336l2.5-7c.142-.398.8-.398.941 0l2.5 7A.5.5 0 019.5 14z" />
             <path d="M8 11H6a.5.5 0 010-1h2a.5.5 0 010 1zM21.5 11h-7a.5.5 0 010-1h7a.5.5 0 010 1z" />
             <path d="M17.5 11a.5.5 0 01-.5-.5v-1a.5.5 0 011 0v1a.5.5 0 01-.5.5zM16 17a.498.498 0 01-.29-.907c2.189-1.555 3.79-4.727 3.79-5.592a.5.5 0 011 0c0 1.318-1.927 4.785-4.21 6.408A.507.507 0 0116 17z" />
             <path d="M20 18a.494.494 0 0 1-.337-.131c-.363-.332-3.558-3.283-4.126-4.681a.5.5 0 0 1 .926-.376c.409 1.007 2.936 3.459 3.875 4.319A.5.5 0 0 1 20 18z" />
           </symbol>
     </svg>
   </div>
   <div class="navbar-wrapper">
     <nav class="navbar navbar-expand-lg navbar-inverse">
       <div class="container-fluid">
         <a class="navbar-brand" href="https://ivhost.com.br/">
        <img alt='IVHOST Logo' src='/images/logo.png'>
         </a> 
         <div class="primaryNav-wrapper" id="primaryNav-wrapper">
           <div class="scrollable-content-wrapper">
             <div id="primaryNav" class="navbar-nav-wrapper">
               <ul id="menu-primary-navigation" class="nav navbar-nav ml-auto">
                 <li id="menu-item-828" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-828">
                   <a href="/hospedagem-de-sites/hospedagem-premium">Hospedagem de sites</a>
                 </li>
                 <li id="menu-item-829" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-829">
                   <a href="/revenda-de-hospedagem/revenda-premium">Revenda de hospedagem</a>
                 </li>
                 <li id="menu-item-831" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-831">
                   <a href="/servidores-vps/servidores-vps-premium">Servidores VPS</a>
                 </li>
                 <li id="menu-item-830" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-830">
                   <a href="/dominios/registro-de-dominios">Domínios</a>
                 </li>
                 <li id="menu-item-7658" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7658">
                   <a href="/emails/email-premium">E-mail</a>
                 </li>

                 <li id="menu-item-7658" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7658">
                   <a href="/licencas">Licenças</a>
                 </li>

                 <li id="menu-item-41013" class="nav-cta nav-cta__main d-none d-lg-flex mr-0 menu-item menu-item-type-post_type menu-item-object-page menu-item-41013">
                   <a class="nav-cta-button" href="https://painel.ivhost.com.br/index.php?rp=/login" >
                     <span class='title'>CENTRAL DO CLIENTE</span>
                     <span class='ripple'>
                       <img src='/images/dc-icon.svg' alt='IVHOST' />
                     </span>
                   </a>
                   </div>
                
               </ul>
             </div>
           </div>
         </div>
         
        
         <div id="primaryNav-toggle" class="navbar-toggler collapsed" type="button">
           <div class="navbar-toggler-icon">
             <span></span>
             <span></span>
             <span></span>
             <span></span>
             <span></span>
             <span></span>
           </div>
         </div>
       </div>
     </nav>
   </div>
   <div class="search-popup" id="search-popup">
     <div class="close-icon" id="search-close">
       <i class="icon-close"></i>
     </div> 
     <form action="/blog/procurar"  class="search-form" method="GET">
       <input class="search-input sl-search-input" name="q" type="search" placeholder="Procurar..." autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false">
       <input type="submit" class="search-btn" value="">
     </form>
   </div>



    <main>
            @yield('conteudo-pagina')
    </main>

  



<!--Start of Tawk.to Script-->
<script type="text/javascript">
  var Tawk_API = Tawk_API || {},
    Tawk_LoadStart = new Date();
  (function() {
    var s1 = document.createElement("script"),
      s0 = document.getElementsByTagName("script")[0];
    s1.async = true;
    s1.src = 'https://embed.tawk.to/6539421df2439e1631e85a03/1hdjqkhh5';
    s1.charset = 'UTF-8';
    s1.setAttribute('crossorigin', '*');
    s0.parentNode.insertBefore(s1, s0);
  })();
</script>
<!--End of Tawk.to Script-->


<footer class="block footer-upper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 col-lg-12">
        <div id="footerNav" class="footer-navigation">
          <ul id="menu-footer-navigation" class="menu">
            <div class="logo menu-item menu-item-type-custom menu-item-object-custom">
              <li id="menu-item-20959" class="logo menu-item menu-item-type-custom menu-item-object-custom menu-item-20959">
                <a class="navbar-brand" href="https://ivhost.com.br/">
                  <img src='/images/logo.png'>
                </a>
              </li>
            </div>
            <div class="column-1 menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children">
              <li id="menu-item-902" class="column-1 menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-902">
               HOSPEDAGEM
                <ul class="sub-menu">
                  <li id="menu-item-905" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-905">
                    <a href="/hospedagem-de-sites/hospedagem-premium">Hospedagem de Sites </a>
                  </li>
                  <li id="menu-item-905" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-905">
                    <a href="/hospedagem-de-sites/hospedagem-wordpress">Hospedagem Wordpress </a>
                  </li>
                  <li id="menu-item-905" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-905">
                    <a href="/hospedagem-de-sites/hospedagem-gratis">Hospedagem de Sites Grátis </a>
                  </li>
                </ul>
              </li>
             

 
              <li id="menu-item-7494" class="column-1 menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-7494">
                REVENDA
                <ul class="sub-menu">
                  <li id="menu-item-39846" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-39846">
                    <a href="/revenda-de-hospedagem/revenda-premium">Revenda de Hospedagem</a>
                  </li>
                </ul>
              </li>


            </div>
            <div class="column-2 menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children">
             
            <li id="menu-item-7500" class="column-4 menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-7500">
            SOBRE NÓS
                <ul class="sub-menu">
                <li id="menu-item-7501" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7501">
                    <a href="/base-de-conhecimento">Base de Conhecimento</a>
                  </li>
                  <li id="menu-item-7501" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7501">
                    <a href="/blog">Blog</a>
                  </li>
              
                </ul>
              </li>
           
              <li id="menu-item-7500" class="column-4 menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-7500">
              EMPRESA
                <ul class="sub-menu">
                  <!--<li id="menu-item-7503" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7503">
                    <a href="/sistemas/sistema-de-rifa">Sistema De Rifa</a>
                  </li>-->
                  
                  <li id="menu-item-44535" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-44535">
                    <a href="/empresa/ivhost">Sobre a IVHOST</a>
                  </li>

                  <li id="menu-item-7501" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7501">
                    <a href="/fale-conosco">Fale Conosco</a>
                  </li>
                  
                 
                </ul>
              </li>
            </div>
            <div class="column-3 menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children">
            <li id="menu-item-20962" class="column-2 menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-20962">
              SERVIDORES
                <ul class="sub-menu">
                  <li id="menu-item-20963" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-20963">
                    <a href="/servidores-vps/servidores-vps-premium">Servidores VPS</a>
                  </li>
                </ul>
              </li>
              
            <li id="menu-item-7494" class="column-1 menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-7494">
               LICENÇAS
                <ul class="sub-menu">
                  <li id="menu-item-39846" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-39846">
                    <a href="/licencas/cpanel-whm">Licença cPanel/WHM</a>
                  </li>
                  <li id="menu-item-39846" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-39846">
                    <a href="/licencas/directadmin">Licença DirectAdmin</a>
                  </li>
                  <li id="menu-item-39846" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-39846">
                    <a href="/licencas/whmcs">Licença WHMCS</a>
                  </li>
                </ul>
              </li>
          
         
           
            </div>
            <div class="column-4 menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children">
              <li id="menu-item-7638" class="column-3 menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-7638">
               E-MAIL
                <ul class="sub-menu">
                  <li id="menu-item-16686" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16686">
                    <a href="/emails/email-premium">Email Premium</a>
                  </li>
                </ul>
              </li>
              <li id="menu-item-20973" class="column-3 menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-20973">
               DOMINIOS
                <ul class="sub-menu">
                  <li id="menu-item-20974" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-20974">
                    <a rel="noopener" href="/dominios/registrar">Registro</a>
                  </li>
                  <li id="menu-item-20975" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-20975">
                    <a href="/dominios/transferir">Trânsferencia</a>
                  </li>
                </ul>
              </li>
            </div>

<script type="text/javascript">

Tawk_API = Tawk_API || {};

Tawk_API.onStatusChange = function (status){

if(status === 'online')

{

document.getElementById('status').innerHTML = '<a href="javascript:void(Tawk_API.toggle())"><button class="sc-cVksOY irFvke"><svg style="margin-right: 7px;" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="https://www.w3.org/2000/svg" class="IconBalloonChat" aria-hidden="true"><path d="M14.1632 15.3672C15.6139 14.7556 16.7591 13.9231 17.5983 12.8694C18.4375 11.8159 18.8571 10.6686 18.8571 9.42756C18.8571 8.18643 18.4375 7.03908 17.598 5.98554C16.7589 4.93201 15.6138 4.09941 14.1629 3.48767C12.712 2.87602 11.134 2.57031 9.42848 2.57031C7.72314 2.57031 6.14507 2.87621 4.69407 3.48767C3.24321 4.09937 2.09811 4.93196 1.25895 5.98554C0.419697 7.03926 0 8.18643 0 9.4276C0 10.49 0.317435 11.4904 0.95132 12.4279C1.58516 13.3652 2.45575 14.1555 3.56281 14.7983C3.47358 15.0128 3.38206 15.2089 3.28829 15.3878C3.19447 15.5663 3.08297 15.738 2.95341 15.9033C2.82394 16.0687 2.7236 16.1981 2.65211 16.2915C2.58067 16.3852 2.46461 16.5172 2.30381 16.6866C2.14305 16.8562 2.04032 16.9678 1.99575 17.0213C1.99575 17.0123 1.97788 17.0325 1.94214 17.0816C1.90635 17.1308 1.88627 17.153 1.88186 17.1488C1.87736 17.1439 1.85948 17.1663 1.82824 17.2154C1.797 17.2645 1.78133 17.2891 1.78133 17.2891L1.74779 17.3558C1.73456 17.3828 1.72546 17.4092 1.72105 17.4361C1.71655 17.4627 1.7143 17.492 1.7143 17.5231C1.7143 17.5543 1.71871 17.5832 1.72781 17.6101C1.74568 17.726 1.797 17.8196 1.88181 17.8913C1.96658 17.9626 2.058 17.9983 2.15633 17.9983H2.19653C2.64287 17.9358 3.02687 17.8644 3.34824 17.7839C4.72325 17.4269 5.96442 16.8553 7.07152 16.0696C7.87503 16.2125 8.66076 16.2839 9.42857 16.2839C11.1341 16.2845 12.7123 15.9789 14.1632 15.3672Z" fill="#0060b1ff"></path><path d="M23.0493 15.8629C23.6834 14.9299 24.0002 13.928 24.0002 12.8565C24.0002 11.7582 23.665 10.7307 22.9956 9.77548C22.3259 8.82032 21.4151 8.02553 20.2634 7.3916C20.4686 8.06118 20.5713 8.73973 20.5713 9.42737C20.5713 10.6237 20.2725 11.7576 19.6739 12.8292C19.0757 13.9004 18.2186 14.8468 17.1026 15.6683C16.0668 16.4183 14.8882 16.994 13.5667 17.3959C12.2455 17.7976 10.866 17.9986 9.42845 17.9986C9.1607 17.9986 8.76778 17.9809 8.25 17.9453C10.0446 19.1236 12.1518 19.7131 14.5713 19.7131C15.3392 19.7131 16.1249 19.6415 16.9285 19.4986C18.0356 20.2846 19.2768 20.8558 20.6517 21.2131C20.9731 21.2937 21.3571 21.365 21.8035 21.4274C21.9106 21.4364 22.009 21.4051 22.0982 21.3336C22.1875 21.2622 22.2456 21.1643 22.2723 21.0394C22.2681 20.9858 22.2723 20.9564 22.2857 20.9521C22.2989 20.9479 22.2967 20.9187 22.279 20.8653C22.2614 20.8116 22.2523 20.7848 22.2523 20.7848L22.2189 20.718C22.2097 20.7004 22.1946 20.6756 22.1721 20.6445C22.1498 20.6135 22.132 20.5909 22.1185 20.5776C22.1053 20.5642 22.0854 20.5418 22.0584 20.5108C22.0318 20.4798 22.0138 20.4595 22.0048 20.4506C21.9602 20.397 21.8576 20.2854 21.6969 20.1157C21.536 19.9462 21.4202 19.8145 21.3487 19.7208C21.2773 19.627 21.1768 19.4977 21.0474 19.3323C20.918 19.1673 20.8063 18.9954 20.7125 18.8167C20.6188 18.6382 20.5273 18.4417 20.438 18.2275C21.5451 17.5841 22.4155 16.7962 23.0493 15.8629Z" fill="#0060b1ff"></path></svg>Iniciar atendimento</button></a>';

}

else if(status === 'away')

{

document.getElementById('status').innerHTML = 'We are currently away';

}

else if(status === 'offline')

{

document.getElementById('status').innerHTML = '';

}

};

</script>

<!--End of tawk.to Status Code -->


            <div class="column-5 menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children">
              <li id="menu-item-38416" class="column-5 menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-38416">
              <div id="status"></div>
  
              <ul class="sub-menu">
              <small><a style='color: #14db41dd;
    text-transform: capitalize;' href='https://painel.ivhost.com.br/supporttickets.php'>Suporte Técnico 24/7</a></small>


                  <li id="menu-item-25546" class="social-icons menu-item menu-item-type-custom menu-item-object-custom menu-item-25546">
                    <div class="footer-social sl_swap" id="footer-social-icons">
                      <a rel="noopener" href="https://instagram.com/iv.host">
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="https://www.w3.org/2000/svg" class="IconFooterInstagram"><path fill-rule="evenodd" clip-rule="evenodd" d="M12 24c6.627 0 12-5.373 12-12S18.627 0 12 0 0 5.373 0 12s5.373 12 12 12zm2.91-17.86c-.76-.035-.988-.043-2.91-.043-1.922 0-2.15.008-2.91.042-.701.032-1.083.15-1.336.248a2.23 2.23 0 00-.828.539 2.23 2.23 0 00-.539.828c-.098.253-.216.635-.248 1.337-.034.759-.042.987-.042 2.909 0 1.922.008 2.15.042 2.91.032.701.15 1.083.248 1.336.13.336.287.576.539.828.252.252.492.408.828.539.253.098.635.216 1.337.248.759.034.986.042 2.909.042 1.923 0 2.15-.008 2.91-.042.701-.032 1.083-.15 1.336-.248.336-.13.576-.287.828-.539a2.23 2.23 0 00.539-.828c.098-.253.216-.635.248-1.337.034-.759.042-.987.042-2.909 0-1.922-.008-2.15-.042-2.91-.032-.701-.15-1.083-.248-1.336a2.23 2.23 0 00-.539-.828 2.231 2.231 0 00-.828-.539c-.253-.098-.635-.216-1.337-.248zM9.03 4.842C9.8 4.808 10.045 4.8 12 4.8c1.955 0 2.2.008 2.969.043.766.035 1.29.157 1.747.335.474.184.875.43 1.276.83.4.4.646.802.83 1.276.178.458.3.981.335 1.747.035.768.043 1.014.043 2.969 0 1.955-.008 2.2-.043 2.969-.035.766-.157 1.29-.335 1.747a3.53 3.53 0 01-.83 1.275c-.4.4-.802.647-1.276.831-.458.178-.981.3-1.747.335-.768.035-1.014.043-2.969.043-1.955 0-2.2-.008-2.969-.043-.766-.035-1.29-.157-1.747-.335a3.53 3.53 0 01-1.276-.83c-.4-.4-.646-.802-.83-1.276-.178-.458-.3-.981-.335-1.748C4.808 14.202 4.8 13.956 4.8 12s.008-2.2.043-2.969c.035-.766.157-1.29.335-1.747.184-.474.43-.875.83-1.276.4-.4.802-.646 1.276-.83.458-.178.981-.3 1.747-.335zm2.972 3.463a3.697 3.697 0 100 7.395 3.697 3.697 0 000-7.395zm0 6.097a2.4 2.4 0 110-4.8 2.4 2.4 0 010 4.8zm3.843-5.381a.864.864 0 100-1.728.864.864 0 000 1.728z" fill="#fff"></path></svg>                      </a>
                      <a rel="noopener" href="https://twitter.com/iv_host">
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="https://www.w3.org/2000/svg" class="IconFooterTwitter"><path fill-rule="evenodd" clip-rule="evenodd" d="M12 24c6.627 0 12-5.373 12-12S18.627 0 12 0 0 5.373 0 12s5.373 12 12 12zm5.503-16.15a5.898 5.898 0 001.697-.465 6.018 6.018 0 01-1.475 1.53 7.8 7.8 0 01.009.382c0 3.904-2.972 8.406-8.406 8.406A8.364 8.364 0 014.8 16.375a5.929 5.929 0 004.374-1.223 2.958 2.958 0 01-2.76-2.052 2.955 2.955 0 001.334-.05 2.958 2.958 0 01-2.37-2.898v-.037c.4.221.855.354 1.34.37a2.951 2.951 0 01-1.315-2.459c0-.541.146-1.049.4-1.485a8.386 8.386 0 006.09 3.087 2.954 2.954 0 015.034-2.695 5.917 5.917 0 001.875-.717 2.961 2.961 0 01-1.299 1.634z" fill="#fff"></path></svg>                      </a>
                      <a rel="noopener" href="https://www.facebook.com/ivhost0">
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="https://www.w3.org/2000/svg" class="IconFooterFacebook"><path fill-rule="evenodd" clip-rule="evenodd" d="M12 24c6.627 0 12-5.373 12-12S18.627 0 12 0 0 5.373 0 12s5.373 12 12 12zm1.992-16.356c.318 0 .823.056 1.197.13l.336-2.112c-.729-.15-1.29-.262-2.056-.262-2.207 0-3.085 1.047-3.085 2.917v1.365H9v2.206h1.384V18.6h2.692v-6.712h1.963l.187-2.206h-2.15V8.616c0-.598.056-.972.916-.972z" fill="#fff"></path></svg>                      </a>

                    </div>
                    </a>
                  </li>
                  <li id="menu-item-43443" class="cookie_preferences menu-item menu-item-type-custom menu-item-object-custom menu-item-43443">
                    <a href="javascript:void(0);">Preferência de Cookie</a><br><br>

                  </li>

              
                 
               
                 <!--Start of tawk.to Status Code-->
               
                </ul>
              </li>
            </div>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>
<footer class="footer-lower">
  <div class="container-fluid">
    <div class="footer-lower-inner">
    <div id="footerbottomNav" class="footer-bottom-navigation">
       
    <div id="menu-item-3065" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-privacy-policy menu-item-3065">
            <a style='color: #14db41dd;opacity: 1;' target="_blank" href="https://api.whatsapp.com/send/?phone=551640423415"> <img src="/images/favicons/whatsapp.png" alt="" style='width: 3%;    width: 2%;
    margin-right: 5px;
    margin-top: -4px;
' srcset="">  (16) 4042-3415</a>
          </div>
    <ul id="menu-footer-bottom-navigation" class="menu sl_swap">
       
      
        <li id="menu-item-3065" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-privacy-policy menu-item-3065">
            <a rel="privacy-policy" href="/empresa/politica-de-privacidade">Política de Privacidade</a>
          </li>
          <li id="menu-item-3069" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3069">
            <a href="/empresa/politica-de-cookies">Política de Cookies</a>
          </li>
        </ul>
      </div>
      <div class="footer-lower-copyright">Copyright &copy; 2024 ❤️ IVHOST.COM.BR - Serviços de internet</div>
 
      <div class="footer-lower-copyright">ROXZIN - ME 42.278.832/0001-14</div>
    </div>
  </div>
</footer>


<script type='text/javascript' src='https://code.jquery.com/jquery-3.7.1.min.js' id='jquery-core-js'></script>
<script type='text/javascript' src='/javascript/scripts.js' id='jquery-core-js'></script>
 

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-EC8J28KLYR"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-EC8J28KLYR');
</script>



<div id="ccc" role="region" aria-label="Cookie preferences" aria-live="polite" style="z-index: 2147483647;">
  <div id="ccc-notify" class="ccc-notify__box ccc-content--dark " aria-labelledby="ccc-notify-title">
    <div class="ccc-notify-text">
      <h1 id="ccc-notify-title"></h1>
      <p>
      <p class="mb-2">A IVHOST utiliza cookies e outras tecnologias semelhantes para melhorar a sua experiência, de acordo com a nossa Política de Privacidade e, ao continuar navegando, você concorda com estas condições.</p>
      </p>
    </div>
    <div class="ccc-notify-buttons">
      <button id="ccc-notify-accept" class="ccc-notify-button ccc-link ccc-tabbable ccc-accept-button">
        <span>Aceitar Cookies</span>
      </button>
      <button id="ccc-notify-reject" class="ccc-notify-button ccc-link ccc-tabbable ccc-reject-button">
        <span>Rejeitar Todos</span>
      </button>
    </div>
  </div>
</div>



<div class="menu-overlay"></div>



</body>
</html>
