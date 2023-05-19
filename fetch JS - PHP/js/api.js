let myForm = document.querySelector("#myForm"); //Seleccionar Formulario
myForm.addEventListener("submit", async(e) =>{    //Creamos Evento de escuchar al formulario de un Submit
    console.log(e);
    e.preventDefault(); //Prevenimos el comportamiento por defecto del formulario al hacer un submit.
    let myHeaders = new Headers({"Content-Type":"application/json"}); //Creamos el header que vamos a incluir en el fecth
    let data = Object.fromEntries(new FormData(e.target)); // Recuperamos los datos que se llenan en el form
    let config = {
        method: "POST",
        Headers: myHeaders,
        body:JSON.stringify(data)
    };
    let res = await (await fetch("api.php", config)).text(); //Realizamos el fetch y transformamos la respuesta a txt
    document.querySelector("pre").innerhtml = res; //Insertamos la respuesta en la etiqueta <pre>
 
})