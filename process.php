<?php
include 'config.php';

if (isset($_POST['submit'])) {
    $name              = $_POST['name'];
    $profession             = $_POST['profession'];
    $entry             = $_POST['entry_on'];
    $type              = $_POST['entry_type'];
    $password          = $_POST['password'];
    $profilepic        = $_FILES['profile_pic']['name'];
    $sname           = $_POST['short_name'];
    $target            = 'img/';
    $target1            = 'dashboard/img/';

    if (!move_uploaded_file($_FILES['profile_pic']['tmp_name'], "$target".$profilepic)) {
        echo "<div class='error'>The files is not uploaded</div>";
    }

    if (!move_uploaded_file($_FILES['profile_pic']['tmp_name'], "$target1".$profilepic)) {
        echo "<div class='error'>The files is not uploaded</div>";
    }

/* if (strlen($uname) != 8) {
    echo "<div class='error'> Username Must Contain 8 Characters</div>";
 } else if (!preg_match('/^[a-zA-Z][a-zA-Z0-9]{6,15}$/', $uname)) {
    echo "<div class='error'> Username Must Start With Letter and Contain Numbers and alphabets Only</div>";
 }
 die;*/

  $sql = "insert into contestants(name,profession,entry_on,entry_type,profile_pic,short_name) values('$name', '$profession', '$entry', '$type','$profilepic', '$sname')";
    $res = mysqli_query($con, $sql);

    if ($res) {
        echo "<div class='successs'> Your Contenstant Has Been Successfully Created.. Please Login</div>";
        echo "<p class='successs'> You will be redircted in <span id='counter'>5</span> second(s)";
    /*header("refresh:5,login1.php");*/
    } else {
        echo "<div class='error'>Error:".mysqli_error($con).'</div>';
    }
}

?>
<script type="text/javascript">
        function countdown() {
            var i = document.getElementById('counter');
            if (parseInt(i.innerHTML)<=0) {
                location.href = 'index.php?short_name='<?php echo $sname; ?>;
            }
            i.innerHTML = parseInt(i.innerHTML)-1;
        }
        setInterval(function(){ countdown(); },1000);
        </script>