
function carregar() {
    var msg = document.getElementById('msg')
    var bdn = document.getElementById('bdn')

    var data = new Date();
    var hora = data.getHours();
     //var hora = 18
    if (hora == 1){
         msg.innerHTML = `Agora são ${hora} hora.`
    } else {
            msg.innerHTML = `Agora são ${hora} horas.`
    }
   
    if (hora >=0 && hora < 12){
        //bom dia
        bdn.innerHTML = 'Bom dia! &#x1F324 '
        document.body.style.backgroundImage = "url('bg-manha.jpg')"
       
    }
    else if (hora >=12 && hora < 18){
        //boa tarde
       bdn.innerHTML = 'Boa tarde! &#x2600'
        document.body.style.backgroundImage = "url('bg-tarde.jpg')"
       
    }
    else {
        //boa noite
        bdn.innerHTML = 'Boa noite! &#x1F319'
        document.body.style.backgroundImage = "url('bg-noite.jpg')"
    }


}