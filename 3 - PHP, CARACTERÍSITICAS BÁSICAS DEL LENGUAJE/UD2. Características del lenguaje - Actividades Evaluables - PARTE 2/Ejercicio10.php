<?php
$hoteles = [
    ["Abashiti (NA)", 3, 168, '46013 Valencia', 'Avenida Ausias March, 59'],
    ["Abba Acteon (Abba Hoteles)", 4, 189, '46023 Valencia', 'Escultor Vicente Bertrán Grimal, 2'],
    ["Acta Atarazanas", 4, 42, '46011 Valencia', 'Plaza tribunas de las aguas, 4'],
    ["Acta del Carmen", 3, 25, "46003 Valencia", "Blanquerías,11"],
    ["AC Valencia (AC hotels)", 4, 183, '46023 Valencia', 'Avenida Francia, 67'],
    ["Ad Hoc Monumental Valencia", 3, 28, '46003 Valencia', 'Boix, 4'],
    ["Alkazar", 1, 18, '46002 Valencia', 'Mosen Femades, 11'],
];

function listadoHoteles($hoteles)
{
    $listado = $hoteles[0][0];
    for ($i = 1; $i < count($hoteles); $i++) {
        $listado .= ", " . $hoteles[$i][0];
    }
    return $listado;
}

function listadoHotelesMas100Hab($hoteles)
{
    $listado = "";
    for ($i = 0; $i < count($hoteles); $i++) {
        if ($hoteles[$i][2] > 100) {
            $listado .= $hoteles[$i][0] . ', ';
        }
    }
    return $listado;
}

function listadoHotelesMenos100Hab3Estrellas($hoteles)
{
    $listado = "";
    for ($i = 0; $i < count($hoteles); $i++) {
        if ($hoteles[$i][2] <= 100 && $hoteles[$i][1] == 3) {
            $listado .= $hoteles[$i][0] . ', ';
        }
    }
    return $listado;
}

function borrarHotel($hoteles, $NombreHotelBorrar)
{
    foreach ($hoteles as $key => $hotel) {
        if ($hotel[0] == $NombreHotelBorrar) {
            unset($hoteles[$key]);
        }
    }
    $hoteles = array_values($hoteles);
    return listadoHoteles($hoteles);
}

function borrarTodosHoteles(&$hoteles)
{
    $hoteles = [];
    return "No hay hoteles en la base de datos.";
}

function añadirHotel(&$hoteles, $nuevoHotel)
{
    $hoteles[] = $nuevoHotel;
    return listadoHoteles($hoteles);
}

echo listadoHoteles($hoteles);
echo "<br><br>";
echo listadoHotelesMas100Hab($hoteles);
echo "<br><br>";
echo listadoHotelesMenos100Hab3Estrellas($hoteles);
echo "<br><br>";
echo borrarHotel($hoteles, "Acta del Carmen");
echo "<br><br>";
echo borrarTodosHoteles($hoteles);
echo "<br><br>";
echo añadirHotel($hoteles, ["Astoria Palace (Ayre Fiesta)", 4, 204, "46002 Valencia", "Plaza Rodrigo Boter, 5"]);
echo "<br><br>";
echo añadirHotel($hoteles, ["Balneario Las Arenas", 5, 253, "46011 Valencia", "Eugenia Viñes, 22-24"]);
echo "<br><br>";
?>
