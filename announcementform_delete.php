<!DOCTYPE html>
<html lang="en">

<head>

    <title>GPG</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <style>
        tr,
        td {
            padding: 10px;
        }

        input {
            color: black;
        }

        h3 {
            font-family: Calibri;
            font-size: 22pt;
            font-style: normal;
            font-weight: bold;
            color: SlateBlue;
            text-align: center;
            text-decoration: underline
        }

        table {
            font-family: Calibri;
            color: white;
            font-size: 11pt;
            font-style: normal;
            text-align: ;
            background-color: SlateBlue;
            border-collapse: collapse;
            border: 2px solid navy
        }

        table.inner {
            border: 0px
        }
    </style>
</head>
<body>
    <h3>ANNOUNCEMENT FORM</h3>
    <form action="form.php" method="POST">

        <table align="center" cellpadding="10">

            <tr>
                <td>ANNOUNCEMENT ID</td>
                <td><input type="number" name="aid" placeholder="Enter ID" />
                </td>
            </tr>

            
            <!----- Submit and Reset ------------------------------------------------->
            <tr>
                <td colspan="2" align="left">
                    <a href="a_anouncement.php"><input class="btn btn-success" type="button" value="Submit"></a>  
                    <input class="btn btn-danger" type="reset" value="Reset" style="margin: 10px;">
                </td>
                <td align="center">
                </td>
            </tr>
        </table>

    </form>

</body>

</html>
