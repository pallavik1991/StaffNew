<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/scss/style.css">
    <link href="assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
	
</head>
<body>
	     <!-- Left Panel -->

        <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
              
                <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.html"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <h3 class="menu-title">Register</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Register</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><a href="addacademicyear.html">New Academic Year</a></li>
                           <li><a href="viewacademicyears.html">View Academic Year</a></li>
                             <li><a href="addsubject.html">Add Subject</a></li>
                           <li><a href="view_subject.html">View Subject</a></li>
                            <li><a href="add_classdivision.html">Class and Division</a></li>
                           <li><a href="view_classdivision.html">View Class and Division</a></li>
                            <li><a href="add_fees.html">Add Fees</a></li>
                           <li><a href="view_feesmaster.html">View Fees</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Student Admission</a>
                        <ul class="sub-menu children dropdown-menu">
                             <li><a href="addnewstudent.html">Add Student</a></li>
                           <li><a href="viewstudents.html">View View Student</a></li>
                             <li><a href="newadmission.html">New Admission</a></li>
                           <li><a href="view_admission.html">View Admission</a></li>
                            <li><a href="add_fees_receipt.html">Fees </a></li>
                           <li><a href="view_receipt.html">View Fees</a></li>
                          <li><a href="idcard.php">Generate ID Cards Fees</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Batch Allot</a>
                        <ul class="sub-menu children dropdown-menu">
                               <li><a href="create_batch.html">Create Batch</a></li>
                           <li><a href="view_batches.html">View Batch</a></li>
                            <li><a href="allot_subject_teacher.html">Allot Teacher </a></li>
                           <li><a href="viewsubject_teacher.html">View Allot Teacher</a></li>
                        </ul>
                    </li>
                      <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bar-chart"></i>Attendance</a>
                        <ul class="sub-menu children dropdown-menu">
                             <li><a href="add_attendance.html">Attendance</a></li>
                           <li><a href="view_attendance.html">View Attendance</a></li>
                          
                        </ul>
                    </li> 
                    <li>
                        <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-paper-plane"></i>Transportation</a>
                       
                    </li>  
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-area-chart"></i>Reports</a>
                        <ul class="sub-menu children dropdown-menu">
                             <li><a href="beoreport.html">BEO Report</a></li>
                           <li><a href="view_attendance.html">Attendance Report</a></li>
                          
                        </ul>
                    </li> 
                    <li>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Exam and Result</a>
                     
                        
                    </li>    
                    <li>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-pie-chart"></i>HR Management</a>
                     
                        
                    </li>    
                     <li>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-fort-awesome"></i>School Activities</a>
                     
                        
                    </li> 
                       <li>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-book"></i>Teachers Committee</a>
                     
                        
                    </li>    
                       <li>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-puzzle-piece"></i>Teachers & Parents Ineraction</a>
                     
                        
                    </li>      
                            <li>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-pie-chart"></i>School Inventory</a>
                     
                        
                    </li> 
                             <li>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-id-badge"></i>School Alumni</a>
                     
                        
                    </li> 
                  

                   
                    
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                      
                        

                        

                       
                    </div>
                </div>

               <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <img src="images/logo.png" alt="Logo" width="250px" height="">
                        </a>

                        <div class="user-menu dropdown-menu">
                             
                        </div>
                    </div>

                    

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            
        </div>

        <div class="content mt-3">
	<center><h1>Edit Staff</h1></center>
	<form method="POST">
        <table  align="center">
             <tr>
                <td>Select Staff Name</td>
                <td>
                    <select id="ddlselectname">
                        <option>--select--</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Staff Code</td>
                <td>
                    <input type="text" name="txtstaffcode" id="txtstaffcode" tabindex="1" readonly="true">
                </td>
            </tr>
            <tr>
                <td>Staff Name</td>
                <td>
                    <input type="text" name="txtname" id="txtname" tabindex="2">
                </td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>
                    <input type="text" name="txtgender" id="txtgender" tabindex="3">
                </td>   
            </tr>
            <tr>
                <td>Designation</td>
                <td>
                    <input type="text" name="txtdesignation" id="txtdesignation" tabindex="4">
                </td>
            </tr>
            <tr>
                <td>BirthDate</td>
                <td>
                    <input type="date" name="txtdob" id="txtdob" tabindex="5">
                </td>
            </tr>
            <tr>
                <td>Address</td>
                <td>
                    <textarea name="txtaddress" id="txtaddress" tabindex="6"></textarea>
                </td>
            </tr>
            <tr>
                <td>Mobile Number</td>
                <td>
                    <input type="number" name="txtmobile" id="txtmobile" tabindex="7">
                </td>
            </tr>
            <tr>
                <td>Adhaar Number</td>
                <td>
                    <input type="text" name="txtadhaar" id="txtadhaar" tabindex="8">
                </td>
            </tr>
            
            <tr>
                <td>Highest Qualification</td>
                <td>
                    <input type="text" name="txtqualification" id="txtqualification" tabindex="9">
                </td>
            </tr>
            <tr>
                <td>BloodGroup</td>
                <td>
                    <input type="text" name="txtbloodgroup" id="txtbloodgroup" tabindex="10">
                </td>
            </tr>
            <tr>
                <td>Father Name</td>
                <td>
                    <input type="text" name="txtfathername" id="txtfathername" tabindex="11">
                </td>
            </tr>
            <tr>
                <td>Mother Name</td>
                <td>
                    <input type="text" name="txtmothername" id="txtmothername" tabindex="12">
                </td>
            </tr>
            <tr>
                <td>Father Adhaar Number</td>
                <td>
                    <input type="text" name="txtfatheradhaar" id="txtfatheradhaar" tabindex="13">
                </td>
            </tr>
            <tr>
                <td>Mother Adhaar Number</td>
                <td>
                    <input type="text" name="txtmotheradhaar" id="txtmotheradhaar" tabindex="14">
                </td>
            </tr>
            
            <tr>
                <td>Previous Experiences?</td>
                <td>
                    <input type="text" name="txtprevexp" id="txtprevexp" tabindex="15">
                </td>
            </tr>
            <tr>
                <td>Experience Years</td>
                <td>
                    <input type="number" name="txtexp" id="txtexp" tabindex="16">
                </td>
            </tr>
            <tr>
                <td>Previous School Name</td>
                <td>
                    <input type="text" name="txtprevschool" id="txtprevschool" tabindex="17">
                </td>
                 <td>Previous School Code</td>
                <td>
                    <input type="text" name="txtprevschoolcode" id="txtprevschoolcode" tabindex="18">
                </td>
            </tr>
            <tr>
                <td>Previous School Address</td>
                <td>
                    <textarea name="txtprevschooladdr" id="txtprevschooladdr" tabindex="19"></textarea>
                </td>
            </tr>
                <tr>
                <td><input type="button" name="btnsave" id="btnsave" value="Save Changes" tabindex="20" /></td>
                <td><input type="reset" name="btncancel" id="btncancel" value="Cancel" /></td>
            </tr>
        
        </table>
        
    </form>
    <br>
    <center><font color="red"><div id="div1">
    </div></font></center>



        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="assets/js/lib/chart-js/Chart.bundle.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.min.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="assets/js/lib/vector-map/country/jquery.vmap.world.js"></script>
    <script>
        ( function ( $ ) {
            "use strict";

            jQuery( '#vmap' ).vectorMap( {
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: [ '#1de9b6', '#03a9f5' ],
                normalizeFunction: 'polynomial'
            } );
        } )( jQuery );
    </script>
    

    <script>
        $(document).ready(function(){

             $.ajax({
                url:"dal_viewstaff.php",
                type:"GET",
                success:function(data){

                        result=JSON.parse(data);
                    
                        var ddlstaff=document.getElementById("ddlselectname");

                        for(var i=0;i<result.length;i++)
                        {
                            var staffname=result[i].name;
                            var opt=document.createElement("option");
                            opt.value=staffname;
                            opt.text=staffname;
                            ddlstaff.appendChild(opt);
                        }


                }
            }); 

             $("#ddlselectname").change(function(){

                var staffname=document.getElementById("ddlselectname").value;

                $.ajax({
                url:"dal_get_staffdetails.php",
                type:"POST",
                data:({
                        param_name:staffname
                }),
                success:function(data){

                        result=JSON.parse(data);
                    
                       document.getElementById("txtname").value=result[0].name;
                       document.getElementById("txtstaffcode").value=result[0].staffcode;
                       document.getElementById("txtgender").value=result[0].gender;
                       document.getElementById("txtdesignation").value=result[0].designation;
                       document.getElementById("txtdob").value=result[0].birth_date;
                       document.getElementById("txtaddress").value=result[0].address;
                       document.getElementById("txtmobile").value=result[0].mobileno;
                       document.getElementById("txtadhaar").value=result[0].aadhaar_number;
                       document.getElementById("txtqualification").value=result[0].qualification;
                       document.getElementById("txtprevexp").value=result[0].previous_experiences;
                       document.getElementById("txtexp").value=result[0].experienceyears;
                       document.getElementById("txtprevschool").value=result[0].previous_schoolname;
                       document.getElementById("txtprevschoolcode").value=result[0].previous_schoolcode;
                       document.getElementById("txtprevschooladdr").value=result[0].previous_schooladdress;
                       document.getElementById("txtdob").value=result[0].bloodgroup;
                       document.getElementById("txtdob").value=result[0].father_name;
                       document.getElementById("txtdob").value=result[0].mother_name;
                       document.getElementById("txtdob").value=result[0].father_aadhaar_number;
                       document.getElementById("txtdob").value=result[0].mother_aadhaar_number;


                        


                }
            }); 


             });


            $("#btnsave").click(function(){
                var name="",staffcode="",gender="",designation="",birthdate="",qualification="",experience="",adhaarno="",bloodgp="",address="",expyears="",prevschool="",prevschooladdress="",prevschoolcode="",mobile="",fathername="",mothername="",fatheradhaar="",motheradhaar="";

                name=document.getElementById("txtname").value;
                staffcode=document.getElementById("txtstaffcode").value;
                gender=document.getElementById("txtgender").value;
                designation=document.getElementById("txtdesignation").value;
                birthdate=document.getElementById("txtdob").value;
                qualification=document.getElementById("txtqualification").value;
                adhaarno=document.getElementById("txtadhaar").value;
                bloodgp=document.getElementById("txtbloodgroup").value;
                address=document.getElementById("txtaddress").value;
                mobile=document.getElementById("txtmobile").value;
                fathername=document.getElementById("txtfathername").value;
                mothername=document.getElementById("txtmothername").value;
                fatheradhaar=document.getElementById("txtfatheradhaar").value;
                motheradhaar=document.getElementById("txtmotheradhaar").value;
                experience=document.getElementById("txtprevexp").value;
                prevschool=document.getElementById("txtprevschool").value;
                expyears=document.getElementById("txtexp").value;
                prevschooladdress=document.getElementById("txtprevschooladdr").value;
                prevschoolcode=document.getElementById("txtprevschoolcode").value;
                
                  $.ajax({
                  type: "POST",
                  url: 'dal_updatestaff.php',
                  data: ({
                    param_name:name,
                    param_staffcode:staffcode,
                    param_gender:gender,
                    param_designation:designation,
                    param_birthdate:birthdate,
                    param_qualification:qualification,
                    param_exp:experience,
                    param_adhaar:adhaarno,
                    param_bloodgp:bloodgp,
                    param_address:address,
                    param_expyears:expyears,
                    param_prevschool:prevschool,
                    param_prevschooladdress:prevschooladdress,
                    param_prevschoolcode:prevschoolcode,
                    param_mobile:mobile,
                    param_fathername:fathername,
                    param_mothername:mothername,
                    param_fatheradhaar:fatheradhaar,
                    param_motheradhaar:motheradhaar
                    }),
                  success: function(data) {
                   document.getElementById("div1").innerHTML=data;
                   /*document.getElementById("txtname").value="";
                   document.getElementById("txtname").focus();*/
                  } 
                }); 
                });   
        });
    </script>

</body>
</html>