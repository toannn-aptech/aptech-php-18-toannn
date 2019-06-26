var array = ['Nam', 'Phat', 'A'];
console.log(array);
console.log(array[0]);
var index = 0;
// document.getElementById('nguoi-so-'+ (index + 1)).innerHTML = array[index];

for (var index = 0; index < array.length; index = index + 1) {
    document.getElementById('nguoi-so-' + (index + 1)).innerHTML = array[index];
}

// Object:
var doiTuongNam = {
    name: 'Nam',
    age: 19,
    "gioi-tinh": 'male',
    married: false,
    "name-of-dog": ['phoc', 'cun'],
    tiengKeu: function (hanhDong) {
        // console.log(hanhDong + 'ec ec');
        return {
            name: 'Heo'
        }
    }
};

console.log(doiTuongNam.name);
console.log(doiTuongNam["gioi-tinh"]);
console.log(doiTuongNam['name-of-dog']);
console.log(doiTuongNam.tiengKeu('dungKeu'));
console.log(doiTuongNam.tiengKeu().name);




var arrayNameOfDog = doiTuongNam['name-of-dog'];
for (var i = 0; i < arrayNameOfDog.length; i++) {
    console.log(i);
    var heading = document.createElement('h1');
    var contentOfHeading = document.createTextNode(arrayNameOfDog[i]);
    heading.appendChild(contentOfHeading);
    document.body.appendChild(heading);
}