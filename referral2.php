<!DOCTYPE html>
<html lang="en"><body background="img/btcs.png">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Double your bitcoin in 12 hours online</title>
    <link rel="shortcut icon" href="img/header/b1.png">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700,900&amp;subset=cyrillic" rel="stylesheet">
    <link rel="stylesheet" href="use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
        crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/media__mobile.css" media="screen and (max-width: 768px)">
    <link rel="stylesheet" href="css/media__desktop.css" media=" only screen and (max-width: 1100px) and (min-width: 768px)">
    <script src="code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
</head>
<body>
    <div class="wrapper">
        <header class="header">
            <div class="container">
                <div class="header__wrap">
                    <section class="header__navbar header__navbarv_left">
                        <i class="fas fa-bars bar bar_media"></i>
                        <ul class="header__list">
                            <li class="header__item">
                                <a href="index.html" class="header__link ">HOME</a>
                            </li>
							</li>
					     <li class="header__item">
                        <a href="referral.html" class="header__link  header__link_active">Referral</a>
                    </li>
                            <li class="header__item">
                                <a href="deposits.html" class="header__link">DEPOSITS</a>
                            </li>
                            <li class="header__item">
                                <a href="payouts.html" class="header__link ">PAYOUTS</a>
                            </li>
                            <li class="header__item">
                                <a href="faq.html" class="header__link">FAQ</a>
                            </li>
                            <li class="header__item">
                                <a href="terms.html" class="header__link">TERMS</a>
                            </li>
                            <li class="header__item">
                                <a href="support.html" class="header__link ">Support</a>
                            </li>
                        </ul>
                    </section>
                    <section class="header__start">
                        <div class="header__btn">
                            <a href="index.html" class="header__btn-link">
                                <div class="header__btn-icon">
                                    <i class="fas fa-user"></i>
                                </div>
                                <div class="header__btn-text">GET STARTED</div>
                            </a>
                        </div>
                    </section>
                </div>
            </div>
        </header>

        <section class="maincontent">
            <div class="container">
                <section class="Referral">
                    <h1 class="support__title"><font color="white">Invite your friends and get 50% each time they deposit.
                    </font></h1>
                    <div class="support__desk"><font color="white">Wish to help your friends to earn money easely as you? Not a big deal! You always can tell them about our service for Bitcoin mining.
But stop! Any of your friends who deposit with your special url will make profit not just for himself - you will also get bonus for your recomendations.
                    </font></div>
                    <h1 class="support__contact"><font color="white">You Referral Link</font></h1>
                  
				  <?php 
				 
				  	$data=$_POST['postdata'];
				  echo" 
				   <form >
				
                        <div class='form__wrap'>
                            <div class='form__item'>
                                <label for class='form__item-label'>Share you link to start earning bitcoins.
                                </label>
                                 <label for class='form__item-label'><font color='black' size='4px'>https://www.doubletopbitcoin.online/?ref=$data</font>
								 
                            </div>
                        </div>
                    </form>
					"?>
                </section>
            </div>
        </section>
    </div>
    <footer id="footer" class="footer">
        <div class="container">
            <div class="footer__text">
                <p class="footer__text-site">
                    <span class="footer__site">Double Top Bitcoin</span> 2018</p>
                <p class="footer__text-copy">Copyright ?? 2018 BTC COIN COMPANY LTD</p>
            </div>
        </div>
    </footer>
    <script src="js/script.js"></script>

</body>
</html>