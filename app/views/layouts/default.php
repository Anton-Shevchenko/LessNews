<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>DEFAULT | <?=$title?></title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <link href=main1.css" rel="stylesheet">
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="/">LessNews</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar1" aria-controls="navbar1" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbar1">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/category/">Categories</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="/main/tag/">Tags</a>
        </li>
          <li class="nav-item active dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
                <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdowne</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                </div>
            </div>
          </li>
          <li id="butFiler" class="nav-item active" onclick="filter();" ><a class="nav-link" >Filter</a></li>
          <li id="filter" style="display: none;">
              <div>
                  <form method="POST" action="/Main/search/">
                      <select name="sel_1">

                          <option value="any">Any</option>

                          <?php foreach ($categories as $category): ?>
                              <option><?php echo $category['name']; ?></option>
                          <?php endforeach; ?>

                      </select>

                      <select name="sel_2">
                          <option value="any">Any</option>

                          <?php foreach ($categories as $category): ?>
                              <option><?php echo $category['name']; ?></option>
                          <?php endforeach; ?>  

                      </select>

                      <input type="date" name="calendar_1">
                      <input type="date" name="calendar_2"> 
                      <input type="submit" name="submit_filter" value="Go">
                  </form>
              </div>
          </li>
          <?php if(isset($_SESSION['user_id'])): ?>
            <li class="nav-item active"><a class="nav-link" href="/">Профиль</a></li>
            <li class="nav-item active"><a class="nav-link" href="/news/create/">Написать Новость</a></li>
          <?php endif;?>
          <?php if(isset($_SESSION['reg'])): ?>
            <div id="registration">
              <h4><?= $_SESSION['reg'] ?> -> <a href="#">перейти в кабинет</a></h4>
              <?php unset($_SESSION['reg']); ?>
            </div>
        <?php endif; ?> 
      </ul>
      <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" id="search">
          <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
</nav>     

<!--               <div id="inp-search" class="col-md-3 col-lg-3 col-sm-3 col-lg-3">
                    <div class="form-group">
                        <div class="input-group mb-3">
                          <input type="text" id="search" class="form-control" placeholder="введите тег..." aria-label="Recipient's username" aria-describedby="basic-addon2">
                          <div class="input-group-append">
                            <form id="search-form" action="/main/viws?tag=" method="POST">
                                <button class="btn btn-outline-secondary" id="but-s"  type="submit">Button</button>
                                <button class="btn btn-outline-secondary" id="but-r" onclick="fuu()" type="button">reset</button>
                            </form>
                          </div>
                        </div>
                        <select multiple class="form-control" id="list-search-form">
                        </select>
                      
                    </div>

                    
              </div> -->

        
        <marquee>
            <h3>USD: 27.117; EUR: 30.886; В Киеве 27°C, день будет солнечным. </h3>
        </marquee>
        

        
        <div class="container-fluid">
            <div class="row">
                <div class="col-2">
                    
                </div>
                <div class="col-8" id="cont">
                  
                    <?=$content?>
                </div>
                <div class="col-2">
              
                   <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img class="d-block w-100" src="../../../public/images/3.jpg" alt="First slide">
                          <div class="carousel-caption d-none d-md-block">
                            <h3>Битконы</h3>
                            <p>ваучеры</p>
                          </div>
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" src="../../../public/images/2.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" src="../../../public/images/3.jpg" alt="Third slide">
                        </div>
                      </div>
                    </div>
    
                </div>
            
            </div>
        </div>

         <div class="modal fade">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">BigNews.com</h4>
              </div>
              <div class="modal-body" align="center">
                <p>Подпишитесь на новости портала.</p>
                <input type="email" name="nameFollow" placeholder="Ваш email...">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Send</button>
              </div>
            </div>
          </div>
        </div> 

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
        <script src="../../../public/js/search.js"></script>
        <script src="../../../public/js/comment.js"></script>
        <script src="../../../public/js/menu.js"></script>
        <script src="../../../public/js/news.js"></script>
        <script type="text/javascript">
            // setTimeout(function mod() {

                // $('.modal').modal("show");
            // }, 5000);

        </script>

        <style type="text/css">* {
  margin: 0px;
  padding: 0px;
}

body{
    background-image: url(../../../public/image/news/back.jpg);
}

a, h1, h4, h3, p {
  color: white;
}

a:hover {
  color: #79e3f2;
  text-decoration: none;
}

#cont {
  background-color: rgba(0, 0, 0, 0.7);
}

.vi {
  float: left;
  margin-bottom: 5%;
}

#but-s {
  background-color: green;
}

#but-r {
  background-color: red;
}

#main-but {
  float: left;
  background-color: #7aedf9;
  padding: 9% 0% 15% 30%;
  /*margin: 0px !important;*/
  width: 100%;
}

#head {
  height: 70px;
  background-color: #7b7b7b;
}

#inp-search {
  float: right;
  width: 25%;
}

#list-search-form {
  display: none;
  width:78%;
  height: 115px;
  margin-top: -5% !important;
  overflow:  hidden;
}
#cont {
  z-index: 1;
}
#search-sub-menu {
  /*display: none;*/
  position: relative;
  z-index: 2 !important;
  background-color: #a9a98a;
  height: 50px;
}

.show-block {
  display: block !important;

}

.block {
  display: none;
}


          /*  START STYLE FOR COMMENTS   */

.comments {
  margin: 0% 0% 2% 0%;
  border-bottom: 3px solid white;
  float: left;

}

.user-image img {
  width: 70%;
}

.user-image {
  margin: 2% 0% 1% 0%;
  float: left;
}

.comment-cont {
  margin: 2% 0% 1% 0%;
  float: left; 
}

.rate-comment {
  margin: 5% 0% 0% 18%;
  width: 30%;
}

.pluse, .minus {
  padding: 0% 0% 0% 35%;
  font-size: 130%;
  cursor: pointer;
}

.count {
  font-size: 130%;
  text-align: center;
}


.date-commet {
  float: left;
  margin-top: 2%;
}

#comment-form {
  width: 100%;
}

#comment-form input {
  color: #000;
  background-color: #5b3f5f;
  border-radius: 20px;
  padding: 1% 1% 1% 1%;
  cursor: pointer;
}

#error {
  color: red;
}

          /* END STYLE FOR COMMENTS */
          /* START STYLE FOR AUTH */

          /* start style for form */
.bg {
  margin: 4.5% 0% 0% 0%;
}
.bg, .reg{
  background-color: rgba(33, 226, 208, 0.41); 
  width: 30%;
  position: fixed;
  border-radius: 2%;
}
.bg input, .reg input {
  float: right;
  font-size: 120%;
  width: 37%;
  padding: 1% 0% 1% 0%;
  margin: 5% 9% 2% 0%
}
.bg label, .reg label {
  float: left;
  font-size: 120%;
  margin: 5% 0% 3% 4%;
  line-height: 150%;
}

.bg button{
  border-radius: 20%;
}

.bg button, .reg button {
  float: left;
  margin: 5% 0% 10% 6%;
  background-color: rgba(33, 226, 208, 0.41);
  font-size: 150%;
  padding: 2% 4% 2% 4%;
}

.bg button:hover, .reg button:hover {
  background-color: inherit;
}

.reg {
  margin: 4.5% 0% 0% 34%;
}
.reg button {
  border-radius: 12%;
}
          /* end style for form */

#auth {
  /*margin: 9% 0% 0% 10%; */
}
#auth, #reg-title {
  position: fixed;
  background-color: rgba(33, 226, 208, 0.41);
  width: 30%;
  text-align: center;
  border-radius: 5%;
} 

#reg-title {
  margin: 0% 0% 0% 34%;
}
#ser {
  float: left;
}
          /* END STYLE FOR AUTH */

          /* START STYLE FOR MENU */
          
}

          /* END STYLE FOR MENU */

#for-analitics {
  border: 5px solid #fff;
  padding: 1% 0% 1% 2%;
}

#for-analitics p {
  font-size: 180%;
  margin: 0% 0% 0% 45%;
}

#for-analitics a {
  color: red;
  padding-left: 36%;
  text-decoration: none;
}</style>

    </body>
</html>
