<?php

class Setup {

    public $env = [];
    private $envfile = ".env";

    public function __construct() {
        $datarow = fopen($this->envfile, "rb");

        $data = [];

        $i = 0;

        while(!feof($datarow)) {
            $ligne = fgets($datarow);

            $ligne2 = preg_replace("#\n|\t|\r#","",$ligne);

            if ($ligne2 != "") {
                array_push($data, $ligne2);
            }
        }

        $rd = [];
        $result = [];

        foreach ($data as $d) {
            $rd = explode("=", $d);
            $result[$rd[0]] = $rd[1];
        }

        // echo sizeof($data);

        //echo $this->preint($keys);


    
        $this->env = $result;
    }

    public function getEnv(string $key) {
        return $this->env[$key];
    }
}