
<style>
        /* Estilos para la ventana modal */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.4);
            text-align: justify;
        }
        
        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 30px;
            border: 1px solid #888;
            width: 80%;
        }
        
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }
        
        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
<!-- Modal -->
<!-- Ventana modal -->
<div id="myModal" class="modal">
    <!-- Contenido de la ventana modal -->
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <h2>¡Bienvenido a la gestión de tickets!</h2>
        <p>Con esta apliación, el GATI pretende agilizar la gestión de incidencias</p>
        <p>Tras cerrar esta ventana, se recuerda que es necesario rellenar los siguientes campos <mark class="text-danger">obligatorios</mark> como mínimo:</p>
        <ul>
          <li class="text-danger">ASUNTO</li>
          <li class="text-danger">DESCRIPCION -> Breve resumén de la incidencia ocurrida</li>
        </ul>
        <p>El resto de campos son opcionales, pero se agradecería su cumplimentación</p>
        <p>En el campo etiqueta, de no disponer de la etiqueta colocada en el equipo por este GATI, puede rellenar</p>
        <p>cualquier dato identificativo: número de serie, modelo, etc ...</p>
        <p>Campo captura de pantallas: -> En caso de disponer de capturas de pantalla de la incidencia o error, adjuntelas.</p>
        <br>
        <p>¡Gracias por su colaboración!, será atendido a la mayor brevedad posible</p>

    </div>
</div>
