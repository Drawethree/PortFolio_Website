<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Portfolio for Drawethree (Jan Kluka)">
    <meta name="keywords"
          content="minecraft, resume, drawethree, jan kluka, jan kluka zilina, java, development, deathchest, ultraprisoncore, dev, sql">
    <meta name="author" content="Drawethree">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <title>Jan Kluka - Drawethree</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <link rel="icon" type="image/png" href="static/img/android-chrome-512x512.png"/>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i"
          rel="stylesheet">

    <!-- End -->

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-3VTVRCFC1D"></script>

    <!-- Plugin Css -->
    <link href="static/plugin/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="static/plugin/font-awesome/css/font.awesome.min.css" rel="stylesheet">
    <link href="static/plugin/owl-carousel/css/owl.carousel.min.css" rel="stylesheet">
    <!-- End -->

    <!-- Theme css -->
    <link href="static/css/style.css" rel="stylesheet">
    <link href="static/css/color/default.css" rel="stylesheet">
    <script src="static/js/minecraft.js"></script>
    <!-- End -->

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
            crossorigin="anonymous"></script>


</head>

<!-- ========== Body Starts ========== -->

<body>
<div id="loading">
    <div class="load-circle"><span class="one"></span></div>
</div>

<!-- ========== Header Starts ========== -->
<header class="header">
    <nav class="navbar">
        <div class="container">
            <div class="navbar-header">
                <!-- Mobile Toggle -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                        aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- / Mobile Toggle -->

                <!-- Logo  -->
                <h1 class="logo">
                    <a href="#">Drawethree</a>
                </h1>
                <!-- / Logo  -->
            </div>
            <!-- Navbar -->
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="current"><a href="#home">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#products">Products</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
            <!-- / Navbar -->
        </div>
    </nav>
</header>
<!-- ========== End Of Header ========== -->

<!-- ========== Home ========== -->
<section id="home" class="particles-box full-screen bg-cover bg-no-repeat">
    <div class="container">
        <div class="banner-center-text">
            <h1><span class="font-w-300 color-white">I'm</span> Drawethree</h1>
            <p class="bg-theme">JAVA DEVELOPER</p>
            <br>
            <p class="bg-theme"><b class="server-online"></b> ONLINE PLAYERS ACROSS THE WORLD ENJOY MY CREATIONS</p>
            <br>
            <p class="bg-theme"><b class="server-online"></b><b><?= getTotalDownloads() ?></b> DOWNLOADS OF MY
                SOFTWARE</p>
        </div>
    </div>
</section>
<!-- ========== End Of Home ========== -->

<!-- ========== About Us ========== -->
<section id="about" class="section skills-box">
    <!-- Container -->
    <div class="container">
        <div class="section-title-01">
            <h2>Something little about me</h2>
            <p><strong>Hello, my name is John.</strong> I am <?= getMyAge() ?> years old Java Developer with
                <?= getJavaExp() ?> years of experience in software engineering. I am currently studying Informatics at
                the University of
                Žilina, Faculty of Management and Informatics. This year I will be finishing my bachelor's degree
                program.</p>
        </div><!-- .section-title -->

        <div class="about-me-box">
            <div class="row">
                <div class="col-md-4">
                    <div class="avtar">
                        <img src="static/img/me.jpg">
                    </div>
                </div>
                <div class="col-md-4">
                    <h2>Information</h2>
                    <ul class="about-me">
                        <li><strong>Name: </strong>Ján Kluka</li>
                        <li><strong>Birthday: </strong>24th March, 1999</li>
                        <li><strong>E-mail: </strong>personal.janci.kluka@gmail.com</li>
                        <li><strong>Discord: </strong>Drawethree#1018</li>
                    </ul>
                    <div class="social-link">
                        <ul>
                            <li><a href="https://github.com/Drawethree"><i class="fa fa-github"
                                                                           aria-hidden="true"></i></a></li>
                            <li><a href="https://www.linkedin.com/in/j%C3%A1n-kluka-2530891a4/"><i
                                            class="fa fa-linkedin"
                                            aria-hidden="true"></i></a></li>
                        </ul>
                    </div><!-- .social-link -->
                    <div class="about-actions">
                        <button class="m-btn-01 lets-talk">contact me <i class="fa fa-arrow-right"></i></button>
                        <button class="m-btn-01 lets-talk" onclick="location.href='./static/files/Resume.pdf'">my resume
                            <i class="fa fa-arrow-right"></i></button>
                    </div>
                </div>
                <div class="col-md-4">
                    <h2>Skills</h2>
                    <div class="skillbar skillbar-style-1" data-percent="90">
                        <span class="skillbar-title">Java</span>
                        <p class="skillbar-bar bg-theme"></p>
                    </div>

                    <!-- End Skill Bar -->

                    <div class="skillbar skillbar-style-1" data-percent="85">
                        <span class="skillbar-title">SQL</span>
                        <p class="skillbar-bar bg-theme"></p>
                    </div>
                    <!-- End Skill Bar -->

                    <div class="skillbar skillbar-style-1" data-percent="80">
                        <span class="skillbar-title">Git</span>
                        <p class="skillbar-bar bg-theme"></p>
                    </div>
                    <!-- End Skill Bar -->

                    <div class="skillbar skillbar-style-1" data-percent="50">
                        <span class="skillbar-title">C++</span>
                        <p class="skillbar-bar bg-theme"></p>
                    </div>

                    <div class="skillbar skillbar-style-1" data-percent="50">
                        <span class="skillbar-title">PHP</span>
                        <p class="skillbar-bar bg-theme"></p>
                    </div>
                    <!-- End Skill Bar -->
                </div>
            </div><!-- .Row -->
        </div> <!-- about me -->
    </div><!-- .Container -->

</section>
<!-- ========== End Of About Us ========== -->

<!-- ========== Services ========== -->
<section id="products" class="section grey-bg">
    <div class="container">

        <div class="section-title-01">
            <h2>My Software</h2>
        </div><!-- .section-title -->

        <div class="row">
            <div class="col-md-4 pt-3">
                <div class="service-box-01">
						<span class="sb-icon">
                            <img src="static/img/86845.jpg">
						</span>
                    <h4>ULTRA PRISON CORE</h4>
                    <h5 class="text-muted">Minecraft Plugin</h5>
                    <div class="sb-desc">
                        <p>Ultra Prison Core is an ultimate solution for your prison server. This core contains
                            everything
                            that should be on each prison server. By including 20+ Custom Enchants, Auto-Sell,
                            Auto-Miner region, Tokens & Gems currencies, Ranks & Prestiges, Multipliers and a lot of
                            more, its one of the best prison cores on the market.
                        </p>
                        </br>
                        <a href="https://github.com/Drawethree/UltraPrisonCore/wiki" class="btn btn-success">Check it
                            out!</a>
                    </div><!-- .sb-desc -->
                </div><!-- .service-box -->
            </div><!-- .col-sm-4 -->

            <div class="col-md-4 pt-3">
                <div class="service-box-01">
						<span class="sb-icon">
                            <img src="static/img/63316.jpg">
						</span>
                    <h4>PRO DeathChest</h4>
                    <h5 class="text-muted">Minecraft Plugin</h5>
                    <div class="sb-desc">
                        <p>PRO DeathChest is a plugin which manages players items after their death. This plugin simply
                            spawns a chest with player's items so players can easily pickup their items and don't have
                            to worry that someone will steal them, or they will be lost. PRO DeathChest is suitable for
                            any kind of server!
                        </p>
                        </br>
                        <a href="https://github.com/Drawethree/PRO-DeathChest/wiki" class="btn btn-success">Check it
                            out!</a>
                    </div><!-- .sb-desc -->
                </div><!-- .service-box -->
            </div><!-- .col-sm-4 -->

            <div class="col-md-4 pt-3">
                <div class="service-box-01">
						<span class="sb-icon">
							<img src="static/img/49587.jpg">
						</span>
                    <h4>PRO BUILD BATTLE</h4>
                    <h5 class="text-muted">Minecraft Plugin</h5>
                    <div class="sb-desc">
                        <p>BuildBattle is a building styled Minecraft minigame where players have to build something
                            relevant to specified theme for a certain amount of time.
                            Players can choose to play solo mode, or team mode to team up with other players or friends.
                            When building time is over, all players will vote for the best build in the game. Player(s)
                            with most vote points is(are) the winner(s)!
                        </p>
                        </br>
                        <a href="https://github.com/Drawethree/PRO-BuildBattle/wiki" class="btn btn-success">Check it
                            out!</a>
                    </div><!-- .sb-desc -->
                </div><!-- .service-box -->
            </div><!-- .col-sm-4 -->

        </div><!-- .row -->
    </div><!-- .container -->
</section>
<!-- ========== End Of Services ========== -->
<!-- ========== Services ========== -->
<section id="services" class="section grey-bg">
    <div class="container">

        <div class="section-title-01">
            <h2>My Services</h2>
        </div><!-- .section-title -->

        <div class="row">
            <div class="col-sm-4">
                <div class="service-box-01">
						<span class="sb-icon">
							<img src="static/img/minecraft.png">
						</span>
                    <h4>MINECRAFT PLUGIN DEVELOPMENT</h4>
                    <div class="sb-desc">
                        <p>With experience in writing highly-optimised code, you're in good hands. Whether you need a
                            whole new Core developed, a plugin updated to the newest
                            version, or simply
                            an in-house Developer, I'm sure I can help you out.
                        </p>
                    </div><!-- .sb-desc -->
                </div><!-- .service-box -->
            </div><!-- .col-sm-4 -->
            <div class="col-sm-4">
                <div class="service-box-01">
						<span class="sb-icon">
							<img src="static/img/discord.png">
						</span>
                    <h4>DISCORD BOT DEVELOPMENT</h4>
                    <div class="sb-desc">
                        <p>With experience in writing highly-optimised code, you're in good hands. Whether you need a
                            whole new Core developed, a plugin updated to the newest
                            version, or simply
                            an in-house Developer, I'm sure I can help you out.
                        </p>
                    </div><!-- .sb-desc -->
                </div><!-- .service-box -->
            </div><!-- .col-sm-4 -->
            <div class="col-sm-4">
                <div class="service-box-01">
						<span class="sb-icon">
							<img src="static/img/java.png">
						</span>
                    <h4>OTHER JAVA DEVELOPMENT</h4>
                    <div class="sb-desc">
                        <p>With experience in writing highly-optimised code, you're in good hands. Whether you need a
                            whole new Core developed, a plugin updated to the newest
                            version, or simply
                            an in-house Developer, I'm sure I can help you out.
                        </p>
                    </div><!-- .sb-desc -->
                </div><!-- .service-box -->
            </div><!-- .col-sm-4 -->
        </div><!-- .row -->
    </div><!-- .container -->
</section>
<!-- ========== End Of Services ========== -->

<!-- ========== End Of Resume ========== -->

<!-- ========== CAT ========== -->
<section class="call-to-action-01 bg-cover bg-no-repeat" style="background-image: url(static/img/code.jpg);">
    <div class="container">
        <h2>I'm available for Freelance</h2>
        <button class="m-btn-01 m-btn-01-black" onclick="location.href='./static/files/Resume.pdf'">SEE MY RESUME
        </button>
    </div><!-- .container -->
</section><!-- .call-to-action -->
<!-- ========== End Of CTA ========== -->

<!-- ========== Work ========== -->
<section id="portfolio" class="section">
    <div class="container">
        <div class="section-title-01">
            <h2>My Portfolio</h2>
        </div><!-- .section-title -->

        <div class="portfolio-box">
            <!--<div class="filter-01">
                <button type="button" class="control" data-filter="all">All</button>
                <button type="button" class="control" data-filter=".java_development">Java Development</button>
                <button type="button" class="control" data-filter=".my_projects">My Projects</button>
            </div>-->

            <div class="row">
                <div class="col-md-4 java_development">
                    <div class="portfolio-col-01">
                        <img class="img-fluid" src="static/img/mcprison.jpg" title="" alt=""/>
                        <div class="hover">
                            <h4 class="card-title"><a href="www.mcprison.com">MCPrison.com</a></h4>
                            <h5 class="card-subtitle">02.03.2021 - Present</h5>
                            <h5 class="card-subtitle">Java Developer</h5>
                        </div>
                    </div>
                </div>


                <div class="col-md-4 java_development">
                    <div class="portfolio-col-01">
                        <img class="img-fluid" src="static/img/faithful.png" title="" alt=""/>
                        <div class="hover">
                            <h4 class="card-title"><a href="www.faithfulmc.com/">FaithfulMC.com</a></h4>
                            <h5 class="card-subtitle">01.05.2020 - 01.03.2021</h5>
                            <h5 class="card-subtitle">Development of HCF Core and various Java applications.</h5>
                        </div>
                    </div>
                </div><!-- .col-sm-4 col-sm-12 -->

                <div class="col-md-4 java_development">
                    <div class="portfolio-col-01">
                        <img class="img-fluid" src="static/img/fortunerip.png" title="" alt=""/>
                        <div class="hover">
                            <h4 class="card-title"><a href="www.fortune.rip/">Fortune.RIP</a></h4>
                            <h5 class="card-subtitle">01.05.2020 - 01.03.2021</h5>
                            <h5 class="card-subtitle">Development of Prison Core and various Java applications.</h5>
                        </div>
                    </div>
                </div><!-- .col-sm-4 col-sm-12 -->
            </div>

            <div class="row">
                <div class="col-md-4 java_development">
                    <div class="portfolio-col-01">
                        <img class="img-fluid" src="static/img/wildprison.png" title="" alt=""/>
                        <div class="hover">
                            <h4 class="card-title"><a href="https://store.wildprison.net/">WildPrison.net</a></h4>
                            <h5 class="card-subtitle">Project on request</h5>
                            <h5 class="card-subtitle">Development of whole Prison Core.</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div><!-- .container -->
</section>
<!-- ========== End Of Work ========== -->

<!-- ========== Start Testimonial ========== -->
<section class="section testimonial-area-01 bg-cover bg-no-repeat"
         style="background-image: url(static/img/reviews.jpg);">
    <div class="container">
        <div class="owl-carousel testimonial-slider-01">
            <div class="item">
                <div class="single-testimonial-01 text-center">
                    <div class="avtar"><img src="https://www.mc-market.org/data/avatars/l/30/30036.jpg?1495609871"
                                            alt=""></div>
                    <div class="avtar-say">
                        <p>"The best developer I have ever worked with! Always online, fast with his work and a really
                            nice guy to talk to!"</p>
                        <div class="clearfix"></div>
                        <h4>- Jack</h4>
                        <p class="desg">Previous owner of ComplexGaming</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="single-testimonial-01 text-center">
                    <div class="avtar"><img src="https://www.mc-market.org/data/avatars/l/111/111917.jpg?1578257064"
                                            alt=""></div>
                    <div class="avtar-say">
                        <p>"Drawethree has done some work for me. It was very high quality and completed within a
                            respectable timeframe. He offered the source for free as any developer should do, and fixed
                            ~50 bugs (it was a large project)."</p>
                        <div class="clearfix"></div>
                        <h4>- MrSwalbert</h4>
                        <p class="desg">Owner of ParagonMC</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="single-testimonial-01 text-center">
                    <div class="avtar"><img src="https://www.spigotmc.org/data/avatars/l/108/108375.jpg?1466537949"
                                            alt=""></div>
                    <div class="avtar-say">
                        <p>"One of the best coders with the best support I have ever seen. His products are worth every
                            cent."</p>
                        <div class="clearfix"></div>
                        <h4>- MysticCity</h4>
                        <p class="desg">Buyer of Ultra Prison Core</p>
                    </div>
                </div>
            </div><!-- .item -->
        </div><!-- .owl-carousel testimonial-slider -->
    </div><!-- .container -->
</section><!-- .section testimonial-area -->
<!-- ========== End Of Testimonial ========== -->

<!-- ========== Contact ========== -->
<section id="contact" class="section contact-us-01 grey-bg">
    <div class="container">
        <div class="section-title-01">
            <h2>Contact Me</h2>
        </div>

        <div class="row">

            <ul class="contact-info-01">
                <li>
                    <i class="fa fa-hashtag"></i>
                    <h4>Discord:</h4>
                    <p>Drawethree#1018</p>
                </li>
                <li>
                    <i class="fa fa-envelope"></i>
                    <h4>Email:</h4>
                    <p>
                        <a href="mailto:personal.janci.kluka@gmail.com">personal.janci.kluka@gmail.com</a>
                    </p>
                </li>
            </ul><!-- .contact-info -->
        </div><!-- .row -->
    </div><!-- .container -->
</section>
<!-- ========== End Of Contact ========== -->

<!-- ========== Footer ========== -->
<footer class="footer">
    <div class="main-footer text-center">
        <h4 class="footer-logo">Drawethree</h4>
        <div class="social-link">
            <ul>
                <li><a href="https://www.linkedin.com/in/ján-kluka-2530891a4/"><i class="fa fa-linkedin"
                                                                                  aria-hidden="true"></i></a>
                </li>
                <li><a href="https://github.com/Drawethree"><i class="fa fa-github" aria-hidden="true"></i></a></li>
            </ul>
        </div><!-- .social-link -->
    </div><!-- .main-footer -->
    <div class="sub-footer  text-center">
        <p>Copyright© By Drawethree 2021 | All Rights Reserved.</p>
    </div>
</footer> <!-- .footer -->
<!-- ========== End Of Footer ========== -->

<script>
    function render() {
        var playersOnline = 0;

        function addPlayers(amount) {
            playersOnline += amount;
            document.querySelector('.server-online').innerHTML = playersOnline;
            console.log(playersOnline)
        }

        MinecraftAPI.getServerStatus('play.fortune.rip', {}, function (err, status) {
            addPlayers(status.players.now)
        });

        MinecraftAPI.getServerStatus('play.thearchon.net', {}, function (err, status) {
            addPlayers(status.players.now)
        });

        MinecraftAPI.getServerStatus('faithfulmc.com', {}, function (err, status) {
            addPlayers(status.players.now)
        });

        MinecraftAPI.getServerStatus('play.wildprison.net', {}, function (err, status) {
            addPlayers(status.players.now)
        });

        MinecraftAPI.getServerStatus('mcprison.com', {}, function (err, status) {
            addPlayers(status.players.now)
        });

    }

    render();
    window.setInterval(render, 10000);
</script>

<!-- Jquery -->
<script src="static/js/jquery.js"></script>
<!-- End -->

<!-- Plugin JS -->
<script src="static/plugin/bootstrap/js/bootstrap.js"></script>
<!--bootstrap-->
<script src="static/plugin/parallax/parallax.min.js"></script><!-- parallax library -->
<script src="static/plugin/mixitup/mixitup.min.js"></script><!-- mixitup -->
<script src="static/plugin/owl-carousel/js/owl.carousel.min.js"></script><!-- owl-carousel -->
<script src="static/plugin/skills-bar/js/skill.bars.jquery.js"></script>
<script src="static/plugin/skills-bar/js/skill.js"></script>
<!-- skill.bars.jquery -->

<script src="static/plugin/particles/particles.min.js"></script>
<script src="static/plugin/particles/particles-app.js"></script>
<!-- End -->

<!-- Theme Js -->
<script src="static/js/jquery.nav.js"></script>
<script src="static/js/custom.js"></script>
<script src="static/js/home.js"></script>

<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());

    gtag('config', 'G-3VTVRCFC1D');
</script>

<!-- Only For Home page -->
<!-- End -->
</body>
<!-- ========== End of Body ========== -->

<?php

function getMyAge()
{
    $d1 = new DateTime();
    $d2 = new DateTime('1999-03-24');

    $diff = $d2->diff($d1);
    return $diff->y;
}

function getJavaExp()
{
    $d1 = new DateTime();
    $d2 = new DateTime('2016-03-24');

    $diff = $d2->diff($d1);
    return $diff->y;
}

?>
<?php

function getTotalDownloads()
{
    $USERAGENT = "Please change this!";
    $REQUEST_URL = "https://api.spiget.org/v2/authors/65005/resources";

    $options = array('http' => array('user_agent' => $USERAGENT));
    $context = stream_context_create($options);
    $response = @file_get_contents($REQUEST_URL, false, $context);

    if (!isset($response) || is_null($response)) {
        return "10000+";
    }

    $data = json_decode($response, true);

    $count = 0;
    foreach ($data as $item) {
        $count += $item['downloads'];
    }
    return $count;
}

?>
</html>

