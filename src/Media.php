<?php
class Media
{
    public function calcularMedia($notas)
    {
        $soma = 0;

        if (count($notas) === 0) return 0;

        foreach ($notas as $nota) {
            $soma += $nota;
        }
        return $soma / count($notas);
    }
}
