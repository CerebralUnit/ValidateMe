<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<link rel="stylesheet" href="css/validateme.css">
<style>
    *, *:after, *:before{
        box-sizing: border-box;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
    }
    html, body{
        margin: 0;
        padding: 0;
        font-family: arial;
    }
    form{
        width: 300px;
        margin: 0 auto;
    }
    h1{
        font-size: 40px;
        margin-left: 24px;
    }
    .header{
        height: 150px;
        width: 100%;
        padding-top: 19px;
        background: #00d;
        color: #fff;
    }
  
</style>
<body>
    <div class="header"><h1>ValidateMe</h1></div>
    <form action="">
        <input type="text" placeholder="name" class="name">
        <input type="text" placeholder="email" class="email">
        <input type="text" placeholder="address" class="address">
        <input type="text" placeholder="phone" class="phone">
        <input type="text" placeholder="number" class="number">
        <input type="text" placeholder="decimal" class="decimal">
        <input type="text" placeholder="date" class="date">
        <select name="credit" id="credit">
            <option value="discover">Discover</option>
            <option value="mastercard">Mastercard</option>
            <option value="visa">Visa</option>
        </select>
        <input type="text" placeholder="creditnumber" class="creditnumber">
        <input type="text" placeholder="alphanumeric" class="alphanumeric">
        <input type="text" placeholder="ip" class="ip">
        <input type="text" placeholder="money" class="money">
        <input type="text" placeholder="nonnumber" class="nonnumber">
         <input type="text" placeholder="integer" class="integer">
         <input type="text" placeholder="range" class="range">
         <input type="password" placeholder="password" class="password">
    </form>



</body>
   <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
   <script src="js/jquery.validate.js"></script>
   <script>
   $(window).load(function(){

        $('.name')        .validate('letter', 'nil', true);
        $('.email')       .validate('email');
        $('.address')     .validate('address');
        $('.phone')       .validate('phone');
        $('.number')      .validate('number');
        $('.decimal')     .validate('decimal');
        $('.date')        .validate('date');
        $('.creditnumber').validate('credit', '#credit');
        $('.alphanumeric').validate('alphanumeric', 'nil', true);
        $('.ip')          .validate('ip');
        $('.money')       .validate('money');
        $('.nonnumber')   .validate('nonNumber');
        $('.integer')     .validate('integer');
        $('.range')       .validate('range', 'nil', 'nil', 5, 12);
        $('.password')    .validate('password', 'nil', 'nil', 5, 12, [ 'a','A', 9, '!', 'A!']);
   });
        
   </script>
</html>



















