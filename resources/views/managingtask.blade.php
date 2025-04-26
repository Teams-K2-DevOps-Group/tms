@include('header')        
            <!-- Tasks and Activity -->
            <div class="tasks-container">
		<div class="task-list">
		<form action="{{ route('storeTask') }}" method="POST"> 
            @csrf
                  <div class="title">Create Task</div>


		    <div class="input-wrapper">
                    <label for="full_name" class="form-label">Task Name <label style="color:#FE0505">*</label></label>
			<i class="fas fa-tasks"></i>
                       <input type="text" name="taskname" class="form-control" required>
                    </div>

		    <div class="input-wrapper">
                    <label for="full_name" class="form-label">Description<label style="color:#FE0505">*</label></label>
			<i class="fa fa-clipboard-list"></i>
			<textarea rows="5" name="taskdesc" class="form-control" required></textarea>
                    </div>
		    <div class="input-wrapper">
                    <label for="full_name" class="form-label">Asign To <label style="color:#FE0505">*</label></label>
			<i class="fa fa-user"></i>
                       <input type="email" name="email" class="form-control" placeholder="Enter Email" required>
                    </div>
		    <div class="input-wrapper">
                    <label for="full_name" class="form-label">Start Date <label style="color:#FE0505">*</label></label>
			<i class="fa fa-calendar-alt"></i>
                       <input type="date" name="startdate" class="form-control" required>
                    </div>		
		    <div class="input-wrapper">
                    <label for="full_name" class="form-label">Stop Date <label style="color:#FE0505">*</label></label>
			<i class="fa fa-calendar-check"></i>
                       <input type="date" name="deadline" class="form-control" required>
                    </div>
		<div class="mb-3"><br /></div>
              <p style="text-align:center; padding:5px 0px;"> 
                <button class="btn-submit" style="width:120px !important;">  Create </button> </p> <br />            
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