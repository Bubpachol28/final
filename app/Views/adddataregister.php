<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    <style>
        ul {
          list-style-type: none;
          margin: 0;
          padding: 0;
          overflow: hidden;
          border: 1px solid #e7e7e7;
          background-color: #31272733;
        }
        body{padding: 0px 0px;}
        
        li {
          float: left;
        }
        
        li a {
          display: block;
          color: rgb(255, 255, 255);
          text-align: center;
          padding: 14px 16px;
          text-decoration: none;

        }
        
        li a:hover:not(.active) {
          background-color: #ddd;
        }
        
        li a.active {
          color: rgb(15, 13, 13);
          background-color: #04AA6D;
        }

        body {
          margin: 0;
          padding: 2rem 5rem;
          text-align: center;
          background-image: url(https://images.pexels.com/photos/7935811/pexels-photo-7935811.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940);
         width: 100%;
         height: 100%;
         color: rgb(0, 0, 0);
          font-family: "helvetica neue", sans-serif;
          font-weight: 100;
          font-size: 16px;

    }
    footer {
              background-color:#31272733;
              padding: 10px;
              text-align: center;
              color: rgb(0, 0, 0);
            }
        </style>




    
</head>
<body>
<form class="d-flex">
        <input class="form-control me-3" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-primary me-3" type="submit">Search</button>
        <?php $session = session(); ?>
                <h5 class="user me-3"><?php echo $session->get('name')?></h5> 
                <a href="/welcome_message.php" class="btn btn-danger">Logout</a>
      </form>
<center><h2>Register To Join Funrun</h2></center>
            <form action="/AddDataRegister/regis" method="post">
              <div class="container mt-4">
                <div class="row justify-content-md-center">
                  <div class="col-md-6">
                    <div class="mb-3">
                        <label for="inputid_card" class="form-label">ID_Card Number :</label>
                        <input type="text" name="id_card" class="form-control" id="inputforcard" value="<?php echo $session->get('id_card');  ?>">
                    </div>
                    <div class="mb-3">
                        <label for="inputname" class="form-label">Name :</label>
                        <input type="text" name="name" class="form-control" id="inputforcard" value="<?php echo $session->get('name');  ?>">
                    </div>
                    <div class="mb-3">
                        <label for="inputid_card" class="form-label">ID_Funrun :</label>
                        <input type="text" name="ID" class="form-control" id="inputforID" placeholder="Example : RUN0000001" value="<?= set_value('ID'); ?>">
                    </div>
                    <label>Category_run :</label> <br>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" id="category" name="category" value="1">
                      <label class="form-check-label" for="inlineCheckbox1">1</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" id="category" name="category" value="2">
                      <label class="form-check-label" for="inlineCheckbox2">2</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" id="category" name="category" value="3">
                      <label class="form-check-label" for="inlineCheckbox3">3</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" id="category" name="category" value="5">
                      <label class="form-check-label" for="inlineCheckbox3">5</label>
                    </div>
                    <br><br>
                    <button type="submit" class="btn btn-success">Apply</button>
                    <a href="/homeuser" class="btn btn-danger me-1">Cancel</a>
                  </div>
                </div>
              </div>
            </form>
    
</body>
</html>
