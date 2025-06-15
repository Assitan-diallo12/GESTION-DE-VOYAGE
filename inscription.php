<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Inscription - Voyage</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <div class="form-container">
    <h2>Inscription</h2>
    <form id="registerForm">
      <label for="name">Nom :</label>
      <input type="text" id="name" required />

      <label for="email">Email :</label>
      <input type="email" id="email" required />

      <label for="password">Mot de passe :</label>
      <input type="password" id="password" required />

      <button type="submit">S'inscrire</button>
      <p>Déjà un compte ? <a href="login.html">Se connecter</a></p>
    </form>
  </div>
</body>
</html>
