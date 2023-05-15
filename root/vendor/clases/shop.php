<?php

// ver listado de todo el almacen desde base de datos

class Shop extends Connection
{
    public function verShop()
    {
        $sql = "SELECT p.ref, p.marca, p.modelo, u.zona, u.pasillo, u.estanteria, u.altura
        FROM productos p
        JOIN esta e ON p.ref = e.ref
        JOIN ubicacion u ON e.Id_ubi = u.Id_ubi
        WHERE e.almacen_id = 1;";
        $result = $this->conn->query($sql);
        if ($result->num_rows > 0) {
            return $result->fetch_all();
        } else {    
            return false;
        }
    }
}
