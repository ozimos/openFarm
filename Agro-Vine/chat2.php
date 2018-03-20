<!DOCTYPE html>
<html>

<head>
  <title>Open Farm</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous">
  <link href="css/style.css" rel="stylesheet" type="text/css">
  <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/solid.js" integrity="sha384-+Ga2s7YBbhOD6nie0DzrZpJes+b2K1xkpKxTFFcx59QmVPaSA8c7pycsNaFwUK6l"
    crossorigin="anonymous"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js" integrity="sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c"
    crossorigin="anonymous"></script>

</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <img src="img/OpenFarm.png" id="logo" alt="Open Farm Logo">
      </div>
      <div class="col-md-3">
        11, Elekahia Road, Port Harcourt
        <br> Find agents near you
      </div>
      <div class="col-md-3">
        info@openfarm.com.ng
        <br> +23407034696973
      </div>
      <div class="col-md-3">
        <button class="btn bg-primary text-uppercase">Logout</button>
      </div>
    </div>
  </div>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse bg-primary" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto text-uppercase">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Funding</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Training</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">News</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Storage Facilities</a>
        </li>
      </ul>
      <div class="input-group" id="search1">
        <input class="form-control" type="search" placeholder="Search for a produce/ farmer" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-outline-light" id="basic-addon2">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </div>
  </nav>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3">
        <div class="weather-wrapper">
          <img width="80px" src="" class="weather-icon" alt="Weather Icon" />
          <span class="weather-temperature"></span>
          <button class="btn-outline-white" id="conversion" type="button"> C </button> <br />
          <button onclick="getLocation();">Reload weather</button>
          <p>
            <strong>Description</strong>
            <br /> the weather for today is
            <span class="weather-description"></span>. See recommended best farm practices for different crops today.
            <a href="">Read More</a>
          </p>


          <div class="container">
            <div class="row">
              <strong>Temperature&degC</strong>
            </div>
            <div class="row">
              <div class="col">HIGH
                <span class="weather-max-temperature"></span>
              </div>
              <div class="col">
                LOW
                <span class="weather-min-temperature"></span>

              </div>
            </div>
          </div>


          <p>
            <strong>Humidity</strong>
            <br /> Rising
            <span class="weather-humidity"></span>
          </p>

          <div class="container">
            <div class="row"></div>
            <div class="row">
              <strong>Pressure</strong>
            </div>
            <div class="row">

              <div class="col">
                HIGH
                <span class="weather-pressure2"></span>
              </div>

              <div class="col">CURRENT
                <span class="weather-pressure"></span>
              </div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <strong>Rainfall</strong>

            </div>
            <div class="row">

              <div class="col">CUMUL
                <span class="weather-rain2">0</span>
              </div>

              <div class="col">CURRENT
                <span class="weather-rain">0</span>
              </div>
            </div>
          </div>

          <div class="container">
            <div class="row">
              <strong>Wind speed</strong>

            </div>
            <div class="row">

              <div class="col">AVG
                <span class="weather-wind"></span>
              </div>

              <div class="col">GUST
                <span class="weather-wind"></span>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <span class="weather-wind"></span> mph
              </div>
              <div class="col">
                <span class="wind-direction"></span>&deg
              </div>
              <div class="col">
                <span class="wind-direction2"></span>

              </div>
            </div>
          </div>

        </div>

      </div>
      <div class="col-md-9">
        <div class="container">
          <div id="subheader" class="row">
            <div class="col-md-5">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for a farmer or farm produce">
                <div class="input-group-append">
                  <button class="btn btn-outline-secondary" id="basic-addon2">
                    <i class="fas fa-search"></i>
                  </button>
                </div>
              </div>
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
                <li>New</li>
                <li>Reports</li>
                <li>Chat</li>
                <li>My Profile</li>
              </ul>
            </div>
          </div>
          <div class="row">
            <div id="center_section" class="col-md-7">

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

            <div id="left_aside" class="col-md-5">

                <div id="cardId">
                <div class="imgbox">
                <img width="50%" class="img-fluid mx-auto" src="img/mug.jpg" alt="thumbnail">
              </div>
                </div>
                <div id="demo-chat">

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




  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="js/openWeather.js"></script>
  <script src="js/openFarm2.js"></script>
  <script>
(function(t,a,l,k,j,s){
s=a.createElement('script');s.async=1;s.src="https://cdn.talkjs.com/talk.js";a.getElementsByTagName('head')[0].appendChild(s);k=t.Promise;
t.Talk={ready:{then:function(f){if(k)return new k(function(r,e){l.push([f,r,e])});l.push([f])},catch:function(){return k&&new k()},c:l}};
})(window,document,[]);
</script>
<div id="talkjs-container" style="width: calc(100% - 60px); margin: 30px; min-height: 150px"></div>
<script>
Talk.ready.then(function() {
    var me = new Talk.User({
        id: "12345",
        name: "George Looney",
        email: "george@looney.net",
        photoUrl: "https://talkjs.com/docs/img/george.jpg",
        welcomeMessage: "Hey there! How are you? :-)"
    });
    window.talkSession = new Talk.Session({
        appId: "twwJvmYz",
        me: me
    });
    var other = new Talk.User({
        id: "54321",
        name: "Ronald Raygun",
        email: "ronald@teflon.com",
        photoUrl: "https://talkjs.com/docs/img/ronald.jpg",
        welcomeMessage: "Hey, how can I help?"
    });

    var conversation = talkSession.getOrStartConversation(other);
    var inbox = talkSession.createInbox({selected: conversation});
    inbox.mount(document.getElementById("demo-chat"));
});
</script>
</body>

</html>