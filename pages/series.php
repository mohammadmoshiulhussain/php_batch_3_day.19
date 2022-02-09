<?php include 'header.php'?>

<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card bg-success text-white">
                    <div class="card-header text-center font-weight-bold">Sum Of Series</div>
                    <div class="card-body">
                        <form action="action.php" method="POST">
                            <div class="form-group row">
                                <label class="col-md-3 font-weight-bold">Starting Number</label>
                                <div class="col-md-9">
                                    <input type="number" required value="<?php echo isset($result['result']) ? $result['result'] : ''; ?>" class="form-control" name="starting_number"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 font-weight-bold">Ending Number</label>
                                <div class="col-md-9">
                                    <input type="number" required value="<?php echo isset($result['result']) ? $result['result'] : ''; ?>" class="form-control" name="ending_number"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 font-weight-bold">Result</label>
                                <div class="col-md-9">
                                    <textarea class="form-control"><?php echo isset($result['result']) ? $result['result'] : ''; ?></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="Submit" class="btn btn-outline-light font-weight-bold" name="series_btn" value="Submit"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include 'footer.php'?>