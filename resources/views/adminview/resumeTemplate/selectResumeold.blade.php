@extends('frontend.frontmaster')
@section('title','Home')
@section('content')


<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
  const buttons = document.querySelectorAll('.projectts');
const overlay = document.querySelector('.overlay');
const overlayImage = document.querySelector('.overlay__inner img');

function open(e) {
  overlay.classList.add('open');
  const src= e.currentTarget.querySelector('img').src;
  overlayImage.src = src;
}

function close() {
  overlay.classList.remove('open');
}

buttons.forEach(button => button.addEventListener('click', open));
overlay.addEventListener('click', close);

</script>

<style>
*{
    margin:0px;
    padding:0px;
    box-sizing:border-box;
}
@import url("https://fonts.googleapis.com/css?family=Inconsolata|Merriweather");
body {
  font-family: "Inconsolata", monospace;
  margin: 0;
}

button {
  cursor: pointer;
}

 .fluid-container {
  margin-top:100px;
  margin-bottom:200px;
  width:98%;
  background: #ffffff;
  position: relative;
  min-height:900px;
  justify-content:space-between;
 
}

.projectts {
  position: relative;
    overflow: hidden;
    margin-left:40px;
    height: 513px;
    width: 378px;
    margin-bottom: 25px;
}
.projectts img {
  position: absolute;
    opacity: 0.9;
    width:368px;
}

.projectts:hover .grid__overlay {
  transform: translateY(0%);
 
}

 .grid__overlay {
  background: #f8e71c;
  opacity:0.8;
  /* width:426px; */

 width: 368px;
   height:100%;
  position: relative;
  display: grid;
  justify-items: center;
  align-items: center;
  transform: translateY(101%);
  transition: all 0.3s ease-in-out;
}

.grid__overlay button {
 
  outline: none;
  color:black;
  font-family: ui-sans-serif;
  font-weight: 900;
  letter-spacing: 2px;
  text-transform: uppercase;
  padding: 10px;
}

.grid__overlay button:hover {
  transition: all 0.3s ease-in-out;
  background:#3578e8;
  color:#fff;
  font-weight:bold;
  transform: scale(1.05);
  font-family: ui-sans-serif;
  /* background:#ae51be;  */
}

.logowithmenu_bar {
    background:white;
 }

 
 @media only screen and (max-width:1024px) {

  .projectts img {
      width: 300px;
       }

.projectts {
    height: 418px;
    width: 300px;
    margin-left: 23px;
     }

.grid__overlay {
    width: 299px;
}

.projectts {
    width: 300px;
    margin-left: 23px;
}
 
.grid__overlay button:hover {
    margin-left:-69px;
  }
 }
  
 @media only screen and (max-width:768px) 

 {
  .projectts img {
    width: 301px;
}

.projectts {
   margin-left:176px;
  }
  .grid__overlay {
    width: 301px;
    height: 100%;
    /* height: 379px; */
}
 }

 
 
 @media only screen and (max-width:425px) 
 {
  .projectts {
    margin-left: 82px;
   }
 }

 
 @media only screen and (max-width:375px) 
 {
  .projectts img {
    width: 301px;
}


.projectts {
    width: 301px;
    margin-left: 49px;
}
 }



 @media only screen and (max-width:320px) 
 {
  .projectts img {
    width:286px;
}

.grid__overlay {
    width: 288px;
    height:100%;
    
 }

 .projectts {
    width: 286px;
    margin-left: 23px;
    height: 398px;
}
}

 
 

</style>

<div class="fluid-container">
        <div class="row">

        @foreach($resumeSlide as $item)
              <div class="col-lg-4">
                <div class="projectts">
                  <img src="{{url($item->image)}}">
                    <div class="grid__overlay">
                    <button class="viewbutton" onclick="window.location.href='{{ url('build-resume').'/'.$item->id }}'">Select Resume</button>
                    </div>
                </div>
              </div>
        @endforeach


</div>
</div>
  
@include('frontend.common.footer')

<div class="modal fade" id="modal_logout" role="dialog" aria-hidden="true">
    <form action="{{url('user-logout')}}" method="post">
        @csrf
        <div class="modal-dialog">
            <div class="modal-content m_login">
                <div class="modal-header m_header">
                    {{--<h5 class="modal-title"><b>Signoff</b></h5>--}}
                    <button type="button" class="close m_close " data-dismiss="modal">×</button>
                </div>
                <div class="modal-body">
                    <h5 align="center">Are Sure You Want To Logout?</h5>
                    <br>
                    <button typeof="submit" id="btnsubmit_regis"
                        class="btn btn_login btn-primary btn-xs btn-block req_btn text-white waves-effect waves-light">
                        Logout Now
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>