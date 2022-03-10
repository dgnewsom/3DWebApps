//adapted from example code 'benskitchen.com'
var is_spinning = false;
var lightOn = true;
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
// function cam1()
// {
//     document.getElementById('model__front_cam').setAttribute('bind', 'true');
// }
// function cam2()
// {
//     document.getElementById('model__rear_cam').setAttribute('bind', 'true');
// }