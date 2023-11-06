<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan JS1</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    function validateForm() {
        console.log("ini baris 13");
        //return false; //dimanapun ketemu return akan exit function. perintah bawahnya tidak akan dijalankan
        console.log("ini baris 15");
        return true; //dalam 1 function bisa ada lebih dari 1 function
        console.log("ini baris 17");
    }
    // = assignment value
    // == compairs

    function validate(){
        var bil1 = document.getElementById("bil1");
        var bil2 = document.getElementById("bil2");
        var nrp = document.getElementById("nrp");

        // if (bil1.value == "" && bil2.value == ""){
        //     alert("bilangan 1 dan 2 harus diisi");
        //     return false;
        // }else if (bil1.value == ""){  //isiannya lupa g diisi
        //     alert("bilangan 1 harus diisi");
        //     return false;
        // }else if (bil2.value == ""){
        //     alert("bilangan 2 harus diisi");
        //     return false;
        // }else{
        //     return true;
        // }
        if (bil1.value == ""){
            alert("bilangan 1 harus diisi");
            bil1.focus();
            return false;
        }
        if (bil2.value == ""){
            //alert("bilangan 2 harus diisi");
            bil2.placeholder = "mohon diisi angka";
            bil2.focus();
            return false;
        }
        if(nrp.value == ""){
            alert("nrp harus diisi")
            return false;
        }
        if(isNaN(nrp.value)){
            alert("nrp harus diisi angka");
            return false;
        }
        if (nrp.value.length !== 10){
            alert("nrp harus 10 digit");
            return false;
        }

    }
    </script>
</head>

<body>
    <div class="container">
        <form action="https://www.detik.com" method="get" onsubmit="return validate();">
            <div class="form-group">
                <label for="bil1">Bilangan 1:</label>
                <input type="number" id="bil1" class="form-control">
            </div>
            <div class="form-group">
                <label for="bil2">Bilangan 2:</label>
                <input type="number" id="bil2" class="form-control">
            </div>
            <div class="form-group">
                <label for="nrp">NRP: </label>
                <input type="text" id="nrp" class="form-control">
            </div>
            <!-- <input type="number" id="bil2" class="form-control" placeholder="Harus diisi" name="bil1">  -->
            <input type="submit" value="KIRIM" class="btn btn-primary">
        </form>
    </div>
</body>

</html>
