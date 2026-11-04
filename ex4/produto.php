<?php

class Reserva {
    private string $nome;
    private string $tipoQuarto;
    private int $diarias;
    private string $cafe;

    public function __construct(string $nome, string $tipoQuarto, int $diarias, string $cafe) {
        $this->nome = $nome;
        $this->tipoQuarto = $tipoQuarto;
        $this->diarias = $diarias;
        $this->cafe = $cafe;
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function getTipoQuarto(): string {
        return $this->tipoQuarto;
    }

    public function getDiarias(): int {
        return $this->diarias;
    }

    public function getCafe(): string {
        return $this->cafe;
    }

    public function calcularDiariaBase(): float {
        if ($this->tipoQuarto === 'Suíte') {
            return $this->diarias * 300.0;
        }
        return $this->diarias * 150.0; // Standard
    }

    public function calcularValorCafe(): float {
        if ($this->cafe === 'Sim') {
            return $this->diarias * 30.0;
        }
        return 0.0;
    }

    public function calcularValorTotal(): float {
        return $this->calcularDiariaBase() + $this->calcularValorCafe();
    }
}