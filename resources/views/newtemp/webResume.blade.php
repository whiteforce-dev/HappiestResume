<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<!-- <meta content="width=device-width, initial-scale=1.0" name="viewport"> -->
<title>Happiest Resume</title>
<link rel="shortcut icon" href="https://happiestresume.com/public/front/images/logo1.png" type="image/x-icon">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<style>
html{
  background:linear-gradient(to right, #ffeeee, #ddefbb);
    background-position: center;
    background-size: cover;
    width: 100%;
    height: 100%;
    overflow-x:hidden;
}
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap');
.button {
  font-family: 'Poppins', sans-serif;
  width: 96%;
  background-color: #56c506;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 20px 2px;
  cursor: pointer;
  border-radius: 14px;
  color: #333;
  font-weight: bold;
}

.button:hover{
  border: 2px solid rgba(80, 74, 74, 0.959);
}
</style>
@if($resume_id == 1)
  <style>
  html{
    background: linear-gradient(to right, #ffeeee, #ddefbb);
  }
  </style>
  @elseif($resume_id == 2)
  <style>
    html{
      background: linear-gradient(to right,#e6f7ee, #faffd1);
  }
    </style>
  @endif
</head>

<body >
@if(isset($code))
  <div><a href="{{ url('web-view/'.$code) }}" target="_blank" class="button">Web View</a></div>
  @endif
<?php echo $resume_template;?>


</body>

</html>



