<?php
class Pages extends Controller
{
    

    public function index()
    {
        $data = [
            'title' => 'Home page'
        ];

        $this->view('index', $data);
    }

   
    public function reservform()
    {
        $this->view('reservations/reservation-form');
    }

   

}