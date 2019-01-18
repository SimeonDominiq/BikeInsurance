<!--
  created by: Opeyemi Adeyeye
  18/01/2019
-->
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
                
                <form method="post" id="insure_form">
                    <div class="modal-body">
                        <div class="loader display-none">Loading</div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="d-block mb-2">Bike Number</label>
                                    <input type="text" class="form-control form-control-lg" placeholder="Enter your Bike Number" name="bike_number">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="d-block mb-2">Has your previous policy expired?</label>
                                    <select name="expiration" id="expire_select" class="form-control form-control-lg">
                                        <option disabled selected>Choose</option>
                                        <option value="1">Expired</option>
                                        <option value="0">Not Expired</option>
                                    </select>
                                    <div class="mt-3 display-none" id="expire_display_options">
                                        <h6>When did it expire?</h6>
                                        <div class="mt-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="expire_options" id="expired_before" value="Expired before <?php echo date('M j, Y') ?>" checked>
                                                <label class="form-check-label" for="expired_before">
                                                    Expired Before <?php echo date('M j, Y') ?>
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="expire_options" id="expired_after" value="Expired after <?php echo date('M j, Y') ?>">
                                                <label class="form-check-label" for="expired_after">
                                                    Expired After <?php echo date('M j, Y') ?>
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="expire_options" id="not_sure_expire" value="Not Sure">
                                                <label class="form-check-label" for="not_sure_expire">
                                                    I'm not sure when it expired
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="small text-info font-italic">Don't worry if your policy has expired. You can still renew online instantly.</span>
                                </div>
                            </div>    
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="col-lg-12 d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary px-4">Proceed</button>
                        </div>
                    </div>
                </form>

                <div class="modal-body display-none" id="insure_list_result">
                    <div class="card">
                        <div class="card-body p-2">
                            <div class="row">
                                <div class="col-lg-7">
                                    <div>
                                        <h5 class="d-inline-block">Hero Honda</h5> kickstart | 100CC <a href="#">Not your Bike?</a>
                                    </div>
                                    <div>
                                        MKT1078KTY | <span id="expire_status">Policy Expired</span><a href="#" class="d-inline-block ml-3">EDIT</a>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div>
                                        <span>POLICY TYPE:</span> Comprehensive
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row my-4">
                        <div class="col-lg-7">
                            <h4 id="insure_avail_count">14 plans found</h4>
                            <span>All prices exclusive of GST</span>
                        </div>
                    </div>

                    <div id="insure_avail_list"></div>

                </div>
            </div>
        </div>
    </div>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/app.js"></script>
</html>