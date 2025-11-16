<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Pagina_model","mP");
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		//$this->load->view('welcome_message');
		$this->band();
	}

	public function principal() {
		$datos=[];
		$datos["saludo"]="Hola mundo";
		$datos["apellido_paterno"]="Pérez";	
		$datos["apellido_materno"]="Moo";			
		$this->load->view('secciones/header',$datos);
		$this->load->view('principal');
		$this->load->view('secciones/footer',$datos);
	}

	public function band(){
		$this->load->library('Band');
		$c1=new Band();
		$c1->t1="Más demandado";
		$c1->t2="Curso completo para aprender Python desde cero";
		
		$datos["contenido1"]=$c1;

		$c2=new Band();
		$c2->t1="Más demandado";
		$c2->t2="Aprende a crear sitios web modernos";
		
		$datos["contenido2"]=$c2;	
		
		$c3=new Band();
		$c3->t1="Más demandado";
		$c3->t2="Conceptos básicos y aplicaciones prácticas de IA";
		
		$datos["contenido3"]=$c3;	

		$c4=new Band();
		$c4->t1="Más demandado";
		$c4->t2="Estrategias y herramientas para potenciar tu marca";
		
		$datos["contenido4"]=$c4;
		
		$c5=new Band();
		$c5->t1="Más demandado";
		$c5->t2="Domina Excel para análisis y reportes empresariales.";
		
		$datos["contenido5"]=$c5;	
		
		$c6=new Band();
		$c6->t1="Disponible 2025";
		$c6->t2="Crea diseños atractivos sin ser un experto";

		$datos["contenido6"]=$c6;	

		$c7=new Band();
		$c7->t1="Disponible 2025";
		$c7->t2="Aprende los conceptos básicos de redes informáticas";

		$datos["contenido7"]=$c7;	

		$c8=new Band();
		$c8->t1="Disponible 2025";
		$c8->t2="Principios y prácticas contables esenciales";

		$datos["contenido8"]=$c8;	

		$c9=new Band();
		$c9->t1="Disponible 2025";
		$c9->t2="Técnicas para capturar imágenes impactantes";

		$datos["contenido9"]=$c9;	

		$c10=new Band();
		$c10->t1="Disponible 2025";
		$c10->t2="Mejora tu inglés para entornos corporativos";

		$datos["contenido10"]=$c10;	

		$datos["secciones"]=$this->mP->consultar_secciones_activas();
		$datos["cintaimagenes"]=$this->mP->consultar_carousel();	
		$datos["inscripciones"] = $this->mP->consultar_inscripciones();
		$datos["seccioneslupa"]= $this->mP->consultar_secciones_lupa();
		$datos["materialapoyo"] = $this->mP->consultar_material();

		$this->load->view('secciones/header');
		$this->load->view('principal',$datos);
		$this->load->view('secciones/footer');
		
	}

	public function ObtenerRespuesta(){
		//$id="1";
		//$data=array("id"=>"status"=>true);
		$id=$this->input->post("idparametro");
		$data=array("id"=>$id,"status"=>true, "message"=>"El parametro que acabas de pasar es");
		$this->output->set_output(json_encode($data));
	}
	public function CargarDatos(){
		$datos["listadosecciones"]=$this->mP->ObtenerSecciones();
		$view=$this->load->view("tabla_secciones",$datos, true);
		$data=array("html"=>$view,"status"=>true,"mensaje"=>"esto es un mensaje");
		$this->output->set_output(json_encode($data));
	}

}
