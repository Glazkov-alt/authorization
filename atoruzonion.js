document.getElementById("formRegustr").addEventListener("submit", provercaBD);

async function provercaBD(event){
    event.preventDefault();
    let data = new FormData();
    let login = document.getElementById("logun").value;
    let password = document.getElementById("passwprd1").value;
    data.append('login',login);
    data.append('password',password);
    let bd = await fetch("../php/bdAfnor.php", {
        method:"POST",
        body: data
    });
    let f =  await bd.json();
    if(f.states == "ok"){
            document.getElementById("formRegustr").submit();
    }
    else{
        document.getElementById("edr").style.display = "block";
        document.getElementById("edr").innerText = "Неправильный Пароль или логин";
        console.log("все не ок");
    }
}