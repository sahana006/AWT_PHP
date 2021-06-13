<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculate Salary</title>
</head>

<body>
    <div class="left" style="float:left;width:40%;overflow:hidden;">
        <form action="" method="POST" enctype="multipart/form-data">

            <label for="emppic">emppic</label>
            <input type="file" name="photo" id="emppic" accept="image/*">
            <br><br>

            <label for="empno">empno</label>
            <input type="text" name="empno" id="empno">
            <br><br>

            <label for="empfname">empfname</label>
            <input type="text" name="empfname" id="empfname">
            <br><br>

            <label for="emplname">emplname</label>
            <input type="text" name="emplname" id="emplname">
            <br><br>

            <label for="address">address</label>
            <textarea name="address" style="vertical-align: middle;" id="address" cols="30" rows="10"></textarea>
            <br><br>

            <label for="gender">Gender</label>
            <br>
            <label for="">Male</label>
            <input type="radio" name="gender" id="gender" value="male">
            <label for="">Female</label>
            <input type="radio" name="gender" id="gender" value="female">
            <br><br>

            <label for="designation">designation</label>
            <input type="text" name="designation" id="designation">
            <br><br>

            <label for="contact">Contact Number</label>
            <input type="number" name="contact" id="contact">
            <br><br>

            <label for="empcat">empcat</label>
            <select name="empcat" id="empcat" onchange="checkcat();">
                <option value="parttime">parttime</option>
                <option value="fulltime">fulltime</option>
                <option value="contract">contract</option>
            </select>
            <br><br>
            <div id="hours">
                <label for="noofhours">noofhours</label>
                <input type="number" name="noofhours" id="noofhours">
                <br><br>
            </div>
            <div id="basicdiv">
                <label for="basicsalary">basicsalary</label>
                <input type="number" name="basicsalary" id="basicsalary">
                <br><br>
            </div>
            <script>
                elemnt = document.getElementById('hours');
                dropdwn = document.getElementById('empcat');
                basic = document.getElementById('basicdiv');
                basic.style.display = "none";

                function checkcat() {
                    var categoryOfEmpoyee = dropdwn.options[dropdwn.selectedIndex].text;
                    if (categoryOfEmpoyee != "parttime") {
                        elemnt.style.display = "none";
                        basic.style.display = "inline-block";
                    } else {
                        elemnt.style.display = "inline-block";
                        basic.style.display = "none";

                    }

                }
            </script>
            <br>

            <input type="submit" name="submit" value="submit">
            <input type="reset" value="reset">
        </form>
    </div>
    <div class="right" style="float:right;width:60%;overflow:hidden;">
        <?php
        if (isset($_POST['submit'])) {
            $name       = $_FILES['photo']['name'];
            $temp_name  = $_FILES['photo']['tmp_name'];
            if (isset($name) and !empty($name)) {
                $location = './uploads/';
                if (move_uploaded_file($temp_name, $location . $name)) {
                    echo 'File uploaded successfully';
                } else
                    echo "error";
            } else {
                echo 'You should select a file to upload !!';
            }



            echo "<br><img src=\"" . $location . $name . "\" width=\"200px\">";

            echo "<br><br>Employee no : " . $_POST['empno'];
            echo "<br><br>Employee first name : " . $_POST['empfname'];
            echo "<br><br>Employee last name : " . $_POST['emplname'];
            echo "<br><br>Employee address : " . $_POST['address'];
            echo "<br><br>Employee Gender : " . $_POST['gender'];
            echo "<br><br>Employee designation : " . $_POST['designation'];
            echo "<br><br>Employee Contact Number : " . $_POST['contact'];
            echo "<br><br>Employee Category : " . $_POST['empcat'];
            $basic = 0;
            if ($_POST['empcat'] == "parttime")
                echo "<br><br>Employee No. of hours : " . $_POST['noofhours'];
            else {
                echo "<br><br>Employee Basic salary : " . $_POST['basicsalary'];
                $basic = $_POST['basicsalary'];
            }
            $da = 0;
            $hra = 0;
            $net = 0;
            $pf = 0;
            $tax = 0;
            $gross = 0;
            if ($_POST['empcat'] == "parttime") {
                echo "<br><br>Employee Salary : Rs. " . $_POST['noofhours'] * 100;
            } else {
                if ($_POST['empcat'] == "fulltime") {
                    if ($basic < 10000) {
                        $da = 0.45 * $basic;
                        $hra = 0.1 * $basic;
                        $pf = 0;
                        $tax = 0;
                    } else if ($basic >= 10000 && $basic < 5000) {
                        $da = 0.75 * $basic;
                        $hra = 0.2 * $basic;
                        $pf = 1200;
                        $tax = 0.5 * $basic;
                    } else {
                        $da = 0.90 * $basic;
                        $hra = 0.3 * $basic;
                        $pf = 0.05 * $basic;
                        $tax = 0.15 * $basic;
                    }
                } else {
                    if ($basic < 5000) {
                        $da = 200;
                        $hra = 0;
                        $pf = 0;
                        $tax = 0;
                    } else if ($basic >= 5000 && $basic <= 25000) {
                        $da = 0.15 * $basic;
                        $hra = 1000;
                        $pf = 0;
                        $tax = 0.03 * $basic;
                    } else {
                        $da = 0.20 * $basic;
                        $hra = 0.05 * $basic;
                        $pf = 0.05 * $basic;
                        $tax = 0.09 * $basic;
                    }
                }
                echo "<br><br>DA : " . $da;
                echo "<br><br>HRA : " . $hra;
                echo "<br><br>PF : " . $pf;
                echo "<br><br>Tax : " . $tax;
                $gross = $basic + $hra + $da;
                $net = $gross - $pf - $tax;
                echo "<br><br>Gross Pay : " . $gross;
                echo "<br><br>Net Pay : " . $net;
            }
        }
        ?>
    </div>
</body>

</html>