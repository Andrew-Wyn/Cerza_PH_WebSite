<?php

$useragent=$_SERVER['HTTP_USER_AGENT'];

if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))

header('Location: ');

?>

<html>
    <head>
        
        <meta charset="utf-8">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="Assets/css/materialize.min.css" rel="stylesheet">
        <link rel="stylesheet" media="screen" href="Assets/css/css.css" type="text/css" />
        <title></title>
    </head>
    <body>
        
        <ul id="slide-out" class="sidenav">
            <li><div class="user-view">
              <div class="background">
                <img src="https://images.pexels.com/photos/808510/pexels-photo-808510.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260">
              </div>
              <a href="#user"><img class="circle" src="Assets/img/icon.jpg"></a>
              <a href="#name"><span class="white-text name">Matteo Cerza</span></a>
              <a href="#email"><span class="white-text email">matteocerza@gmail.com</span></a>
            </div></li>
            <li><a href="#!"><i class="material-icons">camera</i>First Link With Icon</a></li>
            <li><a href="#!">Second Link</a></li>
            <li><div class="divider"></div></li>
            <li><a class="subheader">Subheader</a></li>
            <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
        </ul>        
        
        <div class='main'>
            <div class="title">MATTEO CERZA photos</div>
            <ul>
                <li><img src="https://images.pexels.com/photos/808510/pexels-photo-808510.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="" class="img"></li>
                <li><img src="https://images.pexels.com/photos/784927/pexels-photo-784927.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="" class="img"></li>
                <li><img src="https://images.pexels.com/photos/1118425/pexels-photo-1118425.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="" class="img"></li>
                <li><img src="https://images.pexels.com/photos/1118941/pexels-photo-1118941.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="" class="img"></li>
                <li><img src="https://images.pexels.com/photos/463052/pexels-photo-463052.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="" class="img"></li>
            </ul>
        </div>
        <div class="header">
            <div class="head_before">
                <i class="material-icons left_obj">camera</i>
            </div>
            <div class="head_after trans-100">
                <div class="left_obj">
                    MATTEO CERZA photos
                </div>
            </div>
            <div class="header_menu">
                <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            </div>
        </div>
        <div class="compensatore dn"></div>
        <div class="container">
            <div class="row">
                <div class="col s12 l4">
                    <div>
                        <img class="materialboxed" width="650" src="Assets/img/icon.jpg">
                    </div>
                    <div>
                        <img class="materialboxed" width="650" src="https://images.pexels.com/photos/784927/pexels-photo-784927.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260">
                    </div>
                    <div>
                        <img class="materialboxed" width="650" src="https://images.pexels.com/photos/784927/pexels-photo-784927.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260">
                    </div>
                    <div>
                        <img class="materialboxed" width="650" src="https://images.pexels.com/photos/784927/pexels-photo-784927.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260">
                    </div>
                    <div>
                        <img class="materialboxed" width="650" src="https://images.pexels.com/photos/784927/pexels-photo-784927.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260">
                    </div>
                </div>
                <div class="col s12 l4">
                    <div>
                        <img class="materialboxed" width="650" src="https://images.pexels.com/photos/784927/pexels-photo-784927.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260">
                    </div>
                    <div>
                        <img class="materialboxed" width="650" src="https://images.pexels.com/photos/784927/pexels-photo-784927.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260">
                    </div>
                    <div>
                        <img class="materialboxed" width="650" src="https://images.pexels.com/photos/784927/pexels-photo-784927.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260">
                    </div>
                    <div>
                        <img class="materialboxed" width="650" src="https://images.pexels.com/photos/784927/pexels-photo-784927.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260">
                    </div>
                </div>
                <div class="col s12 l4">
                    <div>
                        <img class="materialboxed" width="650" src="https://images.pexels.com/photos/784927/pexels-photo-784927.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260">
                    </div>
                    <div>
                        <img class="materialboxed" width="650" src="https://images.pexels.com/photos/784927/pexels-photo-784927.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260">
                    </div>
                    <div>
                        <img class="materialboxed" width="650" src="https://images.pexels.com/photos/784927/pexels-photo-784927.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260">
                    </div>
                </div>
            </div>
        </div>
        <footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="">Description</h5>
                <p class="">Cerza è lu mejo non se po contraddire.</p><br>
                  An'vedi che fotooooo!!!!
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="">Links</h5>
                <ul>
                  <li><a class="" href="#!">Link 1</a></li>
                  <li><a class="" href="#!">Link 1</a></li>
                  <li><a class="" href="#!">Link 1</a></li>
                  <li><a class="" href="#!">Link 1</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="center container" style="color: black; padding-bottom: 10px;">
            © 2014 Copyright Text
            </div>
          </div>
        </footer>
        
        
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="Assets/js/materialize.min.js"></script>
        <script src="Assets/js/js.js"></script>
    </body>
<html>