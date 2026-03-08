function cekNilai() {
    var nim = document.getElementById("nim_mhs").value;
    var nilai = document.getElementById("nilai_angka").value;
    var display = document.getElementById("tampil_hasil");

    if (nilai < 0 || nilai > 100 || nilai === "") {
        display.innerHTML = "Nilai tidak valid!";
    } 
    else if (nilai >= 80) {
        display.innerHTML = "NIM: " + nim + "<br>Huruf Mutu: A";
    } 
    else if (nilai >= 70) {
        display.innerHTML = "NIM: " + nim + "<br>Huruf Mutu: B";
    } 
    else if (nilai >= 60) {
        display.innerHTML = "NIM: " + nim + "<br>Huruf Mutu: C";
    } 
    else if (nilai >= 50) {
        display.innerHTML = "NIM: " + nim + "<br>Huruf Mutu: D";
    } 
    else {
        display.innerHTML = "NIM: " + nim + "<br>Huruf Mutu: E";
    }
}