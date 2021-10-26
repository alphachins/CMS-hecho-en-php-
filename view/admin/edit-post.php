<form enctype="multipart/form-data" id="new_post_container" class="ui form new_post_container stackable">
    <input type="hidden" value="<?php echo $editpost[0]['id_publicaciones']?>" name="id_publicaciones">
    <h1>Editar Publicacion</h1>
    <p><b>Nombre De La Publicacion</b></p>
    <div class="ui input">
        <input type="text" class="txtNamePost" name="txtNamePost" placeholder="Nombre De La Publicacion" value="<?php echo $editpost[0]['nombre'];?>">
    </div>
    <p><b>Categoria</b></p>
    <div class="ui input">
        <div class="field">
            <select class="txtCategoryPost" name="txtCategoryPost">
                <option value="0">--SELECCIONAR UNA CATEGORIA--</option>
                <?php foreach($categories as $category): ?>
                <?php if($category['id_categorias'] == $editpost[0]['id_categorias']){?>
                    <option value="<?php echo $category['id_categorias']?>" selected> <?php echo $category['categorias'];?></option>
                    <?php }  else { ?>
                <option value="<?php echo $category['id_categorias']?>"> <?php echo $category['categorias'];?></option>
                <?php } ?>
                <?php endforeach;?>
            </select>
        </div>
    </div>
    <p><b>Seleccione Una Imagen</b></p>
    <div class="ui input">
        <input type="file" class="image_file" name="image_file">
    </div>
    <p><b>Publicacion</b></p>
    <textarea name="txtDescription" id="txtDescription" cols="30" rows="10"><?php echo html_entity_decode($editpost[0]['texto'])?></textarea>

    <button class="ui blue basic button UpdatePost">Actualizar Publicacion</button>
    <p class="clearfix"></p>
</form>
