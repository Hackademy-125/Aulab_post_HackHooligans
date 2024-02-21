<!DOCTYPE html>
<html lang="en">

<head>
    {{-- ICONE DI FONTAWESOME --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>The Aulab Post</title>
</head>

<body>

    <header class="container-fluid about">
        <div class="row align-items-center flex-column">

            <div class="col-12 col-md-6 d-flex justify-content-center">
              <a href="{{route('homepage')}}"> <img src="image/Minimal_initial_brand_logo_2.png" alt="" width="150px"> </a>
            </div>
        </div>

        <div class="row align-items-center about-height">
            <div class="col-12 col-md-6 ">
                <h1 class="txt-about display-4">Chi siamo?</h1>
                <p class="txt-about">
                    Nel 1960, nacque "The Aulab Post", emblema di giornalismo pionieristico. Da cronache locali a
                    narrazioni globali, ha ridefinito l'informazione. Sessant'anni di impegno per l'obiettività,
                    tracciando il corso della storia. Con passione, imparzialità e integrità, The Aulab Post persiste
                    nell'illuminare il mondo con la forza delle parole.
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-12 d-flex justify-content-center align-items-center flex-column">
                <p class=" txt-about about-text"> Vieni a trovarci </p>
                <a href="{{route('homepage')}}" type="submit" class= "button btn1 my-2 ">HomePage</a>
            </div>
        </div>
       

    </header>


</body>

</html>
