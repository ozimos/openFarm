<!DOCTYPE html>
<html>

<head>
  <title>Open Farm</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous">
  <link href="css/style.css" rel="stylesheet" type="text/css">
  <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/solid.js" integrity="sha384-+Ga2s7YBbhOD6nie0DzrZpJes+b2K1xkpKxTFFcx59QmVPaSA8c7pycsNaFwUK6l" crossorigin="anonymous"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js" integrity="sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c" crossorigin="anonymous"></script>
</head>

<body>
  <div class="container" style="margin-bottom:15px;">
    <div class="row">
      <div class="col-md-3">
        <img src="img/OpenFarm.png" id="logo" alt="Open Farm Logo">
      </div>
      <div class="col-md-3"><span class="fa f"></span>11, Elekahia Road, Port Harcourt
        <br> Find agents near you
      </div>    
      <div class="col-md-3">
        info@openfarm.com.ng
        <br> +23407034696973
      </div>
      <div class="col-md-3">
        <button class="btn btn-light text-uppercase" style="background: #00b2ff; color: #fff;">Register/Login</button>
      </div>
    </div>
  </div>

  <nav class="navbar navbar-expand-lg" style="background: #00b2ff;">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-left: 55px;">
      <ul class="navbar-nav mr-auto text-uppercase">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"  style="color: #fff;">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"  style="color: #fff;">Funding</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"  style="color: #fff;">Training</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"  style="color: #fff;">News</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"  style="color: #fff;">Storage Facilities</a>
        </li>
      </ul>
        
       <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <span class="input-group-text" id="basic-addon2"><i class="fa fa-search"></i></span>
      </form>
    </div>
  </nav>
    
    <br><br>
  <div class="container">
    <div class="row">
      <div class="col-md-2">
        <?php $date = date('D-M-Y');
                    echo date('D'.' '.'M'.' '.'Y');
                ?>
      </div>
        
      <div class="col-md-10">
        <div class="container">
          <div id="subheader" class="row">
            <div class="col-md-5">
              
            </div>
            <div class="col-md-3" id="view">
              <ul>
                <li> View as:</li>
                <li class="active">
                  <a href="#">LIST</a>
                </li>
                <a href="#">CARD</a>
                <li></li>
              </ul>
            </div>
            <div class="col-md-4" id="view1">
                <ul>
                    <li><img src="AgroHackAssets/add-user.svg"></li>
                    <li><img src="AgroHackAssets/notifications.svg"></li>
                    <li><img src="AgroHackAssets/report.svg"></li>
                    <li><img src="AgroHackAssets/profile-pic.svg"></li>
                </ul>
                <ul>
                    <li>New</li>
                    <li>Notification</li>
                    <li>Report</li>
                    <li>Profile</li>
                </ul>

            </div>
          </div>
            <hr>
 
            
            <div class="container">
          <div class="row">
              <div class="col-md-3">
              
              </div>
              
            <div class="col-md-5">

              <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home"
                    aria-selected="true">Chat</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile"
                    aria-selected="false">Notifications
                    <span class="badge badge-light">4</span>
                  </a>
                </li>
              </ul>
              <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">...</div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">...</div>

              </div>

            </div>
            <div class="col-md-4">
              <div id="profileEditor" class="collapse">
                <h4 style="display: inline-block;">Edit My Profile </h4>
                <a class="btn ml-auto" type="button" data-toggle="collapse" href="#profileEditor"
                  aria-expanded="false" aria-controls="profileEditor">
                  X
              </a>
              </div>

              <form   >
                <div class="form-group">

                  <input type="text" class="form-control" id="firstName" aria-describedby="firstName" placeholder="First Name">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" id="middleName" aria-describedby="middleName" placeholder="Middle Name">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" id="lastName" aria-describedby="lastName" placeholder="Last Name">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" id="gender" aria-describedby="gender" placeholder="Gender">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Address/Location">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="State">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Phone">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Farm Produce">
                </div>

                <button type="submit" class="btn btn-primary">Save</button>
              </form>
            </div>
          </div>
        </div>
          </div>



      </div>

      <div class="row">
        <div class="col-md-4">

        </div>



      </div>
    </div>


  </div>



  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
</body>

</html>