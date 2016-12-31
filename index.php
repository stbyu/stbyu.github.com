<?php
/**
 * Created by PhpStorm.
 * User: Amamiya Chinatsu's
 * Date: 2016/3/5
 * Time: 12:13
 */
include_once 'lib/config.php';
?>
<head>
    <title><?php echo $title; ?></title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><script src="assets/js/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="assets/css/main.css" />
    <!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
    <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
    <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
    <meta name="theme-color" content="<?php echo $theme_color;?>">
    <style type="text/css">
        body {
            height: 100%;
            background-image: url("images/<?php echo $background_filename;?>");
            background-repeat: no-repeat;
            background-size: cover;
            background-position:bottom center;
            background-attachment:fixed;
        }

        body:after {
            content: '';
            display: block;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: inherit;
            opacity: 0;
            z-index: 1;
            background-color: #ffffff;
            background-image: url("images/<?php echo $background_filename;?>");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
            -moz-transition: opacity 1.75s ease-out;
            -webkit-transition: opacity 1.75s ease-out;
            -ms-transition: opacity 1.75s ease-out;
            transition: opacity 1.75s ease-out;
        }

        body.is-loading:after {
            opacity: 1;
        }
    </style>
</head>

<body class="is-loading">

<!-- Wrapper -->
<div id="wrapper">

    <!-- Main -->
    <section id="main">
        <header>
            <span class="avatar"><img src="images/<?php echo $avatar_filename; ?>" height="130" width="130" alt="" /></span>
            <h1><?php echo $main_title; ?></h1>
            <p><?php echo $sec_title; ?></p>
        </header>
        <!--
        <hr />
        <h2>Extra Stuff!</h2>
        <form method="post" action="#">
            <div class="field">
                <input type="text" name="name" id="name" placeholder="Name" />
            </div>
            <div class="field">
                <input type="email" name="email" id="email" placeholder="Email" />
            </div>
            <div class="field">
                <div class="select-wrapper">
                    <select name="department" id="department">
                        <option value="">Department</option>
                        <option value="sales">Sales</option>
                        <option value="tech">Tech Support</option>
                        <option value="null">/dev/null</option>
                    </select>
                </div>
            </div>
            <div class="field">
                <textarea name="message" id="message" placeholder="Message" rows="4"></textarea>
            </div>
            <div class="field">
                <input type="checkbox" id="human" name="human" /><label for="human">I'm a human</label>
            </div>
            <div class="field">
                <label>But are you a robot?</label>
                <input type="radio" id="robot_yes" name="robot" /><label for="robot_yes">Yes</label>
                <input type="radio" id="robot_no" name="robot" /><label for="robot_no">No</label>
            </div>
            <ul class="actions">
                <li><a href="#" class="button">Get Started</a></li>
            </ul>
        </form>
        <hr />
        -->
        <footer>
            <ul class="icons">
                <li><a href="<?php echo $url_01;?>" class="<?php echo $icons_01;?>"><?php echo $txt_01;?></a></li>
                <li><a href="<?php echo $url_02;?>" class="<?php echo $icons_02;?>"><?php echo $txt_02;?></a></li>
		        <li><a href="<?php echo $url_03;?>" class="<?php echo $icons_03;?>"><?php echo $txt_03;?></a></li>
            </ul>
            <ul class="actions">
                <li><a href="<?php echo $button_url;?>" class="button"><?php echo $button_name;?></a></li>
            </ul>
        </footer>
    </section>
    

    <!-- Footer -->
    <footer id="footer">
            &copy; <?php echo $copyright; ?>
            </br>
            <ul class="copyright">
            <li>Use: <a href="https://github.com/BakaChinatsu/uuz-h5theme">uuz-h5theme</a></li>
            <li>Powered: <a href="http://html5up.net">HTML5 UP</a></li>
</ul>
    </footer>

</div>

<!-- Scripts -->
<!--[if lte IE 8]><script src="assets/js/respond.min.js"></script><![endif]-->
<script>
    if ('addEventListener' in window) {
        window.addEventListener('load', function() { document.body.className = document.body.className.replace(/\bis-loading\b/, ''); });
        document.body.className += (navigator.userAgent.match(/(MSIE|rv:11\.0)/) ? ' is-ie' : '');
    }
</script>

</body>
