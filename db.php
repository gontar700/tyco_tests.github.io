<?php
require_once("DbConnectionException.php");
class db
{
    private $servername;
    private $password;
    private $username;
    private $dbname;
    private $mysqli;
    private $from_date;
    private $to_date;
    private $car_type;
    private $model_type;
    private $full_name;
    private $age;
    private $phone_number;
    private $email;
    private $i_driver;
    private $driver_details;

    function __construct($from_date, $to_date, $car_type, $model_type, $full_name, $age, $phone_number, $email,
                         $i_driver,$driver_details)
    {
        $this->servername ="localhost";
        $this->password ="root";
        $this->username ="root";
        $this->dbname ="tyco_tests";
        $this->mysqli = new mysqli($this->servername,$this->username,$this->password,$this->dbname);
        $this->from_date = mysqli_real_escape_string($this->mysqli,$from_date);
        $this->to_date = mysqli_real_escape_string($this->mysqli,$to_date);
        $this->car_type = mysqli_real_escape_string($this->mysqli,$car_type);
        $this->model_type = mysqli_real_escape_string($this->mysqli,$model_type);
        $this->full_name = mysqli_real_escape_string($this->mysqli,$full_name);
        $this->age = mysqli_real_escape_string($this->mysqli,$age);
        $this->phone_number = mysqli_real_escape_string($this->mysqli,$phone_number);
        $this->email = mysqli_real_escape_string($this->mysqli,$email);
        $this->i_driver = mysqli_real_escape_string($this->mysqli,$i_driver);
        $this->driver_details = mysqli_real_escape_string($this->mysqli,$driver_details);
    }
    public function upload_to_db()
    {
        $query = "INSERT INTO `rent_car` (`id`, `from_date`, `to_date`, `car_type`, `model_type`, `full_name`, `age`, `phone_number`, `email`, `i_driver`, `driver_details`, `creation_time`, `update_time`) 
                  VALUES (NULL, '".$this->from_date."', '".$this->to_date."', '".$this->car_type."', '".$this->model_type."', '".$this->full_name."', '".$this->age."',
                   '".$this->phone_number."', '".$this->email."','".$this->i_driver."' , '".$this->driver_details."', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP)";

        if (!$this->mysqli->query($query)) // the query didn't succeeded
        {
            echo $query;
            /*throw new DbConnectionException("There is a problem adding the data, please turn to your server administrator");*/
        }
        else
        {
            echo "The data entered successfully. A summery mail has been sent to your e-mail address";
        }
    }
    public function send_mail()
    {
        $from = 'Tyco Rent a Car';
        $to = $this->email;
        $subject = 'Summery of your rent order';
        switch($this->car_type)
        {
            case 1:
                $text_car_type =  'Mazda';
                break;
            case 2:
                $text_car_type =  'Honda';
                break;
        }
        switch($this->model_type)
        {
            case 1:
                $text_model_type =  'Mazda Model A';
                break;
            case 2:
                $text_model_type =  'Mazda Model B';
                break;
            case 3:
                $text_model_type =  'Honda Model A';
                break;
            case 4:
                $text_model_type =  'Honda Model B';
                break;
        }
        if($this->i_driver=='on')
        {
            $text_i_driver ='Yes';
        }
        else
        {
            $text_i_driver ='No';
        }
        $message = 'Here are your details:<hr>'.'From date: '.$this->from_date.'<br>'.
            'From date: '.$this->from_date.'<br> 
             To date: '.$this->to_date.'<br>
             Car_type: '.$text_car_type.'<br>
             Model_type: '.$text_model_type.'<br>
             Full Name: '.$this->full_name.'<br>
             Age: '.$this->age.'<br>
             Phone: '.$this->phone_number.'<br>
             Email: '.$this->email.'<br>
             I am the driver?: '.$text_i_driver.'<br>
             Other driver details: '.$this->driver_details.'<br>
             Date and Time of confirmation: '.date("D-M-Y H:i:s",time());
        mail($to,$subject,$message,$from);
    }
}
$from_date = substr($_POST['from_date'],6,4).'-'.substr($_POST['from_date'],0,2).'-'.substr($_POST['from_date'],3,2);
$to_date = substr($_POST['to_date'],6,4).'-'.substr($_POST['to_date'],0,2).'-'.substr($_POST['to_date'],3,2);
$car_type = $_POST['car_type'];
$model_type = $_POST['model_type'];
$full_name = $_POST['full_name'];
$age = $_POST['age'];
$phone_number = $_POST['phone_number'];
$email = $_POST['email'];
$i_driver = isset($_POST['i_driver'])?$_POST['i_driver']:NULL;
$driver_details = isset($_POST['driver_details'])?$_POST['driver_details']:NULL;

/*echo $from_date.' '.$to_date.' '.' '.$car_type.' '.$model_type.' '.$full_name.' '.$age.' '.$phone_number.' '.$email.' '.$i_driver.' '.$driver_details;*/

$ob = new db ($from_date,$to_date,$car_type,$model_type,$full_name,$age,$phone_number,$email,$i_driver,$driver_details);
try
{
    $ob->upload_to_db();
    $ob->send_mail();
}
catch (DbConnectionException $e)
{
    echo "<p>" . $e->getmessage()."</p>";
}


$idImageFileName = "image_" .$_FILES["id_image"]["name"];
$licenseImageFileName = "image_" .$_FILES["license_image"]["name"];
$folder = getcwd() . "/images";

$err = array(
    0=>"There is no error, the file uploaded with success",
    1=>"The uploaded file exceeds the upload_max_filesize directive in php.ini",
    2=>"The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form",
    3=>"The uploaded file was only partially uploaded",
    4=>"No file was uploaded",
    6=>"Missing a temporary folder");
if (is_writable($folder))
{
    if (!empty($_FILES["id_image"]["tmp_name"]) && is_dir($folder))
    {
        if (move_uploaded_file($_FILES["id_image"]["tmp_name"], $folder . "/image_" . $_FILES["id_image"]["name"]))
        {
            echo "<p>Your id image was succefully uploaded!</p>";
        }
        else
        {
            echo $folder . "/image_" . $_FILES["id_image"]["name"]."<br>";
            throw new DbConnectionException ($err[$_FILES['id_image']['error']].' -a');
        }
    }
    else
    {
        echo $folder . "/image_" . $_FILES["id_image"]["name"]."<br>";
        throw new DbConnectionException ($err[$_FILES['id_image']['error']].' -b');
    }

    if (!empty($_FILES["license_image"]["tmp_name"]) && is_dir($folder))
    {
        if (move_uploaded_file($_FILES["license_image"]["tmp_name"], $folder . "/image_" . $_FILES["license_image"]["name"]))
        {
            echo "<p>Your license image was succefully uploaded!</p>";
        }
        else
        {
            echo $folder . "/image_" . $_FILES["license_image"]["name"]."<br>";
            throw new DbConnectionException ($err[$_FILES['id_image']['error']].' -a');
        }
    }
    else
    {
        echo $folder . "/image_" . $_FILES["license_image"]["name"]."<br>";
        throw new DbConnectionException ($err[$_FILES['license_image']['error']].' -b');
    }
}
else
{
    throw new DbConnectionException($folder . "/image_" . $_FILES["id_image"]["name"]."is not accessible for writing<br>");
}
