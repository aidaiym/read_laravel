<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="/css/app .css">
</head>

<body>
    <h1>Final Exam</h1>
    <div style="margin:50px">
    <h5>1. Write a program to convert a number from Arabic numerals to a number from
            Roman numerals. Write a reverse translation program.</h5>
        <input id="text-input" type="text">
        <button id="convert-button"
            onClick="var n = parseInt(document.getElementById('text-input').value);document.getElementById('text-output').value = convert(n);">Convert!</button>
        <input id="text-output" style="display:block" type="text">
    </div>
</body>
<script>
  
</script>
   <!-- <h5>1. Write a program to convert a number from Arabic numerals to a number from
            Roman numerals. Write a reverse translation program.</h5>
        <input id="text-input" type="text">
        <button id="convert-button"
            onClick="var n = parseInt(document.getElementById('text-input').value);document.getElementById('text-output').value = convert(n);">Convert!</button>
        <input id="text-output" style="display:block" type="text"> -->
        <!-- <h5 style="margin: 20px 0px;">2. Write a function to check if three numbers are coprime.</h5> -->
        <!-- <input id="hexadecimal-input" type="text">
        <button id="check-button"
            onClick="var hexadecimal_nimber = parseInt(document.getElementById('hexadecimal-input').value);document.getElementById('hexadecimal-output').value = ConvertStringToHex(str);">Check!</button> -->



<!-- 
    var alphabet = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'K', 'L', 'M', 'N', 'O', 'P']
    var txt = Array.from(new TextEncoder().encode(alphabet[2])).map(c => c.toString(16)).join(' ')
    function convert() {
        numb = document.getElementById('hexadecimal_num').value;
        var summ = Number(txt) + Number(numb);
        var convert_summ = Array.from(new TextEncoder().encode(summ)).map(c => c.toString(16)).join(' ');

        console.log(convert_summ);
    } -->

    <!-- // // Task 2
    // function isPrime(n) {
    //     if (n % 2 == 0)
    //         return false;
    //     for (let i = 3; i * i <= n; i += 2)
    //         if (n % i == 0)
    //             return false;
    //     return true;
    // }

    // function nextPrime(start) {
    //     let next = start + 1;
    //     while (!isPrime(next))
    //         next++;

    //     return next;
    // }

    // function areAdjacentPrimes(a, b, c) {
    //     if (!isPrime(a) || !isPrime(b) || !isPrime(c))
    //         return false;
    //     let next = nextPrime(a);
    //     if (next != b)
    //         return false;
    //     if (nextPrime(b) != c)
    //         return false;

    //     return true;
    // }
    // if (areAdjacentPrimes(11, 13, 19))
    //     document.write("Yes IT IS A COMPRIME NUMBERS!!!");
    // else
    //     document.write("NO IT IS NOT A COMPRIME NUMBERS!!")
 -->

<!-- 
 var numeralCodes = [
        ["", "I", "II", "III", "IV", "V", "VI", "VII", "VIII", "IX"],
        ["", "X", "XX", "XXX", "XL", "L", "LX", "LXX", "LXXX", "XC"],
        ["", "C", "CC", "CCC", "CD", "D", "DC", "DCC", "DCCC", "CM"]
    ];

    function convert(num) {
        var numeral = "";
        var digits = num.toString().split('').reverse();
        for (var i = 0; i < digits.length; i++) {
            numeral = numeralCodes[i][parseInt(digits[i])] + numeral;
        }
        return numeral;
    } -->