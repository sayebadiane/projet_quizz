const login=document.getElementById("login");
const password=document.getElementById("password");
const connexion=document.getElementById("connexion");
const smallerrologin = document.querySelector('#loginerror');
const smallerropass = document.querySelector('#passworderror');



function champ_vide(input,small,message){
    if(input.value.trim()==''){
        input.className="error";
        small.innerHTML=message;
    }

}
connexion.addEventListener("click", function(e){
    champ_vide(login,smallerrologin,"ce champs est obligatoir");
    champ_vide(password,smallerropass,"ce champs est obligatoir" );
    if((!champ_vide(login,"ce champs est obligatoir")) || (!champ_vide(password,"ce champs est obligatoir"))){
        e.preventDefault();
    }
 
})
