<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Book Appointment</title>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <style>
    body
    {
        margin-top: 130px;
        background-color: black;
    }
    .docdetails{
       font-size: 20px; 
       background-color: white; 
    }
    .appdetails{
    font-size: 20px;
    background-color: white;
    }
    </style>
</head>
<body>
<div class="app1">
<div align="center" class="docdetails">
<h2>DOCTOR TIMINGS</h2>
<p>DR.Rajesh-Endodontist
<br>
Timings:10:00AM to 2:00PM and 4:00PM to 8:00PM(MON-SAT)
</p>
<p>DR.Sneha-Orthodontist
<br>
Timings:3:00PM to 6:00PM(FRI)
</p>
<p>DR.Deeksha-Orthodontist
<br>
Timings:12:00PM to 6:00PM(MON-SAT)
</p>
<p>DR.Srinivas-Prosthodontist
<br>
Timings:10:0AM to 12:00PM (WED-THU)
</p>
</div>

<div align="center" class="appdetails">
<h2>APPOINTMENT DETAILS</h2>
<form method="POST" action="appointmentdb.php">
Select your preferred doctor:
<select name="doctor" id="doctor">
<option value="DR.Rajesh">DR.Rajesh</option>
<option value="DR.Sneha">DR.Sneha</option>
<option value="DR.Deeksha">DR.Deeksha</option>
<option value="DR.Srinivas">DR.Srinivas</option>
</select><br>
Select date<input name="datepicker" id="datepicker" width="270" />
Select your preferred time:
<select name="time" id="time">
<option value="10AM">10AM</option>
<option value="11AM">11AM</option>
<option value="12PM">12PM</option>
<option value="1PM">1PM</option>
<option value="3PM">3PM</option>
<option value="4PM">4PM</option>
<option value="5PM">5PM</option>
<option value="6PM">6PM</option>
<option value="7PM">7PM</option>
<option value="8PM">8PM</option>
</select><br>
Reason:<input type="text" id="reason" name="reason">
<br>
<input type="submit" name="submit" value="submit">
</form>

<script>
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap'
        });
    </script>
</div>
</div>
</body>
</html>



