<div class="header">
          <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                  <h3 class="text-muted">PerúTroll</h3>
              </div>
              <div class="display_off col-md-4 col-lg-4">
                  <ul class="nav nav-pills">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Tu galeria</a></li>
                    <li><a href="#">Blogs</a></li>
                  </ul>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                @if (!empty($url))
                  <p class="text-right"><a class="btn btn-lg btn-login" href="{{$url}}">Ingresa con Facebook</a></p>
                @elseif(!empty($user))
                    <span><b>Bienvenido(a)</b>:</span>
                    <br/>
                    <span>{{$user['name']}}</span>        
                @endif

              </div>
          </div>
      </div>