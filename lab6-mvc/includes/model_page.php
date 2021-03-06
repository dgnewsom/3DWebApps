<div id="model">
    <div class="row">
        <div class="col-sm-6">
            <div class="card text-left">
                <div class="card-header main-colour">
                    <button class="btn" id="x3d_coke_button" onclick="showModel('coke')"></button>
                    <button class="btn" id="x3d_sprite_button" onclick="showModel('sprite')"></button>
                    <button class="btn" id="x3d_pepper_button" onclick="showModel('pepper')"></button>
                    <button class="btn" id="x3d_fanta_button" onclick="showModel('fanta')"></button>
                </div>
                <div class="card-body">
                    <!--Model-->
                    <div class="model3D">
                        <h4 class ="preview-header" id="model_title"></h4>
                        <x3d>
                            <scene>
                                <inline namespacename = "model" mapDEFToID="true" url="../assets/x3d/models.x3d"></inline>
                            </scene>
                        </x3d>
                    </div>
                </div>
                <div class="card-footer">
                    <p class="card-text" id="model_text"></p>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="row camera-row">
                <div class="card camera-card">
                    <div class="card-header main-colour">
                        <div class="card-title">
                            <h4 id="camera_title"><?php echo $data['cards']['camera']['title']?></h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="card-text">
                            <p id="camera_text"><?php echo $data['cards']['camera']['text']?></p>
                            <a href="#" class="btn " id="front_cam_button" onclick="javascript:set_camera('front')"></a>
                            <a href="#" class="btn " id="back_cam_button" onclick="javascript:set_camera('rear')"></a>
                            <a href="#" class="btn " id="left_cam_button" onclick="javascript:set_camera('left')"></a>
                            <a href="#" class="btn " id="right_cam_button" onclick="javascript:set_camera('right')"></a>
                            <a href="#" class="btn " id="top_cam_button" onclick="javascript:set_camera('top')"></a>
                            <a href="#" class="btn " id="bottom_cam_button" onclick="javascript:set_camera('bottom')"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row model-type-row">
                <div class="card model-type-card">
                    <div class="card-header main-colour">
                        <div class="card-title">
                            <h4 id="model_type_title"><?php echo $data['cards']['modelType']['title']?></h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="card-text">
                            <p id="model_type_text"><?php echo $data['cards']['modelType']['text']?></p>
                            <a href="#" class="btn" id = "x3d_can_button" onclick="javascript:set_model_type('can')"></a>
                            <a href="#" class="btn" id = "x3d_bottle_button" onclick="javascript:set_model_type('bottle')"></a>
                            <a href="#" class="btn" id = "x3d_cup_button" onclick="javascript:set_model_type('cup')"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row animation-row">
                <div class="col-sm-6">
                <div class="card animation-card">
                    <div class="card-header main-colour">
                        <div class="card-title">
                            <h4 id="animation_title"><?php echo $data['cards']['animation']['title']?></h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="card-text">
                            <p id="animation_text"><?php echo $data['cards']['animation']['text']?></p>
                            <a href="#" class="btn" id = "spin_button"  onclick="javascript:toggle_spin()"></a>
                        </div>
                    </div>
                </div>
                </div>
                <div class="col-sm-6">
                <div class="card lighting-card">
                    <div class="card-header main-colour">
                        <div class="card-title">
                            <h4 id="lighting_title"><?php echo $data['cards']['lighting']['title']?></h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="card-text">
                            <p id="lighting_text"><?php echo $data['cards']['lighting']['text']?></p>
                            <div class="slidecontainer">
                                <input type="range" min="0" max="200" value="50" class="slider" id="light_slider" oninput="lighting(this.value / 100)">
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>

        </div>
        <div class="col-sm-2">
            <?php

            $picturetypes = ['logo', 'can', 'bottle', 'cup'];
            $title = $data['cards']['gallery']['title'];
            $text = $data['cards']['gallery']['text'];

            foreach ($data['brands'] as $arr){
                $brand = $arr['brand'];
                 echo'<div id="' . $brand .'_gallery">'.
                        '<div class="gallery card">
                            <div class="card-header main-colour"><h4>' . $title . '</h4></div>' .
                        '<div class="lightbox-gallery" id="gallery_' . $brand . '">';

                 foreach ($picturetypes as $type){
                     echo'<a href="../assets/images/gallery_images/' . $brand . '_' . $type . '.png " data-lightbox="' . $brand . '_photos">'.
                         '<img className="img-fluid" src="../assets/images/gallery_images/' . $brand . '_' . $type . '.png " class="card-img-top img-thumbnail"/></a>';
                 }

                 echo   '</div>' .
                        '<p class="card-text" id="coke_gallery_text">' . $text . '</p>' .
                        '</div>
                       </div>';
            }
            ?>
<!--            <div id="coke_gallery">-->
<!--                <div class="gallery card">-->
<!--                    <div class="card-header main-colour"><h4 id="coke_gallery_title">--><?php //echo $data['cards']['gallery']['title']?><!--</h4></div>-->
<!--                    <div class="lightbox-gallery" id="gallery_coke"></div>-->
<!--                    <p class="card-text" id="coke_gallery_text">--><?php //echo $data['cards']['gallery']['text']?><!--</p>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div id="sprite_gallery">-->
<!--                <div class="gallery card">-->
<!--                    <div class="card-header main-colour"><h4 id="sprite_gallery_title">--><?php //echo $data['cards']['gallery']['title']?><!--</h4></div>-->
<!--                    <div class="lightbox-gallery" id="gallery_sprite"></div>-->
<!--                    <p class="card-text" id="sprite_gallery_text">--><?php //echo $data['cards']['gallery']['text']?><!--</p>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div id="pepper_gallery">-->
<!--                <div class="gallery card">-->
<!--                    <div class="card-header main-colour"><h4 id="pepper_gallery_title">--><?php //echo $data['cards']['gallery']['title']?><!--</h4></div>-->
<!--                    <div class="lightbox-gallery" id="gallery_pepper"></div>-->
<!--                    <p class="card-text" id="pepper_gallery_text">--><?php //echo $data['cards']['gallery']['text']?><!--</p>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div id="fanta_gallery">-->
<!--                <div class="gallery card">-->
<!--                    <div class="card-header main-colour"><h4 id="fanta_gallery_title">--><?php //echo $data['cards']['gallery']['title']?><!--</h4></div>-->
<!--                    <div class="lightbox-gallery" id="gallery_fanta"></div>-->
<!--                    <p class="card-text" id="fanta_gallery_text">--><?php //echo $data['cards']['gallery']['text']?><!--</p>-->
<!--                </div>-->
<!--            </div>-->
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div id="coke_description_model">
                        <h3 class="card-title" id="coke_page_title"><?php echo $data['brands']['coke']['title']?></h3>
                        <h4 class="card-subtitle" id="coke_page_subtitle"><?php echo $data['brands']['coke']['modelPageSubtitle']?></h4>
                        <p class="card-text" id="coke_page_description"><?php echo $data['brands']['coke']['modelPageDescription']?></p>
                    </div>
                    <div id="sprite_description_model">
                        <h3 class="card-title" id="coke_page_title"><?php echo $data['brands']['sprite']['title']?></h3>
                        <h4 class="card-subtitle" id="coke_page_subtitle"><?php echo $data['brands']['sprite']['modelPageSubtitle']?></h4>
                        <p class="card-text" id="coke_page_description"><?php echo $data['brands']['sprite']['modelPageDescription']?></p>
                    </div>
                    <div id="pepper_description_model">
                        <h3 class="card-title" id="coke_page_title"><?php echo $data['brands']['pepper']['title']?></h3>
                        <h4 class="card-subtitle" id="coke_page_subtitle"><?php echo $data['brands']['pepper']['modelPageSubtitle']?></h4>
                        <p class="card-text" id="coke_page_description"><?php echo $data['brands']['pepper']['modelPageDescription']?></p>
                    </div>
                    <div id="fanta_description_model">
                        <h3 class="card-title" id="coke_page_title"><?php echo $data['brands']['fanta']['title']?></h3>
                        <h4 class="card-subtitle" id="coke_page_subtitle"><?php echo $data['brands']['fanta']['modelPageSubtitle']?></h4>
                        <p class="card-text" id="coke_page_description"><?php echo $data['brands']['fanta']['modelPageDescription']?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>