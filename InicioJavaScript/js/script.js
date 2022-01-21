
document.getElementById("enviar").onclick=()=>{
    let opcion=document.getElementById("opcion").value
    let divimagenes=document.getElementById("imagenes");
        let imagenVisual=document.createElement("img");
        imagenVisual.src="./img/playa.jpg";
        divimagenes.append(imagenVisual);
    console.log("entrando a la funcion");
}