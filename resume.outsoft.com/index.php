<?php

$request = ($_GET['lang'] != '') ? $_GET['lang'] : '';

$city = $job = '';


if($request != '') {

	$vars = explode('/', $request);
	
	$job = (isset($vars[0])) ? $vars[0] : '';
	
	$city = (isset($vars[1])) ? $vars[1] : '';
	
}

$title = 'Remote software development professionals available now';

$description = 'Experienced remote software developers talent available to work with your in-house team within 4-6 weeks. Access full-time or part-time specialists from Europe’s largest and most affordable software engineering hub. Scale your software development capabilities while staying lean and agile today!';

$text_block_h1 = 'Can’t find developers?';

$text_block_h2 = 'We\'ll send you resumes of quality remote developers with salaries you can afford.';

$spanScroll = '(scroll to request resumes from our pool of available engineers)';

$tap_our_h2 = 'Tap into our on-demand development pool to seamlessly integrate with your in-house team!';

$third_block_h2 = 'Choose from a number of excellent candidates available from our database of prescreened engineers. Join the ranks of our happy clients who have augmented their teams all over the world';

$footer_p = 'to get resumes of developers available to work for you right now';




if(($job != '') && ($city == '')) {

	$title = 'Remote '.$job.' professionals available now';
	
	$description = 'Quality remote '.$job.' talent available to work with your in-house team within 4-6 weeks. Access hand-picked specialists from Europe’s largest and most affordable software engineering hub. Scale your '.$job.' capabilities while staying lean and agile';

	$text_block_h1 = 'Can’t find '.$job.' Developers?';
	
	$text_block_h2 = 'We\'ll send you resumes of quality remote '.$job.' developers with salaries you can afford.';
	
	$spanScroll = '(scroll to request resumes from our pool of available '.$job.' engineers)';
	
	$tap_our_h2 = 'Tap into our on-demand development pool to seamlessly integrate with your in-house team!';
	
	$third_block_h2 = 'Choose from a number of excellent '.$job.' candidates available from our database of prescreened engineers.  Join the ranks of our happy clients who have augmented their '.$job.' teams all over the world.';
	
	$footer_p = 'to get resumes of '.$job.' developers available to work for you right now';

} 
else if(($job != '') && ($city != '')) {

	$title = 'Remote '.$job.' team for '.$city.'';
	
	$description = 'Quality remote '.$job.' developers in '.$city.' who fit your budget?';

	$text_block_h1 = 'Can’t find '.$job.' developers in '.$city.'?';
	
	$text_block_h2 = 'We\'ll send you resumes of quality remote '.$job.' developers with salaries you can afford.';
	
	$spanScroll = '(scroll to request resumes from our pool of available '.$job.' engineers)';
	
	$tap_our_h2 = 'Tap into our on-demand development pool to seamlessly integrate with your in-house team in '.$city.'!';
	
	$third_block_h2 = 'Choose from a number of excellent '.$job.' candidates available from our database of prescreened engineers. Join the ranks of our happy clients who have augmented their '.$job.' teams all over the world';
	
	$footer_p = 'to get resumes of '.$job.' developers available to work for you right now';
}


?>

    <!DOCTYPE html>
    <html>

    <head>
        <title>
            <?php echo $title; ?>
        </title>
        <meta charset="utf-8">
        <meta name="description" content="<?php echo $description; ?>" />
        <link rel='stylesheet' href="style.css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,700' rel='stylesheet' type='text/css'>
        <link rel="shortcut icon" href="http://outsoft.com/wp-content/uploads/2015/02/outsoft-icon.png">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <script src="http://mfzy.co/isotope.pkgd.js"></script>
    </head>

    <body>
        <!-- Google Tag Manager -->
        <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-NHDGJS"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-NHDGJS');</script>
    <!-- End Google Tag Manager-->
        <header>
            <div class="logo">
                <div class="simple-block"></div>
                <img src="img/outsoft.svg" alt="outsoft" title="outsoft">
            </div>
            <div class="content">
                <div class="center-block">
                    <div class="text-block">
                        <h1><?php echo $text_block_h1; ?></h1>
                        <span></span>
                        <h2><?php echo $text_block_h2; ?></h2>
                    </div>
                </div>
            </div>
            <span class="spanScroll"><?php echo $spanScroll; ?></span>
            <div class="button">
                <div class="dotted">
                    <img src="img/button.png" alt="arrow" title="arrow">
                </div>
            </div>
        </header>
        <div class="tap-our">
            <h2><?php echo $tap_our_h2; ?></h2>
        </div>
        <div class="WeHaveOfExcellent third-block">
            <div class="triangle-color">
                <img src="img/bg_triangle_small.png" alt="outsoft triangle" title="outsoft triangle">
            </div>
            <h2><?php echo $third_block_h2; ?></h2>
        </div>
        <footer>
            <!--p>Leave your email</p>
            <p>
                <?php echo $footer_p; ?>
            </p-->
            <p class="small_p">Please fill out the below form to receive resumes of the developers you’re looking for.</p>
            <form>
                <input type="text" name="userName" id="userName" placeholder="*Name">
                <input type="text" name="userEmail" id="userEmail" placeholder="*Email">
                <input type="text" name="subject" id="subject" value="New LandingPage" style="display: none;">
                <textarea name="content" id="content" cols="60" rows="1" onkeyup="auto_grow(this)" placeholder="*Message"></textarea>
                <input type="submit" value="Request now" disabled="" class="button_click">
            </form>
            <a href="http://outsoft.com/" target="_blank"><img src="img/outsoft_footer.svg" alt="outsoft logo" title="outsoft logo" class="outsoft_logo_footer"></a>
        </footer>
        <div class="after_contact">

        </div>
        <script src="main.js"></script>
        <!--script src="//js.maxmind.com/js/country.js" type="text/javascript"></script>
        <script src="//js.maxmind.com/js/apis/geoip2/v2.1/geoip2.js" type="text/javascript"></script-->
            <!--script type="text/javascript">
                $('.country').html(geoip_country_name());        
        </script-->
    </body>
    </html>