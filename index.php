<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>Bike Insurance</title>
</head>
<body>
    <section>
        <div class="container text-center mt-5">
            <h2 class="py-5">Bike Insurance</h2>
            <a href="javascript:void(0)" data-toggle="modal" data-target="#processModal" class="btn btn-primary mt-4">Continue</a>
        </div>
    </section>
</body>
    <div class="modal" id="processModal" tabindex="-1" role="dialog" data-backdrop="static">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Bike Insurance</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="loader display-none">Loading</div>
                    <form class="" method="post">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="d-block mb-2">Bike Number</label>
                                    <input type="text" class="form-control form-control-lg" placeholder="Enter your Bike Number">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="d-block mb-2">Has your previous policy expired?</label>
                                    <select name="expiration" id="expire_select" class="form-control form-control-lg">
                                        <option value="null" selected>Choose</option>
                                        <option value="1">Expired</option>
                                        <option value="0">Not Expired</option>
                                    </select>
                                    <span class="small text-info font-italic">Don't worry if your policy has expired. You can still renew online instantly.</span>
                                </div>
                            </div>    
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary px-4">Proceed</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/app.js"></script>
</html>