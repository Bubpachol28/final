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
          background-image: url(http://www.tiewyeepoon.com/wp-content/uploads/2019/08/fuji_marathon-02.jpg);
         width: 100%;
         height: 100%;
         color: rgb(0, 0, 0);
          font-family: "helvetica neue", sans-serif;
          font-weight: 100;
          font-size: 16px;

    }
          
    body1 {
  font-family: tahoma;
  height: 100vh;
  background-image: url(https://picsum.photos/g/3000/2000);
  background-size: cover;
  background-position: center;
  display: flex;
  align-items: center;
}

.our-team {
  padding: 30px 0 40px;
  margin-bottom: 30px;
  background-color: #f7f5ec;
  text-align: center;
  overflow: hidden;
  position: relative;
}

.our-team .picture {
  display: inline-block;
  height: 130px;
  width: 130px;
  margin-bottom: 50px;
  z-index: 1;
  position: relative;
}

.our-team .picture::before {
  content: "";
  width: 100%;
  height: 0;
  border-radius: 50%;
  background-color: #1369ce;
  position: absolute;
  bottom: 135%;
  right: 0;
  left: 0;
  opacity: 0.9;
  transform: scale(3);
  transition: all 0.3s linear 0s;
}

.our-team:hover .picture::before {
  height: 100%;
}

.our-team .picture::after {
  content: "";
  width: 100%;
  height: 100%;
  border-radius: 50%;
  background-color: #1369ce;
  position: absolute;
  top: 0;
  left: 0;
  z-index: -1;
}

.our-team .picture img {
  width: 100%;
  height: auto;
  border-radius: 50%;
  transform: scale(1);
  transition: all 0.9s ease 0s;
}

.our-team:hover .picture img {
  box-shadow: 0 0 0 14px #f7f5ec;
  transform: scale(0.7);
}

.our-team .title {
  display: block;
  font-size: 15px;
  color: #4e5052;
  text-transform: capitalize;
}

.our-team .social {
  width: 100%;
  padding: 0;
  margin: 0;
  background-color: #1369ce;
  position: absolute;
  bottom: -100px;
  left: 0;
  transition: all 0.5s ease 0s;
}

.our-team:hover .social {
  bottom: 0;
}

.our-team .social li {
  display: inline-block;
}

.our-team .social li a {
  display: block;
  padding: 10px;
  font-size: 17px;
  color: white;
  transition: all 0.3s ease 0s;
  text-decoration: none;
}

.our-team .social li a:hover {
  color: #1369ce;
  background-color: #f7f5ec;
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
      <nav>
            <ul>
           
              <li><a href="\login">ลงทะเบียนวิ่ง</a></li>
             <?php $session = session(); ?>
                    <h5 class="user me-3"><?php echo $session->get('name')?>
                    <a href="/welcome_message.php" class="btn btn-danger" style="margin-top:7px;margin-left:950px">Logout</a></h5>
                    
          </ul>
          </nav>
          <H1>WELLCOME TO FUN RUN</H1>
                        

          <div class="container">
  <div class="row">
    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
      <div class="our-team">
        <div class="picture">
          <img class="img-fluid" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRJpy92lU-EinWYEkFpszp2qBFOU9ujN2GklA&usqp=CAU">
        </div>
        <div class="team-content">
          <h4 class="name">รวมพลวิ่งเพื่อสุขภาพ</h4>
          <h4 class="title">สถานที่รวมพล:แขวง ทวีวัฒนา เขตทวีวัฒนา กรุงเทพมหานคร 10170</h4>
          <h4 class="title">จ-อา เวลา 16.30-18.30น.</h4>
        </div>
        <ul class="social">
          <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-facebook" aria-hidden="true"></a></li>
          <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-twitter" aria-hidden="true"></a></li>
          <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-google-plus" aria-hidden="true"></a></li>
          <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-linkedin" aria-hidden="true"></a></li>
        </ul>
      </div>
    </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
      <div class="our-team">
        <div class="picture">
          <img class="img-fluid" src="https://picsum.photos/130/130?image=839">
        </div>
        <div class="team-content">
          <h4 class="name">วิ่ง&ปั่นไปด้วยกัน</h4>
          <h4 class="title">สถานที่รวมพล:ที่มหาวิทยาลัยธรรมศาสตร์ ท่าพระจันทร์ </h4>
          <h4 class="title">จ-อา เวลา 04.30 น. – 08.00 น</h4>
        </div>
        <ul class="social">
          <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-facebook" aria-hidden="true"></a></li>
          <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-twitter" aria-hidden="true"></a></li>
          <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-google-plus" aria-hidden="true"></a></li>
          <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-linkedin" aria-hidden="true"></a></li>
        </ul>
      </div>
    </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
      <div class="our-team">
        <div class="picture">
          <img class="img-fluid" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRJpy92lU-EinWYEkFpszp2qBFOU9ujN2GklA&usqp=CAU">
        </div>
        <div class="team-content">
          <h4 class="name">วิ่งเพื่อการกุศล</h4>
          <h4 class="title">สถานที่รวมพล:219 ซอย สุขุมวิท 21 แขวง คลองเตยเหนือ เขตวัฒนา กรุงเทพมหานคร 10110</h4>
          <h4 class="title">จ-อา เวลา 09.30 น. – 17.30น</h4>
        </div>
        <ul class="social">
          <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-facebook" aria-hidden="true"></a></li>
          <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-twitter" aria-hidden="true"></a></li>
          <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-google-plus" aria-hidden="true"></a></li>
          <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-linkedin" aria-hidden="true"></a></li>
        </ul>
      </div>
    </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
      <div class="our-team">
        <div class="picture">
          <img class="img-fluid" src="https://picsum.photos/130/130?image=839">
        </div>
        <div class="team-content">
          <h5 class="name">ปั่น-เดิน-วิ่ง มินิฮาล์ฟมาราธอนเฉลิมพระเกียรติ </h5>
          <h4 class="title">สถานที่รวมพล:50 ตำบล บางยาง อำเภอกระทุ่มแบน สมุทรสาคร 74110</h4>
          <h4 class="title">จ-อา เวลา 08.30 น. – 15.30น</h4>
        </div>
        <ul class="social">
          <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-facebook" aria-hidden="true"></a></li>
          <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-twitter" aria-hidden="true"></a></li>
          <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-google-plus" aria-hidden="true"></a></li>
          <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-linkedin" aria-hidden="true"></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>



                
      <footer>
  <p>BY Bubpachol Suwanwisoot<br>
  <p>ID 624259018 62/45<br>
  <a href="624259018@webmail.npru.ac.th">624259018@webmail.npru.ac.th</a></p>
</footer>
          
      </body>
      </html>