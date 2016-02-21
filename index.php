<?php
/**
 * Created by PhpStorm.
 * User: Ronald
 * Date: 20/02/2016
 * Time: 21:31
 */

    //Nas interfaces podemos colocar apenas as assinaturas dos métodos e as classes que as implementam definem o método...
    interface InterfaceFiguraGeometrica{

      public function perimetro();

    }

    //Uma classe abstrata pode conter métodos completos e que podem ser utilizados por classes filhas...
    abstract class ClasseAbstrataFiguraGeometrica{

            public function perimetroFiguraGeometrica()
            {
                   return 'Classe abstrata: Calculo o perimetro de uma forma.';
            }
    }

    class Retangulo extends ClasseAbstrataFiguraGeometrica implements InterfaceFiguraGeometrica
    {

        private $ladoMaior;
        private $ladoMenor;

        public function setLadoMaior($ladoMaior)
        {
            $this->ladoMaior = $ladoMaior;
        }

        public function setLadoMenor($ladoMenor)
        {
            $this->ladoMenor = $ladoMenor;
        }

        function __construct($ladoMaior, $ladoMenor)
        {
                $this->setLadoMaior($ladoMaior);
                $this->setLadoMenor($ladoMenor);
        }

        public function getLadoMaior()
        {
            return $this->ladoMaior;
        }

        public function getLadoMenor()
        {
            return $this->ladoMenor;
        }

        public function perimetro()
        {
            return (2 * $this->getLadoMaior()) + (2 * $this->getLadoMenor());
        }
    }

    $figuraGeometrica = new Retangulo(4,6);

    //Método específico para o retângulo e que a Interface obriga a implementar...
    echo 'O perímetro do retângulo calculado ('.$figuraGeometrica->getLadoMaior().','.$figuraGeometrica->getLadoMenor().') é '.$figuraGeometrica->perimetro().'<br/>';

    //Método genérico utilizado pela classe abstrata que pode não ser exatamente o que a classe filha precisa...
   echo $figuraGeometrica->perimetroFiguraGeometrica();






