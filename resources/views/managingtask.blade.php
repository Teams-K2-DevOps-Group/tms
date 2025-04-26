@include('header')        
            <!-- Tasks and Activity -->
            <div class="tasks-container">
		<div class="task-list">
		<form action =" " method="POST"> 
                  <div class="title">Managing Task</div>
		    <div class="form-label" style="margin:-20px 0px 25px 0px; color:#6B7CD2">Please ensure you fill out the form properly and note that all fields marked with <font style="color:#FE0505">*</font> are required. <br claer="all" /></div>

		    <div class="input-wrapper">
                    <label for="full_name" class="form-label">Task Name <font style="color:#FE0505">*</font></label>
			<i class="fas fa-tasks"></i>
                       <input type="text" name="task_name" class="form-control" required>
                    </div>

		    <div class="input-wrapper">
                    <label for="full_name" class="form-label">Description<font style="color:#FE0505">*</font></label>
			<i class="fa fa-clipboard-list"></i>
			<textarea rows="5" name="task_desc" class="form-control" required></textarea>
                    </div>
		    <div class="input-wrapper">
                    <label for="full_name" class="form-label">Asign To <font style="color:#FE0505">*</font></label>
			<i class="fa fa-user"></i>
                       <input type="text" name="task_asignto" class="form-control" required>
                    </div>
		    <div class="input-wrapper">
                    <label for="full_name" class="form-label">Date <font style="color:#FE0505">*</font></label>
			<i class="fa fa-calendar-alt"></i>
                       <input type="date" name="task_date" class="form-control" required>
                    </div>		
		    <div class="input-wrapper">
                    <label for="full_name" class="form-label">Date <font style="color:#FE0505">*</font></label>
			<i class="fa fa-calendar-check"></i>
                       <input type="date" name="task_deadline" class="form-control" required>
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