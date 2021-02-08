<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <link rel="stylesheet" href="Css/Styles.css">
  <title>Multiplication</title>
</head>
<body>

  
     <section class="container py-2 mb-4">

        <div class ="row">
            <div class="offset-lg-3 col-lg-6" style="height:400px;">
               
            <br><br><br><br>
              <div class="card bg-secondary text-light text-block " >
                <div class="card-header text-center bg-info">
                    <h3>+Addition+</h3>
                </div> 
                    <div class="card-body bg-dark" style="height:300px;">
                    <form class="" action="Addition.php" method="post">
                        <div class="form-group">
                            <label for="username"><span class="">X-Number</span></label>
                            <div class="input-group mb-3">                                                 
                              <input type="text" class="form-control" value="" id="username" placeholder="insert you number.."name="Username1">                    
                            </div>                   
                        </div>

                        <div class="form-group">
                            <label for="username"><span class="">Y-Number</span></label>
                            <div class="input-group mb-3">                            
                              <input type="text" class="form-control" value="" id="username" placeholder="insert you number.." name="Username2">                    
                            </div>                   
                        </div>
                        <br>
                        <input type="submit" name="Submit" class="btn btn-info btn-block" value="Sum">                     
                    </form>                   
                </div>
              </div>
            </div>
        </div>
        
     </section>
     <section class="container py-2 mb-4">
                    <div class ="row">
                        <div class="offset-lg-3 col-lg-6" style="height:50px;">
                        

                          <div class="card bg-secondary text-light text-block " >
                            <div class="card-header text-center bg-danger " >
                                <h3>Result</h3>
                            </div> 
                                <div class="card-body bg-dark text-center" style="height:80px;">                                         
                                <form class="" action="Addition.php" method="post">
                                <h1>
                                    <?php

                                            if (isset($_POST["Submit"])) {     
                                            $a = $_POST['Username1'];
                                            $b = $_POST['Username2'];

                                            echo $a*$b;
                                            }
                                    ?>
                                </h1>
                                      
                                      
                                </form>                     
                            </div>
                          </div>
                        </div>
                    </div>
                    
</section>

</body>
</html>