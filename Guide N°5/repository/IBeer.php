<?php
    namespace repository;

    use models\Beer as Beer;

    interface IBeer{
        function add(Beer $newBeer);
        function delete($name);
        function getAll();
    }
?>