<!- 
##################################################
#This file allows to incorporate GSEA in your webserver or application.
#Author: Suhas Vasaikar
##################################################
->

<?php

$begin_time=microtime(true);

$command='java -Xmx1024m -cp gsea2.jar xtools.gsea.Gsea -res Leukemia.gct -cls Leukemia.cls -gmx c5.all.v6.0.symbols.gmt -collapse false -out Output/ -gui false';

//Other parameters
//$c_text='java -Xmx512m xtools.gsea.Gsea -res Leukemia.gct -cls Leukemia.cls -gmx c5.all.v6.0.symbols.gmt -collapse true -mode Max_probe -norm meandiv -nperm 1000 -permute phenotype -rnd_type no_balance -scoring_scheme weighted -rpt_label my_analysis -metric Signal2Noise -sort real -order descending -include_only_symbols true -make_sets true -median false -num 100 -plot_top_x 20 -rnd_seed timestamp -save_rnd_lists false -set_max 500 -set_min 15 -zip_report false -out Output/ -gui false';

$c_run=exec($command);

$total_time=microtime(true)-$begin_time;
echo "GSEA analysis is done. </br> 1. time".$total_time."</br>2. Result output (in output folder)";
?>
