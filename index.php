<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="tienthanhtrang">
    
    <title>OOP PHP - Nhom 11 Thanh Tien Trang</title>
</head>
<body>
    <div id="wrapper">
        <h1 style="color:dimgray">THANH TIEN TRANG - NHOM 11</h1>
        <?php //IDEA
        require_once("userclass.php");
        $thanhtientrang = new User('Thanh Tien Trang','thanhtientrang@gmail.com');
        echo "<h2>---User info---</h2>";
        echo "UserID:".$thanhtientrang->GetUserID()."<br/>";
        echo "UserName:".$thanhtientrang->GetUserName()."<br/>";
        
        $thanhtientrang1 = new User('Thanh Tien Trang 1','giathanhtientrang@gmail.com');
        echo "<h2>---User info---</h2>";
        echo "UserID:".$thanhtientrang1->GetUserID()."<br/>";
        echo "UserName:".$thanhtientrang1->GetUserName()."<br/>";

        include("employeeclass.php");
        $person_a = new Person("Thanh Tien Trang 2",11);
        echo "<h2>---More OPP PHP---</h2>";
        echo "Person Name:".$person_a->GetName()."<br/>";
        echo "Person ID:".$person_a->GetNationalID()."<br/>";

        echo "<h2>Employee</h2>";
        $employee_a = new Employee("Thanh Tien Trang 3",112,"CNPM");
        echo "Employee ID:".$employee_a->GetEmployeeID()."<br/>";
        echo "Employee Name:".$employee_a->GetName()."<br/>";
        echo "Employee Department:".$employee_a->GetDepartment()."<br/>";

        echo "<h2>More Employee</h2>";
        $employee_b = new Employee("Thanh Tien Trang 4",113,"BMTT");
        echo "<h2>---More OPP PHP---</h2>";
        echo "Employee ID:".$employee_b->GetEmployeeID()."<br/>";
        echo "Employee Name:".$employee_b->GetName()."<br/>";
        echo "Employee Department:".$employee_b->GetDepartment()."<br/><br/>";
        ?>

    </div>
    <footer style="text-align: center; background:black; color:white;
    padding: 20px;"> © 2023 - Nhom 11 ThanhTienTrang</footer>
</body>
</html>