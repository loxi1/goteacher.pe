<ul class="breadcrumb">
<?php
//echo "<pre>"; print_r($serv);  print_r($id_serv); echo "</pre>";
	$this->load->library('Mobile_Detect');

	$this->detect = new Mobile_Detect;

                $deviceType = ($this->detect->isMobile() ? ($this->detect->isTablet() ? 'tablet' : 'phone') : 'computer');
    if(isset($serv) && isset($id_serv))
    {
        foreach ($serv as $indice=>$value) {
            $class_ = ($value['id_servicio']==3)?('escolar'):('');
            $value['nombre'] = ($value['url']=='preuniversitaria')?('PRE'):($value['nombre']);
            $value['nombre'] = ($value['url']=='universitaria' && $deviceType=="phone")?('UNIV'):($value['nombre']);
            
            if($value['id_servicio']==$id_serv)
            {
?>
    <li class="active"><a class="<?php echo $class_;?>" href="javascript:void(0);"><?php echo $value['nombre'];?></a></li>
<?php
            }
            else
            {
?>
    <li class="completed"><a class="<?php echo $class_;?>" href="<?php echo base_url(); ?>Servicios/<?php echo $value['url'];?>"><?php echo $value['nombre'];?></a></li>
<?php

            }
        }

    }

?>
</ul>
