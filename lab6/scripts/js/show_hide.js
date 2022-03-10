$(document).ready(function (){

    showHome();

})

function showHome(){
    $("#home").show();
    $("#model").hide();
}

function showModel($modelName){
    console.log($modelName);
    $("#home").hide();
    $("#model").show();
    switch ($modelName){
        case 'coke':
            $('#coke').show();
            $('#coke_gallery').show()
            $('#coke_description_model').show()
            $('#sprite').hide();
            $('#sprite_gallery').hide()
            $('#sprite_description_model').hide()
            $('#pepper').hide();
            $('#pepper_gallery').hide();
            $('#pepper_description_model').hide();
            break;
        case 'sprite':
            $('#coke').hide();
            $('#coke_gallery').hide()
            $('#coke_description_model').hide()
            $('#sprite').show();
            $('#sprite_gallery').show()
            $('#sprite_description_model').show()
            $('#pepper').hide();
            $('#pepper_gallery').hide();
            $('#pepper_description_model').hide();
            break;
        case 'pepper':
            $('#coke').hide();
            $('#coke_gallery').hide()
            $('#coke_description_model').hide()
            $('#sprite').hide();
            $('#sprite_gallery').hide()
            $('#sprite_description_model').hide()
            $('#pepper').show();
            $('#pepper_gallery').show();
            $('#pepper_description_model').show();
            break;
        default:
            break;
    }
    resetColours();
}