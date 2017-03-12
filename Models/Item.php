<?php


class Item {
       
       public function __construct($input) {
         $this->itemname = $input['itemname'];
         $this->itemcost = $input['itemcost'];
         $this->itemprice = $input['itemprice'];
         $this->itemunits = $input['itemunits'];
         $this->itemcat  =$input['itemcat'];
         $this->itempath = $input['itempath'];
         $this->itemhit = $input['itemhit'];
    }
    
    
    public function get_item_name() {
        return $this->itemname;
    }

    public function get_item_cost() {
        return $this->itemcost;
    }

    public function get_item_price() {
        return $this->itemprice;
    }

    public function get_item_units() {
        return $this->itemunits;
    }

    public function get_item_cat() {
        return $this->itemcat;
    }
    public function get_item_path() {
        return $this->itempath;
    }
    public function get_item_id() {
        return $this->itemid;
    }
     public function get_item_hit() {
        return $this->itemhit;
    }
    
    

    private function set_item_name($value) {
        $this->itemname = $value;
    }

    private function set_item_cost($value) {
        $this->itemcost = $value;
    }

    private function set_item_price($value) {
        $this->itemprice = $value;
    }

    private function set_item_units($value) {
        $this->itemunit = $value;
    }

    private function set_item_cat($value) {
        $this->itemcat = $value;
    }

}
?>