<form class="w-50 mx-auto my-5" action="../controller/usersController.php" method="post">
  <div class="form-group">
    <label for="name">Votre nom</label>
    <input type="text" class="form-control" id="name" name="name" required>
  </div>
  <div class="form-group">
    <label for="password">Votre mot de passe</label>
    <input type="password" class="form-control" id="password" name="password" required>
  </div>
  <button type="submit" class="btn darkBg">Se connecter</button>
  <button><a href="subscribeView.php" class="btn darkBg">Pas encore de compte</a></button>
</form>
