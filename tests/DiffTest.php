<?php

namespace depthytests;


use depthy\Diff;
use PHPUnit\Framework\TestCase;

/**
 * Class DiffTest
 *
 * @package depthytests
 *
 * @property Diff diff
 */
class DiffTest extends TestCase
{

    private $diff;

    public function setUp()
    {
        parent::setUp();
        $this->diff = new Diff();
    }

    /**
     * @test
     */
    public function it_returns_diff_keys()
    {
        $diff = $this->diff->getKeys([
            'a' => 'b',
            'b' => [
                'abc' => 123,
            ],
        ], [
            'a' => 'b',
            'c' => [
                'xyz',
            ],
        ]);
        $this->assertArraySubset(['b', 'abc'], $diff);
    }

    /**
     * @test
     */
    public function it_returns_diff_pairs()
    {
        $diff = $this->diff->getPairs([
            'a' => 'b',
            'b' => [
                'abc' => 123,
            ],
            'c' => [
                'bar' => 'baz',
            ],
        ], [
            'a' => 'b',
            'c' => [
                'xyz',
            ],
        ]);
        // in c the only inconsistent data is
        $this->assertArraySubset(['b' => ['abc' => 123], 'abc' => 123, 'bar' => 'baz'], $diff);
    }
}