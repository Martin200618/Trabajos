/*
 * Bingo
 * Martin Stiben Narvaez
 * Martes 09/07/2024
*/

// Arrays globales para almacenar números y matrices
let numbers = [];
let matrix = [];
let matrixX1 = [];
let matrixX2 = [];
let matrixX3 = [];
let matrixX = [];

// Función para generar matrices
function generarMatrices() {
    let numero = 1;
    // Crear una matriz de 5x5 con números secuenciales multiplicados por 2
    for (let fila = 0; fila < 5; fila++) {
        matrix[fila] = [];
        for (let columna = 0; columna < 5; columna++) {
            matrix[fila][columna] = numero * 2;
            numero++;
        }
    }

    // Llenar matrixX1 con los números que forman la primera X
    for (let fila = 0; fila < 3; fila++) {
        for (let columna = 0; columna < 3; columna++) {
            if (fila == columna || fila + columna == 2) {
                matrixX1.push(matrix[fila][columna]);
            }
        }
    }

    // Llenar matrixX2 con los números que forman la segunda X
    for (let fila = 2; fila < 5; fila++) {
        for (let columna = 0; columna < 3; columna++) {
            if (fila + columna == (columna + 1) * 2 || fila + columna == 4) {
                matrixX2.push(matrix[fila][columna]);
            }
        }
    }

    // Llenar matrixX3 con los números que forman la tercera X
    for (let fila = 0; fila < 3; fila++) {
        for (let columna = 2; columna < 5; columna++) {
            if (fila + columna == (fila + 1) * 2 || fila + columna == 4) {
                matrixX3.push(matrix[fila][columna]);
            }
        }
    }

    // Llenar matrixX con los números que forman la X grande
    for (let i = 0; i < 5; i++) {
        for (let j = 0; j < 5; j++) {
            if (i == j || i + j == 4) {
                matrixX.push(matrix[i][j]);
            }
        }
    }
}

// Función para crear la cuadrícula visual en el HTML
function crearTabla() {
    let container = document.getElementById('grid-container');
    container.innerHTML = ''; // Limpiar cualquier contenido existente

    // Crear una cuadrícula de 5x5 con los números generados
    for (let i = 0; i < 5; i++) {
        let row = document.createElement('div');
        row.classList.add('row');
        for (let j = 0; j < 5; j++) {
            let col = document.createElement('div');
            col.classList.add('col', 'numero');
            let number = matrix[i][j];
            col.textContent = number;
            col.setAttribute('data-number', number);
            numbers.push(number);

            // Añadir evento para marcar la celda como "clicked" al hacer clic
            col.addEventListener('click', function() {
                col.classList.toggle('clicked');
            });

            row.appendChild(col);
        }
        container.appendChild(row);
    }
}

// Función para marcar números en la cuadrícula según un patrón
function marcarNumeros(patternArray) {
    let grid = document.querySelectorAll('.numero');
    grid.forEach(cell => {
        let numero = parseInt(cell.getAttribute('data-number'), 10);
        if (patternArray.includes(numero)) {
            cell.classList.add('clicked');
        } else {
            cell.classList.remove('clicked');
        }
    });
}

// Función para marcar los números de la columna B
function letraB() {
    let bNumeros = [];
    for (let i = 0; i < 5; i++) {
        for (let j = 0; j < 5; j++) {
            if (j === 0) { // Primera columna
                bNumeros.push(matrix[i][j]);
            }
        }
    }
    marcarNumeros(bNumeros);
}

// Función para marcar los números de la columna I
function letraI() {
    let iNumeros = [];
    for (let i = 0; i < 5; i++) {
        for (let j = 0; j < 5; j++) {
            if (j === 1) { // Segunda columna
                iNumeros.push(matrix[i][j]);
            }
        }
    }
    marcarNumeros(iNumeros);
}

// Función para marcar los números de la columna N
function letraN() {
    let nNumeros = [];
    for (let i = 0; i < 5; i++) {
        for (let j = 0; j < 5; j++) {
            if (j === 2) { // Tercera columna
                nNumeros.push(matrix[i][j]);
            }
        }
    }
    marcarNumeros(nNumeros);
}

// Función para marcar los números de la columna G
function letraG() {
    let gNumeros = [];
    for (let i = 0; i < 5; i++) {
        for (let j = 0; j < 5; j++) {
            if (j === 3) { // Cuarta columna
                gNumeros.push(matrix[i][j]);
            }
        }
    }
    marcarNumeros(gNumeros);
}

// Función para marcar los números de la columna O
function letraO() {
    let oNumeros = [];
    for (let i = 0; i < 5; i++) {
        for (let j = 0; j < 5; j++) {
            if (j === 4) { // Quinta columna
                oNumeros.push(matrix[i][j]);
            }
        }
    }
    marcarNumeros(oNumeros);
}

// Función para marcar los números de las tres X
function letraXXX() {
    marcarNumeros(matrixX1.concat(matrixX2, matrixX3));
}

// Función para marcar los números de la X grande
function letraX() {
    marcarNumeros(matrixX);
}

// Generar matrices de números y crear la cuadrícula visual
generarMatrices();
crearTabla();

// Añadir event listeners a los botones para marcar patrones de letras
document.getElementById('letraBButton').addEventListener('click', letraB);
document.getElementById('letraIButton').addEventListener('click', letraI);
document.getElementById('letraNButton').addEventListener('click', letraN);
document.getElementById('letraGButton').addEventListener('click', letraG);
document.getElementById('letraOButton').addEventListener('click', letraO);
document.getElementById('letraXXXButton').addEventListener('click', letraXXX);
document.getElementById('bigXButton').addEventListener('click', letraX);