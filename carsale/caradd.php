    <!DOCTYPE html>
    <html>
    <!--Load Languages-->
    <?php include("includefiles/loadlanguages.php");?>
    <head>
            <title><?=$lang["titleaddcar"];?></title>
    <!--Load bootstrap and other stylining links-->
    <?php include("includefiles/loadcssjs.php");?>
    </head>
    <body>
        <div class="container-fluid bg bg-transparent mt-4" id="divbg">
            <div class="container font-weight-bold">
                <!--Navigation bar ismisi-->
                    <?php include("includefiles/navigationbar.php"); ?>
                    <!--End of Navigation bar-->
                    
                <div class="container">
                    <div class="row text-white d-flex justify-content-center mt-4">
                        <div class="col-md-8 mt-4 ">
                            <h3 class="text-center py-2 font-weight-bold"><?=$lang["h3addacar"];?></h3>
                            <form>
                                <label><?=$lang["lbltitle"];?></label>
                                <br />
                                <input type="text" name="title" placeholder="<?=$lang["placeholdentertitle"];?>" class="form-control" />
                                <br />
                                <label><?=$lang["lbldescribcar"];?></label>
                                <br />
                                <textarea class="form-control" cols="10" rows="2" placeholder="<?=$lang["placeholtextarea"];?>"></textarea>
                                <br />
                                <div class="row text-center ">
                                    <div class="col-md-4">
                                        <label><?=$lang["lblbrand"];?></label>
                                        <br />
                                        <select class="form-control" name="brand">
                                            <option selected="selected"><?=$lang["selectoptselected"];?></option>
                                            <option value="toyota"><?=$lang["selectopttoyota"];?></option>
                                            <option value="mercedezbenz"><?=$lang["selectoptmercedezbenz"];?></option>
                                            <option value="bmw"><?=$lang["selectoptbmw"];?></option>
                                            <option value="honda"><?=$lang["selectopthonda"];?></option>
                                            <option value="ford"><?=$lang["selectoptford"];?></option>
                                            <option value="hyundai"><?=$lang["selectopthyundai"];?></option>
                                        </select>
                                        <br />
                                    </div>
                                    <div class="col-md-4">
                                        <label><?=$lang["lblmodel"];?></label>
                                        <br />
                                        <select class="form-control" name="model">
                                            <option selected="selected"><?=$lang["selectoptmodselected"];?></option>
                                            <option value="hatchback"><?=$lang["selectopthatchback"];?></option>
                                            <option value="sedan"><?=$lang["selectoptsedan"];?></option>
                                            <option value="mpv"><?=$lang["selectoptmpv"];?></option>
                                            <option value="suv"><?=$lang["selectoptsuv"];?></option>
                                            <option value="crossover"><?=$lang["selectoptcrossover"];?></option>
                                            <option value="coupe"><?=$lang["selectoptcoupe"];?></option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label><?=$lang["lblfueltype"];?></label>
                                        <select class="form-control" name="fueltype">
                                            <option selected="selected"><?=$lang["selectoptselectedfule"];?></option>
                                            <option value="petrol"><?=$lang["selectoptpetrol"];?></option>
                                            <option value="Diesel"><?=$lang["selectoptdiesel"];?></option>
                                            <option value="hydrogen"><?=$lang["selectopthydrogen"];?></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row text-center">
                                    <div class="col-md-6">
                                        <label><?=$lang["lblprice"];?></label>
                                        <br />
                                        <input type="number" name="price" placeholder="<?=$lang["placeholdprice"];?>" class="form-control" />
                                        <br />
                                    </div>
                                    <div class="col-md-6">
                                        <label><?=$lang["lblmileage"];?></label>
                                        <br />
                                        <input type="text" name="mileage" placeholder="<?=$lang["placeholdmileage"];?>" class="form-control" />
                                        <br />
                                    </div>
                                </div>
                                <input type="button" value="<?=$lang["btnSubmit"];?>" class="btn btn-success mt-2 mb-2  btn-lg" name="submit" />
                                <input type="button" value="<?=$lang["btnReset"];?>" class="btn btn-warning float-right mt-2 mb-2  btn-lg" name="reset" />
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Load footer-->
        <?php include("includefiles/footer.php");?>
    </body>
</html>