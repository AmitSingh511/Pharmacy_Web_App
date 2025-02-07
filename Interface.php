<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <link rel="stylesheet" href="static/Interface.css">
    <title>Document</title>
</head>

<body>
    <nav class="navbar">
        <h1><i class="fa-solid fa-stethoscope"></i>PMS</h1>
        <ul class="nav_list">
            <div>
                <li><a href="#" onclick="load('Dashboard.php')"><i class="fas fa-tv"></i> Dashboard</a></li>
                <li><a href="#" onclick="load('sales.php')"><i class="fa-solid fa-magnifying-glass"></i>Invoice</a></li>
                <li><a href="#" onclick="load()"><i class="fa-solid fa-warehouse"></i>MedicineInventory</a></li>
            </div><br>
            <div>
                <p>Medicine</p>
                <li><a href="#" onclick="load('manage_medications.php')"><i class="fa-solid fa-pills"></i>ManageMedicine</a></li>
            </div><br>
            <div>
                <p>Pharmacist</p>
                <li><a href="#" onclick="load()"><i class="fa-solid fa-user"></i>AddPharmacist</a></li>
                <li><a href="#" onclick="load()"><i class="fa-solid fa-briefcase"></i>ManagePharmacist</a></li>
            </div><br>
            <div>
                <p>Reports</p>
                <li><a href="#" onclick="load()"><i class="fa-solid fa-chart-simple"></i>StackReports</a></li>
                <li><a href="#" onclick="load()"><i class="fa-solid fa-receipt"></i>SalesReports</a></li>
            </div>
        </ul>
    </nav>
    <iframe class="contents" id="content" src="Dashboard.php" frameborder="0"></iframe>
</body>

<script>
    function load(url) {
        document.getElementById("content").src = url;
    }
</script>

</html>