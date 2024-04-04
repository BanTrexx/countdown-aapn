<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="refresh" content="URL=http://asnaapn2024.com/" />
        <title>AAPN 2024 | Registration</title>
        <link rel="stylesheet" href="style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    </head>
    <body>
        <div class="container text-center">
            <div class="row p-3">
                <div class="col-3 text-start">
                    <img class="logo-allianz" src="img/allianz.png" alt="">
                </div>
                <div class="col-4 offset-5 text-end">
                    <img class="logo-asn" src="img/asn.png" alt="">
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row text-center">
                <div class="align-items-center justify-content-center" >
                    <img class="header-img" src="img/header.png" alt="">
                </div>
            </div>
            <div class="row">
                <div class="countdown">
                    <div>
                        <span>Days</span>
                        <p id="days">00</p>
                    </div>
                    <div>
                        <span>Hours</span>
                        <p id="hours">00</p>
                    </div>
                    <div>
                        <span>Minutes</span>
                        <p id="minutes">00</p>
                    </div>
                    <div>
                        <span>Seconds</span>
                        <p id="seconds">00</p>
                    </div>
                </div>
            </div>

            <script>
                var countdown = new Date("May 3, 2024 17:00:00").getTime();
                var x = setInterval(() => {
                    var now = new Date().getTime();
                    var distance = countdown - now;

                    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                    document.getElementById("days").innerHTML = days;
                    document.getElementById("hours").innerHTML = hours;
                    document.getElementById("minutes").innerHTML = minutes;
                    document.getElementById("seconds").innerHTML = seconds;
                }, 1000);
            </script>
        </div>

        <div class="footer text-center">
            <div id="footer-row" class="row align-items-center" style="height: 100px; max-width: 100%;">
                <div class="col-8 offset-2">
                    <h5 class="footer-text">Allianz Indonesia | Spectrum of Wonder</h5>
                </div>
                <div class="col-2">
                    <div class="helpdesk-btn">
                        <a href="http://asnaapn2024.com/">
                            <div id="helpdesk">
                                <img class="helpdesk-img" src="img/helpdesk.png" alt="">
                                <p class="helpdesk">Helpdesk</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>