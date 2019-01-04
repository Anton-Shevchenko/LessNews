<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>DEFAULT</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
        <link href="../../../public/css/main.css" rel="stylesheet">
    </head>
    <body>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="/">Import data</a>
          <a class="navbar-brand" href="/results/index">View results</a>
          <a class="navbar-brand" href="/results/lib">View results (lib)</a>
      </nav>

      <div class="container-fluid">
        <div style="margin-left: 10%;">
          <?=$content?>
        </div>
        <footer class="page-footer font-small blue">
          <div class="alert alert-danger" role="alert" style="margin-left: -10px; display: none;">
            <strong>Error!</strong>
          </div>
          <div class="alert alert-success" role="alert" style="margin-left: -10px; display: none;">
            Success
          </div>
        </footer>
      </div>

      
    
      
    </body>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>

</html>
