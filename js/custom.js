$(document).ready(function() {
                    
	$('li.parent').hover(function() {
		if($(this).find('> ul').css('display') == "none"){
			$(this).find('> ul').slideDown(200);
			slide = true;
		}
	}, function() {
		if(slide == true){
			$(this).find('> ul').slideUp();
			slide = false;
		}
	});     

	$('nav strong').click(function() {        
       $('nav ul').toggle();
    });     
  
});

function SomenteNumero(e){
    var tecla=(window.event)?event.keyCode:e.which;   
    if((tecla>47 && tecla<58)) return true;
    else{
        if (tecla==8 || tecla==0 || tecla==13) return true;
    else  return false;
    }
}

function SomenteLetras(e){
    var tecla=(window.event)?event.keyCode:e.which;
    if((tecla > 65 && tecla < 90)||(tecla > 97 && tecla < 122)) return true;
   else{
   if (tecla != 8) return false;
   else return true;
   }
}

function cor_tabela(id){
	  var cor1="#dae5e3";
	  var cor2="#fff";
	  var x=document.getElementById(id).getElementsByTagName('tr');
	  for(i=0;i<x.length;i++)
	  x[i].style.backgroundColor=(i%2==0)?cor1:cor2;
	}