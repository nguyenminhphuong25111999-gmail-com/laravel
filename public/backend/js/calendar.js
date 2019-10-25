var today = new Date();
    var fy = today.getFullYear();
    var M = today.getMonth() + 1;
    var D = today.getDate();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();


function startTime() 
{
    var Thang;
    switch(M){
        case 1: Thang = 'January';break;
        case 2: Thang = 'February';break;
        case 3: Thang = 'March';break;
        case 4: Thang = 'April';break;
        case 5: Thang = 'May';break;
        case 6: Thang = 'June';break;
        case 7: Thang = 'July';break;
        case 8: Thang = 'August';break;
        case 9: Thang = 'September';break;
        case 10: Thang = 'October';break;
        case 11: Thang = 'November';break;
        case 12: Thang = 'December';break;
    }
    var title_calendar = document.getElementById('title-calendar');
    title_calendar.innerHTML = Thang + ' ' + fy;

    if(M == 1 || M == 3 || M == 5 || M == 7 || M == 8 || M == 10 || M == 12){
        for(var i = 0; i < 31; i++){
            var node = document.createElement("BUTTON");
            var textnode = document.createTextNode(i + 1);
            node.classList.add("button-dates");
            node.appendChild(textnode);
            document.getElementById("dates").appendChild(node);
            if(i == (D - 1)){
                node.classList.add("today");
            }
        }
    }
    else if(M == 2 && fy % 400 == 0){
        for(var i = 0; i < 29; i++){
            var node = document.createElement("BUTTON");
            var textnode = document.createTextNode(i + 1);
            node.classList.add("button-dates");
            node.appendChild(textnode);
            document.getElementById("dates").appendChild(node);
        }
    }
    else if(M == 2 && fy % 400 != 0){
        for(var i = 0; i < 28; i++){
            var node = document.createElement("BUTTON");
            var textnode = document.createTextNode(i + 1);
            node.classList.add("button-dates");
            node.appendChild(textnode);
            document.getElementById("dates").appendChild(node);
        }
    }
    else{
        for(var i = 0; i < 30; i++){
            var node = document.createElement("BUTTON");
            var textnode = document.createTextNode(i + 1);
            node.classList.add("button-dates");
            node.appendChild(textnode);
            document.getElementById("dates").appendChild(node);
        }
    }

}
    var Thang;
    var getThang = M;
    var getYear = fy;
function next() {
    if(getThang == 12){
        getThang = 1;
        getYear += 1;
    }
    else{
        getThang += 1;
    }
    switch(getThang){
        case 1: Thang = 'January';break;
        case 2: Thang = 'February';break;
        case 3: Thang = 'March';break;
        case 4: Thang = 'April';break;
        case 5: Thang = 'May';break;
        case 6: Thang = 'June';break;
        case 7: Thang = 'July';break;
        case 8: Thang = 'August';break;
        case 9: Thang = 'September';break;
        case 10: Thang = 'October';break;
        case 11: Thang = 'November';break;
        case 12: Thang = 'December';break;
    }
    var title_calendar = document.getElementById('title-calendar');
    title_calendar.innerHTML = Thang + ' ' + getYear;
    
    
    if(getThang == 1 || getThang == 3 || getThang == 5 || getThang == 7 || getThang == 8 || getThang == 10 || getThang == 12){
        for(var i = 0; i < 31; i++){
            var node = document.createElement("BUTTON");
            var textnode = document.createTextNode(i + 1);
            node.classList.add("button-dates");
            node.appendChild(textnode);
            document.getElementById("dates").appendChild(node);
        }
    }
    else if(getThang == 2 && getYear % 400 == 0){
        for(var i = 0; i < 29; i++){
            var node = document.createElement("BUTTON");
            var textnode = document.createTextNode(i + 1);
            node.classList.add("button-dates");
            node.appendChild(textnode);
            document.getElementById("dates").appendChild(node);
        }
    }
    else if(getThang == 2 && getYear % 400 != 0){
        for(var i = 0; i < 28; i++){
            var node = document.createElement("BUTTON");
            var textnode = document.createTextNode(i + 1);
            node.classList.add("button-dates");
            node.appendChild(textnode);
            document.getElementById("dates").appendChild(node);
        }
    }
    else{
        for(var i = 0; i < 30; i++){
            var node = document.createElement("BUTTON");
            var textnode = document.createTextNode(i + 1);
            node.classList.add("button-dates");
            node.appendChild(textnode);
            document.getElementById("dates").appendChild(node);
        }
    }
}

function previous() {
    if(getThang == 1){
        getThang = 12;
        getYear -= 1;
    }
    else{
        getThang -= 1;
    }
    switch(getThang){
        case 1: Thang = 'January';break;
        case 2: Thang = 'February';break;
        case 3: Thang = 'March';break;
        case 4: Thang = 'April';break;
        case 5: Thang = 'May';break;
        case 6: Thang = 'June';break;
        case 7: Thang = 'July';break;
        case 8: Thang = 'August';break;
        case 9: Thang = 'September';break;
        case 10: Thang = 'October';break;
        case 11: Thang = 'November';break;
        case 12: Thang = 'December';break;
    }
    var title_calendar = document.getElementById('title-calendar');
    title_calendar.innerHTML = Thang + ' ' + getYear;

    if(getThang == 1 || getThang == 3 || getThang == 5 || getThang == 7 || getThang == 8 || getThang == 10 || getThang == 12){
        for(var i = 0; i < 31; i++){
            var node = document.createElement("BUTTON");
            var textnode = document.createTextNode(i + 1);
            node.classList.add("button-dates");
            node.appendChild(textnode);
            document.getElementById("dates").appendChild(node);
        }
    }
    else if(getThang == 2 && getYear % 400 == 0){
        for(var i = 0; i < 29; i++){
            var node = document.createElement("BUTTON");
            var textnode = document.createTextNode(i + 1);
            node.classList.add("button-dates");
            node.appendChild(textnode);
            document.getElementById("dates").appendChild(node);
        }
    }
    else if(getThang == 2 && getYear % 400 != 0){
        for(var i = 0; i < 28; i++){
            var node = document.createElement("BUTTON");
            var textnode = document.createTextNode(i + 1);
            node.classList.add("button-dates");
            node.appendChild(textnode);
            document.getElementById("dates").appendChild(node);
        }
    }
    else{
        for(var i = 0; i < 30; i++){
            var node = document.createElement("BUTTON");
            var textnode = document.createTextNode(i + 1);
            node.classList.add("button-dates");
            node.appendChild(textnode);
            document.getElementById("dates").appendChild(node);
        }
    }
}