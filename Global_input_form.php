<?php
echo('<div class="jumbotron" style="background-color:#222;border-style:solid;border-color:black;border-width:1px;min-height:400px">    
              <div class="tabbable-left">  
              <ul class="nav nav-tabs">      
              <li class="active"><a href="#send" data-toggle="tab">Написать</a></li>
              <li><a href="#help" data-toggle="tab">Справка</a></li>
              </ul>
              <div class="tab-content">
              <div class="tab-pane active" id="send">
              <br>
              <h3 style="text-align:center;margin-top:-1%;color:#e6e6e6">Опубликовать пост:</h3>
              <form role="form" method="POST" action="Send_Post.php"> 
              <div class="form-group">
              <input class="form-control"  name="head" value="Заголовок"><br>
              <textarea class="form-control" style="max-width: 1020px;min-height:100px" name="text" >Текст</textarea><br>
              <button type="submit" name="sumbit" class="btn btn-primary btn-lg btn-block" >Опубликовать</button>
              </div>
              </form>
              </div>
              <div class="tab-pane" id="help">
              <br>
              <div class="alert alert-warning">
              Весь текст оформляется в html разметке, переносы отсутствуют. Используйте тег "&lt;br&gt;"
              </div>
              <div class="alert alert-info">
              Можно спользовать шрифт-иконки от Bootstrap. Пример: " Текст &lt;span class="glyphicon glyphicon-fire"&gt; &lt;/span&gt;. Результатом будет: Текст <span class="glyphicon glyphicon-fire"></span>  
              </div>
             <div class="alert alert-block alert-success">
          
                <span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span>
                <span class="glyphicon-class">glyphicon glyphicon-asterisk</span>.
                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                <span class="glyphicon-class">glyphicon glyphicon-plus</span>.
                <span class="glyphicon glyphicon-euro" aria-hidden="true"></span>
                <span class="glyphicon-class">glyphicon glyphicon-euro</span>.
                <span class="glyphicon glyphicon-minus" aria-hidden="true"></span>
                <span class="glyphicon-class">glyphicon glyphicon-minus</span>.
                <span class="glyphicon glyphicon-cloud" aria-hidden="true"></span>
                <span class="glyphicon-class">glyphicon glyphicon-cloud</span>.
                <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                <span class="glyphicon-class">glyphicon glyphicon-envelope</span>.
                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                <span class="glyphicon-class">glyphicon glyphicon-pencil</span>.
                <span class="glyphicon glyphicon-glass" aria-hidden="true"></span>
                <span class="glyphicon-class">glyphicon glyphicon-glass</span>.
                <span class="glyphicon glyphicon-music" aria-hidden="true"></span>
                <span class="glyphicon-class">glyphicon glyphicon-music</span>.
                <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                <span class="glyphicon-class">glyphicon glyphicon-search</span>.
                <span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
                <span class="glyphicon-class">glyphicon glyphicon-heart</span>.
                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                <span class="glyphicon-class">glyphicon glyphicon-star</span>.
                <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                <span class="glyphicon-class">glyphicon glyphicon-star-empty</span>.
                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                <span class="glyphicon-class">glyphicon glyphicon-user</span>.
                <span class="glyphicon glyphicon-film" aria-hidden="true"></span>
                <span class="glyphicon-class">glyphicon glyphicon-film</span>.
                <span class="glyphicon glyphicon-th-large" aria-hidden="true"></span>
                <span class="glyphicon-class">glyphicon glyphicon-th-large</span>. <a href="http://getbootstrap.com/components/">Полыный список...</a>
              </div>
             
              </div>
              </div>
              </div>
              </div>');
