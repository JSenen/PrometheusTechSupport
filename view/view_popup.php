
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
        <p>Ticket de soporte enviado a GATI Barcelona.</p>
        <p>Agradecemos su confianza, en breve nos pondremos en contacto con usted.</p>
        <button id="salirBtn">Salir</button>
        <button id="continuarBtn">Grabar Otro</button>
      </div>
    
      <script>
        document.getElementById("salirBtn").addEventListener("click", function() {
          // Aquí puedes realizar acciones adicionales antes de redirigir si es necesario.
          window.location.href = "../index.php";
        });
    
        document.getElementById("continuarBtn").addEventListener("click", function() {
          // Aquí puedes realizar acciones adicionales antes de redirigir si es necesario.
          window.location.href = "../indexTickets.php?controller=start&action=firstPage";
        });
      </script>
    </body>
    </html>
    