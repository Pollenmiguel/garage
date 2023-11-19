<?php
// Récupérer les données POST
$data = json_decode(file_get_contents("php://input"), true);

// Vérifier si les données sont présentes
if (!isset($data['price']) || !isset($data['mileage']) || !isset($data['year']) || !isset($data['brand'])) {
    header('Content-Type: application/json');
    echo json_encode(['error' => 'Missing parameters']);
    exit;
}

// Faire quelque chose avec les données, par exemple, une requête SQL
// Connectez-vous à votre base de données et exécutez la requête en fonction des filtres
// Assurez-vous d'ajuster les noms de colonnes et la logique de filtrage selon votre base de données

// Exemple d'utilisation de données de votre liste de voitures
$vehicles = [
    ['ID_du_véhicule' => 1, 'ID_du_Témoignage' => 1, 'Marque' => 'BMW', 'Nom_du_modèle_de_voiture' => '218i', 'Année_de_mise_en_circulation' => 2022, 'Prix' => 25000, 'Kilométrage' => 20000, 'images' => 'images\voitures\BMW\BMW218i\bmw 218i C.jpg', 'Caractéristiques' => 'Pack M', 'Equipements_et_options' => 'Vitres électriques Rétroviseurs électriques Centralisation à distance Volant multifonctions'],
    ['ID_du_véhicule' => 2, 'ID_du_Témoignage' => 2, 'Marque' => 'BMW', 'Nom_du_modèle_de_voiture' => '430D', 'Année_de_mise_en_circulation' => 2015, 'Prix' => 18000, 'Kilométrage' => 30000, 'images' => 'images\voitures\BMW\BMW430D\BMW 430D.jpg', 'Caractéristiques' => 'PACK M SPORT XDRIVE', 'Equipements_et_options' => 'tout cuir GPS'],
    ['ID_du_véhicule' => 7, 'ID_du_Témoignage' => 3, 'Marque' => 'Mercedes', 'Nom_du_modèle_de_voiture' => 'c220', 'Année_de_mise_en_circulation' => 2019, 'Prix' => 35000, 'Kilométrage' => 25000, 'images' => '', 'Caractéristiques' => 'amg-line', 'Equipements_et_options' => 'Système de navigation téléphone bluetooth'],
    ['ID_du_véhicule' => 8, 'ID_du_Témoignage' => 4, 'Marque' => 'Mercedes', 'Nom_du_modèle_de_voiture' => 'glk220', 'Année_de_mise_en_circulation' => 2017, 'Prix' => 21000, 'Kilométrage' => 38000, 'images' => 'C:\\wamp64\\www\\garage\\images\\voitures\\mercedes\\mercedes glk 220', 'Caractéristiques' => 'PACK M SPORT XDRIVE', 'Equipements_et_options' => 'tout cuir GPS'],
    // Ajoutez plus de données ici
];

// Filtrer les véhicules en fonction des critères
$filteredVehicles = array_filter($vehicles, function ($vehicle) use ($data) {
    return $vehicle['Prix'] >= $data['price'] &&
        $vehicle['Kilométrage'] <= $data['mileage'] &&
        $vehicle['Année_de_mise_en_circulation'] >= $data['year'] &&
        ($data['brand'] === 'Tous' || $vehicle['Marque'] === $data['brand']);
});

// Renvoyer les résultats au format JSON
header('Content-Type: application/json');
echo json_encode($filteredVehicles);
?>
