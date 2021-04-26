<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <title>Vio</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <form action="/login" class="mt-5" method="post">
                    @csrf
                <div class="form-group">
                  <label for="username">USERNAME</label>
                  <input type="text" name="username" id="username" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
                <div class="form-group">
                    <label for="password">PASSWORD</label>
                    <input type="password" name="password" id="password" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-info">MASUK GUYS</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>