<form class="w-50 mx-auto my-5" method="POST" action="index.php?&action=<?php echo $buttonValue; ?>">
  <input type="hidden" class="form-control" name="id" value="<?php echo (isset($action)?$action["id"]:""); ?>">
  <div class="form-group">
    <label for="title">Titre : </label>
    <input type="text" class="form-control" name="title"  placeholder="Titre" value="<?php echo (isset($action)?$action["title"]:""); ?>">
  </div>
  <div class="form-group">
    <label for="chapo">Chapô : </label>
    <input type="text" class="form-control" name="chapo"  value="<?php echo (isset($action)?$action["chapo"]:""); ?>">
  </div>
  <div class="form-group">
    <label for="publication_date">Date : </label>
    <input type="date" class="form-control" name="date" id="date" value="<?php echo (isset($action)?$action["date"]:""); ?>">
  </div>
  <div class="form-group">
    <label for="content">Contenu : </label>
    <input type="text" class="form-control" name="content"  value="<?php echo (isset($action)?$action["contnt"]:""); ?>">
  </div>
  <div class="form-group">
    <label for="author">Auteur : </label>
    <input type="text" class="form-control" name="author"  value="<?php echo (isset($action)?$action["author"]:""); ?>">
  </div>
  <button type="submit" name="action" value="<?php echo $buttonValue; ?>" class="btn btn-primary"><?php echo $buttonValue; ?></button>
</form>