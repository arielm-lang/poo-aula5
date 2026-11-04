<?php

class Vendedor {
    private string $nome;
    private float $salarioBase;
    private float $totalVendas;

    public function __construct(string $nome, float $salarioBase, float $totalVendas) {
        $this->nome = $nome;
        $this->salarioBase = $salarioBase;
        $this->totalVendas = $totalVendas;
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function getSalarioBase(): float {
        return $this->salarioBase;
    }

    public function getTotalVendas(): float {
        return $this->totalVendas;
    }

    // Calcula a comissão com base nas vendas
    public function calcularComissao(): float {
        if ($this->totalVendas > 5000) {
            return $this->totalVendas * 0.06; // 6%
        }
        return $this->totalVendas * 0.04; // 4%
    }

    // Verifica se o vendedor atingiu a meta para ganhar o bônus de R$ 100,00
    public function calcularBonus(): float {
        if ($this->totalVendas > 10000) {
            return 100.0;
        }
        return 0.0;
    }

    // Retorna a soma do salário-base, comissão e bônus
    public function calcularSalarioFinal(): float {
        return $this->salarioBase + $this->calcularComissao() + $this->calcularBonus();
    }
}