<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('CSS/styles.css') }}">
    <!-- Custom CSS -->
    <style>
       
        .sidebar {
            background-color: hsl(354, 32%, 60%); /* Dark sidebar background */
            color: #fff; /* White text */
            height: 100vh; /* Full height sidebar */
            padding-top: 20px; /* Top padding */
        }
       
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row">
  
     <!-- Sidebar -->
     <div class="col-md-3 sidebar">
            <h4>Schedule</h4>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <h5>Train Schedules</h5>
                    <ul>
                        <li><b>Chattogram to Dhaka</b>
                            <ul>
                                <li>Paharika: 8:00 AM</li>
                                <li>Shuborna: 10:00 AM</li>
                            </ul>
                        </li>
                        <li><b>Sylhet to Dhaka</b>
                            <ul>
                                <li>Shonar Bangla: 12:00 PM</li>
                                <li>Mohanganj: 2:00 PM</li>
                            </ul>
                        </li>
                        <li><b>Dhaka to Mymensingh</b>
                            <ul>
                                <li>Dhaka Express: 9:00 AM</li>
                                <li>Meghna Express: 11:00 AM</li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        
        <!-- Main Content -->
        <div class="col-md-9 main-content">
            <h2>Book Your Ticket</h2>
            
            <!-- Form Container -->
            <div class="col-md-6 form-container">
                <form class="needs-validation" novalidate>
                    <div class="form-group">
                        <label for="validationCustom01"><b>From Station</b></label>
                        <input type="text" class="form-control" id="validationCustom01" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="validationCustom02"><b>To Station</b></label>
                        <input type="text" class="form-control" id="validationCustom02" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="validationCustom03"><b>Date</b></label>
                        <input type="date" class="form-control" id="validationCustom03" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="validationCustom04"><b>Choose Class</b></label>
                        <input type="text" class="form-control" id="validationCustom04" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Search Your Train</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
