<?php echo ($permiso->getModulo())?link_to($permiso->getModulo()->getNombre(),'modulo/edit?id='.$permiso->getFkModuloId()):"";?>