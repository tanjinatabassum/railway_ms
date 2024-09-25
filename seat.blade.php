<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seat Availability </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('CSS/styles.css') }}">
</head>
<body>
    <div>
        <style>
            h1{
                color: hsl(0, 50%, 30%);
            }
            </style>
 <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="collapse navbar-collapse justify-content-end">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="index"><b>Home</b> <span class="sr-only">(current)</span></a>
            </li>
           
        </ul>
    </div>
</nav>
</div>
    <div class="container">
        <h1 class="mt-5 text-center">Seat Availability</h1>
        <div class="form-row justify-content-center mt-4">
            <div class="col-4 md-4">
                <div class="input-group">
                    <select class="custom-select" id="trainSelect">
                        <option selected>Choose Train...</option>
                        <option value="1">RANGPUR EXPRESS (771)</option>
                        <option value="2">TRANGPUR EXPRESS (771)</option>
                        <option value="3">SHONAR BANGLA(772)</option>
                        <option value="4">PANCHAGARH EXPRESS (793)</option>
                        <option value="4">PANCHAGARH EXPRESS (794)</option>

                    </select>
                    <<div class="input-group-append">
                        <a href="/s" class="btn btn-primary">Check Availability</a>
                    </div>
                </div>
            </div>
        </div>
        <div id="seat-availability" class="col-4 md-4"></div>
    </div>



  
   <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>