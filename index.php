


<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="assets/img/search-location-solid.svg">
  <title>Order Tracking Online</title>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
  <link rel="stylesheet" href="assets/css/styles.css">
</head>



<body>

  <div class="container">

    <div class="row justify-content-md-center top-row index-top-row">
      <div class="col-md-10 d-flex justify-content-between align-items-end">

        <a href="#" style="display:none;">
          <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-headset" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M8 1a5 5 0 0 0-5 5v4.5H2V6a6 6 0 1 1 12 0v4.5h-1V6a5 5 0 0 0-5-5z"/>
            <path d="M11 8a1 1 0 0 1 1-1h2v4a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1V8zM5 8a1 1 0 0 0-1-1H2v4a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1V8z"/>
            <path fill-rule="evenodd" d="M13.5 8.5a.5.5 0 0 1 .5.5v3a2.5 2.5 0 0 1-2.5 2.5H8a.5.5 0 0 1 0-1h3.5A1.5 1.5 0 0 0 13 12V9a.5.5 0 0 1 .5-.5z"/>
            <path d="M6.5 14a1 1 0 0 1 1-1h1a1 1 0 1 1 0 2h-1a1 1 0 0 1-1-1z"/>
          </svg>
          Hulp nodig?
        </a>

        <a href="#" style="display:none;">
          Nederlands
          <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
          </svg>
        </a>

      </div>
    </div>

    <div class="row justify-content-center mid-row">
      <div class="col-md-10 d-flex justify-content-center">

        <h1 class="main-heading">Volg je pakket</h1>

      </div>
    </div>

    <div class="row justify-content-md-center">
      <div class="col-md-10">
        <div class="card tracking-panel">
          <h3 class="tracking-label">Vul je tracking code in</h3>
          <div class="input-group form-inline">
            <input type="text" class="form-control" placeholder="10-Cijferige 'OT' code" title="Tracking code" id="tracking-input" />
            <button type="submit" class="btn btn-primary" id="tracking_submit">Zending volgen</button>
          </div>
          <span class="error" id="tracking-input-error"></span>
        </div>
      </div>
    </div>

  </div>



<!-- Footer Credits -->
  <div style="position: absolute; left: 50%; top: 92vh;">
    <div style="position: relative; left: -50%;">
      <h6>ordertracking.online</h6>
    </div>
  </div>



<!-- Scripts -->
  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>
  <script type="text/javascript" src='assets/js/main.js'></script>

</body>
<script>
  $("#tracking_submit").click(function(){
    var tracking_code = $("#tracking-input").val();
    var tracking_check = true;

    if (tracking_code.length != 12){
      tracking_check = 'Tracking code wordt niet herkend';
    }


    if (tracking_check == true){
      window.location.href = 'tracker.php?tracking_code='+tracking_code;
    }else{
      $("#tracking-input-error").text(tracking_check);
    }


  });

</script>
</html>
