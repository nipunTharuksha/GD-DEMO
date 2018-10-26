<!DOCTYPE html>
<html>
    <!--Load Languages-->
    <?php include("includefiles/loadlanguages.php");?>
    <head>
        <title><?=$lang["titlenewindex"];?></title>
        <title>Add a Car</title>
        <!--Load bootstrap and other stylining links-->
        <?php include("includefiles/loadcssjs.php");?>
    </head>
    <body id="divbg">
        <div class="container-fluid font-weight-bold">
            <div class="container ">
                <div class="col-md-12 ">
                    <!--Navigation bar-->
                    <?php include("includefiles/navigationbar.php"); ?>
                    <!--End of Navigation bar-->
                </div>
            </div>
        </div>
        <div class="container-fluid  ">
            <div class="container">              
                <div class="row">           
                    <div class="col-md-4">
                        <h5 class="text-center text-primary mt-2"><?=$lang["h5sortresultsby"];?></h5>
                        <select class="form-control mt-4">
                            <option value="datenewestontop"><?=$lang["selectoptdatenewontop"];?></option>
                            <option value="dateoldestontop"><?=$lang["selectoptdateoldestontop"];?></option>
                            <option value="pricelowtohigh"><?=$lang["selectoptpricehigh"];?></option>
                            <option value="pricehightolow"><?=$lang["selectoptpricelow"];?></option>
                        </select>
                        <div class="container">
                            <div class="row bg bg-dark">
                                <div class="col-md-2 mt-4 "><input type="checkbox" /></div>
                                <div class="col-md-10 mt-2"><img src="images/buynow.png" /></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h5 class="text-center text-primary mt-2"><?=$lang["h5noofcarstobe"];?></h5>
                        <select class="form-control mt-4">
                            <option value="1carperpage">1</option>
                            <option value="5carperpage">5</option>
                            <option value="10carperpage">10</option>
                            <option value="15carperpage">15</option>
                            <option value="20carperpage">20</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <h5 class="text-center text-primary mt-2"> <?=$lang["h5pricerange"];?></h5>
                        <select class="form-control mt-4">
                            <option value="under3lak"> <?=$lang["pricers"];?> 300,000 <?=$lang["priceunder"];?></option>
                            <option value="within3lakto10lak"><?=$lang["pricers"];?>300,000-1,000,000</option>
                            <option value="within10lakto15lak"><?=$lang["pricers"];?>1,000,000-15,000,000</option>
                            <option value="15carperpage"><?=$lang["pricers"];?>15,000,000-20,000,000</option>
                            <option value="Over20lal"><?=$lang["pricers"];?> 20,000,000 <?=$lang["priceover"];?></option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 bg bg-transparent h-25">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8 bg bg-transparent h-75">
                                    <input type="text" name="search" class="form-control mt-2 " id="searchbar"
                                           placeholder="Search here" />
                                </div>
                                <div class="col-md-4 bg bg-transparent h-75">
                                    <div class="col-md-4"><button type="submit" class="fa fa-search fa-2x icon btn btn-lg h-50 mt-2 ml-4"></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 bg bg-transparent h-75 ">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-1  carousel slide">
                                    <a class="carousel-control-prev w-100 h-100" href="#demo" data-slide="prev">
                                        <span class="carousel-control-prev-icon"></span>
                                    </a>
                                </div>
                                <div class="col-md-10 ">
                                    <img src="images/chr.jpg" class="img-fluid " alt="Responsive image" />
                                </div>
                                <div class="col-md-1  carousel slide " > <a class="carousel-control-next w-100 h-100" href="#demo" data-slide="next" >
                                    <span class="carousel-control-next-icon" ></span>
                                    </a></div> 
                            </div>
                            <div class="row d-flex justify-content-center ml-2 mt-3 mb-3">
                                <div class="col-md-2"><input type="submit" class="btn btn-primary" value="<?=$lang["btnpage"];?> 1"></div>
                                <div class="col-md-2"><input type="submit" class="btn btn-primary pl-2" value="<?=$lang["btnpage"];?> 2"></div>
                                <div class="col-md-2"><input type="submit" class="btn btn-primary pl-2" value="<?=$lang["btnpage"];?> 3"></div>
                                <div class="col-md-2"><input type="submit" class="btn btn-primary pl-2" value="<?=$lang["btnpage"];?> 4"></div>
                                <div class="col-md-2"><input type="submit" class="btn btn-primary pl-2" value="<?=$lang["btnpage"];?> 5"></div>
                                <div class="col-md-2"><input type="submit" class="btn btn-primary pl-2" value="<?=$lang["btnpage"];?> 6"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Load footer-->
        <?php include("includefiles/footer.php");?>
    </body>
</html>