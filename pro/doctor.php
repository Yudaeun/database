<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Tables - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
	<div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">

        <button type="button" class="btn btn-primary active" id="btn"
	onclick="document.location.href='main.html'">Main</button>

    </nav>
  </div>
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            
            <!-- Sidebar Toggle-->
           
            <!-- Navbar Search-->
           
            <!-- Navbar-->
            
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                           
                           
                           
                            
                          
                            
                            
                           
                            
                            
                        </div>
                    </div>
                    
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">의사 조회</h1>
                        <ol class="breadcrumb mb-4">
                            
                            
                        </ol>
                        <div class="card mb-4">
                           
                        </div>
                        <div class="card mb-4">
                            
                            <div class="card-body">
<table id='datatablesSimple'>
<?php
	$con = mysqli_connect("localhost", "root", "21912165", "dump20211126") or die("MySQL 접속 실패 !!");

	$sql = "SELECT * FROM publictbl WHERE license_number IS NOT NULL ";
 
   $ret = mysqli_query($con, $sql);   
   echo "<thead><tr><th>name</th><th>SSN</th><th>gender</th><th>address</th><th>phone_number</th><th>license_number</th><th>vaccination</th><th>confirmed</th><th>physicianSSN</th><th>exam_date</th><th>delete</th></tr></thead><tbody>";
 while($row = mysqli_fetch_array($ret)) {
	  echo "<tr><td>", $row['name'], 
	  "</td><td>", $row['SSN'], 
	  "</td><td>", $row['gender'], 
	 "</td><td>", $row['address'], 
	 "</td><td>", $row['phone_number'], 
	"</td><td>", $row['license_number'], 
	"</td><td>", $row['vaccination'], 
	"</td><td>", $row['confirmed'], 
	"</td><td>", $row['physicianSSN'], 
	"</td><td>", $row['exam_date'],
	
		   "</td></tr>";
   }   
  echo "</tbody></table>";	
?>						
                             
                            </div>
                        </div>
                    </div>
                </main>
                
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
