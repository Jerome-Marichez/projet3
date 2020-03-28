<li>
  <div class="dropdown">
    <button type="button" class="btn btn dropdown-toggle" data-toggle="dropdown">
      <span class="glyphicon glyphicon-log-in"></span>Connexion
    </button>
    <ul class="dropdown-menu">
      <li><?=empty($_SESSION['username']) ? "invité" : $_SESSION['username']?></li>
      <li><a href="login">Connectez vous</a></li>
      <li><a href="inscription">Inscrivez vous</a></li>
    </ul>
  </div>
</li>
