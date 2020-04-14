// let mahasiswa = {
//     "nama" : "mus",
//     "nrp" : "12321313",
//     "email" : "musta@gmail.com"
// }

// console.log(JSON.stringify(mahasiswa));


// coba ajax

// var xhttp = new XMLHttpRequest();
// xhttp.onreadystatechange = function() {
//   if (this.readyState == 4 && this.status == 200) {
//     let mahasiswa = JSON.parse(this.responseText);
//     console.log(mahasiswa);
//   }
// };
// xhttp.open("GET", "coba.json", true);
// xhttp.send();

// coba jquery
$.getJSON('coba.json', function (data) {
    console.log(data);
})

