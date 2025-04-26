@include('header')

            
            <!-- Stats Cards -->
            <div class="stats-container">
                <div class="stat-card total">
                    <h3>Total Tasks</h3>
                    <p>2</p>
                </div>
                <div class="stat-card completed">
                    <h3>Completed</h3>
                    <p>3</p>
                </div>
                <div class="stat-card pending">
                    <h3>Pending</h3>
                    <p>2</p>
                </div>
                <div class="stat-card overdue">
                    <h3>Overdue</h3>
                    <p>1</p>
                </div>
            </div>
            
           <!-- Stats Cards -->
           <div class="stats-container">
                <div class="stat-card total">
                    <h3>Total Project</h3>
                    <p>2</p>
                </div>
                <div class="stat-card completed">
                    <h3>Completed</h3>
                    <p>3</p>
                </div>
                <div class="stat-card pending">
                    <h3>Pending</h3>
                    <p>2</p>
                </div>
                <div class="stat-card overdue">
                    <h3>Overdue</h3>
                    <p>1</p>
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