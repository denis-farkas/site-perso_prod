<?php
class Reservations extends Controller {
    public function __construct() {
        $this->reservationModel = $this->model('Reservation');
    }

        public function reserver(){
          
        
                if (isset($_POST['submit'])){

                $jour=$_POST['jour'];
                
               
                for ($j=8; $j<19;$j++){
                    if (isset($_POST['debut'.$j])){ 
                        $debut=$_POST['debut'.$j];
                        $fin=$_POST['fin'.$j];
                        $datedebut = $jour.' '.$debut;
                        $strt_debut= strtotime("$datedebut");
                        $datefin = $jour.' '.$fin;
                        

                        $data[$j] = [
                        'titre'=>$_POST['titre'],
                        'description'=>$_POST['description'],
                        'debut'=>$datedebut,
                        'strt_debut'=>$strt_debut,
                        'fin'=>$datefin,
                        'id_utilisateur'=>$_POST['id_utilisateur'],
                        ];

                       
                        $row = $this->reservationModel->oneReserv($strt_debut);
                        if(!empty($row)){
                            $_SESSION['error-sys']= 'Erreur système, veuillez recommencer.';
                            header('location: ' . URLROOT . '/reservations/planning');  
                        }else{
                            $res=$this->reservationModel->enregistrerReserv($data[$j]);
                            if ($res==false){
                                //Redirect page planning
                                $_SESSION['error-sys']= 'Erreur système, veuillez recommencer.';
                                header('location: ' . URLROOT . '/reservations/planning'); 
                            }  
                        }
                   
                    }
                }  header('location: ' . URLROOT . '/reservations/planning');
            }else{
                header('location: ' . URLROOT . '/reservations/planning');  
            }
        }
                   
       
        

        public function planning(){

            $data = [
                'monday' => "",
                'endweek' => "", 
                'results' => ""
            ];
            

                if(date('Y-m-d', strtotime("now"))==date('Y-m-d',strtotime('saturday this week')) || date('Y-m-d', strtotime("now"))==date('Y-m-d', strtotime('sunday this week')))
                {
                    $monday=date('Y-m-d', strtotime("next monday"));
                    $endweek=date('Y-m-d', strtotime("next friday"));
                
                }else{
                    $monday=date('Y-m-d', strtotime('monday this week'));
                    $endweek=date('Y-m-d', strtotime("friday this week"));
                }
                
                $monday=$monday.' 00:00:00';
                $endweek=$endweek.' 19:00:00';
                $data = [
                    'monday' => $monday,
                    'endweek' => $endweek 
                ];
               
              $results = $this->reservationModel->allReserv($data);
        
                $data = [
                    'monday' => $monday,
                    'endweek' => $endweek, 
                    'results' => $results
                ];
        
                $this->view('reservations/planning', $data);
            } 
            
        public function oldplanning(){
            $data = [
                'monday' => "",
                'endweek' => "", 
                'results' => "" 
            ];

            if($_POST['consulter']){
                $monday=$_POST['monday'];
                $endweek=$_POST['endweek'];
    
                $results = $this->reservationModel->allReserv($data);
    
                $data = [ 'monday' => $monday,
                'endweek' => $endweek, 
                'results' => $results];
    
                $this->view('reservations/oldplanning', $data);  
            }
          
        }
        
        public function afficherReservation($id){

            $data = $this->reservationModel->singleReserv($id);
            $this->view('reservations/reservation', $data);
        }

           
}
             

    

