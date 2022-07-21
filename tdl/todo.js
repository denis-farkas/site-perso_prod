const addButton = document.getElementById("addButton");
const delButton = document.getElementsByClassName("delButton");
const upButton = document.getElementsByClassName("upButton");
const addForm = document.getElementById("addNewTache");
const addError = document.getElementById("addError");


document.addEventListener("DOMContentLoaded", function() {
    listTaches();
  });

addButton.addEventListener("click", addTache);


 
var serializeForm = function (form) {
	var obj = {};
	var formData = new FormData(form);
	for (var key of formData.keys()) {
		obj[key] = formData.get(key);
	}
	return obj;
}; 

function listTaches(){
    
     
    var xhr = new XMLHttpRequest();
    
    xhr.addEventListener("readystatechange", function() {
        if(this.readyState === 4 && this.status == 200) {
            
       var response = JSON.parse(xhr.responseText);
       var records = response.records;
       var outputAF = '';
       var outputEF = '';
       for(var i =0; i<records.length; i++){
            var idTache = records[i].id;
           if(records[i].statut== 1){
            outputAF +=  
           '<li class="list-group-item d-flex justify-content-between  alert alert-dismissible alert-warning"><button  class="upButton" onclick="updateTache('+idTache+')"><i class="fas fa-check"></i></button>'+records[i].text +' - '+records[i].date+
           '<button  class="delButton" onclick="delTache('+idTache+')"><i class="far fa-trash-alt"></i></button></li>';    
           }else{
            outputEF +=  
            '<li class="list-group-item d-flex justify-content-between alert alert-dismissible alert-success">'+records[i].text +' - '+records[i].date+
            '<button class="delButton" onclick="delTache('+idTache+')"><i class="far fa-trash-alt"></i></button></li>';
           }          

       }
       document.getElementById('toDo').innerHTML = outputAF;
       document.getElementById('done').innerHTML = outputEF;

        }else if(this.readyState === 4 && this.status == 503){
            addError.innerHTML = "<p>Erreur système</p>";
        }else if(this.readyState === 4 && this.status == 401){
            addError.innerHTML = '<p>vous n\'avez pas l\'autorisation</p>';
        }
    });

    xhr.open("GET", "https://www.portefolio.cloudefar.fr/tdl/api/controllers/read.php");
    xhr.setRequestHeader("Content-Type", "application/json");
   

    xhr.send();
}

function addTache(){
  
    var add_form = addForm;
    var form_data=JSON.stringify(serializeForm(add_form));
    var xhr = new XMLHttpRequest();
    xhr.withCredentials = true;

    xhr.addEventListener("readystatechange", function() {
        if(this.readyState === 4 && this.status == 200) {
       listTaches();
        }else if(this.readyState === 4 && this.status == 503){
            setErrorFor(addError, 'Erreur système');
        }else if(this.readyState === 4 && this.status == 401){
            setErrorFor(addError, "Non autorisé.");
        }
    });

    xhr.open("POST", "https://www.portefolio.cloudefar.fr/tdl/api/controllers/create.php");
    xhr.setRequestHeader("Content-Type", "application/json");

    xhr.send(form_data);
   }  


   function updateTache(id){
    
    var idT= id;
    
    var xhr = new XMLHttpRequest();
    xhr.withCredentials = true;

    xhr.addEventListener("readystatechange", function() {
    if(this.readyState === 4 && this.status == 200) {
        listTaches();
    }
    });

    xhr.open("POST", 'https://www.portefolio.cloudefar.fr/tdl/api/controllers/update.php?id='+idT);

    xhr.send();
   } 
   
   function delTache(id){
    
    var idT= id;
    
    var xhr = new XMLHttpRequest();
    xhr.withCredentials = true;

    xhr.addEventListener("readystatechange", function() {
    if(this.readyState === 4 && this.status == 200) {
        listTaches();
    }
    });

    xhr.open("POST", 'https://www.portefolio.cloudefar.fr/tdl/api/controllers/delete.php?id='+idT);

    xhr.send();
   }  
    
