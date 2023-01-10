

<!-- Modal -->
<div class="modal fade" id="addcatModal" tabindex="-1" aria-labelledby="addcatModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginModalLabel">Login Here</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="container py-4" >
        <form action="/forum/partials/addCategory.php?op=add" method="POST">
            <div class="mb-3 ">
                <label for="uname" class="form-label ">Title</label>
                <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3 ">
                <label for="text" class="form-label">Description</label>
                <input type="textarea" class="form-control" id="desc" name="desc" required>
                <div id="emailHelp" class="form-text">We'll never share your details with anyone else.</div>
            </div>
           
    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add</button>
        </form>
      </div>
    </div>
  </div>
</div>