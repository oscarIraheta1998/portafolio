function mostrar(imagen, titulo, lugar, tiempo) {
  if (imagen == "") {
    estado = "en proceso";
  } else {
    estado = "";
  }
  Swal.fire({
    title: estado,
    text: titulo + " " + lugar + ". " + tiempo,
    imageUrl: imagen,
    imageWidth: 400,
    imageHeight: 200,
    imageAlt: "Custom image",
  });
}
