<?php
require_once("Controller.php");
class ItemController  extends Controller {
    
        public function __construct() {
        parent::__construct();

    }
    public function add_item($input) {
        
        $sql = "INSERT INTO 
                items(itemname, itemcost,itemprice,itemunits,itemcat,itempath,itemhit) 
                VALUES (:itemname, :itemcost,:itemprice,:itemunits,:itemcat,:itempath,:itemhit)";
        $stmt = $this->db_connect->prepare($sql);
        $stmt->bindParam(':itemname', $input->get_item_name(), PDO::PARAM_STR);
        $stmt->bindParam(':itemcost', $input->get_item_cost(), PDO::PARAM_STR);
        $stmt->bindParam(':itemprice', $input->get_item_price(), PDO::PARAM_STR);
        $stmt->bindParam(':itemunits', $input->get_item_units(), PDO::PARAM_INT);
        $stmt->bindParam(':itemcat', $input->get_item_cat(), PDO::PARAM_STR);
        $stmt->bindParam(':itempath', $input->get_item_path(), PDO::PARAM_STR);
        $stmt->bindParam(':itemhit', $input->get_item_hit(), PDO::PARAM_STR);
        $stmt->execute();
        
   }
   
   public function search_item($item) {
       
       
   }
   public function get_item_list() {
        $sql = "SELECT * from items";
        foreach ($this->db_connect->query($sql) as $row) {
            $dataSet[] = $row['itempath'];
        }

        if (!empty($dataSet))
            return $dataSet;
        else
            return null;
    }

}
?>