<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lab 8 - View Brands</title>
</head>
<body>
    <h1 style="margin: 5px; padding: 10px">Choose a drink brand</h1>
    <b style="margin: 5px; padding: 10px">Select a drinks brand name</b>
    <form style="margin: 5px; padding: 10px">
        <select id="select">
            <?php
                for ($i=0; $i <= count($data); $i++){
                    echo '<option value="' . $data[$i] . '">' . $data[$i] . '</option>';
                }
            ?>
        </select>
    </form>
    <div id="placeholder" style="margin: 5px; padding: 10px"> Insert Data Here </div>

    <script src="https://code.jquery.com/jquery-latest.js"></script>
    <script>
        $(document).ready(function(){
            $('#select').change(function (){
                var model = $(this).val();
                console.log('Drinks Model:', model, ' has been selected');
                var str = "";

                $("select option:selected").each(function (){
                    str += "<div><b>Drinks Brand:</b>" + $(this).text() + "</div></br>";
                    console.log('HTML Title is:', $(this).text());
                    var selection = $(this).text();
                    console.log('Selected Brand is:', $(this).text());
                    var brandUrl = "../application/model/modelDrinkDetails.php?brand=" + selection;
                    console.log("Url to PHP is: ",brandUrl );
                    var debugUrl = "../application/model/phpDebug.php";

                    $.getJSON(brandUrl).done(function(json){
                        console.log('web service response for drink brand data:', json);
                        str += "<div width=90%; style='float: left; color: blue; margin: 5px; border: 1px solid; border-color: blue; padding: 10px'>";
                        for(var i=0; i<json.length; i++){
                            str+= "<div width=15% style='float: left; color: blue; margin: 5px; border: 1px solid; border-color: red; padding: 10px'>" +
                                json[i].brand + "</div>" +
                                "<div width=15% style='float: left; color: blue; margin: 5px; border: 1px solid; border-color: red; padding: 10px'>" +
                                json[i].x3dModelTitle + "</div>" +
                                "<div width=15% style='float: left; color: blue; margin: 5px; border: 1px solid; border-color: red; padding: 10px'>" +
                                json[i].x3dCreationMethod + "</div>" +
                                "<div width=15% style='float: left; color: blue; margin: 5px; border: 1px solid; border-color: red; padding: 10px'>" +
                                json[i].modelTitle + "</div>" +
                                "<div width=15% style='float: left; color: blue; margin: 5px; border: 1px solid; border-color: red; padding: 10px'>" +
                                json[i].modelSubtitle + "</div>" +
                                "<div width=15% style='float: left; color: blue; margin: 5px; border: 1px solid; border-color: red; padding: 10px'>" +
                                json[i].modelDescription + "</div>"+

                                "<div width='30%' style='float: left; margin: 5px; border: 1px solid; border-color: green; border-radius: 10px; padding: 10px'>"
                                + "<img width='300px' src= '../assets/images/gallery_images/" + json[i].brand + "_logo.png'></img></div>";
                        }
                        str += "</div>";
                        $('#placeholder').html(str);
                    }).fail(function(){
                        console.log('viewDrinks JS Error');
                    })
                })
            })
        })
    </script>
</body>
</html>