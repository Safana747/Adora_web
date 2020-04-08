<!doctype html>
<html lang="en">
<head>
    <?php include('head.php'); ?>

    <title>Adora Group | Job Vacancies</title>
</head>
<body>
<?php include('header.php'); ?>
<div class="wrapper" style="max-width: 1920px;margin: auto;">
<section class="inner_page">
    <div class="container text-center">
        <h1>Job Vacancies</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Job Vacancies</li>
            </ol>
        </nav>
    </div>
</section>
<section class="jobs">
    <div class="container">
        <div class="row">
            <div class="col-md-7 job_con">
                <h4>
                    It is a long established fact that
                    will be distracted by the readable content
                </h4>
                <p>
                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.
                    Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)
                    <br><br>making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)
                    making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.
                </p>
            </div>
            <div class="col-md-5 job_form">
                <div class="col-md-12">
                    <h4>LOOKING FOR OPPORTUNITIES</h4>
                    <form class="" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Mobile">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="5" placeholder="Applying For"></textarea>
                        </div>
                        <div class="form-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">Upload CV</label>
                            </div>
                        </div>
                        <div class="text-center">
                            <input type="submit" class="btn btn-orange" value="APPLY NOW">
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>
<section class="job_vacancy">
    <div class="container">
        <h4 class="text-center">JOB VACANCIES</h4>
        <div class="row">
            <div class="col-md-12">
                <div class="accordion" id="jobs_vacancy">
                    <div class="card">
                        <div class="card-header active" id="heading_job1" data-toggle="collapse" data-target="#job1" aria-expanded="true" aria-controls="job1">
                            <div>
                                <h4 class="mb-0">
                                    Finance <span class="badge badge-info">Fulltime</span>
                                </h4>
                                <p class="mb-0"><img src="assets/images/location.svg"> Malappuram</p>
                            </div>
                            <div>
                            <div class="job_postdate">
                                <img src="assets/images/calendar.svg"> February 19, 2019
                            </div>
                            <div class="right_arrows float-right">
                                <img src="assets/images/bottom.svg">
                            </div>
                            </div>
                        </div>

                        <div id="job1" class="collapse show" aria-labelledby="heading_job1" data-parent="#jobs_vacancy">
                            <div class="card-body">
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is
                                    simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                </p>
                                <ul class="list-unstyled">
                                    <li>PIP</li>
                                    <li>PMS</li>
                                    <li>Culture</li>
                                    <li>Talent Acquisition</li>
                                    <li>Talent Development</li>
                                    <li>Talent Admin</li>
                                    <li>Recruitment</li>
                                </ul>
                                <a href="" class="btn btn-orange mt-4">APPLY NOW</a>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="heading_job2" data-toggle="collapse" data-target="#job2" aria-expanded="true" aria-controls="job2">
                            <h4 class="mb-0">
                                Human Assets <span class="badge badge-info">Part Time</span>
                            </h4>
                            <p class="mb-0"><img src="assets/images/location.svg"> Malappuram</p>
                            <div class="job_postdate">
                                <img src="assets/images/calendar.svg"> February 19, 2019
                            </div>
                            <div class="right_arrows">
                                <img src="assets/images/bottom.svg">
                            </div>
                        </div>

                        <div id="job2" class="collapse" aria-labelledby="heading_job2" data-parent="#jobs_vacancy">
                            <div class="card-body">
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is
                                    simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                </p>
                                <ul class="list-unstyled">
                                    <li>PIP</li>
                                    <li>PMS</li>
                                    <li>Culture</li>
                                    <li>Talent Acquisition</li>
                                    <li>Talent Development</li>
                                    <li>Talent Admin</li>
                                    <li>Recruitment</li>
                                </ul>
                                <a href="" class="btn btn-orange mt-4">APPLY NOW</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
</div>
<?php include('footer.php'); ?>
<script>
    // $('#jobs_vacancy .card-header').click(function () {
    //     var $this = $(this);
    //     $(this).addClass('active');
    // })


    $(document).on('click', '#jobs_vacancy .card-header', function(e){
        var $this = $(this);
        if(!$this.hasClass('collapsed')) {
            $(this).addClass('active');
        } else {
            $(this).removeClass('active');
        }
    })
</script>
</body>
</html>