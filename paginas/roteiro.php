<div class="row">
    <div class="col s3"> </div>
    <div class="col s6">
        <h5>Definir novo horario inicial do sistema:</h5>
        <form action="?pg=processa_roteiro" method="post">
            <div class="input-field">
                <input id="horario" name="horario" type="time" class="validate" required />
                <label for="horario">Horário Inicial</label>

                <button class="btn waves-effect waves-light blue lighten-2" type="submit" name="action">Enviar
                    <i class="material-icons right white-text">send</i>
                </button>
            </div>
        </form>
    </div>
    <div class="col s3"> </div>
</div>