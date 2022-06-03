<?php

    namespace App\Clases;
    class Curso {
        private $id;
        private $siglas;
        private $nombre;
        private $siglasCiclo;

        public function __construct($id, $siglas, $nombre, $siglasCiclo)
        {
            $this->id = $id;
            $this->siglas = $siglas;
            $this->nombre = $nombre;
            $this->siglasCiclo = $siglasCiclo;
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

        public function getSiglasCiclo()
        {
            return $this->siglasCiclo;
        }

        public function setSiglasCiclo($siglasCiclo)
        {
            $this->siglasCiclo = $siglasCiclo;

            return $this;
        }
    }
