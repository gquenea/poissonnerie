<?php $poissons = [

    [
        "nom" => "Colin",
        "description" => "c'est un poisson gentil mais arrogant",
        "prix" => 43,
        "image" => "https://www.luximer.com/609-thickbox_default/colin-entier-vide-piece-de-2kg.jpg",
        "eau" => "mer",
        "protege" => false
    ], [
        "nom" => "Carpe",
        "description" => "c'est un poisson tendre mais débile",
        "prix" => 32,
        "image" => "https://img.cuisineaz.com/610x610/2019/06/18/i147660-carpe.jpeg",
        "eau" => "douce",
        "protege" => false
    ], [
        "nom" => "Cabillaud",
        "description" => "c'est un poisson pilier du rayon surgelés",
        "prix" => 51,
        "image" => "https://www.pavillonfrance.fr/sites/default/files/styles/virtualstand/public/especes/cabillaud.png?itok=g4RUtSqB",
        "eau" => "mer",
        "protege" => false
    ], [
        "nom" => "Thon",
        "description" => "c'est un poisson pilier du rayon surgelés",
        "prix" => 25,
        "image" => "https://upload.wikimedia.org/wikipedia/commons/thumb/a/ac/Thunnus_obesus_%28bigeye_tuna%29.jpg/1200px-Thunnus_obesus_%28bigeye_tuna%29.jpg",
        "eau" => "mer",
        "protege" => false
    ], [
        "nom" => "saumon",
        "description" => "c'est un poisson pilier du rayon surgelés",
        "prix" => 29,
        "image" => "https://www.luximer.com/395-large_default/saumon-ecossais-label-rouge-piece-de-3kg.jpg",
        "eau" => "douce",
        "protege" => false
    ], [
        "nom" => "Dauphin",
        "description" => "c'est une animal joueur",
        "prix" => 29,
        "image" => "https://cdn.radiofrance.fr/s3/cruiser-production/2021/06/bb6afb50-9b2f-465a-a650-6c8db368cca4/838_tursiop_maxnewsworldthree408997.jpg",
        "eau" => "douce",
        "protege" => true
    ]
];


$typeDePoisson = false;
if (isset($_GET['type'])) {
    $typeDePoisson = $_GET['type'];
}
