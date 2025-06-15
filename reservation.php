<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Réservation - Voyage</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <div class="form-container">
    <h2>Réservation</h2>
    <form id="reservationForm">
      <label for="destination">Destination :</label>
      <select id="ville" required>
        <option value="">-- Choisir une ville --</option>
        <option value="bamako">Bamako</option>
        <option value="mopti">Mopti</option>
        <option value="goa">Goa</option>
        <option value="venise">Venise</option>
      </select>
      <!-- <input type="text" id="destination" required /> -->

      <label for="date">Date de départ:</label>
      <input type="date" id="date" required />
      <label for="date">Date de retoure:</label>
      <input type="date" id="date" required />

      <label for="budget">Nombre de personne :</label>
      <input type="number" id="budget" required />

      <button type="submit">Valider la réservation</button>
    </form>
  </div>
</body>
</html>
