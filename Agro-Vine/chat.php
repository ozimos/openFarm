<!DOCTYPE html>
<html>
    <head>
        <title>Open Farm</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        
        <link href="img/favicon.png" type="favicon">
        
        <link href="css/style.css" rel="stylesheet" type="text/css">
    </head>
    
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
               <?php $date = date('D-M-Y');
                    echo date('D'.' '.'M'.' '.'Y');
                ?>
            </div>
            <div class="col-md-3">
             <div class="form-group has-feedback has-search">
    <span class="glyphicon glyphicon-search form-control-feedback"></span>
    <input type="text" class="form-control" placeholder="Search">
  </div>
            </div>
            <div class="col-md-3" id="view"> 
                <ul>
                    <li> View as</li>
                    <li class="active">LIST</li>
                    <li>CARD</li>
                </ul>
            </div>
            <div class="col-md-4" id="view1">
                   <ul>
                    <li>Imaginr</li>
                       <p>New</p>
                    <li>Imagine</li>
                       <p>Old</p>
                </ul>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-4">
                
            </div>
            
            <div class="col-md-8">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Chat</a>
                    </li>
                <li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Notifications</a>
                </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">...</div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">...</div>
                </div>
                
            </div>
        </div>
        
        
    </div>

    
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
</body>
    
</html>