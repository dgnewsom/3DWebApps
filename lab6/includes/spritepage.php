<div id="sprite" style="display: none" class="container main_contents">
    <div class="row">
        <div class="col-sm-10">
            <div class="card text-left">
                <div class="card-header main-colour">
                    <ul class="nav nav-tabs card-header-tabs main-colour">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="true" href="javascript:swap('coke')">Coca-Cola</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active main-colour" href="javascript:swap('sprite')">Sprite</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:swap('pepper')">Dr Pepper</a>
                        </li>
                    </ul>
                </div>
                <div class ="preview-header">
                    <h4 id="sprite_model_title"></h4>
                </div>
                <div class="model3D">
                    <x3d>
                        <scene>
                            <inline namespacename = "can" url="./assets/x3d/sprite_bottle.x3d"></inline>
                        </scene>
                    </x3d>
                </div>
                <div class="card-body">
                    <p class="card-text" id="sprite_model_text"></p>
                </div>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="gallery card">
                <div class="card-header main-colour">
                    <h4 id="sprite_gallery_title"></h4>
                </div>
                <div id="gallery_sprite"></div>
                <p class="card-text" id="sprite_gallery_text"></p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h4 id="sprite_camera_title"></h4>
                    </div>
                    <div class="card-text">
                        <p id="sprite_camera_text"></p>
                        <a href="#" class="btn btn-primary btn-responsive camera-font">Front</a>
                        <a href="#" class="btn btn-secondary btn-responsive camera-font">Back</a>
                        <a href="#" class="btn btn-success btn-responsive camera-font">Left</a>
                        <a href="#" class="btn btn-danger btn-responsive camera-font">Right</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title" id="sprite_page_title"></h3>
                    <h4 class="card-subtitle" id="sprite_page_subtitle"></h4>
                    <p class="card-text" id="sprite_page_description"></p>
                </div>
            </div>
        </div>
    </div>
</div>
