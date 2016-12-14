/**
 * Created by admin on 02/12/2016.
 */
class Ajax {

    ajoutArticle() {
        for (var i = 0; i < 6; i++) {
            var elem = document.getElementById('add'+i);
            console.log(elem);
            elem.addEventListener('click', this.ajax_send);

        }
    }
    deleteArticle(){
        for (var i = 0; i < 6; i++) {
            var elem = document.getElementById('destruction');
            console.log(elem);
            elem.addEventListener('click', this.ajaxSendBissParcequeJeSuisNulEnJs);

        }
    }
    ajaxSendBissParcequeJeSuisNulEnJs(){
        var req = new XMLHttpRequest();
        var supr = "supr="+true;
        req.onerror= function (event) {
            console.log('Erreur :'+ event);
        };
        req.onload = function(){
            var return_data = this.responseText;
            console.log(return_data);
            document.getElementById('panier').innerText = return_data;
        }
        req.open('post', 'Panier.php', false);
        req.setRequestHeader('content-type', "application/x-www-form-urlencoded");
        req.send(supr);
    }
    ajax_send(){
        var request = new XMLHttpRequest();
        request.onerror= function (event) {
            console.log('Erreur :'+ event);
        };
        var id = this.id.substring(this.id.search(/[0-9]+/g), this.id.length);
        console.log("this id " + this.id);

        var idData = document.getElementById('id'+id).innerText;

            var posts = "select="+idData;

        request.onload = function(){
            var return_data = this.responseText;
            console.log(return_data);
            document.getElementById('panier').innerText = return_data;
        }
        request.open('post','Panier.php', false);
        request.setRequestHeader('Content-type',"application/x-www-form-urlencoded");
        request.send(posts);
    }

}

//data attribute à revoir.