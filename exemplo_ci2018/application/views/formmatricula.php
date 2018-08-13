
        <img src="<?php echo base_url('assets/imgs/escola.jpeg')?>"/><br/>
        <form>
            Nome: <input type="text"/><br/>
            Matrícula: <input type="text"/><br/>
            Curso: 
            <select>
                <?php foreach($cursos as $c){ ?>
                <option value="<?= $c->id ?>">
                    <?= $c->nome ?>
                </option>
                <?php } ?>
            </select><br/>
            <button>Matricular</button>
        </form>
