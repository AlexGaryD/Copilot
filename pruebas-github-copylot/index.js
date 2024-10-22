/**
 * Suma dos números enteros.
 *
 * @param {number} a - El primer número entero.
 * @param {number} b - El segundo número entero.
 * @returns {number} La suma de los dos números enteros.
 * @throws {Error} Si alguno de los parámetros no es un número entero.
 */
function sumar(a, b) {
    // Verificar que ambos parámetros sean números enteros
    if (Number.isInteger(a) && Number.isInteger(b)) {
        return a + b;
    } else {
        throw new Error("Ambos parámetros deben ser números enteros");
    }
}

// Ejemplo de uso
console.log(sumar(3, 4)); // 7
console.log(sumar(10, 20)); // 30