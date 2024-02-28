<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=ù, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>The Aulab Post - Email</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <h1>Abbiamo ricevuto la tua richiesta</h1>
                <h4>Richiesta per il ruolo di {{ $info['role'] }}</h4>
                <p>ricevuta da {{ $info['email'] }}</p>
                <h4>Messaggio:</h4>
                <p>{{ $info['message'] }}</p>
            </div>
            <div class="col-12 col-md-6">
                <img src="/image/logoAulabPost.png" alt="">
            </div>
        </div>
    </div>


    <h4>
        Le faremo sapere il prima possibile riguardo a questa offerta di lavoro.
    </h4>

</body>

</html>
