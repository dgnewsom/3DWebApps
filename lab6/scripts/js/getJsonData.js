$(document).ready(function(){

    $.getJSON('./model/data.json', function (jsonObject){
        // console.log(jsonObject);
        $('#main_title').html(jsonObject.pageTextData[0].title)
        $('#main_subtitle').html(jsonObject.pageTextData[0].subtitle)
        $('#main_description').html(jsonObject.pageTextData[0].description)

        $('#coke_title').html(jsonObject.pageTextData[1].title)
        $('#coke_subtitle').html(jsonObject.pageTextData[1].subtitle)
        $('#coke_description').html(jsonObject.pageTextData[1].description)

        $('#sprite_title').html(jsonObject.pageTextData[2].title)
        $('#sprite_subtitle').html(jsonObject.pageTextData[2].subtitle)
        $('#sprite_description').html(jsonObject.pageTextData[2].description)

        $('#pepper_title').html(jsonObject.pageTextData[3].title)
        $('#pepper_subtitle').html(jsonObject.pageTextData[3].subtitle)
        $('#pepper_description').html(jsonObject.pageTextData[3].description)

        $('#coke_gallery_title').html(jsonObject.pageTextData[7].gallery_title)
        $('#coke_gallery_text').html(jsonObject.pageTextData[7].gallery_text)
        $('#sprite_gallery_title').html(jsonObject.pageTextData[7].gallery_title)
        $('#sprite_gallery_text').html(jsonObject.pageTextData[7].gallery_text)
        $('#pepper_gallery_title').html(jsonObject.pageTextData[7].gallery_title)
        $('#pepper_gallery_text').html(jsonObject.pageTextData[7].gallery_text)

        $('#coke_model_title').html(jsonObject.pageTextData[4].x3dModelTitle)
        $('#coke_model_text').html(jsonObject.pageTextData[4].x3dCreationMethod)
        $('#coke_camera_title').html(jsonObject.pageTextData[8].camera_title)
        $('#coke_camera_text').html(jsonObject.pageTextData[8].camera_text)
        $('#coke_page_title').html(jsonObject.pageTextData[4].title)
        $('#coke_page_subtitle').html(jsonObject.pageTextData[4].subtitle)
        $('#coke_page_description').html(jsonObject.pageTextData[4].description)

        $('#sprite_model_title').html(jsonObject.pageTextData[5].x3dModelTitle)
        $('#sprite_model_text').html(jsonObject.pageTextData[5].x3dCreationMethod)
        $('#sprite_camera_title').html(jsonObject.pageTextData[8].camera_title)
        $('#sprite_camera_text').html(jsonObject.pageTextData[8].camera_text)
        $('#sprite_page_title').html(jsonObject.pageTextData[5].title)
        $('#sprite_page_subtitle').html(jsonObject.pageTextData[5].subtitle)
        $('#sprite_page_description').html(jsonObject.pageTextData[5].description)

        $('#pepper_model_title').html(jsonObject.pageTextData[6].x3dModelTitle)
        $('#pepper_model_text').html(jsonObject.pageTextData[6].x3dCreationMethod)
        $('#pepper_camera_title').html(jsonObject.pageTextData[8].camera_title)
        $('#pepper_camera_text').html(jsonObject.pageTextData[8].camera_text)
        $('#pepper_page_title').html(jsonObject.pageTextData[6].title)
        $('#pepper_page_subtitle').html(jsonObject.pageTextData[6].subtitle)
        $('#pepper_page_description').html(jsonObject.pageTextData[6].description)
    });
});