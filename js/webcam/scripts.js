//Configurando o arquivo que vai receber a imagem
webcam.set_api_url('upload.php');
webcam.set_quality(90);
webcam.set_shutter_sound(true);
webcam.set_hook('onComplete', 'my_completion_handler');
function take_snapshot() {
  document.getElementById('upload_results').innerHTML = '<h1>Uploading...</h1>';
  webcam.snap();
}

function my_completion_handler(msg) {
  if (msg.match(/(http\:\/\/\S+)/)) {
    var htmlResult = '<h1>Upload Successful!</h1>';
    htmlResult += '<img src="'+msg+'" />';
    document.getElementById('upload_results').innerHTML = htmlResult;
    webcam.reset();
  } else {
    alert("PHP Erro: " + msg);
  }
}

document.write(webcam.get_html(320, 240));