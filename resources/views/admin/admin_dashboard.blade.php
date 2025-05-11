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
            grid-template-columns: 2fr 1fr;
            gap: 1.5rem;
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
                <span>TMS</span>
            </div>
            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="#" class="nav-link">
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
                        <i class="fas fa-list text-indigo-500 text-2xl"></i>
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
                    <a href="#" class="nav-link active" onclick="showManageAdmin()">
                        <i class="fas fa-user"></i>
                        <span>Manage Admin</span>
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
                        <i class="fas fa-sign-out-alt text-2xl text-red-600"></i>
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
                    <input type="text" placeholder="Search Projects...">
                </div>
                <div class="user-profile">
                    <div class="fas fa-user-shield text-blue-600 text-2xl"></div>
                    <span>Add Admin</span>
                </div>
            </div>
            
    
           <!-- Stats Cards -->
           <div class="stats-container">
                  
<div id="manageAdminSection" class="hidden mt-6">
    <h2 class="text-2xl font-bold mb-4">Manage Admin</h2>
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-300 text-sm text-left">
            <thead class="bg-gray-200">
                <tr>
                    <th class="px-4 py-2 border">S/N</th>
                    <th class="px-4 py-2 border">Name</th>
                    <th class="px-4 py-2 border">Email</th>
                    <th class="px-4 py-2 border">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr class="hover:bg-gray-100">
                    <td class="px-4 py-2 border">1</td>
                    <td class="px-4 py-2 border">Friday</td>
                    <td class="px-4 py-2 border">fen1crt@bolton.ac.uk</td>
                    <td class="px-4 py-2 border">
                        <label><input type="checkbox" class="mr-1">Edit</label>
                        <label class="ml-3"><input type="checkbox" class="mr-1">Delete</label>
                    </td>
                </tr>
                <tr class="hover:bg-gray-100">
                    <td class="px-4 py-2 border">2</td>
                    <td class="px-4 py-2 border">Godstime</td>
                    <td class="px-4 py-2 border">godstimeonye2@gmail.com</td>
                    <td class="px-4 py-2 border">
                        <label><input type="checkbox" class="mr-1">Edit</label>
                        <label class="ml-3"><input type="checkbox" class="mr-1">Delete</label>
                    </td>

                </tr>
                <tr class="hover:bg-gray-100">
                    <td class="px-4 py-2 border">3</td>
                    <td class="px-4 py-2 border">Paul</td>
                    <td class="px-4 py-2 border">peninternational@ymail.com</td>
                    <td class="px-4 py-2 border">
                        <label><input type="checkbox" class="mr-1">Edit</label>
                        <label class="ml-3"><input type="checkbox" class="mr-1">Delete</label>
                    </td>

                </tr>
                <tr class="hover:bg-gray-100">
                    <td class="px-4 py-2 border">4</td>
                    <td class="px-4 py-2 border">Matthew</td>
                    <td class="px-4 py-2 border">num1crt@bolton.ac.uk</td>
                    <td class="px-4 py-2 border">
                        <label><input type="checkbox" class="mr-1">Edit</label>
                        <label class="ml-3"><input type="checkbox" class="mr-1">Delete</label>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- 3. Add this JS script at the bottom of the body -->
<script>
    function showManageAdmin() {
        const section = document.getElementById('manageAdminSection');
        if (section.classList.contains('hidden')) {
            section.classList.remove('hidden');
            section.scrollIntoView({ behavior: 'smooth' });
        } else {
            section.classList.add('hidden');
        }
    }
</script>

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