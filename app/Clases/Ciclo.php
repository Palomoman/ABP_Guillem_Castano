<?php

    namespace App\Clases;
    class Ciclo {
        private $id;
        private $siglas;
        private $nombre;

        public function __construct($id, $siglas, $nombre)
        {
            $this->id = $id;
            $this->siglas = $siglas;
            $this->nombre = $nombre;
        }

        public static function getIndexCiclo($ciclos, $id)
        {
                $found = -1;
                foreach ($ciclos as $value) {
                        if ($value.getId() == $id) {
                                $found = 0;
                        }
                }
                return $found;
        }

        public function getId()
        {
                return $this->id;
        }

        public function setId($id)
        {
                $this->id = $id;

                return $this;
        }

        public function getSiglas()
        {
                return $this->siglas;
        }

        public function setSiglas($siglas)
        {
                $this->siglas = $siglas;

                return $this;
        }

        public function getNombre()
        {
                return $this->nombre;
        }

        public function setNombre($nombre)
        {
                $this->nombre = $nombre;

                return $this;
        }
    }
