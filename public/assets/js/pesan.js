// Script CheckBox on Load
var tambah = 0;
var total = 0;
// Get the output total
var totalku = document.getElementById("total");
var totalku2 = document.getElementById("total1");

function nambah() {
    var rego = document.getElementById("hargapdh");
    if (document.getElementById('nambah1').value == "XXL" || document.getElementById('nambah1').value == "XXXL") {
        $('input:text#hargapdh').attr('placeholder', 'Rp. 105.000,-');
            totalku.value = "Rp. " + (total + 5000) + ",-";
            totalku2.value = "Rp. " + (total + 5000) + ",-";
    } else {
            $('input:text#hargapdh').attr('placeholder', 'Rp. 100.000,-');
            tambah = 0;
            totalku.value = "Rp. " + total + ",-";
            totalku2.value = "Rp. " + total + ",-";
    }
}

if ($('#pdh').is(':checked')) {
    formpdh.style.display = "block";
    total = total + 100000;
    if (document.getElementById('nambah1').value == "XXL" || document.getElementById('nambah1').value == "XXXL") {
        $('input:text#hargapdh').attr('placeholder', 'Rp. 105.000,-');
        totalku.value = "Rp. " + (total + 5000) + ",-";
        totalku2.value = "Rp. " + (total + 5000) + ",-";
    }
} else {
    formpdh.style.display = "none";
}

if ($('#kaos').is(':checked')) {
    formkaos.style.display = "block";
    total = total + 50000;
    if (document.getElementById("pdh").checked == true) {
        if (document.getElementById('nambah1').value == "XXL" || document.getElementById('nambah1').value == "XXXL") {
            totalku.value = "Rp. " + (total + 5000) + ",-";
            totalku2.value = "Rp. " + (total + 5000) + ",-";
        } else {
            totalku.value = "Rp. " + total + ",-";
            totalku2.value = "Rp. " + total + ",-";
        }
    } else {
        totalku.value = "Rp. " + total + ",-";
        totalku2.value = "Rp. " + total + ",-";
    }
} else {
    formkaos.style.display = "none";
}

if ($('#idcard').is(':checked')) {
    formidcard.style.display = "block";
    total = total + 20000;
    if (document.getElementById("pdh").checked == true) {
        if (document.getElementById('nambah1').value == "XXL" || document.getElementById('nambah1').value == "XXXL") {
            totalku.value = "Rp. " + (total + 5000) + ",-";
            totalku2.value = "Rp. " + (total + 5000) + ",-";
        } else {
            totalku.value = "Rp. " + total + ",-";
            totalku2.value = "Rp. " + total + ",-";
        }
    } else {
        totalku.value = "Rp. " + total + ",-";
        totalku2.value = "Rp. " + total + ",-";
    }
} else {
    formidcard.style.display = "none";
}


// Script CheckBox on click
function cekpdh() {
    // Get the checkbox
    var checkBox = document.getElementById("pdh");
    // Get the output text
    var form = document.getElementById("formpdh");
   

    // If the checkbox is checked, display the output form
    if (checkBox.checked == true){
         form.style.display = "block";
         total = total+100000;
        if (document.getElementById('nambah1').value == "XXL" || document.getElementById('nambah1').value == "XXXL") {
            totalku.value = "Rp. " + (total + 5000) + ",-";
            totalku2.value = "Rp. " + (total + 5000) + ",-";
        } else {
            totalku.value = "Rp. " + total + ",-";
            totalku2.value = "Rp. " + total + ",-";
        }
    } else {
        form.style.display = "none";
        total = total-100000;
        totalku.value = "Rp. " + total + ",-";
        totalku2.value = "Rp. " + total + ",-";
    }
}

function cekkaos() {
    // Get the checkbox
    var checkBox = document.getElementById("kaos");
    // Get the output text
    var form = document.getElementById("formkaos");

    // If the checkbox is checked, display the output form
    if (checkBox.checked == true) {
        form.style.display = "block";
        total = total + 50000;
        if (document.getElementById("pdh").checked == true) {
            if (document.getElementById('nambah1').value == "XXL" || document.getElementById('nambah1').value == "XXXL") {
                totalku.value = "Rp. " + (total + 5000) + ",-";
                totalku2.value = "Rp. " + (total + 5000) + ",-";
            } else {
                totalku.value = "Rp. " + total + ",-";
                totalku2.value = "Rp. " + total + ",-";
            }
        } else {
            totalku.value = "Rp. " + total + ",-";
            totalku2.value = "Rp. " + total + ",-";
        }
    } else {
        form.style.display = "none";
        total = total - 50000;
        if (document.getElementById("pdh").checked == true) {
            if (document.getElementById('nambah1').value == "XXL" || document.getElementById('nambah1').value == "XXXL") {
                totalku.value = "Rp. " + (total + 5000) + ",-";
                totalku2.value = "Rp. " + (total + 5000) + ",-";
            } else {
                totalku.value = "Rp. " + total + ",-";
                totalku2.value = "Rp. " + total + ",-";
            }
        } else {
            totalku.value = "Rp. " + total + ",-";
            totalku2.value = "Rp. " + total + ",-";
        }
    }
}

function cekidcard() {
    // Get the checkbox
    var checkBox = document.getElementById("idcard");
    // Get the output text
    var form = document.getElementById("formidcard");

    // If the checkbox is checked, display the output form
    if (checkBox.checked == true) {
        form.style.display = "block";
        total = total + 20000;
        if (document.getElementById("pdh").checked == true) {
            if (document.getElementById('nambah1').value == "XXL" || document.getElementById('nambah1').value == "XXXL") {
                totalku.value = "Rp. " + (total + 5000) + ",-";
                totalku2.value = "Rp. " + (total + 5000) + ",-";
            } else {
                totalku.value = "Rp. " + total + ",-";
                totalku2.value = "Rp. " + total + ",-";
            }
        } else {
            totalku.value = "Rp. " + total + ",-";
            totalku2.value = "Rp. " + total + ",-";
        }
    } else {
        form.style.display = "none";
        total = total - 20000;
        if (document.getElementById("pdh").checked == true) {
            if (document.getElementById('nambah1').value == "XXL" || document.getElementById('nambah1').value == "XXXL") {
                totalku.value = "Rp. " + (total + 5000) + ",-";
                totalku2.value = "Rp. " + (total + 5000) + ",-";
            } else {
                totalku.value = "Rp. " + total + ",-";
                totalku2.value = "Rp. " + total + ",-";
            }
        }else {
            totalku.value = "Rp. " + total + ",-";
            totalku2.value = "Rp. " + total + ",-";
        }
    }
}