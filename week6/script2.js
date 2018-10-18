let countries = ["Kazakhstan","Russia","England","France"];
let cities_by_country = {"Kazakhstan":["Almaty","Astana","Karagandy"],
"Russia":["Moscow","Saint-Petersburg","Kazan"],
"England":["London","Manchester","Liverpool"],
"France":["Paris","Lyon","Marseille"]};

function addCountries(event){
    var choice = event.currentTarget;
    choice.innerHTML = "";
    for (i = 0; i < countries.length; i++) { 
        var el = document.createElement('option');
        el.innerHTML = countries[i];
        choice.options.add(el);
    }
    choice.removeEventListener('click',addCountries)
}

function selected(event){
    var s1 = document.getElementById("countries");
    var s2 = document.getElementById("cities");
    var r = s1.value;
    s2.innerHTML="";
    var arr = cities_by_country[r];
    for (i = 0; i < arr.length; i++) { 
        var el = document.createElement('option');
        el.innerHTML = arr[i];
        s2.options.add(el);
    }
}

const choice = document.querySelector('#countries');
choice.addEventListener('click',addCountries);
choice.addEventListener('change',selected);







