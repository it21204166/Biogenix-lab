<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>

    


    <script src="patient.js"></script>
    <link rel="stylesheet" type="text/css" href="patient.css">

</head>
<body>

    <div class="container">
        <h2 class="title">
            Patient report upload
        </h2>
        <table>
        <thead>
            <tr class="head">
                <th>Patient Name</th>
                <th>Email</th>
                <th>Upload Report File</th>
            </tr>
        </thead>
        <tbody>
            <tr >
                <td class="box" data-label="name"><input type="text" placeholder="Sahan Mudalige"></td>
                <td class="box" data-label="email"><input type="email" placeholder="Sahan@gmail.com"></td>
                <td data-label="btn"><input type="checkbox" class="inputStyle" id="checkBox" onclick="enableButton()">
                    Recheck the data and select the tickmark<br><input type="submit" value="Submit" 
                     id="submitBtn"  disabled><br><a href="upload.php" >Upload test report</a></td>
                
                
            </tr>

        </tbody>
        </table>

    </div>
    
    </body>
</html>