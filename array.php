<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
        <br>
        <h4>Php Functions And Array</h4>
           
        <?php 
           $users = [
                [
                    'name' => "Khurshid Alam",
                    'phone' => "018345845",
                    'email' => "khurshid@gmail.com",
                ],

                [
                    'name' => "Tanvir Khan",
                    'phone' => "019345845",
                    'email' => "tanvir@gmail.com",
                ],

                [
                    'name' => "Arif Khan",
                    'phone' => "016345845",
                    'email' => "arif@gmail.com",
                ],
                [
                    'name' => "Emon Khan",
                    'phone' => "015345845",
                    'email' => "emon@gmail.com",
                ],
                [
                    'name' => "Rafsan Shajid",
                    'phone' => "013345845",
                    'email' => "rafsan@gmail.com",
                ],
           ];

        ?>
        

         <h1>All users</h1>
         <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Phone</th>
                <th scope="col">Email</th>
                </tr>
            </thead>
            <tbody>
                 

                <?php

                  foreach($users as $key => $user){
                ?>
                    
                    <tr>
                        <th scope="row"><?= $key+1 ?></th>
                        <td><?php echo $user['name'] ?></td>
                        <td><?= $user['phone'] ?></td>
                        <td><?= $user['email'] ?></td>
                    </tr>
                    
                <?php               
                  }
                ?>

          
     
            </tbody>
        </table>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>