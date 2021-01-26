// function that handles the fetching of data for the first item on the list to the html file 
function con() {

    var x = new XMLHttpRequest();
    // this method opens the json url and loops through it in new function colecting only the first Element in the array
    x.open('GET', 'list.json');
    x.onload = function () {
        var data = JSON.parse(x.responseText);
        for (i = 0; i < data.length; i++) {
            console.log(data);
            //displays the data to the empty div
            document.getElementById("display").innerHTML = "<p>" + data[0].name + "</p>" + "<br>" + data[0].organiser + "<br>" + data[0].time + "<br>" + data[0].date + "<br>" + data[0].summary;

        }
    };

    x.send();
}

function con1() {
    var x = new XMLHttpRequest();
    // this method opens the json url and loops through it in new function colecting only the second Element in the array
    x.open('GET', 'list.json');
    x.onload = function () {
        var data = JSON.parse(x.responseText);
        for (i = 0; i < data.length; i++) {
            console.log(data);

            document.getElementById("display").innerHTML = "<p>" + data[1].name + "</p>" + "<br>" + data[1].organiser + "<br>" + data[1].time + "<br>" + data[1].date + "<br>" + data[1].summary;

        }
    };

    x.send();
}

function con2() {
    var x = new XMLHttpRequest();
    // this method opens the json url and loops through it in new function colecting only the third Element in the array
    x.open('GET', 'list.json');
    x.onload = function () {
        var data = JSON.parse(x.responseText);
        for (i = 0; i < data.length; i++) {
            console.log(data);

            document.getElementById("display").innerHTML = "<p>" + data[2].name + "</p>" + "<br>" + data[2].organiser + "<br>" + data[2].time + "<br>" + data[2].date + "<br>" + data[2].summary;

        }
    };

    x.send();
}

function con3() {
    var x = new XMLHttpRequest();
    // this method opens the json url and loops through it in new function colecting only the fourth Element in the array
    x.open('GET', 'list.json');
    x.onload = function () {
        var data = JSON.parse(x.responseText);
        for (i = 0; i < data.length; i++) {
            console.log(data);

            document.getElementById("display").innerHTML = "<p>" + data[3].name + "</p>" + "<br>" + data[3].organiser + "<br>" + data[3].time + "<br>" + data[3].date + "<br>" + data[3].summary;

        }
    };

    x.send();
}

function con4() {
    var x = new XMLHttpRequest();
    // this method opens the json url and loops through it in new function colecting only the fourth Element in the array
    x.open('GET', 'list.json');
    x.onload = function () {
        var data = JSON.parse(x.responseText);
        for (i = 0; i < data.length; i++) {
            console.log(data);

            document.getElementById("display").innerHTML = "<p>" + data[4].name + "</p>" + "<br>" + data[4].organiser + "<br>" + data[4].time + "<br>" + data[4].date + "<br>" + data[4].summary;

        }
    };

    x.send();
}