<!DOCTYPE html>
<html lang="en-us">

<head>
    <meta charset="UTF-8">
    <title>Online Grocery Shop</title>
</head>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Lato&family=Poppins:wght@300;400&family=Roboto&family=Roboto+Slab&display=swap');

    * {
        box-sizing: border-box;
        padding: 0;
        margin: 0;
        font-family: 'Poppins', sans-serif;
    }

    input[type=text],
    input[type=email],
    input[type=number],
    input[type=select],
    input[type=date],
    input[type=select],
    input[type=password],
    input[type=tel] {
        width: 80%;
        padding: 12px;
        margin-left: 30px;
        border: 1px solid rgb(168, 166, 166);
        border-radius: 4px;
        resize: vertical;
    }

    textarea {
        width: 80%;
        padding: 12px;
        margin-left: 30px;
        border: 1px solid rgb(168, 166, 166);
        border-radius: 4px;
        resize: vertical;
    }

    input[type=radio],
    input[type=checkbox] {
        width: 10%;
        margin-left: 5vh;
        padding-left: 0%;
        border: 1px solid rgb(168, 166, 166);
        border-radius: 4px;
        resize: vertical;
    }

    label {
        display: inline-block;
    }

    input[type=submit] {
        margin-top: 2vh;
        margin-left: 35vh;
        background-color: #4CAF50;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        float: left;
    }

    input[type=submit]:hover {
        background-color: #32a336;
    }

    .container {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
        float: right;
        width: 40%;
        margin: 4vh 4vh 0 0;
    }

    .col-10 {
        float: left;
        width: 10%;
        margin-top: 6px;
    }

    .col-90 {
        float: left;
        width: 90%;
        margin-top: 6px;
    }

    .row {
        padding: 2vh;
    }

    .row:after {
        content: "";
        display: table;
        clear: both;
    }

    @media screen and (max-width: 600px) {

        .col-10,
        .col-90,
        input[type=submit] {
            width: 100%;
            margin-top: 0;
        }
    }

    .rightbg {
        background-image: url("images/frontpage.jpg");
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>

<body class="rightbg">
    <div class="container">
        <p style="text-align:center; font-weight:800;">Create your new account</p>
        <div class="row">
            <div class="col-10">
                <label for="fname">Vendor Name:</label>
            </div>
            <div class="col-90">
                <input type="text" id="vname" name="vendorname">
            </div>
        </div>
        <div class="row">
            <div class="col-10">
                <label for="mobile">Mobile:</label>
            </div>
            <div class="col-90">
                <input type="tel" id="mobile" name="mobile">
            </div>
        </div>
        <div class="row">
            <div class="col-10">
                <label for="address">Address:</label>
            </div>
            <div class="col-90">
                <textarea name="address" id="address" cols="30" rows="10"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-10">
                <label for="password">Password:</label>
            </div>
            <div class="col-90">
                <input type="password" id="password" name="password" maxlength="8">
            </div>
        </div>
        <div class="row">
            <input type="submit" value="Register" onclick="SaveVendorDetails()">
        </div>
    </div>
</body>

</html>