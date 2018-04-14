<html>
<head>
    <?php
    include "links.php";
    ?>

   <title>SHB</title>
</head>
<body>
<form method="post">

<!-- ========================= NAVBAR ================================================-->
<a name="#top"></a>
<nav  class="navbar navbar-expand-lg fixed-top navbar-transparent" id="nav">
    <div class="container">
            <a class="navbar-brand" href="" id="login" name="login">Create new Account <i class="fa fa-user-md" aria-hidden="true" style="font-size:25px"></i></a>
              <ul >
                <!----><li >
                    <a  class="navbar-brand"  href="" rel="tooltip"  >
                        <i  class="fa fa-twitter " style="font-size:18px;" ></i>

                    </a>
                </li>
                <!----><li>
                    <a  class="navbar-brand"  href="" rel="tooltip" >
                        <i  class="fa fa-facebook-square " style="font-size:18px;"></i>

                    </a>
                </li>
                <!----><li >
                    <a  class="navbar-brand"  href="" rel="tooltip" >
                        <i  class="fa fa-instagram " style="font-size:18px;"></i>

                    </a>
                </li>
                <!----><li>
                    <a  class="navbar-brand"  href="" rel="tooltip" >
                        <i  class="fa fa-github " style="font-size:18px;"></i>
                                           </a>
                </li>
                <!----><li  >
                    <a  class="navbar-brand"  href=""  >
                        <i class="nc-icon nc-book-bookmark" style="font-size:18px;"></i>
                        Documentation</a>
                </li>

                <!---->
                <!---->
            </ul>

    </div>
</nav>
<!-- ======================================= Background of the FIRST page of the Index ================================ -->
<div id="firstPage" class="page-header section-dark" style="background-image: url('pics/background4.jpg')">
    <div class="centerDiv" align="center">
        <div class="loginDivBlack" align="center">
         <h4>Welcome</h4><br>
            <div _ngcontent-c12="" class="social-line text-center">
                <a _ngcontent-c12="" class="btn btn-neutral btn-facebook btn-just-icon" href="#pablo">
                    <i _ngcontent-c12="" class="fa fa-facebook-square"></i>
                </a>
                <a _ngcontent-c12="" class="btn btn-neutral btn-google btn-just-icon" href="#pablo">
                    <i _ngcontent-c12="" class="fa fa-google-plus"></i>
                </a>
                <a _ngcontent-c12="" class="btn btn-neutral btn-twitter btn-just-icon" href="#pablo">
                    <i _ngcontent-c12="" class="fa fa-twitter"></i>
                </a>
            </div>
            <h4 style="float: left;margin-left:33px">Username</h4><br>
            <input type="text" id="username" placeholder="UserName" class="form-control" style="width:80%">

            <h4 style="float: left;margin-left:33px;margin-top: 3px">Password</h4><br>
            <input type="password" id="password" placeholder="Password" class="form-control" style="width:80%"><br>
            <input type="submit" class="form-control" value="LOGIN" style="width:50%"><br>
            <h4 style="margin-top: 1px">Forget your Password?</h4>
            <img src="pics/heartPulse.gif" style=" height: 10%;width: 30%;margin-left: 30px">




        </div>
      </div>
    <h6  class=" category-absolute ml-auto mr-auto">SHB Team @University of Petra</h6>
</div>

</form>
</body>
</html>