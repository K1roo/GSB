<? php
class Medicament_c{
	
	
	public function __construct(){
		parent::__construct();
		$this->verifier_session();
		
	}
	
	public function index(){
// 		$data['title'] = 'Consulter les médicaments';
// 		$data['content'] = 'pages/medicament_v';
// 		$this->generer_affichage($data);
		$data['afficherMedicament'] = false;
		$this->generer_affichage_medicament($data);
	
	}
	
	public function afficher(){
		$data['afficherMedicament'] = true;
		$data['medicament'] = $this->medicament ->getnomCommercial($this->input->post('medicament'));
		$this->generer_affichage_medicament($data);
	
	}
	private function generer_affichage_medicament($data) {
		$data['medicaments'] = $this->medicament ->lesMedicaments();
		$data['title'] = 'Medicaments';
		$data['content'] = 'pages/medicament_v';
		$this->generer_affichage($data);
	}
	
}
?>
