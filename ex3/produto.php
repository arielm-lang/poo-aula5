<?php
class LocacaoBicicleta {
    private string $nome;
    private string $tipoBike;
    private int $quantidade;

    public function __construct(string $nome, string $tipoBike, int $quantidade) {
        $this->nome = $nome;
        $this->tipoBike = $tipoBike;
        $this->quantidade = $quantidade;
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function getTipoBike(): string {
        return $this->tipoBike; // Corrigido
    }

    public function getQuantidade(): int {
        return $this->quantidade;
    }

    public function calcularValorBruto(): float {
        // Usa $this->quantidade em vez de $this->horas
        if ($this->tipoBike === 'Comum') {
            return $this->quantidade * 10.0;
        } else {
            return $this->quantidade * 18.0;
        }
    }

    public function calcularDesconto(): float {
        if ($this->quantidade >= 5) {
            return $this->calcularValorBruto() * 0.10;
        }
        
        return 0.0;
    }

    public function calcularValorFinal(): float {
        return $this->calcularValorBruto() - $this->calcularDesconto();
    }
}