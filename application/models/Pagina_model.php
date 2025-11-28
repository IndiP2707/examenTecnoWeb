<?php
defined('BASEPATH')OR exit('No direct script access allowed');

class Pagina_model extends CI_Model{

    function consultar_secciones_activas(){
        //CONSULTA FORMA INDIVIDUAL------COMENTARIO
        $this->db->select("Id, nombre_seccion, href, activo, registro");
        $this->db->from("cat_secciones");
        $this->db->where("activo","1");
        $query=$this->db->get();

        //PA------COMENTARIO
        //$query=$this->db->query("Call ObtenerSecciones()");
        
        if($query!=false){
            if($query->num_rows()>0){
                return $query->result();
            }else{
                return false;
            }
        }else{
            return false;
        }
    }
        //carousel
        function consultar_carousel(){
        $sql="SELECT c.id AS idcarousel, c.titulo, c.subtitulo, ci.ruta, ci.nombre_archivo, ci.alt
        FROM carousel c INNER JOIN cat_imagenes ci ON c.idcatimagen=ci.id WHERE c.estatus=1 AND ci.estatus=1";

        $query=$this->db->query($sql);
        if($query!=false){
            if($query->num_rows()>0){
                return $query->result();
            }else{
                return false;
            }
        }else{
            return false;
        }

    }

    function consultar_inscripciones() {
        $this->db->select("i.id, i.nombre_curso, i.fecha_inicio, i.cupos, img.ruta, img.nombre_archivo,img.alt");
        $this->db->from("cat_inscripciones i");
        $this->db->join("cat_imagenes img", "i.id_imagen = img.id", "left");
        $this->db->where("i.estatus", 1);
        $this->db->where("img.estatus", 1);

        $query = $this->db->get();  

        if ($query && $query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

public function ObtenerSecciones() {
    $this->db->select("cat_inscripciones.Id, cat_inscripciones.nombre_curso, cat_inscripciones.fecha_inicio, cat_inscripciones.cupos, cat_inscripciones.id_imagen, cat_inscripciones.estatus, cat_imagenes.ruta, cat_imagenes.nombre_archivo, cat_imagenes.alt");
    $this->db->from("cat_inscripciones");
    $this->db->join("cat_imagenes", "cat_imagenes.id = cat_inscripciones.id_imagen", "left");
    $this->db->where("cat_inscripciones.estatus", "1");
    $query = $this->db->get();

    if ($query !== false && $query->num_rows() > 0) {
        return $query->result();
    }
    return false;
}
function consultar_secciones_lupa(){
        //CONSULTA FORMA INDIVIDUAL------COMENTARIO
        $this->db->select("Id, nombre_seccion, href, activo, registro");
        $this->db->from("cat_secciones");
        $this->db->where("activo","2");
        $query=$this->db->get();

        if($query!=false){
            if($query->num_rows()>0){
                return $query->result();
            }else{
                return false;
            }
        }else{
            return false;
        }
    }
    
        //material de apoyo
        
function consultar_material(){

    $sql = "SELECT m.ruta, m.boton, c.tituloma, c.href, c.titulo, c.subtitulo, c.icono_clase 
            FROM materialapoyo m 
            INNER JOIN cat_materialapoyo c ON m.id_catmat = c.id 
            WHERE m.estatus = 1 AND c.estatus = 1";
    
    $query = $this->db->query($sql);
    
    if ($query !== false) {
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    } else {
        return false;
    }
}
function consultar_cursos_filtrados(){
    $sql="SELECT
                ci.nombre_curso,
                ci.subtitulo,
                ci.demanda,
                ci.estatus,
                c.categoria,
                i.ruta,
                i.nombre_archivo,
                i.alt
          FROM
              cat_inscripciones ci
          JOIN
              categorias c ON ci.id_categorias = c.id
          JOIN
              cat_imagenes i ON ci.id_imagen = i.id 
          WHERE
              ci.estatus >= 1";
    $query = $this->db->query($sql);
    if($query !== false){
            if($query->num_rows() > 0){
                return $query->result();
            } else {
                return false;
            }
        } else {
            return false;
        }
}
}