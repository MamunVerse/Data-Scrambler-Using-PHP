<?php
include_once "function.php";

$task = 'encode';
if(isset($_GET['task']) && $_GET['task']!=''){
    $task = $_GET['task'];
}
$key_original = 'abcdefghijklmnopqrstuvwxyz1234567890';
$key = 'abcdefghijklmnopqrstuvwxyz1234567890';

if('key' == $task){
    $key_original = str_split($key); // str_split used to make every character a array value
    shuffle($key_original); // shuffle used to randomize array value
    $key = join('', $key_original);
}else if (isset($_POST['key']) && $_POST['key']!=''){
    $key = $_POST['key'];
}

$scrambledData = '';
if('encode'== $task){
    $data = $_POST['data'] ?? '';
    if($data != ''){
        $scrambledData = scrambleData($data, $key);
    }

}

?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Scrambler Using PHP Key Encode Decode Generate</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-6 text-center">
            <h2>Data Scrambler</h2>
            <p>Use this application to scramble your data</p>
            <div>
                <a href="/index.php?task=encode">Encode</a> |
                <a href="/index.php?task=decode">Decode</a> |
                <a href="/index.php?task=key">Generate Key</a>
            </div>
        </div>
    </div>
    <div class="row justify-content-center mt-5">
        <div class="col-lg-6">
            <form method="post" action="index.php">
                <div class="mb-3">
                    <label for="key" class="form-label">Key</label>
                    <input type="text" name="key" class="form-control" id="key" <?php displayKey($key); ?>>
                </div>
                <div class="mb-3">
                    <label for="data" class="form-label">Data</label>
                    <textarea id="data" name="data" class="form-control" ><?php if(isset($_POST['data'])){echo $_POST['data']; } ?></textarea>
                </div>
                <div class="mb-3">
                    <label for="result" class="form-label">Result</label>
                    <textarea id="result" class="form-control" ><?php echo $scrambledData; ?></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Do It For Me</button>
            </form>
        </div>
    </div>
<!--    <div class="row justify-content-center mt-5">-->
<!--        <div class="col-lg-6">-->
<!--            <form>-->
<!--                <div class="mb-3">-->
<!--                    <label for="fname" class="form-label">First Name</label>-->
<!--                    <input type="text" name="fname" class="form-control" id="fname" value="">-->
<!--                </div>-->
<!--                <div class="mb-3">-->
<!--                    <label for="lname" class="form-label">Last Name</label>-->
<!--                    <input type="text" name="lname" class="form-control" id="lname"  value="">-->
<!--                </div>-->
<!--                <div class="mb-3 form-check">-->
<!--                    <input type="checkbox" class="form-check-input" id="cb1">-->
<!--                    <label class="form-check-label" for="cb1">Check me</label>-->
<!--                </div>-->
<!--                <button type="submit" class="btn btn-primary">Submit</button>-->
<!--            </form>-->
<!--        </div>-->
<!--    </div>-->
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>