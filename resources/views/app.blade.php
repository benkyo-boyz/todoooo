<!DOCTYPE html>
  <html lang="ja">
  <head>
      <meta charset="UTF-8">
      <title>todoooo</title>

      <link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.4/material.indigo-pink.min.css">
      <script src="https://storage.googleapis.com/code.getmdl.io/1.0.4/material.min.js"></script>
      <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

      <style type="text/css">  
        body{
          text-align: center;
          margin: 0;
          padding:0;
          background: url(/img/bg1.jpg) center center no-repeat fixed; 
          background-size: cover;
        }
        .main{
          position: relative;
        }

        table{

          margin: auto;
        }

        td{vertical-align: middle;}


      </style>  
  </head>
  <body>
      <div class="container">
          <div class="row">
              <h1>todoooo</h1>
              <div class="main">
                  @yield('content')
              </div>
          </div>
      </div>
  </body>
  </html>