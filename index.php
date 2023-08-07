<?php
// function factorial ($N) {
//     $result = 1;
//     for($i = 1; $i <= $N; $i++){
//         $result *= $i;
//     }

//     return $result;
// }
// $solution = factorial(12);
//  print "<h1> $solution</h1>";
// $prime = array();
//  function primeNumbers($N) {

//  }


// write and implement a program to compute all the prime numbers between 1 and an input number “N” 

// while adding the 2 largest numbers from the output.  
function isPrime($N)
{
    if ($N < 2) {
        return false;
    }

    for ($i = 2; $i <= sqrt($N); $i++) {
        if ($N % $i === 0) {
            return false;
        }
    }

    return true;
}

function computePrimesAndSum($n)
{
    $primes = [];
    for ($i = 2; $i <= $n; $i++) {
        if (isPrime($i)) {
            $primes[] = $i;
        }
    }

    $largestPrimes = array_slice($primes, -2); // Get the 2 largest prime numbers

    $sum = array_sum($largestPrimes); // Sum the 2 largest prime numbers

    return [$primes, $sum];
}

$inputN = 100; // Replace with your desired input value

list($primeNumbers, $sumOfLargestPrimes) = computePrimesAndSum($inputN);

echo "Prime numbers between 1 and $inputN: " . implode(", ", $primeNumbers) . "\n";
echo "Sum of the two largest prime numbers: $sumOfLargestPrimes\n";
?>
