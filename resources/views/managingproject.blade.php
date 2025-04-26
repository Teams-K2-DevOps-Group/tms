<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TMS - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="bg-gray-100">
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
        
        .nav-menu {
            list-style: none;
        }
        
        .nav-item {
            margin-bottom: 0.5rem;
        }
        
	input, textarea {
		width: 100%;
		padding: 10px;
		margin-top: 5px;
		border: 1px solid #ccc;
		border-radius: 5px;
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
        
        /* Stats Cards */
        .stats-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1.5rem;
            margin-bottom: 2rem;
        }
        
        .stat-card {
            background: white;
            padding: 1.5rem;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
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

        }
        
        .task-list {
            background: white;
            border-radius: 10px;
            padding: 1.5rem;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }
        
        .section-header {
            display: flex;
            margin-bottom: 1.5rem;
	    width: 100%;
        }
        
        .section-header h2 {
            font-size: 1.2rem;
        }
        
        .btn {
            background: var(--primary);
            color: white;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s ease;
        }
	.title  {
            background: var(--primary);
            color: white; border: none;
	    border-top-left-radius: 5px; border-top-right-radius: 5px;
            transition: background 0.3s ease;
	    padding: 0.5rem 1rem; with:100% !important;
	    margin: -1.5rem -1.5rem 1.5rem -1.5rem;
	    justify-content: center; text-align: center;
	    font-size:1.5em; font-weight: bold;
        }
        
        .btn:hover {
            background: var(--secondary);
        }
        
        .task-item {
            display: flex;
            align-items: center;
            padding: 1rem 0;
            border-bottom: 1px solid #eee;
        }
        
        .task-item:last-child {
            border-bottom: none;
        }
        
        .task-checkbox {
            margin-right: 1rem;
        }
        
        .task-details {
            flex: 1;
        }
        
        .task-title {
            font-weight: 500;
            margin-bottom: 0.25rem;
        }
        
        .task-meta {
            display: flex;
            gap: 1rem;
            font-size: 0.8rem;
            color: #6c757d;
        }
        
        .task-priority {
            padding: 0.25rem 0.5rem;
            border-radius: 20px;
            font-size: 0.7rem;
            font-weight: bold;
        }
        
        .priority-high {
            background: #ffebee;
            color: var(--danger);
        }
        
        .priority-medium {
            background: #fff8e1;
            color: var(--warning);
        }
        
        .priority-low {
            background: #e8f5e9;
            color: #2e7d32;
        }
        
        /* Activity Feed */
        .activity-feed {
            background: white;
            border-radius: 10px;
            padding: 1.5rem;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }
        
        .activity-item {
            display: flex;
            gap: 1rem;
            padding: 1rem 0;
            border-bottom: 1px solid #eee;
        }
        
        .activity-item:last-child {
            border-bottom: none;
        }
        .btn-submit {
        background-color: #6B7CD2; /* Green color */
        color: white;
        border: none;
        justify-content: center;
        font-size: 16px;
        cursor: pointer;
        border-radius: 5px;
        padding: 10px 20px 10px 30px;
        margin: 5px;
        transition: background-color 0.3s ease-in-out;
        }
        .activity-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: #e3f2fd;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary);
            font-weight: bold;
        }
        
        .activity-details {
            flex: 1;
        }
        
        .activity-message {
            margin-bottom: 0.25rem;
        }
        
        .activity-time {
            font-size: 0.8rem;
            color: #6c757d;
        }
        
        @media (max-width: 992px) {
            .dashboard {
                grid-template-columns: 1fr;
            }
            
            .tasks-container {
                grid-template-columns: 1fr;
            }
            
            .sidebar {
                display: none;
            }
        }
	.input-wrapper {
     	position: relative;
      	display: inline-block;
	width: 100%;
    }
    .input-wrapper input {
      padding:10px 10px 10px 30px; /* Adds space for the icon */
      font-size: 16px;
    }
    .input-wrapper textarea{
      padding:10px 10px 10px 30px; /* Adds space for the icon */
      font-size: 16px;
    }
    .input-wrapper i {
      position: absolute;
      left: 10px;
      top: 80%;
      transform: translateY(-80%);
    }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
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
                    <a href="{{route('managingproject')}}" class="nav-link">
                        <i class="fas fa-project-diagram"></i>
                        <span>Project</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('managingtask')}}" class="nav-link">
                        <i class="fas fa-tasks"></i>
                        <span>Task</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('managingprofile')}}" class="nav-link">
                        <i class="fas fa-user-alt"></i>
                        <span>Profile</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('settings')}}" class="nav-link">
                        <i class="fas fa-cog"></i>
                        <span>Settings</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('login')}}" class="nav-link">
                        <i class="fas fa-sign-out-alt"></i>
                        <span>Logout</span>
                    </a>
                </li>
            </ul>
        </div>
        
        <!-- Main Content -->
        <div class="main-content">
            <div class="header">
		<div class="search-bar">
                    <i class="fas fa-search"></i>
                    <input type="text" placeholder="Search tasks...">
                </div>
                <div class="user-profile">
                    <div class="user-avatar">PEN</div>
                    <span>Paul Ewaenyi Nwamini</span>
                </div>
            </div>                      
            <!-- Tasks and Activity -->
            <div class="tasks-container">
		<div class="task-list">
		<form action =" " method="POST"> 
                  <div class="title">Managing Project</div>
		    <div class="form-label" style="margin:-20px 0px 25px 0px; color:#6B7CD2">Kindly complete the form accurately and remember that all fields marked with <font style="color:#FE0505">*</font> are required. <br claer="all" /></div>
		    <div class="input-wrapper">
                    <label for="full_name" class="form-label">Project Name <font style="color:#FE0505">*</font></label>
			<i class="fas fa-project-diagram"></i>
                       <input type="text" name="pro_name" class="form-control" required>
                    </div>

		    <div class="input-wrapper">
                    <label for="full_name" class="form-label">Description<font style="color:#FE0505">*</font></label>
			<i class="fa fa-clipboard-list"></i>
			<textarea rows="5" name="pro_desc" class="form-control" required></textarea>
                    </div>
		    <div class="input-wrapper">
                    <label for="full_name" class="form-label">Project Slug <font style="color:#FE0505">*</font></label>
			<i class="fa fa-key"></i>
                       <input type="text" name="pro_slug" class="form-control" required>
                    </div>
		    <div class="input-wrapper">
                    <label for="full_name" class="form-label">Date <font style="color:#FE0505">*</font></label>
			<i class="fa fa-calendar-alt"></i>
                       <input type="date" name="pro_date" class="form-control" required>
                    </div>		
		    <div class="input-wrapper">
                    <label for="full_name" class="form-label">Date <font style="color:#FE0505">*</font></label>
			<i class="fa fa-calendar-check"></i>
                       <input type="date" name="pro_deadline" class="form-control" required>
                    </div>
		<div class="mb-3"><br /></div>
              <p style="text-align:center; padding:5px 0px;"> <button class="btn-submit" style="width:120px !important;">  Create </button> &nbsp; <input type="reset" style="width:120px !important;" class="btn-submit" value="Cancel" /></p> <br />
                
	     </form>
            </div>
        </div>
    </div>

    <script>
        // Simple checkbox toggle functionality
        document.querySelectorAll('.task-checkbox').forEach(checkbox => {
            checkbox.addEventListener('change', function() {
                const taskItem = this.closest('.task-item');
                if (this.checked) {
                    taskItem.style.opacity = '0.7';
                } else {
                    taskItem.style.opacity = '1';
                }
            });
        });
    </script>
   
</body>
</html>