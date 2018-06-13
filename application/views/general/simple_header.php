<!DOCTYPE html>
<html> 
    <head>
        <link rel="apple-touch-icon" href="{img_path}icons/iphone_icon.png"/>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta http-equiv="Language" content=""/>
<meta name="xgproyect-session" content=""/>
<meta name="xgproyect-version" content="{version}"/>
<meta name="xgproyect-timestamp" content=""/>
<meta name="xgproyect-universe" content=""/>
<meta name="xgproyect-universe-name" content=""/>
<meta name="xgproyect-universe-speed" content=""/>
<meta name="xgproyect-universe-speed-fleet" content=""/>
<meta name="xgproyect-language" content=""/>
<meta name="xgproyect-donut-galaxy" content=""/>
<meta name="xgproyect-donut-system" content=""/>
<meta name="xgproyect-player-id" content=""/>
<meta name="xgproyect-player-name" content=""/>
<meta name="xgproyect-alliance-id" content=""/>
<meta name="xgproyect-alliance-name" content=""/>
<meta name="xgproyect-alliance-tag" content=""/>
<meta name="xgproyect-planet-id" content=""/>
<meta name="xgproyect-planet-name" content=""/>
<meta name="xgproyect-planet-coordinates" content=""/>
<meta name="xgproyect-planet-type" content=""/>
<!--[if (gt IE 9)|!(IE)]><!-->
<link rel="stylesheet" type="text/css" href="{css_path}ogame.css" media="screen" />
<!--<![endif]-->
<!--[if lt IE 10]>
<link rel="stylesheet" type="text/css" href="{css_path}ingame/01reset.css" media="screen" />
<link rel="stylesheet" type="text/css" href="{css_path}ingame/02style.css" media="screen" />
<link rel="stylesheet" type="text/css" href="{css_path}ingame/anythingslider.css" media="screen" />
<link rel="stylesheet" type="text/css" href="{css_path}ingame/bbcodestyle.css" media="screen" />
<link rel="stylesheet" type="text/css" href="{css_path}ingame/emoji.css" media="screen" />
<link rel="stylesheet" type="text/css" href="{css_path}ingame/galaxy.css" media="screen" />
<link rel="stylesheet" type="text/css" href="{css_path}ingame/ingame.css" media="screen" />
<link rel="stylesheet" type="text/css" href="{css_path}ingame/jquery-ui-1.10.custom.css" media="screen" />
<link rel="stylesheet" type="text/css" href="{css_path}ingame/jquery.mCustomScrollbar.css" media="screen" />
<link rel="stylesheet" type="text/css" href="{css_path}ingame/messages.css" media="screen" />
<link rel="stylesheet" type="text/css" href="{css_path}ingame/network.css" media="screen" />
<link rel="stylesheet" type="text/css" href="{css_path}ingame/planetbar.css" media="screen" />
<link rel="stylesheet" type="text/css" href="{css_path}ingame/repairlayer.css" media="screen" />
<link rel="stylesheet" type="text/css" href="{css_path}ingame/rewardlist.css" media="screen" />
<link rel="stylesheet" type="text/css" href="{css_path}ingame/thickbox-message.css" media="screen" />
<link rel="stylesheet" type="text/css" href="{css_path}ingame/tipped.css" media="screen" />
<link rel="stylesheet" type="text/css" href="{css_path}ingame/traderNew.css" media="screen" />
<link rel="stylesheet" type="text/css" href="{css_path}no-tablet.css" media="screen" />
<![endif]-->
<link rel="stylesheet" type="text/css" href="{css_path}events.css" media="screen" />
<!--[if IE 8]>
<link rel="stylesheet" type="text/css" href="{css_path}ie8fixes.css" media="screen" />
<![endif]-->
{meta_tags}
        <title>{game_title}</title>

        
                            <script type='text/javascript' src='{js_path}jquery.js'></script>
                        <script type="text/javascript">
            var inventoryObj;
        </script>
                <script type="text/javascript">
            $.holdReady(true);

            var s = setInterval(function() {
                if (typeof initEmpireEquipment === "function") {
                    $.holdReady(false);
                    clearInterval(s);
                }
            }, 1);
        </script>
                <script type='text/javascript' src='{js_path}ogame.js'></script>    </head>

    <body id="overview"
          class="ogame lang-ar default no-touch"
    >
        <div id="initial_welcome_dialog" title="¡Te damos la bienvenida a OGame!" style="display: none;">
            Hemos escogido el nombre JonaMiX para que puedas empezar ya mismo. Cambiarlo es posible en cualquier momento: solo tienes que hacer clic sobre tu nombre de usuario.<br />
El equipo de comando te ha enviado información sobre los primeros pasos a la bandeja de entrada. ¡Échale un vistazo para empezar con buen pie!<br />
<br />
¡Que disfrutes jugando!        </div>
                <div class="contentBoxBody">
            <noscript>
                <div id="messagecenter">
                    <div id="javamessagebox">
                        <span class="overmark">
                            <strong>Por favor, activá JavaScript para poder continuar con el juego.</strong>
                        </span>
                    </div>
                </div>
            </noscript>
            <div id="ie_message">
                <p><img src="{img_path}icons/info.gif" height="16" width="16" />El navegador usado actualmente es antiguo y puede causar errores en la pantalla de esta página web. Por favor, actualiza tu navegador a la versión más nueva: <a href="http://www.microsoft.com/upgrade/">Internet Explorer</a> o <a href="http://www.mozilla-europe.org/de/firefox/">Mozilla Firefox</a></p>
            </div>
            <script type="text/javascript">isIE = false;</script>
            <!--[IF IE]>
                <script type="text/javascript">
                    isIE = true;
                </script>
            <![endif]-->
            
            <!-- HEADER -->
            <!-- ONET 4 POLAND -->

<div id="boxBG">
<div id="box">
	<a name="anchor"></a>
