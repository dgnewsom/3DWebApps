<div id="model">
    <div class="row">
        <div class="col-sm-10">
            <div class="card text-left">
                <div class="card-header main-colour">
                    <button class="btn" id="coke_button" onclick="showModel('coke')">Coca-Cola</button>
                    <button class="btn" id="sprite_button" onclick="showModel('sprite')">Sprite</button>
                    <button class="btn" id="pepper_button" onclick="showModel('pepper')">Dr Pepper</button>
                </div>
                <div class="card-body">
                    <!--            Coke Model-->
                    <div id="coke">
                        <div class ="preview-header"><h4 id="coke_model_title"></h4></div>
                        <div class="model3D">
                            <x3d>
                                <scene>
                                    <inline namespacename = "model" mapDEFToID="true" url="./assets/x3d/coke_can.x3d"></inline>
                                </scene>
                            </x3d>
                        </div>
                        <p class="card-text" id="coke_model_text"></p>
                    </div>
                    <!--                    Sprite Model-->
                    <div id="sprite">
                        <div class ="preview-header"><h4 id="sprite_model_title"></h4></div>
                        <div class="model3D">
                            <x3d>
                                <scene>
                                    <inline namespacename = "can" url="./assets/x3d/sprite_bottle.x3d"></inline>
                                </scene>
                            </x3d>
                        </div>
                        <p class="card-text" id="sprite_model_text"></p>
                    </div>
                    <!--                    Dr Pepper Model-->
                    <div id="pepper">
                        <div class ="preview-header"><h4 id="pepper_model_title"></h4></div>
                        <div class="model3D">
                            <x3d>
                                <scene>
                                    <inline namespacename = "can" url="./assets/x3d/pepper_cup.x3d"></inline>
                                </scene>
                            </x3d>
                        </div>
                        <p class="card-text" id="pepper_model_text"></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-2">
            <div id="coke_gallery">
                <div class="gallery card">
                    <div class="card-header main-colour"><h4 id="coke_gallery_title"></h4></div>
                    <div class="lightbox-gallery" id="gallery_coke"></div>
                    <p class="card-text" id="coke_gallery_text"></p>
                </div>
            </div>
            <div id="sprite_gallery">
                <div class="gallery card">
                    <div class="card-header main-colour"><h4 id="sprite_gallery_title"></h4></div>
                    <div class="lightbox-gallery" id="gallery_sprite"></div>
                    <p class="card-text" id="sprite_gallery_text"></p>
                </div>
            </div>
            <div id="pepper_gallery">
                <div class="gallery card">
                    <div class="card-header main-colour"><h4 id="pepper_gallery_title"></h4></div>
                    <div class="lightbox-gallery" id="gallery_pepper"></div>
                    <p class="card-text" id="pepper_gallery_text"></p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h4 id="camera_title"></h4>
                    </div>
                    <div class="card-text">
                        <p id="camera_text"></p>
                        <a class="btn btn-primary btn-responsive camera-font main-colour" onclick="javascript:set_camera('front')">Front</a>
                        <a href="#" class="btn btn-secondary btn-responsive camera-font main-colour" onclick="javascript:set_camera('rear')">Back</a>
                        <a href="#" class="btn btn-success btn-responsive camera-font main-colour" onclick="javascript:set_camera('left')">Left</a>
                        <a href="#" class="btn btn-danger btn-responsive camera-font main-colour"onclick="javascript:set_camera('right')">Right</a>
                        <a href="#" class="btn btn-danger btn-responsive camera-font main-colour"onclick="javascript:set_camera('top')">Top</a>
                        <a href="#" class="btn btn-danger btn-responsive camera-font main-colour"onclick="javascript:set_camera('bottom')">Bottom</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h4 id="animation_title"></h4>
                    </div>
                    <div class="card-text">
                        <p id="animation_text"></p>
                        <a href="#" class="btn btn-primary btn-responsive" id = "spin_button"  onclick="javascript:toggle_spin()">Start</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div id="coke_description_model">
                        <h3 class="card-title" id="coke_page_title"></h3>
                        <h4 class="card-subtitle" id="coke_page_subtitle"></h4>
                        <p class="card-text" id="coke_page_description"></p>
                    </div>
                    <div id="sprite_description_model">
                        <h3 class="card-title" id="sprite_page_title"></h3>
                        <h4 class="card-subtitle" id="sprite_page_subtitle"></h4>
                        <p class="card-text" id="sprite_page_description"></p>
                    </div>
                    <div id="pepper_description_model">
                        <h3 class="card-title" id="pepper_page_title"></h3>
                        <h4 class="card-subtitle" id="pepper_page_subtitle"></h4>
                        <p class="card-text" id="pepper_page_description"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>