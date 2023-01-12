<?php

class IntegerCollection {
    /** @var int[] */
    private array $elements = [];

    public function add(int $number): void
    {
        $this->elements[] = $number;
    }

    public function get(int $index): ?int
    {
        return $this->elements[$index] ?? null;
    }

    public function remove(int $index): void
    {
        unset($this->elements[$index]);
    }
}

$intCollection = new IntegerCollection();

for($i=0; $i<1000; $i++) {
    $intCollection->add($i);
}
