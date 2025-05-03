@include('header')
            
            <!-- Tasks and Activity -->
            <div class="tasks-container">
		<div class="task-list">
		<form action="{{ route('storeProject') }}" method="POST"> 
            @csrf
                  <div class="title">Create Project</div>
		    <div class="input-wrapper">
                    <label for="full_name" class="form-label">Project Name <label style="color:#FE0505">*</label></label>
			<i class="fas fa-project-diagram"></i>
                       <input type="text" name="projectname" class="form-control" required>
                    </div>

		    <div class="input-wrapper">
                    <label for="full_name" class="form-label">Description<label style="color:#FE0505">*</label></label>
			<i class="fa fa-clipboard-list"></i>
			<textarea rows="5" name="projectdesc" class="form-control" required></textarea>
                    </div>
		    <div class="input-wrapper">
                    <label for="full_name" class="form-label">Date <label style="color:#FE0505">*</label></label>
			<i class="fa fa-calendar-alt"></i>
                       <input type="date" name="startdate" class="form-control" required>
                    </div>		
		    <div class="input-wrapper">
                    <label for="full_name" class="form-label">Date <label style="color:#FE0505">*</label></label>
			<i class="fa fa-calendar-check"></i>
                       <input type="date" name="deadline" class="form-control" required>
                    </div>
		<div class="mb-3"><br /></div>
              <p style="text-align:center; padding:5px 0px;"> <button class="btn-submit" style="width:120px !important;">  Create </button>
                 &nbsp;</p> <br />
                
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