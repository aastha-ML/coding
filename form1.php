<html>
<head>
<title>Welcome to PHP</title>
<style>
.form{
            border: 5px solid red;
            width: 40%;
            padding: 30px;
            margin-left:400px;
            margin-top:1px;
            border-radius:5px;
        }
        h1{
            text-align:center;
        }
        form{
            font-weight: 600;
        }
        form input{
            border: 1px solid black;
            padding: 5px;
            border-radius: 5px;
            margin-left: 50px;
            margin-top: 30px;
        }
        form input:child{
            margin-left: 60px;            
        }
        
        table{
            margin-top:50px;
            margin-left:250px;
            margin-bottom:250px;
            margin-right:250px;
            /* display:none; */
        }
        table,th,td{
            border-collapse:collapse;
            border:1px solid black;
            padding:10px;
        }
        th{
            colspan:2;
        }
</style>
</head>
<body>
<div class="form">
    <h1>Application Form</h1>
<form method="GET">
        NAME <input type="text" name="name" placeholder="Enter your Name" required><br><br>
        EMAIL <input type="email" name="mail" placeholder="Enter your Email" required><br><br>
        CONTACT <input type="text" name="contact" placeholder="Enter your Contact" required style="margin-left:15px;"><br><br>
        CITY <input type="text" name="city" placeholder="Enter your City" required style="margin-left:60px;"><br><br>
        COURSE <input type="text" name="course" placeholder="Enter your course" required style="margin-left:28px;"><br><br>
        HOBBIES <input type="text" name="hobbies" placeholder="Enter your hobbies" required style="margin-left:10px;"><br><br>
        <input type="submit" value="Submit" name="submit" id="btn" style="margin-left:150px;">
    </form>
</div>     
<?php
if(isset($_GET['submit'])){
    $name=$_GET['name'];
    $email=$_GET['mail'];
    $contact=$_GET['contact'];
    $city=$_GET['city'];
    $course=$_GET['course'];
    $hobbies=$_GET['hobbies'];
    echo "<table><tr><th >Name</th><th>Email</th><th>Contact</th><th>City</th><th>Course</th><th>Hobbies</th></tr>
    <tr><td>$name</td><td>$email</td><td>$contact</td><td>$city</td><td>$course</td><td>$hobbies</td></tr></table>";
}
?>
<script>
var btn=document.getElementById('btn');
btn.addEventListener('click',function(){
if(table.style.display==="none"){
    table.style.display="block";
}
})
</script>
</body>
</html>