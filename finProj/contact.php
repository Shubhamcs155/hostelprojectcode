<?php
    include "nav.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookMyHostel | Contact</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=ABeeZee:ital@1&family=Balsamiq+Sans:wght@700&display=swap" rel="stylesheet">    <style>
        th,td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        .info {
            background-color: rgb(168, 213, 255);
        }
        .cth {
            font-family: 'Balsamiq Sans', cursive;
            font-size: 30px;
            padding: 10%;
        }
        .ctd {
            font-family: 'ABeeZee', sans-serif;
            font-size: 20px;
            padding: 10%;
        }
        table tbody{ overflow: auto; }
        .table{
            display: block;
            overflow-x: auto;
            width: 100%;
        }
        .tb {
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body style="background-color: blanchedalmond;">        
            <div class="table-responsive justify-content-center" style="margin-top: 10px;margin-left: 10px;">
                <table class="table">
                  <thead>
                    <tr style="background-color: rgb(204, 255, 138);">
                      <th scope="col" class="cth">Roll No.</th>
                      <th scope="col" class="cth">Name</th>
                      <th scope="col" class="cth">Contact Number</th>
                      <th scope="col" class="cth">Reg. No.</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr style="background-color: rgb(175, 250, 244);">
                        <td class="ctd">A71</td>
                        <td class="ctd">Shubham Doke</td>
                        <td class="ctd"><a href="tel:7219790049">7219790049</a></td>
                        <td class="ctd"> <a href="mailto:2019bcs155@sggs.ac.in">2019bcs155</a></td>
                    </tr>
                    <tr style="background-color: rgb(175, 250, 244);">
                        <td class="ctd">A67</td>
                        <td class="ctd">Kushal Dayma</td>
                        <td class="ctd"><a href="tel:8459644130">8459644130</a></td>
                        <td class="ctd"> <a href="mailto:2019bcs139@sggs.ac.in">2019bcs139</a></td>
                    </tr>
                    <tr style="background-color: rgb(175, 250, 244);">
                        <td class="ctd">A65</td>
                            <td class="ctd">Shivendra Bhaganagre</td>
                            <td class="ctd"><a href="tel:9422164702">9422164702</a></td>
                            <td class="ctd"> <a href="mailto:2019bcs135@sggs.ac.in">2019bcs135</a></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            <div style="margin-top: 100px;"></div>
        <?php
            include "foter.php";
        ?>    
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>
