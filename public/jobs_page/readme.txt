

.blob {
  position: absolute;
  width: 600px;
  height: 600px;

  background: linear-gradient( 180deg,rgb(255, 251, 0) 31.77%, #ffe600 100% );
  
  -webkit-animation: move 25s infinite alternate;
          animation: move 25s infinite alternate;
  transition: 1s cubic-bezier(0.07, 0.8, 0.16, 1);
}




.blob:hover {
  width: 120px;
  height: 120px;
  -webkit-filter: blur(30px);
          filter: blur(30px);
  box-shadow:
    inset 0 0 0 5px rgba(255,255,255, 0.6),
    inset 100px 100px 0 0px #fa709a,
    inset 200px 200px 0 0px #784ba8,
    inset 300px 300px 0 0px #2b86c5;
}

@-webkit-keyframes move {
  from {
    transform: translate(-100px, -50px) rotate(-90deg);
    border-radius: 24% 76% 35% 65% / 27% 36% 64% 73%;
  }

  to {
    transform: translate(500px, 100px) rotate(-10deg);
    border-radius: 76% 24% 33% 67% / 68% 55% 45% 32%;
  }
}

@keyframes move {
  from {
    transform: translate(-100px, -50px) rotate(-90deg);
    border-radius: 24% 76% 35% 65% / 27% 36% 64% 73%;
  }

  to {
    transform: translate(500px, 100px) rotate(-10deg);
    border-radius: 76% 24% 33% 67% / 68% 55% 45% 32%;
  }
}






<div class="blob"></div>