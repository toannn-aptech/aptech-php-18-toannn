var hinhMot = document.getElementById('hinh-1');
var hinhHai = document.getElementById('hinh-2');
var hinhBa = document.getElementById('hinh-3');

setInterval(chuyenSlide, 2000);

function chuyenSlide() {
    console.log(hinhMot.style.display);
    console.log(hinhHai.style.display);
    console.log(hinhBa.style.display);
    if (hinhMot.style.display == 'block') {
        hinhMot.style.display = 'none';
        hinhHai.style.display = 'block';
        // hinhBa.style.display = 'none';
    } else if (hinhHai.style.display == 'block') {
        // hinhMot.style.display = 'none';
        hinhHai.style.display = 'none';
        hinhBa.style.display = 'block';
    } else {
        hinhMot.style.display = 'block';
        // hinhHai.style.display = 'none';
        hinhBa.style.display = 'none';
    }

    // setTimeout(chuyenSlide, 2000);

}

// setTimeout(chuyenSlide, 2000);