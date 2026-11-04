<?php

class EmprestimoLivro {
    private string $nomeUsuario;
    private string $tituloLivro;
    private int $diasAtraso;

    public function __construct(string $nomeUsuario, string $tituloLivro, int $diasAtraso) {
        $this->nomeUsuario = $nomeUsuario;
        $this->tituloLivro = $tituloLivro;
        $this->diasAtraso = $diasAtraso;
    }

    public function getNomeUsuario(): string {
        return $this->nomeUsuario;
    }

    public function getTituloLivro(): string {
        return $this->tituloLivro;
    }

    public function getDiasAtraso(): int {
        return $this->diasAtraso;
    }

    // Retorna "Em dia" ou "Atrasado"
    public function verificarSituacao(): string {
        if ($this->diasAtraso <= 0) {
            return 'Em dia';
        }
        return 'Atrasado';
    }

    // Calcula a multa conforme as regras do exercício
    public function calcularMulta(): float {
        if ($this->diasAtraso <= 0) {
            return 0.0;
        }

        if ($this->diasAtraso <= 5) {
            // Do 1º ao 5º dia: R$ 2,00 por dia
            return $this->diasAtraso * 2.0;
        }

        // A partir do 6º dia: R$ 2,00 nos 5 primeiros dias (R$ 10,00) + R$ 3,00 por dia adicional
        $diasExcedentes = $this->diasAtraso - 5;
        return (5 * 2.0) + ($diasExcedentes * 3.0);
    }
}