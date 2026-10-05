
    <div class="row-flex">

        <div class="flex-grow">
            <label for="txtAsunto">Asunto</label>

            <input type="text" id="txtAsunto" name="txtAsunto" maxlength="120" 
            placeholder="Ingresa el asunto" required>
        </div>

        <div class="flex-grow">
            <label for="txtNombre">Nombre</label>

            <input type="text" id="txtNombre" name="txtNombre" maxlength="120" 
            placeholder="Ingresa tu nombre" required>
        </div>

        <div class="flex-grow">
            <label for="txtTelefono">Número de teléfono</label>

            <input type="text" id="txtTelefono" name="txtTelefono" maxlength="9" 
            placeholder="Ingresa tu número de teléfono" required>
        </div>

        <div class="flex-grow">
            <label for="txtCorreo">Correo Electronico</label>

            <input type="text" id="txtCorreo" name="txtCorreo" maxlength="120" 
            placeholder="Ingresa tu correo electrónico" required>
        </div>

        <div class="flex-grow">
            <label for="txtComentario">Comentario</label>

            <textarea id="txtComentario" name="txtComentario" 
            rows="5" maxlength="5000" placeholder="Ingresa tu comentario" required></textarea>

            <div class="contador">
                <span id="contadorComentario">0</span>/5000
            </div>
        </div>

        <div class="flex-grow">
            <button type="submit" id="btnEnviar">Enviar</button>
        </div>

    </div>
