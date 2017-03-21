<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daniel Gontar Test</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
          crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>

    </script>
</head>
<body>
<div class="row">
        <div class="col-sm-3"></div>
        <div class="col-lg-6">
            <h2 style="color:blue">Please submit the following details:</h2>
        </div>
        <div class="col-sm-3"></div>
</div>
<br><br>
<form action="db.php" method="post" enctype="multipart/form-data" class="form-horizontal" style="background-image: url('data:image/jpeg;base64,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');background-repeat: no-repeat">
    <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-3">
            <label for="from_date" class="from_date">From date:</label><input type="text" name="from_date"
                                                                          id="from_date" style="margin-left: 10px">
        </div>
        <div class="col-lg-3">
            <label for="to_date" class="to_date">To date:</label><input type="text" name="to_date"
                                                                        id="to_date" style="margin-left: 10px">
        </div>
        <div class="col-lg-3"></div>
    </div>
    <br><br>
    <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-3">
            <label for="car_type" class="car_type">Car Type:</label>
            <select id="car_type" name="car_type" onchange="myfunc1()">
                <option value="1">Mazda</option>
                <option value="2">Honda</option>
            </select>
        </div>
        <div class="col-lg-3">
            <label for="model_type" class="model_type">Model Type:</label>
            <select class="model_type" name="model_type" id="model_type">
                <option value="1">Mazda Model A</option>
                <option value="2">Mazda Model B</option>
            </select>
        </div>
        <div class="col-lg-3"></div>
    </div>
    <br><br>
    <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-3">
            <label for="full_name" class="	full_name">Full Name:</label>
            <input type="text" name="full_name" required style="margin-left: 10px">
        </div>
        <div class="col-lg-3">
            <label for="age" class="age">Age:</label>
            <input type="text" name="age" required pattern="[0-9]{2,3}" style="margin-left: 10px">
        </div>
        <div class="col-lg-3"></div>
    </div>
    <br><br>
    <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-3">
            <label for="phone_number" class="phone_number">Mobile:</label>
            <input type="text" name="phone_number" required pattern="[0-9]{3}-[0-9]{7}" style="margin-left: 32px">
        </div>
        <div class="col-lg-3">
            <label for="email" class="email">Email:</label>
            <input type="email" name="email" required style="width:200px;margin-left: 10px">
        </div>
        <div class="col-lg-3"></div>
    </div>
    <br><br>
    <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-3">
            <label for="id_image" class="id_image">Id Image</label>
            <input type="file" id="id_image" name="id_image" required>
        </div>
        <div class="col-lg-3">
            <label for="license_image" class="license_image">License Image</label>
            <input type="file" id="license_image" name="license_image" required>
        </div>
        <div class="col-lg-3"></div>
    </div>
    <br><br><br>
    <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-3">
            <label for="i_driver" class="i_driver">I am the driver:</label>
            <input type="checkbox" id="i_driver" name="i_driver" checked="checked" onclick="myfunc2()">
        </div>
        <div class="col-lg-3" id="driver_details" style="right: 0px"></div>
        <div class="col-lg-3"></div>
    </div>
    <br><br>
    <!--------------------------------Submit------------------------------------------------->
    <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-3">
            <input type="submit" class="btn btn-success" style="position:absolute;top:10px">
        </div>
    </div>
</form>
</body>
<script>
    $( "#from_date" ).datepicker
    (

    );

    $("#to_date").datepicker();

    function myfunc1()
    {
        var car_type = document.getElementById("car_type");
        var model_type = document.getElementById("model_type");
        if (car_type.value==2) /* we are switching to Honda */
        {
            model_type.remove(model_type.selectedIndex);
            model_type.remove(model_type.selectedIndex);
            var honda_model_a = document.createElement("option");
            honda_model_a.value = 3;
            honda_model_a.text = "Honda Model A";
            var honda_model_b= document.createElement("option");
            honda_model_b.value = 4;
            honda_model_b.text = "Honda Model B";
            model_type.appendChild(honda_model_a);
            model_type.appendChild(honda_model_b);

        }
        if (car_type.value==1) /* we are switching to Mazada */
        {
            model_type.remove(model_type.selectedIndex);
            model_type.remove(model_type.selectedIndex);
            var mazda_model_a = document.createElement("option");
            mazda_model_a.value = 1;
            mazda_model_a.text = "Mazda Model A";
            var mazda_model_b= document.createElement("option");
            mazda_model_b.value = 2;
            mazda_model_b.text = "Mazda Model B";
            model_type.appendChild(mazda_model_a);
            model_type.appendChild(mazda_model_b);

        }
    }
    function myfunc2()
    {
        var driver_details = document.getElementById("driver_details");

        var label = document.createElement("label");
        label.style = 'position:absolute;top:-14px;';
        label.innerHTML = 'Driver\'s details:';

        var input = document.createElement("textarea");
        input.style = 'position:absolute;left:60px;top:10px';
        input.setAttribute("name", "driver_details");

        if (!driver_details.firstChild) // it is blank - so we should add the node elements
        {

            driver_details.appendChild(label);
            driver_details.appendChild(input);
        }
        else
        {
            driver_details.firstChild.remove(this);
            driver_details.firstChild.remove(this);
        }
    }
</script>
</html>
