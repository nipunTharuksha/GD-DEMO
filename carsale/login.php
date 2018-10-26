    <!DOCTYPE html>
<html>
        <head>
            <!--Load Languages-->
            <?php include("includefiles/loadlanguages.php");?>
            <title><?=$lang["title"];?></title>
            <!--Load bootstrap and other stylining links-->
            <?php include("includefiles/loadcssjs.php");?>
        </head>
    <body >           
        <div  class="container-fluid " id="divbglogin">
            <div class="container font-weight-bold">
                <!--Navigation bar-->
                <?php include("includefiles/navigationbar.php"); ?>
                <!--End of Navigation bar-->
                <div class="raw">
                    <div class="col-md-5 mt-5">
                        <form>
                            <label class=" text-uppercase mt-5 text text-white "><h5><?=$lang["labelUserName"];?></h5></label>
                            <input type="text" name="un" class="form-control  " placeholder="<?=$lang["placeholderUserName"];?>"/>
                            <label class="text  text-uppercase mt-4  text-white "><h5><?=$lang["labelPassWord"];?></h5></label>
                            <input type="password" name="pw" class="form-control " placeholder="<?=$lang["placeholderPassWord"];?>"/>
                            <br/>   
                            <input type="checkbox" class="checkbox" name="chbocremme" id="idchboxremme"><label class="text-white ml-3 "  for="idchboxremme"><?=$lang["checkboxRememberMe"];?></label>
                            <br/>
                            <input type="submit" class="btn btn-success btn-lg mt-5  mb-5" value="<?=$lang["btnSubmit"];?>"/>
                            <input type="reset" class="btn btn-warning  btn-lg mt-5 mb-5 btn float-right" value="<?=$lang["btnReset"];?>"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--Load footer-->
        <?php include("includefiles/footer.php");?>
    </body>
</html>