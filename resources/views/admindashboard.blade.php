<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TMS - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<style>
        :root {
            --primary: #4361ee;
            --secondary: #3f37c9;
            --accent: #4895ef;
            --light: #f8f9fa;
            --dark: #212529;
            --success: #4cc9f0;
            --warning: #f8961e;
            --danger: #f72585;
        }     
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        body {
            background-color: #f5f7fa;
            color: var(--dark);
        }
        
        .dashboard {
            display: grid;
            grid-template-columns: 250px 1fr;
            min-height: 100vh;
        }
        
        /* Sidebar Styles */
        .sidebar {
            background: var(--dark);
            color: white;
            padding: 1.5rem;
        }
        
        .logo {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 2rem;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .logo i {
            color: var(--accent);
        }
        /* Admin Dashboard navigation menu inside the left column */
	#tmsSideMenu {
  	list-style-type: none;
  	padding: 0;
  	margin: 0;
	}
        .nav-menu {
            list-style: none;
        }
        
        .nav-item {
            margin-bottom: 0.5rem;
        }
        
        .nav-link {
            color: white;
            text-decoration: none;
            padding: 0.75rem 1rem;
            border-radius: 5px;
            display: flex;
            align-items: center;
            gap: 10px;
            transition: all 0.3s ease;
        }
        
        .nav-link:hover, .nav-link.active {
            background-color: var(--primary);
        }
        
        /* Main Content Styles */
        .main-content {
            padding: 2rem;
        }
        
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
        }
        
        .search-bar {
            display: flex;
            align-items: center;
            background: white;
            padding: 0.5rem 1rem;
            border-radius: 30px;
            width: 300px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        
        .search-bar input {
            border: none;
            outline: none;
            width: 100%;
            padding: 0.5rem;
        }
        
        .user-profile {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .user-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: var(--accent);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
        }
        /* TMS Bulton */
	.tmsbtn {      
  	border: 1px solid blue;
  	border-radius: 5px;
  	color: white;
  	background:#120EA1;
  	padding: 2.5px;
  	font-weight: bold;
	}

	.tmsbtn:hover {      
  	cursor: pointer;
  	opacity: 1;
	border: 1px solid transparent;
	background:#04AA6D;
	}

        /* TMS Bulton */
	.tmsdelbtn {      
  	border: 1px solid #f44336;
  	border-radius: 5px;
  	color: white;
  	background:#f44336;
  	padding: 2.5px;
  	font-weight: bold;
	}

	.tmseditbtn:hover {      
  	cursor: pointer;
  	opacity: 1;
	border: 1px solid #120EA1;
	background:#120EA1;
	}
	.tmseditbtn {      
  	border: 1px solid #04AA6D;
  	border-radius: 5px;
  	color: white;
  	background:#04AA6D;
  	padding: 2.5px;
  	font-weight: bold;
	}

	.tmsdelbtn:hover {      
  	cursor: pointer;
  	opacity: 1;
	border: 1px solid darkred;
	background: darkred;
	}
	.modelbutton {
  	background-color: #04AA6D;
  	color: white;
  	padding: 14px 20px;
  	margin: 8px 0;
  	border: none;
  	cursor: pointer;
  	width: auto;
  	opacity: 0.9;
	}

	.modelbutton:hover {
 	 opacity:1;
	}

	/* Float cancel and delete buttons and add an equal width */
	.modelcancelbtn, .modeldeletebtn {
  	width: 150px;
	}

	/* Add a color to the cancel button */
	.modelcancelbtn {
  	background-color: #ccc;
  	color: black;
	}

	/* Add a color to the delete button */
   	.modeldeletebtn {
     	background-color: #f44336;
    	}


	/* Add a color to the delete button */
   	.modelcreatebtn {
     	background-color: #120EA1;
    	}
	/* Add a color to the delete button */
   	.modelupdatebtn {
     	background-color: #04AA6D;
    	}
     /* Add padding and center-align text to the container */
	.modalcontainer {
 	 padding: 16px;
 	 text-align: center;
	}
	.tmsnavbar {
  	overflow: hidden;
 	 background-color: #120EF1;
 	 padding:5px;
  	top: 0px;
  	font-weight: bold;
 	 color: #f1f1f1;
	}
	/* The Modal (background) */
	.modal {
  	display: none; /* Hidden by default */
  	position: fixed; /* Stay in place */
  	z-index: 1; /* Sit on top */
  	left: 25%;
  	top: 25%;
  	width: 40%; /* Full width */
  	height: auto; /* Full height */
  	overflow: auto; /* Enable scroll if needed */
  	background-color: rgba(0, 0, 0, 0.8);
  	padding-top:0px 50px 0px 50px;
	}

	/* Modal Content/Box */
	.tmsmodal-content {
  	  background-color:transparent;
   	  margin: 5% auto 5% auto; /* 5% from the top, 15% from the bottom and centered */
  	  border: transparent;
  	  width: 80%; /* Could be more or less, depending on screen size */
  	  color:white;
	}

      /* Style the horizontal ruler */
        hr {
  	 border: 1px solid #f1f1f1;
  	 margin-bottom: 25px;
	}
 
	/* The Modal Close Button (x) */
	.modelclose {
  		right: 0px;
  		position: absolute;
  		top:0px;
		border:1px solid #f44336;
		border-radius:5px;
		cursor-pointer:hand;
		text-1xl; 
		color:white;
		hover:text-white-800;
		cursor-pointer transition duration-200;
		background:#f44336;
		padding:2.5px 10px 1.5px 10px;
		font-wieght:bold;
	}

	.modelclose:hover,
	.modelclose:focus {
  	cursor: pointer;
  	opacity:1;
	}

	/* Clear floats */
	.modelclearfix::before {
  		content: "";
  		clear: both;
  		display: table;
		padding-top:50px;
	}

	/* Change styles for cancel button and delete button on extra small screens */
	   @media screen and (max-width: 300px) {
  	  .cancelbtn, .deletebtn {
     	  width: 100%;
  	 }
	}
        /* Stats Cards */
        .stats-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1.5rem;
            margin-bottom: 2rem;
        }      
        .stat-card {
            background: white;
            padding: 0.5rem;
	    margin:2em;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
	    color:#120EA1;
	    text-align:center;
	    font-size:1.5em;
	    font-wiegth:bold;
	    width:120px;
        }   
	 .stat-card:hover {
            background: var(--accent);
	    color: white;
	    cursor: pointer;
        }
        .stat-card h3 {
            color: #6c757d;
            font-size: 0.9rem;
            margin-bottom: 0.5rem;
        }
        .stat-card p {
            font-size: 1.8rem;
            font-weight: bold;
        }
        .stat-card.total p {
            color: var(--primary);
        }
        
        .stat-card.completed p {
            color: var(--success);
        }
        
        .stat-card.pending p {
            color: var(--warning);
        }
        
        .stat-card.overdue p {
            color: var(--danger);
        }
        
        /* Tasks Section */
        .tasks-container {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 1.5rem;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="bg-gray-100"> 
    <div class="dashboard">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="logo">
                <i class="fas fa-tasks"></i>
                <span>TMS Bolton</span>
            </div>
            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="#" class="nav-link active">
                        <i class="fas fa-home"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-project-diagram text-teal-600 text-xl"></i>
                        <span>Project</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-list text-teal-600 text-xl"></i>
                        <span>Task</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-chart-pie"></i>
                        <span>Profile</span>
                    </a>
                </li>
                    <li>
                    <a href="#" class="nav-link">
                        <i class="fas fa-user-shield"></i>
                        <span> Admin</span>
                    </a>
                        </li>
                    <li>
                    <a href="#" class="nav-link">
                        <i class="fas fa-users"></i>
                        <span> Team </span>
                    </a>
                        </li>
                    <li><a href="#" class="nav-link">
                        <i class="fas fa-comment"></i>
                        <span> Comment </span>
                    </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-cog"></i>
                                <span>Settings</span>
                            </a>
                            </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-sign-out-alt"></i>
                        <span>Logout</span>
                    </a>
                </li>
            </ul>            
        </div> 
        <!-- Main Content -->
        <div class="main-content">

            <div class="header">
		<h2 class="text-1xl font-bold mb-4" style="position:absolute; right:35px !important; top:8px !important; font-style:italic; color:var(--danger);">Welcome to TMS Admin Dashboard</h2>
                <div class="search-bar">
                    <i class="fas fa-search"></i>
                    <input type="text" id="searchInput" placeholder="Search by name..." onkeyup="searchTable()">
                </div>
                <div class="user-profile">
                <div class="user-avatar">PEN</div>
                    <span>Paul Ewaenyi Nwamini</span>
                </div>
            </div>
           <!-- Stats Cards -->
          <div class="stats-container">     
      <div id="manageAdminSection">
    <div class="overflow-x-auto">
        <table cellspacing="20px" class="min-w-full bg-white border border-gray-300 text-sm text-left" id="itemTable" style="border:1px solid transparent; background:transparent;">
            <tbody id="tmsleftpannel">
      	     <tr>
                    <td class="stat-card"><i class="fas fa-user-edit" style="font-size:4em;"></i> <br />Register </td>
		    <td style="bacground:transparent; border:1px solid transparent; width:28px;">&nbsp;</td>
                    <td class="stat-card" style="margin:12px"><i class="fas fa-project-diagram" style="font-size:4em;"></i> <br />Manage Project</td>
                </tr>
		<tr>
                    <td style="bacground:transparent; border:1px solid transparent; hieght:28px;">&nbsp;</td>
	            <td style="bacground:transparent; border:1px solid transparent; hieght:28px;">&nbsp;</td>
                    <td style="bacground:transparent; border:1px solid transparent; hieght:28px;">&nbsp;</td>
                </tr>
		<tr>
                   <td class="stat-card"><i class="fas fa-user-shield" style="font-size:4em;"></i><br />Manage Admin</td>
		    <td style="bacground:transparent; border:1px solid transparent; width:28px;">&nbsp;</td>
                    <td class="stat-card"><i class="fas fa-list" style="font-size:4em;"></i> <br />View Tasks Status</td>
                </tr>
		<tr>
                    <td style="bacground:transparent; border:1px solid transparent; hieght:28px;">&nbsp;</td>
	            <td style="bacground:transparent; border:1px solid transparent; hieght:28px;">&nbsp;</td>
                    <td style="bacground:transparent; border:1px solid transparent; hieght:28px;">&nbsp;</td>
                </tr>
		<tr>
                    <td class="stat-card"><i class="fas fa-users" style="font-size:4em;"></i> <br />Manage Team</td>
	            <td style="bacground:transparent; border:1px solid transparent; width:28px;">&nbsp;</td>
                    <td class="stat-card" onclick="document.getElementById('id01').style.display='block';"><i class="fas fa-comment" style="font-size:4em;"></i> <br />Comment</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
  <script>
    function searchTable() {
      let input = document.getElementById('searchInput');
      let filter = input.value.toLowerCase();
      let table = document.getElementById('itemTable');
      let rows = table.getElementsByTagName('tr');
      for (let i = 1; i < rows.length; i++) {
        let cells = rows[i].getElementsByTagName('td');
        let match = false;        
        for (let j = 0; j < cells.length; j++) {
          if (cells[j].textContent.toLowerCase().includes(filter)) {
            match = true;
            break;
          }
        }
        rows[i].style.display = match ? '' : 'none';
      }
    }
  </script>
</body>
</html>