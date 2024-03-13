/*Bilet Fiyatı gidiş tl*/
var gidisTLValueElement = document.getElementById('gidistl');
var gidisParaInput = document.getElementById('gidispara');

gidisParaInput.addEventListener('input', function() {
  var gidisSelectedValue = parseInt(this.value);
  gidisTLValueElement.textContent = gidisSelectedValue + ' TL';
});



/*Gidiş saati*/
// Kalkışın olduğu elementleri seçin
var kalkisValueElement = document.getElementById('kalkis');
var kalkisHourElement = document.getElementById('kalkishour');

// Range inputunu seçin
var kalkisRangeInput = document.getElementById('kalkistime');

// Range inputunda herhangi bir değişiklik olduğunda çalışacak fonksiyon
kalkisRangeInput.addEventListener('input', function() {
// Seçilen değeri alın
var kalkisSelectedValue = parseInt(this.value);

// Saat ve dakika değerlerini hesaplayın
var kalkisHours = Math.floor(kalkisSelectedValue / 60);
var kalkisMinutes = kalkisSelectedValue % 60;

// Saati ve dakikayı iki haneli hale getirin
var kalkisFormattedHours = ('0' + kalkisHours).slice(-2);
var kalkisFormattedMinutes = ('0' + kalkisMinutes).slice(-2);

// HTML içeriğini güncelleyin
kalkisHourElement.textContent = kalkisFormattedHours + ':' + kalkisFormattedMinutes;
kalkisValueElement.textContent = kalkisFormattedHours + ':' + kalkisFormattedMinutes;
});



// İkinci kalkış
var kalkisValueElement2 = document.getElementById('kalkis2');
var kalkisHourElement2 = document.getElementById('kalkishour2');

// İkinci range inputunu seçin
var kalkisRangeInput2 = document.getElementById('kalkistime2');

// İkinci range inputunda herhangi bir değişiklik olduğunda çalışacak fonksiyon
kalkisRangeInput2.addEventListener('input', function() {
// Seçilen değeri alın
var kalkisSelectedValue2 = parseInt(this.value);

// Saat ve dakika değerlerini hesaplayın
var kalkisHours2 = Math.floor(kalkisSelectedValue2 / 60);
var kalkisMinutes2 = kalkisSelectedValue2 % 60;

// Saati ve dakikayı iki haneli hale getirin
var kalkisFormattedHours2 = ('0' + kalkisHours2).slice(-2);
var kalkisFormattedMinutes2 = ('0' + kalkisMinutes2).slice(-2);

// HTML içeriğini güncelleyin
kalkisHourElement2.textContent = kalkisFormattedHours2 + ':' + kalkisFormattedMinutes2;
kalkisValueElement2.textContent = kalkisFormattedHours2 + ':' + kalkisFormattedMinutes2;
});



// Gidiş varış
var rangeValueElement = document.getElementById('gidisvarisvalue');
var hourElement = document.getElementById('gidisvarishour');

// Range inputunu seçin
var rangeInput = document.getElementById('gvtime');

// Range inputunda herhangi bir değişiklik olduğunda çalışacak fonksiyon
rangeInput.addEventListener('input', function() {
// Seçilen değeri alın
var selectedValue = parseInt(this.value);

// Saat ve dakika değerlerini hesaplayın
var hours = Math.floor(selectedValue / 60);
var minutes = selectedValue % 60;

// Saati ve dakikayı iki haneli hale getirin
var formattedHours = ('0' + hours).slice(-2);
var formattedMinutes = ('0' + minutes).slice(-2);

// HTML içeriğini güncelleyin
hourElement.textContent = formattedHours + ':' + formattedMinutes;
rangeValueElement.textContent = formattedHours + ':' + formattedMinutes;
});



// Gidiş süre inputu
var maksSureGidisElement = document.getElementById('maksüreGidis');
var GidisSureInput = document.getElementById('GidisSure');

GidisSureInput.addEventListener('input', function() {
  var GidisSureValue = parseInt(this.value);
  maksSureGidisElement.textContent = GidisSureValue + ' DK';
});

  



