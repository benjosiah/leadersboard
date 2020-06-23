<?php

class Get_data{

  
    // public $json;
    

// public function __construct($data) {
//     $data = $this->json;
// }
    
    public function boardlist()
    {
        $list=file_get_contents('list.json');
        $r=json_decode($list, 1);
        $results=[];
        $points=array_column($r, 'points');
        array_multisort($points, SORT_DESC, $r);
        return $r;
    }
    public function lead(){
        $list=$this->boardlist();
        $lead['first']=$list[0];
        $lead['second']=$list[1];
        $lead['third']=$list[2];
        return $lead;
    }

    public function list(){
        $lists=$this->boardlist();
        $lead=$this->lead();
        $new_list=[];
        // print_r($lists);

        foreach ($lists as $list) {
            if (!in_array($list,$lead)) {
                array_push($new_list, $list);
            }
        }
        return $new_list;
    }
}
