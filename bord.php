<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Tableau de Bord</title>
  <link rel="stylesheet" href="bord.css">
</head>
<body>
  <div class="container">
    <aside class="sidebar">
      <h2>Tableau De Bord</h2>
      <nav>
        <ul>
          <li><i class="fas fa-user"></i> Clients</li>
          <li><i class="fas fa-book"></i> Reservation</li>
          <li><i class="fas fa-plane-departure"></i> Voyages</li>
        </ul>
      </nav>
    </aside>

    <main class="main-content">
      <h1>Clients</h1>
      <table>
        <thead>
          <tr>
            <th>Nom</th>
            <th>Email</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Assitan Diallo</td>
            <td>Adiallo@Exemple.Com</td>
            <td>
              <a href="#"><i class="fas fa-pen"></i></a>
              <a href="#"><i class="fas fa-trash"></i></a>
            </td>
          </tr>
          <tr>
            <td>Dada Dao</td>
            <td>Dao@Exemple.Com</td>
            <td>
              <a href="#"><i class="fas fa-pen"></i></a>
              <a href="#"><i class="fas fa-trash"></i></a>
            </td>
          </tr>
        </tbody>
      </table>
    </main>
  </div>
</body>
</html>