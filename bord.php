<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Tableau de bord</title>
  <link rel="stylesheet" href="style.CSS">
  
</head>
<body class="bg-gray-100 text-gray-900">

  <div class="flex min-h-screen">
    <!-- Sidebar -->
    <aside class="w-64 bg-blue-700 text-white p-4">
      <h2 class="text-xl font-bold mb-6"><i>Tableau de bord</i></h2>
      <ul class="space-y-3">
        <li><a href="#" class="block hover:bg-blue-600 p-2 rounded">Client</a></li>
        <li><a href="#" class="block hover:bg-blue-600 p-2 rounded">Réservations</a></li>
        <li><a href="#" class="block hover:bg-blue-600 p-2 rounded">Voyages</a></li>
      </ul>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-6">
      <h1 class="text-2xl font-bold mb-6">Clients</h1>
      <section class="admin-section">
    <table>
    
      <thead>
        <tr>
          <th>Nom</th>
          <th>Email</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody id="clientTable">

          <td>Assitan Diallo</td>
          <td>adiallo@exemple.com</td>
          <td><button>Supprimer</button></td>

        <tr>
          <td>Dada Dao</td>
          <td>dao@exemple.com</td>
          <td><button>Supprimer</button></td>
        </tr>
          </main>
  </div>

</body>
</html>