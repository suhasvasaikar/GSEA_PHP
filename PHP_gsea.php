<!- 
##################################################
#This file allows to incorporate GSEA in your webserver or application.
#Author: Suhas Vasaikar
##################################################
->

<?php

$begin_time=microtime(true);

$c_text='java -cp gsea2.jar -Xmx2048m xtools.gsea.GseaPreranked -gmx c5.all.v6.0.symbols.gmt -collapse false -mode Max_probe -norm meandiv -nperm 100 -rnk test_expressionfile.rnk -scoring_scheme weighted -rpt_label gsea_result -include_only_symbols true -make_sets true -plot_top_x 20 -rnd_seed timestamp -set_max 500 -set_min 15 -zip_report false -out GSEA_PHP-master/ -gui false';

$c_run=exec($c_text);

$total_time=microtime(true)-$begin_time;
echo "GSEA analysis is done. </br> 1. time".$total_time."</br>2. Result output (in same folder)";
?>

