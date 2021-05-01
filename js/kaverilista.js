
function lisaa_nimi() {
  var li = document.createElement("li");
  var inputValue = document.getElementById("tekstin-lisays").value;
  var t = document.createTextNode(inputValue);
  li.appendChild(t);


  if (inputValue === '') {
    alert("Kirjoita jotain!!!");
  } else {
    document.getElementById("kaverit").appendChild(li);
  }
  location.reload()

 
  

}