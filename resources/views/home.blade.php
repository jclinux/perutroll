@extends('layouts.layout')
@section('main-content')      
 <div class="pt-content">
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
            <div class="hidden-md hidden-lg col-xs-12 col-sm-12 text-center">
                <a href="#" id="showUpload" class="pt-icodown"><span><em>Mostrar upload</span>
                </em></a>
                <a href="#" id="hideUpload" class="pt-icoup display_off"><span><em>Ocultar upload</span>
                </em>
                </a>
            </div>

          <div class="pt-section-upload display_off ">
            <select class="pt-category" name="">
                <option value="0">Seleccione categoria</option>
                <option value="1">Familia</option>
                <option value="2">Trabajo</option>
                <option value="3">Animados</option>
            </select>
            <div class="pt-search">
                <input type="text" name="name" value="" class="pt-txt-search" />
                <button type="button" name="button" class="pt-btn-search">
                    <span>X</span>
                </button>
                <br class="pt-clear-box">
            </div>
            <div class="pt-grids-imgs">
                <div class="col-sm-4">
                    <div class="pt-grid-imagen">
                        <img src="images/img-gallery.jpg" alt="" />
                        <span>Juan carlos</span>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="pt-grid-imagen">
                        <img src="images/img-gallery.jpg" alt="" />
                        <span>Juan carlos</span>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="pt-grid-imagen">
                        <img src="images/img-gallery.jpg" alt="" />
                        <span>Juan carlos</span>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="pt-grid-imagen">
                        <img src="images/img-gallery.jpg" alt="" />
                        <span>Juan carlos</span>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="pt-grid-imagen">
                        <img src="images/img-gallery.jpg" alt="" />
                        <span>Juan carlos</span>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="pt-grid-imagen">
                        <img src="images/img-gallery.jpg" alt="" />
                        <span>Juan carlos</span>
                    </div>
                </div>
            </div>
            <br class="pt-clear-box">
            <div class="pt-cont-btn-upload">
                <button type="button" name="button" class="pt-btn-upload">Subir imagen</button>
            </div>
          </div>

        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
          <div class="pt-generate-meme">
            <h3 class="pt-head-generate-meme text-center">Diviertete con tus amigos.</h3>
            <div class="pt-content-meme">
                <span class="pt-meme-msg text-center">Selecciona una foto</span>
            </div>
            <div class="pt-meme-desc">
                <input type="button" name="name" value="Digita el titulo 1 de tu meme" class="pt-meme-title text-left">
                <button type="button" name="button" class="pt-meme-btn"><span>B</span></button>
                <br class="pt-clear-box">
            </div>
            <div class="pt-meme-desc">
                <input type="button" name="name" value="Digita el titulo 1 de tu meme" class="pt-meme-title text-left">
                <button type="button" name="button" class="pt-meme-btn"><span>B</span></button>
                <br class="pt-clear-box">
            </div>

          </div>

        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">

          <div class="pt-section-options display_off ">
              <ul class="nav nav-tabs pt-tabs"  role="tablist">
                  <li role="presentation" class="active">
                      <a href="#efectos" aria-controls="home" role="tab" data-toggle="tab">Efectos</a></li>
                  <li role="presentation">
                      <a href="#marcos" aria-controls="home" role="tab" data-toggle="tab">Marcos</a>
                  </li>
                  <li role="presentation">
                      <a href="#accesorios" aria-controls="home" role="tab" data-toggle="tab">Accesorios</a>
                  </li>

              </ul>
              <div class="tab-content pt-content-tabs">
                <div role="tabpanel" class="tab-pane active pt-tab" id="efectos" class="">
                    <div class="pt-action">
                        <span>Brillo y contraste</span>
                    </div>
                    <div class="pt-action">
                        <span>Brillo y contraste</span>
                    </div>
                    <div class="pt-action">
                        <span>Brillo y contraste</span>
                    </div>
                    <div class="pt-action">
                        <span>Brillo y contraste</span>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane pt-tab" id="marcos">
                    <div class="pt-action">
                        <span>Marco 1</span>
                    </div>
                    <div class="pt-action">
                        <span>Marco 2</span>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane pt-tab" id="accesorios">
                    <div class="pt-action">
                        <span>Accesorios 1</span>
                    </div>
                    <div class="pt-action">
                        <span>Accesorios 2</span>
                    </div>
                </div>
              </div>
              <br class="pt-clear-box">
          </div>
          <div class="hidden-md hidden-lg col-xs-12 col-sm-12 text-center">
              <a href="#" id="showOptions" class="pt-icoup"><span><em>Mostrar options</em><span></a>
              <a href="#" id="hideOptions" class="pt-icodown display_off"><span><em>Ocultar options</em><span></a>
          </div>
        </div>
        <br class="pt-clear-box">
      </div>


      <div class="pt-gallery display_off">
          <h4>Tu Galeria de memes</h4>
        <div class="pt-content-gallery">
            <div class="col-sm-3">
                <div class="pt-img-gallery">
                    <img src="images/img-gallery.jpg" alt="" />
                    <div class="pt-des-imagen">
                        <span class="pull-left">Juan Carlos</span>
                        <a href="#" class="pt-btn-link pull-right">ver enlace</a>
                        <br class="pt-clear-box">
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="pt-img-gallery">
                    <img src="images/img-gallery.jpg" alt="" />
                    <div class="pt-des-imagen">
                        <span class="pull-left">Juan Carlos</span>
                        <a href="#" class="pt-btn-link pull-right">ver enlace</a>
                        <br class="pt-clear-box">
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="pt-img-gallery">
                    <img src="images/img-gallery.jpg" alt="" />
                    <div class="pt-des-imagen">
                        <span class="pull-left">Juan Carlos</span>
                        <a href="#" class="pt-btn-link pull-right">ver enlace</a>
                        <br class="pt-clear-box">
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="pt-img-gallery">
                    <img src="images/img-gallery.jpg" alt="" />
                    <div class="pt-des-imagen">
                        <span class="pull-left">Juan Carlos</span>
                        <a href="#" class="pt-btn-link pull-right">ver enlace</a>
                        <br class="pt-clear-box">
                    </div>
                </div>
            </div>

        </div>
        <br class="pt-clear-box">
      </div>

      
    </div>
@endsection