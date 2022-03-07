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
function checkemail(input,small,message){
    const em= /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(em.test(input.value.trim().toLowerCase())){
        return true;
    }
    else{
        input.className="error";
        small.innerHTML=message;
        return false

    }

}
connexion.addEventListener("click", function(e){
    champ_vide(login,smallerrologin,"ce champs est obligatoir");
    champ_vide(password,smallerropass,"ce champs est obligatoir" );
    checkemail(input,smallerrologin,"le login doit etre un adresse email");
    if((!champ_vide(login,"ce champs est obligatoir")) || (!champ_vide(password,"ce champs est obligatoir"))){
        e.preventDefault();
    }
 
})

