<style>
    .popup {
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      background: #fff;
      width: 300px;
      padding: 20px;
      text-align: center;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    }

    .popup button {
      padding: 10px 20px;
      margin-right: 10px;
    }
    body {
      background-color: #27374D; /* Color de fondo personalizado */
    }
    
  </style>
  
<div class="popup">
        <p>EL USUARIO INTRODUCIDO YA EXISTE</p>
        <button id="salirBtn">Cerrar</button>
      </div>
  </body>
    
      <script>
        document.getElementById("salirBtn").addEventListener("click", function() {

          window.location.href = "../index.php";

        });
      </script>