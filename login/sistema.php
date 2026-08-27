<?php
session_start(); // Instancio las sesiones.
// Lógica de validación de sesión.
// Solo se mostrará contenido si la 
// sesión está iniciada...
if(!isset($_SESSION['id'])){// Existe el id del usuario?
    header("Location: index.php");
}
?>
<html>
    <style>
  .menu-opciones {
    max-width: 900px;
    margin: 30px auto;
    padding: 24px;
    background: #f5f5f5;
    border-radius: 16px;
    font-family: Arial, sans-serif;
    box-shadow: 0 4px 15px rgba(0,0,0,.10);
  }

  .menu-opciones h2 {
    margin: 0 0 20px;
    color: #222;
    text-align: center;
  }

  .botones {
    display: flex;
    flex-wrap: wrap;
    gap: 12px;
    justify-content: center;
  }

  .boton-menu {
    display: inline-block;
    padding: 12px 22px;
    border-radius: 8px;
    background: #1976d2;
    color: white;
    text-decoration: none;
    font-weight: bold;
    transition: .2s;
  }

  .boton-menu:hover {
    background: #0d47a1;
    transform: translateY(-2px);
  }

  .videos {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 20px;
    margin-top: 30px;
  }

  .video {
    position: relative;
    width: 100%;
    aspect-ratio: 16 / 9;
    overflow: hidden;
    border-radius: 12px;
    background: #000;
  }

  .video iframe {
    width: 100%;
    height: 100%;
    border: 0;
  }
</style>
    <h1>Acceso concedido!! </h1>
<div class="menu-opciones">
  <h2>Menú de opciones</h2>

  <div class="botones">
    <a class="boton-menu"
       href="https://www.biobiochile.cl/"
       target="_blank"
       rel="noopener noreferrer">
      BioBioChile
    </a>

    <a class="boton-menu"
       href="https://www.emol.com/"
       target="_blank"
       rel="noopener noreferrer">
      Emol
    </a>

    <a class="boton-menu"
       href="https://news.google.com/"
       target="_blank"
       rel="noopener noreferrer">
      Google News
    </a>
  </div>

  <div class="videos">
    <div class="video">
      <iframe
        src="https://www.youtube.com/embed/dQw4w9WgXcQ"
        title="Video de YouTube 1"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
        allowfullscreen>
      </iframe>
    </div>

    <div class="video">
      <iframe
        src="https://www.youtube.com/embed/9bZkp7q19f0"
        title="Video de YouTube 2"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
        allowfullscreen>
      </iframe>
    </div>
  </div>
</div>
</html>