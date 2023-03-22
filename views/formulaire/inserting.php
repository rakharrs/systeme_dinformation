<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo site_url("assets/css/login.css") ?>">
    <link rel="stylesheet" href="<?php echo site_url("assets/bootstrap/css/bootstrap.css") ?>">
    <link rel="stylesheet" href="<?php echo site_url("assets/bootstrap/css/bootstrap.min.css") ?>">
    <title>Document</title>
</head>
<body>
<div class="container">
    <h1 class="text-center">Company Information</h1>
    <div class="row col-md-12 d-flex justify-content-center">
        <div class="card col-md-12 w-75 p-3">
            <form id="my-form" method="post" action="index.php/welcome/insert"  data-parsley-validate="" >
                <div class="row">
                    <div class="col-md-5">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" id="name" value="Colas" placeholder="Enter Company Name" data-parsley-inputs="" required>
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" id="name"  value="colas@gmail.com" placeholder="Enter Company Name"  data-parsley-trigger="change" required>
                        </div>
                        <div class="mb-3">
                            <label for="mdp" class="form-label">Password</label>
                            <input type="password" name="pwd" class="form-control" id="mdp" placeholder="Enter Password "value="kazrt"
                                   data-parsley-trigger="change"
                                   data-parsley-minlength-message="Password must be higher than 5"
                                   data-parsley-minlength="5" data-parsley-validation-threshold="1" required>
                        </div>
                        <div class="mb-3">
                            <label for="date_creation" class="form-label">Creation Date</label>
                            <input type="date" name="creationDate" class="form-control" id="date_creation" value="2002-01-03" required>
                        </div>
                        <div class="mb-3">
                            <label for="fondateur" class="form-label">Founder</label>
                            <input type="text" name="founder" class="form-control" value="Dolphe" id="fondateur" placeholder="Enter Founder Name" required>
                        </div>
                        <div class="mb-3">
                            <label for="siege" class="form-label">Headquarters</label>
                            <input type="text" name="headquarters" class="form-control" value="Ankorondrano" id="siege" placeholder="Enter Headquarters Address" required>
                        </div>
                        <div class="mb-3">
                            <label for="nif" class="form-label">NIF</label>
                            <input type="text" name="nif" class="form-control" id="nif" value="15612GHsg" placeholder="Enter NIF Number" required>
                        </div>
                        <div class="mb-3">
                            <label for="num_stat" class="form-label">Statistical Number</label>
                            <input type="text" name="stat_num" class="form-control" id="num_stat" value="Dsklsk" placeholder="Enter Statistical Number" required>
                        </div>
                    </div>
                    <div class="offset-md-1 col-md-5">
                        <div class="mb-3">
                            <label for="date_creation" class="form-label">Date Exercice</label>
                            <input type="date" name="date_exercice" class="form-control" required value="200-05-06">
                        </div>
                        <div class="mb-3">
                            <label for="telecopie" class="form-label">Fax</label>
                            <input type="tel" name="fax" class="form-control" id="telecopie" value="34748do0" placeholder="Enter Fax Number" required>
                        </div>
                        <div class="mb-3">
                            <label for="telephone" class="form-label">Phone</label>
                            <input type="tel" name="phone" class="form-control" id="telephone" value="ZAe23" placeholder="Enter Phone Number" required>
                        </div>
                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <input type="file" name="status" class="form-control" id="status" placeholder="Enter Company Status" required>
                        </div>
                        <div class="mb-3">
                            <label for="nif_path" class="form-label">NIF Path</label>
                            <input type="file" name="nif_path" class="form-control" id="nif_path" placeholder="Enter NIF Path">
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea name="description" class="form-control" id="description" rows="3"></textarea>
                        </div>
                        <input type="submit"  class="col-9 btn btn-primary  p-3">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="<?php echo site_url("assets/js/jquery.min.js") ?>">
    </script>
    <script src="<?php echo site_url("assets/js/parsley.min.js") ?>">
    </script>
    <script type="text/javascript">
        $(function () {
            $('#my-form').parsley().on('field:validated', function() {
                var ok = $('.parsley-error').length === 0;
                $('.bs-callout-info').toggleClass('hidden', !ok);
                $('.bs-callout-warning').toggleClass('hidden', ok);
            })
                .on('form:submit', function() {

                });
        });
    </script>
    <style>
        ul{
            list-style: none;
        }
        li{
            color: red;
        }
    </style>
</body>
</html>