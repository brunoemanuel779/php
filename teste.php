<?php
$hierarquia=array(
 array(
     'nome_cargo'=>'CEO',
     'subordinados'=>array(
         //Inicio diretor COMERCIAL
       array(
       'nome_cargo'=>'Diretor Comercial',
           'subordinados'=>array(
               //Inicio Gerente de Vendas
               array(
                   'nome_cargo'=>'Gerente de Vendas'
               )
               //Termino Gerente de vendas
           )
       ),
         //Termino do array diretor Comercial
         //Inicio Diretor Financeiro
         array(
          'nome_cargo'=>'Diretor Financeiro',
             'subordinados'=>array(
                 //Inicio Gerente financeiro
              array(
             'nome_cargo'=>'Gerente Financeiro',
                  'subordinados'=>array(
                  //Inicio Supervisor de Pagamentos
                      array(
                      'nome_cargo'=>'Supervisor de Pagamentos'
                      )
                      //Termino Supervidor de pagamentos
                  )
             ),
                 //Termino gerentes financeiro
                 //Inicio Gerente de compras
                 array(
                  'nome_cargo'=>' Gerente de compras',
                     'subordinados'=>array(
                     //Iinicio Supervisor de suplementos
                         array(
                         'nome_cargo'=>'Supervisor de suplementos',
                             'subordinados'=>array(
                             array(
                             'nome_cargo'=>'Ajudante'
                             )
                             )
                         )
                     )
                 )
                 //Termino Gerente de compras
             )
         )
         //Termino diretor financeiro
     )
 )
);
function exibe ($cargos){
    $html="<ul>";
    foreach($cargos as $cargo){
        $html.="<li>";
        $html.=$cargo['nome_cargo'];
        if(isset($cargo['subordinados'])&& count($cargo['subordinados'])>0){
            $html.=exibe($cargo['subordinados']);
        }
        $html.="</li>";
    }
    $html.="</ul>";
    
    return $html;
}
echo exibe($hierarquia);
?>