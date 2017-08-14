<!DOCTYPE html>
<html>
    <head>
        <title>login</title>
        <!--link to bootstrap-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <style>
            body{
                background-color: #fff;
                text-align: left;
            }
            .row{
                margin:0 250px;
                padding: 100px;
                background-color: #ccc;
                margin-top: 50px;

            }
            h1{
                text-align: center;
            }
            .form-control{
                border: 2px solid #80a7d6;
                border-radius: 15px;

            }
        </style>
    </head>
    <body>
        <div class="row">
            <h1>LOGIN</h1><br/>
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="login_pwd" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" name="login" Value="Login" class="btn btn-success">
            </div>
        </div>
    </body>
</html>
<?php
/**
 * Created by PhpStorm.
 * User: noibilism
 * Date: 8/14/17
 * Time: 11:41 AM
 */