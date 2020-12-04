// POLLO
let cerrar_po = document.querySelectorAll(".cerrarPO")[0];
let abrir_po = document.querySelectorAll(".btnPO")[0];
let ventana_po = document.querySelectorAll(".ventanaPO")[0];
let ventanaC_po = document.querySelectorAll(".ventana-contenedorPO")[0];

abrir_po.addEventListener("click", function(e){
    e.preventDefault();
    ventanaC_po.style.opacity = "1";
    ventanaC_po.style.visibility = "visible";
    ventana_po.classList.toggle("ventana-cerrarPO");
});

cerrar_po.addEventListener("click", function() {
    ventana_po.classList.toggle("ventana-cerrarPO");
    setTimeout(function () {
        ventanaC_po.style.opacity = "0";
        ventanaC_po.style.visibility = "hidden";
    },500)
})

window.addEventListener("click", function(e) {
    console.log(e.target)
    if (e.target == ventanaC_po ) {
        ventana_po.classList.toggle("ventana-cerrarPO");
        setTimeout(function () {
            ventanaC_po.style.opacity = "0";
            ventanaC_po.style.visibility = "hidden";
        },500)
    }
})

// Carne
let cerrar_ca = document.querySelectorAll(".cerrarCA")[0];
let abrir_ca = document.querySelectorAll(".btnCA")[0];
let ventana_ca = document.querySelectorAll(".ventanaCA")[0];
let ventanaC_ca = document.querySelectorAll(".ventana-contenedorCA")[0];

abrir_ca.addEventListener("click", function(e){
    e.preventDefault();
    ventanaC_ca.style.opacity = "1";
    ventanaC_ca.style.visibility = "visible";
    ventana_ca.classList.toggle("ventana-cerrarCA");
});

cerrar_ca.addEventListener("click", function() {
    ventana_ca.classList.toggle("ventana-cerrarCA");
    setTimeout(function () {
        ventanaC_ca.style.opacity = "0";
        ventanaC_ca.style.visibility = "hidden";
    },500)
})

window.addEventListener("click", function(e) {
    console.log(e.target)
    if (e.target == ventanaC_ca ) {
        ventana_ca.classList.toggle("ventana-cerrarCA");
        setTimeout(function () {
            ventanaC_ca.style.opacity = "0";
            ventanaC_ca.style.visibility = "hidden";
        },500)
    }
})

// Pescado
let cerrar_pe = document.querySelectorAll(".cerrarPE")[0];
let abrir_pe = document.querySelectorAll(".btnPE")[0];
let ventana_pe = document.querySelectorAll(".ventanaPE")[0];
let ventanaC_pe = document.querySelectorAll(".ventana-contenedorPE")[0];

abrir_pe.addEventListener("click", function(e){
    e.preventDefault();
    ventanaC_pe.style.opacity = "1";
    ventanaC_pe.style.visibility = "visible";
    ventana_pe.classList.toggle("ventana-cerrarPE");
});

cerrar_pe.addEventListener("click", function() {
    ventana_pe.classList.toggle("ventana-cerrarPE");
    setTimeout(function () {
        ventanaC_pe.style.opacity = "0";
        ventanaC_pe.style.visibility = "hidden";
    },500)
})

window.addEventListener("click", function(e) {
    console.log(e.target)
    if (e.target == ventanaC_pe ) {
        ventana_pe.classList.toggle("ventana-cerrarPE");
        setTimeout(function () {
            ventanaC_pe.style.opacity = "0";
            ventanaC_pe.style.visibility = "hidden";
        },500)
    }
})

// Bebidas
let cerrar_be = document.querySelectorAll(".cerrarBE")[0];
let abrir_be = document.querySelectorAll(".btnBE")[0];
let ventana_be = document.querySelectorAll(".ventanaBE")[0];
let ventanaC_be = document.querySelectorAll(".ventana-contenedorBE")[0];

abrir_be.addEventListener("click", function(e){
    e.preventDefault();
    ventanaC_be.style.opacity = "1";
    ventanaC_be.style.visibility = "visible";
    ventana_be.classList.toggle("ventana-cerrarBE");
});

cerrar_be.addEventListener("click", function() {
    ventana_be.classList.toggle("ventana-cerrarBE");
    setTimeout(function () {
        ventanaC_be.style.opacity = "0";
        ventanaC_be.style.visibility = "hidden";
    },500)
})

window.addEventListener("click", function(e) {
    console.log(e.target)
    if (e.target == ventanaC_be ) {
        ventana_be.classList.toggle("ventana-cerrarBE");
        setTimeout(function () {
            ventanaC_be.style.opacity = "0";
            ventanaC_be.style.visibility = "hidden";
        },500)
    }
})

// Fruteria
let cerrar_fu = document.querySelectorAll(".cerrarFU")[0];
let abrir_fu = document.querySelectorAll(".btnFU")[0];
let ventana_fu = document.querySelectorAll(".ventanaFU")[0];
let ventanaC_fu = document.querySelectorAll(".ventana-contenedorFU")[0];

abrir_fu.addEventListener("click", function(e){
    e.preventDefault();
    ventanaC_fu.style.opacity = "1";
    ventanaC_fu.style.visibility = "visible";
    ventana_fu.classList.toggle("ventana-cerrarFU");
});

cerrar_fu.addEventListener("click", function() {
    ventana_fu.classList.toggle("ventana-cerrarFU");
    setTimeout(function () {
        ventanaC_fu.style.opacity = "0";
        ventanaC_fu.style.visibility = "hidden";
    },500)
})

window.addEventListener("click", function(e) {
    console.log(e.target)
    if (e.target == ventanaC_fu ) {
        ventana_fu.classList.toggle("ventana-cerrarFU");
        setTimeout(function () {
            ventanaC_fu.style.opacity = "0";
            ventanaC_fu.style.visibility = "hidden";
        },500)
    }
})

// Comida Rapida
let cerrar_co = document.querySelectorAll(".cerrarCO")[0];
let abrir_co = document.querySelectorAll(".btnCO")[0];
let ventana_co = document.querySelectorAll(".ventanaCO")[0];
let ventanaC_co = document.querySelectorAll(".ventana-contenedorCO")[0];

abrir_co.addEventListener("click", function(e){
    e.preventDefault();
    ventanaC_co.style.opacity = "1";
    ventanaC_co.style.visibility = "visible";
    ventana_co.classList.toggle("ventana-cerrarCO");
});

cerrar_co.addEventListener("click", function() {
    ventana_co.classList.toggle("ventana-cerrarCO");
    setTimeout(function () {
        ventanaC_co.style.opacity = "0";
        ventanaC_co.style.visibility = "hidden";
    },500)
})

window.addEventListener("click", function(e) {
    console.log(e.target)
    if (e.target == ventanaC_co ) {
        ventana_co.classList.toggle("ventana-cerrarCO");
        setTimeout(function () {
            ventanaC_co.style.opacity = "0";
            ventanaC_co.style.visibility = "hidden";
        },500)
    }
})

// Sopa
let cerrar_so = document.querySelectorAll(".cerrarSO")[0];
let abrir_so = document.querySelectorAll(".btnSO")[0];
let ventana_so = document.querySelectorAll(".ventanaSO")[0];
let ventanaC_so = document.querySelectorAll(".ventana-contenedorSO")[0];

abrir_so.addEventListener("click", function(e){
    e.preventDefault();
    ventanaC_so.style.opacity = "1";
    ventanaC_so.style.visibility = "visible";
    ventana_so.classList.toggle("ventana-cerrarSO");
});

cerrar_so.addEventListener("click", function() {
    ventana_so.classList.toggle("ventana-cerrarSO");
    setTimeout(function () {
        ventanaC_so.style.opacity = "0";
        ventanaC_so.style.visibility = "hidden";
    },500)
})

window.addEventListener("click", function(e) {
    console.log(e.target)
    if (e.target == ventanaC_so ) {
        ventana_so.classList.toggle("ventana-cerrarSO");
        setTimeout(function () {
            ventanaC_so.style.opacity = "0";
            ventanaC_so.style.visibility = "hidden";
        },500)
    }
})

// Jugos
let cerrar_ju = document.querySelectorAll(".cerrarJU")[0];
let abrir_ju = document.querySelectorAll(".btnJU")[0];
let ventana_ju = document.querySelectorAll(".ventanaJU")[0];
let ventanaC_ju = document.querySelectorAll(".ventana-contenedorJU")[0];

abrir_ju.addEventListener("click", function(e){
    e.preventDefault();
    ventanaC_ju.style.opacity = "1";
    ventanaC_ju.style.visibility = "visible";
    ventana_ju.classList.toggle("ventana-cerrarJU");
});

cerrar_ju.addEventListener("click", function() {
    ventana_ju.classList.toggle("ventana-cerrarJU");
    setTimeout(function () {
        ventanaC_ju.style.opacity = "0";
        ventanaC_ju.style.visibility = "hidden";
    },500)
})

window.addEventListener("click", function(e) {
    console.log(e.target)
    if (e.target == ventanaC_ju ) {
        ventana_ju.classList.toggle("ventana-cerrarJU");
        setTimeout(function () {
            ventanaC_ju.style.opacity = "0";
            ventanaC_ju.style.visibility = "hidden";
        },500)
    }
})