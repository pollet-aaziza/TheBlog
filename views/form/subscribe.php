<div class="container">
  <form action="../controller/usersController.php" method="post">
    <div class="form-group">
      <label for="name">Nom</label>
      <input type="text" class="form-control" name="name" >
    </div>
    <div class="form-group">
      <label for="mail">Mail</label>
      <input type="text" class="form-control" name="mail">
    </div>
    <div class="form-group">
      <label for="password">Mot de pass</label>
      <input type="text" class="form-control" name="password">
    </div>
    <div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Options</label>
  </div>
  <select class="custom-select" name="status" >
    <option value="0">Utilisateur</option>
    
  </select>
</div>
    <button type="submit" class="btn" value="valider">Enregistrer</button>
  </form>
</div>
