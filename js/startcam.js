function iniciarCamera() {
  if(!hasURL() || !hasGetUserMedia()) { 
    alert("Navegador nao suporta WebCam HTML5");
  } else {
    alert("Ok, eu tenho acesso a WebCam");
    navigator.getUserMedia (
      {video: {
         width:  {min:200, ideal:1024, max:2048},
         height: {min:100, ideal: 512, max:1024}
       },
       audio:false},
      setStream,
      error
    );
  }
}

function hasGetUserMedia() {
  navigator.getUserMedia = navigator.getUserMedia || 
                           navigator.webkitGetUserMedia || 
                           navigator.mozGetUserMedia || 
                           navigator.msGetUserMedia;

  if(navigator.getUserMedia) {
    return true;
  } else {
    return false;
  }
}

function hasURL() {
  window.URL = window.URL || 
               window.webkitURL || 
               window.mozURL || 
               window.msURL;

  if(window.URL && window.URL.createObjectURL) {
    return true;
  } else {
    return false;
  }
}

function error(e) {
  alert("Erro na aplicativo="+e);
}

function setStream(stream) {
  var webcam = document.getElementById("webcam");
  webcam.src = window.URL.createObjectURL(stream);
  webcam.play();
}
