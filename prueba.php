<label>PROPIETARIO</label>
		    <input type="text" class="form-control" id="<?php echo $filas["nombre_propietario"]?>" name="<?php echo $filas["nombre_propietario"]?>"  value="<?php echo $filas["nombre_propietario"]?>"></input>
			</div>
			<div class="form-group">
		  	<label>Nº DE CEDULA PROPIETARIO</label>
		    <input type="text" class="form-control" id="<?php echo $filas["cc_propietario"]?>" name="<?php echo $filas["cc_propietario"]?>" value="<?php echo $filas["cc_propietario"]?>"></input>
			</div>
			 <div class="form-group">
		    <label>RESIDENTE</label>
		    <input type="text" class="form-control" id="<?php echo $filas["nom_residente"]?>" name="<?php echo $filas["nom_residente"]?>" value="<?php echo $filas["nom_residente"]?>">
		  </div>
		  <div class="form-group">
		  	<label>Nº DE CEDULA RESIDENTE</label>
		    <input type="text" class="form-control" id="<?php echo $filas["cc_residente"]?>" name="<?php echo $filas["cc_residente"]?>" value="<?php echo $filas["cc_residente"]?>"></input>
			</div>
		  <div class="form-group">
		    <label>TELEFONO FIJO PROPIETARIO</label>
		    <input type="text" class="form-control" id="<?php echo $filas["tel_fijo"]?>" name="<?php echo $filas["tel_fijo"]?>" value="<?php echo $filas["tel_fijo"]?>">
		  </div>
		  <div class="form-group">
		    <label>CELULAR PROPIETARIO</label>
		    <input type="text" class="form-control" id="<?php echo $filas["tel_cel_propietario"]?>" name="<?php echo $filas["tel_cel_propietario"]?>" value="<?php echo $filas["tel_cel_propietario"]?>">
		  </div>
		  <div class="form-group">
		    <label>CELULAR RESIDENTE </label>
		    <input type="text" class="form-control" id="<?php echo $filas["tel_ce_residente"]?>" name="<?php echo $filas["tel_ce_residente"]?>" value="<?php echo $filas["tel_ce_residente"]?>">
		  </div>
		  <button class="btn btn-primary" type="submit" id="gua" name="guardar" >Guardar</button>
		  <button type="reset" class="btn btn-default">Cancelar</button>
		</form>
		</div>
</form>