<?php


class Model_cinema
{

    private $jsonFile = DIR . '/cineIdf.json';

    public function getCinemasBySearchInput($searchInput)
    {
        $allCinemas = json_decode(file_get_contents($this->jsonFile), true);

        // Filtre les cinémas en fonction du code postal
        $filteredCinemas = array_filter($allCinemas, function ($cinema) use ($searchInput) {
            return strpos($cinema['code_insee'], $searchInput) !== false;
        });

        return $filteredCinemas;
    }
}
?>