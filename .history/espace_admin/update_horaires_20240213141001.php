<?php
require_once 'connexion.php';
require_once ('head_admin.php');

}
?>
<section>
<div class="container_header p-3 ">
    <div class="content_button mt-2">
        <a href="horaires.php" class="btn btn-primary mx-2">Back  <i class="bi bi-backspace"></i></a>
    </div>
</div>
<div class="form-container">
    <form  method="POST">
        <h3>Update hoarires du garage</h3>
      <div class="form-group">
        <input type="text" name="matin" class="form-control"  placeholder="matin" required><br>
      </div>
      <div class="form-group">
        <input type="text" name="apres_midi" class="form-control"  placeholder="aprés_midi" required><br>
      </div>
      <div class="form_footer">
        <button type="submit" name="Update" class="btn btn-primary" >Update</button>
      </div>
    </form>
  </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>