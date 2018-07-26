function func(){
document.getElementById('inpu').value="";
document.getElementById('outp').value="";
["r1", "r2", "r3", "r4"].forEach(function(id) {
        document.getElementById(id).checked = false;
      })
};

