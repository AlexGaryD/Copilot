<?php

/**
 * Clase GithubCopilot
 * 
 * Esta clase representa un asistente de programación llamado Github Copilot.
 */
class GithubCopilot {
    // Propiedades privadas
    private $nombre;
    private $version;

    /**
     * Constructor de la clase
     * 
     * @param string $nombre El nombre del asistente.
     * @param string $version La versión del asistente.
     */
    public function __construct($nombre, $version) {
        $this->nombre = $nombre;
        $this->version = $version;
    }

    /**
     * Obtener el nombre del asistente
     * 
     * @return string El nombre del asistente.
     */
    public function getNombre() {
        return $this->nombre;
    }

    /**
     * Obtener la versión del asistente
     * 
     * @return string La versión del asistente.
     */
    public function getVersion() {
        return $this->version;
    }

    /**
     * Establecer el nombre del asistente
     * 
     * @param string $nombre El nuevo nombre del asistente.
     */
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    /**
     * Establecer la versión del asistente
     * 
     * @param string $version La nueva versión del asistente.
     */
    public function setVersion($version) {
        $this->version = $version;
    }
}

// Ejemplo de uso
$copilot = new GithubCopilot("GitHub Copilot", "4.0");
echo "Nombre: " . $copilot->getNombre() . "\n";
echo "Versión: " . $copilot->getVersion() . "\n";
?>
