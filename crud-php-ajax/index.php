<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Crud Application</title>
</head>

<body>
    <table id="main">
        <tr>
            <td id="heading">
                <h1>Crud Application In Php & Ajax</h1>
                <div id="search-bar">
                    <label for="search"> Search </label>
                    <input type="search" name="search" id="search-term">
                </div>
            </td>
        </tr>

        <tr>
            <td class="insert">
                <form id="insert-form" method="POST">
                    StudentName:<input type="text" id="student_name" name="studentname">
                    <input type="submit" name="submit" id="save-btn" value="Save">
                </form>
            </td>
        </tr>

        <tr>
            <td id="load-data">
            </td>
        </tr>

    </table>


    <div id="error-message"> </div>
    <div id="success-message"> </div>

    <div id="model">
        <div id="model-form">
            <h1> Edite Form </h1>
            <table cellpadding="10%" width="100%">
               
            </table>
            <div id="close-btn">X</div>
        </div>
    </div>

    <script type="text/javascript" src="js/jquery.js"> </script>
    <script type="text/javascript" src="js/home.js"> </script>

</body>

</html>