## Depthy compares diffs on arrays recursively
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/arthurkushman/depthy/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/arthurkushman/depthy/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/arthurkushman/depthy/badges/build.png?b=master)](https://scrutinizer-ci.com/g/arthurkushman/depthy/build-status/master)
[![Code Intelligence Status](https://scrutinizer-ci.com/g/arthurkushman/depthy/badges/code-intelligence.svg?b=master)](https://scrutinizer-ci.com/code-intelligence)
[![License: MIT](https://img.shields.io/badge/License-MIT-blue.svg)](https://opensource.org/licenses/MIT)

The motivation for this lib to born, is the fact that sometimes u need to get diff of >= 2 arrays, 
but don't want to rewrite/search the solution again. 

### Installation

```php
composer require arthurkushman/depthy
```

### Compare multiple arrays by keys recursively

```php
    use depthy\Diff;

    $this->diff = new Diff();
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
    ]); // ['b', 'abc']  
```

### Compare multiple arrays by values recursively

```php
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
    ]); // ['b' => ['abc' => 123], 'abc' => 123, 'bar' => 'baz']
```