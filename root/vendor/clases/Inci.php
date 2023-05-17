<?php

class Inci extends Connection{
    private $fecha_hora;
    private $descripcion;
    private $almacen_id;
    private $ref;

    public function __construct($fecha_hora, $descripcion, $almacen_id, $ref)
    {
        $this->fecha_hora = $fecha_hora;
        $this->descripcion = $descripcion;
        $this->almacen_id = $almacen_id;
        $this->ref = $ref;
    }

    public function getFecha_hora()
    {
        return $this->fecha_hora;
    }

    public function setFecha_hora($fecha_hora)
    {
        $this->fecha_hora = $fecha_hora;

        return $this;
    }

    public function getDescripcion()
    {
        return $this->descripcion;
    }

    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    public function getAlmacen_id()
    {
        return $this->almacen_id;
    }

    public function setAlmacen_id($almacen_id)
    {
        $this->almacen_id = $almacen_id;

        return $this;
    }

    public function getRef()
    {
        return $this->ref;
    }

    public function setRef($ref)
    {
        $this->ref = $ref;

        return $this;
    }

    public function mostInci()
    {
            $sql = "SELECT fecha_hora,descripcion FROM incidencias";
            $result = $this->conn->query($sql);
            if ($result->num_rows > 0) {
                $incidencias = $result->fetch_all();
                return $incidencias;
            } else {
                return false;
            }
    }
    public function drawInci($incidencias){
        $output= "";
        for ($i=0; $i < count($incidencias); $i++) { 
            $output .= "<div class='row justify-content-center'>";
            $output .= "<div class='prueba1 col-4 align-self-center'>";
            $output .= "<form id='inci'>";
            $output .= "<div class='form-group'>";
            $output .= "<label for='titulo'>Fecha</label>";
            $output .= "<input type='text' class='form-control' id='titulo' placeholder='".$incidencias[$i][0]."' readonly>";
            $output .= "</div>";
            $output .= "<div class='form-group'>";
            $output .= "<label for='descripcion'>Descripción</label>";
            $output .= "<textarea class='form-control' id='descripcion' rows='3' placeholder='".$incidencias[$i][1]."' readonly></textarea>";
            $output .= "</div>";
            $output .= "</form>";
            $output .= "</div>";
            $output .= "</div>";
            
        }
        return $output;
    }

    public function insertInci($insert)
    {
        $sql = "INSERT INTO incidencias (fecha_hora, descripcion, almacen_id, ref) VALUES (?, ?, ?, ?)";
        $stmt = $this->conn->fetch(PDO::FETCH_ASSOC);
        $stmt->bindParam(1, $insert[0], PDO::PARAM_INT);
        $stmt->bindParam(2, $insert[1], PDO::PARAM_STR);
        $stmt->bindParam(3, $insert[2], PDO::PARAM_INT);
        $stmt->bindParam(4, $insert[3], PDO::PARAM_STR);
        $stmt->execute(
            array(
                $insert->getFecha_hora(),
                $insert->getDescripcion(),
                $insert->getAlmacen_id(),
                $insert->getRef()
            )
        );
    }

    public function deleteBrewery($delete): int|bool
{
    $consulta = $this->conn->prepare("DELETE FROM breweries WHERE id=?");
    $consulta->bindParam(1, $delete, PDO::PARAM_INT);
    return $consulta->execute();
}

public function insertBrewery($insert)
    {
        $consulta = $this->conn->query("SELECT MAX(ID) AS A FROM breweries"); //no preparada->query(no necesita variables) //preparada->prepare(le pasas varibles)
        $row = $consulta->fetch(PDO::FETCH_ASSOC);
        $id = $row['A'] + 1;
        $stmt = $this->conn->prepare("INSERT INTO breweries (id, name, city, state) VALUES (?,?,?,?)");

        $stmt->execute(
            array(
                $id,
                $insert->getName(),
                $insert->getCity(),
                $insert->getState()
            )
        );
    
}

}