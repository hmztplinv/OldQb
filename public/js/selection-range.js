/*Bilet Fiyatı*/
// Gidiş ve dönüş TL değerlerinin olduğu elementleri seçin
var gidisTLValueElement = document.getElementById('gidistl');
var donusTLValueElement = document.getElementById('dönüştl');

// Gidiş ve dönüş para inputlarını seçin
var gidisParaInput = document.getElementById('gidispara');
var donusParaInput = document.getElementById('donuspara');

// Gidiş para inputunda herhangi bir değişiklik olduğunda çalışacak fonksiyon
gidisParaInput.addEventListener('input', function() {
// Seçilen değeri alın
var gidisSelectedValue = parseInt(this.value);

// HTML içeriğini güncelleyin
gidisTLValueElement.textContent = gidisSelectedValue + ' TL';
});

// Dönüş para inputunda herhangi bir değişiklik olduğunda çalışacak fonksiyon
donusParaInput.addEventListener('input', function() {
// Seçilen değeri alın
var donusSelectedValue = parseInt(this.value);

// HTML içeriğini güncelleyin
donusTLValueElement.textContent = donusSelectedValue + ' TL';
});



/*Saatler*/
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

// İkinci kalkışın olduğu elementleri seçin
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



// Gidiş varışın olduğu elementleri seçin
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



// Dönüş varışın olduğu elementleri seçin
var donusVarisValueElement = document.getElementById('donusvarisvalue');
var donusHourElement = document.getElementById('donusvarishour');

// Range inputunu seçin
var donusRangeInput = document.getElementById('dvtime');

// Range inputunda herhangi bir değişiklik olduğunda çalışacak fonksiyon
donusRangeInput.addEventListener('input', function() {
// Seçilen değeri alın
var donusSelectedValue = parseInt(this.value);

// Saat ve dakika değerlerini hesaplayın
var donusHours = Math.floor(donusSelectedValue / 60);
var donusMinutes = donusSelectedValue % 60;

// Saati ve dakikayı iki haneli hale getirin
var donusFormattedHours = ('0' + donusHours).slice(-2);
var donusFormattedMinutes = ('0' + donusMinutes).slice(-2);

// HTML içeriğini güncelleyin
donusHourElement.textContent = donusFormattedHours + ':' + donusFormattedMinutes;
donusVarisValueElement.textContent = donusFormattedHours + ':' + donusFormattedMinutes;
});



// Gidiş ve dönüş maksimum süre değerlerinin olduğu elementleri seçin
var maksSureGidisElement = document.getElementById('maksüreGidis');
var maksSureDonusElement = document.getElementById('maksüreDonus');

// Gidiş ve dönüş süre inputlarını seçin
var GidisSureInput = document.getElementById('GidisSure');
var DonusSureInput = document.getElementById('DonusSure');

// Gidiş süre inputunda herhangi bir değişiklik olduğunda çalışacak fonksiyon
GidisSureInput.addEventListener('input', function() {
// Seçilen değeri alın
var GidisSureValue = parseInt(this.value);

// HTML içeriğini güncelleyin
maksSureGidisElement.textContent = GidisSureValue + ' DK';
});

// Dönüş süre inputunda herhangi bir değişiklik olduğunda çalışacak fonksiyon
DonusSureInput.addEventListener('input', function() {
// Seçilen değeri alın
var DonusSureValue = parseInt(this.value);

// HTML içeriğini güncelleyin
maksSureDonusElement.textContent = DonusSureValue + ' DK';
});