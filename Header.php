

<div class="main-nav navbar-inverse navbar-fixed-top">
    <div class="container-fluid">


        <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
             
        </div>
     
        <div class="collapse navbar-collapse row " id="bs-example-navbar-collapse-1">

            <div class="col-md-4">
                <a class="navbar-brand" style="padding-left: 3%;" href="index.php"><img class="img-responsive" style="padding-top:1%; margin-bottom: 1%;" src="img/logo.png" width="28%" alt="logo"></a>
            </div><br>

            <div class="col-md-4">

            <form>
                <input type="text" id="searchbar" size="30" name="search" placeholder="Search a product.." onkeyup="showResult(this.value)">
                <div id="livesearch"></div>
            </form>
            
            
                    





            </div>






            <div class="btns-header col-md-4">
                <div class="col-md-3 col-md-offset-2 col-xs-4 bth"><button type="button" class="btn btn-header" data-toggle="modal" data-target="#LoginModal">Login</button></div>
                <div class="col-md-3  col-xs-4 bth"><button type="button" class="btn btn-header" data-toggle="modal" data-target="#SignUpModal">Sign Up</button></div>   
                <div class="col-md-3 col-xs-4 bth">
                    <button type="button" class="btn btn-header" id="shoppingcart" data-toggle="modal" data-target="#CartModal">Shopping Cart <span class="badge">
                    <?php echo $_SESSION['itemscount']; ?></span></button>
                </div>   
            </div>
        </div>


    </div>
</div>

