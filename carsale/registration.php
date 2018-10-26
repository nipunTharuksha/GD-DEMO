<!DOCTYPE html>
<html>
    <!--Load Languages-->
    <?php include("includefiles/loadlanguages.php");?>
    <head>
        <title><?=$lang["titlereg"];?></title>
        <!--Load bootstrap and other stylining links-->
        <?php include("includefiles/loadcssjs.php");?>
    </head>
    <body>
        <div class="container-fluid" id="divbg" >
            <div class="container">
                <!--Navigation bar-->
                <?php include("includefiles/navigationbar.php"); ?>
                <!--End of Navigation bar-->
                <!--Registration form starts from here-->
                <div class="row text-white d-flex justify-content-center mt-5">
                    <div class="col-md-8 mt-4">
                        <h3 class="text-center py-3"><?=$lang["lbluserregform"];?></h3>
                        <form class="font-weight-bold">
                            <label><?=$lang["lblfullname"];?></label>
                            <br/>	
                            <input type = "text" name="fullname" placeholder="<?=$lang["placeholdfullname"];?>" class="form-control"/>
                            <br/>
                            <label><?=$lang["lblemail"];?></label>
                            <br/>
                            <input type = "text" name="email" placeholder="<?=$lang["placeholemail"];?>"  class="form-control"/>
                            <br>
                            <label><?=$lang["lbltelnum"];?></label>
                            <br/>
                            <input type = "tel" name="telphone" placeholder="<?=$lang["placeholdtelnum"];?>"  class="form-control"/>
                            <br/>
                            <div class="row">
                                <div class="col-md-6">
                                    <label><?=$lang["labelPassWord"];?></label>
                                    <br/>
                                    <input type = "text" name="pw" placeholder="<?=$lang["placeholderPassWord"];?>"  class="form-control"/>
                                    <br/>
                                </div>
                                <div class="col-md-6">
                                    <label><?=$lang["lblconfirmpw"];?></label>
                                    <br/>
                                    <input type = "text" name="confirmpw"  placeholder="<?=$lang["placeholfconfirmpw"];?>" class="form-control"/>
                                </div>
                            </div>
                            <input type="button" value="<?=$lang["btnSubmit"];?>" class="btn btn-success mt-4 mb-4 btn-lg"name="submit"/>
                            <input type="button" value="<?=$lang["btnReset"];?>" class="btn btn-warning float-right mt-4 mb-4 btn-lg"name="submit"/>
                        </form>
                    </div>
                </div>
                <!--Registration form ends from here-->
            </div>
        </div>
        <!--Load footer-->
        <?php include("includefiles/footer.php");?>
    </body>
</html>