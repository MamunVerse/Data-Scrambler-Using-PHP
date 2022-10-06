<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-6 text-center">
            <h2>Data Scrambler</h2>
            <p>Use this application to scramble your data</p>
            <div>
                <a href="/?task=encode">Encode</a> |
                <a href="/?task=decode">Decode</a> |
                <a href="/?task=decode">Generate Code</a>
            </div>
        </div>
    </div>
    <div class="row justify-content-center mt-5">
        <div class="col-lg-6">
            <form>
                <div class="mb-3">
                    <label for="key" class="form-label">Key</label>
                    <input type="text" name="key" class="form-control" id="key" >
                </div>
                <div class="mb-3">
                    <label for="data" class="form-label">Data</label>
                    <input type="text" name="data" class="form-control" id="data" >
                </div>
                <div class="mb-3">
                    <label for="result" class="form-label">Data</label>
                    <textarea id="result" class="form-control" ></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Do It For Me</button>
            </form>
        </div>
    </div>
    <div class="row justify-content-center mt-5">
        <div class="col-lg-6">
            <form>
                <div class="mb-3">
                    <label for="fname" class="form-label">First Name</label>
                    <input type="text" name="fname" class="form-control" id="fname" value="<?php $fname; ?>">
                </div>
                <div class="mb-3">
                    <label for="lname" class="form-label">Last Name</label>
                    <input type="text" name="lname" class="form-control" id="lname"  value="<?php $lname; ?>">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="cb1">
                    <label class="form-check-label" for="cb1">Check me</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>