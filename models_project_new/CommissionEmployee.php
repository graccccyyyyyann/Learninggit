<?php


class CommissionEmployee {
    private  $firstName;
    private $lastName;
    private  $socialSecurityNumber;
    private  $grossSales;
    private  $commissionRate;

// Constructor
    public function __construct($firstName, $lastName, $socialSecurityNumber, $grossSales, $commissionRate){
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->socialSecurityNumber= $socialSecurityNumber;
        $this->grossSales= $grossSales;
        $this->commissionRate= $commissionRate;
    }

//Getters and Setters
    public function getfirstName(){
        return $this->firstName;
    }
    public function setfirstName($firstName){
        $this->firstName = $firstName;
    }


    public function getlastName(){
        return $this->lastName;
    }
    public function setlastName($lastName){
        $this->lastName = $lastName;
    }

    public function getsocialSecurityNumber(){
        return $this-> socialSecurityNumber;
    }
    public function setsocialSecurityNumber($socialSecurityNumber){
        $this->socialSecurityNumber = $socialSecurityNumber;
    }


    public function getgrossSales(){
        return $this->grossSales;
    }
    public function setgrossSales($grossSales):void
    {
        if($grossSales < 0.0){
            throw new InvalidArgumentException("Gross sales should be greater >= 0.0");
        }

        $this->grossSales =$grossSales;
    }


    public function getcommissionRate(){
        return $this-> commissionRate;
    }
    public function setcommissionRate($commissionRate): void {
        if($commissionRate < 0.0 || $commissionRate > 1.0){
            throw new InvalidArgumentException("Commssion rate should be btween 0.0 and 1.0");
        }
        $this->commissionRate =$commissionRate;
    }



    public function earnings(): float
    {
        return $this->grossSales * $this->commissionRate;
    }
        public function display(): string {
            return sprintf(
                "Name: %s %s\nSSN: %s\nGross Sales: $%.2f\nCommission Rate: %.2f",
                $this->firstName,
                $this->lastName,
                $this->socialSecurityNumber,
                $this->grossSales,
                $this->commissionRate
            );
        }








}
try{
    $CommissionEmployee1 = new CommissionEmployee("Ann","Apeani", "2232343",-0.9, 0.9); //Invalid gross Sales
    $totalEarnings = $CommissionEmployee1->earnings();
    echo "Earnings: $" .$totalEarnings."\n";
}catch (InvalidArgumentException $e) {
    echo "Error: " . $e->getMessage() . "\n";
}
try{
    $CommissionEmployee2 = new CommissionEmployee("Afia","Apeani","6755757",45.8,4.6);
    $totalEarnings = $CommissionEmployee2->earnings();
    echo "Earnings: $" .$totalEarnings."\n";
}catch (InvalidArgumentException $e) {
    echo "Error: " . $e->getMessage() . "\n";


    try{
        $CommissionEmployee3 = new CommissionEmployee("Michael","Apeani","672351137",434.7,0.6);
        $totalEarnings = $CommissionEmployee3->earnings();
        echo "Earnings: $" .$totalEarnings."\n";
    }catch (InvalidArgumentException $e) {
        echo "Error: " . $e->getMessage() . "\n";
    }


}
