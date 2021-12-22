function basicvalidateForm() {
    var name = document.forms["addroom"]["rname"].value;
    if (name == null || name == "") {
        alert("Room name must be filled out");
        return false;
    }
   
    var unameid = document.forms["addroom"]["rprice"].value;
    if (unameid == null || unameid == "") {
        alert("Room price must be filled out");
        return false;
    }

    
    
    var moNum = document.forms["addroom"]["cstock"].value;
    if (moNum == null || moNum == "") {
        alert("Room quantity must be filled out");
        return false;
    }

    

    


}


function basicvalidateForm2() {

  var pname = document.forms["addpackage"]["pname"].value;
    if (pname == null || pname == "") {
        alert("Package name must be filled out");
        return false;
    }

    var pprice = document.forms["addpackage"]["pprice"].value;
    if (pprice == null || pprice == "") {
        alert("Package price must be filled out");
        return false;
    }

  
}
