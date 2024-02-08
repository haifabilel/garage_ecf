
    <form  method="POST" enctype="multipart/form-data" >
       <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title fs-5" id="exampleModalToggleLabel">Ajouter détails</h3>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
           </div>
            <div class="modal-body">
            <div class="form-group">
              <input type="text" name="caracteristique" class="form-control"  placeholder="carectéristique" required><br>
             </div>
                <div class="form-group">
                    <input type="text" name="liste_equipements" class="form-control"  placeholder="liste des équipements" required><br>
                </div>
                <div class="form-group">
                    <input type="text" name="options_installes" class="form-control"  placeholder="options installés" required><br>
                </div>
                <div class="form-group mb-3">
                     <input type="file" name="image1" class="form-control" >
                </div>
                <div class="form-group mb-3">
                    <input type="file" name="image2" class="form-control" >
                </div>
                <div class="form-group mb-3">
                    <input type="file" name="image3" class="form-control" >
                </div>
                </div>
                <div class="modal-footer">
                <button type="submit" name="addDétails" class="btn btn-primary" >Valider</button>
            </div>
         </div>
       </form>
     </div>
   </div>
