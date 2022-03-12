//adapted from example code 'benskitchen.com'
var is_spinning = false;
var lightOn = true;
var current_model_type = "can";
var brand = "coke";

function toggle_spin()
{
    is_spinning = !is_spinning
    document.getElementById('model__Can-TIMER').setAttribute('enabled', is_spinning);
    if(is_spinning){
        document.getElementById('spin_button').innerHTML = 'Stop';
        document.getElementById('spin_button').style.backgroundColor = 'red';
    }else{
        document.getElementById('spin_button').innerHTML = 'Start';
        document.getElementById('spin_button').style.backgroundColor = 'green';
    }
}
function wireframe()
{
    var e = document.getElementById('model');
    e.runtime.togglePoints(true);
    e.runtime.togglePoints(true);
}
function lighting()
{
    lightOn = !lightOn;
    document.getElementById('model__lighting').setAttribute('headlight', lightOn.toString());
}

function set_camera(view){
    var cam_string = 'model__' + view + '_cam';
    document.getElementById(cam_string).setAttribute('bind', 'true');
}

function switch_brand(new_brand){
    brand = new_brand;
    set_can_texture(brand);
    set_cup_texture(brand);
    resetColours();
}

function set_model_type(model_type){
    current_model_type = model_type;
    console.log(current_model_type);
    switch(current_model_type){
        case "can":
            set_model_active(0);
            break;
        case "cup":
            set_model_active(1);
            break;
        case 'bottle':
            set_model_active(2);
            break;
        default:
            set_model_active(0);
    }
    switch_brand(brand);
}

function set_can_texture(brand){
    document.getElementById('model__can_texture').setAttribute('url','./textures/'+ brand +'_can_texture.png');
}

function set_cup_texture(brand){
    document.getElementById('model__cup_texture').setAttribute('url','./textures/'+ brand +'_cup_texture.png');
    switch(brand){
        case 'sprite':
            // document.getElementById('model__cup_liquid_material').setAttribute('diffuseColor', '0.8627 0.9922 0.7843');
            break;
        default:
            // document.getElementById('model__cup_liquid_material').setAttribute('diffuseColor', '0.02745 0 0');

    }
}


function set_model_active(id){
    document.getElementById("model__switcher").setAttribute("whichChoice", id)
}