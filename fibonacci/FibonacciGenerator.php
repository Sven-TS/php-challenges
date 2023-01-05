<?php

interface FibonacciGeneratorInterface {
    /** @return int[] */
    public function getFibonacciSequence(int $limit): array;
}