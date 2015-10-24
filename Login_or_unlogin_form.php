<?php
if(!isset($_COOKIE['name']))
{   
 echo('  
                    <ul  class="dropdown-menu" style=" min-width: 230px;background-color: #222  ">
                        <li >
                            <div class="row" style="margin-left: auto;margin-right: auto" >
                                <div class="col-md-12" style="margin-left: auto;margin-right: auto"  >
                                  
                                    <form method="POST" action="Login.php" class="navbar-form navbar-right" role="form">
                                           <div class="form-group" >
                                          
                                            <input type="text" placeholder="Login" name="name" class="form-control"  style="max-width: 170px;">
                                           
                                        </div>
                                        <br>
                                        <br>
                                        <div class="form-group">
                                          
                                            <input type="password" placeholder="Password" name="pass" class="form-control"  style="max-width: 170px;">
                                           
                                        </div>
                                        <br>
                                        <br>
                                        <div class="form-group">
                                            <button type="submit" name="sumbit" class="btn btn-success"  ><span class="glyphicon glyphicon-log-in"></span> Войти</button>
                        <br><br>
                                        </div>
                                        
                                        <div class="form-group">
                                        <button type="submit" name="register" class="btn btn-success" >Зарегистрироваться</button>
                                        </div>
                                    </form>
                                </div>
                              
                            </div>
                        </li>
                  </ul>
                  ');
}
else{
    if($_COOKIE['color']==NULL)
    {
        $color='#000000';
    }else{$color = $_COOKIE['color'];}
    echo('<ul  class="dropdown-menu" style=" min-width: 270px;background-color: #222  ">
                        <li >
                            <div class="row" style="margin-left: auto;margin-right: auto" >
                                <div class="col-md-12" style="margin-left: auto;margin-right: auto"  >
                                  <form  class="navbar-form navbar-right" role="form" method="POST" action="Exit.php">
                                  <div class="form-group">
                                  <button type="submit" name="personal_area" class="btn btn-success">Личный кабинет</button>
                                  <button type="submit" name="Exit" class="btn btn-success"><span class="glyphicon glyphicon-log-out"></span> Выход</button>
                                  <br><br>
                                  </div>
                                  </form>
                                   
                                </div>
                              
                            </div>
                        </li>
                  </ul>');
    if(intval($_COOKIE['uid'])==1)
    {
  
    }
}
?>  
