function showHint(str) {
    if (str.length == 0) {
        document.getElementById("suggest_list").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("suggest_list").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "hints.php?q=" + str, true);
        xmlhttp.send();
    }
}

function executeQuery(str) {
  
}

function shownav() {
    var x = document.getElementById("mnav");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}
