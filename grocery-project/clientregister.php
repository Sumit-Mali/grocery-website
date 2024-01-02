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
        margin: 11vh 11vh 0 0;
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

    @media screen and (max-width: 768px) {

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

    @media screen and (max-width: 768px) {
        .rightbg {
            height: 100vh;
        }
    }
</style>

<body class="rightbg">
    <div class="container">
        <p style="text-align:center; font-weight:800;">Create your new account</p>
        <div class="row">
            <div class="col-10">
                <label for="fname">User Name:</label>
            </div>
            <div class="col-90">
                <input type="text" id="uname" name="username">
            </div>
        </div>
        <div class="row">
            <div class="col-10">
                <label for="email">Email:</label>
            </div>
            <div class="col-90">
                <input type="email" id="email" name="email">
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
            <label for="usertype">User Type:</label>
            <select name="usertype" id="usertype" style="padding:1vh;font-size:2vh;">
                <option value="user">User</option>
                <option value="vendor">Vendor</option>
                <option value="admin">Admin</option>
            </select>
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
            <input type="submit" value="Register">
        </div>
    </div>
</body>

</html>