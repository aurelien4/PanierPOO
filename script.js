/**
 * Created by admin on 02/12/2016.
 */
class Ajax {

    ecoute() {
        for (var i = 0; i < 6; i++) {
            var elem = document.getElementById('add'+i);
            console.log(elem);
            elem.addEventListener('click', this.ajax_send);

        }
    }
    ajax_send(){
        var request = new XMLHttpRequest();
        request.onerror = function (event) {
            console.log('Erreur :'+ event);
        }

        var id = this.id.substring(this.id.search(/[0-9]+/g), this.id.length);
        console.log("this id " + this.id);

        var titre = document.getElementById('titre'+id);
        var euro = document.getElementById('euro'+id);
        console.log("titre: "+titre+" prix: "+ euro + " id : " + id);
        if(titre && euro){
            var posts = "titre="+titre.innerText+"&euro="+euro.innerText;
        }
        request.onload = function(){
            var return_data = this.responseText;
            document.getElementById('panier').innerText = return_data;
        }.bind(this);
        request.open('post','Panier.php', true);
        request.setRequestHeader('Content-type',"application/x-www-form-urlencoded");
        request.send(posts);
    }
}

//data attribute à revoir.