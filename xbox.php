<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="css/main.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link href="//cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.10/semantic.min.css" rel="stylesheet"
          id="bootstrap-css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.10/semantic.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Code Drop</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="images/codedrop-logo.png">
    <link href="css/dropdown.css" rel="stylesheet">
</head>
<body>
<div id="particles-js">
    <div class="main-header">
        <div class="main-content">
            <a href="index.php"><img class="header-img" onclick="" src="images/christmastlogo.png" width="120"
                                     height="120"></a>
            <a href="index.php"><img class="header-imgtext" src="images/logotext.png" width="300" height="60"></a>
        </div>
    </div>
    <div class="main-container">
        <div class="topheader">
            <ul class="menu">
                <div class="dropdown">
                    <button class="dropbtn">Products
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                        <a href="epic.php">Epic games</a>
                        <a href="xbox.php">Xbox</a>
                        <a href="ps4.php">Ps4</a>
                        <a href="#">Vbucks</a>
                    </div>
                </div>
                <li><a href="faq.php">FAQ</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a style="color: #7289da" target="_blank" href="https://discord.gg/codedrop">Discord</a></li>
            </ul>
        </div>
        <div class="countdown-container">
            <h2 class="countdown-title">Time till CodeDrop Christmas party: </h2>
            <p id="countdown">20d 22h 18m 45s </p>
        </div>
        <div class="ui container">
            <div class="ui four column grid">
                <div class="row">
                    <div class="column" style="margin-bottom: 25px;">
                        <div class="ui card" style="background-color: #1e1e1e">
                            <div class="image">
                                <img src="images/eon.png"/>
                            </div>
                            <div class="content">
                                <a class="header" style="color: #e1e1e1">Mini Eon skin + 500 Vbucks</a>
                                <div class="description" style="color: #e1e1e1;font-size: 22px;">
                                    €14.99
                                </div>
                            </div>
                            <div class="extra content">
                                <button data-selly-product="adfeff4f" class="fluid ui button"
                                        style="background-color: #FF4181; color: #e1e1e1">Buy
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="column" style="margin-bottom: 25px;">
                        <div class="ui card" style="background-color: #1e1e1e">
                            <div class="image">
                                <img src="images/eon.png"/>
                            </div>
                            <div class="content">
                                <a class="header" style="color: #e1e1e1">Mini Eon skin + 2000 Vbucks</a>
                                <div class="description" style="color: #e1e1e1;font-size: 22px;">
                                    €59,99
                                </div>
                            </div>
                            <div class="extra content">
                                <button data-selly-product="d67c9b7e" class="fluid ui button"
                                        style="background-color: #FF4181; color: #e1e1e1">Buy
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="column" style="margin-bottom: 25px;">
                        <div class="ui card" style="background-color: #1e1e1e">
                            <div class="image">
                                <img src="images/spiderknight.png"/>
                            </div>
                            <div class="content">
                                <a class="header" style="color: #e1e1e1">Spider knight Outfit + 2000 vbucks</a>
                                <div class="description" style="color: #e1e1e1;font-size: 22px;">
                                    €30,99
                                </div>
                            </div>
                            <div class="extra content">
                                <button data-selly-product="6676d2d6" class="fluid ui button"
                                        style="background-color: #FF4181; color: #e1e1e1">Buy
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<footer>
    <h2 class="footer-copyright"> © Made by @NotRedice & @Saft69</h2>
</footer>
<script src="https://embed.selly.io"></script>
<script src="assets/main.js" rel="script"></script>
<script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
<script>
    particlesJS.load('particles-js', 'assets/particles.json', function () {
    });

</script>
</body>
</html>
