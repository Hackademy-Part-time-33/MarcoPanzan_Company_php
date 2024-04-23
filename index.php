<?php
class Company{
    
    public $name;
    public $location;
    public $tot_employees;
    public $avg_salary;
    public static $counter = 0;
    
    public function __construct($_name, $_location, $_tot_employees,$_avg_salary){
$this->name = $_name;
$this->location = $_location;
$this->tot_employees = $_tot_employees;
$this->avg_salary = $_avg_salary;
self::$counter ++;
}

public function reading(){
    if ($this->tot_employees> 0) {
       echo "l' ufficio " . $this->name . " con sede in" .  $this->location. ' ha ben '. $this->tot_employees. ' dipendenti.';
    }
    else{
        echo "l' ufficio " . $this->name. " con sede in " . $this->location . ' non ha dipendenti.';
    }
}

public function spesa_mesi ($month){

return $spesa_tot =$this->tot_employees * $this->avg_salary * $month; 
}
public function stampa_spesa($month){
    echo "l' azienda ha speso in totale " . $this->spesa_mesi($month);
}


public static function howManyCompany(){
    echo "Hai creato " . self::$counter . " ditte \n";
}
}



$azienda1 = new Company ('aulab', 'italia', 50, 2000);
$azienda2 = new Company ('B&p', 'italia', 0, 1700);
$azienda3 = new Company ('converse','USA',5000, 2100);
$azienda4 = new Company ('puma', 'germania', 4500, 2150);
$azienda5 = new Company ('google', 'USA', 5500, 2500);

$azienda1->reading();
$azienda2->reading();
$azienda5->stampa_spesa(6);
$azienda1->stampa_spesa(2);
Company::howManyCompany();