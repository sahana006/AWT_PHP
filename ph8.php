<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reg Form</title>
</head>

<body>
    <div class="left" style="float:left;width:40%;overflow:hidden;">
        <form action="" method="post" enctype="multipart/form-data">
            <label for="fname">First Name</label>
            <input type="text" name="fname" id="fname">
            <br><br>
            <label for="middle">Middle name</label>
            <input type="text" name="middle" id="middle">
            <br><br>
            <label for="last">Last name</label>
            <input type="text" name="last" id="last">
            <br><br>
            <label for="last">Photo</label>
            <input type="file" name="photo" id="photo" accept="image/*">
            <br>
            <br>
            <label for="father">Father's Name</label>
            <input type="text" name="father" id="father">
            <br><br>
            <label for="address">Enter Address</label>
            <textarea name="address" style="vertical-align: middle;" id="address" cols="30" rows="10"></textarea>
            <br><br>
            <label for="contact">Contact Number</label>
            <input type="number" name="contact" id="contact">
            <br><br>
            <label for="email">Email Address</label>
            <input type="email" name="email" id="email">
            <br><br>
            <label for="dob">Date of Birth</label>
            <input type="date" name="dob" id="dob">
            <br><br>
            <label for="gender">Gender</label>
            <br>
            <label for="">Male</label>
            <input type="radio" name="gender" id="gender" value="male">
            <label for="">Female</label>
            <input type="radio" name="gender" id="gender" value="female">
            <br><br>
            <label for="percent">Percentage in Degree</label>
            <input type="number" onkeyup="checkpercent();" name="percent" id="percent">
            <br><br>
            <label for="hobbies">Hobbies</label>
            <br>
            <label for="">Singing</label>
            <input type="checkbox" name="singing" value="singing">
            <label for="">Dancing</label>
            <input type="checkbox" name="dancing" value="dancing">
            <label for="">Drawing</label>
            <input type="checkbox" name="drawing" value="drawing">
            <br><br>
            <label for="institution">Institution Studied</label>
            <input type="text" name="institution" id="institution">
            <br><br>
            <label for="courseStudied">Cource Studied</label>
            <br>
            <label for="">BCA</label>
            <input type="radio" onclick="checkcourse();" name="courseStudied" id="bca" value="BCA">
            <br>
            <label for="">BSc</label>
            <input type="radio" onclick="checkcourse();" name="courseStudied" id="bsc" value="BSc">
            <br>
            <label for="">Bcom</label>
            <input type="radio" onclick="checkcourse();" name="courseStudied" id="bcom" value="Bcom">
            <br>
            <label for="">B.E</label>
            <input type="radio" onclick="checkcourse();" name="courseStudied" id="be" value="B.E">
            <script>
                percentage = 0;

                function checkpercent() {
                    percentage = document.getElementById("percent").value;
                    msc = document.getElementById("msc");
                    mca = document.getElementById("mca");
                    mba = document.getElementById("mba");
                    mtech = document.getElementById("mtech");
                    console.log(percentage);
                    if (percentage > 70) {
                        msc.disabled = false;
                        mca.disabled = false;
                    } else {
                        msc.disabled = true;
                        mca.disabled = true;
                    }
                    if (percentage > 60) {
                        mba.disabled = false;
                    } else {
                        mba.disabled = true;
                    }
                    if (percentage > 40) {
                        mtech.disabled = false;
                    } else {
                        mtech.disabled = true;
                    }
                }

                function checkcourse() {
                    bca = document.getElementById("bca");
                    bcom = document.getElementById("bcom");
                    bsc = document.getElementById("bsc");
                    be = document.getElementById("be");
                    if (be.checked)
                        mtech.disabled = false;
                    else
                        mtech.disabled = true;
                    if (bsc.checked || bca.checked) {
                        msc.disabled = false;
                        mca.disabled = false;
                    } else {
                        msc.disabled = true;
                        mca.disabled = true;
                    }
                }
            </script>

            <br><br>
            <label for="courseOffered">Cource You want</label>
            <br>
            <label for="">MCA</label>
            <input type="radio" name="courseOffered" disabled id="mca" value="MCA">
            <br>
            <label for="">MBA</label>
            <input type="radio" name="courseOffered" disabled id="mba" value="MBA">
            <br>
            <label for="">MTech</label>
            <input type="radio" name="courseOffered" disabled id="mtech" value="MTech">
            <br>
            <label for="">MSc</label>
            <input type="radio" name="courseOffered" disabled id="msc" value="MSc">
            <br><br>
            <input type="submit" name="submit">
            <input type="reset" value="reset">

        </form>
    </div>
    <div class="right">
        <?php

        if (isset($_POST['submit'])) {

            $target_dir = "uploads/";
            $target_file = $target_dir . basename($_FILES["photo"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
            // Check if image file is a actual image or fake image

            if ($uploadOk == 0) {
                echo "Sorry, your file was not uploaded.";
                // if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
                    echo "";
                    // echo "The file " . htmlspecialchars(basename($_FILES["photo"]["name"])) . " has been uploaded.";
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }
    










            echo "<br>First name:\t" . $_POST['fname'];
            echo "<br>Middle name:\t" . $_POST['middle'];
            echo "<br>Last name:\t" . $_POST['last'];
            echo "<br><img src=\"" . $target_file . "\" width=\"300px\">";
            echo "<br>Father's name:\t" . $_POST['father'];
            echo "<br>Address:\t" . $_POST['address'];
            echo "<br>Contact Number:\t" . $_POST['contact'];
            echo "<br>Email:\t" . $_POST['email'];
            echo "<br>Date of Birth:\t" . $_POST['dob'];
            echo "<br>Gender:\t" . $_POST['gender'];
            echo "<br>Percentage in Degree:\t" . $_POST['percent'];
            $hobbies = "";
            if (isset($_POST['singing']))
                $hobbies .= "Singing";
            if (isset($_POST['dancing']))
                $hobbies .= " Dancing";
            if (isset($_POST['drawing']))
                $hobbies .= " Drawing";

            echo "<br>Hobbies:\t" . $hobbies;
            echo "<br>Institution Studied:\t" . $_POST['institution'];
            echo "<br>Course Studied:\t" . $_POST['courseStudied'];
            echo "<br>Course Opted:\t" . $_POST['courseOffered'];
        }


        ?>
    </div>
</body>

</html>