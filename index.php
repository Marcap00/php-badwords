<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic" rel="stylesheet" />
    <!-- Bootstrap 5 -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css' integrity='sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==' crossorigin='anonymous' />
</head>

<body>
    <div class="container">
        <div class="title-description">
            <h1 class="fw-semibold">PHP Badwords</h1>
            <p class="fs-3">Inserisci un testo e una parola che vuoi censurare</p>
        </div>

        <form action="result.php">
            <div class="mb-3">
                <label for="input-text" class="form-label fs-5">Testo:</label>
                <textarea class="form-control w-50" id="input-text" name="InputText" rows="3" placeholder="Text"></textarea>
            </div>
            <div class="mb-3">
                <label for="badword" class="form-label fs-5 text-danger">Parola da censurare:</label>
                <input type="text" class="form-control w-50" id="badword" name="badword" placeholder="Badword">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</body>

</html>