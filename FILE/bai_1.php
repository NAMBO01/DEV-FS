 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <!-- Latest compiled and minified CSS -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

     <!-- Optional theme -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

     <!-- Latest compiled and minified JavaScript -->
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
     <style>
         .noi_dung_file {
             text-align: center;
             max-width: 500px;
             margin: auto;
             padding: 20px;
             background-color: red;
             color: black;
         }
     </style>
 </head>

 <body>


     <div class="noi_dung_file">
         <?php

            if (file_exists('./data/sang_thang_nam.txt') == true) {
                $f = fopen("./data/sang_thang_nam.txt", "r");
                echo str_replace("\n", '<br/>', file_get_contents('./data/sang_thang_nam.txt'));
                fclose($f);
                echo "Mở tập tin thành công";
            } else {
                echo 'không mở được tập tin này';
            }
            ?></div>



 </body>

 </html>