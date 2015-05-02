<?php

/**
 * Materials Home
 *
 */

class Materials extends Controller
{
    /**
     * PAGE: index
     */
    public function index()
    {
        //create
        $materials = new Materials_Model();

        //$results = $materials->insert($values);
        //var_dump;

        //link
        $this->view['materials'] = $materials->select();
        // load views
        $this->render('index');
    }
    public function add()
    {
            $materials = new Materials_Model();
           
            $data = array(
                
                'title'=>$_POST["title"],
                'author'=>$_POST["author"],
                'call_number'=>$_POST["call_number"],
                'date_requested'=>$_POST["date_requested"],
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
                );

            $materials->insert('materials',$data);

            $this->render('update');
                

    }


    public function selectRequest()
    {
        var e = document.getElementById("id");
        var request = e.options[e.selectedIndex].value;
        var newpage = "manage.php" + "?id=" + e.options[e.selectedIndex].text;
        newpage = encodeURI(newpage);
        location.href = newpage;

        $currentPage = "manage";
        //SELECT * FROM materials, requests WHERE requests.id = materials.request_id
    }

}
