<?php
    namespace repository;

    use repository\IBeer as IBeer;
    use models\Beer as Beer;

    class BeerRepository implements IBeer{
        private $beerList = array();

        public function add(Beer $newBeer){
            $this->retriveData();
            array_push($this->beerList,$newBeer);
            $this->saveData();
        }

        public function getAll(){
            $this->retriveData();
            return $this->beerList;
        }
        
        public function delete($code){
            $this->retriveData();
            $newList = array();
            foreach($this->beerList as $beer){
                if($beer->getCode() != $code){
                    array_push($newList,$beer);
                }
            }

            $this->beerList = $newList;
            $this->saveData();
        }

        private function saveData(){
            $arrayToEncode = array();

            foreach($this->beerList as $beer){
                $valuesArray["code"] = $beer->getCode();
                $valuesArray["name"] = $beer->getName();
                $valuesArray["description"] = $beer->getDescription();
                $valuesArray["type"] = $beer->getType();

                array_push($arrayToEncode,$valuesArray);
            }

            $jsonContent = json_encode($arrayToEncode,JSON_PRETTY_PRINT);
            file_put_contents('../Data/Beer.json',$jsonContent);
        }

        private function retriveData(){
            $this->beerList = array();

            $jsonPath = $this->GetJsonFilePath();

            $jsonContent = file_get_contents($jsonPath);

            $arrayToDecode = ($jsonContent) ? json_decode($jsonContent,true) : array();
            
            foreach($arrayToDecode as $valuesArray){
                $beer = new Beer($valuesArray['code'],$valuesArray['name'],$valuesArray['description'],$valuesArray['type']);

                array_push($this->beerList,$beer);
            }
        
        }

        function GetJsonFilePath(){
            $initialPath = "Data/Beer.json";
            if(file_exists($initialPath)){
                $jsonFilePath = $initialPath;
            }else{
                $jsonFilePath = '../'.$initialPath;
            }
            return $jsonFilePath;
        }
    }

?>