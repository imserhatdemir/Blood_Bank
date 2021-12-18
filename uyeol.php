
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title> Üye ol
    </title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <link href="css/uyeol-girisyap.css" rel="stylesheet" />
</head>
<body>



        <div class="container__form container--signin">
            <form action="kaydet.php" class="form" id="form2" method="POST">
                <h2 class="form__title">Üye Ol</h2>
                <input type="text" placeholder="Adınız" class="input" name="ad"/>
                <input type="text" placeholder="Soyadınız" class="input" name="soyad" />
                <input type="date" placeholder="Doğum Tarihiniz" class="input" name="date"/>

                <input type="email" placeholder="Email" class="input" name="mail"/>
                <input type="password" placeholder="Şifre" class="input" name="pass"/>
                Kan Grubunuz: <select name="kg">
                <option>A Rh+</option>
                <option>A Rh-</option>
                <option>B Rh+</option>
                <option>B Rh-</option>
                <option>AB Rh+</option>
                <option>AB Rh-</option>
                <option>0 Rh+</option>
                <option>0 Rh-</option>
            </select>
              
                <button class="btn">Üye ol</button>
                

            </form>
        </div>
    
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>